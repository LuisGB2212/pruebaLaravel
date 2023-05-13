<!-- Tell-->
<section class="section section-sm section-first bg-default">
    <div class="container">
        <h3 class="heading-3">Contáctanos</h3>
        <form class="form-style-1" method="post" action="{{ route('send_message') }}">
            @csrf
            <div class="row row-20 gutters-20">
                <div class="col-md-6 col-lg-4 oh-desktop">
                    <div class="form-wrap wow slideInDown">
                        <input class="form-input" id="contact-your-name-6" type="text" required name="name" />
                        <label class="form-label" for="contact-your-name-6">Nombre completo*</label>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 oh-desktop">
                    <div class="form-wrap wow slideInUp">
                        <input class="form-input" id="contact-email-6" type="email" required name="email"  />
                        <label class="form-label" for="contact-email-6">Correo*</label>
                    </div>
                </div>
                <div class="col-lg-4 oh-desktop">
                    <div class="form-wrap wow slideInDown">
                        <!--Select 2-->
                        <select class="form-input" name="service" required >
                            <option value="">Seleccionar servicio</option>
                            <option value="Date-In">Dine-In</option>
                            <option value="Carry-Out">Carry-Out</option>
                            <option value="Event Catering">Event Catering</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-wrap wow fadeIn">
                        <label class="form-label" for="contact-message-6">Mensaje</label>
                        <textarea class="form-input textarea-lg" id="contact-message-6" name="message" ></textarea>
                    </div>
                </div>
            </div>
            <div class="group-custom-1 group-middle oh-desktop">
                <button class="button button-lg button-primary button-winona wow fadeInRight" type="submit">Enviar Mensaje</button>
                <!-- Quote Classic-->
                {{-- <article class="quote-classic quote-classic-3 wow slideInDown">
                    <div class="quote-classic-text">
                        <p class="q">Please reserve your table at least 1 day in advance.</p>
                    </div>
                </article> --}}
            </div>
        </form>
    </div>
</section>