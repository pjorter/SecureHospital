<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ziekenhuis</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/images/Logo3.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="btn-group ">
            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Settings
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
        </div>
    </nav>
</header>

<main>
    <b class="mt-1 ms-2">Welkom Gebruiker, hieronder staan uw gegevens.</b>

    <div class="d-flex flex-row mt-3 ms-2">
        <div class="card m-1" style="width: 18rem;">
            <img src="/images/Eten.jpg"  height="175" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Elke dag 5 appels en 2 bananen eten.</p>
            </div>
        </div>
        <div class="card m-1" style="width: 18rem;">
            <img src="/images/Medicijnen.jpg" height="175" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Paracetemol 3 maal daags tegen de pijn.</p>
            </div>
        </div>
    </div>

</main>

</body>
</html>