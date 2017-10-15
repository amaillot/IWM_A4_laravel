@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Création de Sushi
                        <div class="pull-right">
                            <a href="{{ route('items.index') }}">--> Retour à la liste des produits</a>
                        </div>
                    </div>

                    <div class="panel-body">
                        <form enctype="multipart/form-data" method="POST" action="{{ route('items.store') }}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="Nom">Titre</label>
                                <input class="form-control" type='text' placeholder='Titre' name="Nom" id="Nom">
                            </div>
                            <div class="form-group">
                                <label for="Description">Description</label>
                                <textarea class="form-control" placeholder='Description' name="Description" id="Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="Prix">Prix</label>
                                <input class="form-control" type="number" placeholder='Prix' name="Prix" id="Prix">
                            </div>

                            <div class="form-group">
                                <label for="Image">Image</label>
                                <input type="file" class="form-control" placeholder="Lien de l'image" name="Image" id="Image">
                            </div>

                            <div class="form-group">
                                <label for="Filtre">type de produit</label>
                                <select id="select" class="form-control" name="Filtre">
                                    <option value="Dessert">Dessert</option>
                                    <option value="Plat" selected>Plat</option>
                                    <option value="Entree">Entree</option>
                                    <option value="Boisson">Boisson</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-default">Sauvegarder</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection