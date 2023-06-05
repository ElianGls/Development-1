<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('weekday') }}
            {{ Form::text('weekday', $schedule->weekday, ['class' => 'form-control' . ($errors->has('weekday') ? ' is-invalid' : ''), 'placeholder' => 'Weekday']) }}
            {!! $errors->first('weekday', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('start_time') }}
            {{ Form::text('start_time', $schedule->start_time, ['class' => 'form-control' . ($errors->has('start_time') ? ' is-invalid' : ''), 'placeholder' => 'Start Time']) }}
            {!! $errors->first('start_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('end_time') }}
            {{ Form::text('end_time', $schedule->end_time, ['class' => 'form-control' . ($errors->has('end_time') ? ' is-invalid' : ''), 'placeholder' => 'End Time']) }}
            {!! $errors->first('end_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>