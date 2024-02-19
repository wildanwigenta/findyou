@extends('admin.layout.admin_layouts')
@section('sec_halaman', 'HALAMAN UBAH PERTANYAAN')

@section('content_admin')
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="card p-3">
                <h5 class="text-center mb-4">FORM UBAH PERTANYAAN</h5>
                <form method="POST" action="/admin/update_data_pertanyaan" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="kategori" class="col-md-4 col-form-label text-md-end">{{ __('Kategori') }}</label>

                        <div class="col-md-8">
                            <select class="form-select" aria-label="Default select example" autofocus name="kategori"
                            id="kategori" required>
                            <option value= "{{ $kat->id_kategori }}">  --  Select Kategori  --  </option>
                            @foreach ($kategori as $kat)
                                <option value="{{ $kat->id_kategori }}">{{ $kat->kategori }}</option>
                            @endforeach
                            </select>
                            @error('kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="pertanyaan" class="col-md-4 col-form-label text-md-end">{{ __('Pertanyaan') }}</label>

                        <div class="col-md-8">
                            <input id="pertanyaan" type="text" class="form-control @error('pertanyaan') is-invalid @enderror"
                                name="pertanyaan" value="" autocomplete="pertanyaan" autofocus required>

                            @error('pertanyaan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col text-end">
                            <a href="{{ URL::previous() }}" class="btn btn-danger">Kembali</a>
                            <button class="btn btn-success" type="submit">Upload</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection