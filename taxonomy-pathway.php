<?php get_header();

$term = get_queried_object();

$children = get_terms(array(
    "taxonomy" => "pathway",
    "hide_empty" => false,
    "number" => 6,
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
                        <?php foreach($children as $step): ?>
                            <li>
                                <h2><?php echo $step->name ?></h2>
                            </li>
                        <?php endforeach; ?>
                    </ol>

                </article>
            </div>  
        </div>
    </main>
</div>

<?php get_footer(); ?>