<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocate()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=csrf-token content="{{ csrf_token() }}"/>

    <!-- CDNs de Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <!-- CDNs de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        
    </div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>