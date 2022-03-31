@extends('installer.layout')


@section('installerBox')
    <div class="installerInner">
        <div class="card text-center" style="">
            <div class="card-header p-4 pb-3">
                <h3 class="card-title">Laravel installer</h3>
            </div>
            <div class="card-body p-4 setp_cont">
                <div class="stepWrapper step2">
                    <ul class="steps pl-0">
                        <li class="step-item ">
                            <a href="{{url('/')}}" title="Start">
                                <i class="bi bi-house-door-fill"></i>
                            </a>
                        </li>
                        <li class="step-item active" title="Requirement">
                            <i class="bi bi-list-check"></i>
                        </li>
                        {{-- <li class="step-item" title="Permisions"><i class="bi bi-key"></i></li> --}}
                        <li class="step-item" title="Setting"><i class="bi bi-gear"></i></li>
                        <li class="step-item" title="Install"><i class="bi bi-card-checklist"></i></li>
                    </ul>
                    <div class="requirements_list">
                        <table class="table table-striped text-start">
                            <tbody>
                                <tr>
                                    <th>PHP(version 7.0.0 + required)</th>
                                    <th>
                                        @php
                                            if($datas['phpVersion'] > 7.0){ 
                                            echo $datas['phpVersion'];
                                        } else{ @endphp
                                            <i class="bi bi-x-square text-danger"></i>
                                        @php
                                            } 
                                        @endphp
                                    </th>
                                </tr>
                                {{-- <tr>
                                    <th>BCMath</th>
                                    <th>
                                        @php
                                            if($datas['BCMath'] == 1){ @endphp
                                            <i class="bi bi-check2-square text-success"></i>
                                        @php } else{ @endphp
                                            <i class="bi bi-x-square text-danger"></i>
                                        @php
                                            } 
                                        @endphp
                                    </th>
                                </tr> --}}
                                <tr>
                                    <th>Ctype</th>
                                    <th>
                                        @php
                                            if($datas['ctype'] == 1){ @endphp
                                            <i class="bi bi-check2-square text-success"></i>
                                        @php } else{ @endphp
                                            <i class="bi bi-x-square text-danger"></i>
                                        @php
                                            } 
                                        @endphp
                                    </th>
                                </tr>
                                <tr>
                                    <th>File Info </th>
                                    <th>
                                        @php
                                            if($datas['fileInfo'] == 1){ @endphp
                                            <i class="bi bi-check2-square text-success"></i>
                                        @php } else{ @endphp
                                            <i class="bi bi-x-square text-danger"></i>
                                        @php
                                            } 
                                        @endphp
                                    </th>
                                </tr>
                                <tr>
                                    <th>Json</th>
                                    <th>
                                        @php
                                            if($datas['json'] == 1){ @endphp
                                            <i class="bi bi-check2-square text-success"></i>
                                        @php } else{ @endphp
                                            <i class="bi bi-x-square text-danger"></i>
                                        @php
                                            } 
                                        @endphp
                                    </th>
                                </tr>
                                <tr>
                                    <th>MbString </th>
                                    <th>
                                        @php
                                            if($datas['mbString'] == 1){ @endphp
                                            <i class="bi bi-check2-square text-success"></i>
                                        @php } else{ @endphp
                                            <i class="bi bi-x-square text-danger"></i>
                                        @php
                                            } 
                                        @endphp
                                    </th>
                                </tr>
                                <tr>
                                    <th>Openssl</th>
                                    <th>
                                        @php
                                            if($datas['Openssl'] == 1){ @endphp
                                            <i class="bi bi-check2-square text-success"></i>
                                        @php } else{ @endphp
                                            <i class="bi bi-x-square text-danger"></i>
                                        @php
                                            } 
                                        @endphp
                                    </th>
                                </tr>
                                <tr>
                                    <th>Tokenizer</th>
                                    <th>
                                        @php
                                            if($datas['tokenizer'] == 1){ @endphp
                                            <i class="bi bi-check2-square text-success"></i>
                                        @php } else{ @endphp
                                            <i class="bi bi-x-square text-danger"></i>
                                        @php
                                            } 
                                        @endphp
                                    </th>
                                </tr>
                                <tr>
                                    <th>XML</th>
                                    <th>
                                        @php
                                            if($datas['xml'] == 1){ @endphp
                                            <i class="bi bi-check2-square text-success"></i>
                                        @php } else{ @endphp
                                            <i class="bi bi-x-square text-danger"></i>
                                        @php
                                            } 
                                        @endphp
                                    </th>
                                </tr>
                                <tr>
                                    <th>PDO</th>
                                    <th>
                                        @php
                                            if($datas['pdo'] == 1){ @endphp
                                            <i class="bi bi-check2-square text-success"></i>
                                        @php } else{ @endphp
                                            <i class="bi bi-x-square text-danger"></i>
                                        @php
                                            } 
                                        @endphp
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="btnCont">
                        <a href="{{url()->previous()}}" class="card-link btn btn-secondary">Go back</a>
                    
                        @if($datas['phpVersion'] >= '7.0.0' && $datas['ctype'] == 1 && $datas['fileInfo'] ==1 && $datas['json'] ==1 && $datas['mbString'] ==1 && $datas['Openssl'] ==1 && $datas['tokenizer'] ==1 && $datas['xml'] ==1 && $datas['pdo'] ==1)
                            <a href="{{url('/installer/config-visual')}}" class="card-link btn btn-success">Go to next</a>
                        @else
                            <a href="{{url('/installer/configedit')}}" class="card-link btn btn-danger disabled">Go to next</a>
                        @endif
                    </div>
                    


                </div>
            </div>
        </div>
    </div>
@endsection
