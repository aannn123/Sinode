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
                                <h3>Gereja</h3>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <a href="{{route('worship.create')}}" class="btn btn-light float-right">
                                    Tambah
                                </a>
                            </div>
                        </div>

                        {{-- CARD BODY --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table">
                                    <thead>
                                        <tr>
                                            <th>Nama </th>
                                            <th>Waktu</th>
                                            <th>Tanggal</th>
                                            <th>Quota</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($items as $item)
                                        
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->time}}</td>
                                            <td>{{$item->date}}</td>
                                            <td>{{$item->quota}}</td>
                                            <td><div class="badge badge-success">{{$item->status}}</div></td>
                                            <td>
                                                <a href="{{route('worship.edit', $item->id)}}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{route('worship.destroy', $item->id)}}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
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