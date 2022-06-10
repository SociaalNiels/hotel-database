<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
    <meta charset="UTF-8">
    <title></title>

</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <h1>Hotel LamFang</h1>

        <ul>
            <li><a class="active" href="/hotel">Home</a></li>
            <li><a href="/kamer">Kamers</a></li>
            <li><a href="/boeking">boeking</a></li>
            <li><a href="/overons">Over Ons</a></li>

        </ul>

        <main class="py-4">
            @yield('content-page')
        </main>

        <div class="footer">
            <p><a href="https://www.hotelamfang.nl/">www.hotelamfang.nl</a></p>
            </footer>

        </div>
    </div>
</div>

</body>

</html>

