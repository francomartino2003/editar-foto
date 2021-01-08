<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>editar foto</title>
  </head>
  <body>
      <form class="" action="action.php" method="post" enctype="multipart/form-data">
        <?php $id = (int)$_GET['id']; ?>
        <img src="fotos_subidas/perfil<?php echo $id; ?>"  onerror="this.src='fotos_subidas/perfil00.png'" alt="NO IMAGE" width="100">
        <br>
        <br>
        <input type="file" name="foto" >
        <br>
        <br>
        <input type="hidden" name="id_usuario" value="<?php echo $id; ?>">
        <input type="submit" name="editar_foto" value="editar">
      </form>
  </body>
</html>
