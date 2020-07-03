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
                <div class="row">
                    <div class="col-md-12" style="margin-top: 10px;">
                      <div class="card">
                          <div class="card-body">
                              <div class="panel-body">
                                  <p>{{ $pertanyaan->pertanyaan_nama }}</p>
                              </div>
                          </div>
                      </div>
                      <br>
                      <div class="card">
                          <div class="card-header">Tambahkan Komentar
                          </div>
                          <div class="card-body">
                              <div class="panel-body">
                                  @foreach ($jawaban as $db)
                                      <p>{{ $db->jawaban }}</p>
                                      <hr>
                                  @endforeach
                              </div>
                          </div>
                          <div class="card-body">
                              <div class="panel-body">
                                  <form action="{{ route('jawaban.store', $pertanyaan) }}" method="POST" class="form-horizontal">
                                          {{ csrf_field() }}
                                  <div class="form-group">
                                      <textarea name="jawaban" id="" cols="30" rows="5" class="form-control" placeholder="Berikan Komentar ..."></textarea>
                                  </div>
                                  <input type="hidden" name="pertanyaan_id" value="{{ $pertanyaan->pertanyaan_id }}">
                                    <input type="submit" value="Komentar" class="btn btn-primary">
                                    <a class="btn btn-danger" href="{{ route('pertanyaan.index') }}">Kembali</a>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')

@endsection
