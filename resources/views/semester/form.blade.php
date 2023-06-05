<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_semesters') }}
            {{ Form::text('name_semesters', $semester->name_semesters, ['class' => 'form-control' . ($errors->has('name_semesters') ? ' is-invalid' : ''), 'placeholder' => 'Name Semesters']) }}
            {!! $errors->first('name_semesters', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>