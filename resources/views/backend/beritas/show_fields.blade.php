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

<!-- Img Path Field -->
<div class="form-group">
    {!! Form::label('img_path', 'Img Path:') !!}
    <p>{{ $berita->img_path }}</p>
</div>

<!-- Img Caption Field -->
<div class="form-group">
    {!! Form::label('img_caption', 'Img Caption:') !!}
    <p>{{ $berita->img_caption }}</p>
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

