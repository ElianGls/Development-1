@extends('layouts.app')

@section('template_title')
    {{ $campus->name ?? "{{ __('Show') Campus" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Campus</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('campuses.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Campuses:</strong>
                            {{ $campus->name_campuses }}
                        </div>
                        <div class="form-group">
                            <strong>Address Campuses:</strong>
                            {{ $campus->address_campuses }}
                        </div>
                        <div class="form-group">
                            <strong>Phone Campuses:</strong>
                            {{ $campus->phone_campuses }}
                        </div>
                        <div class="form-group">
                            <strong>Email Campuses:</strong>
                            {{ $campus->email_campuses }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
