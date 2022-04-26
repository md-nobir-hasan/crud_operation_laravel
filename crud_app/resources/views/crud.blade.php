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
            
  <table class="table table-hover">
    <a type='button' href='add_category' class='btn btn-primary'>Add new category</a>
   
    <thead>
      <tr>
        <th>SL. No.</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($category as $category)
      <tr>
        <td>{{$loop->index+1}}
        </td>
        <td>{{$category->title}}</td>
        <td>
            <a  href='/category_update_page/{{$category->id}}' name="btn_edit" class="btn btn-info">Edit</a>
            <a  href='/delete/{{$category->id}}' name="btn_delete" class="btn btn-danger">delete</a>
       </td>
     
      </tr>
     @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
