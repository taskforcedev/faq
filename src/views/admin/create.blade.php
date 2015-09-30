@extends($layout)

@section('content')
<form action="{{ route('laravel-faq.faq.store') }}" method="POST">
    <div class="input-group">
        <label for="question">Question</label>
        <input type="text" name="question" placeholder="question text." />
    </div>

    <div class="input-group">
        <label for="answer">Answer</label>
        <textarea name="answer"></textarea>
    </div>

    <input type="submit" class="btn btn-primary" value="Create" />
</form>
@endsection
