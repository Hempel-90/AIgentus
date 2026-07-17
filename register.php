<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrieren – AIgentus</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <nav class="navbar">
    <div class="navbar-left">
      <a href="index.php" class="logo-link">
        <img src="Aigentus6.png" alt="Logo" class="side-image" />
        <span class="logo-text">AIgentus</span>
      </a>
      <ul class="nav-links">
        <li><a href="AIgentus für Kundenservice der Bundesagentur für arbeit.pdf" target="_blank">Pitch Deck</a></li>
        <li><a href="anfrage.php">Anfragen</a></li>
      </ul>
    </div>
    <div class="login-dropdown">
      <img src="Aigentus6.png" alt="Login" class="login-icon" />
      <div class="dropdown-content">
        <a href="login.php">Einloggen</a>
        <a href="register.php">Registrieren</a>
      </div>
    </div>
  </nav>

  <section class="auth-container">
    <h2>Registrieren</h2>
    <form action="register_handler.php" method="post" class="auth-form">
      <input type="text" name="name" placeholder="Name" required />
      <input type="email" name="email" placeholder="E-Mail" required />
      <input type="password" name="password" placeholder="Passwort" required />
      <button type="submit">Registrieren</button>
    </form>
    <p>Schon registriert? <a href="login.php">Hier einloggen</a></p>
  </section>

</body>
</html>
