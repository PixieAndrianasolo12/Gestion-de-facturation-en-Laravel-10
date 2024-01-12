<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des professeurs</title>

    <link rel="icon" type="image/x-icon" href="img/Logo.jpg" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->

    <link rel="stylesheet" href="css/main.css">

    <style>
        body {

            background-color: #2d6ba7;
            background-image: linear-gradient(191deg, #2d6ba7 0%, #E0C3FC 100%);
            height: -webkit-fill-available;
            background-repeat: no-repeat;
        }


        h2 {
            text-align: center;
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Styles pour la liste des professeurs */
        #professeurs {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Styles pour les boutons */
        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0095f6;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #007acc;
        }

        #nav-active{
            text-decoration: underline;
        }

        #prof{
            margin-top: 6%;
        }

        #button-suppr{
            color: beige;
        }


    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="/home">EpayFactura</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="prof" id="nav-active">Professeurs </a></li>
                    <li class="nav-item"><a class="nav-link" href="pointprof">Pointages</a></li>
                    <li class="nav-item"><a class="nav-link" href="paiement">Paiement</a></li>
                    <li class="nav-item"><a class="nav-link" href="registration">Creer un compte</a></li>
                    <li class="nav-item"><a class="nav-link" href="propos">A propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="/">Se deconnecter</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container" id="prof">
        <h2>Liste des Professeurs</h2>
        <table id="professeurs">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nom</th>
                    <th>Modules</th>
                    <th>E-mail</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $ide = 1;
                @endphp

                @foreach ($profs as $prof)
                <tr>
                    <td>{{ $ide }}</td>
                    <td>{{ $prof->name }}</td>
                    <td>{{ $prof->module }}</td>
                    <td>{{ $prof->email }}</td>
                    <td>{{ $prof->telephone }}</td>
                    <td>{{ $prof->adresse }}</td>
                    <td>
                        <a href="/delete-prof/{{ $prof->id }}" id="button-suppr">Supprimer</a>
                    </td>
                </tr>
                @php
                $ide += 1;
                @endphp
                @endforeach
            </tbody>
        </table>
        <div class="button-container">
            <a class="button" href="ajouter">Ajouter</a>
        </div>
    </div>
</body>

</html>