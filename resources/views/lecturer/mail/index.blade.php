@extends('layout.master')

@section('title')
    Inbox Mail
@endsection
@section('content')
    <div class="container m-center mt-1">

        <table class="table table-bordered table table-striped align-middle text-center">
            <thead>
            <tr>
                <td class="bg-font  text-center" colspan="6">
                    <h4>
                        عرض البريد الوارد
                    </h4>
                </td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="bg-font text-white text-center">
                    <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 20px;">
                        المرسل
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
            @foreach($mails as $mail)
                <tr>
                    <td colspan="1">
                        <a href="{{route('lecturer.mail.show' , $mail->id)}}" style="text-decoration-line: none;">
                            <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 18px;">
                                {{$mail->sender->name}}
                            </h6>
                        </a>

                    </td>
                    <td>
                        <a href="{{route('lecturer.mail.show' , $mail->id)}}" style="text-decoration-line: none;">
                            <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 18px;">
                                {{$mail->created_at}}
                            </h6></a></td>
                    <td>
                        <a href="{{route('lecturer.mail.show' , $mail->id)}}" style="text-decoration-line: none;">
                            <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 18px;">
                                {{$mail->message}}
                            </h6></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
