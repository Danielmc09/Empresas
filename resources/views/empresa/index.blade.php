@extends('theme.layouts')
@section('title','Listar Empresas')
@section('content')
<div class="row">
    <div class="col-lg-12">
            @include('includes.mensaje')
        <div class="box box-primary">
            <div class="box-header with-border">
                <h1 class="text-center text-info">Listado de Empresas</h1>
                <div class="box-tools pull-right">
                    <a href="{{Route('empresa.create')}}" class="btn btn-block btn-success btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i>Nuevo Registro
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-bordered table-hover table-striped" id="tabla-data"> 
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Logo</th>
                            <th>Website</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($datos as $row)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
                            <td>
                                <img src="{{asset('storage').'/'. $row->logo}}" alt="Logo Empresa" width="100" height="100">
                            </td>
                            <td>{{$row->website}}</td>
                            <td>
                                <a href="{{Route('empresa.edit',$row->id)}}" class="btn-accion-tabla" title="Editar este registro"><i class="fa fa-fw fa-pencil"></i></a>
                                <form action="{{Route('empresa.destroy',$row->id)}}" class="d-inline" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                        <i class="fa fa-fw fa-trash text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>
@endsection