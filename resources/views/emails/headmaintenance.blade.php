@component('mail::message')

# Er is een werkbon ingevuld.
Als uw op de knop klikt, dan kan uw de gegevens van de werkbonnen zien.

@component('mail::button', ['url' => ''])
De werkbongegevens bekijken
@endcomponent

Met vriendelijke groet,<br>
{{ config('app.name') }}
@endcomponent
