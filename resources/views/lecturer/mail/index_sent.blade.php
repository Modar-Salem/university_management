@extends('layout.master')

@section('title')
    Sent Email
@endsection
@section('content')
<div class="container m-center mt-1">

    <table class="table table-bordered table table-striped align-middle text-center ">
        <thead>
        <tr>
            <td class="bg-font  text-center" colspan="6">
                <h4>
                    عرض البريد المرسل
                </h4>
            </td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="bg-font text-white text-center">
                <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 20px;">
                    الجهة
                </h6>
            </td>
            <td class="bg-font text-white text-center">
                <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 20px;">
                    التاريخ
                </h6></td>
            <td class="bg-font text-white text-center">
                <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 20px;">
                    الرسالة
                </h6>
            </td>
        </tr>

        @foreach($mails as $mail )
            <tr>
                <td colspan="1">
                    <a href="#" style="text-decoration-line: none;">

                        <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 18px;">
                            {{$mail->receiver->name}}
                        </h6></a>
                </td>
                <td>
                    <a href="#" style="text-decoration-line: none;">

                        <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 18px;">
                            {{$mail->created_at}}

                        </h6></a></td>
                <td>
                    <a href="#" style="text-decoration-line: none;">

                        <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 18px;">
                            {{$mail->message}}    </h6></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="dropdown col-auto float-end">
        <a class="dropdown-item" href="{{route('lecturer.mail.create')}}">
            <button class="btn btn-color " type="button" aria-expanded="false">
                إرسال بريد
            </button>
        </a>
    </div>

</div>
@endsection
