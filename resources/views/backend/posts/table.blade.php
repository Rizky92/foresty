<div class="table-responsive">
    <table class="table" id="posts-table">
        <thead>
            <tr>
                <th>Judul</th>
        <th>Deskripsi</th>
        <th>Header Path</th>
        <th>Visitors</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->judul }}</td>
            <td>{{ Str::limit($post->deskripsi, 150) }}</td>
            <td>{{ $post->header_path }}</td>
            <td>{{ views($post)->count() }}</td>
                <td>
                    <div class='btn-group'>
                        <a href="{{ route('dashboard.posts.show', [$post->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('dashboard.posts.edit', [$post->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
