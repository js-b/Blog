<h1>DBTest</h1>
<a href="/">Главная</a>
@foreach($posts as $post) <!-- от переменной до ключа -->
<br>
{{$post->title }} <!-- Берем данные из колонки title -->
<br>
{{$post->text }} <!-- Берем данные из колонки text -->
<br>
@endforeach