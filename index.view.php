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
        <td><?=$list;?></td>
        <?php endforeach ?>
    </tr>
    <?php endforeach ?>
</table>
