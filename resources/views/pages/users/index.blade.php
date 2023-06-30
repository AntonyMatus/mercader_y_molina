@extends('layouts.admin')

@section('style')
    <link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Usuarios</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item active">Usuarios</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">

                    <div class="d-block " style="text-align: end">
                        <a href="{{route('Users.create')}}" type="button" class="btn clientButton waves-effect waves-light mb-5 text-right ">Crear usuario</a>
                    </div>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user )
                        <tr>
                            <td>{{$user->id}}</td>
                            <td> {{$user->name}}</td>
                            <th>{{$user->email}}</th>
                            <th>
                                @if ($user->is_admin === 1)
                                    <span class="badge badge-success">Administrador</span>
                                @elseif ($user->is_admin === 0)
                                    <span class="badge badge-info">Usuario</span>    
                                @endif
                            
                            </th>
                            <td> 
                                <form class="formulario-eliminar" action="{{route('Users.destroy', [$user])}}" method="POST">
                                    @method("delete")
                                    @csrf
                                    <a href="{{route('Users.edit',[$user])}}" type="button" class="btn btn-success waves-effect waves-light"><i class="fas fa-pencil-alt"></i>&nbsp; Editar </a>
                                    <button type="submit" class="btn btn-danger waves-effect waves-light"><i class="fas fa-trash-alt"></i>&nbsp; Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection

@section('script')
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/assets/pages/datatables.init.js')}}"></script>

    @if (session('eliminar') == 'ok')
        <script>
            Swal.fire(
            'Eliminado!',
            'El Usuario se elimino con éxito.',
            'success'
            )
        </script>        
    @endif
    <script>
        $('.formulario-eliminar').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: '¿Estás seguro?',
            text: "Este Usuario se eliminara definitivamente",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, Eliminar!',
            cancelButtonText: 'Cancelar'
            }).then((result) => {
            if (result.isConfirmed) {
                
                this.submit();
            }
            })
        });
        
        
    </script>
@endsection