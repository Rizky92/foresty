<div class="table-responsive">
    <table class="table" id="tempatWisatas-table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Img Path</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tempatWisatas as $tempatWisata)
            <tr>
                <td>{{ $tempatWisata->nama }}</td>
                <td>{{ Str::limit($tempatWisata->deskripsi, 150) }}</td>
                <td>{{ $tempatWisata->img_path }}</td>
                <td>
                    {!! Form::open(['route' => ['dashboard.tempatWisatas.destroy', $tempatWisata->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dashboard.tempatWisatas.show', [$tempatWisata->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('dashboard.tempatWisatas.edit', [$tempatWisata->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
