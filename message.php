<?php 
if ($insert) {
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>success!</strong> Your record insert successfully.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
}

if ($update) {
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>success!</strong> Your record update successfully.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
}

if ($delete) {
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>success!</strong> Your record delete successfully.
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
}

?>