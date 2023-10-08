<!-- Database Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('database_id', 'Database Id:') !!}
    {!! Form::number('database_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'maxlength' => 255]) !!}
</div>