@extends('admin.layouts.main')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css"
    integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"
    integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('container')
<div class="row">
    <div class="col-md-12 mb-xl-0">
        <div class="d-flex bd-highlight ">
            <div class="me-auto p-2 bd-highlight">
                <h5 class="text-dark font-weight-bold py-2 m-0">Buat Acara Baru </h5>
            </div>
            <div class="p-2 bd-highlight">
            </div>
            <div class="p-2 bd-highlight">
                <a href="/admin/event" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center mt-3">
    <div class="card float-start" style="width:500px;">
        <div class="card-body">
            <h4 class="card-title">Form Event</h4>
            <p class="card-description">
                Form Event
            </p>

            <form action="/admin/event" class="forms-sample" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="menu">judul</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="menu" name="title"
                        autocomplete="off" placeholder="judul" value="{{old('title')}}">
                    @error('title')
                    <div class=" invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="menu">tanggal</label>
                    <input type="date" class="form-control @error('date') is-invalid @enderror" id="menu" name="date"
                        autocomplete="off" placeholder="date" value="{{old('date')}}">
                    @error('date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>upload foto</label>
                    <div class="input-group col-xs-12">
                        <input type="file" class="form-control file-upload-info @error('image') is-invalid @enderror"
                            onChange="previewImage()" placeholder="Upload Image" id="image" name="image">
                    </div>
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input id="description" type="hidden" name="description" value="{{old('description')}}">
                    <label>deskripsi</label>
                    <trix-editor input="description"></trix-editor>
                    @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <a href="/admin/item" class="btn btn-warning ">Kembali</a>
            </form>
        </div>
    </div>
    <div class="box-img card float-end ms-sm-0 ms-md-3 mt-sm-3 mt-md-3 mt-lg-0 " style="width:500px">
        <div class="card-body ">
            <div style="border: 5px solid rgb(221, 221, 221); border-style: dashed; padding:5px">
                <img src="" class="img-preview invisible img-fluid" width="400px" height="400px">
            </div>

        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');
    const boxImg = document.getElementsByClassName('box-img')[0]



    function previewImage() {

        imgPreview.style.display = 'block'

        if(image.value != null){
                imgPreview.classList.remove("invisible");
        }

        const dataUrl = URL.createObjectURL(image.files[0]); //<-- cara gampang preview IMG
        imgPreview.src = dataUrl
    }
</script>
@endsection