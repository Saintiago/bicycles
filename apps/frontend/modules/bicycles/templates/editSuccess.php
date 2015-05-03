<h2>Edit BcBicycles</h2>
<?php 
    if (isset($message))
    {
        include_partial('alerts', array('message' => $message));
    } 
?>
<?php include_partial('form', array('form' => $form)) ?>
