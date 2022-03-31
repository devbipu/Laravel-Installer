@extends('installer.layout')


@section('installerBox')
    <div class="installerInner">
        <div class="card text-center" style="">
            <div class="card-header p-4 pb-3">
                <h3 class="card-title">Laravel installer</h3>
                <h6 id="reportM">
                    <span class="bg-success text-white"></span>
                </h6>
            </div>
            <div class="card-body p-4 setp_cont" style="min-width: 500px;">
                <div class="stepWrapper step1">
                    <ul class="steps">
                        <li class="step-item">
                            <a href="#" title="Start">
                                <i class="bi bi-house-door-fill"></i>
                            </a>
                        </li>
                        <li class="step-item" title="Requirement">
                            <i class="bi bi-list-check"></i>
                        </li>
                        {{-- <li class="step-item" title="Permisions"><i class="bi bi-key"></i></li> --}}
                        <li class="step-item active" title="Setting"><i class="bi bi-gear"></i></li>
                        <li class="step-item" title="Install"><i class="bi bi-card-checklist"></i></li>
                    </ul>

                    <form id="envFileUpdate" class="form">
                        <textarea name="envcont" id="" class="form-control" cols="30" rows="10">
                            {{ file_get_contents($envfile); }}
                        </textarea>
                        <br>
                        <input type="submit" class="btn btn-outline-primary" value="Save file">
                    </form> <br>

                    <div class="btnCont">
                        <a href="{{url()->previous()}}" class="card-link btn btn-secondary">Go back</a>
                       
                        <a href="{{url('/installer/install')}}" class="card-link btn btn-success">Install</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('installer-js')
    <script>
        function bipuS(ident){
            return document.querySelector(ident);
        }

        const form = document.querySelector('#envFileUpdate');

        form.addEventListener('submit', (e)=>{
            e.preventDefault();
            
            var ENVdata = form.envcont.value;
            axios.post('/installer/saveenv', {envData: ENVdata})
            .then(function(res){
                bipuS('#reportM span').innerHTML = "Data saved Successfully";
                setTimeout(() => {
                    bipuS('#reportM span').innerHTML = "";
                }, 3000);
            })
            .catch(function(error){
                console.log(error)
            })
        })
    </script>
@endsection