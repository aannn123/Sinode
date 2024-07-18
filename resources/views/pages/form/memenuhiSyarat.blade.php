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
                                <h3>Data Memenuhi Syarat</h3>
                            </div>
                        </div>
                        {{-- CARD BODY --}}
                        <div class="card-body">
                            <form action="{{ route('memenuhi') }}" method="GET">
                                @csrf
                                <div class="form-row">
                                    <div class="col-6">
                                        <select class="form-control" name="gereja">
                                            <option selected disabled>--PILIH GEREJA--</option>

                                            @foreach ($gereja as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <input type="date" class="form-control" name="from">
                                    </div>
                                    <p>TO</p>
                                    <div class="col-2">
                                        <input type="date" class="form-control" name="to">
                                    </div>
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-primary float-right">Confirm</button>
                                </div>

                            </form>
                        </div>

                        {{-- CARD BODY --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Gereja</th>
                                            <th>Nomor Telepon</th>
                                            <th>Alamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    {{-- @if ($items->status == 'Success') --}}

                                    <tbody>
                                        {{-- @php
                                            $no = 1;
                                        @endphp --}}
                                        @foreach ($items as $no => $item)
                                            <tr>
                                                <td>{{ $no + $items->firstItem() }}</td>
                                                <td>{{ $item->fullname }}</td>
                                                <td>{{ $item->church_name }}</td>
                                                <td>{{ $item->phone_number }}</td>
                                                <td>{{ $item->address }}</td>
                                                <td>View</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    {{-- @endif --}}

                                </table>
                            </div>
                            <div class="row d-flex justify-content-between">

                                <div class="ml-3">
                                    <a href="{{ route('export.success') }}" class="btn btn-success btn-sm"
                                      >Export Data Berhasil</a>
                                </div>

                                <div class="ml-3">
                                    <a href="{{ route('export.all') }}" class="btn btn-primary btn-sm"
                                      >Export Semua Data</a>
                                </div>
                                <div class="mr-2">
                                    {{ $items->links() }}

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
