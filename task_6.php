<?php
    $users = [
        [
            "name" => "Sunny A. (UI/UX Expert)",
            "img" => "img/demo/authors/sunny.png",
            "img_alt" => "Sunny A.",            
            "position" => "Lead Author",
            "twitter_link" => "https://twitter.com/@myplaneticket",
            "twitter_login" => "@myplaneticket",
            "email_link" => "https://wrapbootstrap.com/user/myorange",
            "email_icon" => '<i class="fal fa-envelope"></i>',
            "email_title" => "Contact Sunny",
            "is_status" => true
        ],
        [
            "name" => "Jos K. (ASP.NET Developer)",
            "img" => "img/demo/authors/josh.png",
            "img_alt" => "Jos K.",            
            "position" => "Partner &amp; Contributor",
            "twitter_link" => "https://twitter.com/@atlantez",
            "twitter_login" => "@atlantez",
            "email_link" => "https://wrapbootstrap.com/user/Walapa",
            "email_icon" => '<i class="fal fa-envelope"></i>',
            "email_title" => "Contact Jos",
            "is_status" => true
        ],
        [
            "name" => "Jovanni L. (PHP Developer)",
            "img" => "img/demo/authors/jovanni.png",
            "img_alt" => "Jovanni Lo",            
            "position" => "Partner &amp; Contributor",
            "twitter_link" => "https://twitter.com/@lodev09",
            "twitter_login" => "@lodev09",
            "email_link" => "https://wrapbootstrap.com/user/lodev09",
            "email_icon" => '<i class="fal fa-envelope"></i>',
            "email_title" => "Contact Jovanni",
            "is_status" => false
        ],
        [
            "name" => "Roberto R. (Rails Developer)",
            "img" => "img/demo/authors/roberto.png",
            "img_alt" => "Roberto R",            
            "position" => "Parnter &amp; Contributor",
            "twitter_link" => "https://twitter.com/@sildur",
            "twitter_login" => "@sildur",
            "email_link" => "https://wrapbootstrap.com/user/sildur",
            "email_icon" => '<i class="fal fa-envelope"></i>',
            "email_title" => "Contact Roberto",
            "is_status" => false
        ],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            ???????????????????????????????? ?????????????? ?? ??????????
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            ??????????????
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                                <?php foreach($users as $user): ?>
                                    <div class="<?php echo $user['is_status'] == false ? 'banned' : '' ?> rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                        <img 
                                            src="<?php echo $user['img']; ?>" 
                                            alt="<?php echo $user['img_alt'] ?>" 
                                            class="img-thumbnail img-responsive rounded-circle"
                                            style="width:5rem; height: 5rem;"
                                        >
                                        <div class="ml-2 mr-3">
                                            <h5 class="m-0">
                                                <?php echo $user['name']; ?>
                                                <small class="m-0 fw-300">
                                                    <?php echo $user['position']; ?>
                                                </small>
                                            </h5>
                                            <a href="<?php echo $user['twitter_link']; ?>" class="text-info fs-sm" target="_blank">
                                                <?php echo $user['twitter_login']; ?>
                                            </a> -
                                            <a href="<?php echo $user['email_link']; ?>" class="text-info fs-sm" target="_blank"
                                                title="<?php echo $user['email_title']; ?>"><?php echo $user['email_icon']; ?>
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
