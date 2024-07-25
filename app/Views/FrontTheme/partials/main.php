<!doctype html>
<html lang="<?php
            $session = \Config\Services::session();
            $lang = $session->get('lang');
            echo $lang;
            ?>">

<head>
    <script src="<?= base_url($_assets_path . 'assets/libs/jquery/jquery.min.js') ?>"></script>
    <link rel="icon" href="https://cdn.s3waas.gov.in/s3ac627ab1ccbdb62ec96e702f07f6425b/uploads/2019/06/2019061167.jpg">
    <?= view($_partials_path . 'title-meta') ?>
    <?= view($_partials_path . 'head-css') ?>
    <?= view($_partials_path . 'FirebaseMessagingNotification') ?>
    <?= view($_partials_path . 'head-js') ?>
</head>

<body data-layout="detached" data-topbar="colored">
    <div class="container-fluid p-0">
        <?= view($_partials_path . 'topbar') ?>
        <!-- Begin page -->
        <div class="page-content">
            <!-- main page -->
            <?php if (isset($_view_files) && is_array($_view_files)) : ?>
                <?php foreach ($_view_files as $key => $view_file) : ?>
                    <?php if (is_string($view_file)) : ?>
                        <div class="view_file_<?= $key ?>">
                            <?= view($view_file) ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <!-- END layout-wrapper -->
        <?= view($_partials_path . 'footer') ?>
    </div>
    <!-- end container-fluid -->

    <!-- JAVASCRIPT -->
    <?= view($_partials_path . 'vendor-scripts') ?>
</body>
<?= view($_partials_path . 'script') ?>

</html>