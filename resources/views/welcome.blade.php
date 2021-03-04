@extends('template.main')
@section('content')
<section class="container">
    <h1>Welcome in Zootapia</h1>
    <h2>Voici les animaux de la coding 15: </h2>
    @include('partials.animalsTable')
        

</section>
@endsection