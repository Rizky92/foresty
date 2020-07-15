<div class="table-responsive">
    <table class="table" id="koleksiHerbaria-table">
        <thead>
            <tr>
                <th>Nama Latin</th>
        <th>Collector</th>
        <th>Number</th>
        <th>Prefix</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($koleksiHerbaria as $koleksiHerbarium)
            <tr>
                <td>{{ $koleksiHerbarium->nama_latin }}</td>
            <td>{{ $koleksiHerbarium->collector }}</td>
            <td>{{ $koleksiHerbarium->number }}</td>
            <td>{{ $koleksiHerbarium->prefix }}</td>
                <td>
                    {!! Form::open(['route' => ['koleksiHerbaria.destroy', $koleksiHerbarium->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('koleksiHerbaria.show', [$koleksiHerbarium->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('koleksiHerbaria.edit', [$koleksiHerbarium->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
