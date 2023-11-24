 <?php

    $sql = "select * from projet order by id DESC";
    $projets=mysqli_query($connexion, $sql);

 ?>
 
 
 <!--Liste des projets -->
 <br>
  <br>
  <div class="col-md-10 offset-1">

    <a type="button" class="btn btn-warning float-end" href="?page=addProjet" >+Add</a>
    <br><br>
  <table class="table table-light">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">code</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Budget</th>
      <th scope="col">Date debut</th>
      <th scope="col">Date fin</th>
      <th scope="col">Statut</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
    <?php while ( $ligne = mysqli_fetch_row($projets)) {?>
            <tr>
            <th scope="row"><?php echo $ligne[0] ?></th>
            <td><?php echo $ligne[1] ?></td>
            <td><?php echo $ligne[2] ?></td>
            <td><?php echo $ligne[3] ?></td>
            <td><?php echo $ligne[4] ?></td>
            <td><?php echo $ligne[5] ?></td>
            <td><?php echo $ligne[6] ?></td>
            <td><?php echo $ligne[7] ?></td>
            <td>
                <a class="btn btn-primary" href="?page=updateProjet&&id=<?php echo $ligne[0] ?>">Update</a>
                <a class="btn btn-danger" href="?page=deleteProjet&&id=<?php echo $ligne[0] ?>">Delete</a>
            </td>
            </tr>
    <?php }?>
  </tbody>
</table>

  </div>