<div class="table-responsive">
    <table class="table" id="galleries-table">
        <thead>
            <tr>
                <th>Judul</th>
        <th>Deskripsi</th>
        <th>Img Path</th>
        <th>Post Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($galleries as $gallery)
            <tr>
                <td>{{ $gallery->judul }}</td>
            <td>{{ Str::limit($gallery->deskripsi, 150) }}</td>
            <td>{{ $gallery->img_path }}</td>
            <td>{{ $gallery->post->judul }}</td>
                <td>
                    {!! Form::open(['route' => ['dashboard.galleries.destroy', $gallery->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dashboard.galleries.show', [$gallery->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('dashboard.galleries.edit', [$gallery->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
