
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

            @if (session('message'))
                <h6 style="color:green">{{ session('message') }}</h6>
            @endif
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                                Voulez vous vraiment supprimer cet article ?
                            </h4>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom de l'article</th>
                                            <th>Quantité</th>
                                            <th>Prix</th>
                                            <th>Editer</th>
                                            <th>Supprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($articles as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->nom }}</td>
                                                <td>{{ $item->quantite }}</td>
                                                <td>{{ $item->prix }}</td>
                                                <td><a href="{{ url('articles/'.$item->id.'/edit') }}" class="btn btn-success btn-sm">Editer</a></td>
                                                <td><a href="{{ url('articles/'.$item->id.'/destroy') }}" class="btn btn-danger btn-sm">Supprimer</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
