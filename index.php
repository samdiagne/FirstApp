
<?php

  require_once("bd.php");
  require_once("myNavbar.php");

      if(isset($_GET ["page"])){
        if($_GET ["page"] == "addProjet"){

          require_once("ajoutProjet.php");

        }
        if($_GET["page"] == "updateProjet"){
          $id=$_GET["id"];
          $sql = "SELECT * from projet where id =$id";
          $result=mysqli_query($connexion,$sql);
          $projet=mysqli_fetch_row($result);
          require_once("updateProjet.php");

        }
        if($_GET["page"] == "deleteProjet"){
          $id=$_GET["id"];
          $sql = "DELETE FROM projet where id =$id";
          mysqli_query($connexion,$sql);
          header('location:index.php');

        }
      
      }else{
        require_once("listeProjet.php");

      }
  
  require_once("footer.php");

  

?>
  
  
