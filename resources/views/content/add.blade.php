@extends('atribut.atribut')

@section('title', $title)

@section('content')

    <h2>Tambah Data</h2>

    <form action="/add_action" method="post">
        @csrf
        <table>
            <tr>
                <td>Id Data</td>
                <td> <input type="text" name="inpiddata" /> </td>
            </tr>
            <tr>
                <td>Judul</td>
                <td> <input type="text" name="inpjudul" /> </td>
            </tr>
            <tr>
                <td>Link</td>
                <td> <input type="text" name="inplink" /> </td>
            </tr>
            <tr>
                <td>Text</td>
                <td> <input type="text" name="inptext" /> </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="add" value="Add" /> 
                </td>
            </tr>
        </table>
    </form>

@endsection