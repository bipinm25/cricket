@extends('layout')

@section('content')
<h2>Players</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('saveplayer')}}" method="post" enctype="multipart/form-data">      
        @csrf
        <input type="hidden" name="team_id" value="{{request()->team_id}}" >
            <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control"  id="first_name"  name="first_name">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control"  id="last_name"  name="last_name">
            </div>
            <div class="form-group">
                <label for="image" class="form-label">Image</label>
                <input class="form-control" type="file" name="image" id="image">
            </div>
            <br>
                <button type="submit" class="btn btn-success">Submit</button>              
        </form>
<div class="row">
<div class="col-md-12">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">First Name</th>     
      <th scope="col">Last Name</th>
      <th scope="col">Team</th>          
    </tr>
  </thead>
  <tbody>
  @foreach($player as $p)
   <tr>
      <th scope="row">{{$p->id}}</th>
      <td><img src="{{asset('uploads/'.$p->image_url)}}" alt="player" height="100" width="100"/></td>
      <td>{{$p->first_name}}</td>      
      <td>{{$p->last_name}}</td>      
      <td>{{$p->team->name}}</td>      
    </tr>    
  @endforeach   
  </tbody>
</table>
</div>
</div>

@endsection