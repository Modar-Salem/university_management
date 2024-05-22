@extends('layout.master')

@section('title')
    Profile
@endsection
@section('content')
    <form action="{{route('lecturer.profile.update')}}" method="POST">
        @csrf
        <div class="container m-center">
            <div class="row">
                <div class="col-7">
                    <label for="user_name" class="form-label ">اسم المستخدم</label>
                    <input type="text" name="name" id="user_name" class="form-control bg-colorin" aria-describedby="userNameHelpBlock" required placeholder="Enter your username" value="{{$lecturer->name}}">
                </div>
                <div class="col-5">
                    <div class="container mx-5"><img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/person.jpg')}}" class="rounded-circle" width="190"/></div>
                    <div class="container mx-5 mt-5">
                        <button type="submit" class="btn btn-color mt-5 mx-5  ">
                            حفظ
                            <i class="bi bi-bookmark ms-2"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection
