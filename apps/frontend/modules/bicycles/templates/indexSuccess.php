<h1>BcBicycless List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Year</th>
      <th>Frame</th>
      <th>Speeds</th>
      <th>Brakes</th>
      <th>Application</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($BcBicycless as $BcBicycles): ?>
    <tr>
      <td><a href="<?php echo url_for('bicycles/show?id='.$BcBicycles->getId()) ?>"><?php echo $BcBicycles->getId() ?></a></td>
      <td><?php echo $BcBicycles->getName() ?></td>
      <td><?php echo $BcBicycles->getYear() ?></td>
      <td><?php echo $BcBicycles->getFrame() ?></td>
      <td><?php echo $BcBicycles->getSpeeds() ?></td>
      <td><?php echo $BcBicycles->getBrakes() ?></td>
      <td><?php echo $BcBicycles->getApplication() ?></td>
      <td><?php echo $BcBicycles->getCreatedAt() ?></td>
      <td><?php echo $BcBicycles->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('bicycles/new') ?>">New</a>
