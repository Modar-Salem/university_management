<header class="border-bottom border-3">
    <div class="bg-topnav py-3">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/person.jpg')}}" class="rounded-circle" width="50" alt="" />
                    <a href="{{route('student.dashboard')}}"><span class="text-white fw-bold">مرحباً {{\Illuminate\Support\Facades\Auth::guard('student')->user()->name}}</span></a>

                </div>
                <div class="col-6 d-flex align-items-center justify-content-end">
                    <div class="dropdown">
                        <i class="bi bi-bell fs-5 me-4" data-bs-toggle="dropdown"></i>
                        <div class="dropdown-menu custom bg-white">
                            <div class="col-12 py-2 border-bottom">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/person.jpg')}}" class="rounded-circle" width="50">
                                    </div>
                                    <div class="col">
                                        <p class="text-secondary m-0">أحمد عياش</p>
                                        <p class="m-0">دكنور بالنسبة الى.............................</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 py-2">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="{{\Illuminate\Support\Facades\URL::asset('assets/images/person.jpg')}}" class="rounded-circle" width="50">
                                    </div>
                                    <div class="col">
                                        <p class="text-secondary m-0">أحمد عياش</p>
                                        <p class="m-0">دكنور بالنسبة الى.............................</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('lecturer.logout')}}">
                       <span class="fw-bold">تسجيل الخروج</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto ">
                        <li class="nav-item dropdown" >
                            <a class="nav-link  px-2 me-2 " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-stack me-1"></i>
                                المكتبة
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('lecturer.library.create')}}">إضافة</a></li>
                                <li><a class="dropdown-item" href="{{route('lecturer.library.index')}}">عرض</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link px-2 ">
                                <i class="bi bi-box me-2"></i>
                                البريد
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('lecturer.mail.index')}}">الوارد</a></li>
                                <li><a class="dropdown-item" href="{{route('lecturer.mail.index_sent')}}">المرسل</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" >
                            <a class="nav-link px-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-stack me-2"></i>
                                مشاريع التخرج
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('lecturer.project.index')}}">الطلبات الواردة </a></li>
                                <li><a class="dropdown-item" href="{{route('lecturer.project.index_approved')}}">الطلبات المقبولة</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" >
                            <a class="nav-link px-3 me-4 " href="{{route('lecturer.mark.index')}}" role="button" >
                                <i class="bi bi-stack me-2"></i>
                                العلامات
                            </a>

                        </li>
                        <li class="li-logo">
                            <img class="logo" src="{{\Illuminate\Support\Facades\URL::asset('assets/images/logo.png')}}" alt="" />
                        </li>
                        <li class="nav-item dropdown" >
                            <a class="nav-link px-3 ms-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-stack me-2"></i>
                                الاختبارات
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('lecturer.quiz.create')}}">إضافة</a></li>
                                <li><a class="dropdown-item" href="{{route('lecturer.quiz.index')}}">عرض</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link px-3" href="{{route('lecturer.subject.index')}}">
                                <i class="bi bi-book me-2"></i>
                                المواد
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3  " href="{{route('lecturer.program.index')}}">
                                <i class="bi bi-file-spreadsheet-fill me-2"></i>
                                البرنامج
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  px-3" href="{{route('lecturer.profile')}}">
                                <i class="bi bi-person-circle me-2"></i>
                                البروفايل
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
