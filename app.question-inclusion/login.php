<!DOCTYPE html>
<html>

<head>
    <?php
    include_once'include/head.php';
    ?>
</head>

<body>

    <div class="container">

        <div class="login">
            <form>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
            </form>
        </div>

        <p>
            Use the following links for now since the identification is not functional.
            <ul>
                <li><a href="user">User</a></li>
                <li><a href="admin">Administrator</a></li>
            </ul>
        </p>
    </div>

    <?php
    include_once'include/footer.php';
    ?>
</body>

</html>