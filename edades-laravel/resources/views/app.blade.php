<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mi página con Bootstrap</title>

  <!-- Bootstrap 5 CSS desde CDN -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
</head>
<body>
    <section>
        @yield('content')
    </section>
  <!-- Navbar -->
  

  <!-- Contenido principal -->
  
  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3 mt-5">
    &copy; 2025 Sebas Inc. | Todos los derechitos reservados 7w7
  </footer>

  <!-- Bootstrap JS y Popper.js -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
  </script>
</body>
</html>
