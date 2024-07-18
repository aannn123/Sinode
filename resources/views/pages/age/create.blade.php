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
                                <h3>Create Usia</h3>
                            </div>
                        </div>

                        {{-- CARD BODY --}}
                        <div class="card-body">
                            <form action="{{route('age.store')}}" method="POST">
                                @csrf
                                
                                <div class="form-group row">
                                    <label for="number" class="col-sm-2 col-form-label">Usia</label>
                                    <div class="col-sm-4">
                                      <input type="number" name="number" class="form-control">
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