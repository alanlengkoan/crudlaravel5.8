<?php

namespace App\Http\Controllers;

// untuk database
use Illuminate\Support\Facades\DB;
// untuk get, post, request
use Illuminate\Http\Request;

class Crud extends Controller
{
    // untuk halaman home
    public function home()
    {
        // $view = ['nama' => 'Alan Saputra Lengkoan'];

        $view = [
            'title' => 'Home | Laravel 5.8',
        ];

        return view('content/home', $view);
    }

    // untuk halaman about
    public function about()
    {
        $view = [
            'title' => 'About | Laravel 5.8',
            'nama'  => 'Alan Saputra Lengkoan',
            'umur'  => 21
        ];

        return view('content/about', $view);
    }

    // untuk halaman data
    public function data()
    {
        $data = DB::table('tb_data')->get();
        
        $view = [
            'title' => 'Data Artikel | Laravel 5.8',
            'data' => $data
        ];

        return view('content/data', $view);
    }

    // untuk form add
    public function add()
    {
        $view = [
            'title' => 'Add Data | Laravel 5.8',
        ];

        return view('content/add', $view);
    }

    // untuk proses insert data
    public function add_action(Request $post)
    {
        $input = $post->all();

        $data = [
            'id_data' => $input['inpiddata'],
            'judul'   => $input['inpjudul'],
            'link'    => $input['inplink'],
            'text'    => $input['inptext']
        ];

        DB::table('tb_data')->insert($data);

        return redirect('/data');
    }

    // untuk form ups
    public function upd($id)
    {
        $data = DB::table('tb_data')->where('id', $id)->get();

        $view = [
            'title' => 'Upd Artikel | Laravel 5.8',
            'data' => $data
        ];

        return view('content/upd', $view);
    }

    // untuk proses update data
    public function upd_action(Request $post, $id)
    {
        $input = $post->all();

        $data = [
            'id_data' => $input['inpiddata'],
            'judul'   => $input['inpjudul'],
            'link'    => $input['inplink'],
            'text'    => $input['inptext']
        ];
        
        DB::table('tb_data')->where('id', $id)->update($data);

        return redirect('/data');
    }

    // untuk proses delete
    public function del($id)
    {
        DB::table('tb_data')->where('id', $id)->delete();

        return redirect('/data');
    }
}
