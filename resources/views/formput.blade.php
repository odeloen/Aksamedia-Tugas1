<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td {
            text-align: left;
            vertical-align: top;
        }
    </style>

</head>
<body>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <form action="{{ route('put.show') }}" method="post">
        {{ method_field('PUT') }}
        {{ csrf_field()  }}
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
        <input type="submit" value="put">        
    </form>
</body>
</html>