@extends('layout.layout')

@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a New Pizza</h1>
        <form action="/pizzas" method="POST">
            @csrf
            <label for="name">Your name:</label>
            <input type="text" name="name" id="name" required>
            <label for="type">Choose type of pizza:</label>
            <select name="type" id="type">
                <option value="margherita">Margherita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>
            <label for="base">Choose crust:</label>
            <select name="base" id="base">
                <option value="thick">Thick</option>
                <option value="thin & crispy">Thin & Crispy</option>
                <option value="cheese crust">Cheese Crust</option>
                <option value="garlic crust">Garlic Crust</option>
            </select>
            <input type="submit" value="Order Pizza">
        </form>
    </div>
@endsection
