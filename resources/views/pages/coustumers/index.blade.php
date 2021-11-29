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
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($customer as $item)
                <tr>
                    <td>{{$item -> id}}</td>
                    <td>{{$item -> email}}</td>
                    <td>{{$item -> address}}</td>
                    <td>{{$item -> phone}}</td>

                    <td>
                        <a href="{{route('customer.destroy', $item->id)}}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>
                @endforeach


            </tbody>
          </table>
        </div>


      </div>



@endsection