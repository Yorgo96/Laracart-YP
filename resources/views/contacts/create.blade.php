@extends('layouts.default',['title' => ' Contact'])

@section('content')

    <div class="container">
        <div class="row ">
            <div class="justify-content-md-center">
                <h2>Entrer en contact</h2>
                <p class="text-muted">si vous rencontrez des problèmes avec ce service, veuillez
                    <a href="{{config('laracarte.admin_support_email')}}">demander de l'aide</a>
                </p>
                <form action="{{route('contacts')}}" method="post" >
                    {{csrf_field()}}
                    <div class="forn-group {{$errors->has('nom') ? 'has-error' : ''}}">
                        <label for="nom" class="control-label">Nom :</label><br>
                        <input type="text" name="nom" id="nom" value="{{old('nom')}}" class="form-control" placeholder="Entrer un nom" required="required" class="group-control"><br>
                        {!!$errors->first('nom','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                        <label for="email" class="control-label">E-mail :</label><br>
                        <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control" placeholder="Entrer un email"><br>
                        {!!$errors->first('email','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{$errors->has('message') ? 'has-error' : ''}} ">
                        <label for="message" class="control-label sr-only">Votre message :</label>
                        <textarea name="message" id="message" cols="30" rows="5" class="form-control ">{{old('message')}}</textarea><br>
                        {!!$errors->first('message','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="d-grid gap-2">
                        <input type="submit" value="soumettre une demande &raquo;" class="btn btn-dark"><br>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
