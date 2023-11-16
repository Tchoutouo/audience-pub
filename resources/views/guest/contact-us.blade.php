@extends('guest.layouts.app')
@section('title')
    Contactez-nous
@endsection
@section('content')
     <!-- ***** Header Area End ***** -->

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <h2>Contactez-nous</h2>
                        <div class="div-dec"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Main Banner Area End ***** -->

    <section class="map">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="map">
                        @php
                            $geolat = 3.8615687;
                            $geolng = 11.5355614;
                        @endphp
                        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2791.78997548554!2d144.9805125252687!3d-37.84132841005892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad6681f3e9cb7e1%3A0x9d52778f56cab5a8!2sFawkner%20Park!5e1!3m2!1sen!2sth!4v1648201596364!5m2!1sen!2sth" width="100%" height="450px" frameborder="0" style="border:0; border-radius: 5px; position: relative; z-index: 2;" allowfullscreen=""></iframe> --}}
                        <iframe src="http://maps.google.com/maps?q='.$geolat.','.$geolng.'&t=k&z=16&output=embed" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="info-item">
                                <i class="fa fa-envelope"></i>
                                <h4>Addresse E-mail</h4>
                                <a href="#">www.audiencespub@gmail.com</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="info-item">
                                <i class="fa fa-phone"></i>
                                <h4>Numéro de Téléphone</h4>
                                <a href="#">(+237) 678 864 546 | 693 609 034</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="info-item">
                                <i class="fa fa-map-marked-alt"></i>
                                <h4>Addresse</h4>
                                <a href="#">Yaoundé - Cameroun | Rue Ceper</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us-form mb-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h5>Contactez-nous</h5>
                        <h4>N'hésitez pas à nous envoyer un message</h4>
                    </div>
                </div>

                <div class="col-lg-10 offset-lg-1">
                    <form id="contact" action="{{route('SendMail')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Votre Nom..." autocomplete="on" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                                    @if ($errors->has('name'))
                                        <span class="text-danger" role="alert">
                                            <small>Saisie incorrecte.</small>
                                        </span>
                                    @endif
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="phone" name="phone" id="phone" placeholder="Votre numéro de téléphone..." autocomplete="on" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" required>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger" role="alert">
                                            <small>Saisie incorrecte.</small>
                                        </span>
                                    @endif
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Votre E-mail..." class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required="">
                                    @if ($errors->has('email'))
                                        <span class="text-danger" role="alert">
                                            <small>Saisie incorrecte.</small>
                                        </span>
                                    @endif
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="subject" name="subject" id="subject" placeholder="Sujet..." autocomplete="on" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('subject'))
                                        <span class="text-danger" role="alert">
                                            <small>Saisie incorrecte.</small>
                                        </span>
                                    @endif
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" id="message" placeholder="Veuillez saisir votre message" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}">
                                    </textarea>
                                    @if ($errors->has('message'))
                                        <span class="text-danger" role="alert">
                                            <small>Saisie incorrecte.</small>
                                        </span>
                                    @endif
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="orange-button fs-5 fw-bold" style="width: 100%;">Envoyer</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
