<div class="table-responsive">
    <table class="table" id="tumbuhans-table">
        <thead>
            <tr>
                <th>Nama</th>
        <th>Deskripsi</th>
        <th>Khasiat</th>
        <th>Musim</th>
        <th>Habitat</th>
        <th>Lokasi</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tumbuhans as $tumbuhan)
            <tr>
                <td>{{ $tumbuhan->nama }}</td>
            <td>{{ $tumbuhan->deskripsi }}</td>
            <td>{{ $tumbuhan->khasiat }}</td>
            <td>{{ $tumbuhan->musim }}</td>
            <td>{{ $tumbuhan->habitat }}</td>
            <td>{{ $tumbuhan->lokasi }}</td>
                <td>
                    {!! Form::open(['route' => ['tumbuhans.destroy', $tumbuhan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tumbuhans.show', [$tumbuhan->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tumbuhans.edit', [$tumbuhan->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
