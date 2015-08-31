<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/flatly/bootstrap.min.css" />
</head>
<body>
<style>
body {
           background-color: #f5f5f5;
       }
</style>
    <div class="row" style="margin: 0px">
      <div class="col-xs-12 col-md-8"><h1 style="color:#ffffff;">Tethr Sales Pipeline</h1></div>
      <div class=".col-xs-6 .col-sm-3">
            <div class="alert alert-dismissible alert-info" style="margin-bottom: 0;border-radius: 0">

              <ul class="nav nav-pills">
                <li class="active"><a>Target <span class="badge">200 units</span></a></li>
                <li class="active"><a href="#">Achieved <span class="badge">{{ $sales_quantity or '0 units' }}</span></a></li>
              </ul>
            </div>

      </div>
    </div>



<table class="table table-striped table-hover ">
    <tr class="default">
        <td><strong><a href="{{ URL('/') }}" style="text-decoration: none;">Dashboard</a></strong></td>
        <td><strong><a href="{{ URL('/user') }}" style="text-decoration: none;">Sale Responsibility List</a></strong></td>
        <td style="text-align: center"><strong>Total Sales: Rs. {{ $sales_sum or '0/-' }} </strong></td>
        <td style="text-align: end" class="text-danger"><strong>Days Left : 365</strong></td>
    </tr>
</table>
@if((Session::get('message'))!= NULL)
<div class="row">
<div class="col-xs-6" style="float: right;
                                 margin-right: 25%;">
<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>{{Session::get('message')}}</strong>.
</div>
</div>
</div>
@endif
  @yield('content')

<table class="table table-striped table-hover" style="margin-bottom: 0;">
    <tr class="info">
        <td><strong><a href="" style="text-decoration: none;color: white;">Total Clients Closed <span class="badge">{{$closed_count}}</span></a></strong></td>
        <td style="text-align: end"><strong><a href="" style="text-decoration: none;color: white;">Not Interested Clients  <span class="badge">{{$not_interested_count}}</span> </a></strong></td>
        </tr>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>