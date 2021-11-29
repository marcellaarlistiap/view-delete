@extends('layouts.default');

@section('content')
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Produk</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>id</th>
                <th>product</th>
                <th>description</th>
                <th>stock</th>
                <th>price</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($getProduct as $item)
                <tr>
                    <td>{{$item -> id}}</td>
                    <td>{{$item -> name}}</td>
                    <td>{{$item -> description}}</td>
                    <td>{{$item -> stock}}</td>
                    <td>{{$item -> price}}</td>
                    <td>
                        <a href="{{route('productDelete', $item->id)}}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>
                @endforeach


            </tbody>
          </table>
        </div>


      </div>



@endsection