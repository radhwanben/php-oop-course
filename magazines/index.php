<?php
    if(!defined('RESTRICTED'))exit('No direct script access allowed!');
    $model = new MagazineModel();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="publisher" content="">

    <title>Ongis school - Backend Class</title>

    <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="<?php echo $baseUrl; ?>assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $baseUrl; ?>">Ongis School</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo $baseUrl; ?>" class="active">Home</a></li>
                <li class="active"><a href="<?php echo $baseUrl; ?>index.php?page=articles">Articles</a></li>
                <li class="active"><a href="<?php echo $baseUrl; ?>index.php?page=magazines">Magazines</a></li>
                <li class="active"><a href="<?php echo $baseUrl; ?>index.php?page=writers">Writers</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<!-- Begin page content -->
<div class="container">
    <div class="row">
       <?php
        $action = (! empty($_GET['action'])) ? $_GET['action'] : null;
       if ($action == 'create') {
            require('magazines/create.php');
        } elseif($action == 'store') {
            require('magazines/store.php');
        } elseif($action == 'createMultiple') {
            require('magazines/createMultiple.php');
        } elseif($action == 'storemultiple') {
            require('magazines/storeMultiple.php');
        } elseif ($action == 'edit') {
            require('magazines/edit.php');
        } elseif ($action == 'update') {
            require('magazines/update.php');
        } elseif ($action == 'delete') {
            require('magazines/delete.php');
        } elseif ($action == 'detail') {
            require('magazines/detail.php');
        } else {
            require 'data.php';
        }
       ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="text-muted">Lorem ipsum dolor sit amet</p>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo $baseUrl; ?>assets/js/jquery.min.js" ></script>
<script src="<?php echo $baseUrl; ?>assets/js/bootstrap.min.js" ></script>


<script type="text/javascript">
        $('.delete').click(function()
        {
            if (confirm('Delete magazine?')) {
                var url = $(this).val();
                $.ajax({
                    url: url,
                    type: 'post',
                    data: {},
                    success: function(result) {
                        document.location.reload(true);
                    },
                    error: function(xhr) {
                        alert('Request Status: ' + xhr.status + ' Status Text: ' + xhr.statusText + ' ' + xhr.responseText);
                    }
                });
            };
        });
    </script>
</body>
</html>
