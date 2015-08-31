@extends('includes/layout')

@section('content')
<div class="container">
{!! Form::open(array('class' => 'form-horizontal')) !!}
<legend>Prospect Details</legend>
<div class="form-group">
   {!! Form::label('company_name', 'Prospect Name', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-4">
     {!! Form::text('company_name',$prospect->company_name, array('class' => 'form-control','disabled' => '')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('address', 'Address', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-8">
     {!! Form::text('address',$prospect->address, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('phone_number', 'Phone Number', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-6">
     {!! Form::text('phone_number',$prospect->phone_number, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('company_email', 'E-Mail Address', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-6">
     {!! Form::text('company_email',$prospect->company_email, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('company_website', 'Website', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-6">
     {!! Form::text('company_website',$prospect->company_website, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('company_contact_person', 'Contact Person', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-6">
     {!! Form::text('company_contact_person',$prospect->company_contact_person, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('company_contact_person_designation', 'Contact Person Designation', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-6">
     {!! Form::text('company_contact_person_designation',$prospect->company_contact_person_designation, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('region', 'Sales Region', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-2">
     {!! Form::text('region',$prospect->region, array('class' => 'form-control','disabled' => '')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('sale_responsibility', 'Sale Responsibility', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-2">
     {!! Form::text('sale_responsibility',$prospect->User->name, array('class' => 'form-control','disabled' => '')) !!}
    </div>
    <div class="col-lg-2">
        {!! Form::select('assign_user',$users,$prospect->User->id , ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('status', 'Status', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-2">
    @if($prospect->status_lead == '1' && $prospect->status_phone_introduction == '0' && $prospect->status_demo == '0' && $prospect->status_negotiation == '0' && $prospect->status_closed == '0' && $prospect->status_not_interested == '0')
        <?php $status = 1; ?>
       {!! Form::text('status','Lead', array('class' => 'form-control','disabled' => '')) !!}
    @elseif($prospect->status_lead == '1' && $prospect->status_phone_introduction == '1' && $prospect->status_demo == '0' && $prospect->status_negotiation == '0' && $prospect->status_closed == '0' && $prospect->status_not_interested == '0')
        <?php $status = 2; ?>
     {!! Form::text('status','Phone Introduction', array('class' => 'form-control','disabled' => '')) !!}
    @elseif($prospect->status_lead == '1' && $prospect->status_phone_introduction == '1' && $prospect->status_demo == '1' && $prospect->status_negotiation == '0' && $prospect->status_closed == '0' && $prospect->status_not_interested == '0')
     <?php $status = 3; ?>
     {!! Form::text('status','Demo', array('class' => 'form-control','disabled' => '')) !!}
    @elseif($prospect->status_lead == '1' && $prospect->status_phone_introduction == '1' && $prospect->status_demo == '1' && $prospect->status_negotiation == '1' && $prospect->status_closed == '0' && $prospect->status_not_interested == '0')
    <?php $status = 4; ?>
    {!! Form::text('status','Negotiation', array('class' => 'form-control','disabled' => '')) !!}
    @elseif($prospect->status_closed == '1')
     <?php $status = 5; ?>
     {!! Form::text('status','Closed', array('class' => 'form-control','disabled' => '')) !!}
    @elseif($prospect->status_not_interested == '1')
     <?php $status = 6; ?>
     {!! Form::text('status','Not Interested', array('class' => 'form-control','disabled' => '')) !!}
    @endif
    </div>
        <div class="col-lg-2">
            {!! Form::select('changeStatus',['1'=>'Lead','2'=>'Phone Introduction','3'=>'Demo','4'=>'Negotiation','5'=>'Closed','6'=>'Not interested'], $status, ['class' => 'form-control']) !!}
        </div>
 </div>
<div class="form-group">
   {!! Form::label('sale_quantity', 'Sale Quantity (units)', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-2">
     {!! Form::text('sale_quantity',$prospect->sale_quantity, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('sale_amount', 'Sale Amount (Rs.)', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-2">
     {!! Form::text('sale_amount',$prospect->sale_amount, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('created_at', 'Lead Added On', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-3">
     {!! Form::text('created_at',$prospect->created_at, array('class' => 'form-control','disabled' => '')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('last_contacted_date', 'Last Contacted On', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-3">
     {!! Form::text('last_contacted_date',$prospect->last_contacted_date, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('due_contact_date', 'Due to be contacted on', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-3">
     {!! Form::text('due_contact_date',$prospect->due_contact_date, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
   {!! Form::label('comments', 'Comments', array('class' => 'col-lg-2 control-label')) !!}
    <div class="col-lg-6">
     {!! Form::textarea('comments',$prospect->comments, array('class' => 'form-control')) !!}
    </div>
</div>
<div class="form-group">
  <div class="col-lg-10 col-lg-offset-2">
{!! Form::submit('Update', array('class' => 'btn btn-primary')) !!}
{{--{!! Form::submit('Cancel', array('url' => 'localhost:8000','class' => 'btn btn-default')) !!}--}}
   </div>
</div>

{!! Form::close() !!}
</div>
@stop