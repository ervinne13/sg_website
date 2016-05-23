<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.inspinia_head')
    </head>
    <body id="page-top" class="landing-page">
        @include('landing.header_nav')
        @include('landing.carousel')
        @include('landing.features_1')
        @include('landing.team')
        @include('landing.features_2')
        @include('landing.workflow')
        @include('landing.testimonials')        
        @include('landing.features_3')
        @include('landing.pricing')
        @include('landing.contact')

        @include('partials.inspinia_js')

        <script src="js/pages/landing/index.js"></script>

    </body>
</html>
