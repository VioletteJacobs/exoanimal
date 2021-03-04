@extends('template.main')
@section('content')
<section class="container">
    <h1>Welcome in Zootapia</h1>
    <h2>Voici les naimaux: </h2>
    @include('partials.animalsTable')
        

</section>
@endsection