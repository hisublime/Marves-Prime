@extends('layouts.master')

@section('content')
<title>Profile</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            
        <div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Edit Data Pengguna</h3>
				</div>
				<div class="panel-body">
                <form action="/pengguna/{{$pengguna->id}}/update" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group{{$errors->has('nama_user') ? 'has-error' : ''}}">
    <label for="exampleInputEmail1">Nama User</label> 
    <input name="nama_user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama User" value="{{$pengguna->nama_user}}">
    @if($errors->has('nama_user'))
  <span class="help-block">{{$errors->first('nama_user')}}</span>
  @endif
  </div>

  <div class="form-group{{$errors->has('jabatan') ? 'has-error' : ''}}">
  <label for="exampleFormControlSelect1">Jabatan</label>
  <select name="jabatan" class="form-control" id="exampleFormControlSelect1">
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
    <input type="text" name="id_pegawai" class="form-control" value="{{$pengguna->id_pegawai}}">
     </div>

     <div class="form-group">
      <label for="exampleFormControlTextarea1">Asisten Deputi</label>
      <input type="text" name="asdep" class="form-control" value="{{$pengguna->asdep}}">
       </div>
  
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Username</label>
            <input type="text" name="username" class="form-control" value="{{$pengguna->username}}">
             </div>
        
        <div class="form-group{{$errors->has('status') ? 'has-error' : ''}}">
          <label for="exampleFormControlSelect1">Status</label>
          <select name="status" class="form-control" id="exampleFormControlSelect1">
            <option value="Active">Aktif</option>
            <option value="nonactive">Tidak Aktif</option>
          </select>
          
            </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Avatar</label>
              <input type="file" name="avatar" class="form-control">
        </div>     

        <button type="submit" class="btn btn-warning">Update</button>
                </form>  
            </div>
            </div>
            </div>
            </div>
            </div>
@stop