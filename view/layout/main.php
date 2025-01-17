<?php;?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Sporto Klubas</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<header>
    <div class="nav-container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <div class="navbar-nav mr-auto">
                        <a class="nav-link" href="/" id="nav-home">Home</a>
                        <a class="nav-link" href="/feedback" id="nav-feedback">Feedback</a>
                    </div>
                    <div class="navbar-nav ml-auto">
                        <?php if(!\app\core\Session::isUserLoggedIn()): ?>
                        <a class="nav-link" href="/register" id="nav-register">Register</a>
                        <a class="nav-link" href="/login" id="nav-login">Login</a>
                        <?php else : ?>
                        <a class="nav-link" href="/logout">Logout</a>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<div>
    {{content}}
</div>


</body>
</html>