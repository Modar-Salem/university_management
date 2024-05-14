@extends('layout.master')

@section('title')
    Show Library
@endsection

@section('css')
@endsection

@section('content')
    <div class="container m-center mt-1 mb-4">
        <div class="row ">
            <div class="col-12 mb-3 text-center">
                <div class="form-check d-inline-block">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault ">
                        مصادر
                    </label>
                </div>
                <div class="form-check  d-inline-block">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        كورسات
                    </label>
                </div>
            </div>
            <div class="col-6 offset-3">
                <div class="input-group mb-3">
                <span class="input-group-text border-0 bg-transparent" id="basic-addon1">
                 <img src="1.svg">
                </span>
                    <input type="text" class="form-control" placeholder="D:\my books\books 2020" aria-label="Username" aria-describedby="basic-addon1">
                </div>

            </div>

            <div class="col-6 offset-3">
                <div class="input-group mb-3">
                      <span class="input-group-text border-0 bg-transparent" id="basic-addon1">

                        <img src="Layer 1.svg">

                      </span>
                    <input type="text" class="form-control" placeholder="https://adobeacrobat.app.link/Mhhs4GmNsxb" aria-label="Username" aria-describedby="basic-addon1">
                </div>

            </div>
            <div class="col-6 offset-3">
                <div class="input-group mb-3">
                    <button class="btn btn-color me-4 rounded-0" type="button" id="button-addon1">
                        العنوان</button>
                    <input type="text" class="form-control" placeholder="بروتوكولات الشبكة" aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>

            </div>

            <div class="col-6 offset-3">
                <div class="input-group">
                    <button class="btn btn-color me-4 rounded-0" type="button" id="button-addon1">
                        التفاصيل</button>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
            </div>

            <div class="col-6 offset-3 ">
                <div class="container mt-5">
                    <button type="button" class="btn btn-color mt-5 float-end  ">
                        حفظ
                        <i class="bi bi-bookmark ms-2"></i>
                    </button>
                </div></div>
        </div>

    </div>
@endsection
@section('scripts')
@endsection
