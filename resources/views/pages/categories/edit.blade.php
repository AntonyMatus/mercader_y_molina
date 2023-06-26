@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Editar Categoria</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categorias</a></li>
                    <li class="breadcrumb-item active">Editar Categoria</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card m-b-20">
                <div class="card-body text-center">
                    <form method="POST" action="{{route("categories.update", [$category])}}">
                        @method("PUT")
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-left">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control"  name="name" required placeholder="Escriba el nombre"
                                    value="{{$category->name}}"/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" name="register-btn" class="btn btn-client waves-effect waves-light mr-1">
                                    Crear
                                </button>
                                <a  class="btn btn-secondary waves-effect" href="{{route('categories.index')}}">
                                    Cancelar
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection