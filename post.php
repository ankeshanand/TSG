<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>FESTS</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="GymkhanaIITkgp" />
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-wysihtml5.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap3-wysiwyg5-color.css" />
        <script src="js/modernizr.custom.js"></script>
        <script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/wysihtml5-0.3.0.js"></script>
<script src="js/bootstrap3-wysihtml5.js"></script>


<style>
     #editor {overflow:scroll; max-height:300px}
     </style>
</head>
    <body>
    <?php include_once('navbar.php'); ?>
    <div class="container" style="margin-top:60px;">
        <div class="well">
<textarea id="editor" placeholder="Enter text ..."></textarea>
</div>
</div>
</body>
<script type="text/javascript">
$('#editor').wysihtml5();
</script>


