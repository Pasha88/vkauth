@extends('todo.layouts.default')

@section('content')
    <div class="container">
        <button type="button" class="btn btn-primary" onclick="location.href='https://oauth.vk.com/authorize?client_id=6442648&display=page&redirect_uri=http://localhost:8000/todo/login&scope=friends&response_type=code&v=5.74'" >Зайти через ВК</button>
        <div class="row">
            Пользователь:
        </div>
        <div class="row">
            <img src="{{ $mainUser->photo_50 }}"/>
        </div>
        <div class="row">
            <a href='https://vk.com/id{{ $mainUser->id  }}'>{{ $mainUser->first_name }} {{ $mainUser->last_name }}</a>
        </div>
        <div class="row">
            <b>Его друзья:</b>
        </div>
    @foreach ($friends as $friend)
        <div class="row">
            <img src="{{ $friend->photo_50 }}"/>
        </div>
        <div class="row">
            <a href='https://vk.com/id{{ $friend->id }}'>{{ $friend->first_name }} {{ $friend->last_name }}</a>
        </div>
    @endforeach
    </div>
    @stop
<script src="http://code.jquery.com/jquery-latest.min.js"   type="text/javascript">
</script>
