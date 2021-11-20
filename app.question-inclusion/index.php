<!DOCTYPE html>
<html>

<head>
    <?php
    include_once'include/head.php';
    ?>
</head>

<body>

    <div class="container">

        <div class="jumbotron">
            <h1 class="display-4">APP (First PHP application)</h1>
            <p class="lead">Example of an application with several pages.</p>
            <p>The aim is to demonstrate the reuse of content using inclusion mechanisms.</p>
            <hr class="my-4">
            <p>Note: The identification page only contains the presentation in this version.</p>
            <a class="btn btn-primary btn-lg" href="login.php" role="button">Connection</a>
        </div>

    </div>

    <?php
    include_once'include/footer.php';
    ?>
</body>

</html>