<?php get_header(); 

global $paged;
$max_page = $wp_query->max_num_pages;
$results = $wp_query->found_posts;
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
                Posts
            </li>
        </ol>
        <p class="nhsuk-breadcrumb__back"><a class="nhsuk-breadcrumb__backlink" href="/">Back to Cardiology</a></p>
    </div>
</nav>

<section class="nhsx-section nhsx-section--white">
    <div class="nhsuk-width-container">
        <main class="nhsuk-main-wrapper" id="maincontent">

            <div class="nhsuk-grid-row">

                <?php if(have_posts()): while(have_posts()): the_post(); ?>

                    <div class="nhsuk-grid-column-two-thirds nhsuk-u-margin-bottom-5 ">
                        <h3 class="nhsuk-heading-m">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <div class="entry-meta__posts">
                            <time class="time"><?php the_date(); ?></time>
                        </div>
                        <p class="summary__posts"><?php the_excerpt(); ?></p>
                        <p>
                            <a href="<?php the_permalink(); ?>">Read More</a>
                        </p>
                    </div>

                <?php endwhile; endif; ?>

            </div>
        </main>

        <nav class="nhsuk-pagination" role="navigation" aria-label="Pagination">
            <ul class="nhsuk-list nhsuk-pagination__list">
                <?php if($paged > 1): ?>
                    <li class="nhsuk-pagination-item--previous">
                        <a class="nhsuk-pagination__link nhsuk-pagination__link--prev" href="<?php echo previous_posts(); ?>">
                            <span class="nhsuk-pagination__title">Previous</span>
                            <span class="nhsuk-u-visually-hidden">:</span>
                            <span class="nhsuk-pagination__page"></span>
                            <svg class="nhsuk-icon nhsuk-icon__arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M4.1 12.3l2.7 3c.2.2.5.2.7 0 .1-.1.1-.2.1-.3v-2h11c.6 0 1-.4 1-1s-.4-1-1-1h-11V9c0-.2-.1-.4-.3-.5h-.2c-.1 0-.3.1-.4.2l-2.7 3c0 .2 0 .4.1.6z"></path>
                            </svg>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if(($paged + 1) < $max_page): ?>            
                    <li class="nhsuk-pagination-item--next">
                        <a class="nhsuk-pagination__link nhsuk-pagination__link--next" href="<?php echo next_posts(); ?>">
                            <span class="nhsuk-pagination__title">Next</span>
                            <span class="nhsuk-u-visually-hidden">:</span>
                            <span class="nhsuk-pagination__page"></span>
                            <svg class="nhsuk-icon nhsuk-icon__arrow-right" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M19.6 11.66l-2.73-3A.51.51 0 0 0 16 9v2H5a1 1 0 0 0 0 2h11v2a.5.5 0 0 0 .32.46.39.39 0 0 0 .18 0 .52.52 0 0 0 .37-.16l2.73-3a.5.5 0 0 0 0-.64z">
                                </path>
                            </svg>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>

    </div>
</section>

<?php get_footer(); ?>