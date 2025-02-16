<link rel="stylesheet" href="../components/register/register.css">

<div class="text-container">
  <!-- div que contiene la fila??? -->
  <div class="row content h-100 text-center">
    <!-- columna izquierda -->
    <div class="sidetext col-2 h-auto">
    </div>
    <!-- columna central -->
    <div class="centertext col-8 text-left h-auto"> 
      <h1>Registro</h1>
      <hr>  
    <!-- Formulario -->
      <form id="registerForm">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
          <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
    <!-- columna derecha -->
    <div class="col-2 sidetext h-auto">
    </div>
  </div>
</div>
<script src="../components/register/register.js"></script> 