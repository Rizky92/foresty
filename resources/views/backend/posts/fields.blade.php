<!-- Judul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('judul', 'Judul:') !!}
    {!! Form::text('judul', null, ['class' => 'form-control']) !!}
</div>

<!-- Deskripsi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    <p class="small">Gunakan <b>[kiri]</b> untuk menaruh foto di kiri halaman atau <b>[kanan]</b> untuk menaruh foto di kanan halaman</p>
    {!! Form::textarea('deskripsi', null, ['class' => 'form-control editor']) !!}
</div>

<!-- Img Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img_paths[]', 'Header Image (Untuk beranda foto bisa lebih dari satu):') !!}
    {!! Form::file('img_paths[]', ['multiple']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('dashboard.posts.index') }}" class="btn btn-default">Cancel</a>
</div>
