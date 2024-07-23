<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos.css">
  <title>comparaciones</title>
</head>
<div class="capa">

  <body>
    <form action="" method="POST">
      <div class="text-areas">
        <textarea class=nombres1 name="nombres1" id="nombres1" cols="30" rows="10"></textarea>
        <textarea class=nombres2 name="nombres2" id="nombres2" cols="30" rows="10"></textarea>
      </div>
      <div class="comparar">
        <input type="submit" value="Comparar">
        <button name="limpiar">Limpiar</button>
      </div>
    </form>

    <?php
    if ($_POST && count($_POST) != 0) {
      $nombres1 = explode("\n", $_POST['nombres1']);
      $nombres2 = explode("\n", $_POST['nombres2']);
      $duplicados = array_intersect($nombres1, $nombres2);
      $no_duplicados1 = array_diff($nombres1, $nombres2);
      $no_duplicados2 = array_diff($nombres2, $nombres1);
    }
    ?>

    <?php
    if (isset($_POST['limpiar'])) {
      unset($duplicados);
      unset($no_duplicados1);
      unset($no_duplicados2);
    }
    ?>

    <div class="container-tables">
      <table>
        <thead>
          <td>
            <strong>Duplicados</strong>
          </td>
        </thead>
        <?php
        if (isset($duplicados)) {
          foreach ($duplicados as $duplicado) { ?>
            <tr>
              <td><?php echo $duplicado ?></td>
            </tr>
          <?php }
        } else { ?>

          <tr>
            <td><strong>No se han enviado datos</strong></td>
          </tr>
        <?php } ?>
      </table>

      <table>
        <thead>
          <td>
            <strong>No duplicados caja 1</strong>
          </td>
        </thead>
        <?php
        if (isset($no_duplicados1)) {
          foreach ($no_duplicados1 as $noduplicado) { ?>
            <tr>
              <td><?php echo $noduplicado ?></td>
            </tr>
          <?php }
        } else { ?>

          <tr>
            <td><strong>No se han enviado datos</strong></td>
          </tr>
        <?php } ?>
      </table>

      <table>
        <thead>
          <td>
            <strong>No duplicados caja 2</strong>
          </td>
        </thead>
        <?php
        if (isset($no_duplicados2)) {
          foreach ($no_duplicados2 as $noduplicado) { ?>
            <tr>
              <td><?php echo $noduplicado ?></td>
            </tr>
          <?php }
        } else { ?>

          <tr>
            <td><strong>No se han enviado datos</strong></td>
          </tr>
        <?php } ?>
      </table>
    </div>

  </body>
  <footer class="footer">
    <p>Página diseñada por Santiago T.</p>
  </footer>
</div>

</html>