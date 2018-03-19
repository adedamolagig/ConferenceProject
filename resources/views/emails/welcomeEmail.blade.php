@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks, {{ $user->name }} <br>
{{ config('app.name') }}
@endcomponent
