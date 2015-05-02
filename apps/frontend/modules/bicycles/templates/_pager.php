<?php 
    if ($pager->haveToPaginate()): 
    $pagerLink = url_for('bicycles/' . $sf_params->get('action') . '?page=');
?>
<div class="row">
  <div class="col-md-12">
    <nav>
      <ul class="pagination">
        <li>
          <a href="<?php echo $pagerLink . $pager->getPreviousPage() . $pageLinkParam ?>">
            Prev
          </a>
        </li>
        <?php 
            foreach ($pager->getLinks() as $page): 
                if ($page == $pager->getPage()): 
        ?>
                  <li class="active">
                    <a href="<?php echo $pagerLink . $page . $pageLinkParam ?>">
                      <?php echo $page ?>
                    </a>
                  </li>
        <?php   else: ?>
                  <li>
                    <a href="<?php echo $pagerLink . $page . $pageLinkParam ?>">
                      <?php echo $page ?>
                    </a>
                  </li>
        <?php 
                endif;
            endforeach; 
        ?>
        <li>
          <a href="<?php echo $pagerLink . $pager->getNextPage() . $pageLinkParam ?>">
            Next
          </a>
        </li>
      </ul>
    </nav>
  </div>
</div>
<?php endif; ?>