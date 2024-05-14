@extends('layout.master')

@section('title')
    Library
@endsection

@section('css')
@endsection

@section('content')
    <div class="container m-center mt-1">
        <div class="row">
            <div class="col-auto col-auto align-items-center mt-5 float-start">
                <div class="row">

                    <h5 style="color:white;">
                        <div class="col border border-black px-5 py-1  w-100 mb-3 back-co" style="background-color: rgb(110, 107, 107);">
                            مصادر                                                    </div>           </h5>
                </div>
                <div class="row align-items-center ">
                    <h5 style="color:white;">
                        <div class="col border border-black px-5 py-1 w-100  back-co" style="background-color: rgb(110, 107, 107);" >
                            كورسات                                                    </div>           </h5>
                </div>
            </div>


            <div class="col-auto col-auto align-items-center d-flex">

                <table class="table table-striped  table-bordered">
                    <thead>
                    <tr>
                        <td class="bg-font text-white text-center">
                            <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 20px;">
                                عنوان
                            </h6>
                        </td>
                        <td class="bg-font text-white text-center" >
                            <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 20px;">
                                تفاصيل
                            </h6>                   </td>
                        <td class="bg-font text-white text-center" >
                            <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 20px;">
                                رابط / ملف
                            </h6>
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($libraries as $library)
                        <tr>
                            <td class="bg-font text-white text-center">
                                <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 20px;">
                                    {{$library->title}}
                                </h6>
                            </td>
                            <td class="bg-font text-white text-center" >
                                <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 20px;">
                                    {{$library->description}}
                                </h6>
                            </td>
                            @if($library->type == 'source')
                                <td class="bg-font text-white text-center" >
                                    <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 20px;">
                                        {{$library->link}}
                                    </h6>
                                </td>
                            @else
                                <td >
                                    <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 18px;">
                                        <a href="{{\Illuminate\Support\Facades\URL::asset('storage/'.$library->file)}}">
                                            اضغط لتنزيل الملف
                                            <img src="{{\Illuminate\Support\Facades\URL::asset('assets/1.svg')}}" class="ms-1">
                                        </a>
                                    </h6>
                                </td>
                            @endif
                        </tr>

                    @endforeach
                    </tbody>
                </table>


            </div>
        </div>

        <div class="col-12">
            <div class="container mt-1">
                <button type="button" class="btn btn-color mt-5 float-end  ">
                    <a href="{{route('lecturer.library.create')}}" style="text-decoration-line: none;">
                        <h6 style="font-size: 30px; color: white;">+</h6>
                    </a>
                </button>
            </div></div>
    </div>
@endsection
@section('scripts')
@endsection
