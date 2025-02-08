<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LARAVEL 10-CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <div class="container">
        <div class="row align-items-center">
            <div class="col s6">
                <h1>Liste des Etudiants</h1>
            </div>
            <div class="col s6 text-end">
                <a class="btn btn-primary" href="/ajouter" role="button">Ajouter un étudiant</a>
            </div>
            <hr>
        </div>

        <div class="row">
            <div class="col s12">
                <table class="table text-end">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénoms</th>
                            <th>Classe</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Yapi</td>
                            <td>Josias</td>
                            <td>M2</td>
                            <td>
                                <a class="btn btn-info" href="#" role="button">Actualiser</a>
                                <a class="btn btn-danger" href="#" role="button">Supprimer</a>

                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Yao</td>
                            <td>Pierre</td>
                            <td>L3</td>
                            <td>
                                <a class="btn btn-info" href="#" role="button">Actualiser</a>
                                <a class="btn btn-danger" href="#" role="button">Supprimer</a>

                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Kouame</td>
                            <td>Yves</td>
                            <td>M1</td>
                            <td>
                                <a class="btn btn-info" href="#" role="button">Actualiser</a>
                                <a class="btn btn-danger" href="#" role="button">Supprimer</a>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
