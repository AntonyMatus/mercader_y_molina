@extends('layouts.admin')

@section('style')
    <link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
   
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Autores</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item active">Autores</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">

                    <div class="d-block " style="text-align: end">
                        <a href="{{route('Authors.create')}}" type="button" class="btn clientButton waves-effect waves-light mb-5 text-right ">Crear Autor</a>
                    </div>
                    

                    <table id="datatable" class="table table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($authors as $author )
                        <tr>
                            <td>{{$author->id}}</td>
                            <td> {{$author->name}} </td>
                            <td> <img src="{{asset('storage/'.$author->cover_image)}}" alt="" width="120"> </td>
                            <td> 
                                <form class="formulario-eliminar" action="{{route('Authors.destroy', [$author])}}" method="POST">
                                    @method("delete")
                                    @csrf
                                    <a href="{{route('Authors.edit',[$author])}}" type="button" class="btn btn-success waves-effect waves-light"><i class="fas fa-pencil-alt"></i>&nbsp; Editar </a>
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

    <script>
        $('.formulario-eliminar').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: '¿Estás seguro?',
            text: "Este blog de eliminara definitivamente",
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