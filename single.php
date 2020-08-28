<?php get_header();

global $post;

$scenario_ids = array();
$terms = get_the_terms($post, "scenario");
if($terms) foreach($terms as $term) $scenario_ids[] = $term->term_id;

$pathway_ids = array();
$terms = get_the_terms($post, "pathway");
if($terms) foreach($terms as $term) $pathway_ids[] = $term->term_id;

$related_posts = new WP_Query(array(
    "post__not_in" => array(get_the_ID()),
    "posts_per_page" => 5,
    "tax_query" => array(
        "relation" => "OR",
        array(
            "taxonomy" => "scenario",
            "terms" => $scenario_ids
        ),
        array(
            "taxonomy" => "pathway",
            "terms" => $pathway_ids
        )
    )
));


if(have_posts()): while(have_posts()): the_post(); ?>


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
                    <?php the_title(); ?>
                </li>
            </ol>
            <p class="nhsuk-breadcrumb__back"><a class="nhsuk-breadcrumb__backlink" href="/">Back to Cardiology</a></p>
        </div>
    </nav>

    <div class="nhsuk-width-container">
        <main class="nhsuk-main-wrapper " id="maincontent" role="main">
            <div class="nhsuk-grid-row">
                <div class="nhsuk-grid-column-two-thirds">
                    <?php if(get_post_type() === "case_study"): ?>
                        <p class="nhsuk-caption-l">Case study</p>
                    <?php endif; ?>
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
                            Page last reviewed: <?php echo get_the_modified_date(); ?>
                        </p>
                    </div>

                </div>  

                <div class="nhsuk-grid-column-one-third">
                    <nav class="nhsuk-contents-list" role="navigation" aria-label="Pages in this section">
                    <h2 class="nhsuk-heading-m">Related pages</h2>
                    <ol class="nhsuk-contents-list__list"> 
                        <?php if($related_posts->have_posts()): while($related_posts->have_posts()): $related_posts->the_post(); ?>
                        <li class="nhsuk-contents-list__item">
                            <a class="nhsuk-contents-list__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                        <?php endwhile; endif; ?>
                    </ol>
                    </nav>
                </div>


            </div>
        </main>
    </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>