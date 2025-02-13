<link rel="stylesheet" href="/components/login/login.css">

<div class="container-fluid text-center h-auto">    
  <div class="row content">
    <div class="col-sm-2 sidenav h-auto">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left h-auto"> 
    
          <div class="form-container">
        <h2>Regístrate</h2>
        <form action="login.php" method="post">
          <div class="form-group mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico" required class="form-control">
          </div>

          <div class="form-group mb-3">
            <label for="password" class="form-label">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required class="form-control">
          </div>

          <button type="submit" class="btn btn-primary w-100">Enviar</button>

          <a href="#" class="d-block mt-3 text-primary text-decoration-none">¿Ya tienes cuenta? Inicia sesión aquí</a>
        </form>

    </div>
    <div class="col-sm-2 sidenav h-auto">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>