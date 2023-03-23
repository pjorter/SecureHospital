<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="Website.php">
                <img src="/images/Logo3.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link "  href="Administrator.php">Gebruikers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Logpagina.php">Log Pagina</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Data Aanpassen</a>
                    </li>
                </ul>
            </div>
        </div>
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

<body>
<b class="ms-1">Klant data aanpassen</b>
<form class="ms-2">

    <label for="Klantselect" class="form-label">Klant</label>
    <div class="input-group mb-3">
        <select class="form-select mb-3" aria-label="Klantselect" id="Klantselect">
            <option selected>Selecteer een klant</option>
            <option value="1">1. D. Vries</option>
            <option value="2">2. M. Jacobs</option>
            <option value="3">3. J. Jacobi</option>
        </select>
    </div>

    <label for="Naambalk" class="form-label">Voor en Achternaam</label>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Voornaam" aria-label="Voornaam" id="Naambalk">
        <span></span>
        <input type="text" class="form-control" placeholder="Achternaam" aria-label="Achteraam">
    </div>

    <label for="Emailbalk" class="form-label" ">Email adres</label>
    <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Email" aria-label="Email" id="Emailbalk">
    </div>

    <label for="Adresbalk" class="form-label">Adres + Huisnummer</label>
    <div class="input-group mb-3">
        <input type="text" class="form-control" id="Adresbalk" placeholder="Adres" aria-label="Username">
        <span class="input-group-text">Nummer</span>
        <input type="text" class="form-control" placeholder="Huisnummer" aria-label="Nummer">
    </div>

    <label for="Telefoonbalk" class="form-label">Telefoonnummer</label>
    <div class="input-group mb-3">
        <input type="tel" class="form-control" placeholder="Telefoonnummer" aria-label="Email" id="Telefoonbalk">
    </div>

    <div class="input-group">
        <span class="input-group-text">Klant Gegevens</span>
        <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>

    <label for="Rolselect" class="form-label">Rol</label>
    <div class="input-group mb-3">
        <select class="form-select mb-3" aria-label="Rolselect" id="Rolselect">
            <option selected>Gebruiker</option>
            <option value="1">Arts</option>
            <option value="2">Diëetist</option>
            <option value="3">Administrator</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Aanpassen</button>
</form>
</body>
</html>