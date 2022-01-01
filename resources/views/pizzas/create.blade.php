@extends('layouts.layout')

@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a New Pizza</h1>
        <form action="/pizzas" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label for="name">Your name:</label>
            <input type="text" id="name" name="name">
            <label for="type">Choose Pizza Type:</label>
            <select name="type" id="type">
                <option value="margherita">Margherita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>
            <label for="base">Choose Pizza Base:</label>
            <select name="base" id="base">
                <option value="cheesy crust">cheesy crust</option>
                <option value="garlic crust">garlic crust</option>
                <option value="thin & crispy">thin & crispy</option>
                <option value="thick">thick</option>
            </select>
            <input type="submit" value="Order Pizza">
        </form>
    </div>
@endsection