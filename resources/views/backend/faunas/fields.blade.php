<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Deskripsi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    <p class="small">Gunakan <b>[kiri]</b> untuk menaruh foto di kiri halaman atau <b>[kanan]</b> untuk menaruh foto di kanan halaman</p>
    {!! Form::textarea('deskripsi', null, ['class' => 'form-control editor']) !!}
</div>

<!-- Habitat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('habitat', 'Habitat:') !!}
    {!! Form::text('habitat', null, ['class' => 'form-control']) !!}
</div>

<!-- Lokasi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lokasi', 'Lokasi:') !!}
    {!! Form::text('lokasi', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img_paths[]', 'Images:') !!}
    {!! Form::file('img_paths[]', ['multiple']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('dashboard.faunas.index') }}" class="btn btn-default">Cancel</a>
</div>
