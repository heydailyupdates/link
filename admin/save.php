<?php
require "auth.php";

$dataFile = "../content/data.json";
$data = json_decode(file_get_contents($dataFile), true);

$data['profile']['name'] = $_POST['name'];
$data['profile']['tagline'] = $_POST['tagline'];

$uploadDir = "../uploads/";

foreach (['instagram','whatsapp','facebook','youtube','map'] as $key) {
    $data['social'][$key] = $_POST[$key] ?? "";

    if (!empty($_FILES[$key.'_image']['name'])) {
        $filename = time() . "_" . basename($_FILES[$key.'_image']['name']);
        move_uploaded_file($_FILES[$key.'_image']['tmp_name'], $uploadDir.$filename);
        $data['social'][$key.'_image'] = "/uploads/".$filename;
    }
}

file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT));

header("Location: dashboard.php");
exit;
