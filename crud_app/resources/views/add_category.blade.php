<!DOCTYPE html>
<html lang="en">
<head>
  <title>CURD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
    <!-- <marquee behavior="" direction=""></marquee> -->
  <marquee>CURD Operation</marquee>
</div>
<div class="container">
  
<div>
   <h1>Add Category</h1>
</div>
<form action="/category_insert" method='POST'>
@csrf
<label for="category">Category title: </label><br>
    <input type="text" name="title" ><br><br>
    <button type='submit' name='btn_submit' class='btn btn-primary'>Add</button>
</form>
</div>
</body>
</html>
