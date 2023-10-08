<!-- Column Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('column_name', 'Column Name:') !!}
    {!! Form::text('column_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Table Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('table_id', 'Table Id:') !!}
    {!! Form::number('table_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Table Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('table_type_id', 'Table Type Id:') !!}
    {!! Form::number('table_type_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtype Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subType_id', 'Subtype Id:') !!}
    {!! Form::number('subType_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Column Type Primary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('column_type_primary', 'Column Type Primary:') !!}
    {!! Form::number('column_type_primary', null, ['class' => 'form-control']) !!}
</div>

<!-- List Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('list', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('list', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('list', 'List', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Null Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('null', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('null', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('null', 'Null', ['class' => 'form-check-label']) !!}
    </div>
</div>
