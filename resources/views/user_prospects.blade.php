@extends('includes/layout')

@section('content')
@foreach($distinct_users as $distinct_user)
<div class="col-lg-3">
<div class="list-group">
  <a class="list-group-item active" style="text-align: center;">
    {{$distinct_user->name}}
  </a>

      @foreach($prospects[$distinct_user->id] as $leads)
      <a href="{{ URL('/prospects', $leads->id) }}" class="list-group-item">{{$leads->company_name}}
      <span class="label label-default">{{$leads->region}}</span>
       @if(isset($leads->last_contacted_date))
      <span class="label label-primary">Last Contact On : {{$leads->last_contacted_date}}</span>
      @endif
      @if(isset($leads->due_contacted_date))
      <span class="label label-success">Due To Contact : {{$leads->due_contact_date}}</span>
      @endif
      </a>

      @endforeach

</div>
</div>
@endforeach
@stop