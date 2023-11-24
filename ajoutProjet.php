<?php 
    var_dump($_POST);
    if(isset($_POST["submit"])){
        $code=$_POST["code"];
        $nom=$_POST["nom"];
        $description=$_POST["des"];
        $budget=$_POST["budget"];
        $debut=$_POST["deb"];
        $fin=$_POST["fin"];
        $statut = isset($_POST["statut"]) ? 1 : 0;

        
        $sql ="INSERT into projet values(NULL,'$code', '$nom', '$description', '$budget','$debut','$fin','$statut')";

        mysqli_query($connexion, $sql);

        header('location:index.php');

    }
?>

<div class="col-md-8 offset-2 mt-5"> 
    <div class="card">
        <div class="card-header bg-light" >
            Ajout Projet
        </div>

        <div class="card-body">

                <form method="POST" action="#">
                <label for="">Code</label>
                <input type="text" class="form-control" required name="code">
                <br>
                <label for="">Nom</label>
                <input type="text" class="form-control" required name="nom">
                <br>
                <label for="">Description</label>
                <input type="text" class="form-control" required name="des">
                <br>
                <label for="">Budget</label>
                <input type="number" class="form-control" required name="budget">
                <br>
                <label for="">Date debut</label>
                <input type="date" class="form-control" required name="deb">
                <br>
                <label for="">Date fin</label>
                <input type="date" class="form-control" required name="fin">
                <br>
                <label for="">Statut</label>
                <input type="checkbox" name="statut" value="1"> Actif <br>
                <br>
                <button type="submit" class="btn btn-success" name="submit">Ajouter</button>
                <button type="reset" class="btn btn-danger" name="reset">Retour</button>

            </form>

        </div>

    </div>
    


</div>