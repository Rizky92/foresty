<!-- Latin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latin', 'Latin:') !!}
    {!! Form::text('latin', null, ['class' => 'form-control']) !!}
</div>

<!-- Collector Field -->
<div class="form-group col-sm-6">
    {!! Form::label('collector', 'Collector:') !!}
    {!! Form::text('collector', null, ['class' => 'form-control']) !!}
</div>

<!-- Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number', 'Number:') !!}
    {!! Form::number('number', null, ['class' => 'form-control']) !!}
</div>

<!-- Prefix Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prefix', 'Prefix:') !!}
    {!! Form::text('prefix', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img_path', 'Img Path:') !!}
    {!! Form::text('img_path', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_id', 'Country Id:') !!}
    {!! Form::select('country_id', $countryItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Family Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('family_id', 'Family Id:') !!}
    {!! Form::select('family_id', $familyItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Gazetteer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gazetteer_id', 'Gazetteer Id:') !!}
    {!! Form::select('gazetteer_id', $gazetteerItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Major Area Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('major_area_id', 'Major Area Id:') !!}
    {!! Form::select('major_area_id', $major_areaItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Minor Area Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('minor_area_id', 'Minor Area Id:') !!}
    {!! Form::select('minor_area_id', $minor_areaItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Treetexa Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('treetexa_id', 'Treetexa Id:') !!}
    {!! Form::select('treetexa_id', $treetexaItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('herbaria.index') }}" class="btn btn-default">Cancel</a>
</div>
