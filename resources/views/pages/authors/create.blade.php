@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Crear Autor</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('Authors.index') }}">Autores</a></li>
                    <li class="breadcrumb-item active">Crear Autor</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card m-b-20">
                <div class="card-body text-center">
                    <form method="POST" action="{{route("Authors.store")}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-left">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control"  name="name" required placeholder="Escriba el nombre"/>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-left">
                                <div class="form-group">
                                    <label>Imagen Autor</label>
                                    <input type="file" name="cover_img" id="foto">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" name="register-btn" class="btn btn-client waves-effect waves-light mr-1">
                                    Crear
                                </button>
                                <a  class="btn btn-secondary waves-effect" href="{{route('Authors.index')}}">
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