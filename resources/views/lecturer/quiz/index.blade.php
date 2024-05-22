@extends('layout.master')

@section('title')
    Show Quiz
@endsection

@section('content')
    <div class="container m-center">
        <table class="table table-striped table-bordered">
            <thead>
            <tr class="bg-primary text-white text-center">
                <th>رقم</th>
                <th>المادة</th>
                <th>مدة الامتحان</th>
                <th>درجة السؤال الخطأ</th>
                <th>درجة السؤال الصحيح</th>
                <th>الدرجة الكاملة</th>
                <th>مجموع الأسئلة</th>
                <th>الإجراءات</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($quizzes as $quiz)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $quiz->subject->name }}</td>
                    <td>{{ $quiz->period }}</td>
                    <td>{{ $quiz->incorrect_question_mark }}</td>
                    <td>{{ $quiz->correct_question_mark }}</td>
                    <td>{{ $quiz->question_number * $quiz->correct_question_mark }}</td>
                    <td>{{ $quiz->question_number }}</td>
                    <td class="text-center">
                        <a href="{{route('lecturer.quiz.delete',$quiz->id)}}" class="bi bi-trash px-2 delet-color fs-5"></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
