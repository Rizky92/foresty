<div class="table-responsive">
    <table class="table" id="floras-table">
        <thead>
            <tr>
                <th>Nama</th>
        <th>Deskripsi</th>
        <th>Khasiat</th>
        <th>Musim</th>
        <th>Habitat</th>
        <th>Lokasi</th>
        <th>Img Path</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($floras as $flora)
            <tr>
                <td>{{ $flora->nama }}</td>
            <td>{{ $flora->deskripsi }}</td>
            <td>{{ $flora->khasiat }}</td>
            <td>{{ $flora->musim }}</td>
            <td>{{ $flora->habitat }}</td>
            <td>{{ $flora->lokasi }}</td>
            <td>{{ $flora->img_path }}</td>
                <td>
                    {!! Form::open(['route' => ['dashboard.floras.destroy', $flora->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dashboard.floras.show', [$flora->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('dashboard.floras.edit', [$flora->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
