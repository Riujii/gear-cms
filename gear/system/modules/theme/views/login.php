<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="<?= $assets->get('~/img/favicon-32x32.png', $module); ?>">
    <!--[if IE]>
        <link rel="shortcut icon" href="<?= $assets->get('~/img/favicon.ico', $module); ?>">
    <![endif]-->

    <title><?= $app->view->global('title'); ?></title>

    <script>
        var $gear = <?= json_encode((array)$app->config->get('system')); ?>;
        var $lang = <?= json_encode((array)$app->lang->getArray()); ?>;
    </script>

    <?= $app->assets->getCSS(); ?>

</head>
<body>

    <div id="gear">

        <div class="login">

            <messages></messages>

            <a class="logo" href="http://gearcms.org" target="_blank">
                <img src="<?= $assets->get('~/img/logo.svg', $module); ?>">
            </a>

            <?= $app->view->get('content') ?>

        </div>

    </div>

    <?= $app->assets->getJS(); ?>
    <?= $app->assets->getJS('vue'); ?>
    <?= $app->assets->getJS('afterVue'); ?>

</body>
</html>
