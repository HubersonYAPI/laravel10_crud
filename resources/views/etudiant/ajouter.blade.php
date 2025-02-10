<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel10-CRUD</title>
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
            
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form action="/ajouter/traitement" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    {{-- Possiblité d'utiliser directement "required dans le input" --}}
                    {{-- <input type="text" name="nom" id="nom" class="form-control" required> --}}
                    <input type="text" name="nom" id="nom" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénoms</label>
                    <input type="text" name="prenom" id="prenom" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="classe" class="form-label">Classe</label>
                    <input type="text" name="classe" id="classe" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
