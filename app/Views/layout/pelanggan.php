<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>tokoonline</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('img/favicon.ico') ; ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="<?= base_url('https://fonts.gstatic.com') ; ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('lib/owlcarousel/assets/owl.carousel.min.css') ; ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('css/style.css') ; ?>" rel="stylesheet">
</head>

<body>

    <?= $this->renderSection('content') ; ?>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('lib/easing/easing.min.js') ; ?>"></script>
    <script src="<?= base_url('lib/owlcarousel/owl.carousel.min.js') ; ?>"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="<?= base_url('mail/contact.js') ; ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('js/main.js') ; ?>"></script>
</body>
</html>
