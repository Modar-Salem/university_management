@extends('layout.master')

@section('title')
    Library Create
@endsection

@section('css')
@endsection

@section('content')
    <form action="{{route('lecturer.library.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container m-center mt-1 mb-4">
            <div class="row">
                <div class="col-12 mb-3 text-center">
                    <!-- Checkbox for sources -->
                    <div class="form-check d-inline-block">
                        <input class="form-check-input" type="checkbox" name="type" value="source" id="flexCheckSource">
                        <label class="form-check-label" for="flexCheckSource">
                            مصادر
                        </label>
                    </div>
                    <!-- Checkbox for courses -->
                    <div class="form-check d-inline-block">
                        <input class="form-check-input" type="checkbox" name="type" value="course" id="flexCheckCourse"
                               checked>
                        <label class="form-check-label" for="flexCheckCourse">
                            كورسات
                        </label>
                    </div>
                </div>
                <div class="col-6 offset-3">
                    <!-- File input (initially visible) -->
                    <div class="input-group mb-3" id="fileInputGroup">
                    <span class="input-group-text border-0 bg-transparent" id="basic-addon1">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('assets/1.svg') }}">
                    </span>
                        <input type="file" name="file" class="form-control" placeholder="انقر لاضافة ملف"
                               aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-6 offset-3">
                    <div class="input-group mb-3">
                      <span class="input-group-text border-0 bg-transparent" id="basic-addon1">

                        <img src="{{\Illuminate\Support\Facades\URL::asset('assets/Layer 1.svg')}}">

                      </span>
                        <input type="text" name="link" class="form-control" placeholder="Add Link" aria-label="Username"
                               aria-describedby="basic-addon1">
                    </div>

                </div>
            </div>
            <div class="col-6 offset-3">
                <div class="input-group mb-3">
                    <button class="btn btn-color me-4 rounded-0" type="button" id="button-addon1">
                        العنوان
                    </button>
                    <input type="text" name="title" class="form-control" placeholder="اضف عنوانا"
                           aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>

            </div>

            <div class="col-6 offset-3">
                <div class="input-group">
                    <button class="btn btn-color me-4 rounded-0" type="button" id="button-addon1">
                        التفاصيل
                    </button>
                    <textarea class="form-control" name="description" aria-label="With textarea"></textarea>
                </div>
            </div>

            <div class="col-6 offset-3 ">
                <div class="container mt-5">
                    <button type="submit"  class="btn btn-color mt-5 float-end  ">
                        حفظ
                        <i class="bi bi-bookmark ms-2"></i>
                    </button>
                </div>
            </div>
        </div>


    </form>

@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var sourceCheckbox = document.getElementById('flexCheckSource');
            var courseCheckbox = document.getElementById('flexCheckCourse');

            function toggleCheckboxes() {
                if (sourceCheckbox.checked) {
                    courseCheckbox.checked = false;
                    sourceCheckbox.checked = true
                } else if (courseCheckbox.checked) {
                    sourceCheckbox.checked = false;
                    courseCheckbox.checked = true;
                }
            }

            sourceCheckbox.addEventListener('click', function () {
                toggleCheckboxes();
            });
            courseCheckbox.addEventListener('click', function () {
                toggleCheckboxes();
            });

        });
    </script>
@endsection

