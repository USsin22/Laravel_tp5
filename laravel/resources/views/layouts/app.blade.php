<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Management - Laravel Expert</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            height: 100vh;
            background: #212529;
            color: white;
            position: fixed;
            width: 240px;
            padding-top: 20px;
        }

        .sidebar a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            padding: 10px 20px;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: white;
            background: rgba(255, 255, 255, 0.1);
        }

        .main-content {
            margin-left: 240px;
            padding: 40px;
        }

        .card {
            border: none;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h3 class="text-center mb-4">MovieDB</h3>
        <a href="/">Home</a>
        <a href="/films">Films List</a>
        <a href="/calculator">Calculator</a>
    </div>

    <div class="main-content">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
