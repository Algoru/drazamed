@extends('design.layout.app')

@section('custom-css')
<link rel="stylesheet" href="/css/contact.css" />
@endsection

@section('content')
<section class="contact-section">
    <div class="contact-content">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="panel">
                    <h2 class="panel-title">
                        Complete el siguiente formulario y estaremos atentos
                        para resolver sus dudas
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation
                    </p>

                    <form class="panel-form mt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="panel-label" for="txt-name">Nombre Completo</label>
                                <input
                                    type="text"
                                    id="txt-name"
                                    name="txt-name"
                                    class="panel-input"
                                    placeholder="John Doe"
                                    required
                                />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="panel-label" for="txt-phone"
                                    >Teléfono de Contacto</label
                                >
                                <input
                                    type="tel"
                                    id="txt-phone"
                                    name="txt-phone"
                                    class="panel-input"
                                    placeholder="(318) XX776"
                                    required
                                />
                            </div>
                            <div class="col-md-6">
                                <label class="panel-label" for="txt-email"
                                    >Correo Electrónico</label
                                >
                                <input
                                    type="email"
                                    id="txt-email"
                                    name="txt-email"
                                    class="panel-input"
                                    placeholder="ejemplo@dominio.com"
                                    required
                                />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="txt-message">Mensaje</label>
                                <textarea
                                    name="txt-message"
                                    id="txt-message"
                                    class="panel-textarea panel-input"
                                    cols="30"
                                    rows="10"
                                    placeholder="Escribe tu mensaje aquí..."
                                ></textarea>
                                <button type="button" class="mt-4 dra-button">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="panel md-mt-20">
                    <h2 class="panel-title">Canales de comunicación</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation
                    </p>

                    <div class="row middle-xs">
                        <div class="col-lg-2">
                            <img class="panel-icon" src="/assets/images/technology.svg" alt="phone contact logo">
                        </div>
                        <div class="col-lg-10">
                            <h4 class="panel-title">Teléfonos de Contacto:</h4>
                            <p>+571 012 3456</p>
                        </div>
                    </div>

                    <div class="row middle-xs">
                        <div class="col-lg-2">
                            <img class="panel-icon" src="/assets/images/box.svg" alt="our location contact logo">
                        </div>
                        <div class="col-lg-10">
                            <h4 class="panel-title">Nuestra Ubicación:</h4>
                            <p>Carrera 6 No. 1-20 Cajicá - Cundinamarca</p>
                        </div>
                    </div>

                    <div class="row middle-xs">
                        <div class="col-lg-2">
                            <img class="panel-icon" src="/assets/images/multimedia.svg" alt="our email contact logo">
                        </div>
                        <div class="col-lg-10">
                            <h4 class="panel-title">Correo Electrónico:</h4>
                            <p>info@drazamed.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
