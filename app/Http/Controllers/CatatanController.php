<?php

namespace App\Http\Controllers;

use App\Models\Catatan;
use Illuminate\Http\Request;

class CatatanController extends Controller
{
    public function data(Request $request)
    {
        if ($request->has('search')) {
            $bukber = Catatan::where('judul', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $bukber = Catatan::all();
        }
        return view('aboutus', ['bukber' => $bukber]);
    }

    public function index2()
    {
        $bukber = Catatan::all();
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
            'catatan' => 'required',
        ]);
        $bukber = Catatan::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotocatatan/', $request->file('foto')->getClientOriginalName());
            $bukber->foto = $request->file('foto')->getClientOriginalName();
            $bukber->save();
        }
        return redirect()->route('aboutus')->with('success', 'Data Berhasil Di Tambahkan');
    }

    // public function tampil($id)
    // {

    //     $db_smpitdu = DataGenerasi::find($id);
    //     return view('admin/tampilkanwalikelas', compact('bukber'));
    // }


    public function getDataById(Request $request, $id)
    {
        $bukber = Catatan::find($id);

        return response()->json($bukber);
    }




    public function updatedata(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'catatan' => 'required',
        ]);
        $bukber = Catatan::find($id);
        $bukber->update($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotostruk/', $request->file('foto')->getClientOriginalName());
            $bukber->foto = $request->file('foto')->getClientOriginalName();
            $bukber->save();
        }
        return redirect()->route('aboutus')->with('success', 'Data Berhasil Di Update');

    }

    public function delete($id)
    {
        $bukber = Catatan::find($id);
        $bukber->delete();
        return redirect()->route('aboutus')->with('success', 'Data Berhasil Di Hapus');
    }

    public function trash()
    {
        // mengampil data guru yang sudah dihapus
        $db_smpitdu = Catatan::onlyTrashed()->get();
        return view('admin/trashcatatan', ['db_smpitdu' => $db_smpitdu]);
    }

    public function restore($id)
    {
        $db_smpitdu = Catatan::onlyTrashed()->where('id', $id);
        $db_smpitdu->restore();
        return redirect()->route('aboutus')->with('success', 'Data Berhasil Di Restore');
    }

    public function restoreall()
    {

        $db_smpitdu = Catatan::onlyTrashed();
        $db_smpitdu->restore();

        return redirect()->route('aboutus')->with('success', 'Data Berhasil Di Restore');
    }

    public function hapuspermanen($id)
    {
        // hapus permanen data guru
        $db_smpitdu = Catatan::onlyTrashed()->where('id', $id);
        $db_smpitdu->forceDelete();

        return redirect()->route('aboutus')->with('success', 'Data Berhasil Di Hapus Permanen');
    }

    public function hapuspermanenall()
    {
        // hapus permanen semua data guru yang sudah dihapus
        $db_smpitdu = Catatan::onlyTrashed();
        $db_smpitdu->forceDelete();

        return redirect()->route('admin/trashwali')->with('success', 'Data Berhasil Di Hapus Permanen Semua');
    }
}
