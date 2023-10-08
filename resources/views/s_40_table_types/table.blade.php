<div class="table-responsive">
    <table class="table" id="s40TableTypes-table">
        <thead>
        <tr>
            <th>Table Type</th>
        <th>Model</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($s40TableTypes as $s40TableTypes)
            <tr>
                <td>{{ $s40TableTypes->table_type }}</td>
            <td>{{ $s40TableTypes->model }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['s40TableTypes.destroy', $s40TableTypes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('s40TableTypes.show', [$s40TableTypes->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('s40TableTypes.edit', [$s40TableTypes->id]) }}"
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
