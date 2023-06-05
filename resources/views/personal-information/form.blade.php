<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $personalInformation->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gender') }}
            {{ Form::text('gender', $personalInformation->gender, ['class' => 'form-control' . ($errors->has('gender') ? ' is-invalid' : ''), 'placeholder' => 'Gender']) }}
            {!! $errors->first('gender', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('birthday') }}
            {{ Form::text('birthday', $personalInformation->birthday, ['class' => 'form-control' . ($errors->has('birthday') ? ' is-invalid' : ''), 'placeholder' => 'Birthday']) }}
            {!! $errors->first('birthday', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('curp') }}
            {{ Form::text('curp', $personalInformation->curp, ['class' => 'form-control' . ($errors->has('curp') ? ' is-invalid' : ''), 'placeholder' => 'Curp']) }}
            {!! $errors->first('curp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('civil_status') }}
            {{ Form::text('civil_status', $personalInformation->civil_status, ['class' => 'form-control' . ($errors->has('civil_status') ? ' is-invalid' : ''), 'placeholder' => 'Civil Status']) }}
            {!! $errors->first('civil_status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('social_security') }}
            {{ Form::text('social_security', $personalInformation->social_security, ['class' => 'form-control' . ($errors->has('social_security') ? ' is-invalid' : ''), 'placeholder' => 'Social Security']) }}
            {!! $errors->first('social_security', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('country') }}
            {{ Form::text('country', $personalInformation->country, ['class' => 'form-control' . ($errors->has('country') ? ' is-invalid' : ''), 'placeholder' => 'Country']) }}
            {!! $errors->first('country', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('city') }}
            {{ Form::text('city', $personalInformation->city, ['class' => 'form-control' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'City']) }}
            {!! $errors->first('city', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('neighborhood') }}
            {{ Form::text('neighborhood', $personalInformation->neighborhood, ['class' => 'form-control' . ($errors->has('neighborhood') ? ' is-invalid' : ''), 'placeholder' => 'Neighborhood']) }}
            {!! $errors->first('neighborhood', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $personalInformation->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('zip') }}
            {{ Form::text('zip', $personalInformation->zip, ['class' => 'form-control' . ($errors->has('zip') ? ' is-invalid' : ''), 'placeholder' => 'Zip']) }}
            {!! $errors->first('zip', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone') }}
            {{ Form::text('phone', $personalInformation->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $personalInformation->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>