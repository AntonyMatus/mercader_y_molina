@extends('layout.app')

@section('title', 'Servicios')

@section('styles')
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
@endsection

@section('content')
    <section class="inde_hero">
        <div class="inde_hero_wrapper">
            <div class="container">
            <div class="row">
                <div class="col-12">
                <div class="inde_hero_container">
                    <div class="thumb secction_thumb aos-init aos-animate" data-aos="fade-up">
                    <img loading="lazy" src="{{ asset('assets/images/services/page-services.png') }}" alt="page_services">
                    </div>
                    <div class="inde_hero_content aos-init aos-animate" data-aos="fade-up">
                    <div class="single_content">
                        <div class="thumb">
                        <img src=" {{ asset('assets/images/services/icon_servicios.png') }} " alt="icon_services">
                        </div>
                        <h4 class="name">Regina González</h4>
                        <p class="info">CEO - NUMANA</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="inde_about sp_bottom120 pb-0">
        <div class="inde_about_wrapper">
            <div class="container p-0">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="inde_about_container">
                            <div class="section_header">
                                <h2 class="section_heading aos-init aos-animate font-weight-600" data-aos="fade-up">Servicios</h2>
                                <p data-aos="fade-up" class="section_heading3 aos-init aos-animate text-dark" style="max-width: 700px; text-align: center;">Las consultas se realizarán en línea, serán 100% <br> personalizadas según tus necesidades.</p>
                            </div>
                            @foreach($services as $service)
                                <div class="content mb-5rem border_line">
                                    <h2 class="background2 mb-4 p-0" data-aos="fade-up">
                                        <span class="decoration aos-init aos-animate text-inherit margin " data-aos="slide-left" data-aos-delay="100">
                                            {{ $service->name }}
                                        </span>
                                    </h2>
                                    <p class="margin" data-aos="fade-up">
                                        {{ $service->description }}
                                    </p>
                                    <h5 class="mb-2 font-weight-400 margin">Duración: {{ $service->time }} minutos</h5>
                                    <div class="row price mb-5rem margin">
                                        <div class="col-md-12 content-flex p-0 ">
                                            <div class="precio-flex">
                                                <h2 class="fs-35px ">
                                                    <span class="">$ </span>{{ number_format($service->eur_price, 2) }} <span class="fz-10px">USD</span>
                                                </h2>
                                            </div>
                                            <button onclick="selectService('{{ $service->link_calendly }}')" type="button" class="mainButton buttonH1">
                                                ¡Agendar una consulta!
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta cta3">
        <div class="cta_wrapper2 margin">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="cta_container">
                  <div class="section_header2">
                    <h2 class="section_heading2 aos-init aos-animate" data-aos="fade-up">¡Estamos para ayudarte! </h2>
                    <p data-aos="fade-up" class="aos-init aos-animate">Sí tienes alguna duda sobre los servicios, ¡contáctame!</p>
                  </div>
                  <div class="cta_form aos-init aos-animate d-grid2" data-aos="fade-up">
                        <button type="submit" onclick="window.location='https://wa.me/message/FMOIUCOCCMPNL1'" class="contact-button buttonH1" id="btn-subscribe">Contacto vía Whatsapp</button>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- patterns  -->
        
    </section>
@endsection

@section('scripts')
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
    <script type="text/javascript">
        const selectService = (url) => { 
            Calendly.initPopupWidget({url});
            return false; 
        }
    </script>
@endsection