@extends('layouts.app')

@section('template_title')
    {{ $administrator->name ?? "{{ __('Show') Administrator" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Administrator</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('administrators.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $administrator->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Num Administrators:</strong>
                            {{ $administrator->num_administrators }}
                        </div>
                        <div class="form-group">
                            <strong>Id Departments:</strong>
                            {{ $administrator->id_departments }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
