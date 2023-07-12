@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!--== hero area here ==-->
  <section class="hero">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-12 p-0">
          <div class="hero_wrapper">
            <!-- container area here  -->
            <div class="container">
              <div class="row justify-content-center ">
                <div class="col-lg-9">
                  <div class="hero_container">

                    <h4 class="hero_sub-title">Tu Jurídico de confianza</h4>
                    <h1 class="hero_header" data-aos="fade-up">
                      Comprometidos con la Excelencia y Dedicados a brindar asesoría jurídica integral.</h1>
                    <p class="hero_des" data-aos="fade-up">
                      Bienvenido a Mercader & Molina Abogados
                    </p>
                    <ul class="hero_button" data-aos="fade-up">
                      <li>
                        <button onclick="redirectRoute('{{ route('index') }}#servicio')" type="button" class="clientButton buttonH1">Servicios</button>
                      </li>
                      <li>
                        <button onclick="redirectRoute('{{ route('index') }}#contact')" type="button" class="transparentButton buttonH1">Contacto</button>
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
  <!--== hero area ends here ==-->

  <!--== about features area here ==-->
  <section id="about" class="about_features margin">
    <div class="abf_wrapper">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="abf_container">
              <!-- feature items area here  -->
              <div class="abf_items">
                <div class="abf_item">
                  <div class="row d-flex">
                    <!-- main content  -->
                    <div class="col-md-7 content ">
                      <!-- section header area here  -->
                      <div class="section_header">
                        <div class="d-flex2 mb-3">
                          <p class="w10"></p>
                          <span>Quiénes somos</span>
                        </div>
                        <h2 class="section_heading" data-aos="fade-up">
                          Somos un equipo de abogados especializados
                        </h2>
                      </div>
                      <!-- list  -->
                      <div class="abf_description">
                        <p data-aos="fade-up">
                          ¡Bienvenido a Mercader & Molina!, Somos un equipo altamente calificado y comprometido que se especializa en diversas áreas legales. Con una amplia experiencia en los ámbitos corporativo, litigio, inmobiliario y auditoría legal, brindamos soluciones legales integrales y eficientes para satisfacer las necesidades de nuestros clientes. Nuestro enfoque personalizado y orientado al cliente nos permite comprender a fondo los desafíos legales que enfrentan las empresas y los particulares. 
                        </p>
                      </div>
                      <!-- button  -->
                      <div class="abf_button" data-aos="fade-up">
                        <button onclick="redirectRoute('{{ route('index') }}#servicio')" type="button" class="mainButton buttonH1">Ver servicios</button>
                      </div>
                    </div>
                    <div class="col-md-1 d-grid justify-content-center">
                      <div class="separador"></div>
                    </div>
                    <!-- thumbnail image  -->
                    <div class="col-md-4 thumb" data-aos="fade-up">
                      <div class="c_accor_content">
                          <ul>
                            <li class="text_serv"><span class="numeracion">01</span> Corporativo</li>
                            <li class="text_serv"><span class="numeracion">02</span> Litigio</li>
                            <li class="text_serv"><span class="numeracion">03</span> Inmobiliario</li>
                            <li class="text_serv"><span class="numeracion">04</span> Auditoría Legal</li>
                          </ul>
                          
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
  <!--== about features area ends here ==-->

  <section id="servicio" class="features2 sp_120 margin">
    <div class="features_wrapper2">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="features_container2">
              <!-- section header area here  -->
              <div class="d-flex2 mb-3">
                <p class="w10"></p>
                <span>Nuestros Servicios</span>
              </div>
              <div class="section_header2">
                <h2 class="section_heading2 aos-init aos-animate urbanist" data-aos="fade-up">
                  Brindando servicios <br> <span data-aos="slide-left" data-aos-delay="100" class="underline2 aos-init aos-animate">legales</span> de confianza</h2>
                <p class="desc aos-init aos-animate text-end" data-aos="fade-up">
                  Asesoramiento legal especializado
                </p>
              </div>
              <!-- feature items area here  -->
              <div class="features_items2">
                <div class="features_item2 aos-init aos-animate" data-aos="fade-up">
                  <div class="features_content2">
                    <div class="thumb">
                      <img src="assets/images/icon/features4.png" alt="">
                    </div>
                    <div class="content">
                      <h4 class="section_heading2">Asesoramiento legal</h4>
                      <p>
                        Orientación jurídica experta en áreas legales, desde derecho civil y laboral hasta derecho penal y fiscal.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="features_item2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                  <div class="features_content2">
                    <div class="thumb">
                      <img src="assets/images/icon/features5.png" alt="">
                    </div>
                    <div class="content">
                      <h4 class="section_heading2">Representación en litigios</h4>
                      <p>
                        Defender los intereses de los clientes en procedimientos judiciales y administrativos, ya sea en tribunales civiles, penales, laborales o administrativos.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="features_item2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                  <div class="features_content2">
                    <div class="thumb">
                      <img src="assets/images/icon/features6.png" alt="">
                    </div>
                    <div class="content">
                      <h4 class="section_heading2">Derecho corporativo</h4>
                      <p>
                        Asesoramiento legal en temas relacionados con la constitución de sociedades, contratos comerciales, y otras áreas vinculadas al ámbito empresarial.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="features_item2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                  <div class="features_content2">
                    <div class="thumb">
                      <img src="assets/images/icon/features7.png" alt="">
                    </div>
                    <div class="content">
                      <h4 class="section_heading2">Derecho laboral</h4>
                      <p>Servicios relacionados con el derecho laboral, como redacción y revisión de contratos laborales, resolución de conflictos laborales, entre otros.</p>
                    </div>
                  </div>
                </div>
                <div class="features_item2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                  <div class="features_content2">
                    <div class="thumb">
                      <img src="assets/images/icon/features9.png" alt="">
                    </div>
                    <div class="content">
                      <h4 class="section_heading2">Derecho de familia</h4>
                      <p>Asistir en asuntos de derecho familiar y acuerdos prenupciales.</p>
                    </div>
                  </div>
                </div>
                <div class="features_item2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                  <div class="features_content2">
                    <div class="thumb">
                      <img src="assets/images/icon/features8.png" alt="">
                    </div>
                    <div class="content">
                      <h4 class="section_heading2">Planificación patrimonial y sucesiones</h4>
                      <p>Ayudar a los clientes a planificar la distribución de sus activos y propiedades, redactar testamentos, establecer fideicomisos y gestionar asuntos relacionados con herencias y sucesiones.</p>
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

  <section id="faq" class=" sp_1202 margin pb-6rem margin">
    <div class="abf_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_header">
                        <h2 class="section_heading font-weight-600 monserrat aos-init aos-animate" data-aos="fade-up">
                        </h2>
                    </div>
                    <div class="abf_container">
                        <div class="abf_items">
                            <div class="abf_item">
                                <div class="abf_content">
                                    <div class="content">
                                        <div class="section_header">
                                            <div class="d-flex2 mb-3">
                                                <p class="w10"></p>
                                                <span>Preguntas frecuentes</span>
                                            </div>
                                            <h2 class="aos-init aos-animate services" data-aos="fade-up">
                                              Defendiendo tus Derechos y Resolviendo tus Problemas Legales
                                            </h2>
                                        </div>
                                        <div class="c_accor_content">
                                          <div class="accordion" id="accordionExample">
                                            <!-- item  -->
                                            <div class="accordion-item aos-init aos-animate" data-aos="fade-up">
                                              <h2 id="headingOne">
                                                <button class="accordion-button albert_sans" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">¿Qué servicios legales ofrece su despacho de abogados en el ámbito corporativo?</button>
                                              </h2>
                                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                  <p>En Mercader & Molina, brindamos una amplia gama de servicios legales en el ámbito corporativo. Esto incluye asesoramiento en la constitución de empresas, contratos comerciales, fusiones y adquisiciones, protección de la propiedad intelectual, cumplimiento normativo, resolución de conflictos entre socios y mucho más. Nuestro objetivo es proporcionar soluciones legales sólidas y estratégicas para ayudar a las empresas a alcanzar el éxito.</p>
                                                  
                                                </div>
                                              </div>
                                            </div>
                                            <!-- item  -->
                                            <div class="accordion-item aos-init aos-animate" data-aos="fade-up">
                                              <h2 id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">¿Cómo puede ayudar su despacho de abogados en casos de litigio?</button>
                                              </h2>
                                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                  <p>
                                                    Contamos con un equipo de abogados litigantes experimentados que están preparados para representar sus intereses en disputas legales. Ya sea en casos de litigio civil, penal o administrativo, nuestro despacho está dedicado a proteger sus derechos y buscar la mejor resolución posible. Realizaremos un exhaustivo análisis de su caso, desarrollaremos estrategias efectivas y lo guiaremos a lo largo de todo el proceso legal.
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- item  -->
                                            <div class="accordion-item aos-init aos-animate" data-aos="fade-up">
                                              <h2 id="headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">¿Qué servicios legales ofrecen en el ámbito inmobiliario?</button>
                                              </h2>
                                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                  <p>
                                                    En el área inmobiliaria, ofrecemos una amplia gama de servicios legales. Esto incluye la asesoría en transacciones de compra y venta de propiedades, contratos de arrendamiento, due diligence inmobiliario, resolución de conflictos en materia de propiedad, regulación urbanística y mucho más. Nuestro equipo de abogados especializados en derecho inmobiliario está comprometido en proporcionar soluciones legales eficientes y proteger sus intereses.
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- item  -->
                                            <div class="accordion-item aos-init aos-animate" data-aos="fade-up">
                                              <h2 id="headingFour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">¿Qué implica la auditoría legal y cómo puede beneficiar a mi empresa?</button>
                                              </h2>
                                              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                  <p>
                                                    La auditoría legal es un proceso de revisión y análisis exhaustivo de la situación legal de una empresa. Nosotros le ayudamos a identificar riesgos legales, evaluar el cumplimiento normativo, revisar contratos y acuerdos, y brindar recomendaciones para mejorar la gestión legal de su empresa. Una auditoría legal adecuada puede ayudar a prevenir problemas legales futuros, mejorar la eficiencia y minimizar riesgos legales, brindándole tranquilidad y seguridad en sus operaciones comerciales.
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="accordion-item aos-init aos-animate" data-aos="fade-up">
                                              <h2 id="headingfive">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">¿Cómo puedo solicitar una consulta o contratar sus servicios legales?</button>
                                              </h2>
                                              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                  <p>
                                                    Para solicitar una consulta o contratar nuestros servicios legales, puede comunicarse con nosotros a través de nuestra página de contacto o llamarnos directamente. Estaremos encantados de programar una reunión con uno de nuestros abogados expertos para discutir su caso y sus necesidades legales específicas. Durante la consulta, evaluaremos su situación y le proporcionaremos información detallada sobre cómo podemos ayudarle y cuáles son los costos asociados.
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- item  -->
                                            
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

  <div class="customer2 margin">
      <div class="customer_wrapper margin">
          <div class="container">
              <div class="row display-repons">
                  <div class="col-sm-12 col-md-6 d-grid align-items-center">
                      <div class="customer_container">
                          <div class="customer_items">
                              <div class="customer_item">
                                <div class="customer_content m-auto">
                                    <!-- section header area here  -->
                                    <div class="d-flex2 mb-3">
                                      <p class="w10"></p>
                                      <span class="albert_sans">¡Estamos para ayudarte!</span>
                                    </div>
                                    <div class="section_header2 ">
                                        <h4 class="mt-3 subtitle2 ">¿Deseas más <br> información? </h4>
                                    </div>
                                    <div class="customer_button aos-init aos-animate mb-4rem" data-aos="fade-up">
                                    <button onclick="redirectRoute('{{ route('index') }}#contact')" type="button" class="clientButton buttonH2 text-client">Contacto</button>
                                    </div>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-12 col-md-6 d-grid justify-content-center ">
                    <img src="{{asset('assets/images/banner/mercader_molina.png')}}" alt="mercader & molina">
                  </div>
              </div>
          </div>
      </div>
  </div>

  <section class="news-page margin">
    <div class="container">
        <div class="row justify-content-center gap-respons">
            <!--news One Single Start-->
            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="news-one__single">
                    <div class="news-one__img-box">
                        <div class="news-one__img">
                            
                        </div>
                        <div class="news-one__content">
                            <ul class="news-one__meta list-unstyled">
                                <li>
                                    <div class="thumb_icon">
                                      <img src="{{asset('assets/images/icon/icon_mercader.svg')}}" alt="icon mercader">
                                    </div>
                                </li>
                            </ul>
                            <h3 class="news-one__title">Lic. Mauricio Mercader Alonso</h3>
                            <p class="news-one-puesto">Director General & Socio</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--news One Single End-->
            <!--news One Single Start-->
            <div class="col-xl-5 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
              <div class="news-one__single">
                  <div class="news-one__img-box">
                      <div class="news-one__img">
                          
                      </div>
                      <div class="news-one__content">
                          <ul class="news-one__meta list-unstyled">
                              <li>
                                  <div class="thumb_icon">
                                    <img src="{{asset('assets/images/icon/icon_mercader.svg')}}" alt="icon mercader">
                                  </div>
                              </li>
                          </ul>
                          <h3 class="news-one__title">Mtra. Dalva Molina Verduchi</h3>
                          <p class="news-one-puesto">Director General & Socia</p>
                          
                      </div>
                  </div>
              </div>
          </div>
            <!--news One Single End-->
            <!--news One Single Start-->
            
        </div>
    </div>
  </section>

  <section class="blog latest_blog2 margin">
    <div class="blog_wrapper">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="blog_container">
              <div class="latest_content">
                <!-- section header area here  -->
                <div class="d-flex2 mb-3">
                  <p class="w10"></p>
                  <span>Nuestros artículos</span>
                </div>
                <div class="section_header2">
                  <h2 class="section_heading2 aos-init aos-animate albert_sans" data-aos="fade-up">
                    Te mantenemos actualizado
                  </h2>
                </div>
                <div class="customer_button aos-init aos-animate" data-aos="fade-up">
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="blog_items">
                @foreach ($posts as $post)
                <div class="blog_item aos-init aos-animate" data-aos="fade-up">
                  <div class="blog_content" onclick="redirectRoute('{{ route('single_blog') }}?post_id={{ $post->id }}')" >
                    <div class="thumb">
                      <img lazy="loading" src="{{ asset('storage/blogs/' .$post->cover_image) }}" alt="Imagen de portada">
                    </div>
                    <div class="content">
                      <div class="button">
                        <button type="button" class="secondaryButton buttonH1">{{ $post->category->name }}</button>
                        <h5 class="title"><a href="{{ route('single_blog') }}?post_id={{ $post->id }}">
                          {{ $post->title }}
                        </a></h5>
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

  <section id="contact" class="contact margin">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="contact_wrapper sp_120">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="contact_container">
                    <div class="contact_info">
                      <!-- section header area here  -->
                      <div class="section_header">
                        <h2 class="section_heading aos-init aos-animate" data-aos="fade-up">Pongámonos en contacto</h2>
                        <p class="desc aos-init aos-animate" data-aos="fade-up">
                          Estamos para servirte
                        </p>
                      </div>
                      <!-- social  -->
                      <ul class="social">
                        <li class="social_list aos-init aos-animate" data-aos="fade-up">
                          <div class="social_content">
                            <div class="thumb">
                              <span><i class="fa-brands fa-facebook-f"></i></span>
                            </div>
                            <div class="content">
                              <h4><a href="#!">facebook</a></h4>
                              <p>Mercader & Molina</p>
                            </div>
                          </div>
                        </li>
                        <li class="social_list aos-init aos-animate" data-aos="fade-up">
                          <div class="social_content">
                            <div class="thumb">
                              <span><i class="fa-brands fa-instagram"></i></span>
                            </div>
                            <div class="content">
                              <h4><a href="#!">Instagram</a></h4>
                              <p>Mercader & Molina</p>
                            </div>
                          </div>
                        </li>
                        <li class="social_list aos-init aos-animate" data-aos="fade-up">
                          <div class="social_content">
                            <div class="thumb">
                              <span><i class="fa-brands fa-twitter"></i></span>
                            </div>
                            <div class="content">
                              <h4><a href="#!">Twitter</a></h4>
                              <p>Mercader & Molina</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <!-- contact form  -->
                    <div class="contact_form">
                      <form action="mail.php" method="POST">
                        <div class="cf_content">
                          <div class="cf_group">
                            <div class="cf_field aos-init aos-animate" data-aos="fade-up">
                              <input type="text" name="your-name" placeholder="Nombre">
                            </div>
                            <div class="cf_field aos-init aos-animate" data-aos="fade-up">
                              <input type="email" name="email" placeholder="Email">
                            </div>
                          </div>
                          <div class="cf_group">
                            <div class="cf_field aos-init aos-animate" data-aos="fade-up">
                              <input type="number" name="number" placeholder="Telefono">
                            </div>
                            <div class="cf_field aos-init aos-animate" data-aos="fade-up">
                              <input type="text" name="company-name" placeholder="Empresa">
                            </div>
                          </div>
                          <div class="cf_message">
                            <div class="cf_field aos-init aos-animate" data-aos="fade-up">
                              <textarea name="message" id="message" placeholder="Mensaje" cols="30" rows="10"></textarea>
                            </div>
                          </div>
                          <div class="cf_button aos-init aos-animate" data-aos="fade-up">
                            <button type="button" class="secondaryButton buttonH1">Enviar Mensaje</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- vector  -->
            <div class="vector">
              <img data-aos="slide-left" data-aos-delay="100" src="assets/images/vector/contactVector.png" alt="" class="aos-init aos-animate">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="margin">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.7096301586976!2d-88.29625652597132!3d18.54201936852107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5ba4f27b62fd71%3A0x9d2eba334378451d!2sCondominio%20Framboyanes%2C%2077086%20Chetumal%2C%20Q.R.!5e0!3m2!1ses!2smx!4v1689100104088!5m2!1ses!2smx"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="google-map__one"></iframe>
  </section>
  
@endsection
