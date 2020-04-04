<!--
=========================================================

*  Argon Design System - v1.2.0

=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<?php
if (!defined('DOKU_INC')) die(); /* must be run from within DokuWiki */
  @require_once (dirname(__FILE__) . '/tpl_functions.php'); /* include hook for template functions */
  header('X-UA-Compatible: IE=edge,chrome=1');

  $showTools = !tpl_getConf('hideTools') || (tpl_getConf('hideTools') && !empty($_SERVER['REMOTE_USER']));
  $showSidebar = page_findnearest($conf['sidebar']) && ($ACT == 'show');
?>
<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
		<link rel="icon" type="image/png" href="assets/img/favicon.png">
		<title>
			<?php tpl_pagetitle() ?> [
			<?php echo strip_tags($conf['title']) ?>]</title>
		<?php tpl_metaheaders() ?>
		<?php echo tpl_favicon(array(
      'favicon',
      'mobile'
    )) ?>
		<?php tpl_includeFile('meta.html') ?>
		<!--     Fonts and icons     -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
		<!-- Nucleo Icons -->
		<link href="<?php echo tpl_basedir(); ?>assets/css/nucleo-icons.css" rel="stylesheet" />
		<link href="<?php echo tpl_basedir(); ?>assets/css/nucleo-svg.css" rel="stylesheet" />
		<!-- Font Awesome Icons -->
		<link href="<?php echo tpl_basedir(); ?>assets/css/font-awesome.css" rel="stylesheet" />
		<link href="<?php echo tpl_basedir(); ?>assets/css/nucleo-svg.css" rel="stylesheet" />
		<!-- CSS Files -->
		<link href="<?php echo tpl_basedir(); ?>assets/css/argon-design-system.css" rel="stylesheet" />
		<!-- Documentation extras -->
		<style>
		      .navbar-absolute-logo {
		        padding-left: 45px;
		       }
		
		      .navbar-absolute-logo img {
		        position: absolute;
		        left: 15px;
		        margin-top: -6px;
		      }
		
		      body {
		        background: white;
			  }
			  
		</style>
	</head>

	<body class="docs ">
		<div id="dokuwiki__site">


			<header class="navbar navbar-horizontal navbar-expand navbar-dark flex-row align-items-md-center ct-navbar bg-primary py-2"> <a class="navbar-brand mr-0 mr-md-2" href="index.html" aria-label="Bootstrap">
           <img src="assets/img/brand/white.png">
           <sup>DOCS</sup>
         </a>
				<ul class="navbar-nav flex-row mr-auto ml-4 d-none d-md-flex">
					<li class="nav-item"> <a class="nav-link" href="index.html">Live Preview</a> </li>
					<li class="nav-item"> <a class="nav-link" href="https://github.com/creativetimofficial/ct-argon-design-system-pro/issues" rel="nofollow" target="_blank">Support</a> </li>
					<li class="nav-item">
						<div class="search-form">
							<?php tpl_searchform()?>
						</div>
					</li>
				</ul>
				<div class="d-none d-sm-block ml-auto">
					<ul class="navbar-nav ct-navbar-nav flex-row align-items-center">
						<li class="nav-item"> <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" rel="nofollow" target="_blank">
                 <i class="fab fa-facebook-square"></i>
               </a> </li>
						<li class="nav-item"> <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" rel="nofollow" target="_blank">
                 <i class="fab fa-twitter"></i>
               </a> </li>
						<li class="nav-item"> <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial/" rel="nofollow" target="_blank">
                 <i class="fab fa-instagram"></i>
               </a> </li>
						<li class="nav-item"> <a class="nav-link nav-link-icon" href="https://dribbble.com/creativetim" rel="nofollow" target="_blank">
                 <i class="fab fa-dribbble"></i>
               </a> </li>
						<li class="nav-item"> <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial" rel="nofollow" target="_blank">
                 <i class="fab fa-github"></i>
               </a> </li>
					</ul>
				</div>
				<li class="nav-item d-none d-lg-block ml-lg-4"> <a href="https://www.creative-tim.com/product/argon-design-system-pro?ref=ads-upgrade-pro" target="_blank" class="btn btn-neutral btn-icon">
             <span class="btn-inner--icon">
               <i class="fa fa-shopping-cart"></i>
             </span>
             <span class="nav-link-inner--text">Upgrade to PRO</span>
           </a> <a href="https://www.creative-tim.com/product/argon-design-system" target="_blank" class="btn btn-neutral btn-icon">
             <span class="btn-inner--icon">
               <i class="fa fa-cloud-download mr-2"></i>
             </span>
             <span class="nav-link-inner--text">Download</span>
           </a> </li> <button class="navbar-toggler ct-search-docs-toggle d-block d-md-none ml-auto ml-sm-0" type="button" data-toggle="collapse" data-target="#ct-docs-nav" aria-controls="ct-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation">
           <span class="navbar-toggler-icon"></span>
		 </button> 
		
		
		</header>
		 


			<div class="container-fluid">
				<div class="row flex-xl-nowrap">



					<!-- left sidebar -->
					<div class="col-12 col-md-3 col-xl-2 ct-sidebar">
						<nav class="collapse ct-links" id="ct-docs-nav">
							<!-- PAGE ACTIONS -->
							<?php if ($showTools): ?>
							<div id="dokuwiki__pagetools" class="ct-toc-item active">
								<a class="ct-toc-link">
									<?php echo $lang['page_tools'] ?>
								</a>
								<ul class="nav ct-sidenav">
									<?php tpl_toolsevent('pagetools', array(
										'edit' => tpl_action('edit', 1, 'li', 1) ,
										'revisions' => tpl_action('revisions', 1, 'li', 1) ,
										'backlink' => tpl_action('backlink', 1, 'li', 1) ,
										'subscribe' => tpl_action('subscribe', 1, 'li', 1) ,
										'revert' => tpl_action('revert', 1, 'li', 1) ,
										'top' => tpl_action('top', 1, 'li', 1) ,
										)); 
									?> 
								</ul>
							</div>
							<?php endif; ?> 
						</nav>
					</div>




					


					<!-- main contentet -->


					<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 ct-content" role="main">
					
						<div id="dokuwiki__top" class="site 
							<?php echo tpl_classes(); ?> 
							<?php echo ($showSidebar) ? 'hasSidebar' : ''; ?>">
						</div>
						
						<?php html_msgarea() /* occasional error and info messages on top of the page */ ?>
						<?php tpl_includeFile('header.html') ?>
						
						<!-- <div class="ct-page-title">
							<h1 class="ct-title" id="content">
								<?php /* tpl_link(wl(), $conf['title'], 'accesskey="h" title="[H]"') */ ?>
							</h1>
						</div> -->
						
						<!-- BREADCRUMBS -->
						<nav aria-label="breadcrumb" role="navigation">
						<ol class="breadcrumb">
							<?php if ($conf['breadcrumbs']) {?>
								<div class="breadcrumbs"><?php tpl_breadcrumbs()?></div>
							<?php }?>
							<?php if ($conf['youarehere']) {?>
								<div class="breadcrumbs"><?php tpl_youarehere()?></div>
							<?php }?>
						</ol>
						</nav>
						

						<!-- ********** CONTENT ********** -->
						<div id="dokuwiki__content">
							<div class="pad">
								<?php tpl_flush() /* flush the output buffer */ ?>
								<?php tpl_includeFile('pageheader.html') ?>
								<div class="page">
									<!-- wikipage start -->
									<?php tpl_content(false) /* the main content */ ?>
									<!-- wikipage stop -->
								</div>
								<?php tpl_flush() ?>
								<?php tpl_includeFile('pagefooter.html') ?> </div>
						</div>
						<!-- /content -->
					</main>




					<!-- right sidebar -->
					<div class="d-none d-xl-block col-xl-2 ct-toc">
						<ul class="section-nav">
							<li class="toc-entry toc-h6"><a href="#developer-first">Developer First</a></li>
							<li class="toc-entry toc-h6"><a href="#high-quality-before-everything">High quality before everything</a> </li>
							<li class="toc-entry toc-h6"><a href="#community-helpers">Community helpers</a></li>
							<li class="toc-entry toc-h2"><a href="#resources-and-credits">Resources and credits</a>
								<ul>
									<li class="toc-entry toc-h3"><a href="#learn-more">Learn more</a></li>
								</ul>
							</li>
						</ul>
						<div class="section-nav">
							<!-- Check the table of contents section in https://www.dokuwiki.org/devel:templates -->
						<?php tpl_toc()?>
						</div>
						
					</div>




				</div>
			</div>
		</div>
	</body>

	</html>
