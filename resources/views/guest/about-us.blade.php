@extends('guest.layouts.app')
@section('title')
    A propos de Audiences.Pub
@endsection
@section('content')

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <h2>A PROPOS DE AUDIENCES PUB</h2>
                        <div class="div-dec"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Main Banner Area End ***** -->

    <section class="top-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="assets/images/realisations/REGIE-EVENEMENTIELLE/NICAMEX2023/IMG-20231106-WA0011.jpg" height="600" alt="">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                <div class="accordions is-first-expanded">
                    <article class="accordion">
                        <div class="accordion-head">
                            <span class="fs-3">Nous sommes une régie publicitaire</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p> agrée par le ministère de la communication.
                                <br>Notre ambition est de répondre de facon optimale aux besoins de communication des entreprises, au travers d'offres innovants, facteurs déterminants de la créationde richesses.
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span class="fs-3">Audiences Pub Sarl</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>société de droit camerounais composé des cadres diplômés de grandes écoles de communication internationales et nantis d’une très forte expérience et passionnés des métiers de la communication s’est fixé pour objectif d’être une nouvelle force de proposition avec un regard neuf face aux problèmes de communication que rencontrent les entreprises grâce aux nouveaux supports de communication à forte audience qu’il propose.
                                </p>
                            </div>
                        </div>
                    </article>
                    {{-- <article class="accordion">
                        <div class="accordion-head">
                            <span>Cryptocurrency Investments</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>Ut dictum vehicula massa, ac pharetra leo tincidunt eu. Phasellus in tristique magna, ac gravida leo.<br><br>
                                Integer sed lorem sapien. Ut viverra mauris sed lobortis commodo. Mauris scelerisque venenatis justo, sed interdum sem.</p>
                            </div>
                        </div>
                    </article> --}}
                </div>
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
                            <a href="{{'about-us'}}">En savoir plus</a>
                        </div>
                        <div class="orange-button">
                            <a href="{{'contact-us'}}">Contactez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="what-we-do mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="left-content">
                        <h4>Notre gamme de services comprend:</h4>
                        <img src="assets/images/realisations/affichage-numerique/IMG_20231110_185314_368.jpg" height="400" alt="">
                        {{-- <p>If you need more HTML templates, you can try visiting TooCSS blog and Tooplate websites. You can get many good templates on those websites.<br><br>Nulla non placerat neque, a gravida elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi sed dolor condimentum tellus commodo volutpat non malesuada turpis.</p> --}}
                        {{-- <div class="green-button">
                            <a href="{{'services'}}">Nos services</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-items">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="item" style="">
                                    <em>01</em>
                                    <br>
                                    {{-- <h4>First Step</h4> --}}
                                    <p class="fw-bold">La gestion d'espaces publicitaires.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item">
                                    <em>02</em>
                                    <br>
                                    {{-- <h4>Second Step</h4> --}}
                                    <p class="fw-bold">Affichage urbain et interurbain.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item">
                                    <em>03</em>
                                    <br>
                                    {{-- <h4>Third Step</h4> --}}
                                    <p class="fw-bold">Abonnements a la presse nationale et internationale.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item">
                                    <em>04</em>
                                    <br>
                                    {{-- <h4>Fourth Step</h4> --}}
                                    <p class="fw-bold">La régie magazine.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item">
                                    <em>05</em>
                                    <br>
                                    {{-- <h4>Fourth Step</h4> --}}
                                    <p class="fw-bold">L'édition et la production des supports de communication.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item">
                                    <em>06</em>
                                    <br>
                                    {{-- <h4>Fourth Step</h4> --}}
                                    <p>
                                        <ul>
                                            <li class="fw-bold">La régie évènementielle.</li>
                                            <li class="fw-bold">La régie automobile.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
