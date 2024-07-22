<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Viewings | SMDC Condominium | SMDC Condo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="https://mysmdc.ph/wp-content/uploads/2023/05/smdc-favicon-300x300.jpg">

    <style>
        .card {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 3rem 5rem 3rem;
        }

        img {
            width: 15rem;
            height: 7rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-body text-center">
            <img src="{{ asset('img/smdc-logo.jpeg') }}" alt="">
            <h3>Viewing Request {{ $status }}</h3>
        </div>
    </div>
</body>
</html>