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

<!-- Add Coll Field -->
<div class="form-group">
    {!! Form::label('add_coll', 'AddColl:') !!}
    <p>{{ $herbarium->addColl }}</p>
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

<!-- Locality Note Field -->
<div class="form-group">
    {!! Form::label('locality_note', 'Locality Note:') !!}
    <p>{{ $herbarium->locality_note }}</p>
</div>

<!-- Img Path Field -->
<div class="form-group">
    {!! Form::label('img_path', 'Img Path:') !!}
    <p><img src="{{ $herbarium->img_path }}" alt="" srcset=""></p>
</div>

<!-- Country Id Field -->
<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    <p>{{ $herbarium->country->nama }}</p>
</div>

<!-- Family Id Field -->
<div class="form-group">
    {!! Form::label('family', 'Family:') !!}
    <p>{{ $herbarium->family->nama }}</p>
</div>

<!-- Gazetteer Id Field -->
<div class="form-group">
    {!! Form::label('gazetteer', 'Gazetteer:') !!}
    <p>{{ $herbarium->gazetteer->nama }}</p>
</div>

<!-- Majore Area Id Field -->
<div class="form-group">
    {!! Form::label('majore_area', 'Majore Area:') !!}
    <p>{{ $herbarium->majoreArea->nama }}</p>
</div>

<!-- Minore Area Id Field -->
<div class="form-group">
    {!! Form::label('minore_area', 'Minore Area:') !!}
    <p>{{ $herbarium->minoreArea->nama }}</p>
</div>

<!-- Treetaxa Id Field -->
<div class="form-group">
    {!! Form::label('treetaxa', 'Treetaxa:') !!}
    <p>{{ $herbarium->treetaxa->nama }}</p>
</div>

<!-- Flora Id Field -->
<div class="form-group">
    {!! Form::label('flora', 'Flora:') !!}
    <p>{{ $herbarium->flora->nama }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $herbarium->slug }}</p>
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

