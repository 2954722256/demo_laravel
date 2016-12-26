<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Dodo db</title>

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

            h1 {
                font-size: 18px;
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
                font-size: 28px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">view <br> in main</div>
            </div>
        </div>
        <?php echo $dodo_nest ?>
    </body>
</html>
