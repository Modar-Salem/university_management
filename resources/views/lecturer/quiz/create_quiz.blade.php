@extends('layout.master')

@section('title')
    Create Quiz
@endsection

@section('content')
    <div class="p-5 border rounded-5 position-absolute top-50 start-50 translate-middle color-bg w-50">
        <form action="{{ route('lecturer.quiz.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input class="form-control bg-input" name="period" placeholder="مدة الامتحان" required>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control bg-input" name="question_number" placeholder="عدد الأسئلة" required>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control bg-input" name="correct_question_mark" placeholder="درجة السؤال الصحيح" required>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control bg-input" name="incorrect_question_mark" placeholder="درجة السؤال الخطأ" required>
            </div>
            <div class="mb-3">
                <select name="subject_id" class="border rounded-3 bg-input w-100 select2" required>
                    <option disabled>ادخل المادة</option>
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn color-bg mt-4 mx-5 rounded-4 px-4 fs-4 float-end">
                إنشاء
            </button>
        </form>
    </div>
@endsection
