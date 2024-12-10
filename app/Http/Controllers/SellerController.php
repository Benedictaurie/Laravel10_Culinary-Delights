<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\Seller;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //deklarasi variabel title
        $title="Daftar Seller";
        $seller=new Seller;
        //melakukan pengecekan kondisi
        if(isset($_GET['s'])){
            $s=$_GET['s'];
            $seller=$seller->where('seller_name', 'like', "%$s%");
        }
        //menambahkan filter pencarian
        if(isset($_GET['package_id'])&&$_GET['package_id']!=''){
            $seller=$seller->where('package_id', $_GET['package_id']);
        }
        $seller=Seller::paginate(5);
        $packages=Packages::all();
        return view('admin.daftarseller', compact('title', 'seller', 'packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response*/
    public function create()
    {
        $title="Create Seller";
        $seller=Seller::all();
        return view('admin.inputseller', compact('title', 'seller'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response*/

    public function store(Request $request)
    {
        //set pesan kesalahan
        $messages = [
            'required'=> 'Kolom :attribute harus lengkap',
            'numeric'=> 'Kolom :attribute harus angka',
            'file'=> 'Perhatikan format dan ukuran file'
        ];
        //untuk menyimpan data
        $validasi=$request->validate([
            'seller_id' => 'required',
            'seller_name' => 'required',
            'seller_desc' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
            'status' => ''
        ], $messages);
        try{
            $response=Seller::create($validasi);
            return redirect('seller');
        }catch (\Exception $e){
            echo $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response*/
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response*/

    public function edit(int $id)
    {
        //menampilkan data edit
        $title="Input Seller";
        $packages=Packages::all();
        $seller=Seller::find($id);
        if($seller != NULL){
            $title="Edit Data ".$seller->seller_name;
            return view('admin.inputseller', compact('title', 'packages', 'seller'));
        }else{
            return view('admin.inputseller', compact('title', 'packages'));
        }
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response*/

    public function update(Request $request, int $id)
    {
        //untuk save data
        $validasi=$request->validate([
            'seller_id' => 'required',
            'seller_name' => 'required',
            'seller_desc' => 'required',
            'image' => 'required',
            'status' => ''
        ]);
        try{
            //mengambil kondisi hanya saat file image diisi
            // if($request->file('image')){
            //     $fileName = time().$request->file('image')->getClientOriginalName();
            //     $path = $request->file('image')->storeAs('assets/uploads', $fileName);
            //     $validasi['image']=$path;
            // }
            $response=Seller::find($id);
            $response->update($validasi);
            return redirect('seller');
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response*/
    public function destroy($id)
    {
        //Delete data berdasarkan Primary Key
        try{
            $seller=Seller::find($id);
            $seller->delete();
            return redirect('seller');
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }
}
