@extends('layouts.landing')

@section('isi_aku_mas')
    <div role="main" id="our-method-page" class="main" style="position: relative">
        <div class="overlay-bg">&nbsp;</div>
        <div class="our-method-bg">
            <img src="{{ asset('img/bg_our_method_apply.jpg') }}" alt="" class="img-bg" />
        </div>

        <section id="our-method" class="section section-primary border-0 mb-0 appear-animation"
            data-appear-animation="fadeIn" style="margin: 0px">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row text-center">
                            <div class="col-md-12 d-flex justify-content-center align-items-center"
                                style="min-height: 100px">
                                <div class="overflow-hidden">
                                    <h1 class="title-our-method appear-animation m-0" data-appear-animation="maskUp">
                                        FROM THE COCONUT SAP TO THE FINAL PRODUCT
                                    </h1>
                                    <p class="sub-title-our-method appear-animation mt-5 mb-0"
                                        data-appear-animation="maskUp">
                                        A method ensuring the premium quality of
                                        <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-WHITE-LOGO.png') }}"
                                            class="img-text" />
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="our-method-icon-section">
            <div class="container">
                <h1 class="text-center">OUR BASIC PROCESS</h1>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-4 mb-sm-x">
                                        <a href="#" role="button" id="show_step_1" class="icon-button active">
                                            <img src="{{ asset('img/icons/1.png') }}" class="" />
                                            <p class="text-center">
                                                Preparation and Patented Exudate Collection
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 col-md-4 text-center d-none d-md-block">
                                        <svg style="color: rgb(0, 0, 0)" xmlns="http://www.w3.org/2000/svg" width="4.5vw"
                                            height="7vw" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 15 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"
                                                fill="#000000"></path>
                                        </svg>
                                        &nbsp;
                                    </div>
                                    <div class="col-sm-12 col-md-4 mb-sm-x">
                                        <a href="#" role="button" id="show_step_2" class="icon-button">
                                            <img src="{{ asset('img/icons/2.png') }}" class="img-fluid" />
                                            <p class="text-center">Delivery of Exudate to LPU</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-4 text-center d-none d-md-block">
                                        <svg style="color: rgb(0, 0, 0)" xmlns="http://www.w3.org/2000/svg" width="4.5vw"
                                            height="7vw" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 15 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"
                                                fill="#000000"></path>
                                        </svg>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mb-sm-x">
                                        <a href="#" role="button" id="show_step_3" class="icon-button">
                                            <img src="{{ asset('img/icons/3.png') }}" class="img-fluid" />
                                            <p class="text-center">
                                                Exudate Sieving, Quality Control and Recording
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 col-md-4 text-center d-none d-md-block">
                                        <svg style="color: rgb(0, 0, 0)" xmlns="http://www.w3.org/2000/svg" width="4.5vw"
                                            height="7vw" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 15 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"
                                                fill="#000000"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-4 mb-sm-x">
                                        <a href="#" role="button" id="show_step_4" class="icon-button">
                                            <img src="{{ asset('img/icons/4.png') }}" class="img-fluid" />
                                            <p class="text-center">Exudate Evaporation</p>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 col-md-4 text-center d-none d-md-block">
                                        <svg style="color: rgb(0, 0, 0)" xmlns="http://www.w3.org/2000/svg"
                                            width="4.5vw" height="7vw" fill="currentColor" class="bi bi-arrow-left"
                                            viewBox="0 0 15 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"
                                                fill="#000000"></path>
                                        </svg>
                                    </div>
                                    <div class="col-sm-12 col-md-4 mb-sm-x">
                                        <a href="#" role="button" id="show_step_5" class="icon-button">
                                            <img src="{{ asset('img/icons/5.png') }}" class="img-fluid" />
                                            <p class="text-center">
                                                Filtration of Evaporated Exudate
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-block d-xs-block d-sm-block d-md-none d-lg-none">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 mb-sm-x">
                                    <a href="#" role="button" id="show_step_6" class="icon-button">
                                        <img src="{{ asset('img/icons/6.png') }}" class="img-fluid" />
                                        <p class="text-center">
                                            Transport of Evaporated Exudate to CPU
                                        </p>
                                    </a>
                                </div>
                                <div class="col-sm-12 mb-sm-x">
                                    <a href="#" role="button" id="show_step_7" class="icon-button">
                                        <img src="{{ asset('img/icons/7.png') }}" class="img-fluid" />
                                        <p class="text-center">
                                            Receipt, Quality Control and Recording at CPU
                                        </p>
                                    </a>
                                </div>
                                <div class="col-sm-12 mb-sm-x">
                                    <a href="#" role="button" id="show_step_8" class="icon-button">
                                        <img src="{{ asset('img/icons/8.png') }}" class="img-fluid" />
                                        <p class="text-center">
                                            Final Evaporation, Filtering and Packaging
                                        </p>
                                    </a>
                                </div>
                                <div class="col-sm-12 mb-sm-x">
                                    <a href="#" role="button" id="show_step_9" class="icon-button">
                                        <img src="{{ asset('img/icons/9.png') }}" class="img-fluid" />
                                        <p class="text-center">
                                            Labeling, Final Quality Control and Recording
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="d-none d-md-block">
                            <div class="row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4">&nbsp;</div>
                                        <div class="col-sm-12 col-md-4 mb-sm-x">
                                            <a href="#" role="button" id="show_step_9" class="icon-button">
                                                <img src="{{ asset('img/icons/9.png') }}" class="img-fluid" />
                                                <p class="text-center">
                                                    Labeling, Final Quality Control and Recording
                                                </p>
                                            </a>
                                        </div>
                                        <div class="col-sm-12 col-md-4 text-center d-none d-md-block">
                                            <svg style="
                          color: rgb(0, 0, 0);
                          transform: rotate(180deg);
                        "
                                                xmlns="http://www.w3.org/2000/svg" width="4.5vw" height="7vw"
                                                fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 15 16">
                                                <path fill-rule="evenodd"
                                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"
                                                    fill="#000000"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4 mb-sm-x">
                                            <a href="#" role="button" id="show_step_8" class="icon-button">
                                                <img src="{{ asset('img/icons/8.png') }}" class="img-fluid" />
                                                <p class="text-center">
                                                    Final Evaporation, Filtering and Packaging
                                                </p>
                                            </a>
                                        </div>
                                        <div class="col-sm-12 col-md-4 text-center d-none d-md-block">
                                            <svg style="
                          color: rgb(0, 0, 0);
                          transform: rotate(180deg);
                        "
                                                xmlns="http://www.w3.org/2000/svg" width="4.5vw" height="7vw"
                                                fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 15 16">
                                                <path fill-rule="evenodd"
                                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"
                                                    fill="#000000"></path>
                                            </svg>
                                        </div>
                                        <div class="col-sm-12 col-md-4 mb-sm-x">
                                            <a href="#" role="button" id="show_step_7" class="icon-button">
                                                <img src="{{ asset('img/icons/7.png') }}" class="img-fluid" />
                                                <p class="text-center">
                                                    Receipt, Quality Control and Recording at CPU
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4 text-center d-none d-md-block">
                                            <svg style="
                          color: rgb(0, 0, 0);
                          transform: rotate(180deg);
                        "
                                                xmlns="http://www.w3.org/2000/svg" width="4.5vw" height="7vw"
                                                fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 15 16">
                                                <path fill-rule="evenodd"
                                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"
                                                    fill="#000000"></path>
                                            </svg>
                                        </div>
                                        <div class="col-sm-12 col-md-4 mb-sm-x">
                                            <a href="#" role="button" id="show_step_6" class="icon-button">
                                                <img src="{{ asset('img/icons/6.png') }}" class="img-fluid" />
                                                <p class="text-center">
                                                    Transport of Evaporated Exudate to CPU
                                                </p>
                                            </a>
                                        </div>
                                        <div class="col-sm-12 col-md-4 text-start d-none d-md-block">
                                            <svg style="color: rgb(0, 0, 0)" xmlns="http://www.w3.org/2000/svg"
                                                width="4.5vw" height="7vw" fill="currentColor"
                                                class="bi bi-arrow-left" viewBox="0 0 15 16">
                                                <path fill-rule="evenodd"
                                                    d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"
                                                    fill="#000000"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end  -->
                    </div>
                    <!-- end col-12 -->
                </div>
            </div>
        </section>

        <section id="timelinenya" class="">
            <div class="container">
                <div id="anchor_target" class="timeline-body">
                    <div id="step_1_group">
                        <h1>Preparation and Patented Exudate Collection</h1>
                        <p>
                            The tapper climbs up the coconut palms along with his tools,
                            patented anti-fermentation device and food-grade plastic bag.
                            Tappers are company associates who have experience in climbing
                            coconut palms and are specially selected, trained and
                            continuously evaluated by the company.
                        </p>
                        <p>
                            The tapping takes place exclusively from selected coconut
                            palms that grow on nutrient-rich soils and are certified
                            organic. Each palm provides an average of 1.5 litres of
                            exudate per day.
                        </p>
                        <p>
                            At the top of the palm, the tapper will treat the exudate
                            tapping point with the tools and insert the aforesaid plastic
                            bag with the anti-fermentation device into the container
                            mounted at the tapping point.
                        </p>
                        <p>
                            The preparation of tapping is performed according to defined
                            hygiene procedures and in accordance with the patented
                            anti-fermentation method to prevent or minimize the growth of
                            microorganisms inside the exudate.
                        </p>
                        <p>
                            The tapper descends from the palm and returns to each of the
                            tapping points after approximately 12 hours to collect the
                            exudate and prepare the tapping point for the next 12 hour
                            collection cycle.
                        </p>
                    </div>

                    <div id="step_2_group" style="display: none">
                        <h1>Delivery of Exudate to LPU</h1>
                        <p>
                            The tapper removes the plastic bag containing the collected
                            exudate and the anti-fermentation device inside the container.
                        </p>
                        <p>
                            The tapper then tightly seals each plastic bag and bring the
                            bags altogether along with the collected exudates and the
                            anti-fermentation devices inside each bag to the respective
                            Local Processing Unit (LPU). The LPUs are built, outfitted,
                            and managed by the company's well-trained staff in compliance
                            with the company's strict methods, hygiene and safety
                            procedures.
                        </p>
                    </div>

                    <div id="step_3_group" style="display: none">
                        <h1>Exudate Sieving, Quality Control and Recording</h1>
                        <p>
                            Upon arrival of the exudates at the LPU, the exudates are
                            immediaty transferred by passing them through sieves into
                            food-grade containers. This sieving ensures the removal of any
                            foreign particles originating from the palm and its
                            surroundings.
                        </p>
                        <p>
                            The plastic bags are used only once and are returned to the
                            supplier for recycling; the patented anti-fermentation device
                            is thoroughly washed and cleaned after each use by the tapper
                            for the next exudate collection.
                        </p>
                        <p>
                            The exudate is then quality-checked by LPU personnel that
                            includes the measurement and recording of turbidity, pH and
                            total weight according to well established quality control,
                            measurement and traceability procedures.
                        </p>
                    </div>

                    <div id="step_4_group" style="display: none">
                        <h1>Exudate Evaporation</h1>
                        <p>
                            The exudates received from the tappers are then processed
                            together for the purpose of collectively reducing their
                            moisture content by using a special evaporation method to
                            thereby obtain a a thicker and nutrient-dense liquid having a
                            sugar content of equivalent to 60°Brix. This process is
                            subject to rigorous and specific procedures and is monitored
                            carefully and controlled meticulously to ensure the
                            "evaporated exudate" still contains the original nutrients of
                            the exudates.
                        </p>
                    </div>

                    <div id="step_5_group" style="display: none">
                        <h1>Filtration of Evaporated Exudate</h1>
                        <p>
                            The evaporated exudate is then filtered, naturally cooled down
                            and transferred to food-grade containers that are labeled with
                            the respective lot number to maintain records of the
                            respective exudate data.
                        </p>
                    </div>

                    <div id="step_6_group" style="display: none">
                        <h1>Transport of Evaporated Exudate to CPU</h1>
                        <p>
                            The evaporated exudate is then transported with these
                            containers from the LPUs to the Central Processing Unit (CPU)
                            on the same day or the following day. The CPU is owned by the
                            company and is managed by its experts according to the
                            company's production, quality, hygiene and safety procedures.
                        </p>
                    </div>

                    <div id="step_7_group" style="display: none">
                        <h1>Receipt, Quality Control and Recording at CPU</h1>
                        <p>
                            Upon receipt of the evaporated exudate by the CPU, the
                            evaporated exudate undergoes quality control, testing and
                            appropriate records.
                        </p>
                    </div>

                    <div id="step_8_group" style="display: none">
                        <h1>Final Evaporation, Filtering and Packaging</h1>
                        <p>
                            The evaporated exudate is then processed to further reduce its
                            moisture content to a concentration close to its final
                            viscosity or its Brix value as per the customer's preference
                            (typically a value between 65°Brix and 75°Brix).
                        </p>
                        <p>
                            The evaporated exudate is thereafter re-filtered and
                            subsequently subjected to a final fine filtration, the mesh
                            size of which will depend on the application of the end
                            product.
                        </p>
                        <p>
                            The evaporated exudate is then brought to its final density
                            (or Brix level) as per customer's request and filled into the
                            packaging, the type and labeling of which will be according to
                            the customer's requirement.
                        </p>
                    </div>

                    <div id="step_9_group" style="display: none">
                        <h1>Labeling, Final Quality Control and Recording</h1>
                        <p>
                            The end product is finally subjected to a final quality
                            control, labeling and recording.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="our-method-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-10 offset-md-1">
                        <div class="row">
                            <div class="col-sm-12" style="vertical-align: middle">
                                <div class="card-custom">
                                    <h1 class="text-center">
                                        A COMPLETE SYSTEM WITH SUSTAINABLE AGRICULTURE
                                    </h1>
                                    <p>
                                        Our method comprises also novel procedures, training and
                                        checkpoint control programs for the complete system of
                                        the
                                        <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}"
                                            class="img-text" />,
                                        starting from the selection of organic trees grown
                                        on nutrient-rich soils of the volcanic island of Java -
                                        Indonesia, the harvesting of phloem exudates, up to the
                                        final stage of the production and packaging of the
                                        end-product of
                                        <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}"
                                            class="img-text" />.
                                    </p>
                                    <p>
                                        This novel system contributes to having also
                                        well-trained tappers, farmers and personnel working in
                                        accordance with all requirements for hygiene, safety,
                                        and quality, in strict compliance with the American
                                        FDA'S Food Facility Registration Rules and ISO
                                        22000:2018 Safety Management System to ensure:
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-12 d-flex justify-content-between">
                                            <ul>
                                                <li>
                                                    A whole operation and management under biological
                                                    and mechanical practices that fully support
                                                    ecological balance, on-farm cycling of resources,
                                                    and the conversation of biodiversity, and
                                                </li>
                                                <li>
                                                    A world-class 100% organic high-quality food
                                                    product containing all the natural nutrients,
                                                    aroma and taste of the phloem exudates of coconut
                                                    trees.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>
                                        <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}"
                                            class="img-text" />
                                        carries therefore industry-standard certification seals,
                                        such as: HCCP, ISO 22000, FDA registered, HALAL,
                                        NOPUSDA, EU Organic, CANADA Organic, Kosher, Halal, Fair
                                        for Life (Fairtrade).
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

@section('skrip_jawa')
    <script>
        $("#show_step_1").click(function(e) {
            e.preventDefault();
            for (let i = 1; i <= 9; i++) {
                $(`#step_${i}_group`).hide();
                $(`#show_step_${i}`).removeClass("active");
            }
            $(`#step_1_group`).show();
            $(this).addClass("active");

            $("html, body").animate({
                    scrollTop: $("#anchor_target").offset().top - 150,
                },
                1500
            );
        });

        $("#show_step_2").click(function(e) {
            e.preventDefault();
            for (let i = 1; i <= 9; i++) {
                $(`#step_${i}_group`).fadeOut();
                $(`#show_step_${i}`).removeClass("active");
            }
            $(`#step_2_group`).fadeIn();
            $(this).addClass("active");

            $("html, body").animate({
                    scrollTop: $("#anchor_target").offset().top - 150,
                },
                1500
            );
        });

        $("#show_step_3").click(function(e) {
            e.preventDefault();
            for (let i = 1; i <= 9; i++) {
                $(`#step_${i}_group`).fadeOut();
                $(`#show_step_${i}`).removeClass("active");
            }
            $(`#step_3_group`).fadeIn();
            $(this).addClass("active");

            $("html, body").animate({
                    scrollTop: $("#anchor_target").offset().top - 150,
                },
                1500
            );
        });

        $("#show_step_4").click(function(e) {
            e.preventDefault();
            for (let i = 1; i <= 9; i++) {
                $(`#step_${i}_group`).fadeOut();
                $(`#show_step_${i}`).removeClass("active");
            }
            $(`#step_4_group`).fadeIn();
            $(this).addClass("active");

            $("html, body").animate({
                    scrollTop: $("#anchor_target").offset().top - 150,
                },
                1500
            );
        });

        $("#show_step_5").click(function(e) {
            e.preventDefault();
            for (let i = 1; i <= 9; i++) {
                $(`#step_${i}_group`).fadeOut();
                $(`#show_step_${i}`).removeClass("active");
            }
            $(`#step_5_group`).fadeIn();
            $(this).addClass("active");

            $("html, body").animate({
                    scrollTop: $("#anchor_target").offset().top - 150,
                },
                1500
            );
        });

        $("#show_step_6").click(function(e) {
            e.preventDefault();
            for (let i = 1; i <= 9; i++) {
                $(`#step_${i}_group`).fadeOut();
                $(`#show_step_${i}`).removeClass("active");
            }
            $(`#step_6_group`).fadeIn();
            $(this).addClass("active");

            $("html, body").animate({
                    scrollTop: $("#anchor_target").offset().top - 150,
                },
                1500
            );
        });

        $("#show_step_7").click(function(e) {
            e.preventDefault();
            for (let i = 1; i <= 9; i++) {
                $(`#step_${i}_group`).fadeOut();
                $(`#show_step_${i}`).removeClass("active");
            }
            $(`#step_7_group`).fadeIn();
            $(this).addClass("active");

            $("html, body").animate({
                    scrollTop: $("#anchor_target").offset().top - 150,
                },
                1500
            );
        });

        $("#show_step_8").click(function(e) {
            e.preventDefault();
            for (let i = 1; i <= 9; i++) {
                $(`#step_${i}_group`).fadeOut();
                $(`#show_step_${i}`).removeClass("active");
            }
            $(`#step_8_group`).fadeIn();
            $(this).addClass("active");

            $("html, body").animate({
                    scrollTop: $("#anchor_target").offset().top - 150,
                },
                1500
            );
        });

        $("#show_step_9").click(function(e) {
            e.preventDefault();
            for (let i = 1; i <= 9; i++) {
                $(`#step_${i}_group`).fadeOut();
                $(`#show_step_${i}`).removeClass("active");
            }
            $(`#step_9_group`).fadeIn();
            $(this).addClass("active");

            $("html, body").animate({
                    scrollTop: $("#anchor_target").offset().top - 150,
                },
                1500
            );
        });
    </script>
@endsection
