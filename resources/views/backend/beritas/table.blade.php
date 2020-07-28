<div class="table-responsive">
    <table class="table" id="beritas-table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Slug</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($beritas as $berita)
            <tr>
                <td>{{ Str::limit($berita->judul, 50) }}</td>
                <td>{{ Str::limit($berita->deskripsi, 150) }}</td>
                <td><a href="{{ url('baca/'.$berita->slug) }}" target="_blank" rel="noopener noreferrer">{{ Str::limit($berita->slug, 50) }}</a></td>
                <td>
                    {!! Form::open(['route' => ['dashboard.beritas.destroy', $berita->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dashboard.beritas.show', [$berita->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('dashboard.beritas.edit', [$berita->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
