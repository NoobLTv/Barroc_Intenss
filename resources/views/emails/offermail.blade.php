@component('mail::message')

# We hebben uw offerte nagekeken.
Als uw de gegevens wilt bekijken dan kunt uw op de knop klikken om uw offertegegevens te bekijken.

Als uw nog vragen hebt, dan kun u die via de mail stellen.
Ik hoop dat ik uw voldoende heb geïnformeerd.

Offertenummer: {{ $quotation_id }}

@component('mail::button', ['url' => route('offermail.show', $quotation_id) ] )
Uw offertegegevens bekijken
@endcomponent

Met vriendelijk groet,<br>
{{ config('app.name') }}
@endcomponent




