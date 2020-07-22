<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $fauna->nama }}</p>
</div>

<!-- Latin Field -->
<div class="form-group">
    {!! Form::label('latin', 'Latin:') !!}
    <p>{{ $fauna->latin }}</p>
</div>

<!-- Deskripsi Field -->
<div class="form-group">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    <p>{{ $fauna->deskripsi }}</p>
</div>

<!-- Habitat Field -->
<div class="form-group">
    {!! Form::label('habitat', 'Habitat:') !!}
    <p>{{ $fauna->habitat }}</p>
</div>

<!-- Lokasi Field -->
<div class="form-group">
    {!! Form::label('lokasi', 'Lokasi:') !!}
    <p>{{ $fauna->lokasi }}</p>
</div>

<!-- Img Path Field -->
<div class="form-group">
    {!! Form::label('img_path', 'Img Path:') !!}
    <img src="{{ $fauna->img_path }}" alt="" srcset="">
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $fauna->slug }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $fauna->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $fauna->updated_at }}</p>
</div>

