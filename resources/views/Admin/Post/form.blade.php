<fieldset>
    <div class="pure-control-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title') }}
        {!! $errors->first('title', '<span class="pure-form-message-inline">:message</span>') !!}
    </div>

    <div class="pure-control-group">
        {{ Form::label('text', 'Text') }}
        {{ Form::textarea('text') }}
        {!! $errors->first('text', '<span class="pure-form-message-inline">:message</span>') !!}
    </div>

    <div class="pure-control-group">
        {{ Form::label('is_published', 'Published', ['class' => 'pure-checkbox']) }}
        {{ Form::hidden('is_published', 0) }}
        {{ Form::checkbox('is_published', 1) }}
        {!! $errors->first('is_published', '<span class="pure-form-message-inline">:message</span>') !!}
    </div>

    <div class="pure-controls">
        {{ Form::submit('Save', ['class' => 'pure-button pure-button-primary']) }}
    </div>

</fieldset>