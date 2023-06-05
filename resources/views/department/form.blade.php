<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_departments') }}
            {{ Form::text('name_departments', $department->name_departments, ['class' => 'form-control' . ($errors->has('name_departments') ? ' is-invalid' : ''), 'placeholder' => 'Name Departments']) }}
            {!! $errors->first('name_departments', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_campuses') }}
            {{ Form::text('id_campuses', $department->id_campuses, ['class' => 'form-control' . ($errors->has('id_campuses') ? ' is-invalid' : ''), 'placeholder' => 'Id Campuses']) }}
            {!! $errors->first('id_campuses', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description_departments') }}
            {{ Form::text('description_departments', $department->description_departments, ['class' => 'form-control' . ($errors->has('description_departments') ? ' is-invalid' : ''), 'placeholder' => 'Description Departments']) }}
            {!! $errors->first('description_departments', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email_departments') }}
            {{ Form::text('email_departments', $department->email_departments, ['class' => 'form-control' . ($errors->has('email_departments') ? ' is-invalid' : ''), 'placeholder' => 'Email Departments']) }}
            {!! $errors->first('email_departments', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>