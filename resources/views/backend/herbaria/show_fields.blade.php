<!-- Latin Field -->
<div class="form-group">
    {!! Form::label('latin', 'Latin:') !!}
    <p>{{ $herbarium->latin }}</p>
</div>

<!-- Collector Field -->
<div class="form-group">
    {!! Form::label('collector', 'Collector:') !!}
    <p>{{ $herbarium->collector }}</p>
</div>

<!-- Number Field -->
<div class="form-group">
    {!! Form::label('number', 'Number:') !!}
    <p>{{ $herbarium->number }}</p>
</div>

<!-- Prefix Field -->
<div class="form-group">
    {!! Form::label('prefix', 'Prefix:') !!}
    <p>{{ $herbarium->prefix }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $herbarium->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $herbarium->updated_at }}</p>
</div>

