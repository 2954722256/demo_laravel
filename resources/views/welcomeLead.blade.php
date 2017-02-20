<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
            background-color: gray;
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

        .dodo {
            margin: 0;
            padding: 0;
            height: 50px;
        }

        .title {
            font-size: 96px;
        }

        .div_parent {
            overflow-x: auto;
            overflow-y: hidden;
        }

        .div_child {
            float: left;
            margin: 5px;
            background-color: #ccc;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">view <br> in main</div>
    </div>
</div>
<div class="div_parent">

    <div class="div_child">
        <?php echo $do1 ?>
        <?php echo $do2 ?>
        <?php echo $do3 ?>
        <?php echo $do4 ?>
        <?php echo $do5 ?>
        <?php echo $do6 ?>
        <div class="dodo"/>
    </div>


</div>

</body>
</html>
