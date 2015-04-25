<table>
  <thead>
    <tr>
      <th><a href="?sort=<?=($curSort == "desc") ? "asc" : "desc"?>" title="Сортировать по <?=($curSort == "desc") ? "возрастанию" : "убыванию"?>">Title</a></th>
      <th colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($BcBicycless as $BcBicycles): ?>
    <tr>
      <td><a href="<?php echo url_for('bicycles/show?id='.$BcBicycles->getId()) ?>"><?php echo $BcBicycles->getName() ?></a></td>
      <td><a href="<?php echo url_for('bicycles/edit?id='.$BcBicycles->getId()) ?>">Edit</a></td>
      <td><?php echo link_to('Delete', 'bicycles/delete?id='.$BcBicycles->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('bicycles/new') ?>">Add bicycle</a>
