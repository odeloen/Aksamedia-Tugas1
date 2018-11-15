@extends('layouts.master')

@section('content')
    <div id="page-wrapper" style="min-height: 347px;">        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Products List</h1>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kategori</th>
                            <th>Nama Produk</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($products))
                            @foreach($products as $product)
                                <tr>
                                    <td>{!!$product->id!!}</td>
                                    <td>{!!$product->category->name!!}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                </tr>
                            @endforeach
                        @endif                        
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->           
        <a href="{{route('product.add')}}"><button type="button" class="btn btn-primary">Add New Product</button></a>        
    </div>
@endsection