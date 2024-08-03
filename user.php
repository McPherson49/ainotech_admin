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

<body id="admin" v-cloak class="body">
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
                                    <h3>All User</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.html"><div class="text-tiny">Dashboard</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#"><div class="text-tiny">User</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">All User</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- all-user -->
                                <div class="wg-box">
                                    <div class="flex items-center justify-between gap10 flex-wrap">
                                        <div class="wg-filter flex-grow">
                                            <form class="form-search">
                                                <fieldset class="name">
                                                    <input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                                </fieldset>
                                                <div class="button-submit">
                                                    <button class="" type="submit"><i class="icon-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="wg-table table-all-user">
                                        <ul class="table-title flex gap20 mb-14">
                                            <li>
                                                <div class="body-title">User</div>
                                            </li>    
                                            <li>
                                                <div class="body-title">Phone</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Email</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Action</div>
                                            </li>
                                        </ul>
                                        <ul class="flex flex-column">
                                            <li class="user-item gap14">
                                                <div class="image">
                                                    <img src="images/avatar/user-6.png" alt="">
                                                </div>
                                                <div class="flex items-center justify-between gap20 flex-grow">
                                                    <div class="name">
                                                        <a href="#" class="body-title-2">Kristin Watson</a>
                                                        <div class="text-tiny mt-3">Product name</div>
                                                    </div>
                                                    <div class="body-text">$1,452.500</div>
                                                    <div class="body-text">1,638</div>
                                                    <div class="list-icon-function">
                                                        <div class="item eye">
                                                            <i class="icon-eye"></i>
                                                        </div>
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="flex items-center justify-between flex-wrap gap10">
                                        <div class="text-tiny"></div>
                                        <ul class="wg-pagination">
                                            <li>
                                                <a href="#"><i class="icon-chevron-left"></i></a>
                                            </li>
                                            <li>
                                                <a href="#">1</a>
                                            </li>
                                            <li class="active">
                                                <a href="#">2</a>
                                            </li>
                                            <li>
                                                <a href="#">3</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /all-user -->
                            </div>
                            <!-- /main-content-wrap -->
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

    <?php include "include/footer.php" ?> 

</body>
</html>