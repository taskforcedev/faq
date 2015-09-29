@extends($layout)

@section('content')
    @if( isset($questions) && !empty($questions) )
        @foreach($questions as $q)
            <div class="question">
                <h1>{{ $q->question }}</h1>
            </div>

            <div class="answer">
                <?php echo $q->answer; ?>
            </div>
        @endforeach
    @endif
@stopsection
