@extends('layouts.app')

@section('template_title')
    Department
@endsection

@section('content')
<div class="container">
            <div class="row">
                <div class="col-12 m-4"></div>
                <div class="col-12 m-4"></div>

                <div class="col-12 border-bottom mb-4">
                    <h2 class="text-center"><b>1. Infórmate</b></h2>
                </div>

                <div class="col-12">
                    <h5 class="text-center mb-3"><b>El 15 de Noviembre al 12 de Diciembre de 2022</b></h5>

                    <ul class="list-group mb-3 shadow-sm">
                        <li class="list-group-item text-center color-official-primary">
                            <b>Intrucciones</b>
                        </li>
                        <li class="list-group-item">
                            <b>1.1</b> Requisitos para realizar tu <b>Residencia Profesional</b>:
                            <div class="p-1"></div>
                            <ul>
                                <li>Tener activo tu correo institucional para realizar el proceso.</li>
                                <li>Contar con al menos el 80% de tus créditos.</li>
                                <li>
                                    Es necesario que tengas vigencia de seguro social, recuerda que por ser parte del
                                    ITSMT, cuentas con un seguro facultativo. Puedes descargar tu vigencia dando
                                    <a href="https://serviciosdigitales.imss.gob.mx/gestionAsegurados-web-externo/vigencia" target="_blank" class="link-primary">clic aquí</a>.
                                </li>
                                <li>
                                    Deberás de escanear tu credencial de estudiante de ambos lados y subirla al enlace.
                                </li>
                                <li>
                                    Todos los documentos que se te solicitan subir, deberán ser legibles y en formato PDF.
                                </li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <b>1.2</b> Para tener mayor información sobre el proceso de <b>Residencia Profesional</b>:
                            <div class="p-1"></div>
                            <ul>
                                <li>
                                    Para acceder a los <b>Documentos de Residencia Profesional</b> da
                                    <a href="https://drive.google.com/drive/folders/1bjAeXqGVWVBI8d002okGHLafIWh3Pxee?usp=sharing" target="_blank" class="link-primary">clic aquí</a>.
                                </li>
                                <li>
                                    Para acceder a la <b>Presentación de Residencia Profesional</b>
                                    <a href="https://docs.google.com/presentation/d/1TA2kX6Yxm1UwCxSFtkVwsbxykjXVOSJN/edit?usp=sharing&amp;ouid=102595036621472639670&amp;rtpof=true&amp;sd=true" target="_blank" class="link-primary">clic aquí</a>.
                                </li>
                                <li>
                                    Para acceder al <b>Calendario de Residencia Profesional</b>
                                    <a href="https://drive.google.com/file/d/1aTOoUwRl0Siyehma3mpNEfYTv0u3bKa3/view?usp=share_link" target="_blank" class="link-primary">clic aquí</a>.
                                </li>
                                <li>
                                    Para acceder al <b>Banco de Proyectos</b>
                                    <a href="https://docs.google.com/spreadsheets/d/1D12lNi0OXi44g0KlgePnbKijcgI-7FsH/edit?usp=share_link&amp;ouid=102595036621472639670&amp;rtpof=true&amp;sd=true" target="_blank" class="link-primary">clic aquí</a>.
                                </li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <b>1.3</b> Si ya cumples con los requisitos que menciona la presentación de Residencia Profesional,
                            carga los siguientes formatos al enlace el boton de abajo.
                            <div class="p-1"></div>
                            <ul>
                                <li>Solicitud de residencia profesional.</li>
                                <li>Constancia de liberación de los cincos créditos.</li>
                                <li>Constancia de liberación de servicio social.</li>
                                <li>Carta compromiso.</li>
                                <li>Carta responsiva.</li>
                                <li>Anteproyecto.</li>
                                <li>Vigencia de Seguro Facultativo</li>
                            </ul>

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
                        </li>
                    </ul>

                    <p class="text-justify ">
                        <b class="text-danger">Aclaraciones:</b> Si tienes alguna duda, puedes mandar un mensaje al
                        siguiente correo <a class="link-secondary">servicioyresidencia@tecmartinez.edu.mx</a>
                    </p>

                </div>
            </div>
            
            
            
            
            
            <div class="row">
                <div class="m-4"></div>

                <div class="col-12 border-bottom mb-4">
                    <h2 class="text-center"><b>2. Entrega de Liberación de Servicio Social y Carta Compromiso</b></h2>
                </div>

                <div class="col-12">
                    <h5 class="text-center mb-3"><b>El 9 de Enero del 2023</b></h5>

                    <ul class="list-group mb-3 shadow-sm">
                        <li class="list-group-item text-center color-official-primary">
                            <b>Instrucciones</b>
                        </li>
                         <li class="list-group-item">
                          <b>2.1</b>  Favor de subir la Luberación de Servicio Social y Carta Compromiso
                            <div class="p-1"></div>

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
                            <div class="p-1"></div>
                          
                        </li>
                    

                </ul></div>
            </div>
            
            
            
            
            
            
        
            <div class="row">
                <div class="m-4"></div>

                <div class="col-12 border-bottom mb-4">
                    <h2 class="text-center"><b>3. Entrega de Carta Presentación y Aceptación</b></h2>
                </div>

                <div class="col-12">
                    <h5 class="text-center mb-3"><b>El 07 de Febrero del 2023</b></h5>

                    <ul class="list-group mb-3 shadow-sm">
                        <li class="list-group-item text-center color-official-primary">
                            <b>Intrucciones</b>
                        </li>
                        <li class="list-group-item">
                            <b>2.1</b> Tras recibir tu carta de presentación por correo electrónico, ésta deberá de ser
                            firmada y sellada por la empresa en donde realizarás tu Residencia Profesional, al igual, ellos
                            deberán de proporcionarte una carta de aceptación <b>firmada y sellada</b>, cuando obtengas
                            ambos documentos firmados y sellados, deberás de subirlos en el siguiente enlace.

                            <div class="p-1"></div>

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
                            <div class="p-1"></div>
                            <b>Notas:</b>
                            <ul>
                                <li>
                                    Puedes descargar el ejemplo de <b>Carta de Aceptación de Residencia Profesional</b> para tu
                                    empresa dando
                                    <a href="https://drive.google.com/file/d/17wzXx_5nrKkMPyZCHQv4gAZBg0NHXjIU/view?usp=sharing" target="_blank" class="link-primary">
                                        clic aquí
                                    </a>.
                                </li>
                                <li>
                                    Todos los documentos que se te pide que subas deberán de ser legibles y estar en
                                    formato PDF.
                                </li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <b>2.2</b> Es necesario que mantengas en resguardo tu documentación original para
                            integrar de forma física a tu expediente para cuando el
                            <b>Depto. de Servicio Social y Residencia Profesional</b> lo solicite.
                        </li>
                    </ul>

                    <p class="text-justify ">
                        <b class="text-danger">Aclaraciones:</b> Si tienes alguna duda, puedes mandar un mensaje al
                        siguiente correo <a class="link-secondary">servicioyresidencia@tecmartinez.edu.mx</a>
                    </p>

                </div>
            </div>

            <div class="row">
                <div class="m-4"></div>

                <div class="col-12 border-bottom mb-4">
                    <h2 class="text-center"><b>4. Plan de Trabajo</b></h2>
                </div>

                <div class="col-12">
                    <h5 class="text-center mb-3"><b>El 13 de Febrero del 2023</b></h5>

                    <ul class="list-group mb-3 shadow-sm">
                        <li class="list-group-item text-center color-official-primary">
                            <b>Intrucciones</b>
                        </li>
                        <li class="list-group-item">
                            <b>3.1</b>  Favor de subir plan de trabajo de Residencia Profesional

                            <div class="p-1"></div>

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
                        </li>
                    </ul>

                    <p class="text-justify ">
                        <b class="text-danger">Aclaraciones:</b> Si tienes alguna duda, puedes mandar un mensaje al
                        siguiente correo <a class="link-secondary">servicioyresidencia@tecmartinez.edu.mx</a>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="m-4"></div>

                <div class="col-12 border-bottom mb-4">
                    <h2 class="text-center"><b>5. 1er Reporte y Evaluación</b></h2>
                </div>

                <div class="col-12">
                    <h5 class="text-center mb-3"><b>El 2 de Marzo del 2023</b></h5>

                    <ul class="list-group mb-3 shadow-sm">
                        <li class="list-group-item text-center color-official-primary">
                            <b>Intrucciones</b>
                        </li>
                        <li class="list-group-item">
                            <b>4.1</b> En este reporte deberás de subir:
                            <div class="p-1"></div>
                            <ul>
                                <li>Reporte de Actividades de Residencia Profesional.</li>
                                <li>Evaluación y seguimiento de Residencia Profesional.</li>
                                <li>Plan de trabajo o cronograma actualizado de actividades de Residencia Profesional.</li>
                                <li>Registro de asesorías.</li>
                                <li>Evaluación del asesor interno.</li>
                            </ul>
                            <div class="p-1"></div>
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
                        </li>
                    </ul>

                    <p class="text-justify ">
                        <b class="text-danger">Aclaraciones:</b> Si tienes alguna duda, puedes mandar un mensaje al
                        siguiente correo <a class="link-secondary">servicioyresidencia@tecmartinez.edu.mx</a>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="m-4"></div>

                <div class="col-12 border-bottom mb-4">
                    <h2 class="text-center"><b>6. 2do Reporte y Evaluación</b></h2>
                </div>

                <div class="col-12">
                    <h5 class="text-center mb-3"><b>El 21 de Abril del 2023</b></h5>

                    <ul class="list-group mb-3 shadow-sm">
                        <li class="list-group-item text-center color-official-primary">
                            <b>Intrucciones</b>
                        </li>
                        <li class="list-group-item">
                            <b>5.1</b> En este reporte deberás de subir:
                            <div class="p-1"></div>
                            <ul>
                                <li>Reporte de Actividades de Residencia Profesional.</li>
                                <li>Evaluación y seguimiento de Residencia Profesional.</li>
                                <li>Plan de trabajo o cronograma actualizado de actividades de Residencia Profesional.</li>
                                <li>Registro de asesorías.</li>
                                <li>Evaluación del asesor interno.</li>
                            </ul>
                            <div class="p-1"></div>
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
                        </li>
                    </ul>

                    <p class="text-justify ">
                        <b class="text-danger">Aclaraciones:</b> Si tienes alguna duda, puedes mandar un mensaje al
                        siguiente correo <a class="link-secondary">servicioyresidencia@tecmartinez.edu.mx</a>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="m-4"></div>

                <div class="col-12 border-bottom mb-4">
                    <h2 class="text-center"><b>7. 3er Reporte, Evaluación y Reporte Final</b></h2>
                </div>

                <div class="col-12">
                    <h5 class="text-center mb-3"><b>El 3 de Junio del 2023</b></h5>

                    <ul class="list-group mb-3 shadow-sm">
                        <li class="list-group-item text-center color-official-primary">
                            <b>Intrucciones</b>
                        </li>
                        <li class="list-group-item">
                            <b>6.1</b> En este reporte deberás de subir:
                            <div class="p-1"></div>
                            <ul>
                                <li>Reporte de Actividades de Residencia Profesional.</li>
                           
                                <li>Plan de trabajo o cronograma actualizado de actividades de residencia profesional.</li>
                                <li>Registro de asesorías.</li>
                                <li>Evaluación de reporte.</li>
                                <li>Evaluación del asesor interno.</li>
                            </ul>
                            <div class="p-1"></div>
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
                        </li>
                    </ul>

                    <p class="text-justify ">
                        <b class="text-danger">Aclaraciones:</b> Si tienes alguna duda, puedes mandar un mensaje al
                        siguiente correo <a class="link-secondary">servicioyresidencia@tecmartinez.edu.mx</a>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="m-4"></div>

                <div class="col-12 border-bottom mb-4">
                    <h2 class="text-center"><b>8. Carta de Terminación de Residencia Profesional</b></h2>
                </div>

                <div class="col-12">
                    <h5 class="text-center mb-3"><b>El 05 de Junio del 2023</b></h5>

                    <ul class="list-group mb-3 shadow-sm">
                        <li class="list-group-item text-center color-official-primary">
                            <b>Intrucciones</b>
                        </li>
                        <li class="list-group-item">
                            <b>7.1</b> Una vez terminado tu período de Residencia Profesional, deberás de
                            <b>solicitar tu Carta de Terminación</b> a la empresa en donde hiciste tu
                            <b>Residencia Profesional</b>.
                            <br>
                             Puedes descargar el ejemplo de <b>Carta de Terminación de Residencia Profesional</b> para tu
                                    empresa dando
                                    <a href="https://drive.google.com/file/d/1ZG8zj-GrJTfoaQ9pERVZgCh_nFcXCVLb/view?usp=sharing" target="_blank" class="link-primary">clic aquí</a>.                            
                        </li>
                        <li class="list-group-item">
                            <b>7.2</b> Cuando hayas recibido tu carta de terminación, súbela a el siguiente enlace.
                            <div class="p-1"></div>
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
                          
                        </li>
                    </ul>

                    <p class="text-justify ">
                        <b class="text-danger">Aclaraciones:</b> Si tienes alguna duda, puedes mandar un mensaje al
                        siguiente correo <a class="link-secondary">servicioyresidencia@tecmartinez.edu.mx</a>
                    </p>
                </div>

                <div class="col-12 m-4"></div>

            </div>

        </div>

@endsection

