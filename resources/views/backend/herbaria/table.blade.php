<div class="table-responsive">
    <table class="table" id="herbaria-table">
        <thead>
            <tr>
                <th>Latin</th>
        <th>Collector</th>
        <th>Number</th>
        <th>Prefix</th>
        <th>Img Path</th>
        <th>Country Id</th>
        <th>Family Id</th>
        <th>Gazetteer Id</th>
        <th>Major Area Id</th>
        <th>Minor Area Id</th>
        <th>Treetexa Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($herbaria as $herbarium)
            <tr>
                <td>{{ $herbarium->latin }}</td>
            <td>{{ $herbarium->collector }}</td>
            <td>{{ $herbarium->number }}</td>
            <td>{{ $herbarium->prefix }}</td>
            <td>{{ $herbarium->img_path }}</td>
            <td>{{ $herbarium->country_id }}</td>
            <td>{{ $herbarium->family_id }}</td>
            <td>{{ $herbarium->gazetteer_id }}</td>
            <td>{{ $herbarium->major_area_id }}</td>
            <td>{{ $herbarium->minor_area_id }}</td>
            <td>{{ $herbarium->treetexa_id }}</td>
                <td>
                    {!! Form::open(['route' => ['herbaria.destroy', $herbarium->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('herbaria.show', [$herbarium->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('herbaria.edit', [$herbarium->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
