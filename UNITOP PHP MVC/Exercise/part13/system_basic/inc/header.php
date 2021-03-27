<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống điều hướng cơ bản</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        * {
            margin: 0px;
            padding: 0px;
            text-decoration: none;
        }

        #wrapper {
            width: 960px;
            margin: 0px auto;
            padding: 20px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        li {
            display: inline-block;
            padding: 20px;
        }

        a {
            text-decoration: none;
        }

        #content {
            padding-top: 20px;
            min-height: 500px;
        }

        #header,
        #footer {
            text-align: center;
            font-size: 30px;
            background-color: #add8e6;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <ul>
                <li><a href="?page=home">Home</a></li>
                <li><a href="?page=product">Product</a></li>
                <li><a href="?page=news">News</a></li>
                <li><a href="?page=about">About</a></li>
                <li><a href="?page=contact">Contact</a></li>
            </ul>
        </div>