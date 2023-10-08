<div class="table-responsive">
    <table class="table" id="s30DataTypes-table">
        <thead>
        <tr>
            <th>Type Name</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($s30DataTypes as $s30DataTypes)
            <tr>
                <td>{{ $s30DataTypes->type_name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['s30DataTypes.destroy', $s30DataTypes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('s30DataTypes.show', [$s30DataTypes->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('s30DataTypes.edit', [$s30DataTypes->id]) }}"
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
