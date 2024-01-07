@extends('layouts.landing')

@section('isi_aku_mas')
    <div role="main" class="main">
        <section id="hero"
            class="parallax section-parallax section-center page-header page-header-modern page-header-background page-header-background-custom d-flex align-items-center"
            data-plugin-parallax
            data-plugin-options="{'speed': 1.5, 'parallaxHeight': '100%', 'parallaxDirection': 'top', 'height': '100vh', 'backgroundPositionX': '0px' }"
            data-image-src="{{ asset('img/intro-img.webp') }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="home-title">100% ORGANIC MULTI-NUTRIENT</h1>
                    </div>
                </div>
            </div>
        </section>

        <section id="discover-our-method" class="section-primary">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row text-center">
                            <div
                                class="col-sm-12 col-md-8 offset-md-2 py-5 px-4 d-flex flex-column justify-content-center align-items-center">
                                <h2 class="sub-title-discover-our-method">
                                    <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}"
                                        class="img-text" />
                                    is a 100% organic, single-ingredient nutritious sweet
                                    liquid consisting exclusively of evaporated phloem exudate
                                    from the immature and unopened inflorescences of the
                                    coconut trees
                                    <i>(Cocos nucifera L.)</i>, known generally as coconut
                                    sap.
                                </h2>
                                <a id="nutritional_properties_button" href="our-method.html"
                                    class="btn btn-primary mt-5 mb-5">
                                    Discover Our Method
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="we-care" class="section border-0 mb-0 appear-animation" data-appear-animation="fadeIn"
            data-plugin-options="{'accY': -150}">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row text-center">
                            <div class="col-md-10 mx-md-auto">
                                <div class="overflow-hidden mb-5">
                                    <h1 class="title-pos appear-animation" data-appear-animation="maskUp">
                                        WE CARE ABOUT WHAT WE PUT INTO OUR BODIES
                                    </h1>
                                </div>
                                <div class="container">
                                    <div class="row list-pos">
                                        <div class="col-sm-12 col-md-6 text-start ps-5 appear-animation"
                                            data-appear-animation="bounceInLeft" data-appear-animation-delay="0"
                                            data-appear-animation-duration="1s">
                                            <p>
                                                <i class="fas fa-check"></i> 100% organic
                                                (certified)
                                            </p>
                                            <p>
                                                <i class="fas fa-check"></i> straight from the
                                                nature
                                            </p>
                                            <p>
                                                <i class="fas fa-check"></i> single ingredient
                                                (certified)
                                            </p>
                                            <p>
                                                <i class="fas fa-check"></i> unique
                                                preservative-free sap collection (patented)
                                            </p>
                                            <p>
                                                <i class="fas fa-check"></i> unrefined, minimally
                                                processed to a higher viscosity to maintain sap’s
                                                original nutrients
                                            </p>
                                            <p>
                                                <i class="fas fa-check"></i> directly and
                                                exclusively made from sap (it is not a solution or
                                                mixture made with sugar and water)
                                            </p>
                                            <p>
                                                <i class="fas fa-check"></i> no additives,
                                                preservatives or added flavor (certified)
                                            </p>
                                        </div>
                                        <div class="col-sm-12 col-md-6 text-start ps-5 appear-animation"
                                            data-appear-animation="bounceInRight" data-appear-animation-delay="300"
                                            data-appear-animation-duration="1s">
                                            <p>
                                                <i class="fas fa-check"></i> sustainably sourced and
                                                organically farmed (certified)
                                            </p>
                                            <p><i class="fas fa-check"></i> vegan</p>
                                            <p><i class="fas fa-check"></i> halal (certified)</p>
                                            <p><i class="fas fa-check"></i> kosher (certified)</p>
                                            <p>
                                                <i class="fas fa-check"></i> GMO-free (verified)
                                            </p>
                                            <p>
                                                <i class="fas fa-check"></i> gluten-free (verified)
                                            </p>
                                            <p><i class="fas fa-check"></i> long shelf-life</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="benefits">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-sm-12 col-md-9 mx-md-auto">
                        <div class="overflow-hidden mb-3">
                            <h1 class="title-benefits appear-animation" data-appear-animation="maskUp">
                                APPLICATIONS AND BENEFITS OF
                                <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}"
                                    class="img-text" />
                            </h1>
                            <h2 class="sub-title-benefits appear-animation" data-appear-animation="maskUp">
                                <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}"
                                    class="img-text" />
                                offers potential health benefits based on various published
                                studies undertaken with phloem exudate from coconut trees;
                                it is a versatile substance that would be a beneficial
                                ingredient in a variety of products.
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-10 offset-md-1 d-flex justify-content-center">
                        <nav class="nav nav-pills flex-column flex-sm-row flex-grow-1">
                            <a id="btn-medicine"
                                class="flex-sm-fill text-sm-center nav-link anim-hover-translate-top-10px transition-3ms active btn-custom"
                                aria-current="page" href="" data-bs-toggle="tab" data-bs-target="#nav-medicine"
                                type="button" data-appear-animation="fadeIn">
                                <i class="fa-solid fa-prescription-bottle-medical fa-fw"></i>
                                <p>Medicine</p>
                                <p class="small">
                                    As an ingredient in medicines and as a dietary supplement
                                </p>
                            </a>
                            <a class="flex-sm-fill text-sm-center nav-link anim-hover-translate-top-10px transition-3ms btn-custom"
                                href="" data-bs-toggle="tab" data-bs-target="#nav-sports" type="button"
                                data-appear-animation="fadeIn">
                                <i class="fa-solid fa-bicycle fa-fw"></i>
                                <p>Sports</p>
                                <p class="small">
                                    As an ingredient in sport drinks and energy gels
                                </p>
                            </a>
                            <a class="flex-sm-fill text-sm-center nav-link anim-hover-translate-top-10px transition-3ms"
                                href="" data-bs-toggle="tab" data-bs-target="#nav-food" type="button"
                                data-appear-animation="fadeIn">
                                <i class="fa-solid fa-utensils fa-fw"></i>
                                <p>Food</p>
                                <p class="small">
                                    As a sweetener for syrups, bubble/boba drinks, coffee
                                    drinks, baking
                                </p>
                            </a>
                            <a class="flex-sm-fill text-sm-center nav-link anim-hover-translate-top-10px transition-3ms"
                                href="" data-bs-toggle="tab" data-bs-target="#nav-skincare" type="button"
                                data-appear-animation="fadeIn">
                                <!-- <i class="fa-solid fa-hand-holding-droplet fa-fw"></i> -->
                                <img src="{{ asset('img/icon-skincare.png') }}" class="fa-solid" style="width: 70px" />
                                <p>Skincare Cosmetics</p>
                                <p class="small">
                                    As an exfoliator, a moisturizer, and as a damage
                                    protection and anti-inflammatory agent
                                </p>
                            </a>
                        </nav>
                    </div>
                    <div class="col-sm-12 col-md-8 offset-md-2 d-flex justify-content-center"
                        data-appear-animation="fadeIn">
                        <div class="tab-content bg-transparent w-100" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-medicine" role="tabpanel" tabindex="0">
                                <h1 style="color: #d15a0b">Medicine</h1>
                                <h4 class="mt-4 mb-4">
                                    <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}"
                                        class="img-text" />
                                    contains:
                                </h4>

                                <h4 class="fw-bold">carbohydrates</h4>
                                <p class="fst-italic">
                                    the body’s primary source of energy and the brain’s
                                    preferred energy source
                                </p>

                                <h4 class="fw-bold">proteins and amino acids</h4>
                                <p class="fst-italic">
                                    the building blocks of the human body; they contribute to
                                    a lot of physiological processes such as recovery, muscle
                                    hypertrophy, fat loss, and strength gains
                                </p>

                                <h4 class="fw-bold">
                                    potassium, magnesium, sodium, calcium, phosphate and
                                    chloride
                                </h4>
                                <p class="fst-italic">
                                    the main electrolytic minerals for the good functioning of
                                    the heart and for basic life functioning, such as
                                    maintaining electrical neutrality in cells, generating and
                                    conducting action potentials in the nerves and muscles
                                </p>

                                <h4 class="fw-bold">inulin</h4>
                                <p class="fst-italic">
                                    a natural prebiotic fiber that helps in improving
                                    digestion and metabolism to ensure the ideal required
                                    level of absorption of glucose reducing the possibility of
                                    blood sugar spikes and crashes, which keeps the gut happy
                                </p>

                                <h4 class="fw-bold">antioxidants</h4>
                                <p class="fst-italic">
                                    compounds that provide cells protection against free
                                    radicals, hence protection against many scourges of aging,
                                    and which may play a positive role in heart disease,
                                    cancer and other diseases
                                </p>

                                <h4 class="fw-bold">B vitamins</h4>
                                <p class="fst-italic">
                                    essential vitamins playing a vital role in maintaining
                                    good health and well-being
                                </p>

                                <h4 class="fw-bold">vitamin C, iron and zinc</h4>
                                <p class="fst-italic">
                                    essential vitamin and minerals that boost the immune
                                    system
                                </p>

                                <h4 class="text-center mt-5">
                                    <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}"
                                        class="img-text" />
                                    can be used as an ingredient in Medicine and as a Nutrient
                                    or Dietary Supplement.
                                </h4>
                                <a id="nutritional_properties_button" href="nutritional-properties.html"
                                    class="btn btn-primary mt-5">
                                    Nutritional Properties
                                </a>
                            </div>

                            <div class="tab-pane fade" id="nav-sports" role="tabpanel" aria-labelledby="nav-contact-tab"
                                tabindex="0">
                                <h1 style="color: #d15a0b">Sports</h1>
                                <h4 class="mt-4">
                                    <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}"
                                        class="img-text" />
                                    contains most of the essential macro- and micro-nutrients
                                    in a natural well combined variety manner that provides a
                                    significant ergogenic effect for improving or boosting
                                    both endurance and anaerobic exercise performance.<br />
                                    <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}"
                                        class="img-text" />
                                    can be used as an ingredient in Sport Drinks and Energy
                                    Gels.
                                </h4>
                            </div>

                            <div class="tab-pane fade" id="nav-food" role="tabpanel" tabindex="0">
                                <h1 style="color: #d15a0b">Food</h1>
                                <h4 class="text-center mt-4 mb-0">
                                    <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}"
                                        class="img-text" />
                                    contains mainly sucrose, a disaccharide, i.e. a sugar
                                    composed of glucose and fructose subunits.<br />
                                    <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}"
                                        class="img-text" />
                                    can be used as a friendly sweetener for Syrups,
                                    Bubble/Boba Drinks, Coffee Drinks and Baking.
                                </h4>
                            </div>

                            <div class="tab-pane fade" id="nav-skincare" role="tabpanel"
                                aria-labelledby="nav-contact-tab" tabindex="0">
                                <h1 style="color: #d15a0b">Skincare Cosmetics</h1>
                                <h4 class="mt-4 mb-4">
                                    <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}"
                                        class="img-text" />
                                    contains glycolic acid and alpha-hydroxy acid that helps
                                    regulate the natural oils so that the skin is not dry or
                                    too oily; it magnificently provides the skin with a
                                    healthy glow.<br />
                                    The potential benefits of the application of
                                    <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}"
                                        class="img-text" />
                                    on the skin:
                                </h4>

                                <h4>
                                    <span class="fst-italic fw-bold">Exfoliation</span><br />
                                    as a natural exfoliant, it can help remove dead skin cells
                                    and encourage cell turnover
                                </h4>
                                <h4>
                                    <span class="fst-italic fw-bold">Moisturizing</span><br />
                                    the natural glycolic acid can help hydrate and moisturize
                                    the skin
                                </h4>
                                <h4>
                                    <span class="fst-italic fw-bold">Damage Protection</span><br />
                                    the antioxidants help to protect the skin from free
                                    radical damage; it can help with both the overall
                                    appearance of the skin and the prevention of premature
                                    aging
                                </h4>
                                <h4>
                                    <span class="fst-italic fw-bold">Anti-inflammatory</span><br />
                                    the antibacterial properties of zinc and the
                                    anti-inflammatory properties help to reduce skin redness,
                                    irritation and inflammation
                                </h4>
                            </div>
                            <!-- end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="certificates" class="section-primary border-0 mb-0 py-5 appear-animation"
            data-appear-animation="fadeIn" data-plugin-options="{'accY': -150}">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="row text-center">
                            <div class="col-md-10 mx-md-auto">
                                <div class="overflow-hidden mb-3">
                                    <h1 class="title-certificates appear-animation" data-appear-animation="maskUp">
                                        CERTIFICATES
                                    </h1>
                                    <h2 class="sub-title-certificates appear-animation" data-appear-animation="maskUp">
                                        <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-WHITE-LOGO.png') }}"
                                            class="img-text" />
                                        carries the following industry-standard certification
                                        seals:
                                    </h2>
                                </div>
                                <div class="owl-carousel owl-theme">
                                    <img src="{{ asset('img/certificates/1-COCO-haccp-LOGO-150x150.png') }}"
                                        alt="HACCP" class="" />
                                    <img src="{{ asset('img/certificates/2-COCO-ISO-22000-LOGO-150x150.png') }}"
                                        alt="ISO 22000" class="" />
                                    <img src="{{ asset('img/certificates/3-COCO-FDA-LOGO-150x150.png') }}" alt="FDA"
                                        class="" />
                                    <img src="{{ asset('img/certificates/4-COCO-halal-LOGO-150x150.png') }}"
                                        alt="HALAL MUI" class="" />
                                    <img src="{{ asset('img/certificates/5-COCO-USDA-LOGO-4802_image-150x150.png') }}"
                                        alt="USDA ORGANIC" class="" />
                                    <img src="{{ asset('img/certificates/6-COC-EU-ORGANIC-265-2650459_eu-organic-certification-white-eu-organic-logo.02-150x150.png') }}"
                                        alt="EU ORGANIC" class="" />
                                    <img src="{{ asset('img/certificates/7-COCO-canada-organic-logo-10054A64D2-seeklogo.com_-150x150.png') }}"
                                        alt="CANADA ORGANIC" class="" />
                                    <img src="{{ asset('img/certificates/8-kosher-LOGO-150x150.png') }}" alt="KOSHER"
                                        class="" />
                                    <img src="{{ asset('img/certificates/9-COCO-Fair-for-Life-LOGO.02-150x150.png') }}"
                                        alt="FAIR FOR LIFE" class="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('skrip_jawa')
    <script>
        $(".owl-carousel").owlCarousel({
            items: 1,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            autoHeight: true,
            center: false,
            loop: true,
            dots: true,
            animateIn: "fadeInRightBig",
            animateOut: "fadeOutLeftBig",
            smartSpeed: 100,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 3,
                    stagePadding: 0,
                    margin: 20,
                    nav: false,
                },
                768: {
                    items: 9,
                    stagePadding: 0,
                    margin: 20,
                    nav: true,
                },
            },
        });

        $(".nav-link").click(function(e) {
            e.preventDefault();
            if (window.innerWidth < 768) {
                $("html, body").animate({
                        scrollTop: $("#nav-tabContent").offset().top - 100,
                    },
                    2000
                );
            }
        });
    </script>
@endsection
