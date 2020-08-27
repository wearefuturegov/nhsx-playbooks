<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<nav class="nhsuk-breadcrumb" aria-label="Breadcrumb">
    <div class="nhsuk-width-container">
        <ol class="nhsuk-breadcrumb__list">
            <li class="nhsuk-breadcrumb__item">
                <a class="nhsuk-breadcrumb__link" href="https://nhsx.nhs.uk">Home</a>
            </li>
            <li class="nhsuk-breadcrumb__item">
                <a class="nhsuk-breadcrumb__link" href="/">Cardiology</a>
            </li>
        </ol>
        <p class="nhsuk-breadcrumb__back"><a class="nhsuk-breadcrumb__backlink" href="/">Back to Cardiology</a></p>
    </div>
</nav>

<div class="nhsuk-width-container">
    <main class="nhsuk-main-wrapper " id="maincontent" role="main">
        <div class="nhsuk-grid-row">
            <div class="nhsuk-grid-column-two-thirds">

                <h1 class="nhsuk-heading-xl nhsuk-u-margin-bottom-5"><?php the_title(); ?></h1>

            </div>  
        </div>
        <div class="nhsuk-grid-row">
            <div class="nhsuk-grid-column-two-thirds">
                <article class="content-area">    
                    <?php the_content(); ?>
                </article>

                <div class="nhsuk-review-date">
                    <p class="nhsuk-body-s">
                        Page last reviewed: <?php the_date(); ?>
                    </p>
                </div>

            </div>  

            <div class="nhsuk-grid-column-one-third">
                <nav class="nhsuk-contents-list" role="navigation" aria-label="Pages in this section">
                <h2 class="nhsuk-heading-m">Related pages</h2>
                <ol class="nhsuk-contents-list__list"> 
                    <li class="nhsuk-contents-list__item">
                        <a class="nhsuk-contents-list__link" href="#">X</a>
                    </li>
                </ol>
                </nav>
            </div>


        </div>
    </main>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>