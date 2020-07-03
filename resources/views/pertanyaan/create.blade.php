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
                  <div class="col-md-12">
                    <form action="{{ route('pertanyaan.store') }}" method="POST">
                      {{ csrf_field() }}
                      <div class="card col-md-12">
                          <div class="form-group has-feedback{{ $errors->has('pertanyaan_nama') ? ' has-error': '' }}">
                            <label for="">Pertanyaan</label>
                            <input type="text" class="form-control" name="pertanyaan_nama" placeholder="Pertanyaan" value="{{ old('pertanyaan_nama') }}">
                            @if ($errors->has('pertanyaan_nama'))
                                <span class="help-block">
                                    <p style="color: red;">{{ $errors->first('pertanyaan_nama') }}</p>
                                </span>
                            @endif
                          </div>
                          <div class="form-group">
                              <input type="submit" class="btn btn-primary" value="Save">
                          </div>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')

@endsection