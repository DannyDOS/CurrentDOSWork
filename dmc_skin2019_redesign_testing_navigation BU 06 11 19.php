<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
<style>
.nav {
    font-size: 16px;
}

.nav__item__head {
    font-family: 'Roboto Condensed', sans-serif;
    position: relative;
    display: block;
    text-transform: uppercase;
}

.nav__item__head--new::after {
    content: 'NEW!';
    display: block;
    position: absolute;
    top: 0.7em;
    left: 0.8em;
    color: #1b9fa8;
    font-size: 10px;
    transform: rotate(-8deg);
}

@media (min-width: 1294px){
    .nav__item__head--new::after {
        content: 'NEW!';
        display: block;
        position: absolute;
        top: 0.9em;
        left: 1.7em;
        color: #1b9fa8;
        font-size: 10px;
        transform: rotate(-8deg);
    }
}




</style>
<nav class="container m-auto d-none d-md-block p-0">
    <div class="d-flex nav align-items-center justify-content-center ta-c">

        <!-- Kitchen worktops Küchenarbeitsplatten-->
        <div class="nav__item flex-grow-1 flex-xl-grow-0">
            <div class="col-bs p-0 px-xl-3">
                <a href="<?php print $link_kitchen_worktops; ?>" class="nav__item__head">
                    <div><span class="d-none d-xl-inline">Küchen</span>arbeitsplatten</div>
                </a>
            </div>
            <div class="dropdown">
                <div class="d-flex py-4">
                    <div class="col-md-9 col-xl-6 d-flex flex-wrap p-0">
                        <div class="col-md-6 col-xl-6">
                            <a href="<?php print $link_kitchen_worktops ?>#shopbyrange"><div class="dropdown__head link--blue">Nach Material einkaufen</div></a>
                            <ul class="dropdown__list">
                                <li class="dropdown__list__item"><a class="link" href="<?php print $link_solid_wood_worktops ?>">Massivholz Arbeitsplatten</a></li>
                                <li class="dropdown__list__item"><a class="link" href="<?php print $link_laminate_worktops ?>">Laminat Arbeitsplatten</a></li>
                                <li class="dropdown__list__item"><a class="link" href="<?php print $link_resopal_worktops ?>">Resopal Arbeitsplatten</a></li>
                                <li class="dropdown__list__item"><a class="link" href="<?php print $link_compact_worktops ?>">Compact Arbeitsplatten</a></li>
                                <li class="dropdown__list__item"><a class="link" href="<?php print $link_solid_surface_worktops ?>">Acryl Arbeitsplatten</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-xl-6">
                            <a href="<?php print $link_kitchen_worktops ?>#shopbycolour"><div class="dropdown__head link--blue">Nach Farben einkaufen</div></a>
                            <ul class="dropdown__list">
                                <li class="dropdown__list__item"><a class="link" href="<?php print $link_black_worktops ?>"> Schwarze Arbeitsplatten</a></li>
                                <li class="dropdown__list__item"><a class="link" href="<?php print $link_grey_worktops ?>"> Graue Arbeitsplatten</a></li>
                                <li class="dropdown__list__item"><a class="link" href="<?php print $link_white_worktops ?>"> Weiße Arbeitsplatten</a></li>
                            </ul>
                        </div>
                        <div class="col-md-10">
                            <a href="<?php print $link_kitchen_worktops; ?>#shopbystyle"><div class="dropdown__head link--blue">Nach Stil einkaufen</div></a>
                        </div>
                        <div class="mx-auto mt-2">
                            <a href="<?php print $link_kitchen_worktops; ?>" class="button m-auto text-center">Sehen Sie unser gesamtes Sortiment an Küchenarbeitsplatten</a>
                        </div>
                    </div>

                    <!-- <div class="col-1 m-auto">
                        <div class="partition"></div>
                    </div> -->

                    <div class="col-lg-3 col-md-3 p-lg-0">
                        <div class="col-bs pl-0 ">
                            <a href="<?php print $link_worktop_accessories; ?>"><div class="dropdown__head link--blue">Zubehör <span class="d-none d-lg-inline">einkaufen</span></div></a>
                            <ul class="dropdown__list">
                                <li class="dropdown__list__item"><a class="link" href="<?php print $link_laminate_splashbacks; ?>">Resopal Küchenrückwand</a></li>
                                <li class="dropdown__list__item"><a class="link" href="<?php print $link_floating_shelves; ?>">Eiche Massivholz Regale</a></li>
                                <li class="dropdown__list__item"><a class="link" href="<?php print $link_worktop_accessories; ?>">Arbeitsplatten Zubehör</a></li>
                                <!-- <li class="dropdown__list__item"><a class="link" href="<?php print $link_worktop_clearance; ?>"><span class="d-none d-xl-block">Küchenarbeitsplatten – </span>Ausverkauf</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="d-none d-xl-block col-md-4 px-0">
                        <div class="dropdown__img">
                            <a href="<?php print $link_kitchen_worktops; ?>">
                                <img class="dropdown__img__img" src="skins/skin2019_redesign/prod-preview/kuechenarbeitsplatten-menu.jpg" data-at2x="skins/skin2019_redesign/prod-preview/kuechenarbeitsplatten-menu@2x.jpg" alt="Küchenarbeitsplatten">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Solid wood worktops Massivholz -->
        <div class="nav__item flex-grow-1">
            <a href="<?php print $link_solid_wood_worktops; ?>" class="nav__item__head">
                <div>Massivholz</div>
            </a>
            <div class="dropdown">
                <div class="d-flex py-4">
                    <div class="col-xl-8 d-flex flex-wrap p-0">
                        <div class="col-md-7">
                            <a href="<?php print $link_solid_wood_worktops; ?>"><div class="dropdown__head link--blue">Massivholz Arbeitsplatten</div></a>
                            <div class="row-bs">
                                <div class="col-md-6 pr-0">
                                    <ul class="dropdown__list">
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_oak_worktops; ?>">Eiche</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_prime_oak_worktops; ?>">Premium Eiche</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_caramel_bamboo_worktops; ?>">Karamell Bambus </a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_beech_worktops; ?>">Buche</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_iroko_worktops; ?>">Iroko</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 pr-0">
                                    <ul class="dropdown__list">
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_black_american_walnut_worktops; ?>">Amerikanischer Nussbaum</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_deluxe_oak_worktops; ?>">Deluxe Eiche</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_walnut_worktops; ?>">Nussbaum</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_full_stave_rustic_oak_tabletops; ?>">Tischplatte Eiche Rustikal durchgehende Lamellen</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_full_stave_prime_oak_tabletops; ?>">Premium Eiche Tischplatte durchgehende Lamellen</a></li>
                                    </ul>
                                </div>

                                <a href="<?php print $link_solid_wood_worktops; ?>" class="button m-auto text-center">Sehen Sie alle 25 Holzarbeitsplatten <br class="d-none d-md-block d-lg-none"> in unserem Sortiment</a>
                            </div>
                        </div>
                        <div class="col-1 m-auto">
                            <div class="partition"></div>
                        </div>
                        <div class="col-md-4">
                            <a href="<?php print $link_worktop_accessories; ?>"><div class="dropdown__head link--blue">Zubehör</div></a>
                            <ul class="dropdown__list">
                                <li class="dropdown__list__item"><a class="link" href="<?php print $link_worktop_cutting_service; ?>">Fabrikation</a></li>
                                <li class="dropdown__list__item"><a class="link" href="<?php print $link_worktop_accessories; ?>">Zubehör für Arbeitsplatten</a></li>
                                <li class="dropdown__list__item"><a class="link" href="<?php print $link_floating_shelves; ?>">Massivholz Schweberegale</a></li>
                                <li class="dropdown__list__item"><a class="link" href="<?php print $link_breakfast_bar_leg_chrome; ?>">Tischbeine aus Chrom für Küchenbar</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-none d-xl-block col-md-4 px-0">
                        <div class="dropdown__img">
                            <a href="<?php print $link_solid_wood_worktops; ?>">
                                <img class="dropdown__img__img" src="skins/skin2019_redesign/prod-preview/massivholz-menu.jpg" data-at2x="skins/skin2019_redesign/prod-preview/massivholz-menu@2x.jpg" alt="Massivholz Arbeitsplatten">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Laminate worktops Laminat-->
        <div class="nav__item flex-grow-1">
            <a href="<?php print $link_laminate_worktops; ?>" class="nav__item__head">
                <div>Laminat</div>
            </a>
            <div class="dropdown">
                <div class="d-flex py-4">
                    <div class="col-xl-8 d-flex flex-wrap p-0">
                        <div class="col-md-12">
                            <div class="row-bs">
                                <div class="col-md-3">
                                    <div class="dropdown__head link--blue"><a href="<?php print $link_laminate_worktops; ?>">Worktop Express</a></div>
                                    <ul class="dropdown__list">
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_laminate_weiss; ?>">Glas Weiß</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_laminate_glasgruen; ?>">Glasgrün</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_laminate_nussbaum_optik_dunkel; ?>">Nussbaum - Optik Dunkel</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_laminate_quarzstein_weiss; ?>">Quarzstein Weiß</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_laminate_schwarz; ?>">Quarz Schwarz</a></li>
                                    </ul>
                                </div>
								<div class="partition"></div>
                                <div class="col-md-4 pr-0">
                                    <li class="dropdown__head link--blue"><a href="<?php print $link_resopal_worktops; ?>">Resopal</a></li>
                                    <ul class="dropdown__list">
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_laminate_rustikales_holz; ?>">Rustikales Holz</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_laminate_betonoptik; ?>">Betonoptik</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_laminate_schwarzer_granit; ?>">Schwarzer Granit</a></li>
										<li class="dropdown__list__item"><a class="link" href="<?php print $link_laminate_dunkles_holz; ?>">Dunkles Holz</a></li>
										<li class="dropdown__list__item"><a class="link" href="<?php print $link_laminate_schwarzer_marmor; ?>">Schwarzer Marmor</a></li>
                                    </ul>
								</div>

								<div class="col-md-4 pr-0">
									<ul class="dropdown__list pt-4">
										<li class="dropdown__list__item"><a class="link" href="<?php print $link_laminate_weisser_marmor; ?>">Weißer Marmor</a></li>
										<li class="dropdown__list__item"><a class="link" href="<?php print $link_laminate_kupfer; ?>">Küchenarbeitsplatte Kupfer</a></li>
										<br />
										<a href="<?php print $link_worktop_accessories; ?>#resopal-arbeitsplatten-zubehoer"><div class="dropdown__head link--blue">Zubehör</div></a>
                                        <ul class="dropdown__list pt-2">
                                            <li class="dropdown__list__item"><a class="link" href="<?php print $link_laminate_splashbacks; ?>">Resopal Küchenrückwand</a></li>
                                        </ul>
									</ul>
								</div>
                            </div>
                        </div>
                        <div class="mx-auto mt-2">
                            <a href="<?php print $link_laminate_worktops; ?>" class="button m-auto text-center">Sehen Sie alle Laminat-Arbeitsplatten in unserem Sortiment</a>
                        </div>
                    </div>
                    <div class="d-none d-xl-block col-md-4 px-0">
                        <div class="dropdown__img">
                            <a href="<?php print $link_laminate_worktops; ?>">
                                <img class="dropdown__img__img" src="skins/skin2019_redesign/prod-preview/laminat-menu.jpg" data-at2x="skins/skin2019_redesign/prod-preview/laminat-menu@2x.jpg" alt="Laminat">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Compact worktops Compact-->
        <div class="nav__item flex-grow-1">
            <a href="<?php print $link_compact_worktops; ?>" class="nav__item__head">
                <div>Compact</div>
            </a>
            <div class="dropdown">
                <div class="d-flex py-4">
                    <div class="col-xl-8 d-flex flex-wrap p-0">
                        <div class="col-md-12">
                            <a href="<?php print $link_compact_worktops; ?>"><div class="dropdown__head link--blue">Compact Arbeitsplatten</div></a>
                            <div class="row-bs">
                                <div class="col-md-5 pr-0">
                                    <ul class="dropdown__list">
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_compact_betonoptik; ?>">Betonoptik</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_compact_marmor_optik; ?>">Marmor-Optik</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_compact_arbeitsplatte_grauer_marmor; ?>">Grauer Marmor</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_compact_abeitsplatte_quarz_weisse; ?>">Wei&szlig;er Quarz</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_compact_abeitsplatte_terrazzo_weisse; ?>">Wei&szlig;er Terrazzo</a></li>
                                    </ul>
                                </div>
                                    <div class="col-md-7 pr-0">
                                    <ul class="dropdown__list">
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_marmor_veneto_zenith_arbeitsplatte; ?>">Marmor Veneto</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_zenith_caldeira; ?>">Caldeira Zenith</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_zenith_magma; ?>">Magma Zenith</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_zenith_rouille; ?>">Rouille Zenith</a></li>
                                    </ul>
                                </div>
                                   <div class="mx-auto mt-2">
                                    <a href="<?php print $link_compact_worktops; ?>" class="button m-auto">Sehen Sie alle Compact Arbeitsplatten in unserem Sortiment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-xl-block col-md-4 px-0">
                        <div class="dropdown__img">
                             <a href="<?php print $link_compact_worktops; ?>">
                                <img class="dropdown__img__img" src="skins/skin2019_redesign/prod-preview/compact-menu.jpg" data-at2x="skins/skin2019_redesign/prod-preview/compact-menu@2x.jpg" alt="Compact Arbeitsplatten">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Solid surface  Acrylic -->
        <div class="nav__item flex-grow-1">
            <a href="<?php print $link_solid_surface_worktops; ?>" class="nav__item__head nav__item__head--new">
                <div>Acryl</div>
            </a>
            <div class="dropdown">
                <div class="d-flex py-4">
                    <div class="col-lg-8 d-flex flex-wrap p-0">
                        <div class="container-fluid">
                            <a href="<?php print $link_solid_surface_worktops; ?>">
                                <div class="dropdown__head link--blue">Solid surface worktops</div>
                            </a>
                            <div class="row-bs">
                                <div class="col-md-5 pr-0">
                                    <ul class="dropdown__list">
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_arctic_acrylic_worktops; ?>">Arctic</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_lovina_acrylic_worktops; ?>">Lovina</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_snow_quartz_acrylic_worktops; ?>">Snow Quartz</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_twilight_acrylic_worktops; ?>">Twilight</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-lg-block col-md-4 px-0">
                        <div class="dropdown__img">
                            <a href="<?php print $link_solid_surface_worktops; ?>">
                                <picture>
                                    <source srcset="https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,h_332,q_auto,w_428/v1572536128/acrylic/snow-quartz-acrylic-nav.jpg 1x,
                                    https://res.cloudinary.com/dy7hqiitw/image/upload/c_fill,f_auto,h_664,q_auto,w_856/v1572536128/acrylic/snow-quartz-acrylic-nav.jpg 2x" media="(min-width:992px)">
                                    <img srcset alt="Arctic acrylic solid surface worktop" class="dropdown__img__img">
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Tops Tischplatten -->
        <div class="nav__item flex-grow-1">
            <a href="<?php print $link_tischplatten; ?>" class="nav__item__head">
                <div>Tischplatten</div>
            </a>
            <div class="dropdown">
                <div class="d-flex py-4">
                    <div class="col-xl-8 d-flex flex-wrap p-0">
                        <div class="col-md-12">
                            <div class="row-bs">
                                <div class="col-md-3">
                                    <div class="dropdown__head link--blue"><a href="<?php print $link_holztischplatten; ?>">Holztischplatten</a></div>
                                    <ul class="dropdown__list">
										<li class="dropdown__list__item"><a class="link" href="<?php print $link_tischplatten_eiche; ?>">Eiche</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_tischplatten_buche; ?>">Buche</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_tischplatten_eiche_rustikal; ?>">Eiche Rustikal</a></li>
                                    </ul>
                                </div>
								<div class="partition"></div>
                                <div class="col-md-8 pr-0">
                                     <li class="dropdown__head link--blue"><a href="<?php print $link_laminat_tischplatten; ?>">Laminat Tischplatten</a></li>
                                    <ul class="dropdown__list">
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_weisse_tischplatten; ?>">Weiße</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_eichenoptik_tischplatten; ?>">Eiche-Optik</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_wenge_optik_tischplatten; ?>">Wenge-Optik</a></li>
                                    </ul>
								</div>

                            </div>

                        </div>


                          <div class="mx-auto mt-2">
                                    <a href="<?php print $link_tischplatten; ?>" class="button m-auto text-center">Sehen Sie alle Tischplatten in unserem Sortiment</a>
                                </div>
                    </div>
                    <div class="d-none d-xl-block col-md-4 px-0">
                        <div class="dropdown__img">
                            <a href="<?php print $link_tischplatten; ?>">
                                <img class="dropdown__img__img" src="skins/skin2019_redesign/prod-preview/tischplatten-nav-item-image.jpg" data-at2x="skins/skin2019_redesign/prod-preview/tischplatten-nav-item-image@2x.jpg" alt="Tischplatten">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Samples Muster-->
        <div class="nav__item flex-grow-1">
            <a href="<?php print $link_sample_service; ?>" class="nav__item__head">
                <div>Muster</div>
            </a>
            <div class="dropdown">
                <div class="d-block py-4">
                    <div class="container-fluid">
                        <a href="<?php print $link_sample_service; ?>"><div class="dropdown__head link--blue">Muster</div></a>
                        <div class="row-bs pt-4">
                            <div class="col-bs pr-2">
                                <div class="card card--full card--dark">
                                    <a href="<?php print $link_wood_samples; ?>">
                                        <img class="card__img" src="/skins/skin2019_redesign/prod-preview/massivholz-arbeitsplatten-muster.jpg" data-at2x="/skins/skin2019_redesign/prod-preview/massivholz-arbeitsplatten-muster@2x.jpg" alt="Massivholz-Arbeitsplatten Muster" />
                                        <div class="card__label p-2 card__label--line">Massivholz-Arbeitsplatten Muster</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-bs px-2" >
                                <div class="card card--full card--dark">
                                    <a href="<?php print $link_laminat_samples; ?>">
                                        <img class="card__img" src="/skins/skin2019_redesign/prod-preview/laminate-main-sample-de.jpg" data-at2x="/skins/skin2019_redesign/prod-preview/laminate-main-sample-de@2x.jpg" alt="Resopal Arbeitsplatten Musterpaket" />
                                        <div class="card__label p-2 card__label--line">Laminat-Arbeitsplatten Musterpakete</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-bs px-2" >
                                <div class="card card--full card--dark">
                                    <a href="<?php print $link_compact_samples; ?>">
                                        <img class="card__img" src="/skins/skin2019_redesign/prod-preview/compact-arbeitsplatten-muste-main-th.jpg" data-at2x="/skins/skin2019_redesign/prod-preview/compact-arbeitsplatten-muste-main-th@2x.jpg" alt="Compact Arbeitsplatten Muster" />
                                        <div class="card__label p-2 card__label--line">Compact Arbeitsplatten Muster</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-bs px-2" >
                                <div class="card card--full card--dark">
                                    <a href="<?php print $link_acrylic_samples; ?>">
                                        <img class="card__img" src="/skins/skin2019_redesign/prod-preview/acrylic-worktop-sample-pack.jpg" data-at2x="/skins/skin2019_redesign/prod-preview/acrylic-worktop-sample-pack@2x.jpg" alt="Acryl Arbeitsplatten Muster" />
                                        <div class="card__label p-2 card__label--line">Acryl Arbeitsplatten Muster</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-bs pl-2">
                                <div class="card card--full card--dark">
                                    <a href="<?php print $link_visualiser; ?>">
                                        <img class="card__img" src="/skins/skin2019_redesign/prod-preview/arbeitsplatten-planungstool-musterservice.jpg" data-at2x="/skins/skin2019_redesign/prod-preview/arbeitsplatten-planungstool-musterservice@2x.jpg" alt="Arbeitsplatten Planungstool" />
                                        <div class="card__label p-2 card__label--line">Arbeitsplatten Planungstool</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bespoke MAßANFERTIGUNG-->
        <div class="nav__item flex-grow-1">
            <a href="<?php print $link_fabrication_service; ?>" class="nav__item__head">
                <div>MA<span>ß</span>ANFERTIGUNG</div>
            </a>
            <div class="dropdown">
                <div class="d-block py-4">
                    <div class="container-fluid">
                        <a href="<?php print $link_fabrication_service; ?>"><div class="dropdown__head link--blue">Maßanfertigung</div></a>
                        <div class="row-bs pt-4">
                            <div class="col-bs pr-2">
                                <div class="card card--full card--dark">
                                    <a href="<?php print $link_worktop_fabrication_service; ?>">
                                        <img class="card__img" src="/skins/skin2019_redesign/prod-preview/arbeitsplatten-nach-mass-menu.jpg" data-at2x="/skins/skin2019_redesign/prod-preview/arbeitsplatten-nach-mass-menu@2x.jpg" alt="Holzarbeitsplatten nach Maß" />
                                        <div class="card__label p-2">Holzarbeitsplatten nach Maß</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-bs px-2">
                                <div class="card card--full card--dark">
                                    <a href="<?php print $link_laminate_fabrication_service; ?>">
                                        <img class="card__img" src="/skins/skin2019_redesign/prod-preview/laminat-arbeitsplatten-auf-mass-menu.jpg" data-at2x="/skins/skin2019_redesign/prod-preview/laminat-arbeitsplatten-auf-mass@2x.jpg" alt="Laminat Arbeitsplatten auf Maß" />
                                        <div class="card__label p-2">Laminat Arbeitsplatten auf Maß</div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-bs px-2">
                                <div class="card card--full card--dark">
                                    <a href="<?php print $link_compact_laminate_fabrication_service; ?>">
                                        <img class="card__img" src="/skins/skin2019_redesign/prod-preview/compact-arbeitsplatten-massanfertigung-menu.jpg" data-at2x="/skins/skin2019_redesign/prod-preview/compact-arbeitsplatten-massanfertigung-menu@2x.jpg" alt="Compact Arbeitsplatten Maßanfertigung" />
                                        <div class="card__label p-2">Compact Arbeitsplatten Maßanfertigung</div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-bs px-2">
                                <div class="card card--full card--dark">
                                    <a href="<?php print $link_solid_surface_fabrication_service; ?>">
                                        <img class="card__img" src="/skins/skin2019_redesign/prod-preview/bespoke-cutting-service-acrylic.jpg" data-at2x="/skins/skin2019_redesign/prod-preview/bespoke-cutting-service-acrylic@2x.jpg" alt="Acryl Arbeitsplatten Maßanfertigung" />
                                        <div class="card__label p-2">Acryl Arbeitsplatten Maßanfertigung</div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-bs pl-2">
                                <div class="card card--full card--dark">
                                    <a href="<?php print $link_online_bespoke_worktop_tool; ?>">
                                        <img class="card__img" src="/skins/skin2019_redesign/prod-preview/arbeitsplatten-konfigurator-menu.jpg" data-at2x="/skins/skin2019_redesign/prod-preview/arbeitsplatten-konfigurator-menu@2x.jpg" alt="Arbeitsplatten-Konfigurator" />
                                        <div class="card__label p-2">Arbeitsplatten-Konfigurator</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Information -->
        <div class="nav__item flex-grow-1 flex-xl-grow-0">
            <div class="col-bs p-0 px-xl-3">
                <a href="<?php print $link_information; ?>" class="nav__item__head">
                    <div>info<!--<span class="d-none d-xl-inline">rmationen</span>--></div>
                </a>
            </div>
            <div class="dropdown">
                <div class="d-flex pt-4">
                    <div class="col-lg-8 d-flex flex-wrap p-0">
                        <div class="container-fluid">
                            <a href="<?php print $link_information; ?>"><div class="dropdown__head link--blue">Informationen</div></a>
                            <div class="row-bs">
                                <div class="col-md-5 pr-0">
                                    <ul class="dropdown__list">
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_delivery_details; ?>">Lieferdetails</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_discount_codes_current_offers; ?>">Aktuelle Angebote</a></li>
                                        <li class="dropdown__list__item text-transform-none"><a class="link" href="<?php print $link_service_proposition; ?>">Unsere Vorteile auf einen Blick</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_customer_reviews; ?>">Kundenbewertungen</a></li>
                                        <li class="dropdown__list__item text-transform-none"><a class="link" href="<?php print $link_installation_aftercare; ?>">Installation und Pflege</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-7 pr-0">
                                    <ul class="dropdown__list">
                                        <li class="dropdown__list__item"><a class="link" href="information-guides/">Info-Guides</a></li>
                                        <li class="dropdown__list__item text-transform-none"><a class="link" href="blog/">Besuchen Sie unseren Blog</a></li>
                                        <li class="dropdown__list__item text-transform-none"><a class="link" href="<?php print $link_about_us; ?>">Über uns</a></li>
                                        <li class="dropdown__list__item uppercase"><a class="link" href="<?php print $link_frequently_asked_questions; ?>">FAQ & Hilfe</a></li>
                                        <li class="dropdown__list__item"><a class="link" href="<?php print $link_environmental_policy; ?>">Umweltpolitik</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-lg-block col-md-4 px-0">
                        <div class="dropdown__img">
                            <a href="<?php print $link_information; ?>">
                                <img class="dropdown__img__img" src="/skins/skin2019_redesign/prod-preview/informationen-menu.jpg" data-at2x="/skins/skin2019_redesign/prod-preview/informationen-menu@2x.jpg" alt="Worktop Express Delivery Van">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Navigation wood trim -->
<div class="nav__trim">
    <img class="nav__trim__img" src="skins/skin2019_redesign/media/navigation-wood-trim.jpg" data-no-retina alt="null" />
</div>