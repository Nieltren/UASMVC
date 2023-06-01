<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UAS MVC</title>

    <style>
        .container {
            display: flex;
            justify-content: center;
            padding-top: 1rem;
        }

        th {
            color: #9a32b3;
        }

        td {
            border-bottom: 1px gray solid;
        }

        th,
        td {
            text-align: center;
            padding: 1rem;
        }

        .btn {
            cursor: pointer;
            padding: 12px;
            border: 0;
            text-decoration: none;
            border-radius: 3px;
        }

        .btn-primary {
            background: #3498db;
            color: #ffffff;
        }

        .btn-warning {
            background: #f1c40f;
            color: #ffffff;
        }

        .banner {
            position: relative;
            margin: 1.5rem -2.3rem 1rem -2.3rem;
            padding: 1rem;
            background-color: #9a32b3;
            color: white;
            z-index: 99;
            font-weight: bold;
            border-radius: 3px;
        }

        .wrapper {
            position: relative;
            background-color: white;
            margin: -3rem;
            padding-top: 1.5rem;
            padding-inline: 1rem;
            z-index: 1;
        }

        input {
            display: block;
            width: 100%;
            padding: 10px 0 10px 0px;
            margin-bottom: 1rem;
            font-size: 16px;
            border: none;
            border-bottom: 2px solid #ccc;
            outline: none;
            background-color: transparent;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            border-bottom: 1px solid #A9A9A9;
        }
    </style>
</head>

<body>
    <div class="container">
        <div style="width: 1048px">
            @yield('content')
        </div>
    </div>
</body>

</html>