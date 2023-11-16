@extends('guest.layouts.app')

@section('title')
    Accueil
@endsection
<style>
    .testbtn{
        border-radius:50% !important;
        background-color:#007E94 !important;
        display: flex;
        width: 50px;
        height: 50px;
        position: fixed;
        bottom: 60px;
        align-items: center;
        justify-content: center;
        opacity: 0;
        pointer-events: none;
        transition: all .1s;
        left: 93%;
        border-color: #D8CE77;
        color: white;
    }

    #testbtn2{
        padding: auto !important;
        bottom: 20%;
        width: 150px !important;
        height: 50px;
        position: fixed;
        right: 40px;
        background-color: #D8CE77;
        color:white;
        border-color: white;

    }
    #testbtn2:hover{
            background-color : #007E94 !important ;
            color: white;
          border-color: white;
        }

        html{
            scroll-behavior: smooth;
        }


        .testbtn.active{
            bottom: 60px;
            pointer-events: auto;
            opacity:1;
        }

        .testbtn:hover{
            background-color : #D8CE77 !important ;
        }


        @media only screen and (max-width: 990px) { #testbtn2{
            right: 55px !important;
        }
        }

        @media only screen and (max-width: 990px) { .testbtn{
            left: 80%;
        }
        }
</style>
@section('content')
     <!-- ***** Main Banner Area Start ***** -->
    <div class="swiper-container" id="top">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-inner" style="background-image:url(assets/images/AudiencesPub.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="header-text">
                                    <h2>Apporter de <em>l’innovation</em>  dans l’affichage urbaine au<em> Cameroun</em></h2>
                                    <div class="div-dec"></div>
                                    <p>Apporter de l’innovation dans l’affichage urbaine au Cameroun en proposant aux annonceurs des supports innovants à forte audience qui concourt en même temps à l’embellissement de nos villes.</p>
                                    <div class="buttons">
                                        <div class="green-button">
                                            <a href="#">En savoir plus</a>
                                        </div>
                                        <div class="orange-button">
                                            <a href="{{'contact-us'}}">Contactez-nous</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-inner" style="background-image:url(assets/images/realisations/affichage-numerique/IMG_20231110_185306_000.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="header-text">
                                    <h2><em>Développement et implantation</em> <br> des nouveaux supports numériques innovants</h2>
                                    <div class="div-dec"></div>
                                    <p>Développement et implantation des nouveaux supports numériques innovants (de différents types) dans les villes, hôtels, arènes sportives, supermarchés destinés aux grands annonceurs.</p>
                                    <div class="buttons">
                                        <div class="green-button">
                                            <a href="#">En savoir plus</a>
                                        </div>
                                        <div class="orange-button">
                                            <a href="{{'contact-us'}}">Contactez-nous</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-inner" style="background-image:url(assets/images/realisations/REGIE-EVENEMENTIELLE/NICAMEX2023/IMG-20231106-WA0002.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="header-text">
                                    <h2>Pour un quelconque <br><em>évènement</em></h2>
                                    <div class="div-dec"></div>
                                    <p>Pour un quelconque évènement, la régie se charge de la conception des supports (plaquette, carton d’invitation, plan du site, guide du salon, banderoles, affiches), du dossier commercial et marketing ainsi que de la mobilisation de tous les potentiels exposants, annonceurs et mécènes de l’évènement. La vente de tous les espaces de communication du site de l’évènement n’est pas en reste.</p>
                                    <div class="buttons">
                                        <div class="green-button">
                                            <a href="#">En savoir plus</a>
                                        </div>
                                        <div class="orange-button">
                                            <a href="{{'contact-us'}}">Contactez-nous</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-inner" style="background-image:url(assets/images/realisations/REGIE-PRESSE/MAGZI-NEWS/IMG_20231110_73643.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="header-text">
                                    <h2> Commercialisation des espaces <br> <em>publicitaires</em></h2>
                                    <div class="div-dec"></div>
                                    <p>Cette activité consiste à la commercialisation des espaces publicitaires dans les annuaires, des revues, agendas ou des magazines institutionnels.</p>
                                    <div class="buttons">
                                        <div class="green-button">
                                            <a href="#">En savoir plus</a>
                                        </div>
                                        <div class="orange-button">
                                            <a href="{{'contact-us'}}">Contactez-nous</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>

  <!-- ***** Main Banner Area End ***** -->
    <section class="main-services" id="services" >
        <div class="container">
            <div class="section-heading">
                <h6>Notre vision</h6>
                <h4>Nos services</h4>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="left-image">
                                    <img src="assets/images/realisations/REGIE-PRESSE/TECHNOPOLE-MAG/IMG_20231110_114806_525.jpg" height="400" width="530" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="right-text-content">
                                    <i class="fas fa-archive"></i>
                                    <h4>LA REGIE PRESSE</h4>
                                    <p>Cette activité consiste à la commercialisation des espaces publicitaires dans les annuaires, des revues, agendas ou des magazines institutionnels.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="service-item">
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="left-text-content">
                                    <i class="fas fa-archive"></i>
                                    <h4>LA REGIE EVENEMENTIELLE</h4>
                                    <p>Pour un quelconque évènement, la régie se charge de la conception des supports (plaquette, carton d’invitation, plan du site, guide du salon, banderoles, affiches), du dossier commercial et marketing ainsi que de la mobilisation de tous les potentiels exposants, annonceurs et mécènes de l’évènement. La vente de tous les espaces de communication du site de l’évènement n’est pas en reste.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-image">
                                    <img src="assets/images/realisations/REGIE-EVENEMENTIELLE/NICAMEX2023/IMG-20231106-WA0009.jpg" height="400" width="530" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="service-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="left-image">
                                    <img src="assets/images/realisations/affichage-urbain-interurbain/PANNEAU-SUPERSIGN-100M2.jpg" height="400" width="530" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="right-text-content">
                                    <i class="fas fa-archive"></i>
                                    <h4>L’AFFICHAGE URBAIN ET INTERURBAIN</h4>
                                    <p>Consiste à l’implantation des nouveaux mobiliers publicitaires sur des emplacements stratégiques de la ville ainsi que sur des routes nationales destinés à la commercialisation auprès des grands annonceurs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="service-item last-service">
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="right-text-content">
                                    <i class="fas fa-archive"></i>
                                    <h4>L’AFFICHAGE NUMERIQUE</h4>
                                    <p> Développement et implantation des nouveaux supports numériques innovants (de différents types) dans les villes, hôtels, arènes sportives, supermarchés destinés aux grands annonceurs.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="left-image">
                                    <img src="assets/images/realisations/affichage-numerique/IMG_20231110_185306_000.jpg" height="400" width="530" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class=" d-flex justify-content-center">
                <a class="btn btn-primary rounded-5" href="{{'services'}}">Plus de détails >></a>
            </div>
        </div>
    </section>


    <section class="simple-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h4>Le choix <em>intelligent</em></h4>
                </div>
                <div class="col-lg-7">
                    <div class="buttons">
                        <div class="green-button">
                            <a href="#">En savoir plus</a>
                        </div>
                        <div class="orange-button">
                            <a href="{{'contact-us'}}">Contactez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h4>A Propos de nous</h4>
                    <h6>Notre vision</h6>
                </div>
                </div>
                <div class="col-lg-8">
                    <div class="naccs">
                        <div class="tabs">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="menu">
                                        <div class="gradient-border"><span>Notre équipe</span></div>
                                        <div class="gradient-border"><span>Evènements</span></div>
                                        <div class="active gradient-border"><span>Nos partenaires</span></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        <li>
                                            <div>
                                                <img src="assets/images/notre-equipe/equipe.jpg" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <img src="assets/images/realisations/REGIE-EVENEMENTIELLE/NICAMEX2023/IMG-20231106-WA0012.jpg" alt="">
                                            </div>
                                        </li>
                                        <li class="active">
                                            <div>
                                                <div class="row mb-5">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/partenaires/ADAP-INTERNATIONAL.png" width="180" height="180" alt="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img src="assets/images/partenaires/APME.png"  width="180" height="180" alt="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img src="assets/images/partenaires/MAGZI.png"  width="180" height="180" alt="">
                                                    </div>
                                                </div>
                                                <div class="row mb-5">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/partenaires/MAIRIE-SOA.png"  width="180" height="180" alt="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img src="assets/images/partenaires/MARIE-NKOLAFAMBA.png"  width="180" height="180" alt="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img src="assets/images/partenaires/MINMIDT.png" width="180" height="180" alt="">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <img src="assets/images/partenaires/OSBLOCK.png"  width="180" height="180" alt="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img src="assets/images/partenaires/SENAT.png"  width="180" height="180" alt="">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img src="assets/images/partenaires/ZEOM.png"  width="180" height="180" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <h4>Apporter de l’innovation dans l’affichage urbaine au Cameroun.</h4>
                        <p>Dans une société en proie à la modernisation et à la mondialisation, la notion de communication se trouve utilisée partout et pour tout. Elle semble alors avoir pris une importance notoire. Car si communiquer signifiait encore transmettre des informations, sans la prise en compte du récepteur et de son vécu, on relève aujourd'hui que, se sont greffées à cette conception de base, des valeurs principales : la relation, le partage et la communion. Ainsi communiquer devient le fait d'entretenir des relations avec autrui dans un but spécifique, le tout étant mené au travers d'une variété de supports de communication et de stratégies qui vont avoir une incidence plus ou moins pertinente sur la forme, le contenu et l'impact de la communication.</p>
                        <div class="green-button">
                        <a href="about-us.html">A propos de nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="calculator">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="left-image">
                        {{-- <img src="assets/images/calculator-image.png" alt=""> --}}
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-heading">
                        <h6>C'est Gratuit</h6>
                        <h4>Obtenez un plan de notre équipe</h4>
                    </div>
                    <form id="calculate" action="{{route('SendMail')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="name">Votre nom</label>
                                    <input type="name" name="name" id="name" placeholder="" autocomplete="on" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                                    @if ($errors->has('name'))
                                        <span class="text-danger" role="alert">
                                            <small>Saisie incorrecte.</small>
                                        </span>
                                    @endif
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="email">E-mail</label>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required="">
                                    @if ($errors->has('email'))
                                        <span class="text-danger" role="alert">
                                            <small>Saisie incorrecte.</small>
                                        </span>
                                    @endif
                                </fieldset>
                            </div>
                            <input type="phone" name="phone" value="000000000" hidden>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="subject">Sujet</label>
                                    <input type="subject" name="subject" id="subject" placeholder="" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" autocomplete="on" >
                                    @if ($errors->has('subject'))
                                        <span class="text-danger" role="alert">
                                            <small>Saisie incorrecte.</small>
                                        </span>
                                    @endif
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="chooseOption" class="form-label">Votre demande</label>
                                    <select name="message" class="form-select" aria-label="Default select example" id="chooseOption" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" onchange="this.form.click()">
                                        <option selected>Choisir une option</option>
                                        <option type="checkbox" name="option1" value="REGIE PRESSE">REGIE PRESSE</option>
                                        <option value="REGIE EVENEMENTIELLE">REGIE EVENEMENTIELLE</option>
                                        <option value="AFFICHAGE URBAIN ET INTERURBAIN">AFFICHAGE URBAIN ET INTERURBAIN</option>
                                        <option value="AFFICHAGE NUMERIQUE">AFFICHAGE NUMERIQUE</option>
                                        <option value="BRANDING AUTOMOBILE ET DES ESPACES PUBLIQUES"> BRANDING AUTOMOBILE ET DES ESPACES PUBLIQUES</option>
                                        <option value="PRODUCTION DES SUPPORTS DE COMMUNICATION">PRODUCTION DES SUPPORTS DE COMMUNICATION</option>
                                        <option value="REALISATION DES ETUDES DE MARCHE">REALISATION DES ETUDES DE MARCHE</option>
                                        <option value="ACTIVATIONS PRODUITS ET MARQUES">ACTIVATIONS PRODUITS ET MARQUES</option>
                                        <option value="PRESSE NATIONALE ET INTERNATIONALE">PRESSE NATIONALE ET INTERNATIONALE</option>
                                        <option value="COLLECTE DE LA REDEVANCE PUBLICITAIRE">COLLECTE DE LA REDEVANCE PUBLICITAIRE</option>
                                    </select>
                                    @if ($errors->has('message'))
                                        <span class="text-danger" role="alert">
                                            <small>Saisie incorrecte.</small>
                                        </span>
                                    @endif
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="orange-button">Soumettre</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials mb-5" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h6>Travail de dur labeur</h6>
                        <h4>Nos réalisations</h4>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                           
                            <h4>Affichage numérique</h4>
                            <span>AudiencesPub</span>

                            <div class="right-image">
                                <img src="assets/images/realisations/affichage-numerique/IMG_20231110_165851_377.jpg" style="width: 100%; height: 100%;" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <h4>Affichage numérique</h4>
                            <span>AudiencesPub</span>
                            <div class="right-image">
                                <img src="assets/images/realisations/affichage-numerique/IMG_20231110_185306_000.jpg" style="width: 100%; height: 100%;" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <h4>Affichage urbain <br> et interurbain</h4>
                            <span>AudiencesPub</span>
                            <div class="right-image">
                                <img src="assets/images/realisations/affichage-urbain-interurbain/PANNEAU-SUPERSIGN-100M2.jpg" style="width: 100%; height: 100%;" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <h4>Affichage urbain <br> et interurbain</h4>
                            <span>AudiencesPub</span>
                            <div class="right-image">
                                <img src="assets/images/realisations/affichage-urbain-interurbain/AFFICHAGE-MURAL.jpg" style="width: 100%; height: 100%;" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <h4>Branding automobile et des <br> espaces publiques</h4>
                            <span>AudiencesPub</span>
                            <div class="right-image">
                                <img src="assets/images/realisations/BRANDING-DES-ESPACES-PUBLIQUES/VISIBILITE-NEW-FOOD.jpg" style="width: 100%; height: 100%;" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <h4>Branding automobile et des <br> espaces publiques</h4>
                            <span>AudiencesPub</span>
                            <div class="right-image">
                                <img src="assets/images/realisations/BRANDING-DES-ESPACES-PUBLIQUES/VISIBILITE-SOURCE-DU-PAYS.jpg" style="width: 100%; height: 100%;" alt="">
                            </div>
                        </div>

                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <h4>Régie presse</h4>
                            <span>AudiencesPub</span>
                            <div class="right-image">
                                <img src="assets/images/realisations/REGIE-PRESSE/TECHNOPOLE-MAG/IMG_20231110_114806_525.jpg" style="width: 100%; height: 100%;" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <h4>Régie presse</h4>
                            <span>AudiencesPub</span>
                            <div class="right-image">
                                <img src="assets/images/realisations/REGIE-PRESSE/REVUE-LES-ELUS-DU-CAMEROUN/IMG_20231110_193248_323.jpg" style="width: 100%; height: 100%;" alt="">
                            </div>
                        </div>

                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <h4>Régie évènementielle</h4>
                            <span>AudiencesPub</span>
                            <div class="right-image">
                                <img src="assets/images/realisations/REGIE-EVENEMENTIELLE/NICAMEX2023/IMG-20231106-WA0002.jpg" style="width: 100%; height: 100%;" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <h4>Régie évènementielle</h4>
                            <span>AudiencesPub</span>
                            <div class="right-image">
                                <img src="assets/images/realisations/REGIE-EVENEMENTIELLE/SIEF2023/IMG-20221007-WA0151.jpg" style="width: 100%; height: 100%;" alt="">
                            </div>
                        </div>

                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <h4>Réalisation et étude de marché</h4>
                            <span>AudiencesPub</span>
                            <div class="right-image">
                                <img src="assets/images/realisations/REALISATION-ETUDE-DE-MARCHE/IMG_20231110_124723.jpg" style="width: 100%; height: 100%;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container d-flex justify-content-end">
        <a style="display: table; font-family: sans-serif; text-decoration: none; margin: 1em auto; color: #fff; font-size: 0.9em; padding: 1em 2em 1em 3.5em; border-radius: 2em; font-weight: bold; background: #25d366 url('https://tochat.be/click-to-chat-directory/css/whatsapp.svg') no-repeat 1.5em center; background-size: 1.6em;" id="testbtn2" href="https://api.whatsapp.com/send?phone=237655447247&text=Hello, après avoir visiter votre site internet j'ai tenu a vous contactez directement sur whatsapp%0A" role="button" target="_blank"> Whatsapp</a>

        <a class="btn testbtn text-white fs-2 rounded-5" id="testbtn" href="#" role="button"><i class="fa-solid fa-angle-up"></i></a>
    </div>

    <script>
        const toTop = document.querySelector('.testbtn');
        const towht = document.querySelector('.testbtn2');
        window.addEventListener('scroll', ()=>{
            if(window.pageYOffset > 100){
                toTop.classList.add('active');
                towht.classList.add('active');
            }else{
                toTop.classList.remove('active');
                towht.classList.remove('active');

            }
        })

    </script>


@endsection
