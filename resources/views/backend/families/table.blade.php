<div class="table-responsive">
    <table class="table" id="families-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($families as $family)
            <tr>
                <td>{{ $family->name }}</td>
                <td>
                    {!! Form::open(['route' => ['families.destroy', $family->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('families.show', [$family->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('families.edit', [$family->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
