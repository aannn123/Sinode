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
                                <h3>List Gereja</h3>
                            </div>
                        </div>

                        {{-- CARD BODY --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Gereja</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no =1;
                                        @endphp 
                                        
                                        @foreach ($items as $item)
                                        
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>
                                                <a href="{{route('setKursi', $item->id)}}" class="btn btn-primary btn-sm">
                                                    <i class="">SET KURSI</i>
                                                </a>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection