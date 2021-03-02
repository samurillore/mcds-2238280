@extends('layouts.app')

@section('content')
<h1>List all users</h1>
<div class="container">
<div class="row">
<div class="col-md-10 offset-md-1">
<h1 clas="text-center">List all users<h1>
<table class="table table-stripped table-hover table-borderer">
<thead>
<tr>
<th>FullName</th>
<th>Email</th>
<th>Photo</th>
<th>Role</th>
</tr>
</thead>
<tbody>
@foreach($users as $user)

<tr>
<td>{{$user->fullname}}</th>
<td>{{$user->email}}</th>
<td><img src ={{asset($user->photo)}} class="img-thumbnail rounded-circle" width="45px"></th>
<td>
@if($user->role=="Admin")
    <button class="btn btn-success">
        {{$user->role}}
    </button>
@else
||||<button class="btn btn-success">
        {{$user->role}}
    </button>
@endif

</th>
</tr>
@endforeach
</tbody>
</table>

</div>
</div>
</div>

@endsection