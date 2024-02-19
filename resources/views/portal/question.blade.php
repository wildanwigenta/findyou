@extends('portal.layouts.portal_layouts')
@section('content_portal')
<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 col-md-8 col-sm-12">
                <h2 class="text-white">FindYou</h2>
                <h5 class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, ipsum.</h5>
            </div>
            <!-- <div class="col-lg-3 col-md-4 col-sm-12">
                <a href="/login" class="btn custom-btn mt-3 mt-lg-4">Login untuk mencoba</a>
            </div> -->
        </div>
    </div>
</header>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 mt-3 mx-auto">
                <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                    <div class="d-flex">
                        <div class="custom-block-topics-listing-info d-flex">
                            <div>
                                <h5 class="mb-2">FindYou</h5>

                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, minus?
                                </p>
                                <div class="text-center">
                                    <button class="btn btn-danger btn-lg btn-rounded-4 mt-3 mt-lg-4">No</button>
                                    <button class="btn btn-success btn-lg btn-rounded-4 mt-3 mt-lg-4">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection