@extends('layout.app')

@section('title', 'Blog')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
@endsection

@section('content')
    <section class="aHero blogHero">
        <div class="aHero_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="aHero_container">
                            <div class="section_header">
                                <h2 class="section_heading font-weight-700 urbanist" data-aos="fade-up">Blog</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $q_category = Request::get('category');
        $q_search = Request::get('search');
    @endphp

    <section class="b_filter">
        <div class="b_filter_wrapper">
	        <div class="container">
	            <div class="row">
		            <div class="col-12">
		                <div class="b_filter_container">
			                <div class="b_filter_items">
			                    <div class="b_filter_item" data-aos="fade-up">
				                    <div class="b_filter_content">
				                        <h4 class="heading urbanist">Buscar por palabra</h4>
				                        <div class="keyword">
					                        <form action="{{ route('blog') }}" method="GET">
					                            <div class="from_content">
						                            <div class="from_input">
						                                <input type="text" name="search" placeholder="Palabra clave">
						                            </div>
						                            <div class="from_button">
						                                <button type="button" class="mainButton buttonH1"><i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
						                            </div>
					                            </div>
					                        </form>
				                        </div>
				                    </div>
			                    </div>
			                    <div class="b_filter_item" data-aos="fade-up">
				                    <div class="b_filter_content">
				                        <h4 class="heading urbanist">Buscar por categoría</h4>
				                        <ul class="category">
					                        @foreach($categories as $category)
                                                <li>
                                                    <button 
                                                        type="button" 
                                                        class="mainButton buttonH1" onclick="redirectRoute('{{ route('blog') }}?category={{ $category->id }}')">
                                                        {{ $category->name }}
                                                    </button>
                                                </li>
                                            @endforeach
				                        </ul>
				                    </div>
			                    </div>
			                </div>
		                </div>
		            </div>
	            </div>
	        </div>
        </div>
    </section>

    @if (empty($q_category) && empty($q_search))
        <section class="blog margin">
            <div class="blog_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="blog_container">
                                <h4 class="blog_heading urbanist" data-aos="fade-up">Últimas entradas</h4>
                                <div class="blog_items">
                                    @foreach($latest_posts as $post)
                                    
                                        <div class="blog_item" data-aos="fade-up" onclick="redirectRoute('{{ route('single_blog') }}?post_id={{ $post->id }}')">
                                            <div class="blog_content">
                                                <div class="thumb">
                                                    <img lazy="loading" src="{{ asset('storage/blog/' . $post->cover_image) }}" alt="Imagen de portada">
                                                </div>
                                                <div class="content">
                                                    <div class="button">
                                                        <button type="button" class="secondaryButton buttonH1">
                                                            {{ $post->category->name }}
                                                        </button>
                                                        <h5 class="title">
                                                            <a class="urbanist" href="{{ route('single_blog') }}?post_id={{ $post->id }}">
                                                                {{ $post->title }}
                                                            </a>
                                                        </h5>
                                                        <hr>
                                                        <ul class="date">
                                                            <li><span>{{ $post->publish_date }}</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="blog margin">
        <div class="blog_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blog_container">
                            <h4 class="blog_heading urbanist" data-aos="fade-up"> 
                                @if (!empty($q_category))
                                    Categoría: {{ $category_filter->name }}
                                @endif
                                @if (!empty($q_search))
                                    Palabra clave: {{ $q_search }}
                                @endif
                                @if (empty($q_category) && empty($q_search))
                                    Entradas Destacadas
                                @endif
                            </h4>
                            <div class="blog_items">
                                @foreach($posts as $post)
                                    <div class="blog_item" data-aos="fade-up" onclick="redirectRoute('{{ route('single_blog') }}?post_id={{ $post->id }}')">
                                        <div class="blog_content">
                                            <div class="thumb">
                                                <img lazy="loading" src="{{ asset('storage/blog/' . $post->cover_image) }}" alt="Imagen de portada">
                                            </div>
                                            <div class="content">
                                                <div class="button">
                                                    <button type="button" class="secondaryButton buttonH1">
                                                        {{ $post->category->name }}
                                                    </button>
                                                    <h5 class="title">
                                                        <a href="{{ route('single_blog') }}?post_id={{ $post->id }}">
                                                            {{ $post->title }}
                                                        </a>
                                                    </h5>
                                                    <hr>
                                                    <ul class="date">
                                                        <li><span>{{ $post->publish_date }}</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{ $posts->links('components.pagination') }}
                </div>
            </div>
        </div>
    </section>

    
@endsection