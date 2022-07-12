<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\PrintConnectors\NetworkPrintConnector;

class DaftarController extends Controller
{
    public function index()
    {
        //get posts
        $data['daftars'] = Daftar::latest()->paginate(5);

        //render view with posts
        return view('daftars/index', $data);
    }

    public function create()
    {
        return view('daftars/create');
    }

    public function add(Request $request)
    {
        //validate form
        $this->validate($request, [
            'no_rm'         => 'required|min:6',
            'nama_pasien'   => 'required',
            'tgl_lahir'     => 'required',
            'tgl_daftar'    => 'required',
            'poli'          => 'required'
        ]);

        // create post
        Daftar::create([
            'no_rm'         => $request->no_rm,
            'nama_pasien'   => $request->nama_pasien,
            'poli'          => $request->poli,
            'tgl_lahir'     => $request->tgl_lahir,
            'tgl_daftar'    => $request->tgl_daftar,
            'user'          => Auth::user()->user_id
        ]);

        $data = array(
            'no_rm'         => $request->no_rm,
            'nama_pasien'   => $request->nama_pasien,
            'poli'          => $request->poli,
            'tgl_lahir'     => $request->tgl_lahir,
            'tgl_daftar'    => $request->tgl_daftar
        );

        // $this->print($request->no_rm, $request->nama_pasien, $request->poli, $request->tgl_lahir, $request->tgl_daftar);

        //redirect to index
        return redirect()->route('daftar')
            ->with([
                'success' => 'Data Berhasil Disimpan!',
                'dataPx'  => $data
            ]);
    }

    //print Mike42\Escpos
    public function print($no_rm, $nama, $poli, $tgl_lhr, $tgl_daftar)
    {
        try {
            $connector = new WindowsPrintConnector("smb://10.16.0.89/EPSON-L3110-Series");
            // $connector = new WindowsPrintConnector("smb://10.16.0.89/EPSON-TM-T82X");
            // $printer = new Escpos($connector);
            $printer = new Printer($connector);

            $printer->text("Puskesmas Mandiangin\n");
            $printer->text("Bukittinggi - SUMBAR\n");
            $printer->text("\n");
            $printer->text("----------------------------------\n");
            $printer->text("     TRACER - REKAM MEDIK\n");
            $printer->text("----------------------------------\n");
            $printer->text("\n");
            $printer->text("No. MR        : " . $no_rm . "\n");
            $printer->text("Nama          : " . $nama . "\n");
            $printer->text("Tgl. Lahir    : " . $tgl_lhr . "\n");
            $printer->text("Poliklinik    : " . $poli . "\n");
            $printer->text("Tgl. Periksa  : " . $tgl_daftar . "\n");
            $printer->text("\n");

            $printer->cut();

            $printer->close();
        } catch (Exception $e) {
            echo "Couldn't print to this printer: " . $e->getMessage() . "\n";
        }
    }
}
