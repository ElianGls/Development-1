<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $administrator->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('num_administrators') }}
            {{ Form::text('num_administrators', $administrator->num_administrators, ['class' => 'form-control' . ($errors->has('num_administrators') ? ' is-invalid' : ''), 'placeholder' => 'Num Administrators']) }}
            {!! $errors->first('num_administrators', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_departments') }}
            {{ Form::text('id_departments', $administrator->id_departments, ['class' => 'form-control' . ($errors->has('id_departments') ? ' is-invalid' : ''), 'placeholder' => 'Id Departments']) }}
            {!! $errors->first('id_departments', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>