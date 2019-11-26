<style>
    /* Default styles */
    body {
        font-size: 16px;
        font-family: 'work sans';
        color: #4d4a49;
        line-height: normal;
    }

    #new-content {
        line-height: normal;
    }

    p {
        margin-top: 1em;
        margin-bottom: 1em;
    }

    p a {
        color: #005D6E;
        text-decoration: underline;
    }

    p a:hover {
        color: #1B9FA8;
    }
    
    li {
        list-style-position: outside;
    }
    

    /* Default styles */

    .breadcrumb {
        text-decoration: underline;
        color: #5A6266;
    }

    .breadcrumb--current {
        text-decoration: none;
    }

    .breadcrumb__arrow {
        width: 6px;
        height: 6px;
        border-right: 1px solid;
        border-top: 1px solid;
        color: #5A6266;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        margin: 0 3px;
    }

    .button--red {
        background: #bc4b51;
        color: #fff;
    }

    .button--white {
        background: #fff;
    }

    .button--white:hover {
        background: rgba(2555, 2555, 255, 0.8);
    }

    .button--ghost {
        background: none;
        border: solid 1px;
        border-color: inherit;
    }

    .button--ghost:hover {
        background: #005D6E;
        color: white;
    }

    .line-height-20 {
        line-height: 20px;
    }

    .vertical-rule {
        background: rgba(0, 0, 0, 0.08);
        height: 100%;
        width: 1px;
        position: absolute;
        top: 0;
    }

    .w-100 {
        width: 100%;
    }

    .h-100 {
        height: 100%;
    }

    /* Changed from style sheet, will need updating (footer + new PDP) */
    .spacer-line {
        border-top: 1px solid;
    }

    .button--green {
        border: solid 1px #005D6E;
    }

    .button--green:hover {
        border-color: #1B9FA8;
    }

    /* Changed from style sheet, will need updating END */

    .explore {
        position: relative;
    }

    .explore::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 20%;
        background: linear-gradient(rgba(77, 74, 73, 0.8), transparent);
    }

    .explore__con {
        position: absolute;
        right: 10px;
        top: 10px;
        z-index: 100;
    }

    .explore__icon {
        position: absolute;
        display: inline-block;
        border-radius: 50%;
        width: 48px;
        height: 48px;
        vertical-align: middle;
        z-index: 100;
    }

    .explore__icon--rel {
        position: relative;
    }

    .explore__icon--small {
        width: 24px;
        height: 24px;
        font-size: 17px;
    }

    /*
    .explore__icon::before {
        content: '+';
        font-size: 26px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
*/
    .explore__icon::after {
        content: '+';
        text-align: center;
        font-size: 28px;
        border: 3px solid;
        border-radius: 50%;
        width: 70%;
        height: 70%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .explore__icon--small::after {
        font-size: 14px;
        border: 2px solid;
    }

    .explore__icon__con {
        display: none;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.25);
        width: max-content;
        max-width: 200px;
    }

    .explore__icon:hover>.explore__icon__con {
        display: block;
        position: absolute;
        left: 80%;
        top: 80%;
    }

    .ribbon {
        position: relative;
        overflow: hidden;
    }

    .ribbon__con {
        content: attr(data-ribbon);
        position: absolute;
        right: -50px;
        top: 42px;
        text-align: center;
        display: block;
        padding: 8px 0px;
        width: 380px;
        transform: rotate(24deg);
        background: #bc4b51;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.25);
        color: white;
    }

    [data-scroll] {
        cursor: pointer;
    }

    .collapse {
        overflow: hidden;
    }

    .collapse__head {
        cursor: pointer;
    }

    .collapse__wrap {
        -webkit-transition: 0.4s;
        -o-transition: 0.4s;
        transition: 0.4s;
        height: 0px;
    }

</style>
<div class="py-2 pl-3 font-12 row-bs align-items-center">
    <div class="breadcrumb"><a href="/kitchen-worktops">Kitchen Worktops</a></div>
    <div class="breadcrumb__arrow mx-2"></div>
    <div class="breadcrumb"><a href="/bespoke-custom-worktops">Bespoke Worktops</a></div>
    <div class="breadcrumb__arrow mx-2"></div>
    <div class="breadcrumb breadcrumb--current font-xs">Online Bespoke Worktop Tool</div>
</div>

<h1 class="font-24 font-md-44 font-xl-46 font-weight-4">Online Bespoke Worktop Tool</h1>

<div class="d-flex uppercase colour-red align-items-center pt-1 pl-1">
    <div class="font-14">
        <span class="font-weight-6 uppercase">10% off bespoke tool orders</span>
    </div>
    <svg class="ml-1" viewBox="0 0 12 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="11px" width="12px">
        <g id="Mobile-Copy-9" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <path d="M0.217514421,1.71751442 L10.1236583,1.71751442 L13.2175144,4.71751442 L10.1236583,7.71751442 L0.217514421,7.71751442 L0.217514421,1.71751442 Z M9.21751442,5.71751442 C9.76979917,5.71751442 10.2175144,5.26979917 10.2175144,4.71751442 C10.2175144,4.16522967 9.76979917,3.71751442 9.21751442,3.71751442 C8.66522967,3.71751442 8.21751442,4.16522967 8.21751442,4.71751442 C8.21751442,5.26979917 8.66522967,5.71751442 9.21751442,5.71751442 Z" id="Combined-Shape" fill="#bc4b51" transform="translate(6.717514, 4.717514) rotate(-45.000000) translate(-6.717514, -4.717514) "></path>
        </g>
    </svg>
</div>

<div class="col-bs">
    <div class="row-bs background-green colour-white pt-md-4 my-3">
        <div class="col-md-6 d-flex flex-wrap flex-column-reverse flex-md-row px-3 order-2 order-md-1">
            <ul class="pl-3 mb-3 m-0">
                <li class="uppercase font-weight-6 py-2">10% off bespoke tool orders</li>
                <li class="py-2">Conveniently design from your own home at a time convenient to you</li>
                <li class="py-2">Get your worktops delivered, ready to fit, reducing the time needed to fit your kitchen</li>
                <li class="py-2">Factory finished with precision equipment to ensure great quality worktops that fit perfectly first time</li>
            </ul>
            <div class="text-center text-md-left py-3">
                <a class="button button--white colour-green font-14 font-md-18 px-md-4 py-md-3" href="https://bespokeworktoptool3.worktop-express.co.uk/choose/?_ga=2.222103707.2020038611.1559549529-748794034.1554475203">Start Designing Your Worktop</a>
            </div>
        </div>
        <video class="col-md p-0 align-self-end order-1 order-md-2 p-0" autoplay loop>
        <source src="media/categories/bespoke/bespoke-worktop-tool.mp4" type="video/mp4">
        Your browser does not support the video tag.
        </video>
    </div>
</div>

<div class="col-bs">
    <div class="row-bs">
        <div class="col-md">
            <div class="font-36">How it works</div>

            <div class="row-bs py-2">
                <div class="col-md-2 pr-0">
                    <div class="font-26 font-md-46 font-weight-6 colour-grey2">#1</div>
                </div>
                <div class="col-md font-md-18 px-3 pl-md-0">
                    <div class="font-weight-6">Create your design &amp; place your order</div>
                    <div>Use our innovative tool to create and submit your order</div>
                </div>
            </div>

            <div class="row-bs py-2">
                <div class="col-md-2 pr-0">
                    <div class="font-26 font-md-46 font-weight-6 colour-grey2">#2</div>
                </div>
                <div class="col-md font-md-18 px-3 pl-md-0">
                    <div class="font-weight-6">Our team issue a fabrication diagram (1 day)</div>
                    <div>We will contact you if we find any potential issues</div>
                </div>
            </div>

            <div class="row-bs py-2">
                <div class="col-md-2 pr-0">
                    <div class="font-26 font-md-46 font-weight-6 colour-grey2">#3</div>
                </div>
                <div class="col-md font-md-18 px-3 pl-md-0">
                    <div class="font-weight-6">Confirm your diagram is correct</div>
                    <div>We need your confirmation before we can continue</div>
                </div>
            </div>

            <div class="row-bs py-2">
                <div class="col-md-2 pr-0">
                    <div class="font-26 font-md-46 font-weight-6 colour-grey2">#4</div>
                </div>
                <div class="col-md font-md-18 px-3 pl-md-0">
                    <div class="font-weight-6">Your order is created and delivered (2-5 days)</div>
                    <div>Our experts fabricate your worktops to your specification</div>
                </div>
            </div>
            
            <div class="row-bs pt-2 pb-4">
                <a class="offset-md-2 pl-3 p-md-0 underline colour-green font-18" href="https://bespokeworktoptool3.worktop-express.co.uk/choose/?_ga=2.32531773.2020038611.1559549529-748794034.1554475203">Start Designing Your Worktop</a>
            </div>
        </div>
        
        <div class="d-flex d-md-none pb-2">
            <div class="col-6 px-0 pr-1">
                <img class="w-100 lazyload" data-src="/media/categories/bespoke/wood/fabrication-team-cad-machine--mob.jpg" data-srcset="/media/categories/bespoke/wood/fabrication-team-cad-machine--mob@2x.jpg" alt="Fabrication team member working with our CAD machine">
            </div>
            <div class="col-6 px-0 pl-1">
                <img class="w-100 lazyload" data-src="/media/categories/bespoke/wood/fabrication-team-sanding--mob.jpg" data-srcset="/media/categories/bespoke/wood/fabrication-team-sanding--mob@2x.jpg" alt="Fabrication team member sanding an oak worktop">
            </div>
        </div>
        
        <div class="col-xl-5 align-self-start py-3 px-md-4 background-grey5 colour-white ml-xl-2">
            <div class="font-26">Need a hand?</div>
            <div class="py-3">
                <div class="font-weight-6">For help on how to use the tool</div>
                <div class="underline"><a href="/online-custom-worktop-tool-user-guide">Read our bespoke tool guide</a></div>
            </div>
            <div class="py-3">
                <div class="font-weight-6">Contact our fabrication team:</div>
                <div><a class="font-26" href="tel:03452222644">0345 22 22 644</a></div>
                <div>
                    <script type="text/javascript">
                        var a = new Array('.uk', 'fabrication@workto', 'p-express.co');
                        document.write("<a class='underline' href='mailto:" + a[1] + a[2] + a[0] + "'>" + a[1] + a[2] + a[0] + "</a>");

                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-bs">
    <div class="row-bs d-none d-md-flex py-2">
        <div class="col-6 px-0 pr-1">
            <img class="w-100 lazyload" data-src="/media/categories/bespoke/wood/fabrication-team-cad-machine.jpg" data-srcset="/media/categories/bespoke/wood/fabrication-team-cad-machine@2x.jpg" alt="Fabrication team member working with our CAD machine">
        </div>
        <div class="col-6 px-0 pl-1">
            <img class="w-100 lazyload" data-src="/media/categories/bespoke/wood/fabrication-team-sanding.jpg" data-srcset="/media/categories/bespoke/wood/fabrication-team-sanding@2x.jpg" alt="Fabrication team member sanding an oak worktop">
        </div>
    </div>
</div>

<div class="p-3 background-grey my-3 my-md-0"><span class="font-weight-5">Please note:</span> the 10% discount applies only to orders placed via the online tool (offer excludes orders placed via any other medium - such as email or telephone). Any discounts which apply to the worktops will have already been applied, therefore no further discount will be displayed at the checkout.</div>

<!--Related catagories-->
<div class="text-center uppercase font-26 py-4">related categories</div>

<div class="row-bs">
    <div class="col-md-3 my-1 pr-md-2">
        <div class="card card--full">
            <a href="/solid-wood-worktops" title="View Solid Wood Worktops">
                <div class="d-flex">
                    <div class="col-5-bs p-1">
                        <img class="card__img lazyload" src="media/gbu0/wood-worktops-range.jpg" data-srcset="media/gbu0/wood-worktops-range@2x.jpg" alt="Solid wood, oak worktop">
                    </div>
                    <div class="col-7 p-1">
                        <div class="card__label">
                            <div class="font-weight-6">Solid Wood Worktops</div>
                        </div>
                        <div class="font-14 pt-1">from</div>
                        <div class="font-26 font-weight-6">&pound;90</div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-md-3 my-1 px-md-2">
        <div class="card card--full">
            <a href="/laminate-worktops" title="View Laminate Worktops">
                <div class="d-flex">
                    <div class="col-5-bs p-1">
                        <img class="card__img lazyload" src="media/gbu0/laminate-worktops-range.jpg" data-srcset="media/gbu0/laminate-worktops-range@2x.jpg" alt="Black sparkle laminate worktop">
                    </div>
                    <div class="col-7 p-1">
                        <div class="card__label">
                            <div class="font-weight-6">Laminate Worktops</div>
                        </div>
                        <div class="font-14 pt-1">from</div>
                        <div class="font-26 font-weight-6">&pound;60</div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-md-3 my-1 px-md-2">
        <div class="card card--full">
            <a href="/solid-laminate-worktops" title="View Solid Laminate Worktops">
                <div class="d-flex">
                    <div class="col-5-bs p-1">
                        <img class="card__img lazyload" src="media/gbu0/solid-laminate-worktops-range.jpg" data-srcset="media/gbu0/solid-laminate-worktops-range@2x.jpg" alt="Rouille, Solid laminate worktop">
                    </div>
                    <div class="col-7 p-1">
                        <div class="card__label">
                            <div class="font-weight-6">Solid Laminate Worktops</div>
                        </div>
                        <div class="font-14 pt-1">from</div>
                        <div class="font-26 font-weight-6">&pound;255</div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-md-3 my-1 pl-md-2">
        <div class="card card--full">
            <a href="/earthstone-worktops" title="View Earthstone Worktops">
                <div class="d-flex">
                    <div class="col-5-bs p-1">
                        <img class="card__img" src="media/gbu0/earthstone-worktops-range.jpg" data-srcset="media/gbu0/earthstone-worktops-range@2x.jpg" alt="Glacier, white earthtone worktop">
                    </div>
                    <div class="col-7 p-1">
                        <div class="card__label">
                            <div class="font-weight-6">Earthstone Worktops</div>
                        </div>
                        <div class="font-14 pt-1">from</div>
                        <div class="font-26 font-weight-6">&pound;260</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<!--Related catagories END-->

<div class="text-center pt-5">
    <div class="font-22 font-md-36">Design your worktop today</div>
    <a href="/online-bespoke-worktop-tool.html" class="button button--green font-18 p-3 m-3">Bespoke Worktop Tool</a>
</div>
