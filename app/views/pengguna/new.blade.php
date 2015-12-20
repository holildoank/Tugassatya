@extends('layouts.main')

@section('css')
<style>
    .garis{
        margin-top: 0;
        margin-bottom: 10px;
    }
</style>
@stop

@section('content')
<div class="row">
    <div class="col-xs-9">
        <div class="box">
            <div class="box-header">
                
            </div>
            <div class="box-body">
               <form class="form-horizontal" method="post" action="{{$action}}">
                    @include('layouts.notifikasi')
                    <input type="hidden" name="id" value="{{isset($users->id) ? $users->id : ''}}"/>
                    <div class="form-group">
                        <label for="name" class="control-label col-xs-3">Nama </label>
                        <div class="col-xs-7">
                            <input type="text" name="name" class="form-control" value="{{isset($users->name) ? $users->name : ''}}"required=""/>
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="email" class="control-label col-xs-3">Email </label>
                        <div class="col-xs-7">
                            <input type="text" name="email" class="form-control" value="{{isset($users->email) ? $users->email : ''}}"required=""/>
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="username" class="control-label col-xs-3">Username </label>
                        <div class="col-xs-9">
                            <input type="text" name="username" class="form-control" value="{{isset($users->username) ? $users->username : ''}}"required=""/>
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="name" class="control-label col-xs-3">Password </label>
                        <div class="col-xs-7">
                            <input type="password" name="password" class="form-control" value="{{isset($users->password) ? $users->password : ''}}"required=""/>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label for="nama" class="control-label col-xs-4">jenis Kelamin</label>
                        <div class="col-xs-4">  
                       <select class="form-control" name="sek" value="" id="sek" required>
                         <option value="">Pilih jenis Kelamin</option>
                         <option value="laki_laki">Laki-laki</option>
                         <option value="perempuan">Perempuan</option>
                         </select>
                       </div>
                    </div>

                      <div class="form-group">
                        <label for="alamat" class="control-label col-xs-3">Alamat </label>
                        <div class="col-xs-7">
                            <input type="text" name="alamat" class="form-control" value="{{isset($users->alamat) ? $users->alamat : ''}}"required=""/>
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="telpon" class="control-label col-xs-3">Telpon </label>
                        <div class="col-xs-7">
                            <input type="text" name="telpon" class="form-control" value="{{isset($users->telpon) ? $users->telpon : ''}}"required=""/>
                        </div>
                    </div>
                   
                    <hr class="garis">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="submit" class="btn btn-primary pull-right" value="Simpan"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop

@section('js')

@stop

