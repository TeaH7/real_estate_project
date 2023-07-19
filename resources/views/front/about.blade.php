@extends('front.layout.app')

@section('title')
    Rreth Nesh
@endsection


@section('content')
    @include('front.components.hero', [
        'title' => 'Rreth Nesh',
    ])

    <section class="about-section-1 p-5">
        <div class="container">
            <div class="row">

            </div>
            <div class="row pb-md-5">
                <div class="col-12 col-md-6">
                    <div class="img-about-us">
                        <img src="{{ asset('assets/front/images/key-g11f305473_1920.jpg') }}" alt="Photo1" width="100%"
                            height="90%">
                    </div>

                </div>
                <div class="col-12 col-md-6 p-lg-3 text-end">
                    <div class="line mt-3 mt-md-0"></div>
                    <h3 style="color: #031136">Kush Jemi Ne</h1>
                        <p class="pt-3">TIG Estate është një agjenci e patundshmërisë që ofron shërbime të specializuara
                            në tregun e pasurive të patundshme. Ne kemi krijuar një platformë të përshtatshme në internet, e
                            cila ju lejon të kërkoni, blini dhe qirani pronat tuaja të ëndrrave.

                            Vlerat tona thelbësore përfshijnë profesionalizmin, sinqeritetin dhe shërbimin e shkëlqyeshëm
                            ndaj klientëve tanë. Ne kuptojmë se blerja ose shitja e një prone është një vendim i rëndësishëm
                            dhe për këtë arsye, ofrojmë një ekspertizë të thellë dhe mbështetje të plotë gjatë gjithë
                            procesit.

                            Platforma jonë e avancuar e kërkimit ju lejon të përshtasni kërkimin tuaj sipas preferencave
                            tuaja të veçanta. Ju mund të filtroni pronat sipas llojit, vendndodhjes, çmimit dhe
                            karakteristikave të tjera për të siguruar që të gjeni atë që kërkoni me lehtësi.

                            Bashkëpunimi me ne do të sjellë përvojë të mrekullueshme në botën e patundshmërisë. Ekipi ynë i
                            përvojshëm dhe i përkushtuar do të jetë gjithmonë në dispozicionin tuaj për të përgjigjur në
                            pyetjet tuaja dhe ofruar ndihmë në çdo hap.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="p-5">
        <div class="container">

            <div class="row p-3">
                <div class="col-12 col-md-6 p-lg-3 text-start">
                    <div class="line ms-0"></div>
                    <h3>Çfarë Ne Ofrojmë</h3>
                    <p class="pt-3">Për më tepër, ne ofrojmë informacion të detajuar për çdo pronë, duke përfshirë
                        fotografi të cilësisë së lartë, planimetri, përshkrimin dhe të dhëna të rëndësishme të pronës. Kjo
                        ju ndihmon të merrni një pasqyrë të plotë të pronave dhe të bëni një vendim të informuar.

                        Ne jemi krenarë për reputacionin tonë të ndërtuar në bazë të rezultateve të arritura për klientët
                        tanë. Shumë prej tyre janë mbështetësit e përhershëm të TIG Estate dhe na kanë referuar në miqtë dhe
                        familjarët e tyre. Kjo vërteton nivelin e lartë të kualitetit dhe besimit që ofrojmë.

                        Faleminderit që vizituat TIG Estate! Ne jemi gati të ju ndihmojmë të gjeni pronën e ëndrrave tuaja.
                        Mos ngurroni të na kontaktoni për të filluar udhëtimin tuaj drejt një patundshmërie të suksesshme.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="img-about-us">
                        <img src="{{ asset('assets/front/images/key-g11f305473_1920.jpg') }}" alt="Photo1" width="100%"
                            height="70%">
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Services -->

    <section class="services-about">
        <div class="container p-5">
            <div class="row pb-5">
                <div class="col-12 text-center">
                    <h3>Shërbimet Tona</h3>
                </div>
            </div>
            <div class="row d-flex justify-content-center pb-4 pt-3">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-3">
                        <div class="service-icon">
                            <span><i class="bi bi-people"></i></span>
                        </div>

                        <div class="service-body mt-1">
                            <h5>Konsulencë për Shtëpinë
                                <br> Tuaj të Endrrave
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-3">
                        <div class="service-icon">
                            <span><i class="bi bi-people"></i></span>
                        </div>

                        <div class="service-body mt-1">
                            <h5> Cmimet më të
                                <br>mira në tregun Shqipëtar
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-3">
                        <div class="service-icon">
                            <span><i class="bi bi-people"></i></span>
                        </div>

                        <div class="service-body mt-1">
                            <h5>Shërbimi i inspektimit
                                <br> të pronave
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-services text-center mb-3">
                        <div class="service-icon">
                            <span><i class="bi bi-people"></i></span>
                        </div>

                        <div class="service-body mt-1">
                            <h5>Shërbimi i kërkimit
                                <br> të pasurive të patundshme
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
