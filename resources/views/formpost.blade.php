@extends('layouts.master')

@section('content')
    <div id="page-wrapper" style="min-height: 347px;">
        <div class="row">Form</div>
        <form action="{{ route('post.show') }}" method="post">
            @csrf
            <table>
                <tr class="form-group">
                    <td>Nama :</td>
                    <td><input class="form-control" type="text" name="nama"></td>
                </tr>
                <tr class="form-group">
                    <td>Tempat Lahir :</td>
                    <td><input class="form-control" type="text" name="tempat-lahir"></td>
                </tr>
                <tr class="form-group">
                    <td>Tanggal Lahir :</td> 
                    <td><input class="form-control" type="date" name="tanggal-lahir"></td>
                </tr>
                <tr class="form-group">
                    <td>Jenis Kelamin :</td>                    
                    <td>
                        <div class="radio">
                            <label>
                                <input type="radio" name="jenis-kelamin" id="optionsRadios1" value="L" checked>Laki-laki
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="jenis-kelamin" id="optionsRadios1" value="P" checked>Perempuan
                            </label>
                        </div>                        
                    </td>
                </tr>
                <tr class="form-group">
                    <td>Email : </td>
                    <td><input class="form-control" type="email" name="email"></td>
                </tr>
                <tr class="form-group">
                    <td>Alamat : </td>
                    <td><textarea class="form-control" name="alamat" rows="10" cols="30"></textarea></td>
                </tr>
            </table>
            <input class="btn btn-default" type="submit" value="post">    
        </form>        
    </div>
@endsection

    <!--<form action="{{ route('post.show') }}" method="post">
        @csrf
        <table>
        <tr>
            <td>Nama :</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Tempat Lahir :</td>
            <td><input type="text" name="tempat-lahir"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir :</td> 
            <td><input type="date" name="tanggal-lahir"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin :</td>
            <td><input type="radio" name="jenis-kelamin" value="L">Laki-laki<br>
            <input type="radio" name="jenis-kelamin" value="P">Perempuan</td>
        </tr>
        <tr>
            <td>Email : </td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Alamat : </td>
            <td><textarea name="alamat" rows="10" cols="30"></textarea></td>
        </tr>
        </table>
        <input type="submit" value="post">        
    </form>
    -->