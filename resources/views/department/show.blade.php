@extends('layouts.app')

@section('template_title')
    {{ $department->name ?? "{{ __('Show') Department" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Department</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('departments.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Departments:</strong>
                            {{ $department->name_departments }}
                        </div>
                        <div class="form-group">
                            <strong>Id Campuses:</strong>
                            {{ $department->id_campuses }}
                        </div>
                        <div class="form-group">
                            <strong>Description Departments:</strong>
                            {{ $department->description_departments }}
                        </div>
                        <div class="form-group">
                            <strong>Email Departments:</strong>
                            {{ $department->email_departments }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
