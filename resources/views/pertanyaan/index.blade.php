@extends('layouts.master')

@section('title')
    <title>Pertanyaan</title>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Pertanyaan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active">Pertanyaan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content" id="dw">
            <div class="container-fluid">
              @if (session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
                  </div>
              @endif

              @if (session('info'))
                  <div class="alert alert-info">
                      {{ session('info') }}
                  </div>
              @endif

              @if (session('danger'))
                  <div class="alert alert-danger">
                      {{ session('danger') }}
                  </div>
              @endif
                <div class="row">
                  <a style="margin-left: 9px;" href="{{ route('pertanyaan.create') }}" class="btn btn-sm btn-success">Tambah</a>
                  @foreach ($data as $list)
                  <div class="col-md-12" style="margin-top: 10px;">
                      <div class="card">
                          <div class="card-header">
                              <a href="{{ route('pertanyaan.show', $list->pertanyaan_id) }}">{{ $list->judul }}</a> {{ $list->created_at->diffForHumans() }}

                              <div style="float: right; margin-right: 10px;">
                                  <a href="{{ route('pertanyaan.show', $list->pertanyaan_id) }}" class="btn btn-sm btn-info">Lihat</a>
                              </div>

                          </div>
                          <div class="card-body">
                              <div class="panel-body">
                                  <p>{{ str_limit($list->pertanyaan_nama, 100, ' ...') }}</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  @endforeach
            <div class="col-md-8" style="margin-top: 10px;">{!! $data->render() !!}</div>

                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')

@endsection