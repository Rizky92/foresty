<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $flora->nama }}</p>
</div>

<!-- Deskripsi Field -->
<div class="form-group">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    <p>{{ $flora->deskripsi }}</p>
</div>

<!-- Khasiat Field -->
<div class="form-group">
    {!! Form::label('khasiat', 'Khasiat:') !!}
    <p>{{ $flora->khasiat }}</p>
</div>

<!-- Musim Field -->
<div class="form-group">
    {!! Form::label('musim', 'Musim:') !!}
    <p>{{ $flora->musim }}</p>
</div>

<!-- Habitat Field -->
<div class="form-group">
    {!! Form::label('habitat', 'Habitat:') !!}
    <p>{{ $flora->habitat }}</p>
</div>

<!-- Lokasi Field -->
<div class="form-group">
    {!! Form::label('lokasi', 'Lokasi:') !!}
    <p>{{ $flora->lokasi }}</p>
</div>

<!-- Img Path Field -->
<div class="form-group">
    {!! Form::label('img_path', 'Img Path:') !!}
    <p>{{ $flora->img_path }}</p>
    <img src="{{ asset($flora->img_path) }}" alt="">
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $flora->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $flora->updated_at }}</p>
</div>

