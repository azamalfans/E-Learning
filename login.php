<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>FILLO</title>
    <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2017/04/20/17/10/letter-f-2246324_960_720.png" />
    <link rel="stylesheet" href="https://yukcoding.web.id/e-kasir/assets/plugins/bootstrap/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="https://yukcoding.web.id/e-kasir/assets/plugins/az-core/az-core.css" type="text/css" />
    <script src="https://yukcoding.web.id/e-kasir/assets/plugins/jquery/jquery.min.js"></script>
</head>

<body style="background-color:rgb(209, 237, 255);width:100%;overflow-x:hidden;">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="login-container">
                <div class="login-container-content">
                    <form method="POST" action="login/process">
                        <input type="hidden" name="csrf_azosTech" value="be817453d769e9e65a042a2e1fb0f7f1">
                        Username
                        <input type="text" name="username" class="form-control">
                        <br>
                        Password
                        <input type="password" name="password" class="form-control">
                        <br><br>
                        <div class="txt-right">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <div class="login-copyright">
        Copyright &copy; 2019 - FILLO
    </div>
</body>

</html>
<script type="text/javascript">
    setTimeout(function() {
        jQuery(".login-error-message").hide("slow")
    }, 5000);
</script>