<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $fauna->nama }}</p>
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

<div class="form-group">
    <div class="row">
        @foreach ($fauna->images as $image)
        <img src="{{ $image->img_path }}" alt="{{ $image->judul }}" class="thumbnail" style="max-width: 25%; max-height: 25%; object-fit: cover">
    @endforeach
    </div>
</div>
