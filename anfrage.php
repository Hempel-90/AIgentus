<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Anfragen – AIgentus</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <!-- Navigation gleich wie auf index.html -->
  <nav class="navbar">
    <a href="index.html" class="logo-link">
      <img src="Aigentus6.png" alt="Logo" class="side-image">
      <span class="logo-text">AIgentus</span>
    </a>
    <ul class="nav-links">
      <li><a href="AIgentus für Kundenservice der Bundesagentur für arbeit.pdf" target="_blank">Pitch Deck</a></li>
      <li><a href="anfrage.php">Anfragen</a></li>
    </ul>
    <div class="login-dropdown">
      <img src="Aigentus6.png" alt="Login" class="login-icon">
      <div class="dropdown-content">
        <a href="#">Einloggen</a>
        <a href="#">Registrieren</a>
      </div>
    </div>
  </nav>

  <!-- Anfrageformular -->
  <section class="demo">
    <div class="feature-box">
      <h2>Anfragen</h2>
      <p>Du möchtest uns etwas sagen oder wissen, wie Aigentus funktioniert?<br><br>Dann schreib uns:</p>
      <form class="demo-form">
        <input type="text" placeholder="Name" required><br><br>
        <input type="email" placeholder="E-Mail-Adresse" required><br><br>
        <textarea placeholder="Nachricht oder Wunschzeitraum für die Demo"></textarea><br><br>
        <button class="presentation-button" type="submit">Senden</button>
      </form>
    </div>
  </section>

  <footer class="footer">
    <p>© 2025 Aigentus | Projekt von Gruppe B | Designed by Kevin Krummacker</p>
  </footer>

</body>
</html>
