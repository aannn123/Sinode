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
                                <h3>Create Gereja</h3>
                            </div>
                        </div>

                        {{-- CARD BODY --}}
                        <div class="card-body">
                            <form action="{{route('gereja.store')}}" method="POST">
                                @csrf
                                
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Nama Gereja</label>
                                    <div class="col-sm-4">
                                      <input type="text" name="name" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="seat" class="col-sm-2 col-form-label">Bangku</label>
                                    <div class="col-sm-4">
                                      <input type="number" name="seat" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="no_telephone" class="col-sm-2 col-form-label">Nomor Telepon</label>
                                    <div class="col-sm-4">
                                      <input type="number" name="no_telephone" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-4">
                                      <input type="email" name="email" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-4">
                                      {{-- <input type="text" name="address" class="form-control"> --}}
                                      <textarea name="address" id="address" cols="35" rows="5"></textarea>
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