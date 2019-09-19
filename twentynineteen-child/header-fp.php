<?php
/**
 * The header for our theme's front page
 *
 * This is the template that displays all of the <head> section and everything up until the front page hero image
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146446797-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146446797-1');
</script>


	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tech Sisters</title>
	<link rel="profile" href="https://gmpg.org/xfn/11" />
  <link rel="stylesheet" href="assets/style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato|Nunito+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body id="post-<?php the_ID(); ?>" <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>

		<header>
			<nav class="navbar navbar-expand-lg navbar-light fixed-top">
				<div class="container">


		    <a class=navbar-brand href="http://www.tech-sisters.com">
		      <img src="http://www.tech-sisters.com/wp-content/uploads/2019/08/logo.png" class="logo" alt="Tech Sisters Logo">
		    </a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse navbar-links-container" id="navbarSupportedContent">
		      <ul class="navbar-nav">
		        <li class="nav-item active">
		          <a class="nav-link" href="http://www.tech-sisters.com">Home<span class="sr-only">(current)</span> </a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="http://www.tech-sisters.com/about">About</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="http://www.tech-sisters.com/articles">Articles</a>
		        </li>
				  <li class="nav-item">
		          <a class="nav-link" href="http://www.tech-sisters.com/interviews">Interviews</a>
		        </li>
		      </ul>
		    </div>
					</div>
		  </nav>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
    <section id="primary" class="content-area">
      <main id="main" class="site-main  front-page">
        <section class="jumbotron hero container-fluid">
              <div class="row hero__content">
                <div class="hero__text__container col-lg-5">
                  <h1>A newsletter for amazing (Muslim) sisters in tech</h1>
                  <p>
                    Every two weeks, we'll deliver our latest articles and roundup the best resources we can find to help you get happy in your tech career.
                  </p>
        <a href="http://eepurl.com/gAEVu5" target="_blank" rel="noopener noreferrer" style="border:none">
        <button class="cta-button btn btn-lg">I want to join!</button>
        </a>
                </div>
                <div class="hero__image__container col-lg-6">
                  <img class="illustration" src="http://www.tech-sisters.com/wp-content/uploads/2019/08/hero-illustration.png" alt="illustration of a three women working together over a laptop">
                </div>
              </div>
            </section>
