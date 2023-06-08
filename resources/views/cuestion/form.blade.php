<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('questions') }}
            {{ Form::text('questions', $cuestion->questions, ['class' => 'form-control' . ($errors->has('questions') ? ' is-invalid' : ''), 'placeholder' => 'Questions']) }}
            {!! $errors->first('questions', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('answers') }}
            {{ Form::text('answers', $cuestion->answers, ['class' => 'form-control' . ($errors->has('answers') ? ' is-invalid' : ''), 'placeholder' => 'Answers']) }}
            {!! $errors->first('answers', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>