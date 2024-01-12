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
            background-color: #FF3CAC;
            background-image: linear-gradient(328deg, #FF3CAC 10%, #784BA0 52%, #2B86C5 50%);

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

        .button.payee {
            background-color: #f44336;
        }

        .button-retour {
            background-color: #c150df;
            color: white;
        }

        /*  */
        .center-inputs {
            padding-left: 35%;
            margin-top: 30px;
        }

        .title {
            margin-top: 10px;
        }

        #button-facture {
            width: 200px;
        }
    </style>

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
        <h2 class="title">PAIEMENT</h2>

        <form action="/ajouter/paiement" method="POST" class="center-form">
            @csrf

            <div class="container-center">
                <div class="center-inputs">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom du Professeur</label>
                        <input type="text" class="form-control" id="name" name="name" value="">
                    </div>

                    <div class="mb-3">
                        <label for="module" class="form-label">Module</label>
                        <input type="text" class="form-control" id="module" name="module" value="">
                    </div>
                    <div class="mb-3">
                        <label for="duree" class="form-label">Durée Total</label>
                        <input type="number" class="form-control" id="duree" name="duree" value="">
                    </div>

                    <div class="mb-3">
                        <label for="montant" class="form-label">Montant Calculé</label>
                        <input type="text" class="form-control" id="montant" name="montant">
                    </div>
                    <div class="mb-3">
                        <label for="prof_id" class="form-label">IDprof</label>
                        <input type="text" class="form-control" id="prof_id" name="prof_id" value="">
                    </div>
                </div>
            </div>

            <div class="button-container">
                <button type="submit" class="button" >Payer</button>
            </div>



            <br>
            <div class="button-container">
                <a class="button" href="{{ route('paiement.facture') }}">Facture</a>
            </div>
            <br>

        </form>
        <div>
            <a class="button button-retour" href="home">RETOUR</a>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const boutonPayer = document.getElementById("bouton-payer");

                boutonPayer.addEventListener("click", function() {
                    boutonPayer.classList.add("Payée");
                    boutonPayer.innerHTML = "Payée";
                    boutonPayer.disabled = true;
                });
            });
        </script>


        <!-- ... Autres balises <head> ... -->

        <script>
            const dureeInput = document.getElementById('duree');
            const montantInput = document.getElementById('montant');
            const montantCalculeElement = document.getElementById('montantCalcule'); // Nouvel élément pour afficher le montant calculé

            // Fonction de calcul du montant
            function calculateMontant() {
    const duree = parseFloat(dureeInput.value);
    const tauxParHeure = 20000;

    // Vérifier si duree est un nombre valide
    if (!isNaN(duree)) {
        const montant = duree * tauxParHeure;
        montantInput.value = montant.toFixed(2);
        montantCalculeElement.textContent = montant.toFixed(2);
    } else {
        // Si duree n'est pas un nombre valide, définir le montant à 0
        montantInput.value = "0.00";
        montantCalculeElement.textContent = "0.00";
    }
}



            // Écouter les changements dans le champ de durée
            dureeInput.addEventListener('input', calculateMontant);

            // Appel initial pour calculer le montant (au cas où la valeur initiale est déjà présente)
            calculateMontant();
        </script>


        <!-- ... Autres balises <body> ... -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-rKj/1AgGtp5CE/Cp2DRAeEmJeMwS46186f4lu/VX4qU6q0p8r+9S8kv4h9a8lDp" crossorigin="anonymous"></script>
</body>

</html>