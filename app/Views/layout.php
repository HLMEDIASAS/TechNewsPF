<?php 

    use Model\News\CategorieModel;

    $CM = new CategorieModel();
    $categories = $CM->getCategories();
    #debug($categories);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="congnd91">
    <title>TEZ NEWS | Magagize & News HTML Template</title>
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?= $this->assetUrl('images/favicon.png'); ?>">
    <link rel="apple-touch-icon" href="<?= $this->assetUrl('images/apple-touch-icon-57x57.png'); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $this->assetUrl('images/apple-touch-icon-72x72.png'); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $this->assetUrl('images/apple-touch-icon-114x114.png'); ?>">
    <!-- Online Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
    <!-- Vender -->
    <link href="<?php echo $this->assetUrl('css/font-awesome.min.css'); ?>" rel="stylesheet" />
    <link href="<?= $this->assetUrl('css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <link href="<?= $this->assetUrl('css/normalize.min.css'); ?>" rel="stylesheet" />
    <link href="<?= $this->assetUrl('css/owl.carousel.min.css'); ?>" rel="stylesheet" />
    <!-- Main CSS (SCSS Compile) -->
    <link href="<?= $this->assetUrl('css/main.css'); ?>" rel="stylesheet" />
    <?= $this->section('css'); ?>
    <!-- JavaScripts -->
    <!--<script src="<?= $this->assetUrl('js/modernizr.js'); ?>"></script>-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!--preload-->
    <div class="loader" id="page-loader">
        <div class="loading-wrapper">
        </div>
    </div>
    
    <!-- ----------------------------------------- 
                    DEBUT DU MENU
     ----------------------------------------- -->
     
     <!--menu mobile-->
    <nav class="menu-res hidden-lg hidden-md ">
    	<div class="menu-res-inner">
    		<ul>
    			<li><a href="index.html">HOME</a></li>
    			<li><a href="business.html">BUSINESS</a></li>
    			<li><a href="computing.html"> COMPUTING</a></li>
    			<li><a href="tech.html">TECH</a></li>
    		</ul>
    	</div>
    </nav>
    <div class="page">
    	<div class="container">
    		<!--header-->
    		<header class="header">
    			<div class="row">
    				<div class="col-md-3 col-sm-4 col-xs-12">
    					<a href="#" class="logo">
    						<img alt="Logo" src="<?= $this->assetUrl('images/logo.png'); ?>" />
    					</a>
    				</div>
    			</div>
    		</header>
    		<!--menu-->
    		<nav class="menu font-heading">
    			<div class="menu-icon hidden-lg hidden-md">
    				<i class="fa fa-navicon"></i>
    				<span>MENU</span>
    			</div>
    			<ul class="hidden-sm hidden-xs">
    				<?php foreach ($categories as $categorie) : ?>
        				<li>
        					<a href="#"><?= $categorie->getLIBELLECATEGORIE(); ?></a>
        				</li>
    				<?php endforeach; ?>
    			</ul>
    			<div class="search-icon">
    				<div class="search-icon-inner">
    					<i class="fa fa-search"></i>
    				</div>
    				<div class="search-box">
    					<input type="text" placeholder="Rechercher..." />
    					<button>Lancer</button>
    				</div>
    			</div>
    		</nav>
    		
    <!-- ----------------------------------------- 
                      FIN DU MENU
     ----------------------------------------- -->
     
    		<!-- CONTENU DU SITE -->
    		<?= $this->section('contenu'); ?>
    		
    		<!-- SIDEBAR -->
    		
     	</div> <!-- ./page -->
     </div> <!-- ./container --> 
     
     <!-- ----------------------------------------- 
                  DEBUT DU PIED DE PAGE
     ----------------------------------------- -->
        <!--footer-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4  col-sm-4 col-xs-12">
                        <div class="about">
                            <a href="#" class="logo">
                                <img alt="" src="<?= $this->assetUrl('images/logo_footer.png'); ?>" />
                            </a>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-sm-4 col-xs-12">
                        <h3>NOS CATEGORIES</h3>
                        <ul class="list-category">
                            <li><a href="index.html">Accueil</a></li>
                            <li><a href="business.html">Business</a></li>
                            <li><a href="computing.html">Computing</a></li>
                            <li><a href="tech.html">Tech</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-sm-4 col-xs-12">
                        <h3>RECHERCHE PAR TAGS</h3>

                        <div class="list-tags">
                            <a href="#">iPhone 7</a>
                            <a href="#">News</a>
                            <a href="#">Sport</a>
                            <a href="#">Apple</a>
                            <a href="#">Alcatel</a>
                            <a href="#">Pixi 4</a>
                            <a href="#">Elon Musk </a>
                            <a href="#">Smart phone</a>
                            <a href="#">Nexus</a>
                            <a href="#">Canvas</a>

                        </div>
                    </div>
                </div>
                <!--All right-->
                <div class="allright">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <p> &copy; 2017 <a href="#">TECH NEWS</a>. All rights reserved.</p>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <ul class="list-social-icon list-social-icon-footer">
                                <li>
                                    <a href="#" class="facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="google">
                                        <i class="fa fa-google"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="youtube">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="rss">
                                        <i class="fa fa-rss"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    
    <!-- ----------------------------------------- 
                  FIN DU PIED DE PAGE
     ----------------------------------------- -->
     
    <!--script file-->
    <script src="<?= $this->assetUrl('js/jquery.min.js'); ?>"></script>
    <script src="<?= $this->assetUrl('js/bootstrap.js'); ?>"></script>
    <script src="<?= $this->assetUrl('js/owl.carousel.min.js'); ?>"></script>
    <script src="<?= $this->assetUrl('js/main.js'); ?>"></script>
    <?= $this->section('script'); ?>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    