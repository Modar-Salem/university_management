@extends('layout.master')

@section('title')
    Subject Lectures
@endsection
@section('content')
    <div class="container  m-center">
        <div class="col-6 offset-3">
            <table class="table table-striped table table-bordered">
                <tbody>
                @foreach($lectures as $lecture)
                    <tr>
                        <td class="bg-font text-white text-center" colspan="1">
                            <h6 style="color: rgb(5, 5, 5);text-align: center; font-size: 20px;">
                                <img src="{{\Illuminate\Support\Facades\URL::asset('assets/Group 714.svg')}}" class="me-3">
                                {{$lecture->name}}
                            </h6>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    </div>
@endsection
