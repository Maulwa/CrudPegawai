<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Alert;

class indexController extends Controller
{


    public $teacher;
    // membuat instance dari model artikel
    public function __construct()
    {
       $this->teacher = new Teacher;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function teacher()
    {
        //
        $data = Teacher::all();
        return view('template.Teachers.table',compact('data'));
        // dd('template.teachers.table');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function tambah()
     {
         //
         $data = Teacher::all();
         return view('template.Teachers.tambah',compact('data'));
        //  dd('teachers.tambah');
     }


    public function store(Request $request)
    {
        //
        $data = Teacher::all();

        $rules = [
            'nama' => 'min:3|max:20',
            'phone' => 'min:12|max:100',
            'email' => 'required',
            'address' => 'required',
            'photo' => 'required|max:500|mimes:jpg,png,jpeg',
            'perusahan'=> 'required'
        ];
 
        $messages = [
            'required' => ":attribute gak boleh kosong",
            'min' => ":attribute kurang banyak",
            'max' => ":attribute kebanyakan / ukuran file terlalu besar",
            'mimes' => "ekstensi file tidak di izinkan"
 
        ];
 
        $this->validate($request, $rules, $messages);
 
        //tangkap request user
        $nm = $request->photo;
 
        //ubah nama file yang akan disimpan kedalam DB
        $namaFile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();
 
        $this->teacher->name = $request->nama;
        $this->teacher->phone = $request->phone;
        $this->teacher->email = $request->email;
        $this->teacher->address = $request->address;
        $this->teacher->Photo = $namaFile;
        $this->teacher->Perusahan = $request->perusahan;
 
        //simpan file gambar ke direktori upload yang ada didalam public
        $nm->move(public_path() . '/upload', $namaFile);
 
        // simpan data menggunakan method save()

        $simpan = $this->teacher->save();
     


       

        // redirect halaman serta kirimkan pesan berhasil
        return redirect()->route('table');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $show = Teacher::findOrFail($id);
        // dd($show);
        return view('template.Teachers.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Teacher::all();

        $edit = Teacher::findOrFail($id);
        return view('template.Teachers.edit', compact('edit','data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $update = Teacher::findOrFail($id);
        if($update->nama == $request->nama && $update->phone == $request->phone && $update->email == $request->email && $update ->address == $request ->address && $update->perusahan == $request->perusahan){
            return redirect()->route('table');
        }else{


            $update->nama = $request->nama;
            $update->phone = $request->phone;
            $update->email = $request->email;
            $update->address = $request->address;
            $update->perusahan = $request ->perusahan;

            // 12345678.jpg
            $gambarLama =  $update->photo;
            if (!$request->photo) {
                $update->photo = $gambarLama;
            } else {
                //buat nyari nama file yang ada di folder upload
                if ($update->photo) {
                    $path = 'upload/' . $update->photo;
                    if (File::exists($path)) {
                        File::delete($path);
                        $nm = $request->photo;
                        $namaFile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();
                        $update->photo = $namaFile;
                        $nm->move(public_path() . '/upload', $namaFile);
                    }
                } elseif ($request->photo != $gambarLama) {
                    // echo "gambar isinya beda";
                    $nm = $request->photo;
                    //ubah nama file yang akan disimpan kedalam DB
                    $namaFile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();
                    $update->photo = $namaFile;
                    $nm->move(public_path() . '/upload', $namaFile);
                }
            }
            Alert::success('Success Title', 'Success Message');
            $update->save();
            return redirect()->route('table')->with('status', 'Data artikel berhasil di update');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Teacher::findOrFail($id);
        $path = 'upload/'.$destroy->photo;
        if($destroy->photo){
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $destroy->delete();
        return redirect()->route('table')->with('status', 'Data artikel berhasil di hapus');
    }
}
