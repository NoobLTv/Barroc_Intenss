@component('mail::message')
# Introduction

Uw offerten is aangevraagd bij afdeling SALE

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
