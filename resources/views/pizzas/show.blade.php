
@extends('layouts.app')
@section('content')
        <div class="wrapper pizza-details">
            <h1>Order for {{$pizzas->name}}</h1>
            <p class="type">Type - {{$pizzas->type}}</p>
            <p class="base">Base - {{$pizzas->base}}</p>
            <p class="toppings"> Extra Toppings </p>
            <ul>
                @foreach($pizzas->toppings as $topping)
                <li>{{ $topping }}</li>
                @endforeach
            </ul>
            <form action="{{ route('pizzas.destroy',$pizzas->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit">Complete Order</button>
            </form>
        </div>
        
        <a href="/pizza" class="back button">Back To All Pizzas</a>

@endsection