<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Test</div>
                <p>Playing about with Routes and Controllers</p>
                <p>{{ $name }} in {{ $location }} </p>
                <a href="{{ URL::to('test') }}">Test</a> | 
                <?= link_to('http://nandaa.com', 'My Site', 'target=_blank'); ?>
                <?php
                    echo HTML::link("http://nandaa.com");
                    echo HTML::image("images/user.jpg");
                    echo HTML::script("js/main.js");
                ?>
            </div>
        </div>
    </body>
</html>
