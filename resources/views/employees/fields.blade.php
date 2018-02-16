<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('firstname', 'Firstname:') !!}
    {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
</div>

<!-- Lastname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastname', 'Lastname:') !!}
    {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
</div>

<!-- Dateofbirth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateofbirth', 'Dateofbirth:') !!}
    {!! Form::date('dateofbirth', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Current Position Field -->
<div class="form-group col-sm-6">
    {!! Form::label('position', 'Position:') !!}
    {!! Form::select('position', array('' => '','manager'=>'Manager', 'supervisor' => 'Supervisor', 'staff' => 'Staff'), null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Province Field -->
<div class="form-group col-sm-6">
    {!! Form::label('province', 'Province:') !!}
    {!! Form::select('province', array(
        '' => '',
        'jakarta' =>'Jakarta',
        'jateng' => 'Jateng'
        ), null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::select('city', array(''=>''), null, ['class' => 'form-control']) !!}
</div>

<!-- Ktpnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ktpnumber', 'Ktpnumber:') !!}
    {!! Form::text('ktpnumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Bankname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bankname', 'Bankname:') !!}
    {!! Form::select('bankname', array('' => '','bca'=>'BCA', 'mandiri' => 'mandiri', 'bni' => 'BNI'), null, ['class' => 'form-control']) !!}
</div>

<!-- Accountnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('accountnumber', 'Accountnumber:') !!}
    {!! Form::text('accountnumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Accountnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('scanktp', 'Scan Ktp:') !!}
    {!! Form::file('scanktp', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('employees.index') !!}" class="btn btn-default">Cancel</a>
</div>
