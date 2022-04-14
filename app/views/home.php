<?php 
use Prismic\Dom\RichText;
$document = $WPGLOBAL['document']->data;
?>
<html>
  <head>

    <title><?= RichText::asText($document->global_title); ?></title>

    <meta name="description" content="<?= RichText::asText($document->global_description); ?>" />

    <meta http-equiv="content-type" content="text/html; charset=utf8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="/style/css/home.css">

  </head>
  
  <body>
  
    <?php include('common-header.php') ?>

    <main>
            <div class="section-hero">
            <div class="wrapper">
                <div class="container-sh">
                    <div class="container-text">
                        <?php pt($document->hero_title,"h1"); ?>
                        <div class="container-btn">
                            <div class="btn">
                                <svg class="btn-arrow" viewBox="0 0 18 16" xmlns="http://www.w3.org/2000/svg">
                                    <path class="btn-arrow" d="M16.9564 8.71563C17.3473 8.32552 17.348 7.69235 16.9579 7.30142L10.6006 0.930748C10.2105 0.539812 9.57733 0.539144 9.18639 0.929257C8.79546 1.31937 8.79479 1.95253 9.1849 2.34347L14.8358 8.00629L9.17297 13.6572C8.78203 14.0473 8.78137 14.6804 9.17148 15.0714C9.56159 15.4623 10.1948 15.463 10.5857 15.0729L16.9564 8.71563ZM1.50112 6.99222C0.948831 6.99164 0.500644 7.43888 0.500062 7.99117C0.499479 8.54345 0.946722 8.99164 1.49901 8.99222L1.50112 6.99222ZM16.2511 7.00778L1.50112 6.99222L1.49901 8.99222L16.2489 9.00778L16.2511 7.00778Z"/>
                                </svg>
                                <?php pa($document->hero_btnlnk, $document->hero_btntxt, $dom = "a.btn-text", $document->hero_btnnt); ?>
                            </div>
                        </div>
                        
                        <div class="container-list">
                            <?php foreach ($document->hero_grp1 as $l) { ?>
								<div class="item">
									<img src="<?= $l->img->url; ?>" alt="<?= $l->img->alt; ?>">
                                    <p class="text"><?= RichText::asText($l->text); ?></p>
								</div>
							<?php } ?>
                        </div>
                    </div>
                    <div class="container-img">
                        <div class="img">
                            <img src="<?= $document->hero_grp2[0]->img->url; ?>" alt="<?= $document->hero_grp2[0]->img->alt; ?>">
                        </div>
                        <div class="img">
                            <img src="<?= $document->hero_grp2[3]->img->url; ?>" alt="<?= $document->hero_grp2[3]->img->alt; ?>">
                        </div>
                        
                        <div class="img">
                            <img src="<?= $document->hero_grp2[1]->img->url; ?>" alt="<?= $document->hero_grp2[1]->img->alt; ?>">
                        </div>
                        <div class="img">
                            <img src="<?= $document->hero_grp2[2]->img->url; ?>" alt="<?= $document->hero_grp2[2]->img->alt; ?>">
                        </div>
                    </div>
                    
                </div>
            </div>
            </div>
            <div class="section-1">
                <div class="wrapper">
                    <div class="container">
                        <h2><?= RichText::asText($document->body[0]->primary->title); ?></h2>
                        <div class="container-logo">
                            <?php foreach ($document->body[0]->items as $l) { ?>
								<img src="<?= $l->img->url; ?>" alt="<?= $l->img->alt; ?>">
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-2">
                <div class="wrapper">
                    <div class="container">
                        <div class="container-title">
                            <p class="text"><?= RichText::asText($document->solution_subtitle); ?></p>
                            <h2><?= RichText::asText($document->solution_title); ?></h2>
                        </div>
                        <div class="container-div">
                            <div class="container-col">
                                <div class="container-el">
                                    <div class="el">
                                        <img src="<?= $document->solution_imgp->url; ?>" alt="<?= $document->solution_imgp->alt; ?>">
                                        <h3><?= RichText::asText($document->solution_titlep); ?></h3>
                                    </div>
                                    <div class="el">
                                        <div class="container-text">
                                            <h3><?= RichText::asText($document->solution_titlew); ?></h3>
                                            <p class="text"><?= RichText::asText($document->solution_textw); ?></p>
                                        </div>
                                        <img src="<?= $document->solution_imgw->url; ?>" alt="<?= $document->solution_imgw->alt; ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <img src="<?= $document->solution_imgo->url; ?>" alt="<?= $document->solution_imgo->alt; ?>">
                                    <div class="container-text">
                                        <h3><?= RichText::asText($document->solution_titleo); ?></h3>
                                        <p class="text"><?= RichText::asText($document->solution_texto); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="container-text">
                                <p><?= RichText::asText($document->solution_text); ?></p>
                                <div class="container-btn-video">
                                    <div class="btn-video">
                                        <a href=""><img src="/img/play.svg" alt=""></a></div>
                                    <?php pa($document->solution_videolnk, $document->solution_videotxt, $dom = "a"); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-3">
                <div class="wrapper">
                    <div class="container">
                        <div class="container-title">
                            <p><?= RichText::asText($document->body2[0]->primary->subtitle); ?></p>
                            <h2><?= RichText::asText($document->body2[0]->primary->title); ?></h2>
                        </div>
                        <div class="container-card">
                        <?php foreach ($document->body2[0]->items as $l) {?>
                                <div class="card ">
                                    <div class="lottie" id="<?= $l->lottie; ?>"></div>
                                    <div class="container-text">
                                        <h3><?= RichText::asText($l->title); ?></h3>
                                        <p class="text"><?= RichText::asText($l->text); ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="container-btn">
                            <div class="btn">
                                <svg class="btn-arrow" viewBox="0 0 18 16" xmlns="http://www.w3.org/2000/svg">
                                    <path class="btn-arrow" d="M16.9564 8.71563C17.3473 8.32552 17.348 7.69235 16.9579 7.30142L10.6006 0.930748C10.2105 0.539812 9.57733 0.539144 9.18639 0.929257C8.79546 1.31937 8.79479 1.95253 9.1849 2.34347L14.8358 8.00629L9.17297 13.6572C8.78203 14.0473 8.78137 14.6804 9.17148 15.0714C9.56159 15.4623 10.1948 15.463 10.5857 15.0729L16.9564 8.71563ZM1.50112 6.99222C0.948831 6.99164 0.500644 7.43888 0.500062 7.99117C0.499479 8.54345 0.946722 8.99164 1.49901 8.99222L1.50112 6.99222ZM16.2511 7.00778L1.50112 6.99222L1.49901 8.99222L16.2489 9.00778L16.2511 7.00778Z"/>
                                </svg>
                                <?php pa($document->body2[0]->primary->btnlnk, $document->body2[0]->primary->btntxt, $dom = "a.btn-text", $document->body2[0]->primary->btnnt); ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="section-4">
                <div class="wrapper">
                    <div class="container">
                        <div class="container-title">
                            <h2><?= RichText::asText($document->produits_title); ?></h2>
                        </div>
                        <div class="cards">
                            <?php foreach ($document->produits_grp as $k => $l) { ?>
                                <div class="card">
                                    <h4><?= RichText::asText($l->title); ?></h4>
                                    <h3><?= RichText::asText($l->text); ?></h3>
                                    <div class="container-btn">
                                        <div class="btn">
                                            <svg class="btn-arrow" viewBox="0 0 18 16" xmlns="http://www.w3.org/2000/svg">
                                                <path class="btn-arrow" d="M16.9564 8.71563C17.3473 8.32552 17.348 7.69235 16.9579 7.30142L10.6006 0.930748C10.2105 0.539812 9.57733 0.539144 9.18639 0.929257C8.79546 1.31937 8.79479 1.95253 9.1849 2.34347L14.8358 8.00629L9.17297 13.6572C8.78203 14.0473 8.78137 14.6804 9.17148 15.0714C9.56159 15.4623 10.1948 15.463 10.5857 15.0729L16.9564 8.71563ZM1.50112 6.99222C0.948831 6.99164 0.500644 7.43888 0.500062 7.99117C0.499479 8.54345 0.946722 8.99164 1.49901 8.99222L1.50112 6.99222ZM16.2511 7.00778L1.50112 6.99222L1.49901 8.99222L16.2489 9.00778L16.2511 7.00778Z"/>
                                            </svg>
                                            <?php pa($l->btnlnk, $l->btntxt, $dom = "a.btn-text", $l->btnnt); ?>
                                        </div>
                                    </div>
                                    <?php $k=$k+1 ?>
                                        <img src="/img/star-card-<?php echo($k)?>.svg" alt="">
                                    </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-5">
                <div class="wrapper">
                    <div class="container">
                        <div class="container-title">
                            <p><?= RichText::asText($document->etapes_subtitle); ?></p>
                            <h2><?= RichText::asText($document->etapes_title); ?></h2>
                        </div>
                        <div class="container-slider">
                            <div class="container-text">
                                <?php $i=0; $k=1; foreach ($document->etapes_grp as $l) { ?>
                                    <div class="card-text <?php echo($k); if($i===0){ echo(' active-card'); } ?>">
                                        <div class="card-title">
                                            <div class="img-margin">
                                                <img src="<?= $l->img1->url; ?>" alt="<?= $l->img1->alt; ?>">
                                            </div>
                                            <h3><?= RichText::asText($l->title); ?></h3>
                                        </div>
                                    <p><?= RichText::asText($l->text); ?></p>
                                    </div>
                                <?php $i++; $k++; } ?>
                            </div>
                            <div class="container-img">
                                <?php $i=0; $k=1; foreach ($document->etapes_grp as $l) { ?>
                                <div class="card-img <?php echo($k); if($i===0){ echo(' active-img'); } ?>">
                                    <img src="<?= $l->img2->url; ?>" alt="<?= $l->img2->alt; ?>">
                                </div>
                                <?php $i++; $k++; } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-6">
                <div class="wrapper">
                    <div class="container">
                        <div class="container-title">
                            <h2><?= RichText::asText($document->eligible_title); ?></h2>
                        </div>
                        <div class="container-card">
                           <?php foreach ($document->eligible_grp as $l) {?>
                                <div class="card ">
                                    <div class="lottie" id="<?= $l->lottie; ?>"></div>
                                    <div class="container-text">
                                        <h3><?= RichText::asText($l->title); ?></h3>
                                        <p><?= RichText::asText($l->text); ?></p>
                                    </div>
                                </div>
                            <?php } ?> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-7">
                <div class="wrapper">
                    <div class="container">
                        <div id="slide-prev" class="slide-prev">
                            <img src="/img/prev.svg" alt="">
                        </div>
                        <div class="container-img">
                        <?php $i=0; foreach ($document->quotes_grp as $l) { ?>
                            <div class="slide-img <?php if($i===0){ echo('style-active'); } ?>">
                                <img src="<?= $l->img1->url; ?>" alt="<?= $l->img1->alt; ?>">
                            </div>
                            <?php $i++; } ?>
                        </div>
                        <div class="container-text">
                            <?php $i=0; foreach ($document->quotes_grp as $l) { ?>
                            <div class="slide-text <?php if($i===0){ echo('style-active'); } ?>">
                                <img src="<?= $l->img2->url; ?>" alt="<?= $l->img2->alt; ?>">
                                <q class="quote-text"><?= RichText::asText($l->quote); ?></q>
                                <div class="text">
                                    <p><?= RichText::asText($l->name); ?></p>
                                    <p><?= RichText::asText($l->job); ?></p>
                                </div>
                            </div>
                            <?php $i++; } ?>
                        </div>
                        <div id="slide-next" class="slide-next">
                        <img src="/img/next.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-8">
                <div class="wrapper">
                    <div class="container">
                        <div class="container-text">
                            <h2><?= RichText::asText($document->cta_title); ?></h2>
                            <div class="container-cta">
                                <p> <img src="/img/arrow-s8.svg" alt=""><?= RichText::asText($document->cta_text); ?></p>
                                <div class="container-btn">
                                    <div class="btn">
                                        <svg class="btn-arrow" viewBox="0 0 18 16" xmlns="http://www.w3.org/2000/svg">
                                            <path class="btn-arrow" d="M16.9564 8.71563C17.3473 8.32552 17.348 7.69235 16.9579 7.30142L10.6006 0.930748C10.2105 0.539812 9.57733 0.539144 9.18639 0.929257C8.79546 1.31937 8.79479 1.95253 9.1849 2.34347L14.8358 8.00629L9.17297 13.6572C8.78203 14.0473 8.78137 14.6804 9.17148 15.0714C9.56159 15.4623 10.1948 15.463 10.5857 15.0729L16.9564 8.71563ZM1.50112 6.99222C0.948831 6.99164 0.500644 7.43888 0.500062 7.99117C0.499479 8.54345 0.946722 8.99164 1.49901 8.99222L1.50112 6.99222ZM16.2511 7.00778L1.50112 6.99222L1.49901 8.99222L16.2489 9.00778L16.2511 7.00778Z"/>
                                        </svg>
                                        <?php pa($document->cta_btnlnk, $document->cta_btntxt, $dom = "a.btn-text", $document->cta_btnnt); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-9">
                <div class="wrapper">
                    <div class="container-logo">
                    <?php foreach ($document->body1[0]->items as $l) { ?>
						<img src="<?= $l->img->url; ?>" alt="<?= $l->img->alt; ?>">
                    <?php } ?>
                    </div>
                </div>
            </div>
            <div class="pop-up-news">
                <div class="container-pop-up">
                    <img src="/img/contact-pop-up.svg" alt="">
                    <h3>Merci pour votre inscription à notre newsletter!</h3>
                    <p>Nous vous remercions pour votre inscription, vous receverez prochainement toutes les nouveautés sur Unlimitd !</p>
                    <img class="close-pop-up-news" src="/img/close.svg" alt=""/>
                </div>
            </div>
		</main>

    <?php include('common-footer.php') ?>
    
    <script type="text/javascript" src="/script/minify/common-min.js"></script>
    <script type="text/javascript" src="/script/minify/bodymovin-min.js"></script>
    <script type="text/javascript" src="/script/minify/app-min.js"></script>
  </body>
</html>