@component('mail::message')
# Introduction

Uw offerten is aangevraagd bij afdeling sales

Er wordt spoedig contact met u opgenomen.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
