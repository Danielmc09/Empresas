@extends('theme.layouts')
@section('title','Crear Empleado')
@section('scripts')
<script src="{{asset('assets/pages/crear.js')}}"></script>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        <div class="box box-primary">
            <div class="box-header with-border">
                <h1 class="text-center text-info">Crear Empleado</h1>
                <div class="box-tools pull-right">
                    <a href="{{Route('empleado.index')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i>Volver al listado
                    </a>
                </div>
            </div>
            <form action="{{Route('empleado.store')}}" id="form-general" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="requerido">Nombre</label>
                                <input type="text" name="first_name" class="form-control" style="width: 100%;" value="{{old('first_name')}}" required>
                            </div>
                            <div class="form-group">
                                <label>Compañia</label>
                                <select name="companies_id"  class="form-control select2" style="width: 100%;" value={{old('companies_id')}} required>
                                    <option>Selecione</option>
                                    @foreach($compa as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Celular</label>
                                <input type="text" name="phone" class="form-control" style="width: 100%;" value="{{old('phone')}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="requerido">Apellido</label>
                                <input type="text" name="last_name" class="form-control" style="width: 100%;" value="{{old('last_name')}}" required>
                            </div>
                            <div class="form-group">
                                <label>Correo</label>
                                <input type="email" name="email" class="form-control" style="width: 100%;" value="{{old('email')}}" required>
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