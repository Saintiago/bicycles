<?php
    $sortLink = url_for('bicycles/' . $sf_params->get('action') . '?sort=');
    if ($curSort == "asc")
    {
        $sortLink .= "desc";
    }
    else
    {
        $sortLink .= "asc";
    }
    $sortLink .= $sortLinkParam;
    
    $sortDirection = ($curSort == "desc") ? "возрастанию" : "убыванию";
    
    $confirmArray = array('method' => 'delete', 'confirm' => 'Are you sure?');
    
?>
<form action="<?php echo url_for('bicycles/search') ?>" method="POST">
  <div class="row">
    <div class="col-md-4 col-md-offset-8">
      <div class="input-group">
        <?php echo $searchForm['query']->render(array("class" => "form-control")) ?>
        <span class="input-group-btn">
          <input class="btn btn-default" type="submit" name="go" value="Search" />
        </span>
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
  </div><!-- /.row -->
</form>
<div class="row">
  <div class="col-md-12">
    <table class="table">
      <thead>
        <tr>
          <th>
              <a href="<?= $sortLink ?>" title="Сортировать по <?= $sortDirection ?>">Title</a>
          </th>
          <th colspan="2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($pager->getResults() as $BcBicycles): ?>
        <tr>
          <td>
            <a href="<?php echo url_for('bicycles/show?id='.$BcBicycles->getId()) ?>">
              <?php echo $BcBicycles->getName() ?>
            </a>
          </td>
          <td>
            <a href="<?php echo url_for('bicycles/edit?id='.$BcBicycles->getId()) ?>">Edit</a>
          </td>
          <td>
            <?php echo link_to('Delete', 'bicycles/delete?id='.$BcBicycles->getId(), $confirmArray) ?>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?php include_partial('pager', array('pager' => $pager, 'pageLinkParam' => $pageLinkParam)) ?>

<div class="row">
  <div class="col-md-12">
    <a class="btn btn-default" role="button" href="<?php echo url_for('bicycles/new') ?>">
      Add bicycle
    </a>
  </div>
</div>