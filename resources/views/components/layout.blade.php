<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Network | {{ $title  }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

@include('partial.nav')

<main class="container my-5">
    {{ $slot }}

    {{ $para  }}
</main>

@include('partial.footer')

</body>
</html>
