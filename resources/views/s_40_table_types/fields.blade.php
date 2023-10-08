<!-- Table Type Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('table_type', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('table_type', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('table_type', 'Table Type', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('model', 'Model:') !!}
    {!! Form::text('model', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>