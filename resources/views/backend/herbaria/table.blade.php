<div class="table-responsive">
    <table class="table" id="herbaria-table">
        <thead>
            <tr>
                <th>Latin</th>
        <th>Collector</th>
        <th>Add Coll</th>
        <th>Collected Date</th>
        <th>Number</th>
        <th>Prefix</th>
        <th>Locality Note</th>
        <th>Country</th>
        <th>Family</th>
        <th>Gazetteer</th>
        <th>Majore Area</th>
        <th>Minore Area</th>
        <th>Treetaxa</th>
        <th>Flora</th>
        <th>Total Views</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($herbaria as $herbarium)
            <tr>
                <td>{{ $herbarium->latin }}</td>
            <td>{{ $herbarium->collector }}</td>
            <td>{{ $herbarium->add_coll }}</td>
            <td>{{ $herbarium->collected_date }}</td>
            <td>{{ $herbarium->number }}</td>
            <td>{{ $herbarium->prefix }}</td>
            <td>{{ $herbarium->locality_note }}</td>
            <td>{{ $herbarium->country->nama }}</td>
            <td>{{ $herbarium->family->nama }}</td>
            <td>{{ $herbarium->gazetteer->nama }}</td>
            <td>{{ $herbarium->majoreArea->nama }}</td>
            <td>{{ $herbarium->minoreArea->nama }}</td>
            <td>{{ $herbarium->treetaxa->nama }}</td>
            <td>{{ $herbarium->flora->nama }}</td>
            <td>{{ views($herbarium)->count() }}</td>
                <td>
                    {!! Form::open(['route' => ['dashboard.herbaria.destroy', $herbarium->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dashboard.herbaria.show', [$herbarium->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('dashboard.herbaria.edit', [$herbarium->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
