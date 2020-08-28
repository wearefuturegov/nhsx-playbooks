<?php get_header(); 

$term = get_queried_object();
?>

<nav class="nhsuk-breadcrumb" aria-label="Breadcrumb">
    <div class="nhsuk-width-container">
        <ol class="nhsuk-breadcrumb__list">
            <li class="nhsuk-breadcrumb__item">
                <a class="nhsuk-breadcrumb__link" href="https://nhsx.nhs.uk">Home</a>
            </li>
            <li class="nhsuk-breadcrumb__item">
                <a class="nhsuk-breadcrumb__link" href="/">Cardiology</a>
            </li>
            <li class="nhsuk-breadcrumb__item">
                <?php echo single_cat_title( '', false ); ?>
            </li>
        </ol>
        <p class="nhsuk-breadcrumb__back"><a class="nhsuk-breadcrumb__backlink" href="/">Back to Cardiology</a></p>
    </div>
</nav>

<div class="nhsuk-width-container">
    <main class="nhsuk-main-wrapper " id="maincontent" role="main">
        <div class="nhsuk-grid-row">
            <div class="nhsuk-grid-column-two-thirds">
                <p class="nhsuk-caption-l">Scenario</p>
                <h1 class="nhsuk-heading-xl nhsuk-u-margin-bottom-5"><?php echo single_cat_title( '', false ); ?></h1>
                <div class="content-area">
                    <?php the_field("long_description", $term); ?>
                </div>
            </div>  
        </div>

    
        <h2 class="nhsuk-heading-l nhsuk-u-margin-top-9">Relevant case studies</h2>
        <div class="nhsuk-grid-row nhsuk-promo-group">
            <?php $i = 1;
            if(have_posts()): while(have_posts()): the_post(); ?>

                <div class="nhsuk-grid-column-one-third nhsuk-promo-group__item">
                    <div class="nhsuk-promo">
                        <a class="nhsuk-promo__link-wrapper" href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail("medium", array("class" => "nhsuk-promo__img")); ?>
                            <div class="nhsuk-promo__content">
                                <h2 class="nhsuk-promo__heading"><?php the_title(); ?></h2>
                                <p class="nhsuk-promo__description"><?php echo get_the_excerpt(); ?></p>
                            </div>
                        </a>
                    </div>
                </div>

                <?php if($i % 3 === 0 && $i < $wp_query->found_posts): ?>
                    </div>
                    <div class="nhsuk-grid-row nhsuk-promo-group">
                <?php endif; ?>

            <?php $i++; 
            endwhile; endif; ?>
        </div>

    </main>
</div>

<?php get_footer(); ?>