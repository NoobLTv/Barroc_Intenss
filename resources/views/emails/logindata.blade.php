@component('mail::message')
# Beste gebruiker,

U heeft uw inloggegevens ontvangen.

De gebruikersnaam is als volgt: {{$user['name']}}}<br>

Het wachtwoord is als volgt: {{$user['password']}}}


Bedankt,<br>
{{ config('app.name') }}
@endcomponent
