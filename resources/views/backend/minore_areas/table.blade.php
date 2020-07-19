<div class="table-responsive">
    <table class="table" id="minoreAreas-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($minoreAreas as $minoreArea)
            <tr>
                <td>{{ $minoreArea->name }}</td>
                <td>
                    {!! Form::open(['route' => ['minoreAreas.destroy', $minoreArea->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('minoreAreas.show', [$minoreArea->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('minoreAreas.edit', [$minoreArea->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
