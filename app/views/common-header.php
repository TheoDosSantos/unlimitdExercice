<?php 
use Prismic\Dom\RichText;
$header = $WPGLOBAL['header']->data;
?>

<header>
    <div class="container-h">
            <img src="/img/Logo.svg" alt="">
            <div class="container-link nav-menu" id="nav-menu">
                <div class="container-img">
                    <img  src="/img/Logo.svg" alt="">
                    <div class="nav-close" id="nav-close">
                    <img src="/img/close.svg" alt="">
                    </div>
                </div>
                <div class="link-left">
                    <div class="container-btn">
                        <div class="btn">
                            <svg class="btn-arrow" viewBox="0 0 18 16" xmlns="http://www.w3.org/2000/svg">
                                <path class="btn-arrow" d="M16.9564 8.71563C17.3473 8.32552 17.348 7.69235 16.9579 7.30142L10.6006 0.930748C10.2105 0.539812 9.57733 0.539144 9.18639 0.929257C8.79546 1.31937 8.79479 1.95253 9.1849 2.34347L14.8358 8.00629L9.17297 13.6572C8.78203 14.0473 8.78137 14.6804 9.17148 15.0714C9.56159 15.4623 10.1948 15.463 10.5857 15.0729L16.9564 8.71563ZM1.50112 6.99222C0.948831 6.99164 0.500644 7.43888 0.500062 7.99117C0.499479 8.54345 0.946722 8.99164 1.49901 8.99222L1.50112 6.99222ZM16.2511 7.00778L1.50112 6.99222L1.49901 8.99222L16.2489 9.00778L16.2511 7.00778Z"/>
                            </svg>
                            <a href="#" class="btn-text"><?= RichText::asText($header->right_btntxt); ?></a>
                        </div>
                    </div>
                    <a class="item-nav" href="#"><?= RichText::asText($header->body[0]->primary->lnktxt); ?> <img class="img-developp" src="/img/menu-developp.svg" alt=""></a>                    
                    <a class="item-nav" href="#"><?= RichText::asText($header->body[1]->primary->lnktxt); ?></a>
                    <a class="item-nav" href="#"><?= RichText::asText($header->body[2]->primary->lnktxt); ?></a>
                    <a class="item-nav" href="#"><?= RichText::asText($header->body[3]->primary->lnktxt); ?></a>
                    <a class="item-nav" href="#"><?= RichText::asText($header->body[4]->primary->lnktxt); ?></a>
                    <ul class="scrolling-menu">
                    <?php foreach ($header->body[0]->items as $l) {?>
                        <li class="scrolling-item"><a href=""><?= RichText::asText($l->lnktxt); ?></a></li> 
                    <?php } ?>
                    </ul>
                </div>
                <div class="link-right">
                    <a href="#"><?= RichText::asText($header->right_lnktxt); ?></a>
                    <div class="container-btn">
                        <div class="btn">
                            <svg class="btn-arrow" viewBox="0 0 18 16" xmlns="http://www.w3.org/2000/svg">
                                <path class="btn-arrow" d="M16.9564 8.71563C17.3473 8.32552 17.348 7.69235 16.9579 7.30142L10.6006 0.930748C10.2105 0.539812 9.57733 0.539144 9.18639 0.929257C8.79546 1.31937 8.79479 1.95253 9.1849 2.34347L14.8358 8.00629L9.17297 13.6572C8.78203 14.0473 8.78137 14.6804 9.17148 15.0714C9.56159 15.4623 10.1948 15.463 10.5857 15.0729L16.9564 8.71563ZM1.50112 6.99222C0.948831 6.99164 0.500644 7.43888 0.500062 7.99117C0.499479 8.54345 0.946722 8.99164 1.49901 8.99222L1.50112 6.99222ZM16.2511 7.00778L1.50112 6.99222L1.49901 8.99222L16.2489 9.00778L16.2511 7.00778Z"/>
                            </svg>
                            <a href="#" class="btn-text"><?= RichText::asText($header->right_btntxt); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-toggle" id="nav-toggle">
			    <img src="/img/menu.svg" alt="">
		    </div>
    </div>
</header>