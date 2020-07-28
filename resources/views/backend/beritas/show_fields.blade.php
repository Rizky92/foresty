<!-- Judul Field -->
<div class="form-group">
    {!! Form::label('judul', 'Judul:') !!}
    <p>{{ $berita->judul }}</p>
</div>

<!-- Deskripsi Field -->
<div class="form-group">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    <p>{{ $berita->deskripsi }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $berita->slug }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $berita->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $berita->updated_at }}</p>
</div>

<div class="form-group">
    <div class="row">
        @foreach ($berita->images as $image)
        <img src="{{ $image->img_path }}" alt="{{ $image->judul }}" class="thumbnail" style="max-width: 25%; max-height: 25%; object-fit: cover">
    @endforeach
    </div>
</div>
