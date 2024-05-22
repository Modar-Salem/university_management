@extends('layout.master')

@section('title')
    Practical Marks
@endsection

@section('content')
    <div class="container m-center">

        <table
            class="table table-bordered table table-striped align-middle text-center ">

            <tbody>
            <tr class="fs-5">
                <th rowspan="2">
                    رقم
                </th>
                <th rowspan="2">
                    اسم الطالب
                </th>
                <th rowspan="1">
                    امتحان
                </th>
            </tr>
            <tr>
                <td class="text-danger">
                    {{$subject->lab_degrees}}
                </td>
            </tr>
            @foreach($marks as $mark)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$mark->student->name}}</td>
                    <td>{{$mark->lab_mark}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="container mt-5">
            <button type="button" class="btn btn-color mt-5 float-end  " data-bs-toggle="modal" data-bs-target="#addMarkModal">
                اضافة علامة
                <i class="bi bi-bookmark ms-2"></i>
            </button>
        </div>
    </div>

    <div class="modal fade" id="addMarkModal" tabindex="-1" aria-labelledby="addMarkModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMarkModalLabel">Add New Mark</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('lecturer.mark.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="subject_id" value="{{ $subject->id }}">
                        <div class="mb-3">
                            <label for="student_id" class="form-label">Student</label>
                            <select class="form-select" name="student_id" required>
                                @foreach($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="mark" class="form-label">Mark</label>
                            <input type="number" class="form-control" name="mark" required>
                        </div>
                        <div class="mb-3">
                            <label for="lab_mark" class="form-label">Lab Mark (optional)</label>
                            <input type="number" class="form-control" name="lab_mark">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Mark</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
