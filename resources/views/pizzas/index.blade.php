
@extends('layouts.app')
@section('content')
        <!-- <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Pizza List -->
                    <div class="wrapper pizza-index">
                    <h1>Pizza Orders</h1>
                @foreach($pizzas as $pizza)
                <div class="pizza-item">
                    <img src="https://raw.githubusercontent.com/iamshaunjp/laravel-beginners-tutorial/lesson-23/pizzahouse/public/img/pizza.png" alt="pizza icon">
                    <h4><a href="/pizza/{{ $pizza->id }}">{{ $pizza['name'] }}-{{ $pizza['base']  }}</a></h4> 
                </div>
                 
                @endforeach
               </div>
                    
                
        <!-- </div> -->
@endsection