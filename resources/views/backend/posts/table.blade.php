<div class="table-responsive">
    <table class="table" id="posts-table">
        <thead>
            <tr>
                <th>id</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Total/Unique Visitor</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->judul }}</td>
                <td>{{ $post->deskripsi }}</td>
                <td>{{ views($post)->count() }}/{{ views($post)->unique()->count() }}</td>
                <td>
                    <div class='btn-group'>
                        <a href="{{ route('dashboard.posts.show', [$post->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('dashboard.posts.edit', [$post->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    </div>
                    {{-- {!! Form::open(['route' => ['dashboard.posts.destroy', $post->id], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    {!! Form::close() !!} --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
