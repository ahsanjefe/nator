<div class="table-responsive">
    <table class="table" id="s20UserTables-table">
        <thead>
        <tr>
            <th>Database Id</th>
        <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($s20UserTables as $s20UserTables)
            <tr>
                <td>{{ $s20UserTables->database_id }}</td>
            <td>{{ $s20UserTables->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['s20UserTables.destroy', $s20UserTables->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('s20UserTables.show', [$s20UserTables->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('s20UserTables.edit', [$s20UserTables->id]) }}"
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
