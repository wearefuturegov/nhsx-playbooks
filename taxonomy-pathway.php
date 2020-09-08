<?php get_header();

$term = get_queried_object();

$children = get_terms(array(
    "taxonomy" => "pathway",
    "hide_empty" => false,
    "parent" => $term->term_id
));

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
                <h1 class="nhsuk-heading-xl nhsuk-u-margin-bottom-5"><?php echo single_cat_title( '', false ); ?></h1>
            </div>  
        </div>
        <div class="nhsuk-grid-row">
            <div class="nhsuk-grid-column-two-thirds">
                <article class="content-area">    
                    <p class="nhsuk-lede-text"><?php echo $term->description ?></p>
                    <ol class="step-by-step">
                        <?php foreach($children as $step): 
                        $sublist = new WP_Query(array(
                            "tax_query" => array(
                                array(
                                    "taxonomy" => "pathway",
                                    "terms" => $step->term_id
                                )
                            ),
                            "post_type" => "case_study",
                            "posts_per_page" => -1
                        ));
                        ?>
                            <li class="step-by-step__step">
                                <details>
                                    <summary>
                                        <h2><?php echo $step->name ?></h2>
                                    </summary>
                                    <p><?php echo $step->description ?></p>
                                    <ul class="step-by-step__content-list">
                                        <?php if($sublist->have_posts()): while($sublist->have_posts()): $sublist->the_post(); ?>
                                            <li>
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </li>
                                        <?php endwhile; endif; wp_reset_postdata(); ?>
                                    </ul>
                                </details>
                            </li>
                        <?php endforeach; ?>
                    </ol>
                </article>
            </div>  
        </div>
    </main>
</div>

<?php get_footer(); ?>