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

<!-- Collected Date Field -->
<div class="form-group">
    {!! Form::label('collected_date', 'Collected Date:') !!}
    <p>{{ $herbarium->collected_date }}</p>
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

<!-- Country Id Field -->
<div class="form-group">
    {!! Form::label('country_id', 'Country Id:') !!}
    <p>{{ $herbarium->country->name }}</p>
</div>

<!-- Family Id Field -->
<div class="form-group">
    {!! Form::label('family_id', 'Family Id:') !!}
    <p>{{ $herbarium->family->name }}</p>
</div>

<!-- Gazetteer Id Field -->
<div class="form-group">
    {!! Form::label('gazetteer_id', 'Gazetteer Id:') !!}
    <p>{{ $herbarium->gazetteer->name }}</p>
</div>

<!-- Majore Area Id Field -->
<div class="form-group">
    {!! Form::label('majore_area_id', 'Majore Area Id:') !!}
    <p>{{ $herbarium->majoreArea->name }}</p>
</div>

<!-- Minore Area Id Field -->
<div class="form-group">
    {!! Form::label('minore_area_id', 'Minore Area Id:') !!}
    <p>{{ $herbarium->minoreArea->name }}</p>
</div>

<!-- Treetexa Id Field -->
<div class="form-group">
    {!! Form::label('treetexa_id', 'Treetexa Id:') !!}
    <p>{{ $herbarium->treetexa->name }}</p>
</div>

<!-- Flora Id Field -->
<div class="form-group">
    {!! Form::label('flora_id', 'Flora Id:') !!}
    <p>{{ $herbarium->flora->nama }}</p>
</div>

<!-- Img Path Field -->
<div class="form-group">
    {!! Form::label('img_path', 'Img Path:') !!}
    <p>{{ $herbarium->img_path }}</p>
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

