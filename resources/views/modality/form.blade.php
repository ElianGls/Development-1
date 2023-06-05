<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_modalities') }}
            {{ Form::text('name_modalities', $modality->name_modalities, ['class' => 'form-control' . ($errors->has('name_modalities') ? ' is-invalid' : ''), 'placeholder' => 'Name Modalities']) }}
            {!! $errors->first('name_modalities', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description_modalities') }}
            {{ Form::text('description_modalities', $modality->description_modalities, ['class' => 'form-control' . ($errors->has('description_modalities') ? ' is-invalid' : ''), 'placeholder' => 'Description Modalities']) }}
            {!! $errors->first('description_modalities', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>