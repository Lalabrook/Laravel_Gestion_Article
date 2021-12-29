
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <title>Document</title>
</head>
<body>

<div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    @if ($errors->any())
                        <ul class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                            <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>Modifier les informations de l'article </h4>
                                <a href="{{ url('articles') }}" class="btn btn-danger float-end">Retourner</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('articles/'.$article->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label> Nom de l'article</label>
                                    <input type="text" name="nom" value="{{ $article->nom}}" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> Quantité</label>
                                    <input type="number" name="quantite" value="{{ $article->quantite}}" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label>Prix</label>
                                    <input type="number" name="prix" value="{{ $article->prix}}" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-info">Changer les informations</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
