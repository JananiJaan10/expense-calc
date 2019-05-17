@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
    <div class="col-md-4">
    <h1>Select Expenses</h1>
    <li><a href="/daily">Daily expenses<br></a></li>
    <li><a href="/monthly">Monthly expenses<br></a></li>
    <li><a href="/yearly">Yearly expenses<br></a></li>
    </div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Monthly Expenses</div>

          <div class="card-body">
          <form action="total.blade.php" method="post" name="myform">
          <div class="form-group">
    <label for="Select1">Select Monthly salary</label>
    <select class="form-control" id="Select1">
      <option>10000</option>
      <option>20000</option>
      <option>30000</option>
      <option>40000</option>
      <option>50000</option>
    </select>
  </div>
  <div class="form-group">
    <label for="Input1">Electricity</label>
    <input type="text" class="form-control" id="Input3" placeholder="type amount">
  </div>
  <div class="form-group">
    <label for="Input2">Housing</label>
    <input type="text" class="form-control" id="Input2" placeholder="type amount">
  </div>
  <div class="form-group">
    <label for="Input3">Bank loan</label>
    <input type="text" class="form-control" id="Input3" placeholder="type amount">
  </div>
    </div>
</div>
</div>
</div>
</div>
</div>

    @endsection