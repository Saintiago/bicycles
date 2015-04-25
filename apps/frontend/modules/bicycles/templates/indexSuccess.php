<table>
  <thead>
    <tr>
      <th><a href="?sort=<?=($curSort == "desc") ? "asc" : "desc"?>" title="Сортировать по <?=($curSort == "desc") ? "возрастанию" : "убыванию"?>">Title</a></th>
      <th colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pager->getResults() as $BcBicycles): ?>
    <tr>
      <td><a href="<?php echo url_for('bicycles/show?id='.$BcBicycles->getId()) ?>"><?php echo $BcBicycles->getName() ?></a></td>
      <td><a href="<?php echo url_for('bicycles/edit?id='.$BcBicycles->getId()) ?>">Edit</a></td>
      <td><?php echo link_to('Delete', 'bicycles/delete?id='.$BcBicycles->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php if ($pager->haveToPaginate()): ?>

<div class="pagination">
  <ul>
    <li><a href="<?php echo url_for('bicycles', $BcBicycles) ?>page=<?php echo $pager->getPreviousPage() ?>">Prev</a></li>
    
    <?php foreach ($pager->getLinks() as $page): ?>
      <?php if ($page == $pager->getPage()): ?>
        <li class="active"><a href="<?php echo url_for('bicycles', $BcBicycles) ?>page=<?php echo $page ?>"><?php echo $page ?></a></li>
      <?php else: ?>
        <li><a href="<?php echo url_for('bicycles', $BcBicycles) ?>page=<?php echo $page ?>"><?php echo $page ?></a></li>
      <?php endif; ?>
    <?php endforeach; ?>
    
    <li><a href="<?php echo url_for('bicycles', $BcBicycles) ?>page=<?php echo $pager->getNextPage() ?>">Next</a></li>
  </ul>
</div>

<?php endif; ?>

<a href="<?php echo url_for('bicycles/new') ?>">Add bicycle</a>
