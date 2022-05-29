@extends('persidangan.template.template_persidangan')
@section('container-md-8')
  <div class="container-fluid pt-5">
    <div class="container-content">
      <div class="content-border">
        <h1 class="text-title">Tambah Draft Risalah</h1>
        <form action="/persidangan/tambah-draft-risalah/{{ $rakor->id_rakor }}" method="POST">
          @csrf
          {{ csrf_field() }}
         
          <div class="d-flex mb-3">
            <label for="isu" class="form-label"
              ><h5>Isu</h5></label
            >
            <input
              type="text"
              class="form-control"
              name="isu"
              id="isu"
              value="{{ $rakor->isu }}"
            />
          </div>

          <div class="d-flex mb-3">
            <label for="renaksi" class="form-label"
            ><h5>Renaksi</h5></label
            >
            <input
            type="text"
            class="form-control"
            id="renaksi"
            name="renaksi"
            value='{{ $rakor->nama_renaksi }}'
            />
          </div>
         
          <div class="d-flex mb-3">
            <label for="turunan_renaksi" class="form-label"
            ><h5>Turunan Renaksi</h5></label
            >
            <input
            type="text"
            class="form-control"
            id="turunan_renaksi"
            name="turunan_renaksi"
            value='-'
            />
          </div>
          
          <div class="d-flex mb-3">
            <label for="tgl_pelaksanaan" class="form-label date"
              ><h5>Tanggal Pelaksanaan</h5></label
            >
            <input
              type="date"
              class="form-control date"
              id="date"
              name="tgl_pelaksanaan"
              value="{{ $rakor->tgl_pelaksanaan}}"
            />
          </div>
          
          <div class="d-flex mb-3">
            <label for="kegiatan" class="form-label"
            ><h5>Kegiatan</h5></label
            >
            <input
            type="text"
            class="form-control"
            id="kegiatan"
            name="kegiatan"
            value="{{ $rakor->nama_kegiatan}}"
            />
          </div>
          
          <div class="arahan-container">
            <div class="mb-3">
              <label for="arahanMenteri" class="form-label"><h3 class="arahan-heading">Arahan Menko</h3></label>
              <textarea class="form-control" id="arahanMenteri" name="arahanMenteri" rows="5">@if($catatan){{ $catatan->arahanMenteri }}@endif</textarea>
            </div>
          </div>
          
          <div class="d-flex justify-content-md-end">
            <div class="d-grid col-2">
              <button class="btn btn-secondary btn-lg lh-lg fs-4 btn-simpan" name="simpan" value=0>
              Simpan
            </button>
          </div>
          <div class="d-grid col-2 ms-5 jus">
            <button class="btn btn-primary btn-lg lh-lg fs-4" name="kirim" value=1>
              Kirim Notifikasi
            </button>
          </div>
        </div>
      </form> 
      </div>
    </div>
  </div>

@endsection