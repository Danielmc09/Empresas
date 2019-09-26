@extends('theme.layouts')
@section('title','Crear Empresa')
@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        <div class="box box-primary">
            <div class="box-header with-border">
                <h1 class="text-center text-info">Crear Empresa</h1>
                <div class="box-tools pull-right">
                    <a href="{{Route('empresa.index')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i>Volver al listado
                    </a>
                </div>
            </div>
            <form action="{{Route('empresa.store')}}" id="form-general" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="requerido">Nombre</label>
                                <input type="text" name="name" class="form-control" style="width: 100%;" value="{{old('name')}}" required>
                            </div>
                            <div class="form-group">
                                <label>Website</label>
                                <input type="text" name="website" class="form-control" style="width: 100%;" value="{{old('website')}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo</label>
                                <input type="email" name="email" class="form-control" style="width: 100%;" value="{{old('email')}}" required>
                            </div>
                            <div class="form-group">
                                <label>Logo</label>
                                <input type="file" name="logo" style="width: 100%;" value="{{old('logo')}}" required>
                            </div>
                        </div>
                    </div>  
                </div>     
                    <div class="box-footer">
                        @include('includes.boton-crear')
                    </div>
            </form>
        </div>
    </div> 
</div>
@endsection