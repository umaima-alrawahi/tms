<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> emplpyee page</h1>
<form action="/trips/store" method="POST">
  <label>travel to:</label>
  <input type="text" id="travel" name="travel"><br><br>
  <label>tNumber of passengers:</label>
  <input type="number" id="no_passengers" name="no_passengers"><br><br>

  <button type="submit">Add travel</button>
  @csrf()
</form>

</body>
</html> 