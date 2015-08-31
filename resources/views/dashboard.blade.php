@extends('includes/layout')

@section('content')

<div class="col-lg-3">

<div class="list-group">
  <a class="list-group-item active" href="{{ URL('/prospects/insert') }}" style="text-align: center;">
    Leads <span class="label label-default" style="margin-left: 30px;">+</span>
  </a>
    @if(count($lead_prospects)>0)
      @foreach($lead_prospects as $leads)
      <a href="{{ URL('/prospects', $leads->id) }}" class="list-group-item">{{$leads->company_name}}
      <span class="{{$leads->User->gravatar}}">{{ $leads->User->name}}</span>
      <span class="label label-default">{{ $leads->region}}</span>
      </a>
      @endforeach
  @else
     <a href="#" class="list-group-item">No records yet !!</a>
  @endif
</div>

</div>

<div class="col-lg-3">

<div class="list-group">
   <a class="list-group-item active" style="text-align: center;">
   Phone Introduction
   </a>

    @if(count($phone_prospects)>0)
  @foreach($phone_prospects as $phone_leads)
  <a href="{{ URL('/prospects', $phone_leads->id) }}" class="list-group-item">{{$phone_leads->company_name}}
   <span class="{{$phone_leads->User->gravatar}}">{{ $phone_leads->User->name}}</span>
   <span class="label label-default">{{ $phone_leads->region}}</span>
  </a>
  @endforeach
   @else
     <a href="#" class="list-group-item">No records yet !!</a>
     @endif

</div>

</div>

<div class="col-lg-3">

<div class="list-group">
  <a class="list-group-item active" style="text-align: center;">
    Demo
  </a>
    @if(count($demo_prospects)>0)
  @foreach($demo_prospects as $demo_leads)
  <a href="#" class="list-group-item">{{$demo_leads->company_name}}
   <span class="{{$demo_leads->User->gravatar}}">{{ $demo_leads->User->name}}</span>
      <span class="label label-default">{{ $demo_leads->region}}</span>
  </a>
  @endforeach
 @else
   <a href="#" class="list-group-item">No records yet !!</a>
   @endif
</div>

</div>

<div class="col-lg-3">

<div class="list-group">
  <a class="list-group-item active" style="text-align: center;">
    Negotiation
  </a>
      @if(count($negotiation_prospects)>0)
  @foreach($negotiation_prospects as $negotiation_leads)
  <a href="#" class="list-group-item">{{$negotiation_leads->company_name}}
   <span class="{{$negotiation_leads->User->gravatar}}">{{ $negotiation_leads->User->name}}</span>
         <span class="label label-default">{{ $negotiation_leads->region}}</span>
  </a>
  @endforeach
   @else
     <a href="#" class="list-group-item">No records yet !!</a>
     @endif
</div>

</div>
@stop