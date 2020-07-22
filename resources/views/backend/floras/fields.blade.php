<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Deskripsi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    {!! Form::textarea('deskripsi', null, ['class' => 'form-control']) !!}
</div>

<!-- Khasiat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('khasiat', 'Khasiat:') !!}
    {!! Form::text('khasiat', null, ['class' => 'form-control']) !!}
</div>

<!-- Musim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('musim', 'Musim:') !!}
    {!! Form::text('musim', null, ['class' => 'form-control']) !!}
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
    {!! Form::label('img_path', 'Img Path:') !!}
    {!! Form::file('img_path') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('dashboard.floras.index') }}" class="btn btn-default">Cancel</a>
</div>
