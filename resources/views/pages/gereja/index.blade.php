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
                                <a href="{{route('gereja.create')}}" class="btn btn-light float-right">
                                    Tambah
                                </a>
                            </div>
                        </div>
                        {{-- <a href="{{route('export')}}" class="btn btn-success">export</a> --}}
                        {{-- CARD BODY --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama Gereja</th>
                                            <th>Bangku</th>
                                            <th>Alamat</th>
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
                                            <td>{{$item->seat}}</td>
                                            {{-- <td>{{$item->no_telephone}}</td> --}}
                                            {{-- <td>{{$item->email}}</td> --}}
                                            <td>{{$item->address}}</td>
                                            <td>
                                                {{-- <a href="#" class= "btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i>
                                                </a> --}}
                                               <div class="row">
                                                <a href="{{route('gereja.edit', $item->id)}}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{route('gereja.destroy', $item->id)}}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                               </div>
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