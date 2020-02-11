@extends('atribut.atribut')

@section('title', $title)

@section('content')

    <h2>Ubah Data</h2>

    <form action="/upd_action/{{ $data[0]->id }}" method="post">
        @method('PUT')
        @csrf
        <table>
            <tr>
                <td>Id Data</td>
                <td> <input type="text" name="inpiddata" value="{{ $data[0]->id_data }}" /> </td>
            </tr>
            <tr>
                <td>Judul</td>
                <td> <input type="text" name="inpjudul" value="{{ $data[0]->judul }}" /> </td>
            </tr>
            <tr>
                <td>Link</td>
                <td> <input type="text" name="inplink" value="{{ $data[0]->link }}" /> </td>
            </tr>
            <tr>
                <td>Text</td>
                <td> <input type="text" name="inptext" value="{{ $data[0]->text }}" /> </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="upd" value="Upd" /> 
                </td>
            </tr>
        </table>
    </form>

@endsection