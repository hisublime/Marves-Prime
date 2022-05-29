@extends('notifikasi.template.template_notifikasi')
@section('container-md-8')
  <div class="container-fluid pt-5">
    <div class="container-content">
      <div class="content-border">
        <h1 class="text-title">Detail Draft Risalah</h1>
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
            disabled
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
          disabled

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
          disabled

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
            disabled

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
          disabled

          />
        </div>
        
        <div class="arahan-container">
          <div class="mb-3">
            <label for="arahanMenteri" class="form-label"><h3 class="arahan-heading">Arahan Menko</h3></label>
            <textarea class="form-control" id="arahanMenteri" name="arahanMenteri" rows="5" disabled>@if($catatan){{ $rakor->arahanMenteri }}@endif</textarea>
          </div>
        </div>
          <div class="d-flex justify-content-md-end">
            <div class="d-grid col-2">
              <button class="btn btn-secondary btn-lg lh-lg fs-4 btn-simpan"
              type="button"
              onclick="window.location.href='/notifikasi/draft-risalah'" >
              Kembali
            </button>
          </div>
          {{-- <div class="d-grid col-2 ms-5 jus">
          <button class="btn btn-primary btn-lg lh-lg fs-4" type="submit">
            Kirim Notifikasi
            </button> --}}
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>

@endsection