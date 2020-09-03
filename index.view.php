<?php
// var_dump($klase);
?>
<table>
  <tr>
    <th>Klase</th>
    <th>Kodas</th>
    <th>Vardas</th>
    <th>Pavardė</th>
    <th>Kontrolinių darbų vidurkis</th>
    <th>Duomenų formavimo data</th>
  </tr>
  <?php foreach($klase as $id => $list):?>
    <tr>
        <?php foreach($klase[$id] as $list):?>
        <td><?if(is_array($list)){foreach($list as $suma){$sk = count($list); $val+=$suma;}echo $vid=($val/$sk); $val=0; $sk=0; $vid=0;}else{echo $list;}?></td>
        <?php endforeach ?>
    </tr>
    <?php endforeach ?>
</table>
