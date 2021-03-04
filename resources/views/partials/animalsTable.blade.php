<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Animal</th>
        <th scope="col">SRC</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($DBAnimal as $item)
            <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->animal}}</td>
            <td>{{$item->src}}</td>
            </tr>
        @endforeach

    </tbody>
  </table>