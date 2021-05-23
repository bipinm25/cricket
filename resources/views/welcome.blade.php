<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">            
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Team</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Players</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Matches</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Point Table</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        <h2>Manage Team</h2>
            <form action="" method="post">
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
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
</div>

    </div>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>
       
    </script>

    </body>
</html>
