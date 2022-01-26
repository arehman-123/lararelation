<!DOCTYPE html>
<html lang="en">
<head>
  <title>Subcategory</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <form action="{{ route('subcategory.store') }}" method="post">
        @csrf
    <select class="form-select" aria-label="Default select example" name="category_id">
        <option selected>Selected Category</option>
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" id="">
    </div>
    <div class="form-group">
      <label for="slug">Slug</label>
      <input type="text" name="slug" class="form-control" id="">
    </div>

    <div class="form-group">
        <label for="thumbnail">Thumbnail</label>
        <input type="text" name="thumbnail" class="form-control" id="">
      </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
</html>
