<?php
<<<<<<< HEAD

// Si ya hay sesión iniciada, redirige al index
if (isset($_SESSION['usuario_id'])) {
  header('Location: views/index.php');
  exit;
}

// Inicializa variables para evitar errores
$error = $_GET['error'] ?? null;
$redirect = $_GET['redirect'] ?? null;
?>

=======
session_start();
if (isset($_SESSION['usuario'])) {
  header("Location: index.php");
  exit;
}

$mensaje = $_GET['error'] ?? '';
?>
>>>>>>> main
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
<<<<<<< HEAD
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISEC - Iniciar Sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to bottom, #78c3f3, #007ea7);
      font-family: Arial, sans-serif;
      min-height: 100vh;
      margin: 0;
      display: flex;  
      align-items: center;
      justify-content: center;
      padding: 1rem;
    }
    .login-box {
      background-color: #20b2aa;
      padding: 2rem;
      border-radius: 10px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
      color: white;
      text-align: center;
    }
    .login-box h2 {
      margin-bottom: 10px;
    }
    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 5px;
    }
    .login-box button {
      width: 100%;
      padding: 10px;
      background: linear-gradient(to right, #36d1dc, #5b86e5);
      border: none;
      color: white;
      font-weight: bold;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }
    .login-box .error {
      background: #f8d7da;
      color: #721c24;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 10px;
    }
    .login-box .form-check {
      text-align: left;
      margin-top: 10px;
    }
    .login-box a {
      color: #fff;
      text-decoration: underline;
      font-size: 0.9rem;
    }
    .login-box a:hover {
      color: #e0f0ff;
=======
  <title>Login - SISEC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to bottom, #a4d8ef, #74c3d1);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
    }

    .login-box {
      background: #20c6c6;
      color: white;
      padding: 40px 30px;
      border-radius: 12px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
    }

    .login-box h2 {
      font-weight: bold;
      text-align: center;
      margin-bottom: 10px;
    }

    .login-box p {
      text-align: center;
      font-size: 14px;
      margin-bottom: 30px;
    }

    .login-box .form-control {
      background: white;
      border: none;
      border-radius: 4px;
      padding: 10px 12px;
    }

    .login-box .form-check-label {
      color: white;
    }

    .btn-login {
      width: 100%;
      background: linear-gradient(to right, #0066cc, #3399ff);
      border: none;
      color: white;
      font-weight: bold;
      padding: 10px;
      border-radius: 25px;
    }

    .btn-login:hover {
      background: #005bb5;
    }

    .login-box small {
      display: block;
      margin-top: 10px;
      text-align: right;
      color: white;
    }

    .input-group-text {
      background: white;
      border: none;
>>>>>>> main
    }
  </style>
</head>
<body>
<<<<<<< HEAD
  <div class="login-box">
    <h2>SISEC</h2>
    <p>Sistema de seguridad y comunicaciones</p>

    <?php if ($error): ?>
      <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form action="controllers/login_procesar.php" method="POST">
      <input type="text" name="nombre" placeholder="Usuario" required>
      <input type="password" name="password" placeholder="Contraseña" required>

      <?php if ($redirect): ?>
        <input type="hidden" name="redirect" value="<?= htmlspecialchars($redirect) ?>">
      <?php endif; ?>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember_me" id="remember_me">
        <label class="form-check-label" for="remember_me">
          Mantener sesión iniciada
        </label>
      </div>

      <button type="submit">INICIA SESIÓN</button>
    </form>

    <p class="mt-3"><a href="#">¿Olvidaste tu contraseña?</a></p>
  </div>
</body>
</html>

=======

  <form class="login-box" method="POST" action="controllers/AuthController.php">
    <h2>SISEC</h2>
    <p>Sistema de seguridad y comunicaciones</p>

    <?php if ($mensaje): ?>
      <div class="alert alert-danger py-1 text-center"><?= htmlspecialchars($mensaje) ?></div>
    <?php endif; ?>

    <div class="mb-3 input-group">
      <span class="input-group-text"><i class="fas fa-user"></i></span>
      <input type="text" name="usuario" class="form-control" placeholder="Usuario" required>
    </div>

    <div class="mb-3 input-group">
      <span class="input-group-text"><i class="fas fa-key"></i></span>
      <input type="password" name="clave" class="form-control" placeholder="Contraseña" required>
    </div>

    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" name="recordar" id="recordar">
      <label class="form-check-label" for="recordar">
        Mantener sesión iniciada
      </label>
    </div>

    <button type="submit" class="btn btn-login">INICIA SESIÓN</button>

    <small><a href="#" class="text-light text-decoration-none">¿Olvidaste tu contraseña?</a></small>
  </form>

</body>
</html>
>>>>>>> main
