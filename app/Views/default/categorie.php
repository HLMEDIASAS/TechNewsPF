<?php
$this->layout('layout', ['title' => 'TechNews | '.ucfirst($categorie)]);
?>

<!-- Pour inclure du CSS -->
<?php $this->start('css') ?>
	<!-- Tout ce qui sera inclut ici, viendra se placer dans la section "css" du layout. -->
<?php $this->stop('css') ?>

<!-- Pour inclure le Contenu -->
<?php $this->start('contenu') ?>
<?php 
    #debug($articles);
?>
	<div class="row">
        <!--colleft-->
        <div class="col-md-8 col-sm-12">
            <div class="box-caption">
                <span>Computing</span>
            </div>
            <!--list-news-cate-->
            <div class="list-news-cate">
                        <article class="news-cate-item">
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <a href="#">
                                        <img alt="" src="images/product/2.jpg">
                                    </a>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <h3><a href="#">Tip Aligning Digital Marketing with Business Goals and Objectives</a></h3>
                                    <div class="meta-post">
                                        <a href="#">
                                            Hugo LIEGEARD
                                        </a>
                                        <em></em>
                                        <span>
                                            2017-02-26 09:37:18
                                        </span>
                                    </div>
                                    Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere...
                                </div>
                            </div>
                        </article>
            </div>
    
            <div class="paging">
                <a href="#">Prev</a>
                <a href="#" class="current">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">Next</a>
            </div>
    
        </div>
<?php $this->stop('contenu') ?>

<!-- Pour inclure des scripts -->
<?php $this->start('script') ?>
	<!-- Tout ce qui sera inclut ici, viendra se placer dans la section "script" du layout. -->
<?php $this->stop('script') ?>













