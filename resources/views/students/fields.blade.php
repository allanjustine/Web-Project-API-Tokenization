<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Firstname', 'Firstname:') !!}
    {!! Form::text('Firstname', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Middlename Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Middlename', 'Middlename:') !!}
    {!! Form::text('Middlename', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Lastname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Lastname', 'Lastname:') !!}
    {!! Form::text('Lastname', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Birthdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Birthdate', 'Birthdate:') !!}
    {!! Form::text('Birthdate', null, ['class' => 'form-control','id'=>'Birthdate']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#Birthdate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Gender', 'Gender:') !!}
    {!! Form::text('Gender', null, ['class' => 'form-control','maxlength' => 12,'maxlength' => 12]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Address', 'Address:') !!}
    {!! Form::text('Address', null, ['class' => 'form-control','maxlength' => 500,'maxlength' => 500]) !!}
</div>

<!-- Citizenship Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Citizenship', 'Citizenship:') !!}
    {!! Form::text('Citizenship', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Religion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Religion', 'Religion:') !!}
    {!! Form::text('Religion', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>