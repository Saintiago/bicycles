<h1>New BcBicycles</h1>
<?php 
    if (isset($message))
    {
        include_partial('alerts', array('message' => $message));
    } 
?>
<?php include_partial('form', array('form' => $form)) ?>
