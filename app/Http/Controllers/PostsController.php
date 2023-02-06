<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Http\Requests\StorePost;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //dipakai utk menampilkan seluruh data
    public function index()
    {
        //menampilkan seluruh data dari BlogPost
        return view('posts.index', ['posts' => BlogPost::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //utk menambahkan data (menampilkan form tambah data)
    public function create()
    {
        //tambahkan fungsi view() utk menampilkan view create dari folder posts
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //eksekusi tambah data
    public function store(StorePost $request)
    {
        //validasi data
        $validated = $request->validated();

        //simpan data ke database
        $post = BlogPost::create($validated);
        
        //flash message
        session()->flash('status', 'Sukses menambah postingan baru');

        //redirect ke halaman show
        return redirect()->route('posts.show', ['post' => $post->id]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //dipakai utk menampilkan satu data
    public function show($id)
    {
        //menampilkan satu data berdasarkan id
        return view('posts.show', ['post' => BlogPost::findOrFail($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //dipakai utk edit data (bagian menampilkan form edit)
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //mengeksekusi update data
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //eksekusi delete data
    public function destroy($id)
    {
        //
    }
}
