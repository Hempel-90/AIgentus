<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $beruf = htmlspecialchars($_POST["beruf"]);
    $interessen = htmlspecialchars($_POST["interessen"]);

    // Datei speichern (falls vorhanden)
    $uploadMessage = "";
    if (isset($_FILES["lebenslauf"]) && $_FILES["lebenslauf"]["error"] === 0) {
        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) mkdir($uploadDir);
        $filename = basename($_FILES["lebenslauf"]["name"]);
        $uploadPath = $uploadDir . $filename;
        move_uploaded_file($_FILES["lebenslauf"]["tmp_name"], $uploadPath);
        $uploadMessage = "Lebenslauf gespeichert: <a href='$uploadPath'>$filename</a>";
    }

    echo "<!DOCTYPE html>
    <html lang='de'>
    <head><meta charset='UTF-8'><title>Profil gespeichert</title><link rel='stylesheet' href='style.css'></head>
    <body>
    <section class='demo'><div class='feature-box'>
      <h2>Profil erfolgreich gespeichert</h2>
      <p><strong>Name:</strong> $name</p>
      <p><strong>Berufswunsch:</strong> $beruf</p>
      <p><strong>Interessen:</strong><br>$interessen</p>
      <p>$uploadMessage</p>
      <a href='jobprofil.php'><button class='presentation-button'>Zurück zum Profil</button></a>
    </div></section>
    </body></html>";
} else {
    header("Location: jobprofil.php");
    exit;
}
