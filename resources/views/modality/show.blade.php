@extends('layouts.app')

@section('template_title')
    {{ $modality->name ?? "{{ __('Show') Modality" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Modality</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('modalities.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Modalities:</strong>
                            {{ $modality->name_modalities }}
                        </div>
                        <div class="form-group">
                            <strong>Description Modalities:</strong>
                            {{ $modality->description_modalities }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
