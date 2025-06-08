<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}">
</head>
<body>
    <h1>Home Page</h1>
    <br>
    <h2>
        <a href="{{ url('/about-us') }}">Go to About Page</a>
    </h2>

    <br>

    <h2>
        <a href="{{ url('/contact-us') }}">Go to Contact Page</a>
    </h2>

    <script src="{{ url('frontend/js/bootstrap.min.js') }}"></script>

</body>
</html>
