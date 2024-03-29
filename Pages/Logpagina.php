<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Pagine</title>

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
                    <a class="nav-link " href="Administrator.php">Gebruikers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Log Pagina</a>
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
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Timestamp</th>
            <th scope="col">Gebruikerid</th>
            <th scope="col">Actie</th>
            <th scope="col">Details</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">16:33:53</th>
            <td>1015</td>
            <td>Update rol</td>
            <td>Updated rol for 1015 to Administrator</td>
          </tr>
          <tr>
            <th scope="row">16:13:22</th>
            <td>1002</td>
            <td>Create user</td>
            <td>Created user 1015 with rol: Gebruiker</td>
          </tr>
        </tbody>
      </table>
</body>
</html>