<?php

use Model\Shortcut;
$this->layout('layout', ['title' => 'Tech News - Accueil']) ?>

<!-- Pour inclure du CSS -->
<?php $this->start('css') ?>
	<!-- Tout ce qui sera inclut ici, viendra se placer dans la section "css" du layout. -->
<?php $this->stop('css') ?>

<!-- Pour inclure le Contenu -->
<?php $this->start('contenu') ?>
	<div class="row">
        <!--colleft-->
        <div class="col-md-8 col-sm-12">
        	<div class="box-caption">
        		<span>spotlight</span>
        	</div>
        	<!--sportlight-->
        	<section class="owl-carousel owl-spotlight">
        		<?php foreach ($spotlights as $slide) : ?>
            		<div>
            			<article class="spotlight-item">
            				<div class="spotlight-img">
            					<img alt="" src="<?= $this->assetUrl('images/product/'.$slide->FEATUREDIMAGEARTICLE); ?>" class="img-responsive" />
            					<a href="#" class="cate-tag"><?= $slide->LIBELLECATEGORIE; ?></a>
            				</div>
            				<div class="spotlight-item-caption">
            					<h2 class="font-heading">
            						<a href="article.html">
            							<?= $slide->TITREARTICLE; ?>
            						</a>
            					</h2>
            					<div class="meta-post">
            						<a href="#">
            							<?= $slide->PRENOMAUTEUR; ?> <?= $slide->NOMAUTEUR; ?>
            						</a>
            						<em></em>
            						<span>
            							<?= $slide->DATEPUBLICATIONARTICLE; ?>
            						</span>
            					</div>
            					<p><?= Shortcut::getAccroche($slide->CONTENUARTICLE); ?></p>
            				</div>
            			</article>
            		</div>
        	  	<?php endforeach; ?>
        	</section>
        
        	<!--spotlight-thumbs-->
        	<section class="spotlight-thumbs">
        		<div class="row">
        			<div class="col-md-4 col-sm-4 col-xs-12">
        				<div class="spotlight-item-thumb">
        					<div class="spotlight-item-thumb-img">
        						<a href="#">
        							<img alt="" src="images/product/3.jpg" />
        						</a>
        						<a href="#" class="cate-tag">business</a>
        					</div>
        					<h3><a href="#">Tip Aligning Digital Marketing with Business Goals and Objectives</a></h3>
        					<div class="meta-post">
        						<a href="#">
        							Sue	Benson
        						</a>
        						<em></em>
        						<span>
        							22 Sep 2016
        						</span>
        					</div>
        				</div>
        			</div>
        			<div class="col-md-4 col-sm-4 col-xs-12">
        				<div class="spotlight-item-thumb">
        					<div class="spotlight-item-thumb-img">
        						<a href="#">
        							<img alt="" src="images/product/4.jpg" />
        						</a>
        						<a href="#" class="cate-tag">Computing</a>
        					</div>
        					<h3><a href="#">Six big ways MacOS Sierra is going to change your Apple experience</a></h3>
        					<div class="meta-post">
        						<a href="#">
        							Marion	Craig
        						</a>
        						<em></em>
        						<span>
        							21 Sep 2016
        						</span>
        					</div>
        				</div>
        			</div>
        			<div class="col-md-4 col-sm-4 col-xs-12">
        				<div class="spotlight-item-thumb">
        					<div class="spotlight-item-thumb-img">
        						<a href="#">
        							<img alt="" src="images/product/5.jpg" />
        						</a>
        						<a href="#" class="cate-tag">Tech</a>
        					</div>
        					<h3><a href="#">Will Anker be the company to finally put a heads-up display in my car?</a></h3>
        					<div class="meta-post">
        						<a href="#">
        							Super User
        						</a>
        						<em></em>
        						<span>
        							26 Sep 2016
        						</span>
        					</div>
        				</div>
        			</div>
        			<div class="col-md-4 col-sm-4 col-xs-12">
        				<div class="spotlight-item-thumb">
        					<div class="spotlight-item-thumb-img">
        						<a href="#">
        							<img alt="" src="images/product/3.jpg" />
        						</a>
        						<a href="#" class="cate-tag">business</a>
        					</div>
        					<h3><a href="#">Tip Aligning Digital Marketing with Business Goals and Objectives</a></h3>
        					<div class="meta-post">
        						<a href="#">
        							Sue	Benson
        						</a>
        						<em></em>
        						<span>
        							22 Sep 2016
        						</span>
        					</div>
        				</div>
        			</div>
        			<div class="col-md-4 col-sm-4 col-xs-12">
        				<div class="spotlight-item-thumb">
        					<div class="spotlight-item-thumb-img">
        						<a href="#">
        							<img alt="" src="images/product/4.jpg" />
        						</a>
        						<a href="#" class="cate-tag">Computing</a>
        					</div>
        					<h3><a href="#">Six big ways MacOS Sierra is going to change your Apple experience</a></h3>
        					<div class="meta-post">
        						<a href="#">
        							Marion	Craig
        						</a>
        						<em></em>
        						<span>
        							21 Sep 2016
        						</span>
        					</div>
        				</div>
        			</div>
        			<div class="col-md-4 col-sm-4 col-xs-12">
        				<div class="spotlight-item-thumb">
        					<div class="spotlight-item-thumb-img">
        						<a href="#">
        							<img alt="" src="images/product/5.jpg" />
        						</a>
        						<a href="#" class="cate-tag">Tech</a>
        					</div>
        					<h3><a href="#">Will Anker be the company to finally put a heads-up display in my car?</a></h3>
        					<div class="meta-post">
        						<a href="#">
        							Super User
        						</a>
        						<em></em>
        						<span>
        							26 Sep 2016
        						</span>
        					</div>
        				</div>
        			</div>
        		</div>
        	</section>
        </div>
<?php $this->stop('contenu') ?>

<!-- Pour inclure des scripts -->
<?php $this->start('script') ?>
	<!-- Tout ce qui sera inclut ici, viendra se placer dans la section "script" du layout. -->
<?php $this->stop('script') ?>













