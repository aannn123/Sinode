<?php

namespace App\Http\Controllers;

use App\Models\Ages;
use App\Models\Church;
use App\Models\Registrants;
use App\Models\SeatChurch;
use App\Models\Worships;
use Illuminate\Http\Request;
use Mockery\Undefined;

// use SimpleSoftwareIO\QrCode\Facades\QrCode;

class UserController extends Controller
{
    public function index()
    {
        $church = Church::all();
        $worship = Worships::all();
        $age = Ages::all();
        return view('user.index')->with([
            'church' => $church,
            'worship' => $worship,
            'age' => $age,
        ]);
    }

    public function sendRegist(Request $request)
    {
        $data = $request->all();
        $churchId = $request->post('church_id');
        $church = Church::where('id', $churchId)->first();
        if ($data['region'] == '7') {
            $data['region'] = $request->post('reg');
        }
        $request->validate(
            [
                'church_id' => 'required',
                'worship_id' => 'required',
                'fullname' => 'required',
                'address' => 'required',
                'region' => 'required',
                'age' => 'required',
                'phone_number' => 'required',
                'answer_1' => 'required',
                'answer_2' => 'required',
                'answer_3' => 'required',
                'answer_4' => 'required',
                'answer_5' => 'required',
                'answer_6' => 'required',
                'answer_7' => 'required',
                'answer_8' => 'required',
            ],
            [
                'worship_id.required' => 'Kolom ibadah wajib diisi',
                'church_id.required' => 'Kolom tempat wajib diisi',
                'fullname.required' => 'Kolom nama lengkap wajib diisi',
                'address.required' => 'Kolom alamat wajib diisi',
                'region.required' => 'Kolom wilayah wajib diisi',
                'age.required' => 'Kolom umur wajib diisi',
                'phone_number.required' => 'Kolom nomor telepon wajib diisi',
                'answer_1.required' => 'Pertanyan pertama wajib diisi',
                'answer_2.required' => 'Pertanyan kedua wajib diisi',
                'answer_3.required' => 'Pertanyan ketiga wajib diisi',
                'answer_4.required' => 'Pertanyan keempat wajib diisi',
                'answer_5.required' => 'Pertanyan kelima wajib diisi',
                'answer_6.required' => 'Pertanyan keenam wajib diisi',
                'answer_7.required' => 'Pertanyan ketujuh wajib diisi',
                'answer_8.required' => 'Pertanyan kedelapan wajib diisi',
            ]
        );
        $name = str_replace(' ', '', $data['fullname']);
        $a1 = 'Ya, saya sehat dalam 14 hari terakhir';
        $a3 = 'Tidak, saya tidak berkunjung ke rumah sakit';
        if ($data['answer_1'] == $a1 && $data['answer_2'] == 'Tidak' && $data['answer_3'] == $a3 && $data['answer_4'] == 'Tidak' && $data['answer_5'] == 'Tidak' && $data['answer_6'] == 'Tidak' && $data['answer_7'] == 'Ya' && $data['answer_8'] == 'Ya') {
            $data['church_name'] = $church['name'];
            $data['status'] = 'Success';
            $data['code'] = str_shuffle(mt_rand(100, 1000) . $name);
            $user = Registrants::create($data);
            return redirect()->route('seat', $user['code']);
        } else {
            $data['church_name'] = $church['name'];
            $data['status'] = 'Failed';
            $data['code'] = str_shuffle(mt_rand(100, 1000) . $name);
            $user = Registrants::create($data);
            return redirect()->route('regist.result', $user['code']);
        }
    }

    public function removeData($code)
    {
        $regist = Registrants::where('code', $code)->first();
        $data = Registrants::find($regist['id']);
        $data::destroy($regist['id']);
        // var_dump($regist['id']);die();
        return redirect()->route('regist');
    }


    public function result($name)
    {
        $regist = Registrants::where('code', $name)->with('worship', 'seat')->first();
        // var_dump($regist['answer_1']);die();

        if ($regist['answer_1'] != 'Ya, saya sehat dalam 14 hari terakhir') {
            $msg1 = 'Anda pernah sakit dalam 14 hari terakhir (H-14 sebelum ibadah)';
        } else {
            $msg1 = '';
        }
        if ($regist['answer_2'] == 'Ya') {
            $msg2 = 'Anda memiliki sakit bawaan / komorbid';
        } else {
            $msg2 = '';
        }
        if ($regist['answer_3'] != 'Tidak, saya tidak berkunjung ke rumah sakit') {
            $msg3 = 'Anda dalam 14 hari terakhir pernah berkunjung ke rumah sakit';
        } else {
            $msg3 = '';
        }
        if ($regist['answer_4'] == 'Ya') {
            $msg4 = 'Ada anggota keluarga satu rumah yang sakit demam, pilek, batuk dan sakit lain yang dianjurkan istirahat oleh dokter';
        } else {
            $msg4 = '';
        }
        if ($regist['answer_5'] == 'Ya') {
            $msg5 = 'Di lingkungan rumah Anda ada yang POSITIF covid 19 dalam radius 50 meter';
        } else {
            $msg5 = '';
        }
        if ($regist['answer_6'] == 'Ya') {
            $msg6 = 'Dalam 14 hari terakhir anda pernah berpergian keluar kota ( selain Jabodetabek )';
        } else {
            $msg6 = '';
        }
        if ($regist['answer_7'] == 'Tidak') {
            $msg7 = 'Anda tidak bersedia melaksanakan protokol kesehatan saat mengikuti ibadah onsite';
        } else {
            $msg7 = '';
        }
        if ($regist['answer_8'] == 'Tidak') {
            $msg8 = 'Anda tidak bersedia istirahat tidur malam sebelum mengikuti ibadah onsite minimal 7 jam';
        } else {
            $msg8 = '';
        }
        return view('user.result')->with([
            'data' => $regist,
            'msg1' => $msg1 ? '' : $msg1,
            'msg3' => $msg3,
            'msg4' => $msg4,
            'msg5' => $msg5,
            'msg6' => $msg6,
            'msg7' => $msg7,
            'msg8' => $msg8,
            'msg2' => $msg2
        ]);
    }

    public function seatSelection($name)
    {
        $data = Registrants::where('code', $name)->first();
        $seat = SeatChurch::where('churc_id', $data['church_id'])->get();
        $collection = collect($seat);
        $mainRoom = $collection->slice(0, 102);
        $porch = $collection->slice(102, 37);
        $balkon = $collection->slice(139, 210);
        return view('user.seat')->with([
            'name' => $data['code'],
            'main' => $mainRoom,
            'porch' => $porch,
            'balkon' => $balkon,
        ]);
    }

    public function seatSelectionPost(Request $request, $name)
    {
        $data = Registrants::where('code', $name)->first();
        $seatId = $request->post('id');
        $seat = SeatChurch::where('id', $seatId)->first();
        $data['church_seat_id'] = $seatId;
        $seat['registrant_id'] = $data['id'];
        $seat->save();
        $data->save();

        return redirect()->route('regist.result', $data['code']);
    }
}
