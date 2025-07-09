<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<?php include __DIR__ . '/includes/head.php'; ?>

  <meta charset="UTF-8" />
  <title>SISEC - <?= htmlspecialchars($pageTitle ?? 'Página') ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS y FontAwesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="/sisec-ui/assets/css/estilos.css">

<body>

<<<<<<< HEAD
  <!-- Topbar -->

  <?php include __DIR__ . '/includes/topbar.php'; ?>

  <!-- Sidebar fijo desktop -->
  <?php include __DIR__ . '/includes/sidebar.php'; ?>
=======
  <!-- Sidebar -->
  <div class="sidebar">
    <h4><i class="fas fa-user-circle"></i> SISEC</h4>
    <a href="/sisec-ui/views/inicio/index.php" class="<?= ($activePage ?? '') === 'inicio' ? 'active' : '' ?>"><i class="fas fa-home"></i> Inicio</a>
    <a href="/sisec-ui/views/dispositivos/listar.php" class="<?= ($activePage ?? '') === 'dispositivos' ? 'active' : '' ?>"><i class="fas fa-camera"></i> Dispositivos</a>
    <a href="/sisec-ui/views/dispositivos/registro.php" class="<?= ($activePage ?? '') === 'registro' ? 'active' : '' ?>"><i class="fas fa-plus-circle"></i> Registrar dispositivo</a>
    <a href="/sisec-ui/views/usuarios/index.php" class="<?= ($activePage ?? '') === 'usuarios' ? 'active' : '' ?>"><i class="fa-solid fa-users" style="color: #ffffff;"></i> Usuarios</a>
    <a href="/sisec-ui/views/usuarios/registrar.php" class="<?= ($activePage ?? '') === 'reportes' ? 'active' : '' ?>"><i class="fa-regular fa-user" style="color: #ffffff;"></i> Registrar usuario</a>
  </div>

  <div class="topbar">
    <div class="d-flex align-items-center">
      <span class="sidebar-toggler d-md-none" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
      </span>
      <h5 class="m-0 ms-2"><?= htmlspecialchars($pageHeader ?? 'SISEC') ?></h5>
    </div>

    <div class="topbar-right d-flex align-items-center">
      <i class="fas fa-bell me-3"></i>
      <i class="fas fa-cog me-3"></i>
      <span class="me-2"><?= htmlspecialchars($_SESSION['nombre'] ?? 'Usuario') ?></span>
      <img src="https://i.pravatar.cc/36" alt="Perfil" class="me-3">
      <a href="/sisec-ui/logout.php" class="btn btn-sm btn-outline-secondary">Cerrar sesión</a>
    </div>
  </div>
>>>>>>> main


  <!-- Contenido principal -->
  <main class="main">
    <?= $content ?? '<p>Contenido no definido.</p>' ?>
  </main>

  <!-- Sidebar móvil (offcanvas) -->
    <?php include __DIR__ . '/includes/sidebar_mobile.php'; ?>

    <script src="/sisec-ui/assets/js/notificaciones.js"></script>


  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
