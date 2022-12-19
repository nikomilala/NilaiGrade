<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    //
    public function index(){
        $nilai = Nilai::latest()->get();


        return view('home', compact('nilai'));
    }

    public function input(){
        $users = User::all();

        return view('input', compact('users'));
    }

    public function grade(Request $request){
        $nilai = new Nilai();
        $nilai->user_id = $request->input('user_id');
        $nilai->quiz = $request->input('nilai-quiz');
        $nilai->tugas = $request->input('nilai-tugas');
        $nilai->absensi = $request->input('nilai-absensi');
        $nilai->praktek = $request->input('nilai-praktek');
        $nilai->uas = $request->input('nilai-uas');
        $nilai->save();

        return redirect('/')->with('info','Nilai Berhasil di Input :');

    }


    public function detail($id)

    {
        $nilai_detail = Nilai::where('id',$id)->first();
        if($nilai_detail->quiz <= 65){
            $gradequiz = "D";
        } elseif($nilai_detail->quiz >= 66 and $nilai_detail->quiz <= 75){
            $gradequiz = "C";
        } elseif($nilai_detail->quiz >= 76 and $nilai_detail->quiz <= 85){
            $gradequiz = "B";
        } elseif($nilai_detail->quiz >= 86 and $nilai_detail->quiz <= 100){
            $gradequiz = "A";
        } else {$gradequiz = "Error"; }

        if($nilai_detail->tugas <= 65){
            $gradetugas = "D";
        } elseif($nilai_detail->tugas >= 66 and $nilai_detail->tugas <= 75){
            $gradetugas = "C";
        } elseif($nilai_detail->tugas >= 76 and $nilai_detail->tugas <= 85){
            $gradetugas = "B";
        } elseif($nilai_detail->tugas >= 86 and $nilai_detail->tugas <= 100){
            $gradetugas = "A";
        } else {$gradetugas = "Error"; }

        if($nilai_detail->absensi <= 65){
            $gradeabsensi = "D";
        } elseif($nilai_detail->absensi >= 66 and $nilai_detail->absensi <= 75){
            $gradeabsensi = "C";
        } elseif($nilai_detail->absensi >= 76 and $nilai_detail->absensi <= 85){
            $gradeabsensi = "B";
        } elseif($nilai_detail->absensi >= 86 and $nilai_detail->absensi <= 100){
            $gradeabsensi = "A";
        } else {$gradeabsensi = "Error"; }

        if($nilai_detail->praktek <= 65){
            $gradepraktek = "D";
        } elseif($nilai_detail->praktek >= 66 and $nilai_detail->praktek <= 75){
            $gradepraktek = "C";
        } elseif($nilai_detail->praktek >= 76 and $nilai_detail->praktek <= 85){
            $gradepraktek = "B";
        } elseif($nilai_detail->praktek >= 86 and $nilai_detail->praktek <= 100){
            $gradepraktek = "A";
        } else {$gradepraktek = "Error"; }

        if($nilai_detail->uas <= 65){
            $gradeuas = "D";
        } elseif($nilai_detail->uas >= 66 and $nilai_detail->uas <= 75){
            $gradeuas = "C";
        } elseif($nilai_detail->uas >= 76 and $nilai_detail->uas <= 85){
            $gradeuas = "B";
        } elseif($nilai_detail->uas >= 86 and $nilai_detail->uas <= 100){
            $gradeuas = "A";
        } else {$gradeuas = "Error"; }


        return view('nilai_detail', [
            'nilai_detail'=>$nilai_detail,
            'gradequiz'=>$gradequiz,
            'gradetugas'=>$gradetugas,
            'gradeabsensi'=>$gradeabsensi,
            'gradepraktek'=>$gradepraktek,
            'gradeuas'=>$gradeuas
        ]);
    }
}
