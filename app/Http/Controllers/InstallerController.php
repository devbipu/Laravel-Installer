<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstallerController extends Controller
{
    //requirements
    function installRequirements(){
        // return view('installer.requirements');

       $allCheck = [
            "phpVersion" => phpversion(),
            // "BCMath" => extension_loaded('btmath'),
            "ctype" => extension_loaded('ctype'),
            "fileInfo" => extension_loaded('Fileinfo'),
            "json" => extension_loaded('json'),
            "mbString" => extension_loaded('mbstring'),
            "Openssl" => extension_loaded('openssl'),
            "tokenizer" => extension_loaded('tokenizer'),
            "xml" => extension_loaded('xml'),
            "pdo" => extension_loaded ('PDO' ),
       ];

        // $allEXT = [$phpVersion, $BCMath, $ctype, $fileInfo, $json, $mbString, $Openssl, $tokenizer, $xml, $pdo];

        if($allCheck){
            return view('installer.requirements', [
                "datas" => $allCheck,
            ]);
        }else{
            return "false";
        }
    }

    // function configEdit(){
    //     $path = app()->environmentFilePath();
    //     return view('installer.config_edit', [
    //         "envfile" => $path,
    //     ]);
    // }

    // function saveEnvData(Request $req){
    //     $data = $req->input('envData');
    //     $path = app()->environmentFilePath();

    //     $editRes = file_put_contents($path, $data);
    //     if($editRes){
    //         return "Done";
    //     }else{
    //         return "Not done";
    //     }
    // }

    function editconfigVisualy(){
        return view('installer.editenv_visual');
    }

}
