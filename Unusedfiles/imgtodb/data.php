
<?php
require 'db.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data</title>
  </head>
  <body>
    <table border = 1 cellspacing = 0 cellpadding = 10>
      <tr>
        <td>#</td>
        <td>Name</td>
        <td>Image</td>
      </tr>
      <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM tb_upload ORDER BY id DESC")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td> <img src="img/<?php echo $row["image"]; ?>" width = 50px title="<?php echo $row['image']; ?>"> </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
    <a href="../uploadimagefile">Upload Image File</a>
  </body>
</html>