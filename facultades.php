<?php
include 'index.php';
include 'conexin.php';
?>

<h1> Listado de facultades </h1>
<div aling = "Right">
   <a href="btn btn-prmary">Adicionar</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $sql = "SELECT * FROM facultad";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["codigo_fac"]."</td>";
                echo "<td>".$row["Nombre_fac"]."</td>";
                echo "<td>
                    <a class='btn btn-success'>Editar</a>
                    <a class='btn btn-danger'>Eliminar</a>
                    </td>";
                echo "</tr>";
            }
        } else {
            echo "0 resultados";
        }
        $conn->close();
    ?>
  </tbody>
</table>
