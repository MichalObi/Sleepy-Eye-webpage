<?php if (!isset($inside) || !$inside) exit; ?>


        <div class="container">
            <div class="row-centered">
                <div class="col-centered">
                    <h2>Masz pytania ? Skontaktuj się z nami.</h2>
                </div>
            </div>
            <div class="row">
            	    <div class="col-xs-12 col-sm-12 col-md-4" id="map_form">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d155797.70828953362!2d16.901665799999993!3d52.40052855000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spl!2spl!4v1412674503460" width="400" height="300" frameborder="0" style="border:0"></iframe>

                    <div id="map_subtitle">
                        <h6>Działamy na terenie Poznania i okolic.</h6>
                        <h5>Na powyższej mapce możesz sprawdzić nasze aktualne położenie.</h5>
                    </div>
                </div>


                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form class="col-xs-12 col-sm-12 col-md-7 col-md-push-2" name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Imie i Nazwisko</label>
                                <input type="text" class="form-control" placeholder="Imie i nazwisko" id="name" required data-validation-required-message="Proszę podać swoje imię i nazwisko.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Adres Email</label>
                                <input type="email" class="form-control" placeholder="Adres mail" id="email" required data-validation-required-message="Proszę podać swój adres mail.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Numer Telefonu</label>
                                <input type="tel" class="form-control" placeholder="Numer telefonu" id="phone" required data-validation-required-message="Proszę podać swój numer telefonu">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Wiadomość</label>
                                <textarea rows="5" class="form-control" placeholder="Twoja wiadomość" id="message" required data-validation-required-message="Proszę wprowadzić wiadomość."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Wyślij</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>