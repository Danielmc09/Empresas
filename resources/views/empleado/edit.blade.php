@extends('theme.layouts')
@section('title','Editar Empleado')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        <div class="box box-primary">
            <div class="box-header with-border">
                <h1 class="text-center text-info">Editar Empleado</h1>
                <div class="box-tools pull-right">
                    <a href="#" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i>Volver al listado
                    </a>
                </div>
            </div>
            <form action="#" id="form-general" method="POST">
                @csrf
                <div class="box-body">
                    @include('empleado.form')  
                </div>     
                    <div class="box-footer">
                        @include('includes.boton-editar')
                    </div>
            </form>
        </div>
    </div> 
</div>
@endsection