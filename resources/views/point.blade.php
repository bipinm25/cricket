@extends('layout')
@section('content')
<h2>Match</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('savepoints')}}" method="post">
        @csrf
            <div class="form-group">
              <label for="team_id">Team</label>
              <select class="form-control" id="team_id" name="team_id">
                @foreach($allteam  as $team)
                 <option value="{{$team->id}}">{{$team->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
                  <label for="point">Point</label>
                  <input type="text" class="form-control" id="point"  name="point">
            </div> 
            <div class="form-group">
                  <label for="total_match_played">Total Match Played</label>
                  <input type="text" class="form-control" id="total_match_played"  name="total_match_played">
            </div> 
            <div class="form-group">
                  <label for="total_win">Total Win</label>
                  <input type="text" class="form-control" id="total_win"  name="total_win">
            </div>      

            <br>
                <button type="submit" class="btn btn-success submit">Submit</button>              
        </form>

<div class="row">
<div class="col-md-12">
<table class="table">
  <thead>
    <tr>      
      <th scope="col">Team</th>
      <th scope="col">Point</th>
      <th scope="col">Match Played</th>
      <th scope="col">Total Win</th>
    </tr>
  </thead>
  <tbody>
  @foreach($point as $p)
  <tr>      
      <td>{{$p->team->name}}</td>
      <td>{{$p->point}}</td>      
      <td>{{$p->total_match_played}}</td>      
      <td>{{$p->total_win}}</td>      
    </tr>
  @endforeach 
  </tbody>
</table>
</div>
</div>


@endsection