@extends('layouts.app')

@section('template_title')
    {{ $personalInformation->name ?? "{{ __('Show') Personal Information" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Personal Information</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personal-informations.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $personalInformation->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $personalInformation->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Birthday:</strong>
                            {{ $personalInformation->birthday }}
                        </div>
                        <div class="form-group">
                            <strong>Curp:</strong>
                            {{ $personalInformation->curp }}
                        </div>
                        <div class="form-group">
                            <strong>Civil Status:</strong>
                            {{ $personalInformation->civil_status }}
                        </div>
                        <div class="form-group">
                            <strong>Social Security:</strong>
                            {{ $personalInformation->social_security }}
                        </div>
                        <div class="form-group">
                            <strong>Country:</strong>
                            {{ $personalInformation->country }}
                        </div>
                        <div class="form-group">
                            <strong>City:</strong>
                            {{ $personalInformation->city }}
                        </div>
                        <div class="form-group">
                            <strong>Neighborhood:</strong>
                            {{ $personalInformation->neighborhood }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $personalInformation->address }}
                        </div>
                        <div class="form-group">
                            <strong>Zip:</strong>
                            {{ $personalInformation->zip }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $personalInformation->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $personalInformation->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
