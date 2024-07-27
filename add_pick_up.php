<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aino Tech Admin Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animation.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- Font -->
    <link rel="stylesheet" href="assets/font/fonts.css">
    <!-- Icon -->
    <link rel="stylesheet" href="assets/icon/style.css">
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/images/logo.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/logo.png">
</head>

<body class="body">
    <div id="wrapper">
        <div id="page" class="">
           <div class="layout-wrap">
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
                <?php include "include/sidebar.php" ?>      
                <div class="section-content-right">
                    <?php include "include/header.php" ?>
                    <div class="main-content">
                        <div class="main-content-inner">
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Pick Up Station infomation</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="dashboard.php"><div class="text-tiny">Dashboard</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#"><div class="text-tiny">Voucher</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">New Voucher</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wg-box">
                                    <form class="form-new-product form-style-1" >
                                        <fieldset class="category">
                                            <div class="body-title mb-10">Pick Up State</div>
                                            <div class="select flex-grow">
                                                <select class="">
                                                    <option>Select Role</option>
                                                    <option>icon 1</option>
                                                    <option>icon 2</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                        <fieldset class="category">
                                            <div class="body-title mb-10">Pick Up LGA</div>
                                            <div class="select flex-grow">
                                                <select class="">
                                                    <option>Select Role</option>
                                                    <option>icon 1</option>
                                                    <option>icon 2</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title">Pick Up Address <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" placeholder="Pick up Address" name="text" tabindex="0" value="" aria-required="true" required="">
                                        </fieldset>
                                        <fieldset class="name">
                                            <div class="body-title">Pick Up Description <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" placeholder="Pick up Description" name="text" tabindex="0" value="" aria-required="true" required="">
                                        </fieldset>
                                        <div class="bot">
                                            <div></div>
                                            <button class="tf-button w208" type="submit">Create Pick Up Station</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-page">
                            <div class="body-text">Copyright © 2024 Aino Tech.</div>
                            <i class="icon-heart"></i>
                            <div class="body-text"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
    <?php include "include/footer.php" ?> 

</body>

</html>