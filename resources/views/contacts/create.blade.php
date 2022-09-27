@extends('layouts.default',['title' => ' Contact'])

@section('content')

    <div class="container">
        <div class="row justify-content-md-cente">
            <h2>Entrer en contact</h2>
            <p class="text-muted">si vous rencontrez des problèmes avec ce service, veuillez <a href="_mailto:mamadoudialloyorgo@gmail.com">demander de l'aide</a> </p>
            <div class="forn-group">
                <form action="{{set_active_route('contact')}}" method="post">
                    <label for="nom" class="control-label">Nom :</label><br>
                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrer un nom" required="required" class="group-control"><br>
                    <label for="email" class="control-label">E-mail :</label><br>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Entrer un email"><br>
                    <label for="message" class="control-label sr-only">Votre message :</label>
                    <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea><br>
                    <div class="d-grid gap-2">
                        <input type="submit" value="soumettre une demande &raquo;" class="btn btn-dark"><br>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
