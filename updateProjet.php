

<?php 

            var_dump($_POST);
            if(isset($_POST["submit"])){
                    $code=$_POST["code"];
                    $nom=$_POST["nom"];
                    $description=$_POST["des"];
                    $budget=$_POST["budget"];
                    $date_debut=$_POST["deb"];
                    $date_fin=$_POST["fin"];
                    $statut = isset($_POST["statut"]) ? 1 : 0;
                    $id=$_POST["id"];

                    $sql= "UPDATE projet SET code='$code', nom='$nom', description='$description', budget=$budget, 
                    date_debut='$date_debut', date_fin='$date_fin', statut=$statut where id=$id";
                    mysqli_query($connexion,$sql);

                    header('location:index.php');

                }

?>


<div class="col-md-8 offset-2 mt-5"> 
    <div class="card">
        <div class="card-header bg-light" >
            UPDATE Projet
        </div>

        <div class="card-body">

            <form method="POST" action="#">

                <input type="text" class="form-control" name="id" value="<?php echo $projet[0] ?> "hidden>
                <label for="">Code</label>
                <input type="text" class="form-control" required name="code" value="<?php echo $projet[1] ?>">
                <br>
                <label for="">Nom</label>
                <input type="text" class="form-control" required name="nom" value="<?php echo $projet[2] ?>">
                <br>
                <label for="">Description</label>
                <input type="text" class="form-control" required name="des" value="<?php echo $projet[3] ?>">
                <br>
                <label for="">Budget</label>
                <input type="number" class="form-control" required name="budget" value="<?php echo $projet[4] ?>">
                <br>
                <label for="">Date debut</label>
                <input type="date" class="form-control" required name="deb" value="<?php echo $projet[5] ?>">
                <br>
                <label for="">Date fin</label>
                <input type="date" class="form-control" required name="fin" value="<?php echo $projet[6] ?>">
                <br>
                <label for="">Nouveau Statut</label>
                <input type="checkbox" name="statut" value="1"> Actif<br>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Update</button>
                <button type="reset" class="btn btn-danger" name="reset">Cancel</button>

            </form>

        </div>

    </div>
    


</div>