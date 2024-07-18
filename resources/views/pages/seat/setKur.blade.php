@extends('layouts.admin.default')

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
                        aria-controls="pills-profile" aria-selected="false">Serambi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                        aria-controls="pills-contact" aria-selected="false">Balkon</a>
                </li>
            </ul>

        </div>
        <div class="d-flex justify-content-center tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active wrapper-seat" id="pills-home" role="tabpanel"
                aria-labelledby="pills-home-tab">
                <b class="label-text-utama">Ruang Utama</b>
                <form action="#" method="POST">
                    @csrf
                    <div class="row ml-1">
                            <div class="mr-4 mt-3">
                                {{-- @if ($item->status == 'Active') --}}

                                    <div class="seat-item" style="width: 85px">
                                        <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                        {{-- @if ()
                                            
                                        @else
                                            
                                        @endif --}}
                                        <b style="font-size: 12px">12</b>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label fas fa-check" style="color: green" for="inlineRadio1"></label>
                                        <i class="fas fa-checklist"></i>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label fas fa-times" style="color: red" for="inlineRadio2"></label>
                                      </div>

                                      <div class="seat-item" style="width: 85px">
                                        <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                        {{-- @if ()
                                            
                                        @else
                                            
                                        @endif --}}
                                        <b style="font-size: 12px">12</b>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label fas fa-check" style="color: green" for="inlineRadio1"></label>
                                        <i class="fas fa-checklist"></i>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label fas fa-times" style="color: red" for="inlineRadio2"></label>
                                      </div>
                                      <div class="seat-item" style="width: 85px">
                                        <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                        {{-- @if ()
                                            
                                        @else
                                            
                                        @endif --}}
                                        <b style="font-size: 12px">12</b>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label fas fa-check" style="color: green" for="inlineRadio1"></label>
                                        <i class="fas fa-checklist"></i>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label fas fa-times" style="color: red" for="inlineRadio2"></label>
                                      </div>
                                      <div class="seat-item" style="width: 85px">
                                        <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                        {{-- @if ()
                                            
                                        @else
                                            
                                        @endif --}}
                                        <b style="font-size: 12px">12</b>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label fas fa-check" style="color: green" for="inlineRadio1"></label>
                                        <i class="fas fa-checklist"></i>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label fas fa-times" style="color: red" for="inlineRadio2"></label>
                                      </div>
                                      <div class="seat-item" style="width: 85px">
                                        <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                        {{-- @if ()
                                            
                                        @else
                                            
                                        @endif --}}
                                        <b style="font-size: 12px">12</b>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label fas fa-check" style="color: green" for="inlineRadio1"></label>
                                        <i class="fas fa-checklist"></i>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label fas fa-times" style="color: red" for="inlineRadio2"></label>
                                      </div>
                                    {{-- <input class="ml-4 mt-2" type="radio" name="id" value="" id=""> --}}
                                {{-- @else --}}
                                    {{-- <div style="cursor: not-allowed">
                                        <div class="seat-item">
                                            <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                            <b style="font-size: 12px"></b>
                                        </div>
                                        <i class="ml-4 mt-2 far fa-times-circle" style="color: red"></i>
                                    </div> --}}
                                {{-- @endif --}}
                            </div>

                    </div>
                    <input type="submit" value="Pilih" class="btn btn-info mt-3">

                </div>
            <div class="tab-pane fade wrapper-seat" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <b class="label-text-serambi">Serambi</b>

                <div class="row ml-1">
                    {{-- @foreach ($porch as $item)
                        <div class="mr-4 mt-3">
                            @if ($item->status == 'Active')

                                <div class="seat-item">
                                    <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                    <b style="font-size: 12px">{{ $item->number }}</b>
                                </div>
                                <input class="ml-4 mt-2" type="radio" name="id" value="{{$item->id}}" id="">
                            @else
                                <div style="cursor: not-allowed">
                                    <div class="seat-item">
                                        <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                        <b style="font-size: 12px">{{ $item->number }}</b>
                                    </div>
                                    <i class="ml-4 mt-2 far fa-times-circle" style="color: red"></i>
                                </div>
                            @endif
                        </div>
                    @endforeach --}}
                </div>
                <input type="submit" value="Pilih" class="btn btn-info mt-3">
                
            </div>
        </div>
    </div>


@endsection
