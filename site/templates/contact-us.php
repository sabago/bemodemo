<?php snippet('header') ?>

<main class="contact">
    <?= $page->image() ?>
    <div class="message-text">
        <span class="contacttext"><?= $page->heading() ?></span><br>
        <span class="contactinfo"> Toll free:</span>
            <span class="contactdetails"><?= $page->tollfree() ?></span><br>
        <span class="contactinfo"> Email:</span>
            <span class=contactdetails><?= $site->contactemail() ?></span>
        </div>
    </div>
    <form method="post">
        <?php if($alert): ?>
            <div class="alert">
                <ul>
                <?php foreach($alert as $message): ?>
                <li><?php echo html($message) ?></li>
                <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>
        <form method="post" action="<?= $page->url() ?>">
            <div class="field">
                <label for="name">
                    <div id="name-div">
                        NAME <abbr title="required">*</abbr>
                    <div>
                </label>
                <input type="text" id="name" name="name" value="<?= $data['name'] ?? '' ?>" required>
                <?= isset($alert['name']) ? '<span class="alert error">' . html($alert['name']) . '</span>' : '' ?>
            </div>
            <div class="field">
                <label for="email">
                    <div id="email-div">
                        EMAIL ADDRESS <abbr title="required">*</abbr>
                    </div>
                </label>
                <input type="email" id="email" name="email" value="<?= $data['email'] ?? '' ?>" required>
                <?= isset($alert['email']) ? '<span class="alert error">' . html($alert['email']) . '</span>' : '' ?>
            </div>
            <div class="field">
                <label for="text">
                HOW CAN WE HELP YOU? <abbr title="required">*</abbr>
                </label><br>
                <textarea id="text" name="text" required>
                    <?= $data['text']?? '' ?>
                </textarea>
                <?= isset($alert['text']) ? '<span class="alert error">' . html($alert['text']) . '</span>' : '' ?>
            </div>
            <span>
                <input type="submit" name="submit" value="SUBMIT"> <input type="reset" name="reset" value="RESET">
            </span>
        </form>
    <div class="note"> Note:<?= kirbytext($page->note()) ?></div>
</main>

<?php snippet('footer') ?>
