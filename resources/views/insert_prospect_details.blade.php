@extends('includes/layout')

@section('content')
<div class="container">
{!! Form::open(array('url' => '/prospects/insert','class' => 'form-horizontal')) !!}
<legend>Insert a New Lead</legend>
<div class="form-group">
   {!! Form::label('company_name', 'Lead Name', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-4">
     {!! Form::text('company_name',null, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('address', 'Address', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-8">
     {!! Form::text('address',null, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('phone_number', 'Phone Number', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-6">
     {!! Form::text('phone_number',null, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('company_email', 'E-Mail Address', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-6">
     {!! Form::text('company_email',null, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('company_website', 'Website', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-6">
     {!! Form::text('company_website',null, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('company_contact_person', 'Contact Person', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-6">
     {!! Form::text('company_contact_person',null, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('company_contact_person_designation', 'Contact Person Designation', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-6">
     {!! Form::text('company_contact_person_designation',null, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('region', 'Sales Region', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-2">
     {!! Form::text('region',null, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('assign_user', 'Sale Responsibility', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-2">
        {!! Form::select('assign_user',$users,null , ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('changeStatus', 'Status', array('class' => 'col-lg-2 control-label')) !!}
        <div class="col-lg-2">
            {!! Form::select('changeStatus',['1'=>'Lead','2'=>'Phone Introduction','3'=>'Demo','4'=>'Negotiation','5'=>'Closed','6'=>'Not interested'], 1, ['class' => 'form-control']) !!}
        </div>
 </div>
<div class="form-group">
   {!! Form::label('sale_quantity', 'Sale Quantity (units)', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-2">
     {!! Form::text('sale_quantity',null, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('sale_amount', 'Sale Amount (Rs.)', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-2">
     {!! Form::text('sale_amount',null, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('last_contacted_date', 'Last Contacted On', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-3">
     {!! Form::text('last_contacted_date',null, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('due_contact_date', 'Due to be contacted on', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-3">
     {!! Form::text('due_contact_date',null, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('comments', 'Comments', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-6">
     {!! Form::textarea('comments',null, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
  <div class="col-lg-10 col-lg-offset-2">
{!! Form::submit('Insert', array('class' => 'btn btn-primary')) !!}
{{--{!! Form::submit('Cancel', array('url' => 'localhost:8000','class' => 'btn btn-default')) !!}--}}
   </div>
</div>

{!! Form::close() !!}
</div>
@stop