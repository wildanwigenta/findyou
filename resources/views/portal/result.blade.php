@extends('portal.layouts.portal_layouts')
@section('content_portal')
<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 col-md-8 col-sm-12">
                <h2 class="text-white">FindYou</h2>
                <h5 class="text-white">Find your passion on FindYou</h5>
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
            <form action="/" method="post" id="minatBakatForm">
                @csrf
                <div id="questionsContainer">
                    <div class="col-lg-8 col-12 mt-3 mx-auto">
                        <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                            <div class="custom-block-topics-listing-info row">
                                <h3>Hasil anda !</h3>
                                <div class="d-flex">
                                    <p>Berdasarkan jawaban yang anda berikan, anda memiliki minat dibidang <span
                                            class="p text-success fw-bold">Kesehatan</span> </p>
                                </div>

                                <p class="mb-1 fw-semibold">Presentase Jawaban Anda</p>
                                <div class="mb-1">
                                    <label for="">Kesehatan</label>
                                    <div class="progress" role="progressbar" aria-label="Example with label"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 80%">80%</div>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <label for="">Pendidikan</label>
                                    <div class="progress" role="progressbar" aria-label="Example with label"
                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 60%">60%</div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn custom-btn mt-3 mt-lg-4">Try Again!</button>
                                </div>
                            </div>
                        </div>
                    </div>


            </form>
        </div>
    </div>
</section>

@endsection