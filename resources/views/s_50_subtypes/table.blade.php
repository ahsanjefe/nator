<div class="table-responsive">
    <table class="table" id="s50Subtypes-table">
        <thead>
        <tr>
            <th>Subtype Name</th>
        <th>Description</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($s50Subtypes as $s50Subtypes)
            <tr>
                <td>{{ $s50Subtypes->subtype_name }}</td>
            <td>{{ $s50Subtypes->description }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['s50Subtypes.destroy', $s50Subtypes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('s50Subtypes.show', [$s50Subtypes->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('s50Subtypes.edit', [$s50Subtypes->id]) }}"
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
