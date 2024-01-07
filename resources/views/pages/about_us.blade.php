@extends('layouts.landing')

@section('isi_aku_mas')
    <div role="main" id="about-us-page" class="main" style="position: relative">
        <div class="overlay-bg">&nbsp;</div>
        <div class="about-us-bg">
            <img src="{{ asset('img/bg-about-us.jpg') }}" alt="" class="img-bg" />
        </div>

        <section id="about-us" class="section section-primary border-0 mb-0 appear-animation" data-appear-animation="fadeIn"
            style="margin: 0px">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row text-center">
                            <div class="col-md-10 mx-auto d-flex justify-content-center align-items-center"
                                style="min-height: 100px">
                                <div class="overflow-hidden">
                                    <h1 class="title-about-us appear-animation m-0" data-appear-animation="maskUp">
                                        <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-WHITE-LOGO.png') }}"
                                            class="img-text" />
                                        IS A 100% ORGANIC CERTIFIED,<br />SINGLE-INGREDIENT
                                        NUTRITIOUS LIQUID
                                    </h1>
                                    <p class="sub-title-about-us appear-animation mt-5 mb-0" data-appear-animation="maskUp">
                                        Directly and exclusively from the phloem exudate (sap)
                                        originating from selected coconut trees specifically
                                        grown on the nutrient-rich soils of the volcanic coastal
                                        areas of the island of Java, Indonesia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about-us-2">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-10 mx-md-auto">
                        <div class="sub-title-about-us">
                            <p>
                                <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}"
                                    class="img-text" />
                                is a product of LJN Bio-Products Ltd., a company registered
                                in Toronto - Canada, which is owned by the Machate Family.
                            </p>
                            <p>
                                Commercial operations of
                                <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}"
                                    class="img-text" />
                                for its introduction to global market started in 2021. The
                                production is undertaken with new modern facilities based on
                                joint operations and license agreements between the Machate
                                Family and two Indonesian companies in Central Java,
                                Indonesia experienced in the harvesting, production and
                                exporting of products made of coconut sap.
                            </p>
                            <p>
                                The present facilities can reach a production volume of 100
                                tons per month; expansions of 100 tons per year are in
                                planning.
                            </p>
                            <p>
                                Supplies of
                                <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}"
                                    class="img-text" />
                                as a food product in the form of syrup to several countries
                                are continuously ongoing.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about-us-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-10 offset-md-1" style="padding: 0px">
                        <div class="row d-flex justify-content-between">
                            <div class="col-sm-12 col-md-5 x-custom">
                                <div class="card-custom">
                                    <h1 class="text-center">MISSION</h1>
                                    <p>
                                        To promote good health by providing everyone with one of
                                        the best nutritious products straight from Mother Earth.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-1">&nbsp;</div>
                            <div class="col-sm-12 col-md-5 x-custom">
                                <div class="card-custom">
                                    <h1 class="text-center">VISION</h1>
                                    <p>
                                        We want good health with natural unrefined
                                        preservative-free products to be in everyone’s mind; and
                                        to be a brand recognized as an all-natural and healthy
                                        alternative to pre-existing notions of good health and
                                        set the limit higher for a nutritional lifestyle
                                        product.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
