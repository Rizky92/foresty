<div class="table-responsive">
    <table class="table" id="minorAreas-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($minorAreas as $minorArea)
            <tr>
                <td>{{ $minorArea->name }}</td>
                <td>
                    {!! Form::open(['route' => ['minorAreas.destroy', $minorArea->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('minorAreas.show', [$minorArea->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('minorAreas.edit', [$minorArea->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
