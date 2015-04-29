<div class="row">
    <div class="col-md-3 col-md-offset-9">
        <div class="input-group">
            <form action="<?php echo url_for('bicycles/search') ?>" method="POST">
                <?php echo $SearchForm['query']->render(array("class" => "form-control")) ?>
                <span class="input-group-btn">
                    <input class="btn btn-default" type="submit" name="go" value="Search" />
                </span>
            </form>
        </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <th>
                  <a href="<?php echo url_for('bicycles/' . $sf_params->get('action') . '?sort=') ?><?=($curSort == "asc") ? "desc" : "asc" ?><?=$sortLinkParam ?>" title="Сортировать по <?=($curSort == "desc") ? "возрастанию" : "убыванию" ?>">Title</a></th>
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
    </div>
</div>

<?php if ($pager->haveToPaginate()): ?>
<div class="row">
    <div class="col-md-12">
        <nav>
          <ul class="pagination">
            <li><a href="<?php echo url_for('bicycles/' . $sf_params->get('action') . '?page=', $BcBicycles) . $pager->getPreviousPage() . $pageLinkParam ?>">Prev</a></li>
            
            <?php foreach ($pager->getLinks() as $page): ?>
              <?php if ($page == $pager->getPage()): ?>
                <li class="active"><a href="<?php echo url_for('bicycles/' . $sf_params->get('action') . '?page=', $BcBicycles) . $page . $pageLinkParam ?>"><?php echo $page ?></a></li>
              <?php else: ?>
                <li><a href="<?php echo url_for('bicycles/' . $sf_params->get('action') . '?page=', $BcBicycles) . $page . $pageLinkParam ?>"><?php echo $page ?></a></li>
              <?php endif; ?>
            <?php endforeach; ?>
            
            <li><a href="<?php echo url_for('bicycles/' . $sf_params->get('action') . '?page=', $BcBicycles) . $pager->getNextPage() . $pageLinkParam ?>">Next</a></li>
          </ul>
        </nav>
    </div>
</div>


<?php endif; ?>
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-default" role="button" href="<?php echo url_for('bicycles/new') ?>">Add bicycle</a>
    </div>
</div>
