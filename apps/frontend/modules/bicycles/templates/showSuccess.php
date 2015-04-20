<?php slot('title', $BcBicycles->getName()) ?>

<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $BcBicycles->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $BcBicycles->getName() ?></td>
    </tr>
    <tr>
      <th>Year:</th>
      <td><?php echo $BcBicycles->getYear() ?></td>
    </tr>
    <tr>
      <th>Frame:</th>
      <td><?php echo $BcBicycles->getFrame() ?></td>
    </tr>
    <tr>
      <th>Speeds:</th>
      <td><?php echo $BcBicycles->getSpeeds() ?></td>
    </tr>
    <tr>
      <th>Brakes:</th>
      <td><?php echo $BcBicycles->getBrakes() ?></td>
    </tr>
    <tr>
      <th>Application:</th>
      <td><?php echo $BcBicycles->getApplication() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $BcBicycles->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $BcBicycles->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('bicycles/edit?id='.$BcBicycles->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('bicycles/index') ?>">List</a>
