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
    {!! Form::label('add_coll', 'Add Coll:') !!}
    <p>{{ $herbarium->add_coll }}</p>
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

<!-- Country Field -->
<div class="form-group">
    {!! Form::label('country_id', 'Country:') !!}
    <p>{{ $herbarium->country->nama }}</p>
</div>

<!-- Family Field -->
<div class="form-group">
    {!! Form::label('family_id', 'Family:') !!}
    <p>{{ $herbarium->family->nama }}</p>
</div>

<!-- Gazetteer Field -->
<div class="form-group">
    {!! Form::label('gazetteer_id', 'Gazetteer:') !!}
    <p>{{ $herbarium->gazetteer->nama }}</p>
</div>

<!-- Majore Area Field -->
<div class="form-group">
    {!! Form::label('majore_area_id', 'Majore Area:') !!}
    <p>{{ $herbarium->majoreArea->nama }}</p>
</div>

<!-- Minore Area Field -->
<div class="form-group">
    {!! Form::label('minore_area_id', 'Minore Area:') !!}
    <p>{{ $herbarium->minoreArea->nama }}</p>
</div>

<!-- Treetaxa Field -->
<div class="form-group">
    {!! Form::label('treetaxa_id', 'Treetaxa:') !!}
    <p>{{ $herbarium->treetaxa->nama }}</p>
</div>

<!-- Flora Id Field -->
<div class="form-group">
    {!! Form::label('flora_id', 'Flora:') !!}
    <p>{{ $herbarium->flora->nama }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $herbarium->slug }}</p>
</div>

<!-- Total Views Field -->
<div class="form-group">
    {!! Form::label('views', 'Total Views:') !!}
    <p>{{ views($herbarium)->count() }} times</p>
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

<div class="form-group">
    <div class="row">
        @foreach ($herbarium->images as $image)
        <img src="{{ $image->img_path }}" alt="{{ $image->judul }}" class="thumbnail" style="max-width: 25%; max-height: 25%; object-fit: cover">
    @endforeach
    </div>
</div>
