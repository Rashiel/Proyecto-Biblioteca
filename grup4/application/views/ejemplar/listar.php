<table border="1">
  <tr>
     <th>ID</th>
     <th>nombres</th>
     <th>resumen</th>
     <th>categoria</th>
     <th>Opciones</th>
  </tr>
  <?php foreach ($rows as $row):?>
  <tr>
     <td><?php echo $row->ejem_id;?></td>
     <td><?php echo $row->ejem_titulo;?></td>
     <td><?php echo $row->ejem_resumen;?></td>
     <td><?php echo $row->cate_nombre;?></td>
     <td><?php echo "boton";?></td>
  </tr>
  <?php endforeach;?>
</table>