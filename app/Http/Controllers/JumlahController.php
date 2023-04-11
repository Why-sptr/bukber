<?php

namespace App\Http\Controllers;

use App\Models\DataGenerasi;
use App\Models\DataPanitia;
use DB;
use Illuminate\Http\Request;

class JumlahController extends Controller
{
    public function jumlah()
    {
        $data_generasis = DataGenerasi::count();
        $data_panitias = DataPanitia::count();

        return view('owner', compact('data_generasis','data_panitias'));
    }

    public function data(Request $request)
    {
        $bukber = DataPanitia::all();
    
        return view('owner', compact('bukber'));
    }
    
    
    

    public function index2()
    {
        $bukber = DataPanitia::all();
        return response()->json([
            'status' => "success",
            "data" => $bukber,
        ]);
    }

    public function tambahdata()
    {
        return view('tambahdata');
    }

    public function insertdata(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
        ]);
        $bukber = DataPanitia::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotoowner/', $request->file('foto')->getClientOriginalName());
            $bukber->foto = $request->file('foto')->getClientOriginalName();
            $bukber->save();
        }
        return redirect()->route('owner')->with('success', 'Data Berhasil Di Tambahkan');
    }

    // public function tampil($id)
    // {

    //     $db_smpitdu = DataGenerasi::find($id);
    //     return view('admin/tampilkanwalikelas', compact('bukber'));
    // }


    public function getDataById(Request $request, $id)
    {
        $bukber = DataPanitia::find($id);

        return response()->json($bukber);
    }




    public function updatedata(Request $request, $id)
    {
        // $this->validate($request, [
        //     'nama' => 'required',
        //     'kelas' => 'required|in:7A,7B,8A,8B,9A,9B'
        // ], [
        //     'kelas' => 'Kelas tidak boleh kosong'
        // ]);
        $bukber = DataPanitia::find($id);
        $bukber->update($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotoowner/', $request->file('foto')->getClientOriginalName());
            $bukber->foto = $request->file('foto')->getClientOriginalName();
            $bukber->save();
        }
        return redirect()->route('owner')->with('success', 'Data Berhasil Di Update');

    }

    public function delete($id)
    {
        $bukber = DataPanitia::find($id);
        $bukber->delete();
        return redirect()->route('owner')->with('success', 'Data Berhasil Di Hapus');
    }

    public function trash()
    {
        // mengampil data guru yang sudah dihapus
        $db_smpitdu = DataPanitia::onlyTrashed()->get();
        return view('admin/trashowner', ['db_smpitdu' => $db_smpitdu]);
    }

    public function restore($id)
    {
        $db_smpitdu = DataPanitia::onlyTrashed()->where('id', $id);
        $db_smpitdu->restore();
        return redirect()->route('owner')->with('success', 'Data Berhasil Di Restore');
    }

    public function restoreall()
    {

        $db_smpitdu = DataPanitia::onlyTrashed();
        $db_smpitdu->restore();

        return redirect()->route('owner')->with('success', 'Data Berhasil Di Restore');
    }

    public function hapuspermanen($id)
    {
        // hapus permanen data guru
        $db_smpitdu = DataPanitia::onlyTrashed()->where('id', $id);
        $db_smpitdu->forceDelete();

        return redirect()->route('owner')->with('success', 'Data Berhasil Di Hapus Permanen');
    }

    public function hapuspermanenall()
    {
        // hapus permanen semua data guru yang sudah dihapus
        $db_smpitdu = DataPanitia::onlyTrashed();
        $db_smpitdu->forceDelete();

        return redirect()->route('admin/trashowner')->with('success', 'Data Berhasil Di Hapus Permanen Semua');
    }

}
