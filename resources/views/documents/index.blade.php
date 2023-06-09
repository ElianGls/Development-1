@extends('layouts.app')

@section('template_title')
    Department
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
    
                <div class="card">
                    <div class="card-body">
                            <form method="POST" action="{{route('documents.store')}}" enctype="multipart/form-data">
                                @csrf
                                    
                                    

                                    <div class="row mb-3">
                                        <label for="boleta" class="col-md-4 col-form-label text-md-end">{{ __('Carga de documentos') }}</label>
                                    <div class="col-md-6">

                                    <input class="form-control" type="file" name="boleta">
        </div>
    </div>

                      <input type="hidden" value="{{Auth()->user()->id}}" name="modificado">
                      <input type="hidden"  name="idal">

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Agregar archivos') }}
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
<div class="card card-default">
                

@endsection

