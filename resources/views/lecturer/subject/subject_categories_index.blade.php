@extends('layout.master')

@section('title')
    Subject Categories
@endsection
@section('content')
    <div class="container ">
        <div class="row">
            @foreach($categories as $category)
                <div class="col-3">
                    <table class="table table-striped  table-bordered">
                        <thead>
                        <tr>
                            <td class="bg-font  text-center" colspan="2">
                                <h4>
                                            {{$category->name}} </h4>
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category->students as $student)
                        <tr>
                            <td class="bg-font  text-center" colspan="3">
                                <h6 style="text-align: center; font-size: 20px;">
                                    {{$student->name}}
                                </h6>

                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach

        </div>
    </div>
@endsection
