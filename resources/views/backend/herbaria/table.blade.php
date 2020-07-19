<div class="table-responsive">
    <table class="table" id="herbaria-table">
        <thead>
            <tr>
                <th>Latin</th>
        <th>Collector</th>
        <th>Collected Date</th>
        <th>Number</th>
        <th>Prefix</th>
        <th>Country Id</th>
        <th>Family Id</th>
        <th>Gazetteer Id</th>
        <th>Majore Area Id</th>
        <th>Minore Area Id</th>
        <th>Treetexa Id</th>
        <th>Flora Id</th>
        <th>Img Path</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($herbaria as $herbarium)
            <tr>
                <td>{{ $herbarium->latin }}</td>
            <td>{{ $herbarium->collector }}</td>
            <td>{{ $herbarium->collected_date }}</td>
            <td>{{ $herbarium->number }}</td>
            <td>{{ $herbarium->prefix }}</td>
            <td>{{ $herbarium->country_id }}</td>
            <td>{{ $herbarium->family_id }}</td>
            <td>{{ $herbarium->gazetteer_id }}</td>
            <td>{{ $herbarium->majore_area_id }}</td>
            <td>{{ $herbarium->minore_area_id }}</td>
            <td>{{ $herbarium->treetexa_id }}</td>
            <td>{{ $herbarium->flora_id }}</td>
            <td>{{ $herbarium->img_path }}</td>
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
