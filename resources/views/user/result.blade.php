@extends('layouts.user.default')
@section('title')
    Hasil Pendaftaran
@endsection
@section('content')
    <h5 style="font-weight: bolder">Data Anda</h5>
    <div class="col-10 mt-3">
        <div class="row">
            <div class="col-md-5">
                <div class="mb-2">
                    <b>Pilihan Ibadah</b>
                    <p>{{ $data->worship->name }} - {{ $data->worship->time }} -
                        {{ \Carbon\Carbon::createFromTimestamp(strtotime($data->worship->date))->isoFormat('dddd, D MMMM Y') }}
                    </p>
                </div>
                <div class="mb-2">
                    <b>Tempat Ibadah</b>
                    <p>{{ $data->church_name }}</p>
                </div>
                <div class="mb-2">
                    <b>Jenis Kelamin</b>
                    <p>{{ $data->gender }}</p>
                </div>
                <div class="mb-2">
                    <b>Usia</b>
                    <p>{{ $data->age }} Tahun</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-2">
                    <b>Nama Lengkap</b>
                    <p>{{ $data->fullname }} </p>
                </div>
                <div class="mb-2">
                    <b>Alamat</b>
                    <p>{{ $data->address }}</p>
                </div>
                <div class="mb-2">
                    <b>No Telp</b>
                    <p>{{ $data->phone_number }}</p>
                </div>
                  <div class="mb-2">
                    <b>Wilayah</b>
                    <p>{{ $data->region }}</p>
                </div>
            </div>
            @if ($data->status == 'Success')
                <div class="col-md-3">
                    <div class="mb-2 seat">
                        No. Tempat Duduk &nbsp; <b>{{$data->seat->number}}</b>
                    </div>
                    <div class="d-flex justify-content-center">
                        {!! QrCode::size(200)->generate(url()->current()); !!}
                    </div>
                </div>
            @endif
            <div class="col-12">
                @if ($data->status == 'Success')
                    <div>
                        <p>Simpan data registrasi ini dengan <b>Memfoto atau screenshot</b> dan ditunjukan kepada petugas
                            kehadiran jemaat pada saat ibadah Minggu. Terimakasih, Tuhan memberkati.</p>
                    </div>
                @else
                    <div>
                        <p><b>Dari data yang kami terima, kami mendapati data berikut ini:</b></p>
                        <div class="mb-3">
                            @if ($msg1)
                            <div class="alert alert-info alert-margin" role="alert">
                                {{$msg1}}
                            </div>
                            @endif
                            @if ($msg2)
                                <div class="alert alert-danger alert-margin" role="alert">
                                    {{$msg2}}
                                </div>
                            @endif
                            @if ($msg3)
                                <div class="alert alert-warning alert-margin" role="alert">
                                    {{$msg3}}
                                </div>
                            @endif
                            @if ($msg4)
                                <div class="alert alert-danger alert-margin" role="alert">
                                    {{$msg4}}
                                </div>
                            @endif
                            @if ($msg5)
                                <div class="alert alert-info alert-margin" role="alert">
                                    {{$msg5}}
                                </div>
                            @endif
                            @if ($msg6)
                                <div class="alert alert-warning alert-margin" role="alert">
                                    {{$msg6}}
                                </div>
                            @endif
                            @if ($msg7)
                                <div class="alert alert-danger alert-margin" role="alert">
                                    {{$msg7}}
                                </div>
                            @endif
                            @if ($msg8)
                                <div class="alert alert-primary alert-margin" role="alert">
                                    {{$msg8}}
                                </div>
                            @endif
                        </div>
                        {{-- <p>Majelis Jemaat memahami kerinduan anda untuk datang beribadah. Namun demi kebaikan dan keselamatan bersama, kami merekomendasikan anda mengikuti ibadah secara daring / online pada ibadah pk. 09.30, 9 Mei 2021. Silakan mendaftar kembali dalam kesempatan ibadah yang lain jika anda sudah memenuhi syarat - syarat yang ditetapkan pemerintah dan gereja. Tuhan memberkati anda.</p> --}}
                    </div>
                @endif
                <div class="mt-5">
                    <p><a href="https://sinodegerejakristus.org/" class="btn btn-success"><i class="fas fa-arrow-left"></i> Kembali ke beranda</a></p>
                </div>
            </div>
        </div>
        <div style="margin-bottom: 50%"></div>
    </div>
@endsection