@extends('layouts.app')

@section('template_title')
    Department
@endsection

@section('content')
   <!--div class ="row">
        <div class = "col-lg-12">
            <form method="POST" enctype="multipart/form" id =  "update-document" actions = "{{route ('documents.index')}}">
                    @csrf
                <div class = "row">
                    <div class = "form-group">
                        <inpunt type="file" name="document" placeholder="Selecciona los documentos" id="file">
                            @error ('file')
                            <div class = "alert alert-danger mt-1 mb-1">{{$message}}></div>
                            @enderror
                    </div>
                </div>
                <div class="mb-3">
                        <label for="formFile" class="form-label">Seleccionar archivo</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                <div class = "col-md-12">
                    <button type = "submit" class = "btn btn-primary" id = "submit">enviar</button>
                </div>
            </form >
        </div>
    </div>-->

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
    
            <div class="card">
                 <center>
                <div class="card-header" style="background-color: #A33451; color: #fff;">{{ __('Actualizar Información') }}</div>
                </center>

                <div class="card-body">
                    <form method="POST" action="{{route('documents.store')}}" enctype="multipart/form-data">
                        @csrf
                        <center><h2>SUBIR BOLETA PERIODO AGOSTO 2022- DICIEMBRE 2022</h2></center>
                        <div class="row mb-3">
                        <label for="boleta" class="col-md-4 col-form-label text-md-end">{{ __('Actualizar Boleta') }}</label>
                        <div class="col-md-6">

 <input class="form-control" type="file" name="boleta">
 </div>
</div>

                      <input type="hidden" value="{{Auth()->user()->id}}" name="modificado">
                      <input type="hidden"  name="idal">

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Subir Boleta') }}
                                </button>

                                @php
                                if(!empty($alumno->periodo->boleta)){
                                $boleta = $alumno->periodo->boleta;

                                }else{
                                 $alergia ='Ninguna';
                                }
                                @endphp
                              
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection

