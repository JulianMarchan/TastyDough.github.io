<x-mail::message>
# Contact From {{ $name }}

{{ $message }}

<x-mail::button :url="'pages.product'">
Visit Us 
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
