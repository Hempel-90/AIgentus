<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Jobprofil – AIgentus</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="Aigentus6.png" />
</head>
<body>


  <!-- Navigation -->

  <nav class="navbar">
    <div class="navbar-left">
      <a href="index.php" class="logo-link">
        <img src="Aigentus6.png" alt="Logo" class="side-image">
        <span class="logo-text">AIgentus</span>
      </a>
      <ul class="nav-links">
        <li><a href="AIgentus für Kundenservice der Bundesagentur für arbeit.pdf" target="_blank">Pitch Deck</a></li>
        <li><a href="anfrage.php">Anfragen</a></li>
      </ul>
    </div>
    <div class="navbar-right">
      <ul class="nav-links">
        <li><a href="jobprofil.php">Jobprofil</a></li>
        <li><a href="login.php">Anmelden</a></li>
        <li><a href="register.php">Registrieren</a></li>
      </ul>
    </div>
  </nav>


  <!-- Profil-Bereich -->

  <section class="jobprofil-section">
    <h2>Dein Jobprofil</h2>

    <form action="..." method="post" enctype="multipart/form-data" class="jobprofil-form">
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="berufswunsch" placeholder="Berufswunsch" required>
        <textarea name="interessen" placeholder="Interessen und Stärken" required></textarea>

        <div class="file-upload-wrapper">
            <input type="file" name="lebenslauf" id="lebenslauf" class="file-input" required>
            <label for="lebenslauf" class="upload-button">Lebenslauf hochladen</label>
                <span id="file-name">Keine Datei ausgewählt</span>
        </div>

        <button type="submit">Profil speichern</button>
    </form>
   </section>



  <!-- Footer -->

  <footer class="footer">
    <p>© 2025 <img src="Aigentus6.png" alt="Logo" class="side-image2"> AIgentus | Project from <img src="ArBytes.Amt2.png" alt="Logo" class="logo"> | Designed by Kevin Krummacker</p>
  </footer>

</body>
</html>
