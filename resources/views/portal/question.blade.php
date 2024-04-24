@extends('portal.layouts.portal_layouts')
@section('content_portal')
<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 col-md-8 col-sm-12">
                <h2 class="text-white">FindYou</h2>
                <h5 class="text-white">Find your passion on FindYou.</h5>
            </div>
            <!-- <div class="col-lg-3 col-md-4 col-sm-12">
                <a href="/login" class="btn custom-btn mt-3 mt-lg-4">Login untuk mencoba</a>
            </div> -->
        </div>
    </div>
</header>

<section class="section-padding">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-8 col-12 mb-3 mx-auto">
                <div class="custom-block custom-block-topics-listing site-header shadow-lg">
                    <div class="custom-block-topics-listing-info row text-center text-white mb-0">
                        <h3 class="text-white">{{$name}}</h3>
                        <h5 class="text-white">{{$school}}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <form action="/result" method="post" id="minatBakatForm">
                @csrf
                <div id="questionsContainer">
                    @foreach($pertanyaan as $p)
                    <div class="col-lg-8 col-12 mt-3 mx-auto">
                        <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                            <div class="custom-block-topics-listing-info row">
                                <div class="col-9">
                                    <h5>{{ $p->pertanyaan }}</h5>
                                </div>
                                <div class="col-3">
                                    <input class="form-check-input mx-1" type="radio" name="jawaban[{{ $p->id_pertanyaan }}]" value="ya"> Ya
                                    <input class="form-check-input mx-1" type="radio" name="jawaban[{{ $p->id_pertanyaan }}]" value="tidak">Tidak
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row">
                    <div class="col-10 text-end">
                        <!-- <button type="submit" class="btn custom-btn mt-3 mt-lg-4">Submit</button> -->
                        <a href="/result" class="btn custom-btn mt-3 mt-lg-4">Submit</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
