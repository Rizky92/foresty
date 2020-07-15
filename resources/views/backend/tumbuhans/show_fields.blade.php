<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $tumbuhan->nama }}</p>
</div>

<!-- Deskripsi Field -->
<div class="form-group">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    <p>{{ $tumbuhan->deskripsi }}</p>
</div>

<!-- Khasiat Field -->
<div class="form-group">
    {!! Form::label('khasiat', 'Khasiat:') !!}
    <p>{{ $tumbuhan->khasiat }}</p>
</div>

<!-- Musim Field -->
<div class="form-group">
    {!! Form::label('musim', 'Musim:') !!}
    <p>{{ $tumbuhan->musim }}</p>
</div>

<!-- Habitat Field -->
<div class="form-group">
    {!! Form::label('habitat', 'Habitat:') !!}
    <p>{{ $tumbuhan->habitat }}</p>
</div>

<!-- Lokasi Field -->
<div class="form-group">
    {!! Form::label('lokasi', 'Lokasi:') !!}
    <p>{{ $tumbuhan->lokasi }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tumbuhan->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tumbuhan->updated_at }}</p>
</div>

