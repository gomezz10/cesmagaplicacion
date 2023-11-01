<?php
include 'index.php';
include 'conexin.php';
?>
<div class ="container">

  <!-- Default form subscription -->
<form class="text-center border border-light p-5" action="registrarFac.php" Method ="POST">

<p class="h4 mb-4">Registro facultad</p>

<!-- Name -->
<input type="text" id="codigo_fac" name ="codigo_fac" class="form-control mb-4" placeholder="codigo">

<!-- Email -->
<input type="text" id="Nombre_fac"  name = "Nombre_fac" class="form-control mb-4" placeholder="facultad">

<!-- Sign in button -->
<button class="btn btn-info btn-block" type="submit">Enviar</button>



<!-- Default form subscription -->
</form>
</div>