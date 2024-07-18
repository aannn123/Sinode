@extends('layouts.user.default')
@section('title')
    Set Kursi
@endsection
@section('content')
    <div>
        <h5>Pemilihan Kursi</h5>
        <div class="d-flex justify-content-center">
            <ul class="nav nav-pills mb-3 mt-1" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true">Ruang Utama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Selasar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                        aria-controls="pills-contact" aria-selected="false">Balkon</a>
                </li>
            </ul>

        </div>
        <div class="ml-4">
            <div class="mb-4"
                style="background-color: rgba(255, 133, 10, 0.50);padding-top:5px;padding-bottom:5px;border-radius:10px;width:10%">
                <b class="ml-2" style="font-size: 12px;">Note :</b>
                <div class="">
                    <div>
                        <i class="ml-2 mt-2 far fa-circle" style="color: white"></i>
                        <b style="font-size: 12px">Kosong</b>
                    </div>
                </div>
                <div class="">
                    <div>
                        <i class="ml-2 mt-2 far fa-check-circle" style="color: green"></i>
                        <b style="font-size: 12px">Terisi</b>

                    </div>
                </div>
                <div class="">
                    <div>
                        <i class="ml-2 mt-2 far fa-times-circle" style="color: red"></i>
                        <b style="font-size: 12px">Tidak</b>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="d-flex justify-content-center tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active wrapper-seat" id="pills-home" role="tabpanel"
            aria-labelledby="pills-home-tab">
            <b class="label-text-utama">Ruang Utama</b>
            <form action="{{ route('seat.post', $name) }}" method="POST">
                @csrf
                <div class="row ml-1">
                    @foreach ($main as $item)

                        <div class="mr-4 mt-3">
                            @if ($item->status == 'Active' && $item->registrant_id == null)

                                <div class="seat-item">
                                    <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                    <b style="font-size: 12px">{{ $item->number }}</b>
                                </div>
                                <input class="ml-4 mt-2" type="radio" name="id" value="{{ $item->id }}" id="">
                            @elseif ($item->status == 'Active' && $item->registrant_id)
                                <div style="cursor: not-allowed">
                                    <div class="seat-item" style="background-color: rgba(0, 128, 0, 0.20)">
                                        <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                        <b style="font-size: 12px">{{ $item->number }}</b>
                                    </div>
                                    <i class="ml-4 mt-2 far fa-check-circle" style="color: green"></i>
                                </div>

                            @else
                                <div style="cursor: not-allowed">
                                    <div class="seat-item" style="background-color: rgba(255, 0, 0, 0.20)">
                                        <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                        <b style="font-size: 12px">{{ $item->number }}</b>
                                    </div>
                                    <i class="ml-4 mt-2 far fa-times-circle" style="color: red"></i>
                                </div>
                            @endif
                        </div>
                    @endforeach

                </div>
                <input type="submit" value="Pilih" class="btn btn-info mt-3">
                {{-- </form> --}}
        </div>
        <div class="tab-pane fade wrapper-seat" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <b class="label-text-serambi">Selasar</b>
            {{-- <form action=""> --}}
            <div class="row ml-1">
                @foreach ($porch as $item)
                    <div class="mr-4 mt-3">
                        @if ($item->status == 'Active' && $item->registrant_id == null)

                            <div class="seat-item">
                                <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                <b style="font-size: 12px">{{ $item->number }}</b>
                            </div>
                            <input class="ml-4 mt-2" type="radio" name="id" value="{{ $item->id }}" id="">
                        @elseif ($item->status == 'Active' && $item->registrant_id)
                            <div style="cursor: not-allowed">
                                <div class="seat-item" style="background-color: rgba(0, 128, 0, 0.20)">
                                    <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                    <b style="font-size: 12px">{{ $item->number }}</b>
                                </div>
                                <i class="ml-4 mt-2 far fa-check-circle" style="color: green"></i>
                            </div>
                        @else
                            <div style="cursor: not-allowed">
                                <div class="seat-item" style="background-color: rgba(255, 0, 0, 0.20)">
                                    <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                    <b style="font-size: 12px">{{ $item->number }}</b>
                                </div>
                                <i class="ml-4 mt-2 far fa-times-circle" style="color: red"></i>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
            <input type="submit" value="Pilih" class="btn btn-info mt-3">
            {{-- </form> --}}
        </div>
        <div class="tab-pane fade wrapper-seat" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <b class="label-text-balkon">Balkon</b>
            {{-- <form action=""> --}}
            <div class="row ml-1">
                @foreach ($balkon as $item)
                    <div class="mr-4 mt-3">
                        @if ($item->status == 'Active' && $item->registrant_id == null)

                            <div class="seat-item">
                                <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                <b style="font-size: 12px">{{ $item->number }}</b>
                            </div>
                            <input class="ml-4 mt-2" type="radio" name="id" value="{{ $item->id }}" id="">
                        @elseif ($item->status == 'Active' && $item->registrant_id)
                            <div style="cursor: not-allowed">
                                <div class="seat-item" style="background-color: rgba(0, 128, 0, 0.20)">
                                    <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                    <b style="font-size: 12px">{{ $item->number }}</b>
                                </div>
                                <i class="ml-4 mt-2 far fa-check-circle" style="color: green"></i>
                            </div>
                        @else
                            {{-- <div style="cursor: not-allowed"> --}}
                            <div class="seat-item">
                                <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                <b style="font-size: 12px">{{ $item->number }}</b>
                            </div>
                            <i class="ml-4 mt-2 far fa-times-circle" style="color: red"></i>
                            {{-- </div> --}}
                        @endif
                    </div>
                @endforeach
            </div>
            <input type="submit" value="Pilih" class="btn btn-info mt-3">
            </form>
        </div>
    </div>
    <button type="button" class="btn btn-primary ml-4 mb-3" data-toggle="modal" data-target="#exampleModalCenter">
        Kembali ke form
       </button>            
    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Apakah anda ingin meninggalkan halaman ini ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>&emsp;Jika anda meninggalkan halaman ini, maka data anda yang sebelumnya akan terhapus.</p>
        </div>
        <div class="modal-footer">
            <form action="{{route('back.form',$name)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Iya" class="btn btn-success">
            </form>
            {{-- <a href="{{route('back.form',$name)}}" class="btn btn-success">Iya</a> --}}
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
        </div>
      </div>
    </div>
  </div>

@endsection
