<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $sfguarduser->getId() ?></td>
    </tr>
    <tr>
      <th>Dni:</th>
      <td><?php echo $sfguarduser->getDni() ?></td>
    </tr>
    <tr>
      <th>First name:</th>
      <td><?php echo $sfguarduser->getFirstName() ?></td>
    </tr>
    <tr>
      <th>Last name:</th>
      <td><?php echo $sfguarduser->getLastName() ?></td>
    </tr>
    <tr>
      <th>Email address:</th>
      <td><?php echo $sfguarduser->getEmailAddress() ?></td>
    </tr>
    <tr>
      <th>Telefono:</th>
      <td><?php echo $sfguarduser->getTelefono() ?></td>
    </tr>
    <tr>
      <th>Direccion:</th>
      <td><?php echo $sfguarduser->getDireccion() ?></td>
    </tr>
    <tr>
      <th>Genero:</th>
      <td><?php echo $sfguarduser->getGenero() ?></td>
    </tr>
    <tr>
      <th>Username:</th>
      <td><?php echo $sfguarduser->getUsername() ?></td>
    </tr>
    <tr>
      <th>Algorithm:</th>
      <td><?php echo $sfguarduser->getAlgorithm() ?></td>
    </tr>
    <tr>
      <th>Salt:</th>
      <td><?php echo $sfguarduser->getSalt() ?></td>
    </tr>
    <tr>
      <th>Password:</th>
      <td><?php echo $sfguarduser->getPassword() ?></td>
    </tr>
    <tr>
      <th>Is active:</th>
      <td><?php echo $sfguarduser->getIsActive() ?></td>
    </tr>
    <tr>
      <th>Is super admin:</th>
      <td><?php echo $sfguarduser->getIsSuperAdmin() ?></td>
    </tr>
    <tr>
      <th>Last login:</th>
      <td><?php echo $sfguarduser->getLastLogin() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $sfguarduser->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $sfguarduser->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('usuarios/edit?id='.$sfguarduser->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('usuarios/index') ?>">List</a>
