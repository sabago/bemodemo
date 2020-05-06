<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165693875-1"></script>
    <script>
        <?= $site->googleanalytics() ?>
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= css('assets/css/index.css') ?>
    <?php if ($page->toggle() == 'true') { ?>
        <meta name="robots" content="noindex">
    <?php } else { ?>
        <meta name="" content="">
    <?php } ?>
    <!-- Facebook pixel -->
    <script>
        <?= $site->facebookPixel() ?>
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1144260399283792&ev=PageView&noscript=1"/>
    </noscript>
    <title><?= $site->title() ?></title>
    <description><?= $site->description() ?></title>
</head>
<body>
<header>
    <a class="logo" href="/main">
    <img src="<?= url('assets/images/bemo-logo2.png') ?>">
    </a>
    <nav class="menu">
        <?php forEach ($site->children()->listed() as $subpage): ?>
            <a href="<?= $subpage->url() ?>">
                <?= kirbytext($subpage->title()) ?>
            </a>
        <?php endforeach?>  
    </nav>
</header>