@extends('layouts.master')

@section('content')
<title>Program/Isu</title>
<div class="main"> 
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            
        <div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Edit Program</h3>
				</div>
				<div class="panel-body">
                <form action="/program/{{$program->id_proker}}/update" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Program</label>
            <input name="nama_program" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Program" value="{{$program->nama_program}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1">
              <option value="Active" @if($program->status == 'Active') selected @endif>Active</option>
              <option value="Done" @if($program->status == 'Done') selected @endif>Done</option>
              <option value="Pending" @if($program->status == 'Pending') selected @endif>Pending</option>
              <option value="Supended" @if($program->status == 'Supended') selected @endif>Supended</option>
              <option value="Overdue" @if($program->status == 'Overdue') selected @endif>Overdue</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Pilih Kategori</label>
            <select name="kategori" class="form-control" id="exampleFormControlSelect1">
              <option value="Arahan" @if($program->kategori == 'Arahan') selected @endif>Arahan Menteri</option>
              <option value="Perjanjian" @if($program->kategori == 'Perjanjian') selected @endif>Perjanjian Kinerja</option>
              <option value="Prioritas" @if($program->kategori == 'Prioritas') selected @endif>Prioritas</option>
              <option value="Quick" @if($program->kategori == 'Quick') selected @endif>Quick Wins</option>
              <option value="Lainnya" @if($program->kategori == 'Lainnya') selected @endif>Lainnya</option>
            </select>
          </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Progress</label>
            <input name="progress" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Status" value="{{$program->progress}}">
  </div>
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
                </form>  
            </div>
            </div>
            </div>
            </div>
            </div>
            
@stop
