<div class="table-responsive">
    <table class="table" id="s10UserDatabases-table">
        <thead>
        <tr>
            <th>User Id</th>
        <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($s10UserDatabases as $s10UserDatabases)
            <tr>
                <td>{{ $s10UserDatabases->user_id }}</td>
            <td>{{ $s10UserDatabases->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['s10UserDatabases.destroy', $s10UserDatabases->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('s10UserDatabases.show', [$s10UserDatabases->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('s10UserDatabases.edit', [$s10UserDatabases->id]) }}"
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
