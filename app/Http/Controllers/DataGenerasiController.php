<?php

namespace App\Http\Controllers;

use App\Models\DataGenerasi;
use PDF;
use Illuminate\Http\Request;


class DataGenerasiController extends Controller
{
    public function data(Request $request)
    {
        if ($request->has('search')) {
            $bukber = DataGenerasi::where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $bukber = DataGenerasi::all();
        }
        return view('product', ['bukber' => $bukber]);
    }

    public function index2()
    {
        $db_smpitdu = DataGenerasi::all();
        return response()->json([
            'status' => "success",
            "data" => $db_smpitdu,
        ]);
    }

    public function tambahdata()
    {
        return view('tambahdata');
    }

    public function insertdata(Request $request)
    {
        // $this->validate($request, [
        //     'foto' => 'required',
        //     'nama' => 'required',
        //     'generasi' => 'required|in:Generasi 1,Generasi 2,Generasi 3,Generasi 4,Generasi 5,Generasi 6,Generasi 7,Generasi 8,Generasi 9,Generasi 10,Generasi 11,Generasi 12,',
        //     'metode_pembayran' => 'required|in:COD,Transfer',
        //     'penerima' => 'required',

        // ], [
        //     'Generasi' => 'Generasi tidak boleh kosong'
        // ]);
        $bukber = DataGenerasi::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotostruk/', $request->file('foto')->getClientOriginalName());
            $bukber->foto = $request->file('foto')->getClientOriginalName();
            $bukber->save();
        }
        return redirect()->route('product')->with('success', 'Data Berhasil Di Tambahkan');
    }

    // public function tampil($id)
    // {

    //     $db_smpitdu = DataGenerasi::find($id);
    //     return view('admin/tampilkanwalikelas', compact('bukber'));
    // }


    public function getDataById(Request $request, $id)
    {
        $bukber = DataGenerasi::find($id);

        return response()->json($bukber);
    }

    public function exportpdf()
    {
        $bukber = DataGenerasi::orderBy('generasi', 'desc')
            ->orderBy('nama', 'desc')
            ->get();

        view()->share('bukber', $bukber);
        $pdf = PDF::loadview('datagenerasi-pdf');

        return $pdf->download('databukber.pdf');
    }

    public function exportpdf1()
    {
        $bukber = DataGenerasi::where('generasi', 'LIKE' , 'Generasi 1')
                      ->get();
    
        view()->share('bukber', $bukber);
        $pdf = PDF::loadview('datagenerasi-pdf');
    
        return $pdf->download('databukber.pdf');
    }

    public function exportpdf2()
    {
        $bukber = DataGenerasi::where('generasi', 'LIKE' , 'Generasi 2')
                      ->get();
    
        view()->share('bukber', $bukber);
        $pdf = PDF::loadview('datagenerasi-pdf');
    
        return $pdf->download('databukber.pdf');
    }

    public function exportpdf3()
    {
        $bukber = DataGenerasi::where('generasi', 'LIKE' , 'Generasi 3')
                      ->get();
    
        view()->share('bukber', $bukber);
        $pdf = PDF::loadview('datagenerasi-pdf');
    
        return $pdf->download('databukber.pdf');
    }

    public function exportpdf4()
    {
        $bukber = DataGenerasi::where('generasi', 'LIKE' , 'Generasi 4')
                      ->get();
    
        view()->share('bukber', $bukber);
        $pdf = PDF::loadview('datagenerasi-pdf');
    
        return $pdf->download('databukber.pdf');
    }

    public function exportpdf5()
    {
        $bukber = DataGenerasi::where('generasi', 'LIKE' , 'Generasi 5')
                      ->get();
    
        view()->share('bukber', $bukber);
        $pdf = PDF::loadview('datagenerasi-pdf');
    
        return $pdf->download('databukber.pdf');
    }

    public function exportpdf6()
    {
        $bukber = DataGenerasi::where('generasi', 'LIKE' , 'Generasi 6')
                      ->get();
    
        view()->share('bukber', $bukber);
        $pdf = PDF::loadview('datagenerasi-pdf');
    
        return $pdf->download('databukber.pdf');
    }

    public function exportpdf7()
    {
        $bukber = DataGenerasi::where('generasi', 'LIKE' , 'Generasi 7')
                      ->get();
    
        view()->share('bukber', $bukber);
        $pdf = PDF::loadview('datagenerasi-pdf');
    
        return $pdf->download('databukber.pdf');
    }

    public function exportpdf8()
    {
        $bukber = DataGenerasi::where('generasi', 'LIKE' , 'Generasi 8')
                      ->get();
    
        view()->share('bukber', $bukber);
        $pdf = PDF::loadview('datagenerasi-pdf');
    
        return $pdf->download('databukber.pdf');
    }

    public function exportpdf9()
    {
        $bukber = DataGenerasi::where('generasi', 'LIKE' , 'Generasi 9')
                      ->get();
    
        view()->share('bukber', $bukber);
        $pdf = PDF::loadview('datagenerasi-pdf');
    
        return $pdf->download('databukber.pdf');
    }

    public function exportpdf10()
    {
        $bukber = DataGenerasi::where('generasi', 'LIKE' , 'Generasi 10')
                      ->get();
    
        view()->share('bukber', $bukber);
        $pdf = PDF::loadview('datagenerasi-pdf');
    
        return $pdf->download('databukber.pdf');
    }

    public function exportpdf11()
    {
        $bukber = DataGenerasi::where('generasi', 'LIKE' , 'Generasi 11')
                      ->get();
    
        view()->share('bukber', $bukber);
        $pdf = PDF::loadview('datagenerasi-pdf');
    
        return $pdf->download('databukber.pdf');
    }

    public function exportpdf12()
    {
        $bukber = DataGenerasi::where('generasi', 'LIKE' , 'Generasi 12')
                      ->get();
    
        view()->share('bukber', $bukber);
        $pdf = PDF::loadview('datagenerasi-pdf');
    
        return $pdf->download('databukber.pdf');
    }

    public function exportpdf13()
    {
        $bukber = DataGenerasi::where('generasi', 'LIKE' , 'Generasi 13')
                      ->get();
    
        view()->share('bukber', $bukber);
        $pdf = PDF::loadview('datagenerasi-pdf');
    
        return $pdf->download('databukber.pdf');
    }




    public function updatedata(Request $request, $id)
    {
        // $this->validate($request, [
        //     'nama' => 'required',
        //     'generasi' => 'required|in:Generasi 1,Generasi 2,Generasi 3,Generasi 4,Generasi 5,Generasi 6,Generasi 7,Generasi 8,Generasi 9,Generasi 10,Generasi 11,Generasi 12,',
        //     'metode_pembayran' => 'required|in:COD,Transfer',
        //     'penerima' => 'required',

        // ], [
        //     'Generasi' => 'Generasi tidak boleh kosong'
        // ]);
        $bukber = DataGenerasi::find($id);
        $bukber->update($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotostruk/', $request->file('foto')->getClientOriginalName());
            $bukber->foto = $request->file('foto')->getClientOriginalName();
            $bukber->save();
        }
        return redirect()->route('product')->with('success', 'Data Berhasil Di Update');
    }

    public function delete($id)
    {
        $bukber = DataGenerasi::find($id);
        $bukber->delete();
        return redirect()->route('product')->with('success', 'Data Berhasil Di Hapus');
    }

    public function trash()
    {
        // mengampil data guru yang sudah dihapus
        $db_smpitdu = DataGenerasi::onlyTrashed()->get();
        return view('admin/trashdata', ['db_smpitdu' => $db_smpitdu]);
    }

    public function restore($id)
    {
        $db_smpitdu = DataGenerasi::onlyTrashed()->where('id', $id);
        $db_smpitdu->restore();
        return redirect()->route('admin/c-walikelas')->with('success', 'Data Berhasil Di Restore');
    }

    public function restoreall()
    {

        $db_smpitdu = DataGenerasi::onlyTrashed();
        $db_smpitdu->restore();

        return redirect()->route('admin/c-walikelas')->with('success', 'Data Berhasil Di Restore');
    }

    public function hapuspermanen($id)
    {
        // hapus permanen data guru
        $db_smpitdu = DataGenerasi::onlyTrashed()->where('id', $id);
        $db_smpitdu->forceDelete();

        return redirect()->route('product')->with('success', 'Data Berhasil Di Hapus Permanen');
    }

    public function hapuspermanenall()
    {
        // hapus permanen semua data guru yang sudah dihapus
        $db_smpitdu = DataGenerasi::onlyTrashed();
        $db_smpitdu->forceDelete();

        return redirect()->route('admin/trashwali')->with('success', 'Data Berhasil Di Hapus Permanen Semua');
    }

    public function generasi1(Request $request)
    {
        if ($request->has('search')) {
            $bukber = DataGenerasi::where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $bukber = DataGenerasi::where('generasi', 'LIKE', 'Generasi 1')->get();
        }
        return view('product', ['bukber' => $bukber]);
    }
    public function generasi2(Request $request)
    {
        if ($request->has('search')) {
            $bukber = DataGenerasi::where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $bukber = DataGenerasi::where('generasi', 'LIKE', 'Generasi 2')->get();
        }
        return view('product', ['bukber' => $bukber]);
    }
    public function generasi3(Request $request)
    {
        if ($request->has('search')) {
            $bukber = DataGenerasi::where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $bukber = DataGenerasi::where('generasi', 'LIKE', 'Generasi 3')->get();
        }
        return view('product', ['bukber' => $bukber]);
    }
    public function generasi4(Request $request)
    {
        if ($request->has('search')) {
            $bukber = DataGenerasi::where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $bukber = DataGenerasi::where('generasi', 'LIKE', 'Generasi 4')->get();
        }
        return view('product', ['bukber' => $bukber]);
    }
    public function generasi5(Request $request)
    {
        if ($request->has('search')) {
            $bukber = DataGenerasi::where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $bukber = DataGenerasi::where('generasi', 'LIKE', 'Generasi 5')->get();
        }
        return view('product', ['bukber' => $bukber]);
    }
    public function generasi6(Request $request)
    {
        if ($request->has('search')) {
            $bukber = DataGenerasi::where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $bukber = DataGenerasi::where('generasi', 'LIKE', 'Generasi 6')->get();
        }
        return view('product', ['bukber' => $bukber]);
    }
    public function generasi7(Request $request)
    {
        if ($request->has('search')) {
            $bukber = DataGenerasi::where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $bukber = DataGenerasi::where('generasi', 'LIKE', 'Generasi 7')->get();
        }
        return view('product', ['bukber' => $bukber]);
    }
    public function generasi8(Request $request)
    {
        if ($request->has('search')) {
            $bukber = DataGenerasi::where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $bukber = DataGenerasi::where('generasi', 'LIKE', 'Generasi 8')->get();
        }
        return view('product', ['bukber' => $bukber]);
    }
    public function generasi9(Request $request)
    {
        if ($request->has('search')) {
            $bukber = DataGenerasi::where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $bukber = DataGenerasi::where('generasi', 'LIKE', 'Generasi 9')->get();
        }
        return view('product', ['bukber' => $bukber]);
    }
    public function generasi10(Request $request)
    {
        if ($request->has('search')) {
            $bukber = DataGenerasi::where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $bukber = DataGenerasi::where('generasi', 'LIKE', 'Generasi 10')->get();
        }
        return view('product', ['bukber' => $bukber]);
    }
    public function generasi11(Request $request)
    {
        if ($request->has('search')) {
            $bukber = DataGenerasi::where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $bukber = DataGenerasi::where('generasi', 'LIKE', 'Generasi 11')->get();
        }
        return view('product', ['bukber' => $bukber]);
    }
    public function generasi12(Request $request)
    {
        if ($request->has('search')) {
            $bukber = DataGenerasi::where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $bukber = DataGenerasi::where('generasi', 'LIKE', 'Generasi 12')->get();
        }
        return view('product', ['bukber' => $bukber]);
    }

    public function generasi13(Request $request)
    {
        if ($request->has('search')) {
            $bukber = DataGenerasi::where('nama', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $bukber = DataGenerasi::where('generasi', 'LIKE', 'Generasi 13')->get();
        }
        return view('product', ['bukber' => $bukber]);
    }
}
