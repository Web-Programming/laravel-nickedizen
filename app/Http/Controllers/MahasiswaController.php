<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function insert()
    {
        $result = DB::insert('insert into mahasiswas (NPM, nama_mahasiswa, tempat_lahir,
        tanggal_lahir, alamat, created_at) values (?, ?, ?, ?, ?, ?)', [
            '1922110006', 'Ahmad',
            'Palembang', '2000-01-01', 'Jl. Rajawali', now()
        ]);
        dump($result);
    }

    public function insertElq()
    {
        // Single Assignment
        // $mhs = new Mahasiswa();
        // $mhs->nama = 'Nicholas Edison';
        // $mhs->npm = '2226250003';
        // $mhs->tempat_lahir = 'Berlin';
        // $mhs->tanggal_lahir = date("Y-m-d"); //Tanggal hari ini
        // $mhs->save();
        // dump($mhs);

        // Mass Assignment
        $mhs = Mahasiswa::insert(
            [
                [
                    'nama' => 'Nicholas Edison',
                    'npm' => '2226250005',
                    'tempat_lahir' => 'Seoul',
                    'tanggal_lahir' => date("Y-m-d")
                ],
                [
                    'nama' => 'Ricko Andreas Kartono',
                    'npm' => '2226250037',
                    'tempat_lahir' => 'Pyongyang',
                    'tanggal_lahir' => date("Y-m-d")
                ]
            ]
        );
        dump($mhs);
    }

    public function updateElq()
    {
        $mhs = Mahasiswa::where('npm', '2226250005')->first();
        $mhs->nama = 'Johan Indra Saputra';
        $mhs->save();
        dump($mhs);
    }

    public function deleteElq()
    {
        $mhs = Mahasiswa::where('npm','2226250037')->first();
        $mhs->delete();
        dump($mhs);
    }

    public function selectElq()
    {
        $kampus = "Universitas Multi Data Palembang";
        $mhs = Mahasiswa::all();
        return view("mahasiswa.index", ['allmahasiswa' => $mhs,'kampus'=> $kampus]);
    }
}
