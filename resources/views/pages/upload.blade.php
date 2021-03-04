@extends('template.main')
@section('content')
<div class="container">
    <h1>Ajouter un animal</h1>
    <form action="/animals/create" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Nom de l'animal:</label>
            <input type="text" name="animal">
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
              <input type="radio" aria-label="Radio button for following text input">
              </div>
            </div>
            <input type="text" class="form-control" aria-label="Text input with radio button">
          </div>

        <button type="submit" class="btn btn-success">Ajouter</button>
        </form>
</div>
@endsection