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
                                <h3>Create</h3>
                            </div>
                        </div>

                        {{-- CARD BODY --}}
                        <div class="card-body">
                            <form action="{{route('worship.store')}}" method="POST">
                                @csrf
                                
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Nama Ibadah</label>
                                    <div class="col-sm-4">
                                      <input type="text" name="name" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="time" class="col-sm-2 col-form-label">Time</label>
                                    <div class="col-sm-4">
                                      <input type="text" placeholder="07:00" name="time" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-4">
                                      <input type="date" name="date" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="quota" class="col-sm-2 col-form-label">Quota</label>
                                    <div class="col-sm-4">
                                      <input type="text" name="quota" class="form-control">
                                    </div>
                                </div>

                                    <button type="submit" class="btn btn-primary float-right col-md-2">Tambah</button>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection