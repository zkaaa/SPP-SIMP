<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Month;
use App\Models\Pembayaran;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $title = 'History Pembayaran';

        $history = Pembayaran::all();
        // dd($history);
        return view('contents.history.index', compact('history'));
    }
    
    public function delete($id_pembayaran)
    {
        Pembayaran::where('id_pembayaran', $id_pembayaran)->delete();
        return redirect('/history')->with('success', 'Data berhasil dihapus');
    }

    public function generatepdf()
    {
        $history = Pembayaran::all();

        $pdf = PDF::loadview('contents.history.pdf', ['history' => $history]);
        return $pdf->download('history-pembayaran.pdf');
    }
}
