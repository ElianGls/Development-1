<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_periods') }}
            {{ Form::text('name_periods', $period->name_periods, ['class' => 'form-control' . ($errors->has('name_periods') ? ' is-invalid' : ''), 'placeholder' => 'Name Periods']) }}
            {!! $errors->first('name_periods', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horas') }}
            {{ Form::text('horas', $period->horas, ['class' => 'form-control' . ($errors->has('horas') ? ' is-invalid' : ''), 'placeholder' => 'Horas']) }}
            {!! $errors->first('horas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_subjects') }}
            {{ Form::text('id_subjects', $period->id_subjects, ['class' => 'form-control' . ($errors->has('id_subjects') ? ' is-invalid' : ''), 'placeholder' => 'Id Subjects']) }}
            {!! $errors->first('id_subjects', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('start_periods') }}
            {{ Form::text('start_periods', $period->start_periods, ['class' => 'form-control' . ($errors->has('start_periods') ? ' is-invalid' : ''), 'placeholder' => 'Start Periods']) }}
            {!! $errors->first('start_periods', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('end_periods') }}
            {{ Form::text('end_periods', $period->end_periods, ['class' => 'form-control' . ($errors->has('end_periods') ? ' is-invalid' : ''), 'placeholder' => 'End Periods']) }}
            {!! $errors->first('end_periods', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>