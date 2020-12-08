@extends('/layout/main')

@section('container')

<a class="btn btn-primary my-4" href="">Tambah Data</a>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $prd)
        <tr>
            <th scope="row"> {{ $loop->iteration }}</th>
            <td>{{$prd->name}}</td>
            <td>{{$prd->price}}</td>
            <td>{{$prd->action}}</td>
                <a href="human/detail/{{ $prd->id }}" class="btn btn-success">Detail</a>
                <a href="human/delete/{{ $prd->id }}" class="btn btn-danger">Delete</a>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection