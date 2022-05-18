<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Catin;
use App\KartuKemenkesRi;

class PrintFormulirController extends Controller
{
  	public function index()
    { 
      $catins = Catin::orderBy('created_at', 'desc')->get();
      return view('admin.list-print.list', compact('catins'));
    }

    public function printN1($id)
    { 
      $biodata = Catin::where('id', $id)->firstOrFail();   
      return view('admin.list-print.n1', compact('biodata'));
    }

    public function printN4($id)
    { 
      $biodata = Catin::where('id', $id)->firstOrFail();   
      return view('admin.list-print.n4', compact('biodata'));
    }

    public function printN7($id)
    { 
      $biodata = Catin::where('id', $id)->firstOrFail();   
      return view('admin.list-print.n7', compact('biodata'));
    }

    public function printKesehatan($id)
    { 
      $biodata = Catin::where('id', $id)->first();
        
      $tt1 = KartuKemenkesRi::where('catin_id', $id)
      ->where('tipe_data_id', "TT1")->first();
      
      $tt2 = KartuKemenkesRi::where('catin_id', $id)
      ->where('tipe_data_id', "TT2")->first();
      
      $tt3 = KartuKemenkesRi::where('catin_id', $id)
      ->where('tipe_data_id', "TT3")->first();
      
      $tt4 = KartuKemenkesRi::where('catin_id', $id)
      ->where('tipe_data_id', "TT4")->first();
      
      $tt5 = KartuKemenkesRi::where('catin_id', $id)
      ->where('tipe_data_id', "TT5")->first();

      return view('admin.list-print.printpuskesmas', compact('biodata', 'tt1', 'tt2', 'tt3', 'tt4', 'tt5'));
    }

    public function printLaboratorium($id)
    { 
      $biodata = Catin::where('id', $id)->first(); 
      $now = \Carbon::now(); // Tanggal sekarang
      $b_day_cpp = \Carbon::parse($biodata->biodataCpp->tanggal_lahir); // Tanggal Lahir
      $b_day_cpw = \Carbon::parse($biodata->biodataCpw->tanggal_lahir); // Tanggal Lahir
      $age_cpp = $b_day_cpp->diffInYears($now);  // Menghitung umur
      $age_cpw = $b_day_cpw->diffInYears($now);  // Menghitung umur 
      return view('admin.list-print.print-laboratorium', compact('biodata', 'age_cpp', 'age_cpw'));
    } 

    public function printSuratsehat($id)
    { 
      $biodata = Catin::where('id', $id)->firstOrFail();
      $now = \Carbon::now(); // Tanggal sekarang
      $b_day_cpp = \Carbon::parse($biodata->biodataCpp->tanggal_lahir); // Tanggal Lahir
      $b_day_cpw = \Carbon::parse($biodata->biodataCpw->tanggal_lahir); // Tanggal Lahir
      $age_cpp = $b_day_cpp->diffInYears($now);  // Menghitung umur
      $age_cpw = $b_day_cpw->diffInYears($now);  // Menghitung umur
      return view('admin.list-print.surat-sehat', compact('biodata', 'age_cpp', 'age_cpw'));
    }
}
