@extends('portal.layouts.portal_layouts')
@section('content_portal')
<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 col-md-8 col-sm-12">
                <h2 class="text-white">FindYou</h2>
                <h5 class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, ipsum.</h5>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <a href="/login" class="btn custom-btn mt-3 mt-lg-4">Login untuk mencoba</a>
            </div>
        </div>
    </div>
</header>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 mt-3 mx-auto">
                <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                    <div class="d-flex">
                        <img src="{{ asset('/') }}assets/portal/images/topics/undraw_Remote_design_team_re_urdx.png"
                            class="custom-block-image img-fluid" alt="" />

                        <div class="custom-block-topics-listing-info d-flex">
                            <div>
                                <h5 class="mb-2">FindYou</h5>

                                <p class="mb-0">
                                    Adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, repellendus.
                                </p>

                                <a href="/login" class="btn custom-btn mt-3 mt-lg-4">Coba Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-12 text-center">
                <h3 class="mb-4">Isi Data Diri</h3>
                <p>Lengkapi data diri sebelum mencoba.</p>
            </div>
            <div class="col-lg-8 col-12 mt-3 mx-auto">
                <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label form-custom">Name</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="degree" class="form-label">Degree</label>
                            <select class="form-select" aria-label="Default select example" name="degree" id="degree">
                                <option selected>- Select Degree -</option>
                                <option value="SMA">SMA</option>
                                <option value="SMK">SMK</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="school" class="form-label form-custom">School</label>
                            <input type="text" class="form-control" id="school" name="school" aria-describedby="school">
                        </div>
                        <div class="text-end">
                          <a href="/login" type="submit" class="btn custom-btn mt-3 mt-lg-4">Submit</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection