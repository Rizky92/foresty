<div class="table-responsive">
    <table class="table" id="faunas-table">
        <thead>
            <tr>
                <th>Nama</th>
        <th>Latin</th>
        <th>Deskripsi</th>
        <th>Habitat</th>
        <th>Lokasi</th>
        <th>Img Path</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($faunas as $fauna)
            <tr>
                <td>{{ $fauna->nama }}</td>
            <td>{{ $fauna->latin }}</td>
            <td>{{ Str::limit($fauna->deskripsi, 150) }}</td>
            <td>{{ $fauna->habitat }}</td>
            <td>{{ $fauna->lokasi }}</td>
            <td>{{ $fauna->img_path }}</td>
                <td>
                    {!! Form::open(['route' => ['dashboard.faunas.destroy', $fauna->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dashboard.faunas.show', [$fauna->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('dashboard.faunas.edit', [$fauna->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
