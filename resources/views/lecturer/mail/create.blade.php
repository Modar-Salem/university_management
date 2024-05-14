@extends('layout.master')

@section('title')
    Send Mail
@endsection
<form action="{{route('lecturer.mail.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

<div class="p-5 border rounded-5 position-absolute top-50 start-50 translate-middle m-center color-bg w-50">

    <div class="row ">
        <div class="col-6">
            <div class="row">
                <div class="col-auto align-items-center d-flex">
                    <h5 style="color: #5a6fa4;">الاسم</h5>
                </div>
                <select name="student_id" class="border rounded-3 bg-input w-100 select2">
                    @foreach ($students as $student)
                        <option value="{{ $student->id }}">{{ $student->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="col-12 mb-2 mt-4">
            <h5 style="color: #5a6fa4;">
                الرسالة
            </h5>

        </div>
        <div class="col-12">
              <input type="text" name="message" class="col border rounded-3 color-bg-input p-2  bg-input w-100">
        </div>

        <div class="row">

            <div class="col">
                <a href="{{route('lecturer.mail.store')}}" style="text-decoration: none;">
                    <button class=" btn btn-primary mt-4 rounded-4 px-5 float-end" type="submit"><h6
                            style="font-size: 20px;">ارسال</h6></button>
                </a>


            </div>

        </div>

    </div>


</div>

</form>
@section('scripts')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Select a student",
                allowClear: true
            });
        });
    </script>

@endsection
