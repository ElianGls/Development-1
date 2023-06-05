@extends('layouts.app')

@section('template_title')
    {{ $advisor->name ?? "{{ __('Show') Advisor" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Advisor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('advisors.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $advisor->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Num Advisors:</strong>
                            {{ $advisor->num_advisors }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
