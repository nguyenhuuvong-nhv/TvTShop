<html>
    <head>
        <title>TVT WEBSITE SMARTH PHONE NO.1</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">

        <script  src="public/js/ajax.js"></script>
        <script  src="public/js/jquery.js"></script>
        <script  src="public/js/bootstrap.js"></script>

        <link rel="stylesheet" type="text/css" href="public/css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="public/css/slick-theme.css"/>
        <!--slide-->
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" type="image/png" href="images/img_logo.png"/>
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>

    </head>
    <body>
        <div id="wrapper">
            <?php include 'view/header.php'; ?>
            <div id="maincontent">
                <div class="container">
                    <div class="col-md-3  fixside" >
                        <?php include 'view/danhmuc_left.php'; ?>

                        <?php include 'chuc_nang/san_pham/noi_bat.php'; ?> 
                        <?php include 'chuc_nang/san_pham/mua_nhieu.php'; ?> 
                    </div>
                    <div class="col-md-9 bor">
                        <?php include './chuc_nang/menu.php'; ?>
                    </div>
                </div>

                <?php include 'view/quang_cao.php'; ?> 
                
            </div>
            <?php include 'view/footer.php'; ?>
        </div>
        <script  src="js/slick.min.js"></script>
        
    </body>
    
</html>

<script type="text/javascript">
    $(function () {
        $hidenitem = $(".hidenitem");
        $itemproduct = $(".item-product");
        $itemproduct.hover(function () {
            $(this).children(".hidenitem").show(100);
        }, function () {
            $hidenitem.hide(500);
        })
    })
</script>