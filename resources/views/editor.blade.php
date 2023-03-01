<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-sm-8 mt-5">
          <form method="POST" action="{{url('create')}}">
            @csrf
            <input type="text" name="title" class="form-control mb-5" placeholder="Title">
            <textarea class="form-control mt-5" name="description" id="editor"></textarea>
            <button class="btn btn-success mt-4" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
      <script>
        ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .then( editor => {
                  console.log( editor );
          } )
          .catch( error => {
                   console.error( error );
          } );
      </script>
</body>
</html>
