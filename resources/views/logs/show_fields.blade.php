<!-- Userid Field -->
<div class="col-sm-12">
    {!! Form::label('userid', 'Userid:') !!}
    <p>{{ $logs->userid }}</p>
</div>

<!-- Log Field -->
<div class="col-sm-12">
    {!! Form::label('log', 'Log:') !!}
    <p>{{ $logs->log }}</p>
</div>

<!-- Logdetails Field -->
<div class="col-sm-12">
    {!! Form::label('logdetails', 'Logdetails:') !!}
    <p>{{ $logs->logdetails }}</p>
</div>

<!-- Logtype Field -->
<div class="col-sm-12">
    {!! Form::label('logtype', 'Logtype:') !!}
    <p>{{ $logs->logtype }}</p>
</div>

