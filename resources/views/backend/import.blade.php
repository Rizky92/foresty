
{!! Form::open(['route' => 'upload', 'files' => true]) !!}

<div class="form-group col-sm-6">
    {!! Form::label('excel', 'IMPORT EXCEL:') !!}
    {!! Form::file('excel') !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('home') }}" class="btn btn-default">Cancel</a>
</div>

{!! Form::close() !!}
