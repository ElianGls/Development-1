<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_careers') }}
            {{ Form::text('name_careers', $career->name_careers, ['class' => 'form-control' . ($errors->has('name_careers') ? ' is-invalid' : ''), 'placeholder' => 'Name Careers']) }}
            {!! $errors->first('name_careers', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>