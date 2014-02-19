<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">	
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tinymce/tinymce.min.js"></script>
    <script src="js/jsValidation.js"></script>
    <script src="js/delMess.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <div class="container">
    <!-- Header -->
    <?php include 'application/views/header.html'; ?>
    <!-- Content -->
    <form class="span12 offset1 content_for_margin_bottom" method="post"  id="commentBlock">
    <?php include 'application/views/'.$content_view; ?>
    </form>
    <!-- Footer -->
    <?php include 'application/views/footer.html'; ?>
    </div>
</body>
</html>