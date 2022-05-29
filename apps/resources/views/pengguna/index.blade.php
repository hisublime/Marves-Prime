@extends('layouts.master')

@section('content')
<title>Profile</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
   

<!-- TABLE HOVER -->
<div class="panel">
  <div class="panel-heading">
    <h3 class="panel-title">Data Pengguna</h3>
    <div class="right">
<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
    </div>
    
  </div>
  <div class="panel-body">
    <table class="table table-hover">
      <thead>
        <tr>
        <th>Nama User</th>
        <th>Jabatan</th>
        <th>ID Pegawai</th>
        <th>Username</th>
        <th>Status</th>
      </tr>
      </thead>
      <tbody>
      @foreach($data_pengguna as $pengguna)
    <tr>
    <td><a href="/pengguna/{{$pengguna->id}}/profile" class="href">{{$pengguna->nama_user}}</td></a>
    <td>{{$pengguna->jabatan}}</td>
    <td>{{$pengguna->id_pegawai}}</td>
    <td>{{$pengguna->username}}</td>
    <td>{{$pengguna->status}}</td>
    <td>
    <a href="/pengguna/{{$pengguna->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
    <a href="/pengguna/{{$pengguna->id}}/delete" class="btn btn-warning btn-sm">Delete</a>
      </td>
    </tr>
    @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- END TABLE HOVER -->

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Data Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="/pengguna/create" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
    <div class="form-group{{$errors->has('nama_user') ? ' has-error' : ''}}">
    <label for="exampleInputEmail1">Nama User</label>
    <input name="nama_user" type="text" pattern="^[a-zA-Z]+$" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama User" value="{{old('nama_user')}}">
    @if($errors->has('nama_user'))
  <span class="help-block">{{$errors->first('nama_user')}}</span>
  @endif
  </div>

   <div class="form-group{{$errors->has('jabatan') ? 'has-error' : ''}}">
    <label for="exampleFormControlSelect1">Jabatan</label>
    <select name="jabatan" class="form-control" id="exampleFormControlSelect1">
      <option>------ Pilih Opsi -----</option>
      <option value="Menteri">Menteri</option>
      <option value="eseloni">Eselon</option>
      <option value="menkomarves">Menko Marves</option>
      <option value="persidangan">Persidangan</option>
      <option value="administration">Administration</option>
    </select>
    @if($errors->has('jabatan'))
  <span class="help-block">{{$errors->first('jabatan')}}</span>
  @endif
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">ID Pegawai</label>
    <input type="text" name="id_pegawai" class="form-control">
     </div>
     <div class="form-group">
      <label for="exampleFormControlTextarea1">Asdep</label>
      <input type="text" name="asdep" class="form-control">
       </div>

     <div class="form-group">
      <label for="exampleFormControlTextarea1">Username</label>
      <input type="text" name="username" class="form-control">
       </div>
  <div class="form-group{{$errors->has('jabatan') ? 'has-error' : ''}}">
    <label for="exampleFormControlSelect1">Status</label>
    <select name="status" class="form-control" id="exampleFormControlSelect1">
      <option value="Active">Aktif</option>
      <option value="nonactive">Tidak Aktif</option>
    </select>
      </div>
  <div class="form-group{{$errors->has('avatar') ? ' has-error' : ''}}">
            <label for="exampleFormControlTextarea1">Avatar</label>
            <input type="file" name="avatar" class="form-control">
            @if($errors->has('avatar'))
  <span class="help-block">{{$errors->first('avatar')}}</span>
  @endif
   </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
          </form>  
          </div>
            </div>
        </div>
@stop