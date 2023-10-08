<div class="table-responsive">
    <table class="table" id="s60ColumnTypes-table">
        <thead>
        <tr>
            <th>Column Name</th>
        <th>Table Id</th>
        <th>Table Type Id</th>
        <th>Subtype Id</th>
        <th>Column Type Primary</th>
        <th>List</th>
        <th>Null</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($s60ColumnTypes as $s60ColumnTypes)
            <tr>
                <td>{{ $s60ColumnTypes->column_name }}</td>
            <td>{{ $s60ColumnTypes->table_id }}</td>
            <td>{{ $s60ColumnTypes->table_type_id }}</td>
            <td>{{ $s60ColumnTypes->subType_id }}</td>
            <td>{{ $s60ColumnTypes->column_type_primary }}</td>
            <td>{{ $s60ColumnTypes->list }}</td>
            <td>{{ $s60ColumnTypes->null }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['s60ColumnTypes.destroy', $s60ColumnTypes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('s60ColumnTypes.show', [$s60ColumnTypes->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('s60ColumnTypes.edit', [$s60ColumnTypes->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
