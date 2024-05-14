re@extends('layout.master')

@section('title')
    Inbox Mail
@endsection
@section('content')
    <div class="p-5 border rounded-5 position-absolute top-50 start-50 translate-middle m-center color-bg w-50">

        <div class="row ">
            <div class="col-6">

                <div class="row">
                    <div class="col-auto col-auto align-items-center d-flex">
          <span>
            <h5 style="color: #5a6fa4;">
              الاسم           </h5>

          </span>
                    </div>
                    <div class="col border rounded-3 color-bg-input  bg-input w-100">
                        {{$mail->sender->name}}
                    </div>
                </div>

            </div>

            <div class="col-6">
                <div class="row">
                    <div class="col-auto col-auto align-items-center d-flex">
          <span >
           <h5 style="color: #5a6fa4;">القسم</h5>

          </span>
                    </div>
                    <div class="col border rounded-3 color-bg-input  bg-input w-100">
                        {{$mail->sender->section->name}}
                    </div>
                </div>

            </div>


            <div class="row mt-4 ">
                <div class="col-6">

                    <div class="row">
                        <div class="col-auto col-auto align-items-center d-flex">
              <span>
                <h5 style="color: #5a6fa4;">
                    السنة
                </h5>

              </span>
                        </div>
                        <div class="col border rounded-3 color-bg-input  bg-input w-100">
                            {{$mail->student->year->name}}
                        </div>
                    </div>

                </div>

                <div class="col-6">
                    <div class="row">
                        <div class="col-auto col-auto align-items-center d-flex">
              <span >
               <h5 style="color: #5a6fa4;">التاريخ</h5>

              </span>
                        </div>
                        <div class="col border rounded-3 color-bg-input  bg-input w-100">
                            {{$mail->created_at}}
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-12 mb-2 mt-4">
                <h5 style="color: #5a6fa4;">
                    الرسالة
                </h5>

            </div>
            <div class="col-12">
                <div class="col border rounded-3 color-bg-input p-2  bg-input w-100">
                    <h5>
                        {{$mail->message}}
                    </h5>
                </div>      </div>

            <div class="row">
                <div class="col">
                    <a href="{{route('lecturer.mail.index')}}" style="text-decoration: none;">
                        <button class=" btn btn-success mt-4 rounded-4 px-5 float-start" type="button"><h6
                                style="font-size: 20px;">تم</h6></button></a>
                </div>
            </div>

        </div>



    </div>
@endsection
