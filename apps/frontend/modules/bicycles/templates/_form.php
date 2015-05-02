<?php
    use_stylesheets_for_form($form);
    use_javascripts_for_form($form);
    
    $formAction = 'bicycles/';
    if ($form->getObject()->isNew())
    {
        $formAction .= 'create';
    }
    else
    {
        $formAction .= 'update?id=' . $form->getObject()->getId();
    }
?>

<form action="<?php echo url_for($formAction)?>" method="post">
  <?php if (!$form->getObject()->isNew()):  ?>
    <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>
  <table class="table">
    <tfoot>
      <tr>
        <td colspan="2">
          <a class="btn btn-default" role="button" href="<?php echo url_for('bicycles/index') ?>">Back to list</a>
          <?php
              if (!$form->getObject()->isNew()):
                  echo link_to
                  (
                      'Delete', 
                      'bicycles/delete?id=' . $form->getObject()->getId(), 
                      array
                      (
                          'method' => 'delete',
                          'confirm' => 'Are you sure?',
                          'class' => 'btn btn-default',
                          'role' => 'button'
                      )
                  );
              endif;
          ?>
          <input class="btn btn-default" type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form?>
    </tbody>
  </table>
</form>
