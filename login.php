<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login – AIgentus</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

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
    <div class="login-dropdown">
      <img src="Aigentus6.png" alt="Login" class="login-icon">
      <div class="dropdown-content">
        <a href="login.php">Einloggen</a>
        <a href="register.php" id="openRegister">Registrieren</a>
      </div>
    </div>
  </nav>

  <div class="auth-container">
    <!-- Login -->
    <div class="form-section active" id="loginForm">
      <h2>Login</h2>
      <input type="email" placeholder="E-Mail" required>
      <input type="password" placeholder="Passwort" required>
      <button type="submit">Einloggen</button>
      <span class="toggle-link" onclick="toggleForm()">Noch kein Konto? Jetzt registrieren</span>
    </div>

    <!-- Registrierung -->
    <div class="form-section" id="registerForm">
      <h2>Registrieren</h2>
      <input type="text" placeholder="Name" required>
      <input type="email" placeholder="E-Mail" required>
      <input type="password" placeholder="Passwort" required>
      <button type="submit">Registrieren</button>
      <span class="toggle-link" onclick="toggleForm()">Bereits registriert? Zum Login</span>
    </div>
  </div>

  <script>
    function toggleForm() {
      document.getElementById("loginForm").classList.toggle("active");
      document.getElementById("registerForm").classList.toggle("active");
    }
  </script>

</body>
</html>
