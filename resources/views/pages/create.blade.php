@extends('template.main')
@section('content')
<div class="container">
    <h1>Ajouter une image</h1>
    <form action="/images" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="src">
        <button type="submit" class="btn btn-success">Ajouter</button>
        </form>
</div>
@endsection