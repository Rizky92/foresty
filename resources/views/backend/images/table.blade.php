<div class="table-responsive">
    <table class="table" id="images-table">
        <thead>
            <tr>
                <th>Judul</th>
        <th>Deskripsi</th>
        <th>Imageable</th>
        <th>Img Path</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($images as $image)
            <tr>
                <td>{{ $image->judul }}</td>
            <td>{{ $image->deskripsi }}</td>
            <td>{{ $image->imageable_type }}</td>
            <td>{{ $image->img_path }}</td>
                <td>
                    {!! Form::open(['route' => ['dashboard.images.destroy', $image->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dashboard.images.show', [$image->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('dashboard.images.edit', [$image->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
