<?php 
$insert = false;
$update = false;
$delete = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset( $_POST['snoEdit'])){
      // Update the record
    $sno = $_POST["snoEdit"];
    $title = $_POST["titleEdit"];
    $description = $_POST["discEdit"];

    $sql = "UPDATE `notes` SET `title` = '$title',`discription` = '$description' WHERE `notes`.`sno` = $sno";
    $result = mysqli_query($conn, $sql);
    if ($result) {
    $update = true;
    }
  }
  else {
  $title = $_POST["title"];
  $disc = $_POST["disc"];

  $sql = "INSERT INTO `notes` (`title`, `discription`) VALUES ('$title', '$disc');";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    $insert = true;
  }
}
}

if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `notes` WHERE `sno` = $sno";
  $result = mysqli_query($conn, $sql);
}
 ?>