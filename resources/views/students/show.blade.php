@extends('students.layout')
@section('content')
<br><br><br>

<div class="card" style="padding: 100px;">
  <div class="card-header" style="font-weight: bold">Students Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
  </div>

    </hr>

  </div>
</div>
