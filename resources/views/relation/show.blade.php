@extends('layouts.app')

@section('template_title')
    {{ $relation->name ?? "{{ __('Show') Relation" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Relation</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('relations.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $relation->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Period Id:</strong>
                            {{ $relation->period_id }}
                        </div>
                        <div class="form-group">
                            <strong>Document Id:</strong>
                            {{ $relation->document_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
