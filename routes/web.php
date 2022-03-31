<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstallerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\SystemConfigTable;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {

    try {
        if(SystemConfigTable::count() > 0){
            return view('home');
        }else{
            return view('auth.register');
        }
    }catch (Exception $th) {
        return view('installer.install');
    }
    // return view('home');
});

Auth::routes();

Route::get('/admin', [HomeController::class, 'index'])->name('admin-db');


Route::get('/make-migration', [HomeController::class, 'makeMigration']);


// Route::get('/roleback-migration', [HomeController::class, 'resetDatabase']);


Route::get('/run', [HomeController::class, 'EnvConfig']);

Route::get('/dynamic-redirect', [HomeController::class, "testRed"]);



// Installer routs

Route::get("/installer/requirements", [InstallerController::class, "installRequirements"]);
// Route::get("/installer/configedit", [InstallerController::class, "configEdit"]);

// save env
// Route::post("/installer/saveenv", [InstallerController::class, "saveEnvData"]);


Route::get("/installer/install", function(){
    $migrateRes = Artisan::call("migrate");

    if($migrateRes){
        return redirect("/");
    }else{
        // return redirect(url()->previous());
        return redirect("/");
    }


});



Route::get("/installer/config-visual", [InstallerController::class, "editconfigVisualy"]);