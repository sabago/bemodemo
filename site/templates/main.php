<?php snippet('header') ?>

<div class="banner video_banner">
    <div id="feature" class="bghide">
        <div class="featureImg">
            <?= $page->image() ?>
            <div class="banner-text">
                <h2><?= $page->bannertext() ?><h2>
            </div>
        </div>
    </div>
    <div class="main-page-content">
        <span id="main-page-heading"><?= kirbytext($page->heading()) ?></span>
        <span id="overview"><?= kirbytext($page->overview()) ?></span>
        <span id="maintext"><?= kirbytext($page->maintext()) ?></span>
    </div>
</div>

<?php snippet('footer') ?>
