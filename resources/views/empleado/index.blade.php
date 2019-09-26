@extends('theme.layouts')
@section('title','Listar Empresas')
@section('scripts')
<script src="{{asset("assets/pages/index.js")}}" type="text/javascript"></script>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
            @include('includes.mensaje')
        <div class="box box-primary">
            <div class="box-header with-border">
                <h1 class="text-center text-info">Listado de Empresas</h1>
                <div class="box-tools pull-right">
                    <a href="#" class="btn btn-block btn-success btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i>Nuevo Registro
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-bordered table-hover table-striped" id="tabla-data"> 
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Primer Nombre</th>
                            <th>Segundo Nombre</th>
                            <th>Compañia</th>
                            <th>Correo</th>
                            <th>Celular</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="#" class="btn-accion-tabla" title="Editar este registro"><i class="fa fa-fw fa-pencil"></i></a>
                                <form action="#" class="d-inline form-eliminar" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>
@endsection