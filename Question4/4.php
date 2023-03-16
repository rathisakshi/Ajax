<?php
if (isset($_FILES['image'])) {
  $file_name = $_FILES['image']['name'];
  $file_tmp = $_FILES['image']['tmp_name'];
  $file_dest = "uploads/" . $file_name;

  move_uploaded_file($file_tmp, $file_dest);

  echo $file_dest;
}
?>
