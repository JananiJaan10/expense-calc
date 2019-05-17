@extends('layouts.app')

@section('content')
 <div class="container">
   <div class="row justify-content-center">
     <div class="col-md-4">
     <h1>Select Expenses</h1>
     <li><a href="/daily">Daily expenses<br></a></li>
     <li><a href="/monthly">Monthly expenses<br></a></li>
     <li><a href="/yearly">Yearly expenses<br></a></li>
     </div>
    


     <div class="col-md-8">
      <div class="card">
        <div class="card-header">Daily Expenses</div>

          <div class="card-body">
          
          
                    <form action="total.blade.php" method="post" name="myform">
  <div class="form-group">
    <label for="Input1">Food</label>
    <input type="text" class="form-control" id="Input1" placeholder="type amount">
</div>
  <div class="form-group">
    <label for="Input2">Petrol</label>
    <input type="text" class="form-control" id="Input2" placeholder="type amount">
  </div>
  <div class="form-group">
    <label for="Input3">Groceries</label>
    <input type="text" class="form-control" id="Input3" placeholder="type amount"> <br>
        <a href="{{route('total')}}"  class="btn btn-primary">Total</a>
  </div>

  </form>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
@endsection