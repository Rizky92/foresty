<!-- Nama Latin Field -->
<div class="form-group">
    {!! Form::label('nama_latin', 'Nama Latin:') !!}
    <p>{{ $koleksiHerbarium->nama_latin }}</p>
</div>

<!-- Collector Field -->
<div class="form-group">
    {!! Form::label('collector', 'Collector:') !!}
    <p>{{ $koleksiHerbarium->collector }}</p>
</div>

<!-- Number Field -->
<div class="form-group">
    {!! Form::label('number', 'Number:') !!}
    <p>{{ $koleksiHerbarium->number }}</p>
</div>

<!-- Prefix Field -->
<div class="form-group">
    {!! Form::label('prefix', 'Prefix:') !!}
    <p>{{ $koleksiHerbarium->prefix }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $koleksiHerbarium->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $koleksiHerbarium->updated_at }}</p>
</div>

