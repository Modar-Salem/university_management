@extends('layout.master')

@section('title')
    Subjects
@endsection
@section('content')
    <div class="container m-center mt-1">

        <table class="table table-striped noto-naskh-arabic-uniquifier table-bordered">
            <thead>
            <tr>
                <td class="bg-font text-center" colspan="3">
                    <h4>
                        المواد المستلمة </h4>
                </td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="bg-font text-center">
                    <h6 style="text-align: center; font-size: 20px;">
                        المادة
                    </h6>

                </td>
                <td class="bg-font text-center">

                    <h6 style="text-align: center; font-size: 20px;">
                        القسم </h6></td>
                <td class="bg-font  text-center">

                    <h6 style="text-align: center; font-size: 20px;">
                        السنة
                    </h6>
                </td>
            </tr>

            @foreach($subjects as $subject)
                <tr>
                    <td colspan="1">
                        <a href="{{route('lecturer.subject.index_details',$subject->id)}}" style="text-decoration: none;">

                            <h6 style="text-align: center; font-size: 18px;">
                                {{$subject->name}} </h6></a>
                    </td>
                    <td>
                        <a href="{{route('lecturer.subject.index_details',$subject->id)}}" style="text-decoration: none;">
                            <h6 style="text-align: center; font-size: 18px;">
                                {{$subject->section->name}}
                            </h6></a></td>
                    <td>
                        <a href="{{route('lecturer.subject.index_details',$subject->id)}}" style="text-decoration: none;">

                            <h6 style="text-align: center; font-size: 18px;">
                                {{$subject->year->name}} </h6></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
