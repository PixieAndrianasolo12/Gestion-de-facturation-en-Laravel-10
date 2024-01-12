<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un Professeur</title>

    <style>
        body {
            background-color: #FF3CAC;

        }

        .container {
            width: auto;
            padding: 20px;
            background-color: #21D4FD;
            background-image: linear-gradient(210deg, #21D4FD 0%, #B721FF 100%);

            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="number"],
        input[type="email"] {
            width: 50%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 15px;
        }

        .input {
            align-content: center;
        }

        .button-container {
            text-align: center;
        }

        button {
            width: 200px;
        }

        .button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            width: 200px;
        }

        .button:hover {
            background-color: #b5d1f0;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        h2 {
            text-align: center;
        }

        /*  */
        .center-inputs {
            padding-left: 35%;
            margin-top: 30px;
        }

        .title {
            margin-top: 10px;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <ul>
        @foreach ($errors->all() as $error)
        <li class="alert alert-danger">{{ $error }}</li>
        @endforeach
    </ul>

    <div class="container">
        <h2>Ajouter un Professeur</h2>

        <form action="/ajouter/traitement" method="POST" class="center-form">
            @csrf

            <div class="container-center">
                <div class="center-inputs">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" value="">
                    </div>

                    <div class="mb-3">
                        <label for="module" class="form-label">Module</label>
                        <input type="text" class="form-control" id="module" name="module" value="">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="">
                    </div>

                    <div class="mb-3">
                        <label for="telephone" class="form-label">Telephone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" value="">
                    </div>

                    <div class="mb-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" value="">
                    </div>

                    <div class="button-container">

                    </div>
                    <button type="submit" class="button">Ajouter</button>
                </div>
            </div>



            <br>
            <a class="btn btn-success" href="prof">Revenir à la liste</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-rKj/1AgGtp5CE/Cp2DRAeEmJeMwS46186f4lu/VX4qU6q0p8r+9S8kv4h9a8lDp" crossorigin="anonymous"></script>
</body>

</html>