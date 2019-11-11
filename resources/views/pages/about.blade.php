@extends('layouts/archi', ['titre' => 'About'])

@section('content')
    <div class="container">
        <h2>What is {{ config('app.name')}} ?</h2>
        <p>{{ config('app.name')}} is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a></p>

        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <strong><i class="fa fa-exclamation-triangle"></i> This app has been build by <a href="#">@DjibySeck</a> for learning purposes.</strong>
                </p>
            </div>
        </div>

        <p>Feel free to help to improve the <a href="https://github.com/DjibySeck4/laracarteGeeks">source code</a></p>

        <hr>

        <h2>What is Laramap ?</h2>
        <p> Laramap is a website by which {{ config('app.name') }} was inspired .</p>
        <p>More info <a href="https://laramap.com/p/about">here.</a></p>

        <hr>
 
        <h2>Which tools and services are used in {{ config('app.name')}} ?</h2>
        <p>Basically it's build on Laravel & Bootstrap. But there's a bunch of services used for 
          email and other sections.</p>

          <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocation Package</li>
            <li>Michel Fortin's Markdown Paster Package</li>
            <li>Heroku</li>
          </ul>
    </div>


@stop 