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
            <td>
              <form action="/animals/{{$item->id}}" method="POST">
                @csrf
                @method("DELETE")
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            </td>
            <td>
              <a href="/download-animal/{{$item->id}}" class="btn btn-success">Download</a>
            </td>
            </tr>
        @endforeach

    </tbody>
  </table>