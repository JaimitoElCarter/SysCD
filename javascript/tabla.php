
<?php
 
 require_once 'LIGA3/LIGA.php';
 //BD('localhost', 'root', '', 'base');

 $liga = LIGA('base.usuarios');
 $cols = array('id', 'nombre', 'fecha', 'Acciones'=>'<link rel="stylesheet" href="fonts/style.css"><button align="center" class="borrar" data="@[0]"><span class="icon-bin"></span></button>');
 
 echo '<label>Filtro: <input id="filtro" name="filtro" /></label>';
 
 $props = array('nombre'=>array('class'=>'busca'), 'id'=>'class="busca"');
 
 HTML::tabla($liga, 'Usuarios registrados', $cols, $props);
?>