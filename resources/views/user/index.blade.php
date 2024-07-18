@extends('layouts.user.default')
@section('title')
Form Pendaftaran Ibadah
@endsection
@section('content')
    <h5>Data Perorangan</h5>
    <p><i style="font-weight: 600;font-size:14px" class="text-danger">Demi Kesehatan dan keselamatan bersama
            serta mencegah penyebaran virus covid 19, kami mohon kesediaan jemaat mengisi data ini dengan jujur.
            Kami memahami kerinduan Bpk/Ibu/Sdr/Sdri untuk datang beribadah. Namun jika belum memenuhi syarat
            kesehatan, kami minta Anda mengikuti Ibadah online.
        </i></p>
    <div>
        <form action="{{ route('regist.post') }}" method="POST">
            @csrf
            <div class="form-group col-10">
                <label class="label-text">Pilih Ibadah</label> <b class="required">*</b>
                <select name="worship_id" id="inputState" class="form-control">
                    <option disabled value="" selected>Pilih Ibadah</option>
                    
                    @foreach ($worship as $item)
                        <option value="{{$item->id}}">{{$item->name}} - {{$item->time}} - {{\Carbon\Carbon::createFromTimestamp(strtotime($item->date))->isoFormat('dddd, D MMMM Y')}}</option>
                    @endforeach
                </select>                
                @error('worship_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-10">
                <label class="label-text">Pilih Tempat</label> <b class="required">*</b>
                <select name="church_id" id="inputState" class="form-control">
                    <option disabled value="" selected>Pilih Tempat</option>
                    @foreach ($church as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
                @error('church_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group col-10">
                <label class="label-text">Nama Lengkap</label> <b class="required">*</b>
                <input type="text" value="{{ old('fullname') }}" name="fullname" class="form-control"
                    placeholder="Tulis nama lengkap anda disini">
                @error('fullname')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-10">
                <label class="label-text">Jenis Kelamin</label> <b class="required">*</b>
                <div class="row">
                    <div class="form-check ml-3 mr-4">
                        <input name="gender" class="form-check-input" type="radio" value="Laki-Laki">
                        <label class="form-check-label" for="">
                            Pria
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="gender" class="form-check-input" type="radio" value="Perempuan">
                        <label class="form-check-label" for="">
                            Wanita
                        </label>
                    </div>
                </div>
                @error('gender')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-10">
                <label class="label-text">Alamat</label> <b class="required">*</b>
                <input value="{{old('address')}}" name="address" type="text" class="form-control" placeholder="Tulis alamat lengkap disini">
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-10">
                <label class="label-text">Wilayah</label> <b class="required">*</b>
                <div class="row">
                    <div class="form-check ml-3 mr-4">
                        <input name="region" class="form-check-input select" type="radio" value="1 A">
                        <label class="form-check-label" for="">
                            1 A
                        </label>
                    </div>
                    <div class="form-check ml-3 mr-4">
                        <input name="region" class="form-check-input select" type="radio" value="1 B">
                        <label class="form-check-label" for="">
                            1 B
                        </label>
                    </div>
                    <div class="form-check ml-3 mr-4">
                        <input name="region" class="form-check-input select" type="radio" value="2">
                        <label class="form-check-label" for="">
                            2
                        </label>
                    </div>
                    <div class="form-check ml-3 mr-4">
                        <input name="region" class="form-check-input select" type="radio" value="3">
                        <label class="form-check-label" for="">
                            3
                        </label>
                    </div>
                    <div class="form-check ml-3 mr-4">
                        <input name="region" class="form-check-input select" type="radio" value="4">
                        <label class="form-check-label" for="">
                            4
                        </label>
                    </div>
                    <div class="form-check ml-3 mr-4">
                        <input name="region" class="form-check-input select" type="radio" value="5">
                        <label class="form-check-label" for="">
                            5
                        </label>
                    </div>
                    <div class="form-check ml-3 mr-4">
                        <input name="region" class="form-check-input select" type="radio" value="6">
                        <label class="form-check-label" for="">
                            6
                        </label>
                    </div>
                    {{-- <div class="row">
                        <div class="form-check ml-3">
                            <input name="region" class="form-check-input other" type="radio" value="7">
                            <label class="form-check-label" for="">
                                7
                            </label>
                        </div>
                        <div>
                            <input type="text" id="other" name="reg" class="form-control form-control-sm ml-2" placeholder="Masukan wilayah">

                        </div>
                    </div> --}}
                </div>
                @error('region')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-10">
                <label class="label-text">Usia</label> <b class="required">*</b>
                <select name="age" id="inputState" class="form-control">
                    <option value="" disabled selected>Pilih Usia</option>
                    @foreach ($age as $item)
                    <option value="{{$item->number}}">{{$item->number}} Tahun</option>
                    @endforeach
                </select>
                <div class="text-muted mt-1" style="font-size: 12px">Rentang usia 13 - 70 tahun</div>
                @error('age')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-10">
                <label class="label-text">No. Telp</label>
                <input value="{{old('phone_number')}}" name="phone_number" type="number" class="form-control"
                    placeholder="Tulis disini. Contoh: 089212345434">
                @error('phone_number')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-10">
                {{-- <b>Apakah Anda dalam keadaan sehat selama 14 hari terakhir ( H-14 sebelum ibadah ) ?</b> <b --}}
                {{-- yang terbaru --}}
                <b>Apakah Anda dalam keadaan sehat selama 7 hari sebelum ibadah</b> <b
                    class="required">*</b>
                <p style="font-size: 12px" class="text-muted">Tidak batuk, flu, demam, pusing, tenggorokan sakit dan
                    sakit lain yang dianjurkan istirahat oleh dokter.</p>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_1" id=""
                            value=" Ya, saya sehat dalam 7 hari terakhir">
                        <label class="form-check-label" for="">
                            Ya, saya sehat dalam 7 hari terakhir
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_1" id=""
                            value="Tidak, saya pernah sakit dalam 7 hari terakhir">
                        <label class="form-check-label" for="">
                            Tidak, saya pernah sakit dalam 7 hari terakhir
                        </label>
                    </div>
                    @error('answer_1')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="form-group col-10">
                {{-- <b>Apakah Anda memiliki sakit bawaan / komorbid ?</b> <b class="required">*</b> --}}

                {{-- yang terbaru --}}
                <b>Apakah Anda sudah mendapat Vaksin Covid 19 ?</b> <b class="required">*</b>

                {{-- <p style="font-size: 12px" class="text-muted">Contoh diabetes, darah tinggi, jantung, stroke,
                    autoimun dan gangguan paru atau ginjal.
                </p> --}}

                {{-- yang baru --}}
                <p style="font-size: 12px" class="text-muted">Jawaban Ya, menjadi syarat untuk pendaftaran berhasil diterima</p>

                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_2" id="" value="Ya">
                        <label class="form-check-label" for="">
                            Ya
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_2" id="" value="Tidak">
                        <label class="form-check-label" for="">
                            Tidak
                        </label>
                    </div>
                    @error('answer_2')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            {{-- <div class="form-group col-10">
                <b>Apakah Anda dalam 14 hari terakhir pernah berkunjung ke rumah sakit ?</b> <b class="required">*</b>
                <p style="font-size: 12px" class="text-muted">Keperluan berobat, mengantar berobat dan mengunjungi /
                    merawat pasien rawat inap.</p>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_3" id=""
                            value=" Ya, saya pernah berkunjung / berobat ke rumah sakit">
                        <label class="form-check-label" for="">
                            Ya, saya pernah berkunjung / berobat ke rumah sakit
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_3" id=""
                            value="Tidak, saya tidak berkunjung ke rumah sakit">
                        <label class="form-check-label" for="">
                            Tidak, saya tidak berkunjung ke rumah sakit
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_3" id=""
                            value="Ya, saya seorang tenaga medis">
                        <label class="form-check-label" for="">
                            Ya, saya seorang tenaga medis
                        </label>
                    </div>
                    @error('answer_3')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

            </div> --}}

            <div class="form-group col-10">
                <b>Apakah ada anggota keluarga satu rumah yang sakit demam, pilek, batuk dan sakit lain yang
                    dianjurkan istirahat oleh dokter ?</b> <b class="required">*</b>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_4" id="" value="Ya">
                        <label class="form-check-label" for="">
                            Ya
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_4" id="" value="Tidak">
                        <label class="form-check-label" for="">
                            Tidak
                        </label>
                    </div>
                    @error('answer_4')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            {{-- <div class="form-group col-10">
                <b>Apakah di lingkungan rumah Anda ada yang POSITIF covid 19 dalam radius 50 meter ?</b> <b
                    class="required">*</b>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_5" id="" value="Ya">
                        <label class="form-check-label" for="">
                            Ya
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_5" id="" value="Tidak">
                        <label class="form-check-label" for="">
                            Tidak
                        </label>
                    </div>
                    @error('answer_5')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

            </div> --}}

            {{-- <div class="form-group col-10">
                <b>
                    Apakah dalam 14 hari terakhir anda pernah berpergian keluar kota ( selain Jabodetabek ) ?</b> <b
                    class="required">*</b>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_6" id="" value="Ya">
                        <label class="form-check-label" for="">
                            Ya
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_6" id="" value="Tidak">
                        <label class="form-check-label" for="">
                            Tidak
                        </label>
                    </div>
                    @error('answer_6')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

            </div> --}}

            <div class="form-group col-10">
                <b>
                    Apakah Anda bersedia melaksanakan protokol kesehatan saat mengikuti ibadah onsite ?</b> <b
                    class="required">*</b> <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                       Protokol Kesehatan
                      </button>                      
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_7" id="" value="Ya">
                        <label class="form-check-label" for="">
                            Ya
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_7" id="" value="Tidak">
                        <label class="form-check-label" for="">
                            Tidak
                        </label>
                    </div>
                    @error('answer_7')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="form-group col-10">
                {{-- <b>
                     Apakah Anda bersedia istirahat tidur malam sebelum mengikuti ibadah onsite minimal 7 jam ?</b>
                <b class="required">*</b>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_8" id="" value="Ya">
                        <label class="form-check-label" for="">
                            Ya
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer_8" id="" value="Tidak">
                        <label class="form-check-label" for="">
                            Tidak
                        </label>
                    </div>
                    @error('answer_8')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div> --}}

                <input type="submit" onclick="test()" value="Submit" class="btn btn-default mt-3"
                    style="background-color: #745242;color: white;font-weight:bold">

            </div>
        </form>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Protokol Kesehatan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <b>1. </b>Hadir ibadah jika sudah mendaftar dan disetujui. <br>
          <b>2. </b>Memakai masker standar kain/medis ( bukan masker scuba / buff ). <br>
          <b>3. </b>Menunjukkan nomor tempat duduk terdaftar kepada peugas pencatat kehadiran. <br>
          <b>4. </b>Mencuci tangan saat akan masuk ruang ibadah. <br>
          <b>5. </b>Mengikuti pemeriksaan kewaspadaan kesehatan oleh petugas ( suhu badan, tidak batuk /  pilek / pusing ). <br>
          <b>6. </b>Menjaga jarak ( 1,5 s/d 2 m ) saat antri masuk ruang ibadah. <br>
          <b>7. </b>Memberikan salam tidak bersentuhan . <br>
          <b>8. </b>Memberikan persembahan dalam amplop ( masukkan ke kotak saat masuk ruang ibadah ). <br>
          <b>9. </b>Duduk sesuai dengan nomor tempat duduk yang diberikan saat pendaftaran.. <br>
          <b>10. </b>Saat selesai ibadah :. <br>
          <b>- keluar ruang ibadah sesuai urutan / petunjuk petugas.</b> <br>
          <b>- Langsung pulang / tidak ngobrol / berkerumun di halaman gedung gereja .</b>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
        $('#other').prop("disabled", true)
        $('.other').click(function() {
            $('#other').prop("disabled", false);

        })
        $('.select').click(function() {
            $('#other').prop("disabled", true);

        })
    });
    </script>
@endpush