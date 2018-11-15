@extends('layouts.master')

@section('content')
    <div id="page-wrapper" style="min-height: 347px;">        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add New Product</h1>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <!-- /.col-lg-12 -->
        </div>                
        <form action="{{ route('product.addhandler') }}" method="post">
            @csrf
            <table> 
                <tr class="form-group">
                    <td>Kategori</td>
                    <td>
                        <select class="form-control" name="category_id">
                            @if(!empty($categories))
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            @endif                    
                        </select>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>Nama Produk :</td>
                    <td><input class="form-control" type="text" name="name"></td>
                </tr>
                <tr class="form-group">
                    <td>Deskripsi Produk :</td>
                    <td><textarea class="form-control" type="text" name="description"></textarea></td>
                </tr>
                <tr class="form-group">
                    <td>Harga Produk :</td>
                    <td><input class="form-control" type="text" name="price"></td>
                </tr>
            </table>
            <input class="btn btn-primary" type="submit" value="Simpan">            
        </form>
        <a href="{{route('product.list')}}"><button type="button" class="btn btn-danger">Cancel</button></a>
    </div>
@endsection