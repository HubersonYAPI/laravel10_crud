<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row align-items-center">
            <div class="col s6">
                <h1>Ajouter un Etudiant</h1>
            </div>
            <div class="col s6 text-end">
                <a class="btn btn-warning" href="/etudiant">Liste des Etudiants</a>
            </div>
            <hr>
        </div>

        <div class="row">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="first_name" class="form-label">Prénoms</label>
                    <input type="text" name="first_name" id="first_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="classe" class="form-label">Classe</label>
                    <input type="text" name="classe" id="classe" class="form-control">
                </div>
                <a class="btn btn-primary" href="#" role="button">Enregistrer</a>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
