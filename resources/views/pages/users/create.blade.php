@extends('layouts.admin')

@section('style')
    
    <link href="{{asset('plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Crear Blog</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('Blogs.index') }}">Blog</a></li>
                    <li class="breadcrumb-item active">Crear Blog</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card m-b-20">
                <div class="card-body text-center">
                    <form method="POST" action="{{route("Users.store")}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-left">
                                <div class="form-group">
                                    <label>Usuario</label>
                                    <input class="form-control" type="text" name="name" id="foto" placeholder="Escriba su nombre de usuario">
                                </div>
                            </div>
                            <div class="col-md-6 text-left">
                                <div class="form-group">
                                    <label>Correo Electronico</label>
                                    <input class="form-control" type="email" name="email" id="email" placeholder="Escriba su correo">
                                </div>
                            </div>

                            <div class="col-md-6 text-left">
                                <div class="form-group">
                                    <label>Rol de usuario</label>
                                    <select class="form-control" name="category_id" id="category_id">
                                        <option value="1">Administrador</option>
                                        <option value="0">Usuario</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 text-left">
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input class="form-control" type="password" name="password" id="password" autocomplete="">
                                </div>
                            </div>

                        </div>
                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" class="btn btn-client waves-effect waves-light mr-1">
                                    Crear
                                </button>
                                <a  class="btn btn-secondary waves-effect" href="{{route('Users.index')}}">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

<script src="{{asset('plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}"></script>

<script src="{{asset('admin/assets/pages/form-advanced.js')}}"></script>
<script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
 <!--Wysiwig js-->
 <script src="{{asset('plugins/tinymce/tinymce.min.js')}}"></script>

@endsection