@extends('layout')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <form action="{{route('savematch')}}" method="post">
        @csrf
            <div class="form-group">
              <label for="home_team">Home Team</label>
              <select class="form-control" id="home_team" name="home_team">
                @foreach($allteam  as $team)
                 <option value="{{$team->id}}">{{$team->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="away_team">Away Team</label>
              <select class="form-control" id="away_team" name="away_team">
                @foreach($allteam  as $team)
                 <option value="{{$team->id}}">{{$team->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
            <label for="">Winner Team</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="winner" type="radio" id="inlineCheckbox1" value="home_team">
                <label class="form-check-label" for="inlineCheckbox1">Home Team</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"  name="winner" id="inlineCheckbox2" value="away_team">
                <label class="form-check-label" for="inlineCheckbox2">Away Team</label>
                </div>     
              </div>              
                    <div class="form-group">
                <label for="match_date">Match Date</label>
                <input type="text" class="form-control datepicker" id="match_date"  name="match_date">
            </div>           
            <br>
                <button type="submit" class="btn btn-success submit">Submit</button>              
        </form>

<div class="row">
<div class="col-md-12">
<table class="table">
  <thead>
    <tr>      
      <th scope="col">Team1</th>
      <th scope="col">Team2</th>
      <th scope="col">Winner</th>   
      <th scope="col">Date</th>      
    </tr>
  </thead>
  <tbody>
  @foreach($matches as $m)
    <tr>     
      <td>{{$m->teamhome->name}}</td>     
      <td>{{$m->teamaway->name}}</td>
      <td>{{$m->teamwinner->name}}</td>
      <td>{{$m->match_date}}</td>
    </tr>
  @endforeach 
  </tbody>
</table>
</div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$('.datepicker').datepicker();

$('.submit').on('click', function(e){
  e.preventDefault();
  if($('select[name=home_team]').val() == $('select[name=away_team]').val()){
    alert('Home and Away team should be different');
  }else{
    $('form').submit();
  }
})
</script>
@endsection