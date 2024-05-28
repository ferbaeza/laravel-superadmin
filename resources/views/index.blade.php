<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="{{ asset('favicon.jpeg') }}" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Web site created using create-react-app" />

    <title>{{ config('package.nombre', 'Admin Dashboard') }}</title>

    {{ Baezeta\Admin\Shared\Utils\HtmlUtils::css() }}

</head>
<body>
    <div id="root">
    </div>
    {{ Baezeta\Admin\Shared\Utils\HtmlUtils::js() }}
</body>



</html>