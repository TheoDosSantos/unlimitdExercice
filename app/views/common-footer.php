<?php 
use Prismic\Dom\RichText;
$footer = $WPGLOBAL['footer']->data;
?>

<footer>
    <div class="wrapper">
        <div class="container-f">
            <div class="container-img">
                <img src="/img/logo-f.svg" alt="">
            </div>
            <div class="container-link">
                <div class="container-product">
                    <h5><?= RichText::asText($footer->body[0]->primary->title); ?></h5>
                    <?php foreach ($footer->body[0]->items as $l) {
                        pa($l->lnk, $l->txt, $dom = "a", $l->nt);
                    } ?>
                </div>
                <div class="container-unlimitd">
                <h5><?= RichText::asText($footer->body[1]->primary->title); ?></h5>
                    <?php foreach ($footer->body[1]->items as $l) {
                        pa($l->lnk, $l->txt, $dom = "a", $l->nt);
                    } ?>
                </div>
                <div class="container-ressource">
                <h5><?= RichText::asText($footer->body[2]->primary->title); ?></h5>
                    <?php foreach ($footer->body[2]->items as $l) {
                        pa($l->lnk, $l->txt, $dom = "a", $l->nt);
                    } ?>
                </div>
                <div class="container-newsletter">
                    <h5><?= RichText::asText($footer->newsletter_title); ?></h5>
                    <p><?= RichText::asText($footer->newsletter_text); ?></p>
                    <div class="btn">
                        <p><?= RichText::asText($footer->newsletter_email); ?></p>
                        <div>
                            <div class="line"></div>
                            <h6 class="open-pop-up-news"><?= RichText::asText($footer->newsletter_btntxt); ?></h6>
                        </div>
                    </div>
                    <div class="container-sn">
                        <h5><?= RichText::asText($footer->follow_title); ?></h5>
                        <div class="img-sn">
                            <?php foreach ($footer->follow_grp as $l) {
                            echo '<a href="'.pUrl($l->link).'"><img src="'.$l->img->url.'" alt="'.$l->img->alt.'"></a>';
							} ?>
                        </div>
                    </div>
                    <p><?= RichText::asText($footer->follow_text); ?></p>
                    <p>Made by <a href="https://www.callbruno.com/fr/">Callbruno.com</a></p>
                </div>
            </div>
            <div class="btn-lang">
                <a href="#">Français</a>
                <a href="#"><img src="/img/developp.svg" alt=""></a>
            </div>
        </div>
    </div>
</footer>