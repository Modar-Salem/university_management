@extends('layout.master')

@section('title')
    Subject Details
@endsection
@section('content')
    <div class="container m-center mt-1">

        <table class="table table-bordered table table-striped ">
            <table class="table table-striped  table-bordered">
                <thead>
                <tr>
                    <td class="bg-font  text-center" colspan="2">
                        <h4>
                            {{$subject->name}}
                        </h4>
                    </td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="bg-font text-white text-center">
                        <h6 style="color: rgb(0, 0, 0);text-align: center; font-size: 20px;">
                            المحاضرين
                        </h6>
                    </td>
                    <td class="bg-font text-white text-center" >
                        <h6 style="color:#757575b0;text-align: center; font-size: 20px;">
                            @foreach($subject->lecturers as $lecturer)
                                {{$lecturer->name }}
                            @endforeach
                        </h6>                   </td>
                </tr>
                <tr>
                    <td colspan="1">
                        <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 18px;">
                            المحاضرات
                        </h6>
                    </td>
                    <td >
                        <a href="{{route('lecturer.subject.lectures' ,$subject->id )}}" style="text-decoration: none;"><h6 class ="hover-h6" style="color: #757575b0;text-align: center; font-size: 18px;">
                            {{$subject->lectures()->count()}}
                            </h6>  </a>
                    </td>

                </tr>
                <tr>
                    <td colspan="1">
                        <h6 style="color: rgb(0, 0, 0);;text-align: center; font-size: 18px;">
                            الفئات
                        </h6>
                    </td>
                    <td >
                        <a href="{{route('lecturer.subject.categories',$subject->id)}}" style="text-decoration: none;"> <h6 class ="hover-h6" style="color: #757575b0;text-align: center; font-size: 18px;">
                                انقر للعرض    </h6>         </a>        </td>
                </tr>

                <tr>
                    <td colspan="1">
                        <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 18px;">
                            المشاريع </h6>
                    </td>
                    <td >
                        <a href="/project.html" style="text-decoration: none;">  <h6 class ="hover-h6" style="color: #757575b0;text-align: center; font-size: 18px;">
                                انقر للعرض
                            </h6>   </a>                </td>
                </tr>

                <tr>
                    <td colspan="1">
                        <h6 style="color: rgb(14, 13, 13);text-align: center; font-size: 18px;">
                            تقسيم المواد</h6>
                    </td>
                    <td >
                        <h6  style="color:#757575b0;text-align: center; font-size: 18px ;">
                            {{$subject->details}}
                        </h6>                   </td>
                </tr>
                </tbody>
            </table>

    </div>
@endsection
