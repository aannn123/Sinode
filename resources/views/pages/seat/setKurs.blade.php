@extends('layouts.admin.default')
@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        {{-- CARD HEADER --}}
                        <div class="card-header">
                            <div class="col-sm-12 col-md-6">
                                <h3>Set Kursi Gereja {{$gereja->name}}</h3>
                            </div>
                        </div>

                        {{-- CARD BODY --}}
                        <div class="card-body">
                            <form action="{{route('kursi.update', $gereja->id)}}" method="POST">
                                @method('PUT')
                                @csrf
                            <div class="row ml-1">
                                @foreach ($items as $item)
                                <div class="mr-4 mt-3" style="">
                                    @if ($item->status == 'Active')
                                    <div class="seat-item" style="width: 85px; background-color: green;">
                                        <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                        <b style="font-size: 12px">{{$item->number}}</b>
                                    </div>
                                    @elseif($item->status == 'Tidak')
                                    <div class="seat-item" style="width: 85px; background-color: red;">
                                        <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                        <b style="font-size: 12px">{{$item->number}}</b>
                                    </div>
                                    @endif
                                    <div class="seat-item" style="width: 85px; background-color: yellow;">
                                        <i class="fas fa-chair fa-2x" style="color: #6777ef"></i>
                                        <b style="font-size: 12px">{{$item->number}}</b>
                                    </div>
                                    {{-- <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label fas fa-check" style="color: green" for="inlineRadio1"></label>
                                        <i class="fas fa-checklist"></i>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptionnames" id="inlineRadio2" value="option2">
                                        <label class="form-check-label fas fa-times" style="color: red" for="inlineRadio2"></label>
                                      </div> --}}

                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="status" value="Active" id="{{$item->id}}">
                                        <label class="form-check-label fas fa-check" style="color: green" ></label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="status" value="Tidak" id="{{$item->id}}">
                                        <label class="form-check-label fas fa-times"  style="color: red" ></label>
                                      </div>
                                </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary float-right col-md-2">Simpan</button>

                        </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
