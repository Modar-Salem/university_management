@extends('layout.master')

@section('title')
    Add Quiz Questions
@endsection

@section('content')
    <div class="p-5 border rounded-5 border rounded-5 m-center color-bg col-8 offset-2 color-bg">
        <form action="{{ route('lecturer.quiz_question.store', $quiz_id) }}" method="POST">
            @csrf
            <div>
                <h3 style="text-align: center;">اكتب تفاصيل السؤال</h3>
            </div>
            <div class="mb-3">
                <input class="form-control bg-input" name="question" placeholder="اكتب سؤال">
            </div>
            <div class="mb-3">
                <input class="form-control bg-input" name="option1" placeholder="اختيار A" required>
            </div>
            <div class="mb-3">
                <input class="form-control bg-input" name="option2" placeholder="اختيار B" required>
            </div>
            <div class="mb-3">
                <input class="form-control bg-input" name="option3" placeholder="اختيار C" required>
            </div>
            <div class="mb-3">
                <input class="form-control bg-input" name="option4" placeholder="اختيار D" required>
            </div>
            <div class="mb-3">
                <select class="form-control bg-input" name="correct_option" required>
                    <option value="1">اختيار A</option>
                    <option value="2">اختيار B</option>
                    <option value="3">اختيار C</option>
                    <option value="4">اختيار D</option>
                </select>
            </div>
            <button type="submit" class="btn color-bg float-end mx-5 fs-4">
                حفظ
            </button>
        </form>
    </div>
@endsection
