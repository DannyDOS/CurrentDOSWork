<div class="usps">
    <div class="container m-auto ta-c usps__container">
        <div class="d-flex align-items-center">
            <div class="col-md-4 col-bs usps__item">
                <a href="<?php print $link_fabrication_service; ?>">
                    <div>
                        <svg class="usps__svg" viewBox="0 0 10 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Mobile-Copy-7" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> 
	<g d="pencil-Copy-2" stroke="#707A7F" >
		<path class="st0" d="M9.7,0.9c0.6,0.3,1.1,0.8,1.4,1.4l-7.8,7.8l-2.1,0.7l0.7-2.1L9.7,0.9 M9.5,0L9.5,0L1.2,8.3l0,0L0,12l3.7-1.2
			l0,0l8.2-8.2L12,2.5C11.6,1.3,10.7,0.4,9.5,0L9.5,0z"/>
	</g>
	<path class="st1" d="M3.7,10.6c-0.3-1.1-1.2-2-2.4-2.4"/>
	<path class="st1" d="M10.7,3.6c-0.3-1.1-1.2-2-2.4-2.4"/>
	<path class="st1" d="M1.2,11.4c-0.1-0.3-0.4-0.6-0.7-0.7"/>
                            </g>
                                
                        </svg>
                        <span class="usps__head">Maßanfertigungen Online</span>
                    </div>
                    <div class="d-md-none d-xl-block usps__text">Lassen Sie sich Ihre Arbeitsplatte nach Maß anfertigen</div>
                </a>
            </div>
            <div class="col-md-4 col-bs usps__item">
                <a href="<?php print $link_delivery_details; ?>">
                    <div>
                        <svg class="usps__svg" viewBox="0 0 10 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Mobile-Copy-6" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Box-Copy-2" transform="translate(0.000000, 1.000000)" stroke="#707A7F">
                                    <polygon id="Polygon" points="5 0 9.33012702 2.5 9.33012702 7.5 5 10 0.669872981 7.5 0.669872981 2.5"></polygon>
                                    <path d="M0.669872981,3 L5,5" id="Line-2"></path>
                                    <path d="M9.33012702,3 L5,5" id="Line-3"></path>
                                    <path d="M5,10 L5,5" id="Line-4"></path>
                                </g>
                            </g>
                        </svg>
                        <span class="usps__head">2-Mann-Lieferservice</span>
                    </div>
                    <div class="d-md-none d-xl-block usps__text">Wir liefern sicher bis in den Raum Ihrer Wahl</div>
                </a>
            </div>
            <div class="col-md-4 col-bs usps__item">
                <a href="<?php print $link_customer_reviews; ?>">
                    <div>
                        <svg class="usps__svg" viewBox="0 0 11 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="transform: translate(0, -1px);">
                            <g id="Mobile-Copy-8" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon id="Star-Copy-2" stroke="#707A7F" points="6.5 8.21 3.85496636 10.1405765 4.87369336 7.02841906 2.22024568 5.10942353 5.49488722 5.11658094 6.5 2 7.50511278 5.11658094 10.7797543 5.10942353 8.12630664 7.02841906 9.14503364 10.1405765"></polygon>
                            </g>
                        </svg>
                        <span class="usps__head">Zuverlässig & Vertrauenswürdig</span>
                    </div>
                    <div class="d-md-none d-xl-block usps__text">Mit 5-Sternen auf Trusted Shops und Trustpilot bewertet</div>
                </a>
            </div>
            <div class="d-md-none col-bs usps__item">
                <a href="<?php print $link_service_proposition; ?>">
                    <div>
                    <svg class="usps__svg" xmlns="http://www.w3.org/2000/svg" width="11.113" height="10.211" viewBox="0 0 11.113 10.211">
                        <g transform="translate(-129.47 -119.825)">
                            <path d="M538.125,637.732l3.013,3.013,6.987-8.619" transform="translate(-408.125 -511.828)" fill="none" stroke="#707A7F" stroke-width="1.5"/>
                        </g>
                    </svg>
                        <span class="usps__head">Arbeitsplatten leicht gemacht</span>
                    </div>
                    <div class="usps__text">Bestellen Sie Ihre neue Arbeitsplatte in nur drei einfachen Schritten</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
// USPS Mobile slide in animation
(function() {
    var headerUSPs = document.querySelectorAll('.usps__item'),
    i = 1;
    headerUSPs[0].classList.add('usps__item--active');
    setInterval(function() {
        for (var j = 0; j < headerUSPs.length; j++) headerUSPs[j].classList.remove('usps__item--active');

        headerUSPs[i].classList.add('usps__item--active');

        if (i === headerUSPs.length - 1) {
            i = 0
        } else {
            i++;
        };
    }, 3000)
})();
</script>

