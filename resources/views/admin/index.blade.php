@extends('admin.layout.admin_layouts')
@section('sec_halaman', 'DASHBOARD ADMIN')
    
@section('content_admin')
<div class="row">
    <div class="col-lg-10">
        <div class="row">
            <!-- Pengguna Sudah Survei Card -->
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="card info-card revenue-card">
                    <div class="card-body">
                        <h5 class="card-title">Pengguna sudah Survei</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-newspaper"></i>
                            </div>
                            <div class="ps-3">
                                <h6>322</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End  pengguna Survei Card -->
        </div>
    </div>
</div>
@endsection
