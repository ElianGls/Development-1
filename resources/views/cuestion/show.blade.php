@extends('layouts.app')

@section('template_title')
    {{ $cuestion->name ?? "{{ __('Show') Cuestion" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cuestion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cuestions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Questions:</strong>
                            {{ $cuestion->questions }}
                        </div>
                        <div class="form-group">
                            <strong>Answers:</strong>
                            {{ $cuestion->answers }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
