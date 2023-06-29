@extends('layouts.admin')

@section('style')
    
    <link href="{{asset('plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Editar Blog</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('Blogs.index') }}">Blog</a></li>
                    <li class="breadcrumb-item active">Editar Blog</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card m-b-20">
                <div class="card-body text-center">
                    <form method="POST" action="{{route("Blogs.update", [$blog])}}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-left">
                                <div class="form-group">
                                    <label>Titulo</label>
                                    <input class="form-control" type="text" name="title" id="title" value="{{$blog->title}}">
                                </div>
                            </div>

                            <div class="col-md-3 text-left">
                                <div class="form-group">
                                    <label>Autor</label>
                                    <select class="form-control" name="author_id" id="autor_id">
                                        @foreach ($autors as $autor)
                                        <option value="{{$autor->id}}" >{{$autor->name}}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3 text-left">
                                <div class="form-group">
                                    <label>Categoria</label>
                                    <select class="form-control" name="category_id" id="category_id">
                                        @foreach ($categorias as $category)
                                        <option value="{{$category->id}}"  @if ($blog->category_id === $category->id )
                                            selected
                                        @endif >{{$category->name}}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4 text-left">
                                <div class="form-group">
                                    <label for="">Fecha de publicacion</label>
                                    <input class="form-control" type="date" value="2023-06-28" name="publish_date" id="example-date-input" value="{{$blog->publish_date}}">
                                </div>
                            </div>
                            <div class="col-md-4 text-left">
                                <label for="">Status de Publicidad</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="1" @if($blog->status === 1) selected  @endif >Publicado</option>
                                    <option value="0" @if($blog->status === 0) selected  @endif  >No Publicado</option>
                                </select>
                            </div>
                            <div class="col-md-4 text-left">
                                <div class="form-group">
                                    <label>Imagen de portada</label>
                                    <input type="file" name="cover_image" class="filestyle" data-buttonname="btn-secondary">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <div class="form-group">
                                    <label for="">Imagen actual del blog</label> <br>
                                    <img src="{{asset('storage/blogs/'.$blog->cover_image)}}" width="200" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12 text-left">
                                <div class="form-group">
                                    <label>Cuerpo del Blog</label>
                                    <textarea id="elm1" name="body"> {{$blog->body}} </textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" class="btn btn-client waves-effect waves-light mr-1">
                                    Actualizar
                                </button>
                                <a  class="btn btn-secondary waves-effect" href="{{route('Blogs.index')}}">
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
<script>
    $(document).ready(function () {
        if($("#elm1").length > 0){
            tinymce.init({
                selector: "textarea#elm1",
                theme: "modern",
                height:300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ]
            });
        }
    });
</script>
@endsection