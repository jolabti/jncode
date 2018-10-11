<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JNCODE ADMINISTRATOR</title>

    <link href="<?= base_url();?>supports/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= base_url();?>supports/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <link href="<?= base_url();?>supports/dist/css/sb-admin-2.css" rel="stylesheet">

    <link href="<?= base_url();?>supports/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="center panel-title">Auth JNCODE</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="<?= site_url("dash/auth");?>">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                         
                                <input type="submit" href="#" class="btn btn-lg btn-success btn-block" value="Login"> </input>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url();?>supports/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url();?>supports/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?= base_url();?>supports/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url();?>supports/dist/js/sb-admin-2.js"></script>

</body>

</html>
