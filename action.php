<?php
  if (isset($_POST['editar_foto'])) {
    if ($_FILES['foto']['size'] > 0) {
      echo "el file existe.  ";
      $extenciones = array(0=>'image/jpg',1=>'image/jpeg',2=>'image/png',3=>'image/svg');
      if (in_array($_FILES['foto']['type'], $extenciones)) {
        echo "el file es una imagen valida.  ";
        $max_kb = 150;
        $bytes = (int)$_FILES['foto']['size'];
        $kb = $bytes / 1024;
        if ($kb < $max_kb) {
          echo "la imagen pesa menos de 150 kb.  ";
          $_FILES['foto']['name'] = 'perfil'.$_POST['id_usuario'];
          if (move_uploaded_file($_FILES['foto']['tmp_name'], "fotos_subidas/".$_FILES['foto']['name'])) {
            echo "foto guardada en la carpeta 'fotos_subidas' del servidor.  ";
          }
        }
      }
    }
  }
?>
