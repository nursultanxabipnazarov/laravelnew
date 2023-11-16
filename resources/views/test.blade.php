
@foreach ($posts as $post )
    {{$post->text}} <br><br>
    {{$post->title}}
@endforeach