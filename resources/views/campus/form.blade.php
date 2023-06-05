<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_campuses') }}
            {{ Form::text('name_campuses', $campus->name_campuses, ['class' => 'form-control' . ($errors->has('name_campuses') ? ' is-invalid' : ''), 'placeholder' => 'Name Campuses']) }}
            {!! $errors->first('name_campuses', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address_campuses') }}
            {{ Form::text('address_campuses', $campus->address_campuses, ['class' => 'form-control' . ($errors->has('address_campuses') ? ' is-invalid' : ''), 'placeholder' => 'Address Campuses']) }}
            {!! $errors->first('address_campuses', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone_campuses') }}
            {{ Form::text('phone_campuses', $campus->phone_campuses, ['class' => 'form-control' . ($errors->has('phone_campuses') ? ' is-invalid' : ''), 'placeholder' => 'Phone Campuses']) }}
            {!! $errors->first('phone_campuses', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email_campuses') }}
            {{ Form::text('email_campuses', $campus->email_campuses, ['class' => 'form-control' . ($errors->has('email_campuses') ? ' is-invalid' : ''), 'placeholder' => 'Email Campuses']) }}
            {!! $errors->first('email_campuses', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>