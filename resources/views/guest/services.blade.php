@extends('guest.layouts.app')
@section('title')
    Nos services
@endsection
@section('content')

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="header-text">
                    <h2>Nos Services</h2>
                    <div class="div-dec"></div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Main Banner Area End ***** -->

    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-item">
                        {{-- <img src="assets/images/AudiengePublogo.png" alt="" width="160" height="50"> --}}
                        {{-- <i class="fas fa-archive"></i> --}}
                        <h4>LA REGIE PRESSE</h4>
                        <p>Cette activité consiste à la commercialisation des espaces publicitaires dans les annuaires, des revues, agendas ou des magazines institutionnels.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        {{-- <i class="fas fa-cloud"></i> --}}
                        <h4>LA REGIE EVENEMENTIELLE</h4>
                        <p>Pour un quelconque évènement, la régie se charge de la conception des supports (plaquette, carton d’invitation, plan du site, guide du salon, banderoles, affiches), du dossier commercial et marketing ainsi que de la mobilisation de tous les potentiels exposants, annonceurs et mécènes de l’évènement. La vente de tous les espaces de communication du site de l’évènement n’est pas en reste.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        {{-- <i class="fas fa-charging-station"></i> --}}
                        <h4>L’AFFICHAGE URBAIN ET INTERURBAIN</h4>
                        <p>Consiste à l’implantation des nouveaux mobiliers publicitaires sur des emplacements stratégiques de la ville ainsi que sur des routes nationales destinés à la commercialisation auprès des grands annonceurs.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        {{-- <i class="fas fa-suitcase"></i> --}}
                        <h4>L’AFFICHAGE NUMERIQUE</h4>
                        <p>Développement et implantation des nouveaux supports numériques innovants (de différents types) dans les villes, hôtels, arènes sportives, supermarchés destinés aux grands annonceurs.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        {{-- <i class="fas fa-archway"></i> --}}
                        <h4>LE BRANDING AUTOMOBILE ET DES ESPACES PUBLIQUES</h4>
                        <p>Ce sont des habillages du matériel roulant et des espaces publiques à l’effigie et aux couleurs d’une entreprise, d’une marque ou d’un produit.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        {{-- <i class="fas fa-puzzle-piece"></i> --}}
                        <h4>LA PRODUCTION DES SUPPORTS DE COMMUNICATION</h4>
                        <p>Nous concevons pour la visibilité de nos clients tous types de supports de communications (des supports traditionnels aux modernes) selon les spécificités du plan marketing.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        {{-- <i class="fas fa-puzzle-piece"></i> --}}
                        <h4>LA REALISATION DES ETUDES DE MARCHE</h4>
                        <p> Pour le lancement des nouveaux projets, des nouveaux produits, nous réalisons pour le compte des entreprises nationales et internationales des études de marché destinés à pré visualiser les potentialités de croissance ou de rentabilité d’un marché.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        {{-- <i class="fas fa-puzzle-piece"></i> --}}
                        <h4>LES ACTIVATIONS PRODUITS ET MARQUES</h4>
                        <p>Activités de promotion ou de marketing direct pour le compte d’une entreprise cliente au cours d’une période de temps bien définie avec pour objectif soit de faire connaitre un nouveau produit ou de booster les ventes.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        {{-- <i class="fas fa-puzzle-piece"></i> --}}
                        <h4>LA PRESSE NATIONALE ET INTERNATIONALE</h4>
                        <p>Activité qui consiste à une livraison quotidienne et systématique des titres de la presse nationale et internationale auprès des administrations publiques, parapubliques et des entreprises privées.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-item">
                        {{-- <i class="fas fa-puzzle-piece"></i> --}}
                        <h4>LA COLLECTE DE LA REDEVANCE PUBLICITAIRE</h4>
                        <p> Il s’agit d’une prestation qui consiste à collecter et de reverser pour le compte d’une CTD, les taxes publicitaires induits par l’affichage des enseignes marques ou produits des entreprises installées dans leurs circonscriptions territoriales.</p>
                    </div>
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
    <br><br>
    {{-- <section class="service-details mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h6>Investment in Details</h6>
                        <h4>Upgrade your knowledge</h4>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="naccs">
                        <div class="tabs">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="menu">
                                        <div class="active gradient-border"><span>Crypto Investments</span></div>
                                        <div class="gradient-border"><span>Cryptocurrency Market</span></div>
                                        <div class="gradient-border"><span>Financial Planning</span></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="left-image">
                                                    <img src="assets/images/service-details-01.jpg" alt="">
                                                </div>
                                                <div class="right-content">
                                                    <h4>Learn more about cryptocurrency investments</h4>
                                                    <p>Etiam id ligula risus. Fusce fringilla nisl nunc, nec rutrum lectus cursus nec. In blandit nibh dolor, at rutrum leo accumsan porta. Nullam pulvinar eros porttitor risus condimentum tempus.</p>
                                                    <span>- Top Crypto prices and charts</span>
                                                    <span>- Is Cryptocurrency a good investment?</span>
                                                    <span class="last-span">- Crypto Market Insiders and News</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="left-image">
                                                    <img src="assets/images/service-details-02.jpg" alt="">
                                                </div>
                                                <div class="right-content">
                                                    <h4>Read more on Cryptocurrency Market</h4>
                                                    <p>Fusce fringilla nisl nunc, nec rutrum lectus cursus nec. In blandit nibh dolor, at rutrum leo accumsan porta. Nullam pulvinar eros porttitor risus condimentum tempus.</p>
                                                    <span>- Digital Currency Exchange</span>
                                                    <span>- Trading Cryptocurrencies Online</span>
                                                    <span class="last-span">- Different Categories of Digital Currencies</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="left-image">
                                                    <img src="assets/images/service-details-03.jpg" alt="">
                                                </div>
                                                <div class="right-content">
                                                    <h4>How to carefully plan on your online financials</h4>
                                                    <p>Pellentesque ipsum elit, congue a sapien laoreet, pellentesque ultricies risus. Nulla facilisi. Mauris vitae lacinia magna. Nam euismod sapien sit amet elementum blandit. Nulla non placerat neque.</p>
                                                    <span>- Financial Planning and Investments</span>
                                                    <span>- Business Networking</span>
                                                    <span class="last-span">- Managing Digital Assets</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

@endsection
