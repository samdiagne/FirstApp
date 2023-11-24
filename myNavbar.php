<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application CRUD projet</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

    <!--Navbar -->
<nav class="navbar navbar-expand-lg bg-light ">
  <div class="container-fluid ">
    <span class="navbar-brand mb-0 h1">Gestionnaire de Projet</span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Liste des projets</a>
        </li>
      </ul>
      <form class="d-flex offset-6" role="search">
      <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Rechercher</button>
    </form>
    </div>
  </div>
</nav>
