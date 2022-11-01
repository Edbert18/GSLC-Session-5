@extends('template')

@section('content')
<div class="container justify-content-center">

    <h3>Congratulations! Here is your Prize!</h3>
    <br>
    @switch($id)
        @case(1)
            <img class="rounded" style="width: 400px" src="https://img.pokemondb.net/artwork/avif/bulbasaur.avif" alt="">
        @break
        @case(2)
            <img class="rounded" style="width: 400px" src="https://img.pokemondb.net/artwork/avif/charmander.avif" alt="">
        @break
        @case(3)
            <img class="rounded" style="width: 400px" src="https://img.pokemondb.net/artwork/avif/squirtle.avif" alt="">
        @break
        @case(4)
            <img class="rounded" style="width: 400px" src="https://img.pokemondb.net/artwork/avif/pikachu.avif" alt="">
        @break
    @endswitch
</div>

@include('footer')

@endsection