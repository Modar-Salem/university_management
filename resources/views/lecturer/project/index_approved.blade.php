@extends('layout.master')

@section('title')
    Pending Project
@endsection
@section('content')
    <div class="container m-center">
        <div class="row g-5">
            @foreach($projects as $project)
                <div class="col-6">
                    <div class="row">
                        <div class=" mt-1 bg-gp p-5 col">
                            <img class="hat-image" src="{{\Illuminate\Support\Facades\URL::asset('assets/images/hat.png')}}" alt="Hat Image">
                            <div class="row col-auto">
                                <div class="fs-4 col-auto" >اسم المشروع: </div>
                                <div class="col">
                                    {{$project->title}}
                                </div>
                            </div>
                            <div class="row col-auto mt-2">
                                <div class="fs-4 col-auto" >اسماء الطلاب: </div>
                                <div class="col">
                                    {{$project->students_name}}
                                </div>
                            </div>
                            <div class="row col-auto  mt-2">
                                <div class="fs-4 col-auto" > شرح بسيط: </div>
                                <div class="col">
                                    {{$project->description}}
                                </div>
                            </div>
                            <div class="row col-auto  mt-2">
                                <div class="fs-4 col-auto" >اسم الأستاذ: </div>
                                <div class="col">
                                    {{$project->master_name}}
                                </div>
                            </div>
                            <div class="row col-auto  mt-2">
                                <div class="fs-4 col-auto" >اسم الدكتور: </div>
                                <div class="col">
                                    {{$project->doctor->name}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
