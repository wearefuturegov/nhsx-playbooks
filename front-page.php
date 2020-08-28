<?php get_header();

$scenarios = get_terms(array(
    "taxonomy" => "scenario",
    "hide_empty" => false,
    "number" => 6
));

$case_studies = new WP_Query(array(
    "post_type" => "case_study",
    "per_page" => 6
));
?>

<section class="nhsuk-hero nhsuk-u-margin-bottom-9 nhsuk-hero--image nhsuk-hero--image-description" style="background-image: url('<?php echo get_stylesheet_directory_uri() . "/assets/hero.jpg" ?>');">
    <div class="nhsuk-hero__overlay">
      <div class="nhsuk-width-container">
        <div class="nhsuk-grid-row">
          <div class="nhsuk-grid-column-two-thirds">
            <div class="nhsuk-hero-content nhsuk-hero-content--nhsx">
              <h1 class="nhsuk-u-margin-bottom-3 nhsuk-heading-xl">Cardiology digital playbook</h1>
              <p class="nhsuk-body-l nhsuk-u-margin-bottom-0">How to use digital ways of working to improve outcomes for patients.</p>
              <span class="nhsuk-hero__arrow" aria-hidden="true"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<main class="nhsuk-main-wrapper nhsuk-main-wrapper--homepage" id="maincontent">

    <div class="nhsuk-width-container">
        <div class="nhsuk-u-reading-width">
            <h2 class="nhsuk-heading-l">Scenarios</h2>
            <p class="nhsuk-lede-text">To help you explore our advice in context, we’ve put together some scenarios from talking to clinicians.</p>
        </div>
        <div class="nhsuk-grid-row nhsuk-promo-group">
            <?php $i = 1;
            foreach($scenarios as $scenario): ?>
                <div class="nhsuk-grid-column-one-half nhsuk-promo-group__item">
                    <div class="nhsuk-promo">
                        <a class="nhsuk-promo__link-wrapper" href="<?php echo get_term_link($scenario); ?>">
                            <div class="nhsuk-promo__content">
                                <h3 class="nhsuk-promo__heading"><?php echo $scenario->name; ?></h3>
                                <p class="nhsuk-promo__description"><?php echo $scenario->description; ?>
                            </div>
                        </a>
                    </div>
                </div>
                <?php if($i % 2 === 0 && $i < count($scenarios)): ?>
                    </div>
                    <div class="nhsuk-grid-row nhsuk-promo-group">
                <?php endif; ?>
            <?php $i++; 
            endforeach; ?>
        </div>
    </div>

    <section class="nhsuk-section--white nhsuk-u-margin-top-9">
        <div class="nhsuk-width-container">
            <div class="nhsuk-grid-row">
                <div class="nhsuk-grid-column-full nhsuk-section__content">
                    <div class="nhsuk-u-reading-width">
                        <h2 class="nhsuk-heading-l">The cardiology care pathway</h2>
                        <p class="nhsuk-section__description">Explore case studies at different steps along the cardiology care pathway.</p>
                    </div>
                    
                    <div class="nhsuk-action-link">
                        <a class="nhsuk-action-link__link" href="/pathway/cardiology/">
                            <svg class="nhsuk-icon nhsuk-icon__arrow-right-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 2a10 10 0 0 0-9.95 9h11.64L9.74 7.05a1 1 0 0 1 1.41-1.41l5.66 5.65a1 1 0 0 1 0 1.42l-5.66 5.65a1 1 0 0 1-1.41 0 1 1 0 0 1 0-1.41L13.69 13H2.05A10 10 0 1 0 12 2z"></path>
                            </svg>
                            <span class="nhsuk-action-link__text">See the pathway</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="nhsuk-width-container">
    
        <div class="nhsuk-u-reading-width nhsuk-u-margin-top-9">
            <h2 class="nhsuk-heading-l">Case studies</h2>
        </div>

        <div class="nhsuk-grid-row nhsuk-promo-group">
            <?php $i = 1;
            if($case_studies->have_posts()): while($case_studies->have_posts()): $case_studies->the_post(); ?>

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

                <?php if($i % 3 === 0 && $i < $case_studies->post_count): ?>
                    </div>
                    <div class="nhsuk-grid-row nhsuk-promo-group">
                <?php endif; ?>

            <?php $i++; 
            endwhile; endif; ?>
        </div>

    </div>


    <section class="nhsuk-section--white nhsuk-u-margin-top-9">
        <div class="nhsuk-width-container">
            <div class="nhsuk-grid-row">
                <div class="nhsuk-grid-column-full nhsuk-section__content">
                    <div class="nhsuk-u-reading-width">
                        <h2 class="nhsuk-heading-l">Tell us how you're using these resources</h2>
                        <p class="nhsuk-section__description">We are keen to hear from everyone who is affected by the technology we use in health and care, from patients to technologists and innovators to carers to clinicians.</p>
                    </div>
                    
                    <div class="nhsuk-action-link">
                        <a class="nhsuk-action-link__link" href="#">
                            <svg class="nhsuk-icon nhsuk-icon__arrow-right-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 2a10 10 0 0 0-9.95 9h11.64L9.74 7.05a1 1 0 0 1 1.41-1.41l5.66 5.65a1 1 0 0 1 0 1.42l-5.66 5.65a1 1 0 0 1-1.41 0 1 1 0 0 1 0-1.41L13.69 13H2.05A10 10 0 1 0 12 2z"></path>
                            </svg>
                            <span class="nhsuk-action-link__text">Give feedback</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>