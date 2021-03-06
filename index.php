<?php require 'config.php'; ?>

<?php require 'crud.php'; ?>

<!doctype html>
<html lang="en">
<!--==========================================================================================-->
<!-- Body Part -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--==========================================================================================-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!--==========================================================================================-->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <title>ToDo List by Yogesh Nile</title>
  </head>
<!--==========================================================================================-->
<!-- Body Part -->
  <body>
<!--==========================================================================================-->  
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Note</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="/crud-in-php/" method="POST">
          <input type="hidden" name="snoEdit" id="snoEdit">
           <div class="form-group">
            <label for="title">Note Title</label>
            <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp" required="">
          </div>
          <div class="form-group">
            <label for="disc">Note Discription</label>
            <textarea class="form-control" id="discEdit" name="discEdit" rows="3" required=""></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Update Note</button>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>
<!--==========================================================================================-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="/crud-in-php/">TODO List</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<!--==========================================================================================-->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active mb-md-0 ml-md-3">
        <a class="nav-link" href="/crud-in-php/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item mb-md-0 ml-md-3">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item mb-md-0 ml-md-3">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
  </div>
<!--==========================================================================================-->
</nav>

<?php require 'message.php'; ?>

<!--==========================================================================================-->
<div class="container my-4">
  <h2>Add a Note</h2>
  <form action="/crud-in-php/" method="POST">
  <div class="form-group">
    <label for="title">Note Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" required="">
  </div>
  <div class="form-group">
    <label for="disc">Note Discription</label>
    <textarea class="form-control" id="disc" name="disc" rows="3" required=""></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Add Note</button>
</form>
<hr>
</div>
<!--==========================================================================================-->
<div class="container my-4">
 <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Title</th>
      <th scope="col">Discription</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

<?php require 'table.php'; ?>

  </tbody>
</table>
<hr>
</div>
<br>
<div class="container">
  <nav class="navbar navbar-light bg-dark">
  	<p style="color: white;">Made with ❤️ by  <a href="https://twitter.com/yogeshnile">@YogeshNile</a><p>
</nav>
</div>
<!--==========================================================================================-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!--==========================================================================================-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    <!--==========================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!--==========================================================================================-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!--==========================================================================================-->
     <script type="text/javascript">
      $(document).ready( function () {
    $('#myTable').DataTable();
  } );
    </script>
<!--==========================================================================================-->
    <script type="text/javascript" src="modal.js"></script>
<!--==========================================================================================-->
  </body>
</html>