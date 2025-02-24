<link rel="stylesheet" href="/components/login/login.css">

<div class="container-fluid text-center h-auto">    
  <div class="row content">
    <div class="col-sm-2 sidenav h-auto">
      
    </div>
    
    <div class="col-sm-8 text-left h-auto"> 
    
          <div class="form-container">
        <h2>Regístrate</h2>
        
        <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <form id="loginForm" name="Formulario_Iden_usu" method="post">
    <fieldset>
        <div class="camposLogin">
            <input id="USUARIO" type="text" name="USUARIO" placeholder="Usuario" size="15" maxlength="25" value="">
        </div>
        <div class="camposLogin" id="c_pass">
            <input id="CLAVE_P" type="password" name="CLAVE_P" placeholder="Contraseña" size="15" maxlength="15">
        </div>
        <div class="camposLogin" id="c_text" style="display:none;">
            <input id="CLAVE_T" type="text" name="CLAVE_T" placeholder="Contraseña" size="15" maxlength="25">
        </div>
        <div class="camposLogin">
            <select id="ROL" name="ROL">
                <option value="alumno">Alumno</option>
                <option value="profesor">Profesor</option>
            </select>
        </div>
        <div class="checkLogin">
            <input class="filled-in" id="VER_CLAVE" type="checkbox" name="VER_CLAVE">&nbsp;
            <label for="VER_CLAVE" title="Ver clave" style="margin-bottom: 3%;"><span></span>Mostrar contraseña</label>
        </div>
        <div class="boton_right">
            <input name="Entrar" id="Entrar" value="Entrar" class="btn" alt="Entrar" title="Entrar" type="submit">
        </div>
        <div id="MENSAJE"></div>
    </fieldset>
</form>
   

    </div>
    <div class="col-sm-2 sidenav h-auto">
      <div class="well">
      


      </div>
    </div>
  </div>
</div>




<!-- 
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
 -->