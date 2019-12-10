@component('mail::message')

# Er is een werkbon ingevuld.
Als uw op de knop klikt, dan kan uw de gegevens van de werkbonnen zien.

Werkbonnummer: {{ $workorder_id }}

@component('mail::button', ['url' => route('workordermail.show', $workorder_id) ] )
    De werkbongegevens bekijken
@endcomponent

Met vriendelijke groet,<br>
{{ config('app.name') }}
@endcomponent
