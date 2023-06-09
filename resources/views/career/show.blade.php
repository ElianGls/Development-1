@extends('layouts.app')

@section('template_title')
    {{ $career->name ?? "{{ __('Show') Career" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Career</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('careers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Careers:</strong>
                            {{ $career->name_careers }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
