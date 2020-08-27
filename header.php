<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php wp_title("|", true, "right"); ?>
        <?php echo get_bloginfo("name"); ?>
        <?php if(get_bloginfo("description")): ?>
            | <?php echo get_bloginfo("description"); ?>
        <?php endif; ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

    <script>
    document.body.className = ((document.body.className) ? document.body.className + ' js-enabled' : 'js-enabled');
    </script>

    <a class="nhsuk-skip-link" href="#maincontent">Skip to main content</a>

    <header class="nhsuk-header nhsuk-header--nhsx" role="banner">
        <div class="nhsuk-width-container nhsuk-header__container">
            <div class="nhsuk-header__logo">
                <a class="nhsuk-header__link" href="https://nhsx.nhs.uk" aria-label="NHS homepage">
                    <svg class="nhsuk-logo nhsuk-logo--nhsx" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 753.3 250">
                        <path class="st0" d="M0 0h753.3v250H0z" fill="#003087"></path>
                        <path class="st0"
                            d="M138.8 225.4L96.7 86.1h-.6l-28 139.3H17.4l43-201.2h67.2l41.2 139.5h.6l28.3-139.5h50.7l-42.7 201.2h-66.9zm205.2 0l17.9-86.2h-63.7l-17.9 86.2h-53.9l41.8-201.2h53.9l-15.8 77H370l15.9-77h53.9L398 225.4h-54zM581.6 69.7c-10.4-4.9-24.5-9.2-44.4-9.2-21.4 0-38.6 3.2-38.6 19.3 0 28.5 78.1 17.9 78.1 79 0 55.7-51.6 70.1-98.3 70.1-20.8 0-44.7-4.9-62.3-10.4l12.7-41c10.7 6.9 32 11.5 49.6 11.5 16.7 0 43-3.2 43-23.9 0-32.3-78.1-20.2-78.1-77 0-51.9 45.6-67.5 89.7-67.5 24.8 0 48.2 2.6 61.7 8.9l-13.1 40.2z"
                            fill="#003087"></path>
                        <path
                            d="M0 0v250h617.7V0H0zm138.8 225.4L96.7 86.1h-.6l-28 139.3H17.4l43-201.2h67.2l41.2 139.5h.6l28.3-139.5h50.7l-42.7 201.2h-66.9zm205.2 0l17.9-86.2h-63.7l-17.9 86.2h-53.9l41.8-201.2h53.9l-15.8 77H370l15.9-77h53.9L398 225.4h-54zM581.6 69.7c-10.4-4.9-24.5-9.2-44.4-9.2-21.4 0-38.6 3.2-38.6 19.3 0 28.5 78.1 17.9 78.1 79 0 55.7-51.6 70.1-98.3 70.1-20.8 0-44.7-4.9-62.3-10.4l12.7-41c10.7 6.9 32 11.5 49.6 11.5 16.7 0 43-3.2 43-23.9 0-32.3-78.1-20.2-78.1-77 0-51.9 45.6-67.5 89.7-67.5 24.8 0 48.2 2.6 61.7 8.9l-13.1 40.2zM687 24.2l14.6 34.6h.3l27.7-34.6h23.8l-41.7 48 23.3 52.6h-22.1l-15.4-40.4h-.3l-31.4 40.4h-25.1l46.6-54.6-22.1-46H687z"
                            fill="#fff"></path>
                    </svg>

                </a>
            </div>



            <div class="nhsuk-header__content" id="content-header">

                <div class="nhsuk-header__menu">
                    <button class="nhsuk-header__menu-toggle" id="toggle-menu" aria-controls="header-navigation" aria-label="Open menu">Menu</button>
                </div>

                <div class="nhsuk-header__search">
                    <button class="nhsuk-header__search-toggle" id="toggle-search" aria-controls="search"
                        aria-label="Open search">
                        <svg class="nhsuk-icon nhsuk-icon__search" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path
                                d="M19.71 18.29l-4.11-4.1a7 7 0 1 0-1.41 1.41l4.1 4.11a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zM5 10a5 5 0 1 1 5 5 5 5 0 0 1-5-5z">
                            </path>
                        </svg>
                        <span class="nhsuk-u-visually-hidden">Search</span>
                    </button>
                    <div class="nhsuk-header__search-wrap" id="wrap-search">
                        <form class="nhsuk-header__search-form" id="search" action="https://www.nhsx.nhs.uk/search" method="get" role="search">
                            <label class="nhsuk-u-visually-hidden" for="search-field">Search the NHSX website</label>
                            <input class="nhsuk-search__input" id="search-field" name="query" type="search" placeholder="Search" autocomplete="off">
                            <button class="nhsuk-search__submit" type="submit">
                                <svg class="nhsuk-icon nhsuk-icon__search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                    <path
                                        d="M19.71 18.29l-4.11-4.1a7 7 0 1 0-1.41 1.41l4.1 4.11a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zM5 10a5 5 0 1 1 5 5 5 5 0 0 1-5-5z">
                                    </path>
                                </svg>
                                <span class="nhsuk-u-visually-hidden">Search</span>
                            </button>
                            <button class="nhsuk-search__close" id="close-search">
                                <svg class="nhsuk-icon nhsuk-icon__close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                    <path d="M13.41 12l5.3-5.29a1 1 0 1 0-1.42-1.42L12 10.59l-5.29-5.3a1 1 0 0 0-1.42 1.42l5.3 5.29-5.3 5.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l5.29-5.3 5.29 5.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z">
                                    </path>
                                </svg>
                                <span class="nhsuk-u-visually-hidden">Close search</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <nav class="nhsuk-header__navigation nhsuk-header__navigation--nhsx" id="header-navigation" role="navigation"
            aria-label="Primary navigation" aria-labelledby="label-navigation">
            <p class="nhsuk-header__navigation-title"><span id="label-navigation">Menu</span>
                <button class="nhsuk-header__navigation-close" id="close-menu">
                    <svg class="nhsuk-icon nhsuk-icon__close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        aria-hidden="true" focusable="false">
                        <path
                            d="M13.41 12l5.3-5.29a1 1 0 1 0-1.42-1.42L12 10.59l-5.29-5.3a1 1 0 0 0-1.42 1.42l5.3 5.29-5.3 5.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l5.29-5.3 5.29 5.3a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42z">
                        </path>
                    </svg>
                    <span class="nhsuk-u-visually-hidden">Close menu</span>
                </button>
            </p>
            <ul class="nhsuk-header__navigation-list mobile-nav">
                <li class="nhsuk-header__navigation-item nhsuk-header__navigation-item--for-mobile">
                    <a class="nhsuk-header__navigation-link nhsuk-header__navigation-link--nhsx" href="/">
                        Home
                        <svg class="nhsuk-icon nhsuk-icon__chevron-right" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M15.5 12a1 1 0 0 1-.29.71l-5 5a1 1 0 0 1-1.42-1.42l4.3-4.29-4.3-4.29a1 1 0 0 1 1.42-1.42l5 5a1 1 0 0 1 .29.71z">
                            </path>
                        </svg>
                    </a>
                </li>

                <li class="nhsuk-header__navigation-item">
                    <a class="nhsuk-header__navigation-link nhsuk-header__navigation-link--nhsx" href="/about-us/">
                        About us
                        <svg class="nhsuk-icon nhsuk-icon__chevron-right" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M15.5 12a1 1 0 0 1-.29.71l-5 5a1 1 0 0 1-1.42-1.42l4.3-4.29-4.3-4.29a1 1 0 0 1 1.42-1.42l5 5a1 1 0 0 1 .29.71z">
                            </path>
                        </svg>
                    </a>
                </li>


                <li class="nhsuk-header__navigation-item">
                    <a class="nhsuk-header__navigation-link nhsuk-header__navigation-link--nhsx"
                        href="/key-tools-and-info/">
                        Key tools &amp; info
                        <svg class="nhsuk-icon nhsuk-icon__chevron-right" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M15.5 12a1 1 0 0 1-.29.71l-5 5a1 1 0 0 1-1.42-1.42l4.3-4.29-4.3-4.29a1 1 0 0 1 1.42-1.42l5 5a1 1 0 0 1 .29.71z">
                            </path>
                        </svg>
                    </a>
                </li>


                <li class="nhsuk-header__navigation-item">
                    <a class="nhsuk-header__navigation-link nhsuk-header__navigation-link--nhsx"
                        href="/covid-19-response/">
                        COVID-19 Response
                        <svg class="nhsuk-icon nhsuk-icon__chevron-right" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M15.5 12a1 1 0 0 1-.29.71l-5 5a1 1 0 0 1-1.42-1.42l4.3-4.29-4.3-4.29a1 1 0 0 1 1.42-1.42l5 5a1 1 0 0 1 .29.71z">
                            </path>
                        </svg>
                    </a>
                </li>


                <li class="nhsuk-header__navigation-item">
                    <a class="nhsuk-header__navigation-link nhsuk-header__navigation-link--nhsx" href="/news/">
                        News
                        <svg class="nhsuk-icon nhsuk-icon__chevron-right" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M15.5 12a1 1 0 0 1-.29.71l-5 5a1 1 0 0 1-1.42-1.42l4.3-4.29-4.3-4.29a1 1 0 0 1 1.42-1.42l5 5a1 1 0 0 1 .29.71z">
                            </path>
                        </svg>
                    </a>
                </li>


                <li class="nhsuk-header__navigation-item">
                    <a class="nhsuk-header__navigation-link nhsuk-header__navigation-link--nhsx" href="/blogs/">
                        Blogs
                        <svg class="nhsuk-icon nhsuk-icon__chevron-right" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M15.5 12a1 1 0 0 1-.29.71l-5 5a1 1 0 0 1-1.42-1.42l4.3-4.29-4.3-4.29a1 1 0 0 1 1.42-1.42l5 5a1 1 0 0 1 .29.71z">
                            </path>
                        </svg>
                    </a>
                </li>


                <li class="nhsuk-header__navigation-item">
                    <a class="nhsuk-header__navigation-link nhsuk-header__navigation-link--nhsx" href="/contact-us/">
                        Contact us
                        <svg class="nhsuk-icon nhsuk-icon__chevron-right" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M15.5 12a1 1 0 0 1-.29.71l-5 5a1 1 0 0 1-1.42-1.42l4.3-4.29-4.3-4.29a1 1 0 0 1 1.42-1.42l5 5a1 1 0 0 1 .29.71z">
                            </path>
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </header>