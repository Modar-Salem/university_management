@extends('layout.master')

@section('title')
    Marks
@endsection

@section('content')

    @foreach($subjects as $subject)
        <div class="container m-center mt-1 ">
            <div class=" row justify-content-center">
                <div class="col-auto me-4  border py-2 border-black mb-5 "
                     style="background-color: silver;">
                    <h4 class="text-center" style="color: white"> {{$subject->name}} </h4>
                </div>
                <div class="col-auto me-4 border py-2 rounded-3 mb-5"
                     style="background-color: hsl(182.25deg 33.06% 52.55%);">
                    <a href="{{route('lecturer.mark.practical_index' , $subject->id)}}" style="text-decoration-line: none;">
                        <h4 class="text-center fz" style="color: white"> عملي</h4></a>
                </div>
                <div class=" col-auto me-4 border py-2 rounded-3 mb-5"
                     style="background-color: #5a6fa4;">
                    <a href="{{route('lecturer.mark.theoretical_index' , $subject->id)}}" style="text-decoration-line: none;">
                        <h4 class="text-center fz" style="color: white"> نظري </h4></a>
                </div>
            </div>
        </div>
    @endforeach

@endsection
