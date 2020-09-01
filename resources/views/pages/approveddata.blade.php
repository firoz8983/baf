@extends('layout.adminlayout')
@section('admin_content')
    

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <p class="alert-success">
                <?php
                 $message=Session::get('message'); 
               if($message){
                   echo $message;
                   Session::put('message',null);
                 }
                ?>
              </p> 

            <div class="page-bar">
                
                
            </div>


<table class="table table-responsive">
    <tr>
    <th>User Id</th>
    <th>First Name</th>
     <th>Last Name</th>
     <th>Email Address</th>
     <th>Phone Number</th>
     <th>Rank</th>
     <th>Base</th>
     <th>Quarter Type </th>
    <th>Date</th>
    <th>point</th>
    <th>Authentication Number</th>
    <th>Children</th>
    <th>Action</th>
</tr>
@foreach($data as $row)
<tr>
 <td>{{$row->id}}</td>
<td>{{$row->firstname}}</td>
 <td> {{$row->lastname}} </td>
 <td> {{$row->email}} </td>
 <td>{{$row->bdnumber}} </td>
 <td>{{$row->rank}} </td>
 <td>{{$row->base}} </td>
<td>{{$row->quartertype}} </td>
<td>{{$row->date}} </td>
<td>{{$row->point}} </td>
<td>{{$row->anumber}} </td>
<td>{{$row->child}} </td>
<td>
    <a href="{{url('/send/mail/'.$row->id)}}" class="btn btn-sm btn-info">finalize</a>
        
    
    </td>

</tr>
@endforeach
</table>

@endsection