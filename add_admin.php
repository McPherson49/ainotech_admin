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
                                    <h3>Add New AinoTech Admin</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="dashboard.php"><div class="text-tiny">Dashboard</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#"><div class="text-tiny">Admin</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Add New AinoTech Admin</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- add-new-user -->
                                <form class="form-add-new-user form-style-2">
                                    <div class="wg-box">
                                        <div class="left">
                                            <h5 class="mb-4">Account</h5>
                                            <div class="body-text">Fill in the information below to add a new aino Tech Admin</div>
                                        </div>
                                        <div class="right flex-grow">
                                            <fieldset class="name mb-24">
                                                <div class="body-title mb-10">Name</div>
                                                <input class="flex-grow" type="text" placeholder="Username" name="name" tabindex="0" value="" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="email mb-24">
                                                <div class="body-title mb-10">Email</div>
                                                <input class="flex-grow" type="email" placeholder="Email" name="email" tabindex="0" value="" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="email mb-24 mt-5">
                                                <div class="body-title mb-10">Staff Image</div>
                                                <input type="file" id="myFile" class="uploadfile" for="myFile" name="filename">
                                            </fieldset>
                                            <fieldset class="category">
                                                <div class="body-title mb-10">Role</div>
                                                <div class="select flex-grow">
                                                    <select class="">
                                                        <option>Select Role</option>
                                                        <option>icon 1</option>
                                                        <option>icon 2</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                            
                                            <fieldset class="password mb-24">
                                                <div class="body-title mb-10">Password</div>
                                                <input class="password-input" type="password" placeholder="Enter password" name="password" tabindex="0" value="" aria-required="true" required="">
                                                <span class="show-pass">
                                                    <i class="icon-eye view"></i>
                                                    <i class="icon-eye-off hide"></i>
                                                </span>
                                            </fieldset>
                                            <fieldset class="password">
                                                <div class="body-title mb-10">Confirm password</div>
                                                <input class="password-input" type="password" placeholder="Confirm password" name="password" tabindex="0" value="" aria-required="true" required="">
                                                <span class="show-pass">
                                                    <i class="icon-eye view"></i>
                                                    <i class="icon-eye-off hide"></i>
                                                </span>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="bot">
                                        <button class="tf-button w180" type="submit">Create Aino Admin</button>
                                    </div>
                                </form>
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

    <?php include "include/footer.php" ?> 

</body>

</html>