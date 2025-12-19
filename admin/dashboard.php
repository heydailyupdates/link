<?php
require "auth.php";

$dataFile = "../content/data.json";
$data = json_decode(file_get_contents($dataFile), true);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
</head>
<body>

<h2>Edit Site Content</h2>

<form method="post" action="save.php" enctype="multipart/form-data">

  <h3>Profile</h3>
  <input name="name" value="<?= $data['profile']['name'] ?>" placeholder="Name"><br><br>
  <input name="tagline" value="<?= $data['profile']['tagline'] ?>" placeholder="Tagline"><br><br>

  <h3>Social Links</h3>
  <input name="instagram" value="<?= $data['social']['instagram'] ?>" placeholder="Instagram URL"><br><br>
  <input type="file" name="instagram_image"><br><br>

  <input name="whatsapp" value="<?= $data['social']['whatsapp'] ?>" placeholder="WhatsApp URL"><br><br>
  <input type="file" name="whatsapp_image"><br><br>

  <input name="facebook" value="<?= $data['social']['facebook'] ?>" placeholder="Facebook URL"><br><br>
  <input type="file" name="facebook_image"><br><br>

  <input name="youtube" value="<?= $data['social']['youtube'] ?>" placeholder="YouTube URL"><br><br>
  <input type="file" name="youtube_image"><br><br>

  <input name="map" value="<?= $data['social']['map'] ?>" placeholder="Map URL"><br><br>
  <input type="file" name="map_image"><br><br>

  <button type="submit">Save Changes</button>
</form>

<br>
<a href="logout.php">Logout</a>

</body>
</html>
