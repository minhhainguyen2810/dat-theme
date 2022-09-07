<?php
/*
   Template Name: Dat
*/
?>
<?php get_header(); ?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Flow - Personal Blog HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon"
        href="<?php echo get_template_directory_uri(); ?>/assets/images/theme/favicon.png">
    <!-- Template CSS  -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/widgets.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
</head>

<div class="home-page-1">
    <div class="scroll-progress bg-grey-900"></div>
    <!-- Start Preloader -->
    <div class="preloader text-center">
        <div class="loader"></div>
    </div>
    <!--Offcanvas sidebar-->
    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">
        <button class="off-canvas-close"><img class="svg-icon-24"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/theme/svg/close.svg" alt=""></button>
        <div class="sidebar-inner">
            <div class="sidebar-widget widget-creative-menu">
                <ul>
                    <li><a href="category.html">Design<sup>235</sup></a></li>
                    <li><a href="category-big.html">Lifestyle<sup>186</sup></a></li>
                    <li><a href="category-grid.html">Travel Tips<sup>98</sup></a></li>
                    <li><a href="category-list.html">Healthy<sup>247</sup></a></li>
                </ul>
            </div>
            <div class="offcanvas-copyright mt-65">
                <h6 class="text-muted text-uppercase mb-20 font-heading text-white">Flow Magazine</h6>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Odio suspendisse leo neque.
                </p>
                <p><strong class="color-black">Address</strong><br>
                    123 Main Street<br>
                    New York, NY 10001</p>
                <p><strong class="color-black">Phone</strong><br>
                    (+01) 234 567 89</p>
            </div>
        </div>
    </aside>

    <div class="bg-square"></div>
    <!--Start search form-->
    <div class="main-search-form bg-brand-4">
        <div class="container">
            <div class=" pt-50 pb-50 ">
                <div class="row mb-20">
                    <div class="col-12 align-self-center main-search-form-cover m-auto">
                        <p class="text-center"><span class="display-1">Search</span></p>
                        <form action="#" class="search-header">
                            <div class="input-group w-100">
                                <input type="text" class="form-control"
                                    placeholder="Search articles, places and people">
                                <div class="input-group-append">
                                    <button class="btn btn-search bg-white" type="submit">
                                        <img class="svg-icon-24"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/theme/svg/search.svg"
                                            alt="">
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-80 text-center">
                    <div class="col-12 font-small suggested-area">
                        <h5 class="suggested font-heading mb-20 text-grey-400"> <strong>Suggested keywords:</strong>
                        </h5>
                        <ul class="list-inline d-inline-block">
                            <li class="list-inline-item"><a href="category.html">Health</a></li>
                            <li class="list-inline-item"><a href="category.html">Travel tips</a></li>
                            <li class="list-inline-item"><a href="category.html">Lifestyle</a></li>
                            <li class="list-inline-item"><a href="category.html">Technology</a></li>
                            <li class="list-inline-item"><a href="category.html">Food</a></li>
                            <li class="list-inline-item"><a href="category.html">Books</a></li>
                            <li class="list-inline-item"><a href="category.html">Drink</a></li>
                            <li class="list-inline-item"><a href="category.html">Fashion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Main content -->
    <main>
        <section class="featured-slider-1 pt-65 pb-65">
            <div class="position-relative">
                <div class="featured-slider-1-arrow color-white"></div>
                <div class="container">
                    <div class="hero-1 featured-slider-1-items mb-65">
                        <?php $args = array(
'post_type'=> 'post',
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'DESC',
'posts_per_page' => -1 // this will retrive all the post that is published 
);
$result = new WP_Query( $args );
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
                        <div class="slider-single">
                            <div class="row">
                                <div class="col-lg-6 align-self-center">
                                    <div class="post-meta-1 mb-20">
                                        <a href="category.html"
                                            class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3">Lifestyle</a>
                                        <span class="post-date text-muted font-md">September 15, 2021</span>
                                    </div>
                                    <h2 class="post-title mb-30">
                                        <a href="single.html">
                                            30 Best Lifestyle Blogs to Follow in 2021
                                        </a>
                                    </h2>
                                    <div class="post-excerpt text-grey-400 mb-30">
                                        Tempus ultricies augue luctus et ut suscipit. Morbi arcu, ultrices purus dolor
                                        erat bibendum sapien metus. Sit mi, pharetra, morbi arcu id. Pellentesque
                                        dapibus nibh augue senectus.
                                    </div>
                                    <div class="post-meta-2 font-md d-flext align-self-center mb-md-30">
                                        <a href="page-author.html">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/authors/author.jpg"
                                                alt="">
                                            <span class="author-namge">Kate Adie</span>
                                        </a>
                                        <span class="time-to-read has-dot">6 mins to read</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img class="border-radius-10"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/news/thumb-10.jpg"
                                        alt="flow">
                                </div>
                            </div>
                        </div>
                        <?php the_title( '<h2>', '</h2>' );
        the_post_thumbnail();
        the_excerpt();
    endwhile;
endif; wp_reset_postdata(); ?>
                        <div class="slider-single">
                            <div class="row">
                                <div class="col-lg-6 align-self-center">
                                    <div class="post-meta-1 mb-20">
                                        <a href="category.html"
                                            class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3">Lifestyle</a>
                                        <span class="post-date text-muted font-md">September 15, 2021</span>
                                    </div>
                                    <h2 class="post-title mb-30">
                                        <a href="single.html">
                                            30 Best Lifestyle Blogs to Follow in 2021
                                        </a>
                                    </h2>
                                    <div class="post-excerpt text-grey-400 mb-30">
                                        Tempus ultricies augue luctus et ut suscipit. Morbi arcu, ultrices purus dolor
                                        erat bibendum sapien metus. Sit mi, pharetra, morbi arcu id. Pellentesque
                                        dapibus nibh augue senectus.
                                    </div>
                                    <div class="post-meta-2 font-md d-flext align-self-center mb-md-30">
                                        <a href="page-author.html">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/authors/author.jpg"
                                                alt="">
                                            <span class="author-namge">Kate Adie</span>
                                        </a>
                                        <span class="time-to-read has-dot">6 mins to read</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img class="border-radius-10"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/news/thumb-10.jpg"
                                        alt="flow">
                                </div>
                            </div>
                        </div>
                        <div class="slider-single">
                            <div class="row">
                                <div class="col-lg-6 align-self-center">
                                    <div class="post-meta-1 mb-20">
                                        <a href="category.html"
                                            class="tag-category bg-primary shadown-1 text-dark button-shadow hover-up-3">Design</a>
                                        <span class="post-date text-muted font-md">September 22, 2021</span>
                                    </div>
                                    <h2 class="post-title mb-30">
                                        <a href="single.html">
                                            9 Things I Love About Shaving My Head During Quarantine
                                        </a>
                                    </h2>
                                    <div class="post-excerpt text-grey-400 mb-30">
                                        Sit nemore imperdiet elaboraret eu, commune inciderint mei no. Ex usu ignota
                                        eripuit oportere. Vis at choro oratio, vitae quodsi ei sit. Mei ne habeo legimus
                                        qualisque.
                                    </div>
                                    <div class="post-meta-2 font-md d-flext align-self-center mb-md-30">
                                        <a href="page-author.html">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/authors/author-3.jpg"
                                                alt="">
                                            <span class="author-namge">Angela</span>
                                        </a>
                                        <span class="time-to-read has-dot">9 mins to read</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img class="border-radius-10"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/news/thumb-11.jpg"
                                        alt="flow">
                                </div>
                            </div>
                        </div>
                        <div class="slider-single">
                            <div class="row">
                                <div class="col-lg-6 align-self-center">
                                    <div class="post-meta-1 mb-20">
                                        <a href="category.html"
                                            class="tag-category bg-danger shadown-1 text-dark button-shadow hover-up-3">Audition</a>
                                        <span class="post-date text-muted font-md">September 25, 2021</span>
                                    </div>
                                    <h2 class="post-title mb-30">
                                        <a href="single.html">
                                            Essential Qualities of Highly Successful Music in this year
                                        </a>
                                    </h2>
                                    <div class="post-excerpt text-grey-400 mb-30">
                                        Maluisset patrioque his no, pro ex tempor vivendo deleniti. Reque dignissim his
                                        in, vix te summo maluisset assueverit, et vidisse luptatum accusata eos. Ad vix
                                        diam accumsan.
                                    </div>
                                    <div class="post-meta-2 font-md d-flext align-self-center mb-md-30">
                                        <a href="page-author.html">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/authors/author-4.jpg"
                                                alt="">
                                            <span class="author-namge">Sophie</span>
                                        </a>
                                        <span class="time-to-read has-dot">7 mins to read</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img class="border-radius-10"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/news/thumb-12.jpg"
                                        alt="flow">
                                </div>
                            </div>
                        </div>
                        <div class="slider-single">
                            <div class="row">
                                <div class="col-lg-6 align-self-center">
                                    <div class="post-meta-1 mb-20">
                                        <a href="category.html"
                                            class="tag-category bg-success shadown-1 text-dark button-shadow hover-up-3">Healthy</a>
                                        <span class="post-date text-muted font-md">August 12, 2021</span>
                                    </div>
                                    <h2 class="post-title mb-30">
                                        <a href="single.html">
                                            Why We Need to Stop Talking About Food and Guilt
                                        </a>
                                    </h2>
                                    <div class="post-excerpt text-grey-400 mb-30">
                                        Quo ex aeterno luptatum mnesarchum, an duis veri harum eam, mel ex diceret
                                        dolorum. Sed no causae dissentias, quo cu ridens gubergren voluptatibus.
                                    </div>
                                    <div class="post-meta-2 font-md d-flext align-self-center mb-md-30">
                                        <a href="page-author.html">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/authors/author-2.jpg"
                                                alt="">
                                            <span class="author-namge">John Lennon</span>
                                        </a>
                                        <span class="time-to-read has-dot">16 mins to read</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img class="border-radius-10"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/news/thumb-13.jpg"
                                        alt="flow">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="featured-slider-1-nav row">
                    <div class="col d-flex transition-normal latest-small-thumb">
                        <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                            <a class="color-white" href="single.html">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/thumb-10.jpg"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-content media-body align-self-center">
                            <h5 class="post-title mb-15 text-limit-2-row font-medium">
                                <a href="single.html">
                                    30 Best Lifestyle Blogs to Follow in 2021
                                </a>
                            </h5>
                            <div class="entry-meta meta-1 float-left font-sm">
                                <span class="post-on">Sep 15, 2021</span>
                                <span class="post-by has-dot">13k views</span>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex transition-normal latest-small-thumb">
                        <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                            <a class="color-white" href="single.html">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/thumb-11.jpg"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-content media-body align-self-center">
                            <h5 class="post-title mb-15 text-limit-2-row font-medium">
                                <a href="single.html">9 Things I Love About Shaving My Head During Quarantine</a>
                            </h5>
                            <div class="entry-meta meta-1 float-left font-sm">
                                <span class="post-on">Sep 15, 2021</span>
                                <span class="post-by has-dot">13k views</span>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex transition-normal latest-small-thumb">
                        <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                            <a class="color-white" href="single.html">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/thumb-12.jpg"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-content media-body align-self-center">
                            <h5 class="post-title mb-15 text-limit-2-row font-medium">
                                <a href="single.html">Essential Qualities of Highly Successful Music in this year and
                                    over</a>
                            </h5>
                            <div class="entry-meta meta-1 float-left font-sm">
                                <span class="post-on">Sep 15, 2021</span>
                                <span class="post-by has-dot">13k views</span>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex transition-normal latest-small-thumb">
                        <div class="post-thumb d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                            <a class="color-white" href="single.html">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/thumb-13.jpg"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-content media-body align-self-center">
                            <h5 class="post-title mb-15 text-limit-2-row font-medium">
                                <a href="single.html">Why We Need to Stop Talking About Food and Guilt</a>
                            </h5>
                            <div class="entry-meta meta-1 float-left font-sm">
                                <span class="post-on">Sep 15, 2021</span>
                                <span class="post-by has-dot">13k views</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End: featured-1 -->
        <section class="trending pt-65 pb-65 position-relative">
            <div class="bg-square-2"></div>
            <div class="container">
                <h3 class="mb-65 font-heading wow fadeIn animated">Trending Topics</h3>
                <div class="row">
                    <article class="col-lg-4 col-md-6 mb-40 wow fadeIn animated">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/news/news-1.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="category.html"
                                        class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3">Lifestyle</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">27 August</span>
                                    </div>
                                    <h5 class="post-title font-md">
                                        <a href="single.html">After a Few Dates, They Traveled to the Other Side of the
                                            World</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 mb-40 wow fadeIn animated">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/news/news-2.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="category.html"
                                        class="tag-category bg-primary shadown-1 text-dark button-shadow hover-up-3">Healthy</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">28 August</span>
                                    </div>
                                    <h5 class="post-title font-md">
                                        <a href="single.html">Jessamyn Stanley's 5-Minute Yoga for Beginners</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 mb-40 wow fadeIn animated">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/news/news-3.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="category.html"
                                        class="tag-category bg-warning shadown-1 text-dark button-shadow hover-up-3">Food</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">02 September</span>
                                    </div>
                                    <h5 class="post-title font-md">
                                        <a href="single.html">How an MS Diagnosis Changed My Relationship With Food </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 mb-40 wow fadeIn animated">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/news/news-4.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="category.html"
                                        class="tag-category bg-success shadown-1 text-dark button-shadow hover-up-3">Travel
                                        Tips</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">05 September</span>
                                    </div>
                                    <h5 class="post-title font-md">
                                        <a href="single.html">Where to Score the Best Travel Deals on Cyber Monday </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 mb-40 wow fadeIn animated">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/news/news-5.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="category.html"
                                        class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3">Lifestyle</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">12 September</span>
                                    </div>
                                    <h5 class="post-title font-md">
                                        <a href="single.html">5 Kinds of Food-Shamers You Will Encounter (and How to
                                            Deal) </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 mb-40 wow fadeIn animated">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/news/news-6.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="category.html"
                                        class="tag-category bg-danger shadown-1 text-dark button-shadow hover-up-3">Book</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">18 September</span>
                                    </div>
                                    <h5 class="post-title font-md">
                                        <a href="single.html">12 Best Books to Read at the Beach This Summer </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="pb-65">
            <div class="container">
                <h3 class="mb-65 font-heading wow fadeIn animated">Editor's picked</h3>
                <div class="position-relative wow fadeIn animated">
                    <div class="slide-fade slide-fade-inner bg-brand-4 border-radius-10 p-65 p-sm-25">
                        <div class="slide-fade-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="post-meta-1 mb-20 mt-50">
                                        <a href="category.html"
                                            class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3">Lifestyle</a>
                                        <span class="post-date text-muted font-md">September 15, 2021</span>
                                    </div>
                                    <h2 class="post-title mb-30 fw-700">
                                        <a href="single.html">
                                            The 28 Best Skincare Products of 2021
                                        </a>
                                    </h2>
                                    <div class="post-excerpt text-grey-400 mb-30">
                                        Tempus ultricies augue luctus et ut suscipit. Morbi arcu, ultrices purus dolor
                                        erat bibendum sapien metus. Sit mi, pharetra, morbi arcu id. Pellentesque
                                        dapibus nibh augue senectus. Ad pri docendi aliquando, per an minim novum
                                        fuisset, eam doctus accumsan ad. Id veritus tibique per
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <figure class="position-relative">
                                        <img class="border-radius-10 post-thumb"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news-17.jpg"
                                            alt="flow">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="slide-fade-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="post-meta-1 mb-20 mt-50">
                                        <a href="category.html"
                                            class="tag-category bg-warning shadown-1 text-dark button-shadow hover-up-3">Beauty</a>
                                        <span class="post-date text-muted font-md">September 15, 2021</span>
                                    </div>
                                    <h2 class="post-title mb-30 fw-700">
                                        <a href="single.html">
                                            Rice Water for Hair Growth: Does It Actually Work?
                                        </a>
                                    </h2>
                                    <div class="post-excerpt text-grey-400 mb-30">
                                        Qualisque persecuti eu vis. Et his eruditi fastidii gloriatur. In nec aliquam
                                        lobortis definitionem, aeterno qualisque appellantur ea sea
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <figure class="position-relative">
                                        <img class="border-radius-10 post-thumb"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news-18.jpg"
                                            alt="flow">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="slide-fade-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="post-meta-1 mb-20 mt-50">
                                        <a href="category.html"
                                            class="tag-category bg-primary shadown-1 text-dark button-shadow hover-up-3">Music</a>
                                        <span class="post-date text-muted font-md">September 15, 2021</span>
                                    </div>
                                    <h2 class="post-title mb-30 fw-700">
                                        <a href="single.html">
                                            5 Science-Backed Reasons Why Music is Good for You
                                        </a>
                                    </h2>
                                    <div class="post-excerpt text-grey-400 mb-30">
                                        An vis natum detracto nominati, ei mundi animal definitionem his, saepe indoctum
                                        pericula an sea. Vix ut admodum nostrum fastidii.
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <figure class="position-relative">
                                        <img class="border-radius-10 post-thumb"
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news-19.jpg"
                                            alt="flow">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-fade-arrow-cover"></div>
                </div>
            </div>
        </section>
        <section class="recent-posts">
            <div class="container">
                <div class="header-title mb-65">
                    <h3 class="font-heading mb-0 wow fadeIn animated">Recent Articles</h3>
                    <span class="sub-header-title text-grey-400 wow fadeIn animated">Don't miss new trend</span>
                </div>
                <div class="row">
                    <article class="col-lg-6 col-md-6 mb-30 wow fadeIn animated">
                        <div class="post-card-1 large border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/news/news-8.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="category.html"
                                        class="tag-category bg-info shadown-1 text-dark button-shadow hover-up-3">Travel</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">27 August</span>
                                    </div>
                                    <h4 class="post-title mb-30">
                                        <a href="single.html">After a Few Dates, They Traveled to the Other Side of the
                                            World</a>
                                    </h4>
                                    <div class="post-meta-2 font-md">
                                        <a href="page-author.html">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/authors/author.jpg"
                                                alt="">
                                            <span class="author-namge">Kate Adie</span>
                                        </a>
                                        <span class="time-to-read has-dot">6 mins to read</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-6 col-md-6 mb-30 wow fadeIn animated">
                        <div class="post-card-1 large border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/news/news-5.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="category.html"
                                        class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3">Food</a>
                                </div>
                                <span class="top-right-icon bg-white"><i
                                        class="elegant-icon icon_ribbon_alt "></i></span>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">18 August</span>
                                    </div>
                                    <h4 class="post-title mb-30">
                                        <a href="single.html">5 Kinds of Food-Shamers You Will Encounter (and How to
                                            Deal) </a>
                                    </h4>
                                    <div class="post-meta-2 font-md">
                                        <a href="page-author.html">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/authors/author-2.jpg"
                                                alt="">
                                            <span class="author-namge">John Lennon</span>
                                        </a>
                                        <span class="time-to-read has-dot">16 mins to read</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-6 col-md-6 mb-0 wow fadeIn animated">
                        <div class="post-card-1 large border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/news/news-6.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="category.html"
                                        class="tag-category bg-dark  shadown-1 text-white button-shadow hover-up-3">Magazine</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">05 September</span>
                                    </div>
                                    <h4 class="post-title mb-30">
                                        <a href="single.html">Runner with Autism Graces the Latest Cover of Women's
                                            Running </a>
                                    </h4>
                                    <div class="post-meta-2 font-md">
                                        <a href="page-author.html">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/authors/author-3.jpg"
                                                alt="">
                                            <span class="author-namge">Sarah Harding</span>
                                        </a>
                                        <span class="time-to-read has-dot">12 mins to read</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-6 col-md-6 mb-0 wow fadeIn animated">
                        <div class="post-card-1 large border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/news/news-7.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <div class="post-meta-1 mb-20">
                                    <a href="category.html"
                                        class="tag-category bg-danger shadown-1 text-dark button-shadow hover-up-3">Food</a>
                                </div>
                            </div>
                            <div class="post-content p-30">
                                <div class="post-card-content">
                                    <div class="entry-meta meta-1 float-left font-md mb-10">
                                        <span class="post-on has-dot">06 September</span>
                                    </div>
                                    <h4 class="post-title mb-30">
                                        <a href="single.html">10 Snacks a Food Writer Packs for Day Hikes and Car
                                            Trips</a>
                                    </h4>
                                    <div class="post-meta-2 font-md">
                                        <a href="page-author.html">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/authors/author-4.jpg"
                                                alt="">
                                            <span class="author-namge">Nadine Coyle</span>
                                        </a>
                                        <span class="time-to-read has-dot">14 mins to read</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="instargram bg-brand-4">
            <div class="container">
                <div class="header-title-2 text-center mb-65">
                    <h4 class="mb-0 text-grey-400 wow fadeIn animated">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/theme/svg/instagram.svg"
                            alt="">
                        <span>Follow Us</span>
                    </h4>
                    <h3 class="font-heading wow fadeIn animated">on Instagram</h3>
                </div>
                <div class="position-relative wow fadeIn animated">
                    <div class="carausel-3-columns">
                        <div class="post-card-1 instagram-card border-radius-10 hover-up p-30">
                            <figure class="mb-30 img-hover-scale overflow-hidden border-radius-10">
                                <img class="border-radius-10"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news-12.jpg"
                                    alt="">
                            </figure>
                            <div class="post-meta-2 font-md d-flex">
                                <a class="align-self-center" href="page-author.html">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/authors/author.jpg"
                                        alt="">
                                </a>
                                <div class="mb-0">
                                    <a href="page-author.html"> <strong class="author-namge">Kate Adie</strong></a>
                                    <p class="post-on font-sm text-grey-400 mb-0">3 minutes ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="post-card-1 instagram-card border-radius-10 hover-up p-30">
                            <figure class="mb-30 img-hover-scale overflow-hidden border-radius-10">
                                <img class="border-radius-10"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news-13.jpg"
                                    alt="">
                            </figure>
                            <div class="post-meta-2 font-md d-flex">
                                <a class="align-self-center" href="page-author.html">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/authors/author.jpg"
                                        alt="">
                                </a>
                                <div class="mb-0">
                                    <a href="page-author.html"> <strong class="author-namge">Kate Adie</strong></a>
                                    <p class="post-on font-sm text-grey-400 mb-0">3 minutes ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="post-card-1 instagram-card border-radius-10 hover-up p-30">
                            <figure class="mb-30 img-hover-scale overflow-hidden border-radius-10">
                                <img class="border-radius-10"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news-14.jpg"
                                    alt="">
                            </figure>
                            <div class="post-meta-2 font-md d-flex">
                                <a class="align-self-center" href="page-author.html">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/authors/author.jpg"
                                        alt="">
                                </a>
                                <div class="mb-0">
                                    <a href="page-author.html"> <strong class="author-namge">Kate Adie</strong></a>
                                    <p class="post-on font-sm text-grey-400 mb-0">3 minutes ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="post-card-1 instagram-card border-radius-10 hover-up p-30">
                            <figure class="mb-30 img-hover-scale overflow-hidden border-radius-10">
                                <img class="border-radius-10"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news-11.jpg"
                                    alt="">
                            </figure>
                            <div class="post-meta-2 font-md d-flex">
                                <a class="align-self-center" href="page-author.html">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/authors/author.jpg"
                                        alt="">
                                </a>
                                <div class="mb-0">
                                    <a href="page-author.html"> <strong class="author-namge">Kate Adie</strong></a>
                                    <p class="post-on font-sm text-grey-400 mb-0">3 minutes ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carausel-3-columns-arrow-cover mt-30"></div>
                </div>
            </div>
        </section>
        <section class="newsletter bg-brand-3 pt-100 pb-100">
            <div class="container">
                <div class="position-relative">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="header-title-2 mb-65">
                                <h4 class="mb-0 text-grey-400 wow fadeIn animated">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/theme/svg/send.svg"
                                        alt="">
                                    <span>Subscribe</span>
                                </h4>
                                <h3 class="font-heading wow fadeIn animated">to Our Newsletter</h3>
                            </div>
                            <form class="form-subcriber mt-30 d-flex wow fadeIn animated">
                                <input type="email" class="form-control bg-white font-small"
                                    placeholder="Enter your email">
                                <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/theme/sketch-1.png" alt=""
                        class="sketch-1 wow fadeIn animated">
                </div>
            </div>
        </section>
    </main>
    <!-- End Main content -->
    <!--end site-bottom-->

    <div class="dark-mark"></div>
    <!-- Vendor JS-->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.slicknav.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/wow.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.scrollUp.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.theia.sticky.js"></script>
    <!-- Template  JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</div>

</html>

<?php get_footer(); ?>