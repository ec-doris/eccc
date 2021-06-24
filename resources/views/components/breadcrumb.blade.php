@props(['title'])

<nav class="ecl-breadcrumb-standardised" aria-label="You are here:" data-ecl-breadcrumb-standardised="true">
    <ol class="ecl-breadcrumb-standardised__container">
        <li class="ecl-breadcrumb-standardised__segment" data-ecl-breadcrumb-standardised-item="static"
            aria-hidden="false">
            <a href="/" class="ecl-breadcrumb-standardised__link ecl-link ecl-link--standalone">Home</a>
            <svg
                focusable="false" aria-hidden="true" role="presentation"
                class="ecl-breadcrumb-standardised__icon ecl-icon ecl-icon--2xs ecl-icon--rotate-90">
                <use xlink:href="media/icons.svg#ui--corner-arrow"></use>
            </svg>
        </li>
        <li class="ecl-breadcrumb-standardised__segment ecl-breadcrumb-standardised__current-page" aria-current="page"
            data-ecl-breadcrumb-standardised-item="static" aria-hidden="false">{{$title}}</li>
    </ol>
</nav>
