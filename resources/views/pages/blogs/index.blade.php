@extends('layouts.admin')

@section('style')
    <link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
   
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Blogs</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="breadcrumb-item active">Blogs</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">

                    <div class="d-block " style="text-align: end">
                        <a href="{{route('Blogs.create')}}" type="button" class="btn clientButton waves-effect waves-light mb-5 text-right ">Crear blog</a>
                    </div>
                    

                    <table id="datatable" class="table table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Categoria</th>
                            <th>fecha</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach ($posts as $post )
                        <tr>
                            <td>{{$post->id}}</td>
                            <td> {{$post->title}}</td>
                            <th>{{$post->category->name}}</th>
                            <th>{{$post->publish_date}}</th>
                            <td> 
                                <form action="{{route('categories.destroy', [$post])}}" method="POST">
                                    @method("delete")
                                    @csrf
                                    <a href="{{route('categories.edit',[$post])}}" type="button" class="btn btn-success waves-effect waves-light"><i class="fas fa-pencil-alt"></i>&nbsp; Editar </a>
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
@endsection