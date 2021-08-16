@extends('layouts.layout')

@section('content')
<div class="container">

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('contact-form')}}" method="post">
    @csrf
        <div class="form-group">
            <label for="name">введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">email</label>
            <input type="text" name="email" placeholder="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">введите сообщение</label>
            <textarea type="text" name="message" placeholder="Введите сообщение" id="message" class="form-control"></textarea>
        </div>
        <button type="submit">okay</button>
    </form> 
</div>
   
@endsection