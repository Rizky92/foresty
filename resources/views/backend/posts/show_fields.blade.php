<!-- Judul Field -->
<div class="form-group">
    {!! Form::label('judul', 'Judul:') !!}
    <p>{{ $post->judul }}</p>
</div>

<!-- Deskripsi Field -->
<div class="form-group">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    <p>{{ $post->deskripsi }}</p>
</div>

<!-- Header Path Field -->
<div class="form-group">
    {!! Form::label('header_path', 'Header Path:') !!}
    <img src="{{ $post->header_path }}" alt="" srcset="">
</div>

<!-- Visitors Field -->
<div class="form-group">
    {!! Form::label('visitors', 'Visitors:') !!}
    <p>{{ $post->visitors }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $post->slug }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $post->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $post->updated_at }}</p>
</div>

