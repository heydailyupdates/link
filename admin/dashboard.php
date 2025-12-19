<?php
require "auth.php";
$data=json_decode(file_get_contents("../content/data.json"),true);
?>
<form method="post" action="save.php" enctype="multipart/form-data">
<h2>Edit Site</h2>

Name <input name="name" value="<?=$data['profile']['name']?>"><br>
Tagline <input name="tagline" value="<?=$data['profile']['tagline']?>"><br>
Logo <input type="file" name="logo"><br><br>

<?php foreach($data['profile']['bullets'] as $i=>$b): ?>
Emoji <input name="bullets[<?=$i?>][emoji]" value="<?=$b['emoji']?>">
Text <input name="bullets[<?=$i?>][text]" value="<?=$b['text']?>"><br>
<?php endforeach; ?>

<br>Background Color
<input name="bg" value="<?=$data['theme']['background_value']?>"><br><br>

<?php foreach(["instagram","whatsapp","facebook","map"] as $s): ?>
<?=$s?> URL <input name="<?=$s?>" value="<?=$data['social'][$s]?>">
Image <input type="file" name="<?=$s?>_image"><br>
<?php endforeach; ?>

<?php foreach($data['actions'] as $i=>$a): ?>
Button <input name="actions[<?=$i?>][label]" value="<?=$a['label']?>">
URL <input name="actions[<?=$i?>][url]" value="<?=$a['url']?>"><br>
<?php endforeach; ?>

<button>Save</button>
</form>
<a href="logout.php">Logout</a>
