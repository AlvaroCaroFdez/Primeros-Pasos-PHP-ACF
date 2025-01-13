<!DOCTYPE html>
<html>
  <head>
    <title>Página de búsqueda de nombres</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
      }

      h1 {
        text-align: center;
        margin-top: 30px;
        color: #B22222; /* Color rojo oscuro */
      }

      form {
        display: flex;
        justify-content: center;
        margin-top: 20px;
      }

      input[type="text"] {
        padding: 10px;
        font-size: 16px;
        width: 300px;
        margin-right: 10px;
        border: 1px solid #B22222; /* Borde rojo */
        border-radius: 5px;
        background-color: #fff;
      }

      button {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        background-color: #D32F2F; /* Rojo intenso */
        color: white;
        border: none;
        border-radius: 5px;
      }

      button:hover {
        background-color: #C62828; /* Rojo más oscuro al hacer hover */
      }

      h2 {
        text-align: center;
        color: #B22222;
      }

      ul {
        list-style-type: none;
        padding-left: 0;
        text-align: center;
      }

      li {
        padding: 8px;
        background-color: #fff;
        margin: 5px 0;
        border-radius: 4px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        color: #B22222; /* Texto rojo para los nombres */
      }

      p {
        text-align: center;
        color: #B22222; /* Texto rojo para el mensaje */
      }

      .container {
        max-width: 800px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
    </style>
  </head>
  <body>

  <?php
  $nombres = [
      "Yeray Almoguera González",
      "Álvaro Caro Fernández",
      "Carlos Cordero Moreno",
      "Alejandro Díaz Barea",
      "Santiago Domínguez Gómez",
      "Lucía Espinosa Sánchez",
      "Alejandro González Benítez",
      "Víctor Jiménez Corada",
      "Ángel Martínez Sánchez",
      "Pablo Olvera Colino",
      "Gonzalo Pulido Sánchez",
      "Francisco Javier Rodríguez Acosta",
      "Nicolás Ruiz Ruiz",
      "Félix Sánchez González",
      "Alejandro Seoane Martínez",
      "Rafael Tocino Batista",
      "Israel Valderrama García",
      "Isaac Vallet Colchero"
  ];

  $search = isset($_GET['search']) ? $_GET['search'] : '';

  if ($search) {
      $nombres = array_filter($nombres, function($nombre) use ($search) {
          return stripos($nombre, $search) !== false;
      });
  }

  echo "<h1>Buscar nombres de clase</h1>";

  echo '<form method="get">';
  echo '<input type="text" name="search" placeholder="Ejemplo: Álvaro" value="' . htmlspecialchars($search) . '" />';
  echo '<button type="submit">Buscar</button>';
  echo '</form>';

  // Solo mostrar resultados si hay búsqueda
  if ($search) {
      echo "<h2>Resultados:</h2>";
      echo "<ul>";
      if (empty($nombres)) {
          echo "<p>No se encontraron resultados.</p>";
      } else {
          foreach ($nombres as $nombre) {
              echo "<li>" . htmlspecialchars($nombre) . "</li>";
          }
      }
      echo "</ul>";
  }

  ?>

  </body>
</html>