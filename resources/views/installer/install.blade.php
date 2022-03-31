@extends('installer.layout')


@section('installerBox')
    <div class="installerInner">
        <div class="card text-center" style="">
            <div class="card-header p-4 pb-3">
                <h3 class="card-title">WIBSAS Installer</h3>
            </div>
            <div class="card-body p-4 setp_cont">
                <div class="stepWrapper step1">
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
                    <p class="card-text">Easy Installation and Setup Wizard.</p>
                    <a href="{{url('/installer/requirements')}}" class="card-link btn btn-primary">Check Requirements</a>
                </div>
            </div>
        </div>
    </div>
@endsection