@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <section class="aHero blog_details_hero">
        <div class="aHero_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="aHero_container">
                            <div class="section_header">
                                <h2 class="section_heading urbanist" data-aos="fade-up">{{ $post->title }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_details pb-60px">
        <div class="bd_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bd_container">
                            <div class="bd_post_info">
                                <div class="profile" data-aos="fade-up">
                                    <div class="thumb">
                                        <img loading="lazy" src="https://via.placeholder.com/50" {{--    {{ asset('storage/authors/' . $post->author->cover_image) }} --}} alt="Foto del autor">
                                    </div>
                                    <div class="name">
                                        <h4 class="urbanist">{{ $post->author->name }}</h4>
                                    </div>
                                </div>
                                <div class="publish_date" data-aos="fade-up" data-aos-delay="100">
                                    <div class="thumb"><i class="fa-solid fa-calendar"></i></div>
                                    <div class="date">
                                        <p>{{ $post->publish_date }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bd_content">
                                <div class="thumb text-center" data-aos="fade-up">
                                    <img loading="lazy" src="https://via.placeholder.com/500x400" {{-- {{ asset('storage/blog/' . $post->cover_image) }}"--}} alt="Imagen de portada">
                                </div>
                                <div class="content">
                                    {!! $post->body !!}
                                </div>
                                <div class="testimonial">
                                    @foreach($post->images as $image)
                                        <div class="single_thumb" data-aos="fade-up">
                                            <img loading="lazy" src="{{ asset('storage/extra_images/' . $image->filename) }}" alt="Imagen extra">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="bd_info">
                                    <p data-aos="fade-up">
                                        Publicado el <span class="date"> {{ $post->publish_date }}</span> por <a class="name">{{ $post->author->name }}</a>
                                    </p>
                                    <div class="share" data-aos="fade-up" data-aos-delay="100">
                                        <p>Compartir este artículo</p>
                                        <ul>
                                            <li>
                                                <a 
                                                    type="button" 
                                                    onclick="copyLink('{{ route("single_blog") }}?post_id={{ $post->id }}')"
                                                >
                                                    <i class="fa-solid fa-link"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://www.facebook.com/sharer.php?u={{ route('single_blog') }}?post_id={{ $post->id }}"
                                                    target="_blank" 
                                                    rel="noopener noreferrer"
                                                >
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://twitter.com/intent/tweet?url={{ route('single_blog') }}?post_id={{ $post->id }}" 
                                                    target="_blank" 
                                                    rel="noopener noreferrer"
                                                >
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>
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

    <section class="blog margin">
        <div class="blog_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blog_container">
                        <h4 class="blog_heading" data-aos="fade-up" data-aos-delay="100">Entradas similares</h4>
                            <div class="blog_items">
                                @foreach($related_posts as $item)
                                    <div class="blog_item" data-aos="fade-up" onclick="redirectRoute('{{ route('single_blog') }}?post_id={{ $item->id }}')">
                                        <div class="blog_content">
                                            <div class="thumb">
                                                <img loading="lazy" src="{{ asset('storage/blog/' . $item->cover_image) }}" alt="Imagen de portada">
                                            </div>
                                            <div class="content">
                                                <div class="button">
                                                    <button type="button" class="secondaryButton buttonH1">
                                                        {{ $item->category->name }}
                                                    </button>
                                                    <h5 class="title">
                                                        <a href="{{ route('single_blog') }}?post_id={{ $item->id }}">
                                                            {{ $item->title }}
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

    <section class="grow">
        <div class="container-fluid p-0">
          <div class="row">
            <div class="col-12 p-0">
                <div class="container ">
                  <div class="row">
                    <div class="col-12 m-0 p-0">
                      <div class="grow_container">
                        <div class="grow_content">
                          <div class="grow_items">
                            <div class="grow_item aos-init aos-animate" data-aos="fade-up">
                              <div class="content">
                                <img src="https://via.placeholder.com/200" alt="" width="200px">
                                <h4>¡Agenda tu cita ahora!</h4>
                                <button type="button" onclick="redirectRoute('{{ route("home") }}')" class="clientButton buttonH1 mt-5 monserrat fs-20px">¡Agendar ahora!</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </section>
@endsection

@section('scripts')
    
    <script type="text/javascript">

        const copyLink = (value) => {
            const input = document.createElement('input');
            input.value = value;
            document.body.appendChild(input);
            input.select();
            document.execCommand('copy');
            document.body.removeChild(input);
        }

    </script>

@endsection