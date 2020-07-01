@component('mail::message')
# New Post Created

A new post was created:

{{ $title }}

@component('mail::button', ['url' => config('app.url') . '/posts' ])
View Blog Archive
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent