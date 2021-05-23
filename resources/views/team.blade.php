@extends('layout')

@section('content')
        <h2>Team</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('saveteam')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
            <label for="team_name">Team Name:</label>
            <input type="text" class="form-control"  id="team_name"  name="team_name">
            </div>
            <div class="form-group">
                <label for="club_state">Club State:</label>
                <input type="text" class="form-control"  id="club_state"  name="club_state">
            </div>
            <div class="form-group">
                <label for="logo" class="form-label">Logo</label>
                <input class="form-control" type="file" name="logo" id="logo">
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
      <th scope="col">Logo</th>
      <th scope="col">Name</th>     
    </tr>
  </thead>
  <tbody>
  @foreach($team as $t)
    <tr>
      <th scope="row">{{$t->id}}</th>
      <td><img src="{{asset('uploads/'.$t->logo_url)}}" alt="team" height="100" width="100"/></td>
      <td><a href="{{route('player',$t->id)}}">{{$t->name}}</a></td>
    </tr>
  @endforeach
   
  </tbody>
</table>
</div>
</div>
@endsection
