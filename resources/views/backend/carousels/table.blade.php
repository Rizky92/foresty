<div class="table-responsive">
    <table class="table" id="carousels-table">
        <thead>
            <tr>
                <th>Judul</th>
        <th>Subjudul</th>
        <th>Url</th>
        <th>Img Path</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($carousels as $carousels)
            <tr>
                <td>{{ $carousels->judul }}</td>
            <td>{{ $carousels->subjudul }}</td>
            <td>{{ $carousels->url }}</td>
            <td>{{ $carousels->img_path }}</td>
                <td>
                    {!! Form::open(['route' => ['carousels.destroy', $carousels->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('carousels.show', [$carousels->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('carousels.edit', [$carousels->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
