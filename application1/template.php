<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acuueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">REST API</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="formations.php">Cours</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Catégories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="formationsCategories.php?categorie=PHP">PHP</a></li>
            <li><a class="dropdown-item" href="formationsCategories.php?categorie=javascript">Javascript</a></li>
            <li><a class="dropdown-item" href="formationsCategories.php?categorie=Bureautique">Bureautique</a></li>
            <li><a class="dropdown-item" href="formationsCategories.php?categorie=Analyse">Analyse de données</a></li>

            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="formationsCategories.php?categorie=HTML">Html/Css</a></li>
            <li><a class="dropdown-item" href="formationsCategories.php?categorie=ReactJs">ReactJs</a></li>
            <li><a class="dropdown-item" href="formationsCategories.php?categorie=WordPress">WordPress</a></li>
            <li><a class="dropdown-item" href="formationsCategories.php?categorie=Algorithmique">Algorithme</a></li>

          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<?= $content?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>