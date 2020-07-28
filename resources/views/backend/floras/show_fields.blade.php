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

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $flora->slug }}</p>
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

<div class="form-group">
    <div class="row">
        @foreach ($flora->images as $image)
        <img src="{{ $image->img_path }}" alt="{{ $image->judul }}" class="thumbnail" style="max-width: 25%; max-height: 25%; object-fit: cover">
    @endforeach
    </div>
</div>
