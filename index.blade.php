@extends('user.master')
@section('content')
<div class="row">
   <div class="col-lg-12">
     <h3>xpens calc</h3>
     </div>
     </div>
     <div class="row">
     <div class="col-sm-12">
     <a class="btn btn-xs btn-success" href="{{route('user.create'}}">Create New Post</a>
     </div>
     </div>
     </div>
     @if($message =session::get('success'))
     <div class="alert alert-success">
     <p>{{$message}}</p>
     </div>
     @endif
     <table class="table table-bordered">
     <tr>
     <th>No</th>
     <th>Expenses</th>
     <th>Amount</th>
     <th width="300px">Actions<</th>
     @foreach($posts as $post)
     <tr>
     <td>{{++$i}}</td>
     <td>{{$post->Expenses}}</td>
     <td>{{$post->Amount}}</td>
     </td>
     <a class="btn btn-xs btn-info" href={{route('user.show',$post->id)}}">Show</a>
     <a class="btn btn-xs btn-primary" href={{route('user.edit',$post->id)}}">Edit</a>
     { !!Form::open(['method' =>'DELETE','route' =>['posts.destroy', $post->id],'Style'=>'display:inline'])!!}
     { !!Form::Submit(['Delete',['class'=>"btb btn-xs btn-danger"])!!}
     {Form::close()!!}
</td>
</tr>
@endforeach
</table>
{!!$user->links()!!}
@endsection