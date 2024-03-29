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

<!-- Add Coll Field -->
<div class="form-group col-sm-6">
    {!! Form::label('add_coll', 'Add Coll:') !!}
    {!! Form::text('add_coll', null, ['class' => 'form-control']) !!}
</div>

<!-- Collected Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('collected_date', 'Collected Date:') !!}
    {!! Form::text('collected_date', null, ['class' => 'form-control','id'=>'collected_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#collected_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

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

<!-- Locality Note Field -->
<div class="form-group col-sm-6">
    {!! Form::label('locality_note', 'Locality Note:') !!}
    {!! Form::text('locality_note', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_id', 'Country:') !!}
    {!! Form::select('country_id', $countryItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Family Field -->
<div class="form-group col-sm-6">
    {!! Form::label('family_id', 'Family:') !!}
    {!! Form::select('family_id', $familyItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Gazetteer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gazetteer_id', 'Gazetteer:') !!}
    {!! Form::select('gazetteer_id', $gazetteerItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Majore Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('majore_area_id', 'Majore Area:') !!}
    {!! Form::select('majore_area_id', $majore_areaItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Minore Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('minore_area_id', 'Minore Area:') !!}
    {!! Form::select('minore_area_id', $minore_areaItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Treetaxa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('treetaxa_id', 'Treetaxa:') !!}
    {!! Form::select('treetaxa_id', $treetaxaItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Flora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('flora_id', 'Flora:') !!}
    {!! Form::select('flora_id', $floraItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Img Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img_paths[]', 'Images:') !!}
    {!! Form::file('img_paths[]', ['multiple']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('dashboard.herbaria.index') }}" class="btn btn-default">Cancel</a>
</div>
