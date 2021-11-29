@extends('layouts.default');

@section('content')
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Produk</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Stock</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Stock">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Price">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>


      </div>



@endsection