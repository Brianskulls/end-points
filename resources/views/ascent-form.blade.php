<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>End-Points</title>
        <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css">
    </head>
    <body>
    <div class="container">
        <p>Nieuw: Ontvang jouw verkoopkansen direct in je postvak!</p>
        <form action="subscribe" method="POST">
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <input type="text" name="name" placeholder="Naam">
            <input type="text" name="email" placeholder="E-mailadres">
            <button type="submit">Inschrijven</button>
        </form>
    </div>
    </body>
</html>
