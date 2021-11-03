<!-- Userid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('userid', 'Userid:') !!}
    {!! Form::text('userid', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Log Field -->
<div class="form-group col-sm-6">
    {!! Form::label('log', 'Log:') !!}
    {!! Form::text('log', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Logdetails Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logdetails', 'Logdetails:') !!}
    {!! Form::text('logdetails', null, ['class' => 'form-control','maxlength' => 1000,'maxlength' => 1000]) !!}
</div>

<!-- Logtype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logtype', 'Logtype:') !!}
    {!! Form::text('logtype', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>