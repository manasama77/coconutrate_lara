@extends('layouts.landing')

@section('isi_aku_mas')
    <div role="main" class="main" style="position: relative">
        <section id="nutritional-properties" class="section section-primary border-0 mb-0 appear-animation"
            data-appear-animation="fadeIn" style="margin: 0px">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row text-center">
                            <div class="col-md-10 mx-auto d-flex justify-content-center align-items-center"
                                style="min-height: 100px">
                                <div class="">
                                    <h1 class="title-nutritional-properties appear-animation mb-3"
                                        data-appear-animation="maskUp">
                                        GET IN TOUCH
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12" style="margin-top: 3rem">
                        <p class="text-center">
                            For more details about
                            <img alt="COCONUTRATE" src="{{ asset('img/COCONUTRATE-MINI-LOGO.png') }}" class="img-text" />,
                            or for orders
                            and information about packaging, shipping,
                            price, etc., please contact us.
                        </p>
                        <p class="appear-animation text-center" data-appear-animation="fadeIn"
                            data-appear-animation-delay="0" data-appear-animation-duration="1s">
                            <a href="mailto:contact@coconutrate.com"><i class="fas fa-envelope fa-fw"></i>
                                contact@coconutrate.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="container secondary">
                <div class="col-sm-12 col-md-8 offset-md-2 p-md-5 appear-animation" data-appear-animation="fadeIn"
                    data-appear-animation-delay="500" data-appear-animation-duration="1s">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="mb-3">
                                    <label for="first_name">First Name<span>*</span></label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required />
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="mb-3">
                                    <label for="last_name">Last Name<span>*</span></label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="email">Email<span>*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="message">Message<span>*</span></label>
                                    <textarea class="form-control" id="message" name="message" rows="8" required></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100">
                                    Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('skrip_jawa')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"
        integrity="sha512-eYSzo+20ajZMRsjxB6L7eyqo5kuXuS2+wEbbOkpaur+sA2shQameiJiWEzCIDwJqaB0a4a6tCuEvCOBHUg3Skg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(() => {
            $('form').on('submit', e => {
                e.preventDefault()
                processStore()
            })
        })

        function processStore() {
            $.ajax({
                url: '{{ route('contact_us.store') }}',
                method: 'post',
                dataType: 'json',
                data: {
                    first_name: $('#first_name').val(),
                    last_name: $('#last_name').val(),
                    email: $('#email').val(),
                    message: $('#message').val(),
                },
                beforeSend: () => {
                    $.blockUI()
                }
            }).fail(e => {
                console.log(e.responseText)
                $.unblockUI()
                Swal.fire({
                    icon: 'error',
                    title: 'Ooops',
                    text: e.responseText
                })
            }).done(e => {
                if (e.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: e.message
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Ooops',
                        text: "Something wrong, please try again later"
                    })
                }

                $.unblockUI()
            })
        }
    </script>
@endsection
