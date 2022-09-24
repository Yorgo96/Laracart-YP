@extends('layouts.default')

@section('content')
    <div class="container">
        <h2>qu'est-ce que laracarte ?</h2>
        <p>laracart est une application clone de <a href="https://laramap.com" targat="_blank"> Laramap.com</a></p>
        <div class="row">
            <div class="col-md-9">
                <p class="alert alert-warning">
                    <strong><i class="fa fa-exclamation-triangle"></i>Cette application a été créée par <a href="https://twitter.com/etsmo">@etsmo</a> à des fins d'apprentissage.</strong>
                </p>
            </div>
        </div>
        <p>n'hésitez pas à aider à améliorer le <a href="#"> code source</a></p><hr>
        <h2>c'est quoi laramap ?</h2>
        <p>laramap est le site web dont laracarte s'est inspiré :</p>
        <p>Plus d'infos <a href="https://laramap.com/p/about">ici</a>.</p><hr>
        <h2>quels outils et services sont utilisés dans laracarte ?</h2>
        <p>Fondamentalement, il est construit sur Laravel &amp; Bootstrap,
            mais il existe un tas de services utilisés pour le courrier électronique et d'autres sections.
        </p>
        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon s3</li>
            <li>Mandril</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocation Packege</li>
            <li>Michel Fortin's Markdown Packege</li>
            <li>Heroku</li>
        </ul>
    </div>
@endsection
