


@extends('installer.layout')


@section('installerBox')
    <div class="installerInner">
        <div class="card" style="">
            <div class="card-header text-center p-4 pb-3">
                <h3 class="card-title">WIBSAS Installer</h3>
            </div>
            <div class="card-body p-4 setp_cont">
                <div class="stepWrapper step1">
                    <form action="" id="appSetting_form">
                        <ul class="steps">
                            <li class="step-item active">
                                <a href="#" title="Start">
                                    <i class="bi bi-house-door-fill"></i>
                                </a>
                            </li>
                            <li class="step-item" title="Requirement">
                                <i class="bi bi-list-check"></i>
                            </li>
                            <li class="step-item" title="Permisions"><i class="bi bi-key"></i></li>
                            <li class="step-item" title="Setting"><i class="bi bi-gear"></i></li>
                            <li class="step-item" title="Install"><i class="bi bi-card-checklist"></i></li>
                        </ul>
                        <div class="py-3">
                            <ul class="nav nav-tabs text-center justify-content-center" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">App Setting <i class="bi bi-gear"></i></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        Database
                                        <i class="bi bi-cloud-fog2-fill"></i>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"> 
                                        App Drivers
                                        <i class="bi bi-app-indicator"></i>
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content pt-4 mb-5" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    
                                    <div class="form-group mb-4">
                                        <label for="appname" class="form-label">App Name*</label>
                                        <input type="text" class="form-control" id="appname" placeholder="Enter your app Name...">
                                    </div>
                                    <div class="form-group">
                                        <label for="AppENV" class="form-label">App Environment</label>
                                        {{-- <input type="text" class="form-control" id="AppENV"> --}}
                                        <select name="environment" class="form-select" id="AppENV">
                                            <option value="local" selected="">Local</option>
                                            <option value="development">Development</option>
                                            <option value="qa">Qa</option>
                                            <option value="production">Production</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="appDebag" class="form-label d-block">App Debug</label>

                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="dbag" id="dbagTrue" autocomplete="off" checked>
                                            <label class="btn btn-outline-primary" for="dbagTrue">True</label>
                                        
                                            <input type="radio" class="btn-check" name="dbag" id="dbagFalse" autocomplete="off">
                                            <label class="btn btn-outline-primary" for="dbagFalse">False</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="appurl" class="form-label">App Url</label>
                                        <input type="text" class="form-control" id="appurl" placeholder="Enter your app url...">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="form-group mb-3">
                                        <label for="dbhost" class="form-label">Database Host</label>
                                        <input type="text" class="form-control" id="dbhost" placeholder="Enter your Database host...">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="dbCunnection" class="form-label">Database Cunnection</label>
                                        <input type="text" class="form-control" id="dbCunnection" placeholder="Enter your database cunnection...">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="dbport" class="form-label">Database port</label>
                                        <input type="number" class="form-control" id="dbport" placeholder="Enter your Database port...">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="dbname" class="form-label">Database name</label>
                                        <input type="text" class="form-control" id="dbname" placeholder="Enter your Database name...">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="dbuser" class="form-label">Database User Name</label>
                                        <input type="text" class="form-control" id="dbuser" placeholder="Enter your DB User Name...">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="dbpass" class="form-label">Database Password</label>
                                        <input type="text" class="form-control" id="dbpass" placeholder="Enter your DB password...">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    Extra setting
                                </div>
                            </div>
                        </div>
                        <a href="{{url('/installer/requirements')}}" class="card-link btn btn-primary">Check Requirements</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
