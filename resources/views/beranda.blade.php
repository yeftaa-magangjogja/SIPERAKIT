<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            color: #333;
        }

        img {
            max-width: 30%;
            height: auto;
            border-radius: 8px;
            margin: 20px auto;
        }

        h2 {
            font-size: 24px;
            color: #2E8B57;
            margin-top: 10px;
            text-transform: uppercase;
            font-weight: bold;
        }
    </style>
</head>

<body>

    @include('partials.navbar')
    <header>
        <img src="https://pbs.twimg.com/profile_images/1754511736122863616/yTnsuzzE_400x400.jpg"alt="Kementerian Kesehatan Republik Indonesia">
        <h2>Selamat Datang</h2>
    </header>

    @include('partials.footer')

</body>

</html>
