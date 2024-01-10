@extends('layouts.app')

@section('content')

    <style>
        @media(prefers-color-scheme: dark){ .bg-dots{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(200,200,255,0.15)'/%3E%3C/svg%3E");}}@media(prefers-color-scheme: light){.bg-dots{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,50,0.10)'/%3E%3C/svg%3E")}}
    </style>

    <a class="screen-reader-text skip-link" title="Skip to content">Skip to content</a>
        {{-- <div class="gb-container gb-container-d81818b5">
            <div class="gb-container gb-container-2f060dfc">
                <p class="gb-headline gb-headline-1d545254 gb-headline-text">
                    <a href="https://cloud.depa.id/login"><strong>Daftar Cloud Depa by Dewabiz</strong>- Dapatkan Saldo Gratis Secara Cuma Cuma!</a>
                </p>
                <div class="gb-container gb-container-012bfeef" id="top-nav">
                    <a class="gb-button gb-button-3d1ac72d" href="https://my.dewabiz.com/supporttickets.php"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-chat" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"></path></svg></span><span class="gb-button-text">Support</span></a><a class="gb-button gb-button-3086e6eb" href="https://wa.me/6285215222259" target="_blank" rel="nofollow noopener noreferrer"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-whatsapp" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path></svg></span><span class="gb-button-text">WhatsApp CS 24/7</span></a>
                </div>
            </div>
        </div> --}}
        <header class="site-header has-inline-mobile-toggle" id="masthead" aria-label="Site" itemtype="https://schema.org/WPHeader" itemscope="">
        <div class="inside-header grid-container flex justify-between" style="padding-top:20px">
            <div class="site-branding-container">
                <div class="site-logo">
                    <a href="https://dewabiz.com/" rel="home"><img class="header-image is-logo-image" alt="DewaBiz.com" src="{{ asset('src/template/logo_big_inverse.svg') }}" width="0" height="0"></a>
                </div>
                <div class="site-branding">
                    <p class="site-description" itemprop="description">Host Your Imagination</p>
                </div>
            </div>
            {{-- <nav class="main-navigation mobile-menu-control-wrapper" id="mobile-menu-control-wrapper" aria-label="Mobile Toggle">
            <div class="menu-bar-items">
                <span class="menu-bar-item slideout-toggle hide-on-mobile has-svg-icon"><a href="https://dewabiz.com/#" role="button" aria-label="Open Off-Canvas Panel"><span class="gp-icon pro-menu-bars">
                <svg viewbox="0 0 512 512" aria-hidden="true" role="img" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em">
                <path d="M0 96c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24z"></path>
                </svg>
                </span></a></span>
            </div>
            <button data-nav="site-navigation" class="menu-toggle" aria-controls="generate-slideout-menu" aria-expanded="false">
            <span class="gp-icon icon-menu-bars"><svg viewbox="0 0 512 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"><path d="M0 96c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24z"></path></svg><svg viewbox="0 0 512 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"><path d="M71.029 71.029c9.373-9.372 24.569-9.372 33.942 0L256 222.059l151.029-151.03c9.373-9.372 24.569-9.372 33.942 0 9.372 9.373 9.372 24.569 0 33.942L289.941 256l151.03 151.029c9.372 9.373 9.372 24.569 0 33.942-9.373 9.372-24.569 9.372-33.942 0L256 289.941l-151.029 151.03c-9.373 9.372-24.569 9.372-33.942 0-9.372-9.373-9.372-24.569 0-33.942L222.059 256 71.029 104.971c-9.372-9.373-9.372-24.569 0-33.942z"></path></svg></span><span class="screen-reader-text">Menu</span></button></nav><nav class="main-navigation nav-align-right has-menu-bar-items sub-menu-right" id="site-navigation" aria-label="Primary" itemtype="https://schema.org/SiteNavigationElement" itemscope="">
            <div class="inside-navigation grid-container">
                <button class="menu-toggle" aria-controls="generate-slideout-menu" aria-expanded="false">
                <span class="gp-icon icon-menu-bars"><svg viewbox="0 0 512 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"><path d="M0 96c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24z"></path></svg><svg viewbox="0 0 512 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"><path d="M71.029 71.029c9.373-9.372 24.569-9.372 33.942 0L256 222.059l151.029-151.03c9.373-9.372 24.569-9.372 33.942 0 9.372 9.373 9.372 24.569 0 33.942L289.941 256l151.03 151.029c9.372 9.373 9.372 24.569 0 33.942-9.373 9.372-24.569 9.372-33.942 0L256 289.941l-151.029 151.03c-9.373 9.372-24.569 9.372-33.942 0-9.372-9.373-9.372-24.569 0-33.942L222.059 256 71.029 104.971c-9.372-9.373-9.372-24.569 0-33.942z"></path></svg></span><span class="screen-reader-text">Menu</span></button>
                <div id="primary-menu" class="main-nav">
                    <ul id="menu-main-menu" class=" menu sf-menu">
                        <li id="menu-item-13756" class="mega-menu mega-menu-col-4 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-13756">
                            <a href="https://dewabiz.com/#">Product<span role="presentation" class="dropdown-menu-toggle"><span class="gp-icon icon-arrow"><svg viewbox="0 0 330 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"><path d="M305.913 197.085c0 2.266-1.133 4.815-2.833 6.514L171.087 335.593c-1.7 1.7-4.249 2.832-6.515 2.832s-4.815-1.133-6.515-2.832L26.064 203.599c-1.7-1.7-2.832-4.248-2.832-6.514s1.132-4.816 2.832-6.515l14.162-14.163c1.7-1.699 3.966-2.832 6.515-2.832 2.266 0 4.815 1.133 6.515 2.832l111.316 111.317 111.316-111.317c1.7-1.699 4.249-2.832 6.515-2.832s4.815 1.133 6.515 2.832l14.162 14.163c1.7 1.7 2.833 4.249 2.833 6.515z"></path></svg></span></span><span class="description"></span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-48491" class="mega-width menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-48491">
                                    <a href="https://dewabiz.com/#">FEATURED PRODUCT<span role="presentation" class="dropdown-menu-toggle"><span class="gp-icon icon-arrow-right"><svg viewbox="0 0 192 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M178.425 256.001c0 2.266-1.133 4.815-2.832 6.515L43.599 394.509c-1.7 1.7-4.248 2.833-6.514 2.833s-4.816-1.133-6.515-2.833l-14.163-14.162c-1.699-1.7-2.832-3.966-2.832-6.515 0-2.266 1.133-4.815 2.832-6.515l111.317-111.316L16.407 144.685c-1.699-1.7-2.832-4.249-2.832-6.515s1.133-4.815 2.832-6.515l14.163-14.162c1.7-1.7 4.249-2.833 6.515-2.833s4.815 1.133 6.514 2.833l131.994 131.993c1.7 1.7 2.832 4.249 2.832 6.515z" fill-rule="nonzero"></path></svg></span></span><span class="description"></span></a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-48492" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48492">
                                            <a href="https://dewabiz.com/hosting-super/" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/jettempur.svg" class="menu-image menu-image-title-after" alt="" decoding="async"><span class="menu-image-title-after menu-image-title">Hosting Super</span><span class="description">Hosting dengan performa tinggi dan koneksi diakses super cepat.</span></a>
                                        </li>
                                        <li id="menu-item-48495" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48495">
                                            <a href="https://dewabiz.com/wordpress-hosting/" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/wordpress.svg" class="menu-image menu-image-title-after" alt="" decoding="async"><span class="menu-image-title-after menu-image-title">WordPress Hosting</span><span class="description">Dilengkapi dengan fitur wordpress manager, Performa lebih cepat 5x.</span></a>
                                        </li>
                                        <li id="menu-item-48497" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48497">
                                            <a href="https://dewabiz.com/rdp-murah/" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/windows_11.svg" class="menu-image menu-image-title-after" alt="" decoding="async"><span class="menu-image-title-after menu-image-title">RDP Murah</span><span class="description">Jaminan harga terbaik, dapat di Akses via Remote Desktop Connection.</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-48500" class="mega-width menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-48500">
                                    <a href="https://dewabiz.com/#">HOSTING<span role="presentation" class="dropdown-menu-toggle"><span class="gp-icon icon-arrow-right"><svg viewbox="0 0 192 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M178.425 256.001c0 2.266-1.133 4.815-2.832 6.515L43.599 394.509c-1.7 1.7-4.248 2.833-6.514 2.833s-4.816-1.133-6.515-2.833l-14.163-14.162c-1.699-1.7-2.832-3.966-2.832-6.515 0-2.266 1.133-4.815 2.832-6.515l111.317-111.316L16.407 144.685c-1.699-1.7-2.832-4.249-2.832-6.515s1.133-4.815 2.832-6.515l14.163-14.162c1.7-1.7 4.249-2.833 6.515-2.833s4.815 1.133 6.514 2.833l131.994 131.993c1.7 1.7 2.832 4.249 2.832 6.515z" fill-rule="nonzero"></path></svg></span></span><span class="description"></span></a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-48523" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48523">
                                            <a href="https://dewabiz.com/hosting-murah/" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/cpulagilagilagi.svg" class="menu-image menu-image-title-after" alt="" decoding="async"><span class="menu-image-title-after menu-image-title">Unlimited Hosting</span><span class="description">Pilihan Hosting Terbaik</span></a>
                                        </li>
                                        <li id="menu-item-48525" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48525">
                                            <a href="https://dewabiz.com/mail-hosting/" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/email.svg" class="menu-image menu-image-title-after" alt="" decoding="async"><span class="menu-image-title-after menu-image-title">Mail Hosting</span><span class="description">Layanan Mail Hosting Terbaik menggunakan Zimbra.</span></a>
                                        </li>
                                        <li id="menu-item-53016" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53016">
                                            <a href="https://dewabiz.com/semi-dedicated/" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/vpskonek.svg" class="menu-image menu-image-title-after" alt="" decoding="async"><span class="menu-image-title-after menu-image-title">Semi Dedicated</span><span class="description"></span></a>
                                        </li>
                                        <li id="menu-item-48634" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48634">
                                            <a href="https://dewabiz.com/dedicated-server/" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/jettempur.svg" class="menu-image menu-image-title-after" alt="" decoding="async"><span class="menu-image-title-after menu-image-title">Dedicated Server</span><span class="description"></span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-48501" class="mega-width menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-48501">
                                    <a href="https://dewabiz.com/#">DOMAIN<span role="presentation" class="dropdown-menu-toggle"><span class="gp-icon icon-arrow-right"><svg viewbox="0 0 192 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M178.425 256.001c0 2.266-1.133 4.815-2.832 6.515L43.599 394.509c-1.7 1.7-4.248 2.833-6.514 2.833s-4.816-1.133-6.515-2.833l-14.163-14.162c-1.699-1.7-2.832-3.966-2.832-6.515 0-2.266 1.133-4.815 2.832-6.515l111.317-111.316L16.407 144.685c-1.699-1.7-2.832-4.249-2.832-6.515s1.133-4.815 2.832-6.515l14.163-14.162c1.7-1.7 4.249-2.833 6.515-2.833s4.815 1.133 6.514 2.833l131.994 131.993c1.7 1.7 2.832 4.249 2.832 6.515z" fill-rule="nonzero"></path></svg></span></span><span class="description"></span></a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-48546" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48546">
                                            <a href="https://dewabiz.com/domain/" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/multiple-datacenter.svg" class="menu-image menu-image-title-after" alt="" decoding="async"><span class="menu-image-title-after menu-image-title">Domain Murah</span><span class="description">Beli Domain Murah Rp 2.000, daftar sekarang!</span></a>
                                        </li>
                                        <li id="menu-item-48760" class="small_img menu-item menu-item-type-custom menu-item-object-custom menu-item-48760">
                                            <a href="https://dewabiz.com/reseller-domain/" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/email.svg" class="menu-image menu-image-title-after" alt="" decoding="async"><span class="menu-image-title-after menu-image-title">Reseller Domain</span><span class="description"></span></a>
                                        </li>
                                        <li id="menu-item-48761" class="small_img menu-item menu-item-type-post_type menu-item-object-page menu-item-48761">
                                            <a href="https://dewabiz.com/domain-backorder/" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/code.svg" class="menu-image menu-image-title-after" alt="" decoding="async"><span class="menu-image-title-after menu-image-title">Backorder Domain</span><span class="description"></span></a>
                                        </li>
                                        <li id="menu-item-48762" class="small_img menu-item menu-item-type-custom menu-item-object-custom menu-item-48762">
                                            <a href="https://my.dewabiz.com/domainmarket.php" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/promo.svg" class="menu-image menu-image-title-after" alt="" decoding="async"><span class="menu-image-title-after menu-image-title">Lelang Domain</span><span class="description"></span></a>
                                        </li>
                                        <li id="menu-item-51813" class="small_img menu-item menu-item-type-custom menu-item-object-custom menu-item-51813">
                                            <a href="https://dewabiz.com/bulk-domain/" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/transfer-domain.svg" class="menu-image menu-image-title-after" alt="" decoding="async"><span class="menu-image-title-after menu-image-title">Bulk Domain Checker</span><span class="description"></span></a>
                                        </li>
                                        <li id="menu-item-48764" class="small_img menu-item menu-item-type-post_type menu-item-object-page menu-item-48764">
                                            <a href="https://dewabiz.com/domain-id/" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/id.svg-36x36.png" class="menu-image menu-image-title-after" alt="" decoding="async"><span class="menu-image-title-after menu-image-title">Domain ID</span><span class="description"></span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-48502" class="mega-width menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-48502">
                                    <a href="https://dewabiz.com/#">VPS SERVER<span role="presentation" class="dropdown-menu-toggle"><span class="gp-icon icon-arrow-right"><svg viewbox="0 0 192 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M178.425 256.001c0 2.266-1.133 4.815-2.832 6.515L43.599 394.509c-1.7 1.7-4.248 2.833-6.514 2.833s-4.816-1.133-6.515-2.833l-14.163-14.162c-1.699-1.7-2.832-3.966-2.832-6.515 0-2.266 1.133-4.815 2.832-6.515l111.317-111.316L16.407 144.685c-1.699-1.7-2.832-4.249-2.832-6.515s1.133-4.815 2.832-6.515l14.163-14.162c1.7-1.7 4.249-2.833 6.515-2.833s4.815 1.133 6.514 2.833l131.994 131.993c1.7 1.7 2.832 4.249 2.832 6.515z" fill-rule="nonzero"></path></svg></span></span><span class="description"></span></a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-48535" class="small_img menu-item menu-item-type-post_type menu-item-object-page menu-item-48535">
                                            <a href="https://dewabiz.com/vps-super-compute/" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/vpskonek.svg" class="menu-image menu-image-title-after" alt="" decoding="async"><span class="menu-image-title-after menu-image-title">Super Compute</span><span class="description"></span></a>
                                        </li>
                                        <li id="menu-item-48534" class="small_img menu-item menu-item-type-post_type menu-item-object-page menu-item-48534">
                                            <a href="https://dewabiz.com/vps-mikrotik/" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/vps.svg" class="menu-image menu-image-title-after" alt="" decoding="async"><span class="menu-image-title-after menu-image-title">VPS Mikrotik</span><span class="description"></span></a>
                                        </li>
                                        <li id="menu-item-48765" class="small_img menu-item menu-item-type-post_type menu-item-object-page menu-item-48765">
                                            <a href="https://dewabiz.com/vps-tunneling-vpn/" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/vpslagi.svg" class="menu-image menu-image-title-after" alt="" decoding="async"><span class="menu-image-title-after menu-image-title">VPS Tunneling / VPN</span><span class="description"></span></a>
                                        </li>
                                        <li id="menu-item-48766" class="small_img menu-item menu-item-type-post_type menu-item-object-page menu-item-48766">
                                            <a href="https://dewabiz.com/cloud-vps/" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/vpskonek.svg" class="menu-image menu-image-title-after" alt="" decoding="async"><span class="menu-image-title-after menu-image-title">Cloud VPS</span><span class="description"></span></a>
                                        </li>
                                        <li id="menu-item-48767" class="small_img menu-item menu-item-type-post_type menu-item-object-page menu-item-48767">
                                            <a href="https://dewabiz.com/rdp-murah/" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/code.svg" class="menu-image menu-image-title-after" alt="" decoding="async"><span class="menu-image-title-after menu-image-title">RDP Indonesia</span><span class="description"></span></a>
                                        </li>
                                        <li id="menu-item-48769" class="spacing_nav menu-item menu-item-type-custom menu-item-object-custom menu-item-48769">
                                            <a href="https://dewabiz.com/kb/">SERVER<span class="description"></span></a>
                                        </li>
                                        <li id="menu-item-48768" class="small_img menu-item menu-item-type-post_type menu-item-object-page menu-item-48768">
                                            <a href="https://dewabiz.com/colocation-server/" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/shildfirewall.svg" class="menu-image menu-image-title-after" alt="" decoding="async"><span class="menu-image-title-after menu-image-title">Colocation Server</span><span class="description"></span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-13758" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13758">
                            <a href="https://dewabiz.com/pricing/">Pricing<span class="description"></span></a>
                        </li>
                        <li id="menu-item-15399" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15399">
                            <a href="https://dewabiz.com/affiliate/">Affiliate<span class="description"></span></a>
                        </li>
                        <li id="menu-item-48490" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48490">
                            <a href="https://dewabiz.com/promo-list/">Promo<span class="description"></span></a>
                        </li>
                        <li id="menu-item-14413" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14413">
                            <a href="https://dewabiz.com/blog/">Blog<span class="description"></span></a>
                        </li>
                    </ul>
                </div>
                <div class="menu-bar-items">
                    <span class="menu-bar-item slideout-toggle hide-on-mobile has-svg-icon"><a href="https://dewabiz.com/#" role="button" aria-label="Open Off-Canvas Panel"><span class="gp-icon pro-menu-bars">
                    <svg viewbox="0 0 512 512" aria-hidden="true" role="img" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em">
                    <path d="M0 96c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24z"></path>
                    </svg>
                    </span></a></span>
                </div>
            </div>
            </nav> --}}
            <div class="gb-container gb-container-86sdb48f top_toggle">
                <a class="gb-button gb-button-a6cdc417 slideout-toggle custom-slideout-toggle"><span class="gb-icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 23 23" height="23" width="23"><path fill="white" d="M15.8167 2.86668L15.8167 3.17501C15.8167 4.36209 14.8455 5.33334 13.6584 5.33334L2.86675 5.33334C1.67966 5.33334 0.708414 4.36209 0.708414 3.17501L0.708414 2.86668C0.708414 1.67959 1.67966 0.708343 2.86675 0.708343L13.6584 0.708343C14.8455 0.708343 15.8167 1.67959 15.8167 2.86668ZM22.2917 11.5C22.2917 12.6871 21.3205 13.6583 20.1334 13.6583L2.86675 13.6583C1.67966 13.6583 0.708414 12.6871 0.708414 11.5C0.708414 10.3129 1.67966 9.34168 2.86675 9.34168L20.1334 9.34168C21.3205 9.34168 22.2917 10.3129 22.2917 11.5ZM9.95841 20.1333C9.95841 21.3204 8.98716 22.2917 7.80008 22.2917L2.86675 22.2917C1.67966 22.2917 0.708413 21.3204 0.708413 20.1333C0.708413 18.9463 1.67966 17.975 2.86675 17.975L7.80008 17.975C8.98716 17.975 9.95841 18.9463 9.95841 20.1333Z"></path></svg></span></a>
            </div>
            <div>
                <a class="gb-button gb-button-169c0c68" href="{{ route('register') }}"><span class="gb-button-text">Daftar</span><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-box-arrow-in-right" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" fill-rule="evenodd"></path><path d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" fill-rule="evenodd"></path></svg></span></a>
            <a style="background-color: rgb(156 163 175 / var(--tw-bg-opacity));" class="gb-button gb-button-169c0c68 bg-gray-400" href="https://clpapp.biz.id/login"><span class="gb-button-text">Login Customer</span></a>
            <a style="background-color: rgb(34 197 94 / var(--tw-bg-opacity));" class="gb-button gb-button-169c0c68 bg-green-500" href="https://clpapp.biz.id/owner/login"><span class="gb-button-text">Login Owner</span></a>
            </div>
        </div>
        </header>
        <div class="site grid-container container hfeed" id="page">
            <div class="site-content" id="content">
                <div class="content-area" id="primary">
                    <main class="site-main" id="main"><article id="post-952" class="post-952 page type-page status-publish has-post-thumbnail" itemtype="https://schema.org/CreativeWork" itemscope="">
                    <div class="inside-article">
                        <div class="entry-content" itemprop="text">
                            <div class="gb-container gb-container-810232ea hero-bg">
                                <div class="gb-container gb-container-05b48212">
                                    <div class="gb-container gb-container-817472ee">
                                        <h1 class="gb-headline gb-headline-fb9f7042 gb-headline-text gb-headline-f6604367 gb-headline-f66df367 gb-headline-7301dfe8">Spek Website Gokil <strong><em>Harga MuMer.</em></strong></h1>
                                        <p class="gb-headline gb-headline-359741ed gb-headline-text gb-headline-79df3c34 gb-headline-792c3c34">
                                            Optimalkan Bisnis Anda sekarang! Pilih paket kami untuk meningkatkan kualitas.
                                        </p>
                                        {{-- <div class="gb-container gb-container-c21cd090">
                                            <div class="gb-container gb-container-aa8f8de7">
                                                <p class="gb-headline gb-headline-ddf48a0e">
                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-patch-check-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"></path></svg></span><span class="gb-headline-text"><strong>Gratis</strong> Theme &amp; Plugin Premium</span>
                                                </p>
                                                <p class="gb-headline gb-headline-5bd6fea8">
                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-patch-check-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"></path></svg></span><span class="gb-headline-text"><strong><strong>Gratis</strong> Optimasi WordPress</strong></span>
                                                </p>
                                                <p class="gb-headline gb-headline-c8c07ba1">
                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-patch-check-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"></path></svg></span><span class="gb-headline-text"><strong><strong><strong>Gratis</strong> Domain .COM 1 Tahun</strong></strong></span>
                                                </p>
                                                <p class="gb-headline gb-headline-f72eaa3d">
                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-patch-check-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"></path></svg></span><span class="gb-headline-text"><strong><strong><strong><strong><strong>Garansi</strong> Uang Kembali 30 Hari</strong></strong></strong></strong></span>
                                                </p>
                                            </div>
                                            <div class="gb-container gb-container-d480eafb">
                                                <h3 class="gb-headline gb-headline-7977dbe5 gb-headline-text">Rp 400.000/tahun</h3>
                                                <div class="gb-container gb-container-97b6eee6">
                                                    <div class="gb-grid-wrapper gb-grid-wrapper-c47972b7">
                                                        <div class="gb-grid-column gb-grid-column-c3fe44f0">
                                                            <div class="gb-container gb-container-c3fe44f0">
                                                                <p class="gb-headline gb-headline-af3df269 gb-headline-text">RAM</p>
                                                                <p class="gb-headline gb-headline-96c8d429 gb-headline-text">8GB</p>
                                                            </div>
                                                        </div>
                                                        <div class="gb-grid-column gb-grid-column-ffc80a1c">
                                                            <div class="gb-container gb-container-ffc80a1c">
                                                                <p class="gb-headline gb-headline-50846c80 gb-headline-text">CPU</p>
                                                                <p class="gb-headline gb-headline-8f7c3d81 gb-headline-text">4 Core</p>
                                                            </div>
                                                        </div>
                                                        <div class="gb-grid-column gb-grid-column-6f5d0dd9">
                                                            <div class="gb-container gb-container-6f5d0dd9">
                                                                <p class="gb-headline gb-headline-e231b008 gb-headline-text">Storage</p>
                                                                <p class="gb-headline gb-headline-8e544706 gb-headline-text">Unlimited</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="gb-button gb-button-3927f21c gb-button-text gb-button-09be3cd9" href="https://my.dewabiz.com/cart.php?a=add&amp;pid=604&amp;billingcycle=annually" target="_blank" rel="noopener noreferrer">Order Now</a>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="gb-container gb-container-00503323">
                                        <figure class="gb-block-image gb-block-image-83e79a88"><img fetchpriority="high" decoding="async" width="600" height="815" class="gb-image gb-image-83e79a88" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/wp-heading.png" alt="" title="wp-heading" srcset="https://dewabiz.com/wp-content/uploads/2023/08/wp-heading.png 600w, https://dewabiz.com/wp-content/uploads/2023/08/wp-heading-221x300.png 221w, https://dewabiz.com/wp-content/uploads/2023/08/wp-heading-18x24.png 18w, https://dewabiz.com/wp-content/uploads/2023/08/wp-heading-27x36.png 27w, https://dewabiz.com/wp-content/uploads/2023/08/wp-heading-35x48.png 35w" sizes="(max-width: 600px) 100vw, 600px"></figure>
                                    </div>
                                </div>
                                <div class="gb-shapes">
                                    <div class="gb-shape gb-shape-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1200 218" preserveaspectratio="none"><path d="M0 218h1200v-31.3l-40 4.4c-40 4.8-120 13.1-200 0-80-13.6-160-48.6-240-66.7-80-17.8-160-17.8-240-8.8-80 8.6-160 26.9-240 8.8-80-17.7-160-71.1-200-97.7L0 0v218z"></path></svg>
                                    </div>
                                </div>
                            </div>

                            <div class="gb-container gb-container-1d011bed">
                                <h2 class="gb-headline gb-headline-75c4f21e gb-headline-text">Partner</h2>
                                <div class="gb-container gb-container-65d0f183">
                                    <div class="gb-container gb-container-e18b1fba tooltip" data-tooltip="CloudLinux">
                                        <figure class="gb-block-image gb-block-image-4157a3cc"><a href="https://dewabiz.com/#"><img loading="lazy" decoding="async" width="81" height="80" class="gb-image gb-image-4157a3cc" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/cloudlinux.jpg" alt="" title="cloudlinux" srcset="https://dewabiz.com/wp-content/uploads/2023/08/cloudlinux.jpg 81w, https://dewabiz.com/wp-content/uploads/2023/08/cloudlinux-24x24.jpg 24w, https://dewabiz.com/wp-content/uploads/2023/08/cloudlinux-36x36.jpg 36w, https://dewabiz.com/wp-content/uploads/2023/08/cloudlinux-48x48.jpg 48w" sizes="(max-width: 81px) 100vw, 81px"></a></figure>
                                    </div>
                                    <div class="gb-container gb-container-a714db69 tooltip" data-tooltip="cPanel Partner">
                                        <figure class="gb-block-image gb-block-image-18ba0a7e"><a href="https://partnernoc.cpanel.net/res/8719/dewabizcom.htm" target="_blank" rel="noopener noreferrer nofollow"><img loading="lazy" decoding="async" width="119" height="80" class="gb-image gb-image-18ba0a7e" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/cpanel.jpg" alt="" title="cpanel" srcset="https://dewabiz.com/wp-content/uploads/2023/08/cpanel.jpg 119w, https://dewabiz.com/wp-content/uploads/2023/08/cpanel-24x16.jpg 24w, https://dewabiz.com/wp-content/uploads/2023/08/cpanel-36x24.jpg 36w, https://dewabiz.com/wp-content/uploads/2023/08/cpanel-48x32.jpg 48w" sizes="(max-width: 119px) 100vw, 119px"></a></figure>
                                    </div>
                                    <div class="gb-container gb-container-6f48770f tooltip" data-tooltip="s.id Partner">
                                        <figure class="gb-block-image gb-block-image-2ee57ff0"><a href="https://s.id/dewabiz" target="_blank" rel="noopener noreferrer nofollow"><img loading="lazy" decoding="async" width="423" height="512" class="gb-image gb-image-2ee57ff0" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/Group-76.png" alt="" title="s.id" srcset="https://dewabiz.com/wp-content/uploads/2023/08/Group-76.png 423w, https://dewabiz.com/wp-content/uploads/2023/08/Group-76-248x300.png 248w, https://dewabiz.com/wp-content/uploads/2023/08/Group-76-20x24.png 20w, https://dewabiz.com/wp-content/uploads/2023/08/Group-76-30x36.png 30w, https://dewabiz.com/wp-content/uploads/2023/08/Group-76-40x48.png 40w" sizes="(max-width: 423px) 100vw, 423px"></a></figure>
                                    </div>
                                    <div class="gb-container gb-container-27dc4a81 tooltip" data-tooltip="PANDI Accredited">
                                        <figure class="gb-block-image gb-block-image-b73d2929"><a href="https://pandi.id/partner-registrar" target="_blank" rel="noopener noreferrer nofollow"><img loading="lazy" decoding="async" width="80" height="80" class="gb-image gb-image-b73d2929" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/id.png" alt="" title="id" srcset="https://dewabiz.com/wp-content/uploads/2023/08/id.png 80w, https://dewabiz.com/wp-content/uploads/2023/08/id-24x24.png 24w, https://dewabiz.com/wp-content/uploads/2023/08/id-36x36.png 36w, https://dewabiz.com/wp-content/uploads/2023/08/id-48x48.png 48w" sizes="(max-width: 80px) 100vw, 80px"></a></figure>
                                    </div>
                                    <div class="gb-container gb-container-eaf78488 tooltip" data-tooltip="Liquid Partner">
                                        <figure class="gb-block-image gb-block-image-6559e955"><a href="https://dewabiz.com/#"><img loading="lazy" decoding="async" width="116" height="80" class="gb-image gb-image-6559e955" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/liquid.jpg" alt="" title="liquid" srcset="https://dewabiz.com/wp-content/uploads/2023/08/liquid.jpg 116w, https://dewabiz.com/wp-content/uploads/2023/08/liquid-24x17.jpg 24w, https://dewabiz.com/wp-content/uploads/2023/08/liquid-36x25.jpg 36w, https://dewabiz.com/wp-content/uploads/2023/08/liquid-48x33.jpg 48w" sizes="(max-width: 116px) 100vw, 116px"></a></figure>
                                    </div>
                                    <div class="gb-container gb-container-472622ab tooltip" data-tooltip="LiteSpeed Partner">
                                        <figure class="gb-block-image gb-block-image-5580d3c0"><a href="https://dewabiz.com/#"><img loading="lazy" decoding="async" width="70" height="80" class="gb-image gb-image-5580d3c0" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/litespeed.jpg" alt="" title="litespeed" srcset="https://dewabiz.com/wp-content/uploads/2023/08/litespeed.jpg 70w, https://dewabiz.com/wp-content/uploads/2023/08/litespeed-21x24.jpg 21w, https://dewabiz.com/wp-content/uploads/2023/08/litespeed-32x36.jpg 32w, https://dewabiz.com/wp-content/uploads/2023/08/litespeed-42x48.jpg 42w" sizes="(max-width: 70px) 100vw, 70px"></a></figure>
                                    </div>
                                    <div class="gb-container gb-container-a3f34b7f tooltip" data-tooltip="Softaculous">
                                        <figure class="gb-block-image gb-block-image-25a5a9a0"><a href="https://www.softaculous.com/softaculous/NOC_Partners" target="_blank" rel="noopener noreferrer nofollow"><img loading="lazy" decoding="async" width="91" height="80" class="gb-image gb-image-25a5a9a0" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/softaculous.jpg" alt="" title="softaculous" srcset="https://dewabiz.com/wp-content/uploads/2023/08/softaculous.jpg 91w, https://dewabiz.com/wp-content/uploads/2023/08/softaculous-24x21.jpg 24w, https://dewabiz.com/wp-content/uploads/2023/08/softaculous-36x32.jpg 36w, https://dewabiz.com/wp-content/uploads/2023/08/softaculous-48x42.jpg 48w" sizes="(max-width: 91px) 100vw, 91px"></a></figure>
                                    </div>
                                </div>
                            </div>

                            <div class="gb-container gb-container-ed88d38c">
                                <div class="gb-container gb-container-a68df062">
                                    <div class="gb-container gb-container-26ce3e3d gb-tabs" data-opened-tab="1">
                                        {{-- <div class="gb-container gb-container-1045b349 price_tab alignwide gb-tabs__buttons">
                                            <button class="gb-button gb-button-3c60b56e gb-button-text gb-tabs__button gb-block-is-current" aria-expanded="true">1 Years <strong>60%Off</strong></button><button class="gb-button gb-button-56505969 gb-button-text gb-tabs__button" aria-expanded="false">2-Years <strong>40%Off</strong></button><button class="gb-button gb-button-e9837b92 gb-button-text gb-tabs__button" aria-expanded="false">3-Years <strong>75%Off</strong></button>
                                        </div> --}}
                                        <div class="gb-container gb-container-e64a644b gb-tabs__items">
                                            <div class="gb-container gb-container-d54610ca gb-tabs__item gb-tabs__item-open">
                                                <div class="gb-grid-wrapper gb-grid-wrapper-83dfd63a">
                                                    <div class="gb-grid-column gb-grid-column-c95333fb">
                                                        <div class="gb-container gb-container-c95333fb shadow">
                                                            <div class="gb-container gb-container-512b51b0">
                                                                <h3 class="gb-headline gb-headline-acf0f0fc gb-headline-text gb-headline-5624a144">Marketer Pro</h3>
                                                                <h3 class="gb-headline gb-headline-449645de gb-headline-text gb-headline-31a25ca3">CLP Website</h3>
                                                            </div>
                                                            <div class="gb-container gb-container-feb67a31">
                                                                {{-- <div class="gb-grid-wrapper gb-grid-wrapper-f8d57267">
                                                                    <div class="gb-grid-column gb-grid-column-0668a039">
                                                                        <div class="gb-container gb-container-0668a039">
                                                                            <h6 class="gb-headline gb-headline-2c1025b2 gb-headline-text">RAM</h6>
                                                                            <h6 class="gb-headline gb-headline-e09fa01d gb-headline-text gb-headline-c59df076 gb-headline-c5914076">1 GB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="gb-grid-column gb-grid-column-879d2fcf">
                                                                        <div class="gb-container gb-container-879d2fcf">
                                                                            <h6 class="gb-headline gb-headline-c63d089e gb-headline-text">CPU</h6>
                                                                            <h6 class="gb-headline gb-headline-a49d46d5 gb-headline-text gb-headline-73dff66e gb-headline-73c2f66e">1 Core</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="gb-grid-column gb-grid-column-22695e59">
                                                                        <div class="gb-container gb-container-22695e59">
                                                                            <h6 class="gb-headline gb-headline-480cf687 gb-headline-text">Storage</h6>
                                                                            <h6 class="gb-headline gb-headline-45b43935 gb-headline-text gb-headline-f5dfd9e4 gb-headline-f5acd9e4">Unlimited</h6>
                                                                        </div>
                                                                    </div>
                                                                </div> --}}
                                                                <div class="gb-container gb-container-e2d6cab4">
                                                                    <div class="gb-container gb-container-f9fcf455">
                                                                        <div class="gb-container gb-container-67df1fb7">
                                                                            <p class="gb-headline gb-headline-b6e867d0 gb-headline-text coret">Rp 1.375.000</p>
                                                                            <p class="gb-headline gb-headline-239efdf8 gb-headline-text gb-headline-8b6a15a8 gb-headline-96cf02dc">Diskon 60%</p>
                                                                        </div>
                                                                        <p class="gb-headline gb-headline-f6a28754 gb-headline-text gb-headline-1d605367">Rp 550.000</p>
                                                                    </div>
                                                                    <a class="gb-button gb-button-cf611634 gb-button-text gb-button-c7e37e12 gb-button-22518348" href="https://my.dewabiz.com/cart.php?a=add&amp;pid=261&amp;billingcycle=annually" target="_blank" rel="noopener noreferrer">Order Now</a>
                                                                    <p class="gb-headline gb-headline-44cb3316 gb-headline-text gb-headline-2cfc6ab6">Rp 550.000 pertahun ketika diperpanjang</p>
                                                                </div>
                                                                <div class="gb-container gb-container-b3aaa652">
                                                                    <div class="gb-container gb-container-e0398516">
                                                                        <p class="gb-headline gb-headline-029e44f2 gb-headline-text">Fitur Unggulan</p>
                                                                        <div class="gb-container gb-container-805b93f2">
                                                                            <div class="gb-container gb-container-9c3020a6">
                                                                                <p class="gb-headline gb-headline-8e487948 gb-headline-06746a0b">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Dashboard</span>
                                                                                </p>
                                                                                {{-- <span class="gb-button gb-button-9e5b0966 gb-button-4b60495c tooltip" data-tooltip="Tidak ada limitasi website"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span> --}}
                                                                            </div>
                                                                            <div class="gb-container gb-container-ebdcaaa6">
                                                                                <p class="gb-headline gb-headline-f9153486 gb-headline-06746a0b">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Claim</span>
                                                                                </p>
                                                                                {{-- <span class="gb-button gb-button-7cb7eca0 gb-button-4b60495c tooltip" data-tooltip="Gratis domain .xyz, .web.id, .or.id, .ac.id, .sch.id, .biz.id, .my.id, .ponpes.id"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span> --}}
                                                                            </div>
                                                                            <p class="gb-headline gb-headline-a4647b8c gb-headline-e5c6fdb2">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Promo</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-a61f7ccf gb-headline-e44cba63">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Point</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-ccad2e6c gb-headline-41d926d5">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">5 Stores</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-c605088c gb-headline-7b50d458">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">5 Users</span>
                                                                            </p>
                                                                        </div>
                                                                        {{-- <p class="gb-headline gb-headline-dd79750a gb-headline-text gb-headline-fce985dd">Fitur Keamanan</p>
                                                                        <div class="gb-container gb-container-773d2805">
                                                                            <div class="gb-container gb-container-f6883ef3">
                                                                                <p class="gb-headline gb-headline-85060d04 gb-headline-a129d520">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Proteksi DDoS <strong><strong>Canggih</strong></strong></span>
                                                                                </p>
                                                                                <span class="gb-button gb-button-28c7ab48 tooltip" data-tooltip="Gratis Proteksi DDOS Attack"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                            </div>
                                                                            <p class="gb-headline gb-headline-77748c6f">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Web Application</strong> Firewall</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-809be93d">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Nameserver Dilindungi Cloudflare</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-6f3728b2">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Pemindai <strong>Malware</strong></span>
                                                                            </p>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gb-grid-column gb-grid-column-c95333fb">
                                                        <div class="gb-container gb-container-c95333fb shadow">
                                                            <div style="background-color: rgb(249 115 22 / var(--tw-bg-opacity));" class="gb-container bg-orange-500 gb-container-512b51b0">
                                                                <h3 class="gb-headline gb-headline-acf0f0fc gb-headline-text gb-headline-5624a144">Business Pro</h3>
                                                                <h3 class="gb-headline gb-headline-449645de gb-headline-text gb-headline-31a25ca3">CLP Website</h3>
                                                            </div>
                                                            <div class="gb-container gb-container-feb67a31">
                                                                {{-- <div class="gb-grid-wrapper gb-grid-wrapper-f8d57267">
                                                                    <div class="gb-grid-column gb-grid-column-0668a039">
                                                                        <div class="gb-container gb-container-0668a039">
                                                                            <h6 class="gb-headline gb-headline-2c1025b2 gb-headline-text">RAM</h6>
                                                                            <h6 class="gb-headline gb-headline-e09fa01d gb-headline-text gb-headline-c59df076 gb-headline-c5914076">1 GB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="gb-grid-column gb-grid-column-879d2fcf">
                                                                        <div class="gb-container gb-container-879d2fcf">
                                                                            <h6 class="gb-headline gb-headline-c63d089e gb-headline-text">CPU</h6>
                                                                            <h6 class="gb-headline gb-headline-a49d46d5 gb-headline-text gb-headline-73dff66e gb-headline-73c2f66e">1 Core</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="gb-grid-column gb-grid-column-22695e59">
                                                                        <div class="gb-container gb-container-22695e59">
                                                                            <h6 class="gb-headline gb-headline-480cf687 gb-headline-text">Storage</h6>
                                                                            <h6 class="gb-headline gb-headline-45b43935 gb-headline-text gb-headline-f5dfd9e4 gb-headline-f5acd9e4">Unlimited</h6>
                                                                        </div>
                                                                    </div>
                                                                </div> --}}
                                                                <div class="gb-container gb-container-e2d6cab4">
                                                                    <div class="gb-container gb-container-f9fcf455">
                                                                        <div class="gb-container gb-container-67df1fb7">
                                                                            <p class="gb-headline gb-headline-b6e867d0 gb-headline-text coret">Rp 1.500.000</p>
                                                                            <p class="gb-headline gb-headline-239efdf8 gb-headline-text gb-headline-8b6a15a8 gb-headline-96cf02dc">Diskon 60%</p>
                                                                        </div>
                                                                        <p class="gb-headline gb-headline-f6a28754 gb-headline-text gb-headline-1d605367">Rp 600.000</p>
                                                                    </div>
                                                                    <a class="gb-button gb-button-cf611634 gb-button-text gb-button-c7e37e12 gb-button-22518348" href="https://my.dewabiz.com/cart.php?a=add&amp;pid=261&amp;billingcycle=annually" target="_blank" rel="noopener noreferrer">Order Now</a>
                                                                    <p class="gb-headline gb-headline-44cb3316 gb-headline-text gb-headline-2cfc6ab6">Rp 700.000 pertahun ketika diperpanjang</p>
                                                                </div>
                                                                <div class="gb-container gb-container-b3aaa652">
                                                                    <div class="gb-container gb-container-e0398516">
                                                                        <p class="gb-headline gb-headline-029e44f2 gb-headline-text">Fitur Unggulan</p>
                                                                        <div class="gb-container gb-container-805b93f2">
                                                                            <div class="gb-container gb-container-9c3020a6">
                                                                                <p class="gb-headline gb-headline-8e487948 gb-headline-06746a0b">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Dashboard</span>
                                                                                </p>
                                                                                {{-- <span class="gb-button gb-button-9e5b0966 gb-button-4b60495c tooltip" data-tooltip="Tidak ada limitasi website"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span> --}}
                                                                            </div>
                                                                            <div class="gb-container gb-container-ebdcaaa6">
                                                                                <p class="gb-headline gb-headline-f9153486 gb-headline-06746a0b">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Claim</span>
                                                                                </p>
                                                                                {{-- <span class="gb-button gb-button-7cb7eca0 gb-button-4b60495c tooltip" data-tooltip="Gratis domain .xyz, .web.id, .or.id, .ac.id, .sch.id, .biz.id, .my.id, .ponpes.id"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span> --}}
                                                                            </div>
                                                                            <p class="gb-headline gb-headline-a4647b8c gb-headline-e5c6fdb2">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Promo</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-a61f7ccf gb-headline-e44cba63">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Point</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-ccad2e6c gb-headline-41d926d5">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">10 Stores</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-c605088c gb-headline-7b50d458">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">10 Users</span>
                                                                            </p>
                                                                        </div>
                                                                        {{-- <p class="gb-headline gb-headline-dd79750a gb-headline-text gb-headline-fce985dd">Fitur Keamanan</p>
                                                                        <div class="gb-container gb-container-773d2805">
                                                                            <div class="gb-container gb-container-f6883ef3">
                                                                                <p class="gb-headline gb-headline-85060d04 gb-headline-a129d520">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Proteksi DDoS <strong><strong>Canggih</strong></strong></span>
                                                                                </p>
                                                                                <span class="gb-button gb-button-28c7ab48 tooltip" data-tooltip="Gratis Proteksi DDOS Attack"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                            </div>
                                                                            <p class="gb-headline gb-headline-77748c6f">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Web Application</strong> Firewall</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-809be93d">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Nameserver Dilindungi Cloudflare</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-6f3728b2">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Pemindai <strong>Malware</strong></span>
                                                                            </p>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gb-grid-column gb-grid-column-c95333fb">
                                                        <div class="gb-container gb-container-c95333fb shadow">
                                                            <div class="gb-container gb-container-512b51b0">
                                                                <h3 class="gb-headline gb-headline-acf0f0fc gb-headline-text gb-headline-5624a144">Professional Pro</h3>
                                                                <h3 class="gb-headline gb-headline-449645de gb-headline-text gb-headline-31a25ca3">CLP Website</h3>
                                                            </div>
                                                            <div class="gb-container gb-container-feb67a31">
                                                                {{-- <div class="gb-grid-wrapper gb-grid-wrapper-f8d57267">
                                                                    <div class="gb-grid-column gb-grid-column-0668a039">
                                                                        <div class="gb-container gb-container-0668a039">
                                                                            <h6 class="gb-headline gb-headline-2c1025b2 gb-headline-text">RAM</h6>
                                                                            <h6 class="gb-headline gb-headline-e09fa01d gb-headline-text gb-headline-c59df076 gb-headline-c5914076">1 GB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="gb-grid-column gb-grid-column-879d2fcf">
                                                                        <div class="gb-container gb-container-879d2fcf">
                                                                            <h6 class="gb-headline gb-headline-c63d089e gb-headline-text">CPU</h6>
                                                                            <h6 class="gb-headline gb-headline-a49d46d5 gb-headline-text gb-headline-73dff66e gb-headline-73c2f66e">1 Core</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="gb-grid-column gb-grid-column-22695e59">
                                                                        <div class="gb-container gb-container-22695e59">
                                                                            <h6 class="gb-headline gb-headline-480cf687 gb-headline-text">Storage</h6>
                                                                            <h6 class="gb-headline gb-headline-45b43935 gb-headline-text gb-headline-f5dfd9e4 gb-headline-f5acd9e4">Unlimited</h6>
                                                                        </div>
                                                                    </div>
                                                                </div> --}}
                                                                <div class="gb-container gb-container-e2d6cab4">
                                                                    <div class="gb-container gb-container-f9fcf455">
                                                                        <div class="gb-container gb-container-67df1fb7">
                                                                            <p class="gb-headline gb-headline-b6e867d0 gb-headline-text coret">Rp 2.000.000</p>
                                                                            <p class="gb-headline gb-headline-239efdf8 gb-headline-text gb-headline-8b6a15a8 gb-headline-96cf02dc">Diskon 60%</p>
                                                                        </div>
                                                                        <p class="gb-headline gb-headline-f6a28754 gb-headline-text gb-headline-1d605367">Rp 800.000</p>
                                                                    </div>
                                                                    <a class="gb-button gb-button-cf611634 gb-button-text gb-button-c7e37e12 gb-button-22518348" href="https://my.dewabiz.com/cart.php?a=add&amp;pid=261&amp;billingcycle=annually" target="_blank" rel="noopener noreferrer">Order Now</a>
                                                                    <p class="gb-headline gb-headline-44cb3316 gb-headline-text gb-headline-2cfc6ab6">Rp 900.000 pertahun ketika diperpanjang</p>
                                                                </div>
                                                                <div class="gb-container gb-container-b3aaa652">
                                                                    <div class="gb-container gb-container-e0398516">
                                                                        <p class="gb-headline gb-headline-029e44f2 gb-headline-text">Fitur Unggulan</p>
                                                                        <div class="gb-container gb-container-805b93f2">
                                                                            <div class="gb-container gb-container-9c3020a6">
                                                                                <p class="gb-headline gb-headline-8e487948 gb-headline-06746a0b">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Dashboard</span>
                                                                                </p>
                                                                                {{-- <span class="gb-button gb-button-9e5b0966 gb-button-4b60495c tooltip" data-tooltip="Tidak ada limitasi website"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span> --}}
                                                                            </div>
                                                                            <div class="gb-container gb-container-ebdcaaa6">
                                                                                <p class="gb-headline gb-headline-f9153486 gb-headline-06746a0b">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Claim</span>
                                                                                </p>
                                                                                {{-- <span class="gb-button gb-button-7cb7eca0 gb-button-4b60495c tooltip" data-tooltip="Gratis domain .xyz, .web.id, .or.id, .ac.id, .sch.id, .biz.id, .my.id, .ponpes.id"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span> --}}
                                                                            </div>
                                                                            <p class="gb-headline gb-headline-a4647b8c gb-headline-e5c6fdb2">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Promo</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-a61f7ccf gb-headline-e44cba63">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Point</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-ccad2e6c gb-headline-41d926d5">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">20 Stores</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-c605088c gb-headline-7b50d458">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">20 Users</span>
                                                                            </p>
                                                                        </div>
                                                                        {{-- <p class="gb-headline gb-headline-dd79750a gb-headline-text gb-headline-fce985dd">Fitur Keamanan</p>
                                                                        <div class="gb-container gb-container-773d2805">
                                                                            <div class="gb-container gb-container-f6883ef3">
                                                                                <p class="gb-headline gb-headline-85060d04 gb-headline-a129d520">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Proteksi DDoS <strong><strong>Canggih</strong></strong></span>
                                                                                </p>
                                                                                <span class="gb-button gb-button-28c7ab48 tooltip" data-tooltip="Gratis Proteksi DDOS Attack"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                            </div>
                                                                            <p class="gb-headline gb-headline-77748c6f">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Web Application</strong> Firewall</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-809be93d">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Nameserver Dilindungi Cloudflare</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-6f3728b2">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Pemindai <strong>Malware</strong></span>
                                                                            </p>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="gb-container gb-container-e1141941 gb-tabs__item">
                                                <div class="gb-grid-wrapper gb-grid-wrapper-b154268f">
                                                    <div class="gb-grid-column gb-grid-column-82b4182c">
                                                        <div class="gb-container gb-container-82b4182c shadow">
                                                            <div class="gb-container gb-container-2173b935">
                                                                <h3 class="gb-headline gb-headline-11698add gb-headline-text gb-headline-5624a144">Marketer Pro</h3>
                                                                <h3 class="gb-headline gb-headline-9fc2d4f8 gb-headline-text gb-headline-31a25ca3">Cloud Hosting</h3>
                                                            </div>
                                                            <div class="gb-container gb-container-bbc5bb4d">
                                                                <div class="gb-grid-wrapper gb-grid-wrapper-6b8c209a">
                                                                    <div class="gb-grid-column gb-grid-column-23300597">
                                                                        <div class="gb-container gb-container-23300597">
                                                                            <h6 class="gb-headline gb-headline-75b6e001 gb-headline-text">RAM</h6>
                                                                            <h6 class="gb-headline gb-headline-38b2821f gb-headline-text gb-headline-c59df076 gb-headline-c5914076">1 GB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="gb-grid-column gb-grid-column-f1a17d34">
                                                                        <div class="gb-container gb-container-f1a17d34">
                                                                            <h6 class="gb-headline gb-headline-8c50dcb1 gb-headline-text">CPU</h6>
                                                                            <h6 class="gb-headline gb-headline-4a66b6a2 gb-headline-text gb-headline-73dff66e gb-headline-73c2f66e">1 Core</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="gb-grid-column gb-grid-column-e7761b97">
                                                                        <div class="gb-container gb-container-e7761b97">
                                                                            <h6 class="gb-headline gb-headline-996bb759 gb-headline-text">Storage</h6>
                                                                            <h6 class="gb-headline gb-headline-dbe0f237 gb-headline-text gb-headline-f5dfd9e4 gb-headline-f5acd9e4">Unlimited</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="gb-container gb-container-7d48e569 dashed-border ">
                                                                    <div class="gb-container gb-container-dbb917ee">
                                                                        <div class="gb-container gb-container-d1826e3e">
                                                                            <p class="gb-headline gb-headline-6e7e0eb9 gb-headline-text coret">Rp 1.716.666</p>
                                                                            <p class="gb-headline gb-headline-69e56fc8 gb-headline-text gb-headline-8b6a15a8 gb-headline-96cf02dc">Diskon 40%</p>
                                                                        </div>
                                                                        <p class="gb-headline gb-headline-7697fac2 gb-headline-text gb-headline-1d605367">Rp 1.030.000</p>
                                                                    </div>
                                                                    <a class="gb-button gb-button-90ed4a19 gb-button-text gb-button-c7e37e12 gb-button-22518348" href="https://my.dewabiz.com/cart.php?a=add&amp;pid=261&amp;billingcycle=biennially" target="_blank" rel="noopener noreferrer">Order Now</a>
                                                                    <p class="gb-headline gb-headline-2535e1d1 gb-headline-text gb-headline-2cfc6ab6">Rp 1.030.000 per 2 tahun ketika diperpanjang</p>
                                                                </div>
                                                                <div class="gb-container gb-container-eba96f8e">
                                                                    <div class="gb-container gb-container-bcbfc24c">
                                                                        <p class="gb-headline gb-headline-00609fcc gb-headline-text">Fitur Unggulan</p>
                                                                        <div class="gb-container gb-container-1d685c7b">
                                                                            <div class="gb-container gb-container-06447e39">
                                                                                <p class="gb-headline gb-headline-c0216c5e gb-headline-06746a0b">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Unlimited</strong>Website</span>
                                                                                </p>
                                                                                <span class="gb-button gb-button-21317186 gb-button-4b60495c tooltip" data-tooltip="Maksimal Host 5 Website"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                            </div>
                                                                            <div class="gb-container gb-container-ec784ac4">
                                                                                <p class="gb-headline gb-headline-1e507c82 gb-headline-06746a0b">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Gratis Domain</span>
                                                                                </p>
                                                                                <span class="gb-button gb-button-bcc74744 gb-button-4b60495c tooltip" data-tooltip="Gratis domain .xyz, .web.id, .or.id, .ac.id, .sch.id, .biz.id, .my.id, .ponpes.id"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                            </div>
                                                                            <p class="gb-headline gb-headline-f34dc8a6 gb-headline-e5c6fdb2">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Performa <strong>Standar</strong></span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-de5c56bd gb-headline-e44cba63">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Unlimited</strong> Nvme Storage</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-d325517d gb-headline-41d926d5">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Backup <strong>Mingguan</strong></span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-a42f7292 gb-headline-7b50d458">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">SSL Gratis <strong>Unlimited</strong></span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-39ff6f27 gb-headline-ee9d1f38">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>250.000 Inodes</strong></span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-526c5600 gb-headline-04cae420">
                                                                                <span class="gb-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewbox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Bantuan</strong> Prioritas</span>
                                                                            </p>
                                                                        </div>
                                                                        <p class="gb-headline gb-headline-c1c8f46e gb-headline-text gb-headline-fce985dd">Fitur Keamanan</p>
                                                                        <div class="gb-container gb-container-188f453a">
                                                                            <div class="gb-container gb-container-f69d3839">
                                                                                <p class="gb-headline gb-headline-5181d19a gb-headline-a129d520">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Proteksi DDoS <strong><strong>Canggih</strong></strong></span>
                                                                                </p>
                                                                                <span class="gb-button gb-button-d12bc8e5 tooltip" data-tooltip="Gratis Proteksi DDOS Attack"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                            </div>
                                                                            <p class="gb-headline gb-headline-c6e8d662">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Web Application</strong> Firewall</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-e15c919b">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Nameserver Dilindungi Cloudflare</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-45fbe5f4">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Pemindai <strong>Malware</strong></span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gb-grid-column gb-grid-column-168cfcbd">
                                                        <div class="gb-container gb-container-168cfcbd shadow">
                                                            <div class="gb-container gb-container-c7a0a37b">
                                                                <h3 class="gb-headline gb-headline-1b072c8a gb-headline-text gb-headline-5624a144">Business Pro</h3>
                                                                <h3 class="gb-headline gb-headline-d6fe6296 gb-headline-text gb-headline-31a25ca3">Cloud Hosting</h3>
                                                            </div>
                                                            <div class="gb-container gb-container-1d96c7ba">
                                                                <div class="gb-grid-wrapper gb-grid-wrapper-dada823a">
                                                                    <div class="gb-grid-column gb-grid-column-3f7089fd">
                                                                        <div class="gb-container gb-container-3f7089fd">
                                                                            <h6 class="gb-headline gb-headline-8170018d gb-headline-text">RAM</h6>
                                                                            <h6 class="gb-headline gb-headline-69c2a0b5 gb-headline-text gb-headline-c59df076 gb-headline-c5914076">2 GB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="gb-grid-column gb-grid-column-af1816ec">
                                                                        <div class="gb-container gb-container-af1816ec">
                                                                            <h6 class="gb-headline gb-headline-3e08b9b4 gb-headline-text">CPU</h6>
                                                                            <h6 class="gb-headline gb-headline-7120a5f7 gb-headline-text gb-headline-73dff66e gb-headline-73c2f66e">2 Core</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="gb-grid-column gb-grid-column-91f01c3b">
                                                                        <div class="gb-container gb-container-91f01c3b">
                                                                            <h6 class="gb-headline gb-headline-1918b2c8 gb-headline-text">Storage</h6>
                                                                            <h6 class="gb-headline gb-headline-5c367617 gb-headline-text gb-headline-f5dfd9e4 gb-headline-f5acd9e4">Unlimited</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="gb-container gb-container-4dbce997 dashed-border ">
                                                                    <div class="gb-container gb-container-08f5a683">
                                                                        <div class="gb-container gb-container-2c0f54dc">
                                                                            <p class="gb-headline gb-headline-7fabf4e2 gb-headline-text coret">Rp 2.033.333</p>
                                                                            <p class="gb-headline gb-headline-02077717 gb-headline-text gb-headline-8b6a15a8 gb-headline-96cf02dc">Diskon 40%</p>
                                                                        </div>
                                                                        <p class="gb-headline gb-headline-23916580 gb-headline-text gb-headline-1d605367">Rp 1.220.000</p>
                                                                    </div>
                                                                    <a class="gb-button gb-button-d64f2211 gb-button-text gb-button-3384334a gb-button-22518348" href="https://my.dewabiz.com/cart.php?a=add&amp;pid=262&amp;billingcycle=biennially" target="_blank" rel="noopener noreferrer">Order Now</a>
                                                                    <p class="gb-headline gb-headline-c774ed1f gb-headline-text gb-headline-2cfc6ab6">Rp 1.220.000 per 2 tahun ketika diperpanjang</p>
                                                                </div>
                                                                <div class="gb-container gb-container-9406bd86">
                                                                    <div class="gb-container gb-container-19c7d8c2">
                                                                        <div class="gb-container gb-container-ac79bbd3">
                                                                            <div class="gb-container gb-container-98c1ba9f">
                                                                                <div class="gb-container gb-container-1a652fa8">
                                                                                    <p class="gb-headline gb-headline-4e5bcfaf gb-headline-text">Fitur Unggulan</p>
                                                                                    <div class="gb-container gb-container-58f4b70d">
                                                                                        <div class="gb-container gb-container-48d175e5">
                                                                                            <p class="gb-headline gb-headline-3779d118 gb-headline-06746a0b">
                                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Unlimited</strong>Website</span>
                                                                                            </p>
                                                                                            <span class="gb-button gb-button-e409f796 gb-button-4b60495c tooltip" data-tooltip="Tidak ada limitasi website"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                                        </div>
                                                                                        <div class="gb-container gb-container-74993a90">
                                                                                            <p class="gb-headline gb-headline-9cb00be6 gb-headline-06746a0b">
                                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Gratis Domain</span>
                                                                                            </p>
                                                                                            <span class="gb-button gb-button-423fdc1e gb-button-4b60495c tooltip" data-tooltip="Gratis domain .xyz, .web.id, .or.id, .ac.id, .sch.id, .biz.id, .my.id, .ponpes.id"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                                        </div>
                                                                                        <p class="gb-headline gb-headline-6b4f72f8 gb-headline-e5c6fdb2">
                                                                                            <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Performa <strong>Medium</strong></span>
                                                                                        </p>
                                                                                        <p class="gb-headline gb-headline-844ceaae gb-headline-e44cba63">
                                                                                            <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Unlimited</strong> Nvme Storage</span>
                                                                                        </p>
                                                                                        <p class="gb-headline gb-headline-3c6d063b gb-headline-41d926d5">
                                                                                            <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Backup <strong>Mingguan</strong></span>
                                                                                        </p>
                                                                                        <p class="gb-headline gb-headline-92662cce gb-headline-7b50d458">
                                                                                            <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">SSL Gratis <strong>Unlimited</strong></span>
                                                                                        </p>
                                                                                        <p class="gb-headline gb-headline-b98fa032 gb-headline-ee9d1f38">
                                                                                            <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>250.000 Inodes</strong></span>
                                                                                        </p>
                                                                                        <p class="gb-headline gb-headline-6b379cbd gb-headline-04cae420">
                                                                                            <span class="gb-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewbox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Bantuan</strong> Prioritas</span>
                                                                                        </p>
                                                                                    </div>
                                                                                    <p class="gb-headline gb-headline-7e07e3f8 gb-headline-text gb-headline-fce985dd">Fitur Keamanan</p>
                                                                                    <div class="gb-container gb-container-3268113d">
                                                                                        <div class="gb-container gb-container-d7a8596f">
                                                                                            <p class="gb-headline gb-headline-a6178d34 gb-headline-a129d520">
                                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Proteksi DDoS <strong><strong>Canggih</strong></strong></span>
                                                                                            </p>
                                                                                            <span class="gb-button gb-button-cdd8e27e tooltip" data-tooltip="Gratis Proteksi DDOS Attack"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                                        </div>
                                                                                        <p class="gb-headline gb-headline-a7120ce6">
                                                                                            <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Web Application</strong> Firewall</span>
                                                                                        </p>
                                                                                        <p class="gb-headline gb-headline-bf4f7ec4">
                                                                                            <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Nameserver Dilindungi Cloudflare</span>
                                                                                        </p>
                                                                                        <p class="gb-headline gb-headline-d1ed3960">
                                                                                            <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Pemindai <strong>Malware</strong></span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gb-grid-column gb-grid-column-50497f2f">
                                                        <div class="gb-container gb-container-50497f2f shadow">
                                                            <div class="gb-container gb-container-2cb5abb9">
                                                                <h3 class="gb-headline gb-headline-767213c1 gb-headline-text gb-headline-5624a144">Enterprise Pro</h3>
                                                                <h3 class="gb-headline gb-headline-34dac923 gb-headline-text gb-headline-31a25ca3">Cloud Hosting</h3>
                                                            </div>
                                                            <div class="gb-container gb-container-085ebebf">
                                                                <div class="gb-grid-wrapper gb-grid-wrapper-270fc420">
                                                                    <div class="gb-grid-column gb-grid-column-cc57bc16">
                                                                        <div class="gb-container gb-container-cc57bc16">
                                                                            <h6 class="gb-headline gb-headline-cf3e8318 gb-headline-text">RAM</h6>
                                                                            <h6 class="gb-headline gb-headline-58f520a4 gb-headline-text gb-headline-c59df076 gb-headline-c5914076">3 GB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="gb-grid-column gb-grid-column-f1c0fa71">
                                                                        <div class="gb-container gb-container-f1c0fa71">
                                                                            <h6 class="gb-headline gb-headline-ea8530b7 gb-headline-text">CPU</h6>
                                                                            <h6 class="gb-headline gb-headline-245cd16a gb-headline-text gb-headline-73dff66e gb-headline-73c2f66e">2 Core</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="gb-grid-column gb-grid-column-bbd0300f">
                                                                        <div class="gb-container gb-container-bbd0300f">
                                                                            <h6 class="gb-headline gb-headline-baea20e5 gb-headline-text">Storage</h6>
                                                                            <h6 class="gb-headline gb-headline-30827f38 gb-headline-text gb-headline-f5dfd9e4 gb-headline-f5acd9e4">Unlimited</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="gb-container gb-container-a1672b17 dashed-border ">
                                                                    <div class="gb-container gb-container-5855f8b5">
                                                                        <div class="gb-container gb-container-c3ee27a2">
                                                                            <p class="gb-headline gb-headline-8c439a83 gb-headline-text coret">Rp 3.483.333</p>
                                                                            <p class="gb-headline gb-headline-759415af gb-headline-text gb-headline-8b6a15a8 gb-headline-96cf02dc">Diskon 40%</p>
                                                                        </div>
                                                                        <p class="gb-headline gb-headline-539bd95c gb-headline-text gb-headline-1d605367">Rp 2.090.000</p>
                                                                    </div>
                                                                    <a class="gb-button gb-button-fa935999 gb-button-text gb-button-c7e37e12 gb-button-22518348" href="https://my.dewabiz.com/cart.php?a=add&amp;pid=298&amp;billingcycle=biennially" target="_blank" rel="noopener noreferrer">Order Now</a>
                                                                    <p class="gb-headline gb-headline-a8d0e469 gb-headline-text gb-headline-2cfc6ab6">Rp 2.090.000 per 2 tahun ketika diperpanjang</p>
                                                                </div>
                                                                <div class="gb-container gb-container-84a62c54">
                                                                    <div class="gb-container gb-container-3eb33e24">
                                                                        <div class="gb-container gb-container-35a905d7">
                                                                            <div class="gb-container gb-container-ac5cd8c4">
                                                                                <div class="gb-container gb-container-1192234b">
                                                                                    <p class="gb-headline gb-headline-9dfc50f0 gb-headline-text">Fitur Unggulan</p>
                                                                                    <div class="gb-container gb-container-234941ac">
                                                                                        <div class="gb-container gb-container-3501a259">
                                                                                            <p class="gb-headline gb-headline-cc00934a gb-headline-06746a0b">
                                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Unlimited</strong>Website</span>
                                                                                            </p>
                                                                                            <span class="gb-button gb-button-eaca464f gb-button-4b60495c tooltip" data-tooltip="Tidak ada limitasi website"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                                        </div>
                                                                                        <div class="gb-container gb-container-b4839cf9">
                                                                                            <p class="gb-headline gb-headline-3eaae603 gb-headline-06746a0b">
                                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Gratis Domain</span>
                                                                                            </p>
                                                                                            <span class="gb-button gb-button-8d3e79a7 gb-button-4b60495c tooltip" data-tooltip="Gratis domain .xyz, .web.id, .or.id, .ac.id, .sch.id, .biz.id, .my.id, .ponpes.id"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                                        </div>
                                                                                        <p class="gb-headline gb-headline-92d3dd19 gb-headline-e5c6fdb2">
                                                                                            <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Performa <strong>Medium</strong></span>
                                                                                        </p>
                                                                                        <p class="gb-headline gb-headline-6bcd95f6 gb-headline-e44cba63">
                                                                                            <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Unlimited</strong> Nvme Storage</span>
                                                                                        </p>
                                                                                        <p class="gb-headline gb-headline-b60eff9b gb-headline-41d926d5">
                                                                                            <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Backup <strong>Mingguan</strong></span>
                                                                                        </p>
                                                                                        <p class="gb-headline gb-headline-500fae43 gb-headline-7b50d458">
                                                                                            <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">SSL Gratis <strong>Unlimited</strong></span>
                                                                                        </p>
                                                                                        <p class="gb-headline gb-headline-05064992 gb-headline-ee9d1f38">
                                                                                            <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>250.000 Inodes</strong></span>
                                                                                        </p>
                                                                                        <p class="gb-headline gb-headline-78b23873 gb-headline-04cae420">
                                                                                            <span class="gb-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewbox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Bantuan</strong> Prioritas</span>
                                                                                        </p>
                                                                                    </div>
                                                                                    <p class="gb-headline gb-headline-70400273 gb-headline-text gb-headline-fce985dd">Fitur Keamanan</p>
                                                                                    <div class="gb-container gb-container-418f9ab0">
                                                                                        <div class="gb-container gb-container-ab5631c7">
                                                                                            <p class="gb-headline gb-headline-d0364e93 gb-headline-a129d520">
                                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Proteksi DDoS <strong><strong>Canggih</strong></strong></span>
                                                                                            </p>
                                                                                            <span class="gb-button gb-button-1f16cb73 tooltip" data-tooltip="Gratis Proteksi DDOS Attack"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                                        </div>
                                                                                        <p class="gb-headline gb-headline-6f2a3138">
                                                                                            <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Web Application</strong> Firewall</span>
                                                                                        </p>
                                                                                        <p class="gb-headline gb-headline-15f10291">
                                                                                            <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Nameserver Dilindungi Cloudflare</span>
                                                                                        </p>
                                                                                        <p class="gb-headline gb-headline-8975f6fc">
                                                                                            <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Pemindai <strong>Malware</strong></span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gb-container gb-container-741fab27 gb-tabs__item">
                                                <div class="gb-grid-wrapper gb-grid-wrapper-c5e4d0dc">
                                                    <div class="gb-grid-column gb-grid-column-3f9bf32d">
                                                        <div class="gb-container gb-container-3f9bf32d shadow">
                                                            <div class="gb-container gb-container-6812e9ae">
                                                                <h3 class="gb-headline gb-headline-a4ca057e gb-headline-text gb-headline-5624a144">Marketer Pro</h3>
                                                                <h3 class="gb-headline gb-headline-8674d034 gb-headline-text gb-headline-31a25ca3">Cloud Hosting</h3>
                                                            </div>
                                                            <div class="gb-container gb-container-0097f231">
                                                                <div class="gb-grid-wrapper gb-grid-wrapper-6d8fc845">
                                                                    <div class="gb-grid-column gb-grid-column-a66b2165">
                                                                        <div class="gb-container gb-container-a66b2165">
                                                                            <h6 class="gb-headline gb-headline-ed6045d4 gb-headline-text">RAM</h6>
                                                                            <h6 class="gb-headline gb-headline-165616b4 gb-headline-text gb-headline-c59df076 gb-headline-c5914076">1 GB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="gb-grid-column gb-grid-column-f2141acc">
                                                                        <div class="gb-container gb-container-f2141acc">
                                                                            <h6 class="gb-headline gb-headline-5df7faf8 gb-headline-text">CPU</h6>
                                                                            <h6 class="gb-headline gb-headline-0973c07b gb-headline-text gb-headline-73dff66e gb-headline-73c2f66e">1 Core</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="gb-grid-column gb-grid-column-d37cf659">
                                                                        <div class="gb-container gb-container-d37cf659">
                                                                            <h6 class="gb-headline gb-headline-56082273 gb-headline-text">Storage</h6>
                                                                            <h6 class="gb-headline gb-headline-819b3452 gb-headline-text gb-headline-f5dfd9e4 gb-headline-f5acd9e4">Unlimited</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="gb-container gb-container-4bb8471e dashed-border ">
                                                                    <div class="gb-container gb-container-8daee99a">
                                                                        <div class="gb-container gb-container-717757f3">
                                                                            <p class="gb-headline gb-headline-68d322a9 gb-headline-text coret">Rp 5.776.000</p>
                                                                            <p class="gb-headline gb-headline-a8541914 gb-headline-text gb-headline-8b6a15a8 gb-headline-96cf02dc">Diskon 20%</p>
                                                                        </div>
                                                                        <p class="gb-headline gb-headline-5fe86008 gb-headline-text gb-headline-1d605367">Rp 1.444.000</p>
                                                                    </div>
                                                                    <a class="gb-button gb-button-a7ff1c62 gb-button-text gb-button-c7e37e12 gb-button-22518348" href="https://my.dewabiz.com/cart.php?a=add&amp;pid=298&amp;billingcycle=triennially" target="_blank" rel="noopener noreferrer">Order Now</a>
                                                                    <p class="gb-headline gb-headline-27f511ec gb-headline-text gb-headline-2cfc6ab6">Rp 1.444.000 per 3 tahun ketika diperpanjang</p>
                                                                </div>
                                                                <div class="gb-container gb-container-eaea4d76">
                                                                    <div class="gb-container gb-container-0b37d533">
                                                                        <div class="gb-container gb-container-4ba9bbed">
                                                                            <p class="gb-headline gb-headline-5bbdaff6 gb-headline-text">Fitur Unggulan</p>
                                                                            <div class="gb-container gb-container-e9084680">
                                                                                <div class="gb-container gb-container-9ee2dad1">
                                                                                    <p class="gb-headline gb-headline-14ac8b37 gb-headline-06746a0b">
                                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Unlimited</strong>Website</span>
                                                                                    </p>
                                                                                    <span class="gb-button gb-button-1b9f626d gb-button-4b60495c tooltip" data-tooltip="Maksimal Host 5 Website"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                                </div>
                                                                                <div class="gb-container gb-container-cc6ebaa4">
                                                                                    <p class="gb-headline gb-headline-6a2babc6 gb-headline-06746a0b">
                                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Gratis Domain</span>
                                                                                    </p>
                                                                                    <span class="gb-button gb-button-52db92db gb-button-4b60495c tooltip" data-tooltip="Gratis domain .xyz, .web.id, .or.id, .ac.id, .sch.id, .biz.id, .my.id, .ponpes.id"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                                </div>
                                                                                <p class="gb-headline gb-headline-72cb528c gb-headline-e5c6fdb2">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Performa <strong>Standar</strong></span>
                                                                                </p>
                                                                                <p class="gb-headline gb-headline-a6eb1f6e gb-headline-e44cba63">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Unlimited</strong> Nvme Storage</span>
                                                                                </p>
                                                                                <p class="gb-headline gb-headline-800ad004 gb-headline-41d926d5">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Backup <strong>Mingguan</strong></span>
                                                                                </p>
                                                                                <p class="gb-headline gb-headline-d518e7b2 gb-headline-7b50d458">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">SSL Gratis <strong>Unlimited</strong></span>
                                                                                </p>
                                                                                <p class="gb-headline gb-headline-a5040f2b gb-headline-ee9d1f38">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>250.000 Inodes</strong></span>
                                                                                </p>
                                                                                <p class="gb-headline gb-headline-2c0931b1 gb-headline-04cae420">
                                                                                    <span class="gb-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewbox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Bantuan</strong> Prioritas</span>
                                                                                </p>
                                                                            </div>
                                                                            <p class="gb-headline gb-headline-ce2a70e9 gb-headline-text gb-headline-fce985dd">Fitur Keamanan</p>
                                                                            <div class="gb-container gb-container-fb41efba">
                                                                                <div class="gb-container gb-container-28a3cc4a">
                                                                                    <p class="gb-headline gb-headline-93edbc65 gb-headline-a129d520">
                                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Proteksi DDoS <strong><strong>Canggih</strong></strong></span>
                                                                                    </p>
                                                                                    <span class="gb-button gb-button-7830ab76 tooltip" data-tooltip="Gratis Proteksi DDOS Attack"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                                </div>
                                                                                <p class="gb-headline gb-headline-c68c8cc3">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Web Application</strong> Firewall</span>
                                                                                </p>
                                                                                <p class="gb-headline gb-headline-acf787a2">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Nameserver Dilindungi Cloudflare</span>
                                                                                </p>
                                                                                <p class="gb-headline gb-headline-46fea2d4">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Pemindai <strong>Malware</strong></span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gb-grid-column gb-grid-column-459f7e20">
                                                        <div class="gb-container gb-container-459f7e20 shadow">
                                                            <div class="gb-container gb-container-54e04f34">
                                                                <h3 class="gb-headline gb-headline-986fb7a7 gb-headline-text gb-headline-5624a144">Business Pro</h3>
                                                                <h3 class="gb-headline gb-headline-165360dc gb-headline-text gb-headline-31a25ca3">Cloud Hosting</h3>
                                                            </div>
                                                            <div class="gb-container gb-container-54fb5c4f">
                                                                <div class="gb-grid-wrapper gb-grid-wrapper-3b3c3446">
                                                                    <div class="gb-grid-column gb-grid-column-fb168e95">
                                                                        <div class="gb-container gb-container-fb168e95">
                                                                            <h6 class="gb-headline gb-headline-d45fcbba gb-headline-text">RAM</h6>
                                                                            <h6 class="gb-headline gb-headline-54819686 gb-headline-text gb-headline-c59df076 gb-headline-c5914076">2 GB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="gb-grid-column gb-grid-column-ac4a9520">
                                                                        <div class="gb-container gb-container-ac4a9520">
                                                                            <h6 class="gb-headline gb-headline-0535e3af gb-headline-text">CPU</h6>
                                                                            <h6 class="gb-headline gb-headline-ad1fb82b gb-headline-text gb-headline-73dff66e gb-headline-73c2f66e">2 Core</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="gb-grid-column gb-grid-column-e4e2987d">
                                                                        <div class="gb-container gb-container-e4e2987d">
                                                                            <h6 class="gb-headline gb-headline-a7c002a7 gb-headline-text">Storage</h6>
                                                                            <h6 class="gb-headline gb-headline-e6d0221c gb-headline-text gb-headline-f5dfd9e4 gb-headline-f5acd9e4">Unlimited</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="gb-container gb-container-ed618a96 dashed-border ">
                                                                    <div class="gb-container gb-container-cf1c654e">
                                                                        <div class="gb-container gb-container-e2359a8f">
                                                                            <p class="gb-headline gb-headline-7ccdbe73 gb-headline-text coret">Rp 3.800.000</p>
                                                                            <p class="gb-headline gb-headline-31a5d209 gb-headline-text gb-headline-8b6a15a8 gb-headline-96cf02dc">Diskon 20%</p>
                                                                        </div>
                                                                        <p class="gb-headline gb-headline-b03818ea gb-headline-text gb-headline-1d605367">Rp 950.000</p>
                                                                    </div>
                                                                    <a class="gb-button gb-button-8cd16087 gb-button-text gb-button-3384334a gb-button-22518348" href="https://my.dewabiz.com/cart.php?a=add&amp;pid=262&amp;billingcycle=triennially" target="_blank" rel="noopener noreferrer">Order Now</a>
                                                                    <p class="gb-headline gb-headline-3a203029 gb-headline-text gb-headline-2cfc6ab6">Rp 950.000 per 3 tahun ketika diperpanjang</p>
                                                                </div>
                                                                <div class="gb-container gb-container-3d32c629">
                                                                    <div class="gb-container gb-container-ddcf2994">
                                                                        <p class="gb-headline gb-headline-37c3dd06 gb-headline-text">Fitur Unggulan</p>
                                                                        <div class="gb-container gb-container-7086b72f">
                                                                            <div class="gb-container gb-container-45a62ccf">
                                                                                <p class="gb-headline gb-headline-74e53ead gb-headline-06746a0b">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Unlimited</strong>Website</span>
                                                                                </p>
                                                                                <span class="gb-button gb-button-53b89f57 gb-button-4b60495c tooltip" data-tooltip="Tidak ada limitasi website"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                            </div>
                                                                            <div class="gb-container gb-container-47534a1d">
                                                                                <p class="gb-headline gb-headline-d0684c4d gb-headline-06746a0b">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Gratis Domain</span>
                                                                                </p>
                                                                                <span class="gb-button gb-button-fddd4592 gb-button-4b60495c tooltip" data-tooltip="Gratis domain .xyz, .web.id, .or.id, .ac.id, .sch.id, .biz.id, .my.id, .ponpes.id"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                            </div>
                                                                            <p class="gb-headline gb-headline-c2ab733a gb-headline-e5c6fdb2">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Performa <strong>Medium</strong></span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-324c8f87 gb-headline-e44cba63">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Unlimited</strong> Nvme Storage</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-7b038806 gb-headline-41d926d5">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Backup <strong>Mingguan</strong></span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-47aac725 gb-headline-7b50d458">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">SSL Gratis <strong>Unlimited</strong></span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-69caa74a gb-headline-ee9d1f38">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>250.000 Inodes</strong></span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-147a5b37 gb-headline-04cae420">
                                                                                <span class="gb-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewbox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Bantuan</strong> Prioritas</span>
                                                                            </p>
                                                                        </div>
                                                                        <p class="gb-headline gb-headline-6dc2a2b1 gb-headline-text gb-headline-fce985dd">Fitur Keamanan</p>
                                                                        <div class="gb-container gb-container-bf37fda3">
                                                                            <div class="gb-container gb-container-1a99525b">
                                                                                <p class="gb-headline gb-headline-c0384f98 gb-headline-a129d520">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Proteksi DDoS <strong><strong>Canggih</strong></strong></span>
                                                                                </p>
                                                                                <span class="gb-button gb-button-7b8fb0c1 tooltip" data-tooltip="Gratis Proteksi DDOS Attack"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                            </div>
                                                                            <p class="gb-headline gb-headline-e092cb8f">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Web Application</strong> Firewall</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-9838d159">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Nameserver Dilindungi Cloudflare</span>
                                                                            </p>
                                                                            <p class="gb-headline gb-headline-6411a10c">
                                                                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Pemindai <strong>Malware</strong></span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gb-grid-column gb-grid-column-41f98c59">
                                                        <div class="gb-container gb-container-41f98c59 shadow">
                                                            <div class="gb-container gb-container-b691a872">
                                                                <h3 class="gb-headline gb-headline-23f97290 gb-headline-text gb-headline-5624a144">Enterprise Pro</h3>
                                                                <h3 class="gb-headline gb-headline-27e77fa5 gb-headline-text gb-headline-31a25ca3">Cloud Hosting</h3>
                                                            </div>
                                                            <div class="gb-container gb-container-53c76ed9">
                                                                <div class="gb-grid-wrapper gb-grid-wrapper-d7843f33">
                                                                    <div class="gb-grid-column gb-grid-column-be92fc31">
                                                                        <div class="gb-container gb-container-be92fc31">
                                                                            <h6 class="gb-headline gb-headline-596af54c gb-headline-text">RAM</h6>
                                                                            <h6 class="gb-headline gb-headline-764ea7cd gb-headline-text gb-headline-c59df076 gb-headline-c5914076">3 GB</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="gb-grid-column gb-grid-column-51bc8aa8">
                                                                        <div class="gb-container gb-container-51bc8aa8">
                                                                            <h6 class="gb-headline gb-headline-851d7c90 gb-headline-text">CPU</h6>
                                                                            <h6 class="gb-headline gb-headline-0aaa6477 gb-headline-text gb-headline-73dff66e gb-headline-73c2f66e">2 Core</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="gb-grid-column gb-grid-column-b52a316c">
                                                                        <div class="gb-container gb-container-b52a316c">
                                                                            <h6 class="gb-headline gb-headline-b11818af gb-headline-text">Storage</h6>
                                                                            <h6 class="gb-headline gb-headline-0b973cf3 gb-headline-text gb-headline-f5dfd9e4 gb-headline-f5acd9e4">Unlimited</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="gb-container gb-container-f53314b3 dashed-border ">
                                                                    <div class="gb-container gb-container-dcf30fc1">
                                                                        <div class="gb-container gb-container-a7eeb45c">
                                                                            <p class="gb-headline gb-headline-93464183 gb-headline-text coret">Rp 12.320.000</p>
                                                                            <p class="gb-headline gb-headline-ccf85de3 gb-headline-text gb-headline-8b6a15a8 gb-headline-96cf02dc">Diskon 20%</p>
                                                                        </div>
                                                                        <p class="gb-headline gb-headline-8cbb4d3e gb-headline-text gb-headline-1d605367">Rp 3.080.000</p>
                                                                    </div>
                                                                    <a class="gb-button gb-button-c0889cb0 gb-button-text gb-button-c7e37e12 gb-button-22518348" href="https://my.dewabiz.com/cart.php?a=add&amp;pid=298&amp;billingcycle=triennially" target="_blank" rel="noopener noreferrer">Order Now</a>
                                                                    <p class="gb-headline gb-headline-e82ff503 gb-headline-text gb-headline-2cfc6ab6">Rp 3.080.000 per 3 tahun ketika diperpanjang</p>
                                                                </div>
                                                                <div class="gb-container gb-container-27847501">
                                                                    <div class="gb-container gb-container-74eb6d43">
                                                                        <div class="gb-container gb-container-4c37f004">
                                                                            <p class="gb-headline gb-headline-2ae68b59 gb-headline-text">Fitur Unggulan</p>
                                                                            <div class="gb-container gb-container-0b6eada9">
                                                                                <div class="gb-container gb-container-9bd79edd">
                                                                                    <p class="gb-headline gb-headline-f6c7d851 gb-headline-06746a0b">
                                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Unlimited</strong>Website</span>
                                                                                    </p>
                                                                                    <span class="gb-button gb-button-61e093b4 gb-button-4b60495c tooltip" data-tooltip="Tidak ada limitasi website"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                                </div>
                                                                                <div class="gb-container gb-container-b2f71214">
                                                                                    <p class="gb-headline gb-headline-8d953d2f gb-headline-06746a0b">
                                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Gratis Domain</span>
                                                                                    </p>
                                                                                    <span class="gb-button gb-button-f7e39fd6 gb-button-4b60495c tooltip" data-tooltip="Gratis domain .xyz, .web.id, .or.id, .ac.id, .sch.id, .biz.id, .my.id, .ponpes.id"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                                </div>
                                                                                <p class="gb-headline gb-headline-f7d01ef6 gb-headline-e5c6fdb2">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Performa <strong>Medium</strong></span>
                                                                                </p>
                                                                                <p class="gb-headline gb-headline-8c33e815 gb-headline-e44cba63">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Unlimited</strong> Nvme Storage</span>
                                                                                </p>
                                                                                <p class="gb-headline gb-headline-26c322d8 gb-headline-41d926d5">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Backup <strong>Mingguan</strong></span>
                                                                                </p>
                                                                                <p class="gb-headline gb-headline-2a600773 gb-headline-7b50d458">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">SSL Gratis <strong>Unlimited</strong></span>
                                                                                </p>
                                                                                <p class="gb-headline gb-headline-6ddc3fa6 gb-headline-ee9d1f38">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>250.000 Inodes</strong></span>
                                                                                </p>
                                                                                <p class="gb-headline gb-headline-dfe3f6b4 gb-headline-04cae420">
                                                                                    <span class="gb-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewbox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Bantuan</strong> Prioritas</span>
                                                                                </p>
                                                                            </div>
                                                                            <p class="gb-headline gb-headline-40a91ba6 gb-headline-text gb-headline-fce985dd">Fitur Keamanan</p>
                                                                            <div class="gb-container gb-container-1f1ba4db">
                                                                                <div class="gb-container gb-container-b8dcfbf0">
                                                                                    <p class="gb-headline gb-headline-a9295733 gb-headline-a129d520">
                                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Proteksi DDoS <strong><strong>Canggih</strong></strong></span>
                                                                                    </p>
                                                                                    <span class="gb-button gb-button-0aa02668 tooltip" data-tooltip="Gratis Proteksi DDOS Attack"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path><path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"></path></svg></span></span>
                                                                                </div>
                                                                                <p class="gb-headline gb-headline-516f0ee4">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text"><strong>Web Application</strong> Firewall</span>
                                                                                </p>
                                                                                <p class="gb-headline gb-headline-896723c5">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Nameserver Dilindungi Cloudflare</span>
                                                                                </p>
                                                                                <p class="gb-headline gb-headline-c91d4633">
                                                                                    <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"></path></svg></span><span class="gb-headline-text">Pemindai <strong>Malware</strong></span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gb-container gb-container-3bd3ff22" id="price-box">
                                <div class="gb-container gb-container-4488780d">
                                    <div class="gb-grid-wrapper gb-grid-wrapper-bafce364 owl-carousel price_slider owl-loaded owl-drag">
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1680px;">
                                                {{-- <div class="owl-item active" style="width: 400px; margin-right: 20px;">
                                                    <div class="gb-grid-column gb-grid-column-d17bc503">
                                                        <div class="gb-container gb-container-d17bc503" id="featured-items">
                                                            <div class="gb-container gb-container-e9d37fac">
                                                                <h2 class="gb-headline gb-headline-f38993bd gb-headline-text">50% Off</h2>
                                                                <h2 class="gb-headline gb-headline-b34a1a5c gb-headline-text">VPS Windows!</h2>
                                                                <h2 class="gb-headline gb-headline-2e39bbed gb-headline-text">Mulai <strong><em>Rp 85.000</em></strong></h2>
                                                            </div>
                                                            <p class="gb-headline gb-headline-cb255f81 gb-headline-text">
                                                                Mulai sesuatu yang besar dan hebat dari sini dan tumbuh bersama.Miliki website impian Anda dengan teknologi canggih yang telah kami sediakan
                                                            </p>
                                                            <a class="gb-button gb-button-f551c492 gb-button-text gb-button-586147d1" href="https://dewabiz.com/rdp-murah/#order">Lihat Detail</a><figure class="gb-block-image gb-block-image-74a39529"><img loading="lazy" decoding="async" width="361" height="303" class="gb-image gb-image-74a39529" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/dewa-icon.png" alt="" title="dewa-icon" srcset="https://dewabiz.com/wp-content/uploads/2023/08/dewa-icon.png 361w, https://dewabiz.com/wp-content/uploads/2023/08/dewa-icon-300x252.png 300w, https://dewabiz.com/wp-content/uploads/2023/08/dewa-icon-24x20.png 24w, https://dewabiz.com/wp-content/uploads/2023/08/dewa-icon-36x30.png 36w, https://dewabiz.com/wp-content/uploads/2023/08/dewa-icon-48x40.png 48w" sizes="(max-width: 361px) 100vw, 361px"></figure>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <div class="owl-item active" style="width: 400px; margin-right: 20px;">
                                                    <div class="gb-grid-column gb-grid-column-8ddaae3c">
                                                        <div class="gb-container gb-container-8ddaae3c" id="items">
                                                            <div class="gb-container gb-container-2e08dd44">
                                                                {{-- <figure class="gb-block-image gb-block-image-4fa9389c"><img loading="lazy" decoding="async" width="64" height="64" class="gb-image gb-image-4fa9389c" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/jettempur.svg" alt="" title="jettempur"></figure> --}}
                                                                <h2 class="gb-headline gb-headline-06129ccf gb-headline-text">Super Website</h2>
                                                            </div>
                                                            <p class="gb-headline gb-headline-6b3b8058 gb-headline-text">Fitur lebih lengkap</p>
                                                            <div class="gb-container gb-container-e8a20591" id="items">
                                                                <div class="gb-container gb-container-e96538c5">
                                                                    <p class="gb-headline gb-headline-bd4dc22e">
                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg></span><span class="gb-headline-text"><strong>Flexible, Easy</strong> to Use.</span>
                                                                    </p>
                                                                    <p class="gb-headline gb-headline-bf9067b6">
                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg></span><span class="gb-headline-text"><strong>Product</strong> Sell</span>
                                                                    </p>
                                                                    <p class="gb-headline gb-headline-11da4ff8">
                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg></span><span class="gb-headline-text"><strong>Unlimited</strong> Database</span>
                                                                    </p>
                                                                    <p class="gb-headline gb-headline-c5054135">
                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg></span><span class="gb-headline-text"><strong>Marketer Pro</strong> Included</span>
                                                                    </p>
                                                                    {{-- <p class="gb-headline gb-headline-6ee5b6cc">
                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg></span><span class="gb-headline-text"><strong>cPanel</strong>Control Panel</span>
                                                                    </p> --}}
                                                                    <p class="gb-headline gb-headline-ae5b0d0d">
                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg></span><span class="gb-headline-text"><strong>30-Day</strong> Money-Back Guarantee</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="gb-container gb-container-b503fb22 dashed-border pricing">
                                                                <div class="gb-container gb-container-356fa213">
                                                                    <h3 class="gb-headline gb-headline-7c5b873c gb-headline-text">Rp. 55.000</h3>
                                                                    <p class="gb-headline gb-headline-f0582343 gb-headline-text">/bulan</p>
                                                                </div>
                                                                <div class="gb-container gb-container-0232a2dd">
                                                                    <a class="gb-button gb-button-3a5f64e3 gb-button-text gb-button-127ab6b4" href="https://dewabiz.com/hosting-super/">Lihat Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item active" style="width: 400px; margin-right: 20px;">
                                                    <div class="gb-grid-column gb-grid-column-8ddaae3c">
                                                        <div class="gb-container gb-container-8ddaae3c" id="items">
                                                            <div class="gb-container gb-container-2e08dd44">
                                                                {{-- <figure class="gb-block-image gb-block-image-4fa9389c"><img loading="lazy" decoding="async" width="64" height="64" class="gb-image gb-image-4fa9389c" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/jettempur.svg" alt="" title="jettempur"></figure> --}}
                                                                <h2 class="gb-headline gb-headline-06129ccf gb-headline-text">Business Website</h2>
                                                            </div>
                                                            <p class="gb-headline gb-headline-6b3b8058 gb-headline-text">Fitur lebih lengkap</p>
                                                            <div class="gb-container gb-container-e8a20591" id="items">
                                                                <div class="gb-container gb-container-e96538c5">
                                                                    <p class="gb-headline gb-headline-bd4dc22e">
                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg></span><span class="gb-headline-text"><strong>Flexible, Easy</strong> to Use.</span>
                                                                    </p>
                                                                    <p class="gb-headline gb-headline-bf9067b6">
                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg></span><span class="gb-headline-text"><strong>Product</strong> Sell</span>
                                                                    </p>
                                                                    <p class="gb-headline gb-headline-11da4ff8">
                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg></span><span class="gb-headline-text"><strong>Unlimited</strong> Database</span>
                                                                    </p>
                                                                    <p class="gb-headline gb-headline-c5054135">
                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg></span><span class="gb-headline-text"><strong>Business Pro</strong> Included</span>
                                                                    </p>
                                                                    {{-- <p class="gb-headline gb-headline-6ee5b6cc">
                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg></span><span class="gb-headline-text"><strong>cPanel</strong>Control Panel</span>
                                                                    </p> --}}
                                                                    <p class="gb-headline gb-headline-ae5b0d0d">
                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg></span><span class="gb-headline-text"><strong>30-Day</strong> Money-Back Guarantee</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="gb-container gb-container-b503fb22 dashed-border pricing">
                                                                <div class="gb-container gb-container-356fa213">
                                                                    <h3 class="gb-headline gb-headline-7c5b873c gb-headline-text">Rp. 80.000</h3>
                                                                    <p class="gb-headline gb-headline-f0582343 gb-headline-text">/bulan</p>
                                                                </div>
                                                                <div class="gb-container gb-container-0232a2dd">
                                                                    <a class="gb-button gb-button-3a5f64e3 gb-button-text gb-button-127ab6b4" href="https://dewabiz.com/hosting-super/">Lihat Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item active" style="width: 400px; margin-right: 20px;">
                                                    <div class="gb-grid-column gb-grid-column-8ddaae3c">
                                                        <div class="gb-container gb-container-8ddaae3c" id="items">
                                                            <div class="gb-container gb-container-2e08dd44">
                                                                {{-- <figure class="gb-block-image gb-block-image-4fa9389c"><img loading="lazy" decoding="async" width="64" height="64" class="gb-image gb-image-4fa9389c" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/jettempur.svg" alt="" title="jettempur"></figure> --}}
                                                                <h2 class="gb-headline gb-headline-06129ccf gb-headline-text">Professional Website</h2>
                                                            </div>
                                                            <p class="gb-headline gb-headline-6b3b8058 gb-headline-text">Fitur lebih lengkap</p>
                                                            <div class="gb-container gb-container-e8a20591" id="items">
                                                                <div class="gb-container gb-container-e96538c5">
                                                                    <p class="gb-headline gb-headline-bd4dc22e">
                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg></span><span class="gb-headline-text"><strong>Flexible, Easy</strong> to Use.</span>
                                                                    </p>
                                                                    <p class="gb-headline gb-headline-bf9067b6">
                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg></span><span class="gb-headline-text"><strong>Product</strong> Sell</span>
                                                                    </p>
                                                                    <p class="gb-headline gb-headline-11da4ff8">
                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg></span><span class="gb-headline-text"><strong>Unlimited</strong> Database</span>
                                                                    </p>
                                                                    <p class="gb-headline gb-headline-c5054135">
                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg></span><span class="gb-headline-text"><strong>Professional Pro</strong> Included</span>
                                                                    </p>
                                                                    {{-- <p class="gb-headline gb-headline-6ee5b6cc">
                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg></span><span class="gb-headline-text"><strong>cPanel</strong>Control Panel</span>
                                                                    </p> --}}
                                                                    <p class="gb-headline gb-headline-ae5b0d0d">
                                                                        <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path></svg></span><span class="gb-headline-text"><strong>30-Day</strong> Money-Back Guarantee</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="gb-container gb-container-b503fb22 dashed-border pricing">
                                                                <div class="gb-container gb-container-356fa213">
                                                                    <h3 class="gb-headline gb-headline-7c5b873c gb-headline-text">Rp. 100.000</h3>
                                                                    <p class="gb-headline gb-headline-f0582343 gb-headline-text">/bulan</p>
                                                                </div>
                                                                <div class="gb-container gb-container-0232a2dd">
                                                                    <a class="gb-button gb-button-3a5f64e3 gb-button-text gb-button-127ab6b4" href="https://dewabiz.com/hosting-super/">Lihat Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="gb-container gb-container-af98a551" id="fitur-unggulan">
                                <div class="gb-container gb-container-1eacca67">
                                    <h2 class="gb-headline gb-headline-c85af794 gb-headline-text">Fitur Unggulan</h2>
                                    <a class="gb-button gb-button-77793bf8 gb-button-text gb-button-c7e37e12" href="https://dewabiz.com/#">Lihat Lengkap</a>
                                </div>
                                <div class="gb-container gb-container-670d48c0">
                                    <div class="gb-grid-wrapper gb-grid-wrapper-e73d8a50">
                                        <div class="gb-grid-column gb-grid-column-9866c164">
                                            <div class="gb-container gb-container-9866c164">
                                                <figure class="gb-block-image gb-block-image-5475d984"><img loading="lazy" decoding="async" width="65" height="64" class="gb-image gb-image-5475d984" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/uptime.svg" alt="" title="uptime"></figure>
                                                <h3 class="gb-headline gb-headline-99f73b1e gb-headline-text">99.9% Uptime Guarantee</h3>
                                                <p class="gb-headline gb-headline-ac7e94db gb-headline-text">
                                                    Jaminan ketersediaan tinggi yang handal dan andal untuk layanan tak terganggu. Kepercayaan pelanggan terjaga.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="gb-grid-column gb-grid-column-4cfacd0b">
                                            <div class="gb-container gb-container-4cfacd0b">
                                                <figure class="gb-block-image gb-block-image-bae9d2b8"><img loading="lazy" decoding="async" width="64" height="64" class="gb-image gb-image-bae9d2b8" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/Unlimited-bandwidth.svg" alt="" title="Unlimited bandwidth"></figure>
                                                <h3 class="gb-headline gb-headline-75438afe gb-headline-text">Unmetered Bandwidth</h3>
                                                <p class="gb-headline gb-headline-7c7af68c gb-headline-text">
                                                    Akses data tak terbatas, bebas khawatir biaya tambahan. Solusi lalu lintas bebas untuk kebebasan berkomunikasi dan berbisnis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="gb-grid-column gb-grid-column-770f6147">
                                            <div class="gb-container gb-container-770f6147">
                                                <figure class="gb-block-image gb-block-image-e459be51"><img loading="lazy" decoding="async" width="64" height="64" class="gb-image gb-image-e459be51" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/icon-db3.svg" alt="" title="icon db3"></figure>
                                                <h3 class="gb-headline gb-headline-8ddc2f39 gb-headline-text">24/7 Customer Support</h3>
                                                <p class="gb-headline gb-headline-e706493f gb-headline-text">
                                                    24/7 Customer Support: Layanan pelanggan tanpa henti, siap membantu kapan pun diperlukan, untuk kepuasan dan solusi cepat.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="gb-grid-column gb-grid-column-f3656038">
                                            <div class="gb-container gb-container-f3656038">
                                                <figure class="gb-block-image gb-block-image-dc732320"><img loading="lazy" decoding="async" width="64" height="64" class="gb-image gb-image-dc732320" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/Upto5devices.svg" alt="" title="Upto5devices"></figure>
                                                <h3 class="gb-headline gb-headline-73485bbc gb-headline-text">Flexible, Easy to Use</h3>
                                                <p class="gb-headline gb-headline-61abcaeb gb-headline-text">
                                                    Pengendalian yang mudah dan fleksibel, memberikan kemudahan penggunaan tanpa kesulitan teknis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="gb-grid-column gb-grid-column-40e8a6c4">
                                            <div class="gb-container gb-container-40e8a6c4">
                                                <figure class="gb-block-image gb-block-image-3d955ff0"><img loading="lazy" decoding="async" width="64" height="64" class="gb-image gb-image-3d955ff0" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/256-bit-AES-Encryption.svg" alt="" title="256-bit AES Encryption"></figure>
                                                <h3 class="gb-headline gb-headline-9bf21448 gb-headline-text">30-Days Guarantee</h3>
                                                <p class="gb-headline gb-headline-862ea299 gb-headline-text">
                                                    Jaminan pengembalian dana selama 30 hari. Berikan kepuasan penuh kepada pelanggan atau uang mereka kembali.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="gb-grid-column gb-grid-column-6ba6ad4c">
                                            <div class="gb-container gb-container-6ba6ad4c">
                                                <figure class="gb-block-image gb-block-image-ead43140"><img loading="lazy" decoding="async" width="64" height="64" class="gb-image gb-image-ead43140" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/256-bit-AES-Encryption.svg" alt="" title="256-bit AES Encryption"></figure>
                                                <h3 class="gb-headline gb-headline-581002fa gb-headline-text">Free SSL Certification</h3>
                                                <p class="gb-headline gb-headline-7995627b gb-headline-text">
                                                    Nikmati keamanan situs web tanpa biaya tambahan. Proteksi data pengguna dengan sertifikat SSL gratis yang andal.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="gb-container gb-container-d0fbb97c" id="layanan">
                                <div class="gb-container gb-container-2c3eb960">
                                    <div class="gb-container gb-container-ece1ced4 sticky-flex">
                                        <h2 class="gb-headline gb-headline-39503735 gb-headline-text blue">Pilih dari lebih dari <em>150 produk</em> Untuk Kebutuhan Bisnis Anda</h2>
                                        <p class="gb-headline gb-headline-ec1714bf gb-headline-text">
                                            Temukan ragam produk unggulan dari Dewabiz! Jelajahi sekarang dan nikmati garansi uang kembali 100% yang dijamin. Belanja dengan keyakinan, kepuasan pelanggan adalah prioritas kami!
                                        </p>
                                        <a class="gb-button gb-button-61adb156 gb-button-text gb-button-127ab6b4 gb-button-95967219" href="https://dewabiz.com/pricing/">Mulai Sekarang</a>
                                    </div>
                                    <div class="gb-container gb-container-3652ad07">
                                        <div class="gb-container gb-container-2ec84626">
                                            <div class="gb-container gb-container-521c1b9f shadow gb-accordion">
                                                <div class="gb-container gb-container-9f45ad99 gb-accordion__item">
                                                    <button class="gb-button gb-button-bf873181 gb-accordion__toggle gb-accordion__toggle" aria-expanded="false"><span class="gb-button-text">Hosting</span><span class="gb-icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512" width="1em" height="1em" ariahidden="true" role="img" class="gb-accordion__icon"><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z" fill="currentColor"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512" width="1em" height="1em" ariahidden="true" role="img" class="gb-accordion__icon-open"><path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z" fill="currentColor"></path></svg></span></button>
                                                    <div class="gb-container gb-container-e944dd4d gb-accordion__content">
                                                        <p>
                                                            Kami menyediakan berbagai macam paket hosting diantaranya adalah: <a href="https://dewabiz.com/hosting-super/">Super Hosting</a> adalah produk scalable hosting pertama di Dunia, Anda bisa kustomisasi server sesuai dengan kebutuha
                                                        </p>
                                                        <p>
                                                            <a href="https://dewabiz.com/hosting-murah/">Unlimited Hosting</a> adalah jenis hosting web di mana Anda diizinkan untuk menghosting sebanyak mungkin situs web, dengan sumber daya yang tidak terbatas seperti ruang disk, bandwidth, dan jumlah database. Namun, perlu dicatat bahwa istilah “unlimited” dalam hosting web tidak selalu berarti bahwa sumber daya benar-benar tidak terbatas. Sebagai gantinya, “unlimited” hanya merujuk pada kebijakan hosting yang memungkinkan pengguna untuk menggunakan sumber daya sebanyak yang mereka butuhkan, selama mereka tidak melanggar ketentuan penggunaan hosting. Dengan performa yang cukup tinggi dan server terbaru.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="gb-container gb-container-ca47ee8d gb-accordion__item">
                                                    <button class="gb-button gb-button-14b6f026 gb-accordion__toggle gb-accordion__toggle" aria-expanded="false"><span class="gb-button-text">Domain</span><span class="gb-icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512" width="1em" height="1em" ariahidden="true" role="img" class="gb-accordion__icon"><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z" fill="currentColor"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512" width="1em" height="1em" ariahidden="true" role="img" class="gb-accordion__icon-open"><path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z" fill="currentColor"></path></svg></span></button>
                                                    <div class="gb-container gb-container-456e6439 gb-accordion__content">
                                                        <p>
                                                            Cari dan daftar domain impian untuk bisnis Anda. Kami menyediakan ratusan ekstensi domain internasional maupun domain indonesia mulai dari <strong>.com .net .org .info .id .co.id .my.id</strong> dan lain lain
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="gb-container gb-container-df7f5e7b gb-accordion__item">
                                                    <button class="gb-button gb-button-d02f1bfa gb-accordion__toggle gb-accordion__toggle" aria-expanded="false"><span class="gb-button-text">Compute</span><span class="gb-icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512" width="1em" height="1em" ariahidden="true" role="img" class="gb-accordion__icon"><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z" fill="currentColor"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512" width="1em" height="1em" ariahidden="true" role="img" class="gb-accordion__icon-open"><path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z" fill="currentColor"></path></svg></span></button>
                                                    <div class="gb-container gb-container-ce111fc4 gb-accordion__content">
                                                        <p>
                                                            Kami menyediakan berbagai macam paket compute diantaranya adalah:
                                                        </p>
                                                        <ul>
                                                            <li>
                                                                <a href="https://dewabiz.com/cloud-vps/">VPS Cloud Compute</a> mulai Rp 80.000 perbulan
                                                            </li>
                                                            <li>
                                                                <a href="https://dewabiz.com/cloud-vps/"></a><a href="https://dewabiz.com/vps-super-compute/">VPS Super Compute</a> high performance mulai dari Rp 300.000 perbulan
                                                            </li>
                                                            <li>
                                                                <a href="https://dewabiz.com/vps-mikrotik/">VPS CHR Mikrotik</a> mulai Rp 80.000 perbulan
                                                            </li>
                                                            <li>
                                                                <a href="https://dewabiz.com/vps-mikrotik/"></a><a href="https://dewabiz.com/vps-tunneling-vpn/">VPS Tunnel / VPN</a> mulai dari Rp 90.000 perbulan
                                                            </li>
                                                            <li>
                                                                <a href="https://dewabiz.com/rdp-murah/">RDP Murah</a> mulai dari Rp 185.000 perbulan
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="gb-container gb-container-c34f64ac gb-accordion__item">
                                                    <button class="gb-button gb-button-41cfdfcd gb-accordion__toggle gb-accordion__toggle" aria-expanded="false"><span class="gb-button-text">Server</span><span class="gb-icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512" width="1em" height="1em" ariahidden="true" role="img" class="gb-accordion__icon"><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z" fill="currentColor"></path></svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512" width="1em" height="1em" ariahidden="true" role="img" class="gb-accordion__icon-open"><path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z" fill="currentColor"></path></svg></span></button>
                                                    <div class="gb-container gb-container-f60ccfc8 gb-accordion__content">
                                                        <p>
                                                            Ingin meningkatkan kinerja dan keandalan website Anda? Kami memiliki solusi yang tepat! Dewabiz menawarkan produk Dedicated Server dan Colocation Server dengan harga murah dan terjangkau, dirancang khusus untuk memenuhi kebutuhan bisnis Anda.
                                                        </p>
                                                        <p>
                                                            Dedicated Server kami memberikan Anda kekuatan komputasi dan sumber daya yang eksklusif. Dengan server yang didedikasikan sepenuhnya untuk Anda, Anda dapat mengoptimalkan performa website dan menghadirkan pengalaman yang lancar bagi pengunjung Anda. Nikmati kecepatan akses yang tinggi, stabilitas yang tak tertandingi, dan fleksibilitas penuh dalam mengelola server sesuai kebutuhan Anda.
                                                        </p>
                                                        <p>
                                                            Jika Anda mencari opsi yang lebih ekonomis namun tetap memiliki keamanan dan kualitas yang tinggi, Colocation Server kami adalah pilihan yang tepat. Dengan colocation, Anda dapat menempatkan server fisik Anda di pusat data kami yang aman dan terhubung ke jaringan kelas dunia. Dengan demikian, Anda dapat menghemat biaya perawatan server sendiri, sambil tetap memanfaatkan keandalan infrastruktur yang kami sediakan.
                                                        </p>
                                                        <p>
                                                            Kami bangga menyediakan layanan yang handal dan profesional, dengan tim dukungan teknis yang siap membantu Anda 24/7. Selain itu, kami menawarkan fleksibilitas dalam konfigurasi dan penyesuaian server sesuai dengan kebutuhan bisnis Anda.
                                                        </p>
                                                        <p>
                                                            Jadi, jangan lewatkan kesempatan ini! Tingkatkan kinerja dan keandalan website Anda dengan produk Dedicated Server atau Colocation Server kami yang terjangkau. Bergabunglah dengan Dewabiz sekarang dan nikmati solusi server yang dapat diandalkan untuk mendukung pertumbuhan bisnis Anda.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gb-container gb-container-a474fe7e">
                                            <p class="gb-headline gb-headline-a3a5f316 gb-headline-text">
                                                Tunggu apalagi, <a href="https://dewabiz.com/#"><strong>Mulai Sekarang</strong>.</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="gb-container gb-container-59c5b8c5" id="cs">
                                <div class="gb-container gb-container-bfda22d2">
                                    <div class="gb-container gb-container-ca1ac1ef">
                                        <p class="gb-headline gb-headline-86ee20fd gb-headline-text">Support</p>
                                        <h2 class="gb-headline gb-headline-5bf34da2 gb-headline-text">Bantuan Customer Service<br>24/7/365 Non Stop.</h2>
                                        <p class="gb-headline gb-headline-b12ef5e8 gb-headline-text">
                                            24/7 Live Chat Customer Service siap melanyani Anda 24 Jam Non-Stop jika Anda mempunyai keluhan atau bantuan.
                                        </p>
                                        <a class="gb-button gb-button-3395fef7 gb-button-text gb-button-586147d1" href="https://wa.me/6285215222259" target="_blank" rel="noopener noreferrer">Chat Sekarang</a>
                                    </div>
                                    <figure class="gb-block-image gb-block-image-9ba19b57"><img loading="lazy" decoding="async" width="300" height="228" class="gb-image gb-image-9ba19b57" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/home-support-300x228.png" alt="" title="home-support" srcset="https://dewabiz.com/wp-content/uploads/2023/09/home-support-300x228.png 300w, https://dewabiz.com/wp-content/uploads/2023/09/home-support-1024x777.png 1024w, https://dewabiz.com/wp-content/uploads/2023/09/home-support-768x582.png 768w, https://dewabiz.com/wp-content/uploads/2023/09/home-support-24x18.png 24w, https://dewabiz.com/wp-content/uploads/2023/09/home-support-36x27.png 36w, https://dewabiz.com/wp-content/uploads/2023/09/home-support-48x36.png 48w, https://dewabiz.com/wp-content/uploads/2023/09/home-support.png 1192w" sizes="(max-width: 300px) 100vw, 300px"></figure>
                                </div>
                            </div>
                            <div class="gb-container gb-container-f85dfef3">
                                <div class="gb-container gb-container-f68dff89">
                                    <h2 class="gb-headline gb-headline-4a5ffb05 gb-headline-text">Testimoni Pelanggan</h2>
                                    <p class="gb-headline gb-headline-89df9860 gb-headline-text gb-headline-89559860">
                                        Dewabiz di percaya ratusan pelaku bisnis dan ukm di seluruh Indonesia.
                                    </p>
                                </div>
                                <div class="gb-container gb-container-a1a5df92">
                                    <div class="testi-wrapp testi_slider owl-carousel owl-loaded owl-drag">
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2530px;">
                                                <div class="owl-item active" style="width: 291.25px; margin-right: 25px;">
                                                    <div class="testi_item">
                                                        <div class="testi_icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-quote" viewbox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                                                            <path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="testi_desc">
                                                            Saya sudah menggunakan layanan DewaBiz sudah lebih dari 4 tahun, dan yang paling saya suka adalah respon customer servicenya yang cepat!
                                                        </div>
                                                        <div class="testi_img">
                                                            <a href="https://dewabiz.com/testimonial/arif-satria/" title="Arif Satria"><img loading="lazy" decoding="async" width="120" height="120" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/dewa-testi-arief.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-arief.png 120w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-arief-24x24.png 24w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-arief-36x36.png 36w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-arief-48x48.png 48w" sizes="(max-width: 120px) 100vw, 120px"></a>
                                                            <h3 class="testi_name">Arif Satria <span>- on <a href="https://www.google.com/maps/place/DewaBiz+-+Cloud+VPS+%26+Web+Hosting+Indonesia/@-6.2668516,106.9426467,15z/data=!4m2!3m1!1s0x0:0x410dc3e6b087d59d?sa=X&amp;ved=2ahUKEwiIpLjS_7KBAxWV1jgGHShtA1sQ_BJ6BAhbEAA&amp;ved=2ahUKEwiIpLjS_7KBAxWV1jgGHShtA1sQ_BJ6BAhrEAg" target="_blank" rel="noopener">Google Business</a><span></span></span></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item active" style="width: 291.25px; margin-right: 25px;">
                                                    <div class="testi_item">
                                                        <div class="testi_icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-quote" viewbox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                                                            <path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="testi_desc">
                                                            support adminnya mantap dan cepat tidak mengecewakan lah...pertahankan dan tingkatkan pelayanannya , terima kasih
                                                        </div>
                                                        <div class="testi_img">
                                                            <a href="https://dewabiz.com/testimonial/top-5/" title="Top 5"><img loading="lazy" decoding="async" width="120" height="120" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/dewa-testi-top-5.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-top-5.png 120w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-top-5-24x24.png 24w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-top-5-36x36.png 36w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-top-5-48x48.png 48w" sizes="(max-width: 120px) 100vw, 120px"></a>
                                                            <h3 class="testi_name">Top 5 <span>- on <a href="https://www.google.com/maps/place/DewaBiz+-+Cloud+VPS+%26+Web+Hosting+Indonesia/@-6.2668516,106.9426467,15z/data=!4m2!3m1!1s0x0:0x410dc3e6b087d59d?sa=X&amp;ved=2ahUKEwiIpLjS_7KBAxWV1jgGHShtA1sQ_BJ6BAhbEAA&amp;ved=2ahUKEwiIpLjS_7KBAxWV1jgGHShtA1sQ_BJ6BAhrEAg" target="_blank" rel="noopener">Google Business</a><span></span></span></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item active" style="width: 291.25px; margin-right: 25px;">
                                                    <div class="testi_item">
                                                        <div class="testi_icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-quote" viewbox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                                                            <path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="testi_desc">
                                                            MaasyaAllah,..Problem selesai hanya dalam bebrapa menit. Terimakasih team support dewabiz atas penanganan mengatasi keluhan kami. Sukses selalu
                                                        </div>
                                                        <div class="testi_img">
                                                            <a href="https://dewabiz.com/testimonial/anshar-wellang/" title="Anshar Wellang"><img loading="lazy" decoding="async" width="120" height="120" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/dewa-testi-Anshar.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Anshar.png 120w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Anshar-24x24.png 24w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Anshar-36x36.png 36w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Anshar-48x48.png 48w" sizes="(max-width: 120px) 100vw, 120px"></a>
                                                            <h3 class="testi_name">Anshar Wellang <span>- on <a href="https://www.google.com/maps/place/DewaBiz+-+Cloud+VPS+%26+Web+Hosting+Indonesia/@-6.2668516,106.9426467,15z/data=!4m2!3m1!1s0x0:0x410dc3e6b087d59d?sa=X&amp;ved=2ahUKEwiIpLjS_7KBAxWV1jgGHShtA1sQ_BJ6BAhbEAA&amp;ved=2ahUKEwiIpLjS_7KBAxWV1jgGHShtA1sQ_BJ6BAhrEAg" target="_blank" rel="noopener">Google Business</a><span></span></span></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item active" style="width: 291.25px; margin-right: 25px;">
                                                    <div class="testi_item">
                                                        <div class="testi_icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-quote" viewbox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                                                            <path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="testi_desc">
                                                            layanan mantab berkelas dan stabil itu yang saya harapkan dari membangun bisnis lebih bekembang pesat
                                                        </div>
                                                        <div class="testi_img">
                                                            <a href="https://dewabiz.com/testimonial/gustadi-itsnan/" title="Gustadi Itsnan"><img loading="lazy" decoding="async" width="120" height="120" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/dewa-testi-gusdian.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-gusdian.png 120w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-gusdian-24x24.png 24w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-gusdian-36x36.png 36w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-gusdian-48x48.png 48w" sizes="(max-width: 120px) 100vw, 120px"></a>
                                                            <h3 class="testi_name">Gustadi Itsnan <span>- on <a href="https://www.google.com/maps/place/DewaBiz+-+Cloud+VPS+%26+Web+Hosting+Indonesia/@-6.2668516,106.9426467,15z/data=!4m2!3m1!1s0x0:0x410dc3e6b087d59d?sa=X&amp;ved=2ahUKEwiIpLjS_7KBAxWV1jgGHShtA1sQ_BJ6BAhbEAA&amp;ved=2ahUKEwiIpLjS_7KBAxWV1jgGHShtA1sQ_BJ6BAhrEAg" target="_blank" rel="noopener">Google Business</a><span></span></span></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 291.25px; margin-right: 25px;">
                                                    <div class="testi_item">
                                                        <div class="testi_icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-quote" viewbox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                                                            <path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="testi_desc">
                                                            Nggak pernah kecewa pake hosting ini.. pelayanan ok dan harganya terjangkau. mantab
                                                        </div>
                                                        <div class="testi_img">
                                                            <a href="https://dewabiz.com/testimonial/pt-catur-rindang-usaha-bersama/" title="PT Catur Rindang Usaha Bersama"><img loading="lazy" decoding="async" width="120" height="120" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/dewa-testi-Pt-Catur.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Pt-Catur.png 120w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Pt-Catur-24x24.png 24w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Pt-Catur-36x36.png 36w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Pt-Catur-48x48.png 48w" sizes="(max-width: 120px) 100vw, 120px"></a>
                                                            <h3 class="testi_name">PT Catur Rindang Usaha Bersama <span>- on <a href="https://www.google.com/maps/place/DewaBiz+-+Cloud+VPS+%26+Web+Hosting+Indonesia/@-6.2668516,106.9426467,15z/data=!4m2!3m1!1s0x0:0x410dc3e6b087d59d?sa=X&amp;ved=2ahUKEwiIpLjS_7KBAxWV1jgGHShtA1sQ_BJ6BAhbEAA&amp;ved=2ahUKEwiIpLjS_7KBAxWV1jgGHShtA1sQ_BJ6BAhrEAg" target="_blank" rel="noopener">Google Business</a><span></span></span></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 291.25px; margin-right: 25px;">
                                                    <div class="testi_item">
                                                        <div class="testi_icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-quote" viewbox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                                                            <path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="testi_desc">
                                                            Pelayanan nya ramah dan cepat. Sudah 4 tahun saya jd client tidak pernah kecewa
                                                        </div>
                                                        <div class="testi_img">
                                                            <a href="https://dewabiz.com/testimonial/anto-satriani/" title="Anto Satriani"><img loading="lazy" decoding="async" width="120" height="120" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/dewa-testi-Anto-Satriani.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Anto-Satriani.png 120w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Anto-Satriani-24x24.png 24w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Anto-Satriani-36x36.png 36w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Anto-Satriani-48x48.png 48w" sizes="(max-width: 120px) 100vw, 120px"></a>
                                                            <h3 class="testi_name">Anto Satriani <span>- on <a href="https://www.google.com/maps/place/DewaBiz+-+Cloud+VPS+%26+Web+Hosting+Indonesia/@-6.2668516,106.9426467,15z/data=!4m2!3m1!1s0x0:0x410dc3e6b087d59d?sa=X&amp;ved=2ahUKEwiIpLjS_7KBAxWV1jgGHShtA1sQ_BJ6BAhbEAA&amp;ved=2ahUKEwiIpLjS_7KBAxWV1jgGHShtA1sQ_BJ6BAhrEAg" target="_blank" rel="noopener">Google Business</a><span></span></span></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 291.25px; margin-right: 25px;">
                                                    <div class="testi_item">
                                                        <div class="testi_icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-quote" viewbox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                                                            <path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="testi_desc">
                                                            cinta sama hosting dewabiz, paket termurah pun kecepatannya luar biasa, keren. Respon juga cepat. Nggak rugi deh,
                                                        </div>
                                                        <div class="testi_img">
                                                            <a href="https://dewabiz.com/testimonial/salaam-niaga/" title="Salaam Niaga"><img loading="lazy" decoding="async" width="120" height="120" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/dewa-testi-Salaam-Niaga-.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Salaam-Niaga-.png 120w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Salaam-Niaga--24x24.png 24w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Salaam-Niaga--36x36.png 36w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Salaam-Niaga--48x48.png 48w" sizes="(max-width: 120px) 100vw, 120px"></a>
                                                            <h3 class="testi_name">Salaam Niaga <span>- on <a href="https://www.google.com/maps/place/DewaBiz+-+Cloud+VPS+%26+Web+Hosting+Indonesia/@-6.2668516,106.9426467,15z/data=!4m2!3m1!1s0x0:0x410dc3e6b087d59d?sa=X&amp;ved=2ahUKEwiIpLjS_7KBAxWV1jgGHShtA1sQ_BJ6BAhbEAA&amp;ved=2ahUKEwiIpLjS_7KBAxWV1jgGHShtA1sQ_BJ6BAhrEAg" target="_blank" rel="noopener">Google Business</a><span></span></span></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 291.25px; margin-right: 25px;">
                                                    <div class="testi_item">
                                                        <div class="testi_icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-quote" viewbox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                                                            <path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="testi_desc">
                                                            CS nya selalu mau membantu dan memberikan solusi. Impressive!
                                                        </div>
                                                        <div class="testi_img">
                                                            <a href="https://dewabiz.com/testimonial/manda-rahmat-husein-lubis/" title="Manda Rahmat Husein Lubis"><img loading="lazy" decoding="async" width="120" height="120" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/dewa-testi-Manda-Rahmat-Husein-Lubis.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Manda-Rahmat-Husein-Lubis.png 120w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Manda-Rahmat-Husein-Lubis-24x24.png 24w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Manda-Rahmat-Husein-Lubis-36x36.png 36w, https://dewabiz.com/wp-content/uploads/2023/09/dewa-testi-Manda-Rahmat-Husein-Lubis-48x48.png 48w" sizes="(max-width: 120px) 100vw, 120px"></a>
                                                            <h3 class="testi_name">Manda Rahmat Husein Lubis <span>- on <a href="https://www.google.com/maps/place/DewaBiz+-+Cloud+VPS+%26+Web+Hosting+Indonesia/@-6.2668516,106.9426467,15z/data=!4m2!3m1!1s0x0:0x410dc3e6b087d59d?sa=X&amp;ved=2ahUKEwiIpLjS_7KBAxWV1jgGHShtA1sQ_BJ6BAhbEAA&amp;ved=2ahUKEwiIpLjS_7KBAxWV1jgGHShtA1sQ_BJ6BAhrEAg" target="_blank" rel="noopener">Google Business</a><span></span></span></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-nav disabled">
                                            <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                                        </div>
                                        <div class="owl-dots">
                                            <button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="gb-container gb-container-60142992">
                                <div class="gb-container gb-container-32ac108d">
                                    <div class="gb-container gb-container-d238af73">
                                        <div class="gb-container gb-container-bcd07531">
                                            <h2 class="gb-headline gb-headline-312a6d07 gb-headline-text">Layanan Terbaik Kami</h2>
                                            <p class="gb-headline gb-headline-7d35e392 gb-headline-text">
                                                Berikut adalah layanan terbaik yang kami sediakan untuk kebutuhan bisnis Anda
                                            </p>
                                        </div>
                                        <a class="gb-button gb-button-8ed2dad7 gb-button-text gb-button-c7e37e12" href="https://dewabiz.com/pricing/">Mulai Sekarang</a>
                                    </div>
                                    <div class="gb-container gb-container-677396fb">
                                        <div class="gb-grid-wrapper gb-grid-wrapper-b7d6234b">
                                            <div class="gb-grid-column gb-grid-column-8a9e20c2">
                                                <div class="gb-container gb-container-8a9e20c2 shadow">
                                                    <div class="gb-container gb-container-a9732131">
                                                        <figure class="gb-block-image gb-block-image-95613ed0"><img loading="lazy" decoding="async" width="64" height="64" class="gb-image gb-image-95613ed0" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/vps.svg" alt="" title="vps"></figure>
                                                        <div class="gb-container gb-container-23294f62">
                                                            <h3 class="gb-headline gb-headline-985d1c9b gb-headline-text">Cloud VPS</h3>
                                                            <p class="gb-headline gb-headline-4252aa93 gb-headline-text">
                                                                Mulai <strong>Rp 100K</strong>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="gb-headline gb-headline-2a9f9859 gb-headline-text">
                                                        Solusi hosting fleksibel dengan akses ke awan, memberikan kecepatan, skalabilitas, dan kontrol penuh bagi proyek web dan aplikasi Anda.
                                                    </p>
                                                    <a class="gb-button gb-button-c963d9f7 gb-button-text gb-button-c7e37e12" href="https://cloud.depa.id/" target="_blank" rel="noopener noreferrer">Beli Sekarang</a>
                                                </div>
                                            </div>
                                            <div class="gb-grid-column gb-grid-column-f13764f2">
                                                <div class="gb-container gb-container-f13764f2 shadow">
                                                    <div class="gb-container gb-container-08cadb00">
                                                        <figure class="gb-block-image gb-block-image-f1b9d377"><img loading="lazy" decoding="async" width="64" height="64" class="gb-image gb-image-f1b9d377" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/vpslagi.svg" alt="" title="vpslagi"></figure>
                                                        <div class="gb-container gb-container-090a5908">
                                                            <h3 class="gb-headline gb-headline-4f39f8d6 gb-headline-text">VPS Super Compute</h3>
                                                            <p class="gb-headline gb-headline-166a1d41 gb-headline-text">
                                                                Mulai <strong>Rp 150K</strong>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="gb-headline gb-headline-0d5e4d11 gb-headline-text">
                                                        Tingkatkan kinerja VPS dengan tenaga komputasi super. Pengalaman hosting terbaik dengan performa tinggi dan stabilitas optimal.
                                                    </p>
                                                    <a class="gb-button gb-button-1cd57621 gb-button-text gb-button-c7e37e12" href="https://dewabiz.com/vps-super-compute/">Beli Sekarang</a>
                                                </div>
                                            </div>
                                            <div class="gb-grid-column gb-grid-column-d0372ab9">
                                                <div class="gb-container gb-container-d0372ab9 shadow">
                                                    <div class="gb-container gb-container-be05f336">
                                                        <figure class="gb-block-image gb-block-image-bd3fe2ed"><img loading="lazy" decoding="async" width="65" height="64" class="gb-image gb-image-bd3fe2ed" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/email.svg" alt="" title="email"></figure>
                                                        <div class="gb-container gb-container-ac7f9a50">
                                                            <h3 class="gb-headline gb-headline-71289230 gb-headline-text">Mail Hosting</h3>
                                                            <p class="gb-headline gb-headline-8950bb78 gb-headline-text">
                                                                Mulai <strong>Rp 15K</strong>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="gb-headline gb-headline-53125fd2 gb-headline-text">
                                                        Solusi hosting email yang andal dan aman. Mengelola dan mengakses email dengan mudah, menjaga komunikasi bisnis tetap lancar dan efisien.
                                                    </p>
                                                    <a class="gb-button gb-button-379622e0 gb-button-text gb-button-c7e37e12" href="https://dewabiz.com/mail-hosting/">Beli Sekarang</a>
                                                </div>
                                            </div>
                                            <div class="gb-grid-column gb-grid-column-47eddbbe">
                                                <div class="gb-container gb-container-47eddbbe shadow">
                                                    <div class="gb-container gb-container-fa3262c3">
                                                        <figure class="gb-block-image gb-block-image-a1e26e34"><img loading="lazy" decoding="async" width="64" height="64" class="gb-image gb-image-a1e26e34" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/wordpresscloud.svg" alt="" title="wordpresscloud"></figure>
                                                        <div class="gb-container gb-container-d8f8fcc8">
                                                            <h3 class="gb-headline gb-headline-b94e2530 gb-headline-text">WordPress Hosting</h3>
                                                            <p class="gb-headline gb-headline-61a56e41 gb-headline-text">
                                                                Mulai <strong>Rp 42K</strong>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="gb-headline gb-headline-885272cc gb-headline-text">
                                                        Solusi hosting khusus untuk WordPress. Performa tinggi, keamanan maksimal, dan dukungan teknis ahli untuk pengalaman WordPress terbaik.
                                                    </p>
                                                    <a class="gb-button gb-button-2bc2f67e gb-button-text gb-button-c7e37e12" href="https://dewabiz.com/wordpress-hosting/">Beli Sekarang</a>
                                                </div>
                                            </div>
                                            <div class="gb-grid-column gb-grid-column-eec41489">
                                                <div class="gb-container gb-container-eec41489 shadow">
                                                    <div class="gb-container gb-container-e4769188">
                                                        <figure class="gb-block-image gb-block-image-109b1dd9"><img loading="lazy" decoding="async" width="64" height="64" class="gb-image gb-image-109b1dd9" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/vpskonek.svg" alt="" title="vpskonek"></figure>
                                                        <div class="gb-container gb-container-93affd7f">
                                                            <h3 class="gb-headline gb-headline-31b227c1 gb-headline-text">VPS Windows</h3>
                                                            <p class="gb-headline gb-headline-127ed5fb gb-headline-text">
                                                                Mulai <strong>Rp 150K</strong>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="gb-headline gb-headline-1381c956 gb-headline-text">
                                                        Solusi hosting virtual berbasis Windows. Akses mudah ke lingkungan Windows, fleksibilitas, dan skalabilitas untuk aplikasi dan website Anda.
                                                    </p>
                                                    <a class="gb-button gb-button-56739c93 gb-button-text gb-button-c7e37e12" href="https://dewabiz.com/rdp-murah/">Beli Sekarang</a>
                                                </div>
                                            </div>
                                            <div class="gb-grid-column gb-grid-column-2cfd3a16">
                                                <div class="gb-container gb-container-2cfd3a16 shadow">
                                                    <div class="gb-container gb-container-3f4a2f28">
                                                        <figure class="gb-block-image gb-block-image-875363a5"><img loading="lazy" decoding="async" width="64" height="64" class="gb-image gb-image-875363a5" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/cpulagilagilagi.svg" alt="" title="cpulagilagilagi"></figure>
                                                        <div class="gb-container gb-container-918d1e36">
                                                            <h3 class="gb-headline gb-headline-62736bde gb-headline-text">Bare Metal</h3>
                                                            <p class="gb-headline gb-headline-5550820d gb-headline-text">
                                                                Mulai <strong>Rp 1.000K</strong>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="gb-headline gb-headline-b5e548ca gb-headline-text">
                                                        Bare metal server Indonesia infrastruktur fisik, performa tinggi dan kontrol penuh, ideal untuk aplikasi berat dan kinerja tinggi tanpa lapisan virtualisasi.
                                                    </p>
                                                    <a class="gb-button gb-button-b74a4ee0 gb-button-text gb-button-c7e37e12" href="https://dewabiz.com/dedicated-server/">Beli Sekarang</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gb-container gb-container-bc429695" id="logo">
                                <div class="gb-container gb-container-32e47583">
                                    <h2 class="gb-headline gb-headline-c86e6588 gb-headline-text">Dipercaya Ribuan Klien</h2>
                                </div>
                                <figure class="wp-block-gallery has-nested-images columns-1 is-cropped owl-carousel logo_slider wp-block-gallery-1 is-layout-flex wp-block-gallery-is-layout-flex owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(-1575px, 0px, 0px); transition: all 0.25s ease 0s; width: 3623px;">
                                        <div class="owl-item cloned" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="130" height="40" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/logo-hotel-co-id.png" alt="" class="wp-image-50150" srcset="https://dewabiz.com/wp-content/uploads/2023/08/logo-hotel-co-id.png 130w, https://dewabiz.com/wp-content/uploads/2023/08/logo-hotel-co-id-24x7.png 24w, https://dewabiz.com/wp-content/uploads/2023/08/logo-hotel-co-id-36x11.png 36w, https://dewabiz.com/wp-content/uploads/2023/08/logo-hotel-co-id-48x15.png 48w" sizes="(max-width: 130px) 100vw, 130px"></figure>
                                        </div>
                                        <div class="owl-item cloned" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="248" height="115" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/cashplus-news.png" alt="" class="wp-image-50082" srcset="https://dewabiz.com/wp-content/uploads/2023/08/cashplus-news.png 248w, https://dewabiz.com/wp-content/uploads/2023/08/cashplus-news-24x11.png 24w, https://dewabiz.com/wp-content/uploads/2023/08/cashplus-news-36x17.png 36w, https://dewabiz.com/wp-content/uploads/2023/08/cashplus-news-48x22.png 48w" sizes="(max-width: 248px) 100vw, 248px"></figure>
                                        </div>
                                        <div class="owl-item cloned" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="248" height="115" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/rans-1.png" alt="" class="wp-image-36613"></figure>
                                        </div>
                                        <div class="owl-item cloned" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="248" height="115" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/memo-media-1.png" alt="" class="wp-image-36626"></figure>
                                        </div>
                                        <div class="owl-item cloned" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-large"><img loading="lazy" decoding="async" width="1024" height="477" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/apel-1024x477.png" alt="" class="wp-image-43655" srcset="https://dewabiz.com/wp-content/uploads/2023/03/apel-1024x477.png 1024w, https://dewabiz.com/wp-content/uploads/2023/03/apel-300x140.png 300w, https://dewabiz.com/wp-content/uploads/2023/03/apel-768x358.png 768w, https://dewabiz.com/wp-content/uploads/2023/03/apel.png 1039w" sizes="(max-width: 1024px) 100vw, 1024px"></figure>
                                        </div>
                                        <div class="owl-item cloned" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="248" height="115" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/indopolitika.png" alt="" class="wp-image-50083" srcset="https://dewabiz.com/wp-content/uploads/2023/08/indopolitika.png 248w, https://dewabiz.com/wp-content/uploads/2023/08/indopolitika-24x11.png 24w, https://dewabiz.com/wp-content/uploads/2023/08/indopolitika-36x17.png 36w, https://dewabiz.com/wp-content/uploads/2023/08/indopolitika-48x22.png 48w" sizes="(max-width: 248px) 100vw, 248px"></figure>
                                        </div>
                                        <div class="owl-item cloned" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="248" height="115" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/xnews.png" alt="" class="wp-image-50084" srcset="https://dewabiz.com/wp-content/uploads/2023/08/xnews.png 248w, https://dewabiz.com/wp-content/uploads/2023/08/xnews-24x11.png 24w, https://dewabiz.com/wp-content/uploads/2023/08/xnews-36x17.png 36w, https://dewabiz.com/wp-content/uploads/2023/08/xnews-48x22.png 48w" sizes="(max-width: 248px) 100vw, 248px"></figure>
                                        </div>
                                        <div class="owl-item cloned" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="130" height="40" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/logo-hotel-co-id.png" alt="" class="wp-image-50150" srcset="https://dewabiz.com/wp-content/uploads/2023/08/logo-hotel-co-id.png 130w, https://dewabiz.com/wp-content/uploads/2023/08/logo-hotel-co-id-24x7.png 24w, https://dewabiz.com/wp-content/uploads/2023/08/logo-hotel-co-id-36x11.png 36w, https://dewabiz.com/wp-content/uploads/2023/08/logo-hotel-co-id-48x15.png 48w" sizes="(max-width: 130px) 100vw, 130px"></figure>
                                        </div>
                                        <div class="owl-item" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="248" height="115" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/cashplus-news.png" alt="" class="wp-image-50082" srcset="https://dewabiz.com/wp-content/uploads/2023/08/cashplus-news.png 248w, https://dewabiz.com/wp-content/uploads/2023/08/cashplus-news-24x11.png 24w, https://dewabiz.com/wp-content/uploads/2023/08/cashplus-news-36x17.png 36w, https://dewabiz.com/wp-content/uploads/2023/08/cashplus-news-48x22.png 48w" sizes="(max-width: 248px) 100vw, 248px"></figure>
                                        </div>
                                        <div class="owl-item" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="248" height="115" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/rans-1.png" alt="" class="wp-image-36613"></figure>
                                        </div>
                                        <div class="owl-item active" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="248" height="115" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/memo-media-1.png" alt="" class="wp-image-36626"></figure>
                                        </div>
                                        <div class="owl-item active" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-large"><img loading="lazy" decoding="async" width="1024" height="477" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/apel-1024x477.png" alt="" class="wp-image-43655" srcset="https://dewabiz.com/wp-content/uploads/2023/03/apel-1024x477.png 1024w, https://dewabiz.com/wp-content/uploads/2023/03/apel-300x140.png 300w, https://dewabiz.com/wp-content/uploads/2023/03/apel-768x358.png 768w, https://dewabiz.com/wp-content/uploads/2023/03/apel.png 1039w" sizes="(max-width: 1024px) 100vw, 1024px"></figure>
                                        </div>
                                        <div class="owl-item active" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="248" height="115" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/indopolitika.png" alt="" class="wp-image-50083" srcset="https://dewabiz.com/wp-content/uploads/2023/08/indopolitika.png 248w, https://dewabiz.com/wp-content/uploads/2023/08/indopolitika-24x11.png 24w, https://dewabiz.com/wp-content/uploads/2023/08/indopolitika-36x17.png 36w, https://dewabiz.com/wp-content/uploads/2023/08/indopolitika-48x22.png 48w" sizes="(max-width: 248px) 100vw, 248px"></figure>
                                        </div>
                                        <div class="owl-item active" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="248" height="115" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/xnews.png" alt="" class="wp-image-50084" srcset="https://dewabiz.com/wp-content/uploads/2023/08/xnews.png 248w, https://dewabiz.com/wp-content/uploads/2023/08/xnews-24x11.png 24w, https://dewabiz.com/wp-content/uploads/2023/08/xnews-36x17.png 36w, https://dewabiz.com/wp-content/uploads/2023/08/xnews-48x22.png 48w" sizes="(max-width: 248px) 100vw, 248px"></figure>
                                        </div>
                                        <div class="owl-item active" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="130" height="40" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/logo-hotel-co-id.png" alt="" class="wp-image-50150" srcset="https://dewabiz.com/wp-content/uploads/2023/08/logo-hotel-co-id.png 130w, https://dewabiz.com/wp-content/uploads/2023/08/logo-hotel-co-id-24x7.png 24w, https://dewabiz.com/wp-content/uploads/2023/08/logo-hotel-co-id-36x11.png 36w, https://dewabiz.com/wp-content/uploads/2023/08/logo-hotel-co-id-48x15.png 48w" sizes="(max-width: 130px) 100vw, 130px"></figure>
                                        </div>
                                        <div class="owl-item cloned active" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="248" height="115" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/cashplus-news.png" alt="" class="wp-image-50082" srcset="https://dewabiz.com/wp-content/uploads/2023/08/cashplus-news.png 248w, https://dewabiz.com/wp-content/uploads/2023/08/cashplus-news-24x11.png 24w, https://dewabiz.com/wp-content/uploads/2023/08/cashplus-news-36x17.png 36w, https://dewabiz.com/wp-content/uploads/2023/08/cashplus-news-48x22.png 48w" sizes="(max-width: 248px) 100vw, 248px"></figure>
                                        </div>
                                        <div class="owl-item cloned active" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="248" height="115" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/rans-1.png" alt="" class="wp-image-36613"></figure>
                                        </div>
                                        <div class="owl-item cloned active" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="248" height="115" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/memo-media-1.png" alt="" class="wp-image-36626"></figure>
                                        </div>
                                        <div class="owl-item cloned" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-large"><img loading="lazy" decoding="async" width="1024" height="477" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/apel-1024x477.png" alt="" class="wp-image-43655" srcset="https://dewabiz.com/wp-content/uploads/2023/03/apel-1024x477.png 1024w, https://dewabiz.com/wp-content/uploads/2023/03/apel-300x140.png 300w, https://dewabiz.com/wp-content/uploads/2023/03/apel-768x358.png 768w, https://dewabiz.com/wp-content/uploads/2023/03/apel.png 1039w" sizes="(max-width: 1024px) 100vw, 1024px"></figure>
                                        </div>
                                        <div class="owl-item cloned" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="248" height="115" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/indopolitika.png" alt="" class="wp-image-50083" srcset="https://dewabiz.com/wp-content/uploads/2023/08/indopolitika.png 248w, https://dewabiz.com/wp-content/uploads/2023/08/indopolitika-24x11.png 24w, https://dewabiz.com/wp-content/uploads/2023/08/indopolitika-36x17.png 36w, https://dewabiz.com/wp-content/uploads/2023/08/indopolitika-48x22.png 48w" sizes="(max-width: 248px) 100vw, 248px"></figure>
                                        </div>
                                        <div class="owl-item cloned" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="248" height="115" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/xnews.png" alt="" class="wp-image-50084" srcset="https://dewabiz.com/wp-content/uploads/2023/08/xnews.png 248w, https://dewabiz.com/wp-content/uploads/2023/08/xnews-24x11.png 24w, https://dewabiz.com/wp-content/uploads/2023/08/xnews-36x17.png 36w, https://dewabiz.com/wp-content/uploads/2023/08/xnews-48x22.png 48w" sizes="(max-width: 248px) 100vw, 248px"></figure>
                                        </div>
                                        <div class="owl-item cloned" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="130" height="40" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/logo-hotel-co-id.png" alt="" class="wp-image-50150" srcset="https://dewabiz.com/wp-content/uploads/2023/08/logo-hotel-co-id.png 130w, https://dewabiz.com/wp-content/uploads/2023/08/logo-hotel-co-id-24x7.png 24w, https://dewabiz.com/wp-content/uploads/2023/08/logo-hotel-co-id-36x11.png 36w, https://dewabiz.com/wp-content/uploads/2023/08/logo-hotel-co-id-48x15.png 48w" sizes="(max-width: 130px) 100vw, 130px"></figure>
                                        </div>
                                        <div class="owl-item cloned" style="width: 137.5px; margin-right: 20px;">
                                            <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="248" height="115" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/cashplus-news.png" alt="" class="wp-image-50082" srcset="https://dewabiz.com/wp-content/uploads/2023/08/cashplus-news.png 248w, https://dewabiz.com/wp-content/uploads/2023/08/cashplus-news-24x11.png 24w, https://dewabiz.com/wp-content/uploads/2023/08/cashplus-news-36x17.png 36w, https://dewabiz.com/wp-content/uploads/2023/08/cashplus-news-48x22.png 48w" sizes="(max-width: 248px) 100vw, 248px"></figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav disabled">
                                    <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                                </div>
                                <div class="owl-dots disabled"></div>
                                </figure>
                            </div> --}}
                        </div>
                    </div>
                    </article></main>
                </div>
            </div>
        </div>
        <div class="site-footer">
            {{-- <div class="gb-container gb-container-59cdf8c5" id="cs">
                <div class="gb-container gb-container-bdfa22d2 shadow">
                    <div class="gb-container gb-container-cadfc1ef">
                        <figure class="gb-block-image gb-block-image-0033173b"><img decoding="async" class="gb-image gb-image-0033173b" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/hot-sale.svg" alt="" title="hot-sale"></figure>
                        <h2 class="gb-headline gb-headline-5bfdfda2 gb-headline-text gb-headline-5bf34da2">Promo VPS Windows!</h2>
                        <h2 class="gb-headline gb-headline-aee571d0 gb-headline-text gb-headline-5bf34da2">RDP Speed Kencang Mulai Rp 85.000</h2>
                        <p>
                            Jangan lewatkan kesempatan istimewa ini! Dapatkan VPS Windows eksklusif hanya dengan Rp 85.000. Segera tingkatkan kinerja website atau aplikasi Anda dengan VPS handal kami. Promo terbatas, ayo segera pesan sekarang sebelum kehabisan!
                        </p>
                        <a class="gb-button gb-button-3df5fef7 gb-button-text gb-button-95967219 gb-button-3395fef7" href="https://my.dewabiz.com/cart.php?a=add&amp;pid=513">Mulai Sekarang</a>
                    </div>
                    <figure class="gb-block-image gb-block-image-aza19b57"><img loading="lazy" decoding="async" width="361" height="303" class="gb-image gb-image-aza19b57 gb-block-image-9ba19b57" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/dewa-icon.png" alt="" title="dewa-icon" srcset="https://dewabiz.com/wp-content/uploads/2023/08/dewa-icon.png 361w, https://dewabiz.com/wp-content/uploads/2023/08/dewa-icon-300x252.png 300w, https://dewabiz.com/wp-content/uploads/2023/08/dewa-icon-24x20.png 24w, https://dewabiz.com/wp-content/uploads/2023/08/dewa-icon-36x30.png 36w, https://dewabiz.com/wp-content/uploads/2023/08/dewa-icon-48x40.png 48w" sizes="(max-width: 361px) 100vw, 361px"></figure>
                    <div class="gb-shapes">
                        <div class="gb-shape gb-shape-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1200 96.2" preserveaspectratio="none"><path d="M0 96.2h1200V72.9l-50-8.9c-50-8.6-150-26.9-250-22.2C800 46.2 700 72.9 600 64 500 55.4 400 10.4 300 1.8 200-7.1 100 19.5 50 32.9L0 46.2v50z"></path></svg>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="gb-container gb-container-ff1cfe28" id="footer">
                <div class="gb-container gb-container-b1d97514 grid-container">
                    <div class="gb-container gb-container-d048af9b">
                        <figure class="gb-block-image gb-block-image-34af6f03"><img decoding="async" class="gb-image gb-image-34af6f03" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/logo_big_inverse.svg" alt="" title="logo_big_inverse"></figure>
                        <div class="gb-headline gb-headline-313001bf gb-headline-text">
                            CLP Loyalty adalah  perusahaan yang menyediakan layanan website yang dapat digunakan untuk membuat promo, voucher, menjual product dan lainnya.
                        </div>
                        <ul class="wp-block-social-links has-icon-color is-style-logos-only is-layout-flex wp-block-social-links-is-layout-flex">
                            <li style="color: var(--base-2); " class="wp-social-link wp-social-link-facebook has-base-2-color wp-block-social-link">
                                <a href="https://id-id.facebook.com/DewaBizMedia/" class="wp-block-social-link-anchor"><svg width="24" height="24" viewbox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z"></path></svg><span class="wp-block-social-link-label screen-reader-text">Facebook</span></a>
                            </li>
                            <li style="color: var(--base-2); " class="wp-social-link wp-social-link-twitter has-base-2-color wp-block-social-link">
                                <a href="https://twitter.com/dewabizmedia" class="wp-block-social-link-anchor"><svg width="24" height="24" viewbox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M22.23,5.924c-0.736,0.326-1.527,0.547-2.357,0.646c0.847-0.508,1.498-1.312,1.804-2.27 c-0.793,0.47-1.671,0.812-2.606,0.996C18.324,4.498,17.257,4,16.077,4c-2.266,0-4.103,1.837-4.103,4.103 c0,0.322,0.036,0.635,0.106,0.935C8.67,8.867,5.647,7.234,3.623,4.751C3.27,5.357,3.067,6.062,3.067,6.814 c0,1.424,0.724,2.679,1.825,3.415c-0.673-0.021-1.305-0.206-1.859-0.513c0,0.017,0,0.034,0,0.052c0,1.988,1.414,3.647,3.292,4.023 c-0.344,0.094-0.707,0.144-1.081,0.144c-0.264,0-0.521-0.026-0.772-0.074c0.522,1.63,2.038,2.816,3.833,2.85 c-1.404,1.1-3.174,1.756-5.096,1.756c-0.331,0-0.658-0.019-0.979-0.057c1.816,1.164,3.973,1.843,6.29,1.843 c7.547,0,11.675-6.252,11.675-11.675c0-0.178-0.004-0.355-0.012-0.531C20.985,7.47,21.68,6.747,22.23,5.924z"></path></svg><span class="wp-block-social-link-label screen-reader-text">Twitter</span></a>
                            </li>
                            <li style="color: var(--base-2); " class="wp-social-link wp-social-link-instagram has-base-2-color wp-block-social-link">
                                <a href="https://www.instagram.com/dewabizid/?hl=id" class="wp-block-social-link-anchor"><svg width="24" height="24" viewbox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z"></path></svg><span class="wp-block-social-link-label screen-reader-text">Instagram</span></a>
                            </li>
                            <li style="color: var(--base-2); " class="wp-social-link wp-social-link-linkedin has-base-2-color wp-block-social-link">
                                <a href="https://id.linkedin.com/company/dewabiz" class="wp-block-social-link-anchor"><svg width="24" height="24" viewbox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M19.7,3H4.3C3.582,3,3,3.582,3,4.3v15.4C3,20.418,3.582,21,4.3,21h15.4c0.718,0,1.3-0.582,1.3-1.3V4.3 C21,3.582,20.418,3,19.7,3z M8.339,18.338H5.667v-8.59h2.672V18.338z M7.004,8.574c-0.857,0-1.549-0.694-1.549-1.548 c0-0.855,0.691-1.548,1.549-1.548c0.854,0,1.547,0.694,1.547,1.548C8.551,7.881,7.858,8.574,7.004,8.574z M18.339,18.338h-2.669 v-4.177c0-0.996-0.017-2.278-1.387-2.278c-1.389,0-1.601,1.086-1.601,2.206v4.249h-2.667v-8.59h2.559v1.174h0.037 c0.356-0.675,1.227-1.387,2.526-1.387c2.703,0,3.203,1.779,3.203,4.092V18.338z"></path></svg><span class="wp-block-social-link-label screen-reader-text">LinkedIn</span></a>
                            </li>
                            <li style="color: var(--base-2); " class="wp-social-link wp-social-link-youtube has-base-2-color wp-block-social-link">
                                <a href="https://www.youtube.com/channel/UCC9u-XRFiqcj6B-_6iMzPdw" class="wp-block-social-link-anchor"><svg width="24" height="24" viewbox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M21.8,8.001c0,0-0.195-1.378-0.795-1.985c-0.76-0.797-1.613-0.801-2.004-0.847c-2.799-0.202-6.997-0.202-6.997-0.202 h-0.009c0,0-4.198,0-6.997,0.202C4.608,5.216,3.756,5.22,2.995,6.016C2.395,6.623,2.2,8.001,2.2,8.001S2,9.62,2,11.238v1.517 c0,1.618,0.2,3.237,0.2,3.237s0.195,1.378,0.795,1.985c0.761,0.797,1.76,0.771,2.205,0.855c1.6,0.153,6.8,0.201,6.8,0.201 s4.203-0.006,7.001-0.209c0.391-0.047,1.243-0.051,2.004-0.847c0.6-0.607,0.795-1.985,0.795-1.985s0.2-1.618,0.2-3.237v-1.517 C22,9.62,21.8,8.001,21.8,8.001z M9.935,14.594l-0.001-5.62l5.404,2.82L9.935,14.594z"></path></svg><span class="wp-block-social-link-label screen-reader-text">YouTube</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="gb-container gb-container-ac5bd20c">
                        <h2 class="gb-headline gb-headline-982e7eaa gb-headline-text">Contact Info</h2>
                        <div class="gb-headline gb-headline-156a9c88 gb-headline-text">Office</div>
                        <div class="gb-headline gb-headline-1623c394 gb-headline-text">
                            Ruko Sentra Kota Blok F2 No 25<br>Jatibening, Pondok Gede, Bekasi</div>
                        <a class="gb-button gb-button-5731fea8 gb-button-text gb-button-09be3cd9" href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x2e69f3ce27cea8bd:0x410dc3e6b087d59d?source=g.page.share" target="_blank" rel="noopener noreferrer">Lihat Peta</a>
                        <div class="gb-container gb-container-c1519e6d">
                            <div class="gb-headline gb-headline-084784a9">
                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-telephone-outbound" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z"></path></svg></span><span class="gb-headline-text"><a href="https://dewabiz.com/#">+62852-1522-2259</a></span>
                            </div>
                            <div class="gb-headline gb-headline-70c0034c">
                                <span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-envelope-paper" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M4 0a2 2 0 0 0-2 2v1.133l-.941.502A2 2 0 0 0 0 5.4V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5.4a2 2 0 0 0-1.059-1.765L14 3.133V2a2 2 0 0 0-2-2H4Zm10 4.267.47.25A1 1 0 0 1 15 5.4v.817l-1 .6v-2.55Zm-1 3.15-3.75 2.25L8 8.917l-1.25.75L3 7.417V2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v5.417Zm-11-.6-1-.6V5.4a1 1 0 0 1 .53-.882L2 4.267v2.55Zm13 .566v5.734l-4.778-2.867L15 7.383Zm-.035 6.88A1 1 0 0 1 14 15H2a1 1 0 0 1-.965-.738L8 10.083l6.965 4.18ZM1 13.116V7.383l4.778 2.867L1 13.117Z"></path></svg></span><span class="gb-headline-text"><a href="mailto:info@dewabiz.com"></a><a href="mailto:info@dewabiz.com">info@dewabiz.com</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="gb-container gb-container-fa578462">
                        <h2 class="gb-headline gb-headline-3b436733 gb-headline-text">Layanan</h2>
                        <div class="gb-container gb-container-c12410c4">
                            <nav class=" is-vertical wp-block-navigation is-layout-flex wp-container-core-navigation-layout-1 wp-block-navigation-is-layout-flex" aria-label="Footer 1">
                            <ul class="wp-block-navigation__container is-vertical wp-block-navigation">
                                <li class=" wp-block-navigation-item wp-block-navigation-link">
                                    <a class="wp-block-navigation-item__content" href="https://dewabiz.com/hosting-murah/"><span class="wp-block-navigation-item__label">Web Hosting</span></a>
                                </li>
                                <li class=" wp-block-navigation-item wp-block-navigation-link">
                                    <a class="wp-block-navigation-item__content" href="https://dewabiz.com/domain/"><span class="wp-block-navigation-item__label">Domain</span></a>
                                </li>
                                <li class=" wp-block-navigation-item wp-block-navigation-link">
                                    <a class="wp-block-navigation-item__content" href="https://dewabiz.com/semi-dedicated/"><span class="wp-block-navigation-item__label">Semi Dedicated</span></a>
                                </li>
                                <li class=" wp-block-navigation-item wp-block-navigation-link">
                                    <a class="wp-block-navigation-item__content" href="https://dewabiz.com/wordpress-hosting/"><span class="wp-block-navigation-item__label">WordPress Hosting</span></a>
                                </li>
                                <li class=" wp-block-navigation-item wp-block-navigation-link">
                                    <a class="wp-block-navigation-item__content" href="https://dewabiz.com/reseller-domain/"><span class="wp-block-navigation-item__label">Reseller Domain</span></a>
                                </li>
                                <li class=" wp-block-navigation-item wp-block-navigation-link">
                                    <a class="wp-block-navigation-item__content" href="https://dewabiz.com/jasa-backlink-murah/"><span class="wp-block-navigation-item__label">Jasa Backlink</span></a>
                                </li>
                                <li class=" wp-block-navigation-item wp-block-navigation-link">
                                    <a class="wp-block-navigation-item__content" href="https://lg.dewabiz.com/"><span class="wp-block-navigation-item__label">Looking Glass</span></a>
                                </li>
                                <li class=" wp-block-navigation-item wp-block-navigation-link">
                                    <a class="wp-block-navigation-item__content" href="https://mirror.dewabiz.com/"><span class="wp-block-navigation-item__label">Mirror Repository</span></a>
                                </li>
                            </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="gb-container gb-container-e85a5cd4">
                        <h2 class="gb-headline gb-headline-3f4d5d54 gb-headline-text">Informasi</h2>
                        <div class="gb-container gb-container-7bdd9dd3">
                            <nav class=" is-vertical wp-block-navigation is-layout-flex wp-container-core-navigation-layout-2 wp-block-navigation-is-layout-flex" aria-label="Footer 4">
                            <ul class="wp-block-navigation__container is-vertical wp-block-navigation">
                                <li class=" wp-block-navigation-item wp-block-navigation-link">
                                    <a class="wp-block-navigation-item__content" href="https://my.dewabiz.com/announcements"><span class="wp-block-navigation-item__label">News</span></a>
                                </li>
                                <li class=" wp-block-navigation-item wp-block-navigation-link">
                                    <a class="wp-block-navigation-item__content" href="https://dewabiz.com/promo"><span class="wp-block-navigation-item__label">Promo</span></a>
                                </li>
                                <li class=" wp-block-navigation-item wp-block-navigation-link">
                                    <a class="wp-block-navigation-item__content" href="https://my.dewabiz.com/serverstatus.php"><span class="wp-block-navigation-item__label">Server Status</span></a>
                                </li>
                                <li class=" wp-block-navigation-item wp-block-navigation-link">
                                    <a class="wp-block-navigation-item__content" href="https://dewabiz.com/affiliate/"><span class="wp-block-navigation-item__label">Affiliate</span></a>
                                </li>
                                <li class=" wp-block-navigation-item wp-block-navigation-link">
                                    <a class="wp-block-navigation-item__content" href="https://dewabiz.com/contact/"><span class="wp-block-navigation-item__label">Kontak</span></a>
                                </li>
                                <li class=" wp-block-navigation-item wp-block-navigation-link">
                                    <a class="wp-block-navigation-item__content" href="https://dewabiz.com/about-us/"><span class="wp-block-navigation-item__label">Tentang Kami</span></a>
                                </li>
                                <li class=" wp-block-navigation-item wp-block-navigation-link">
                                    <a class="wp-block-navigation-item__content" href="https://dewabiz.com/tos/"><span class="wp-block-navigation-item__label">TOS</span></a>
                                </li>
                            </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="gb-container gb-container-724f70ef grid-container">
                    <div class="gb-container gb-container-a3f5a4b4">
                        <div class="gb-headline gb-headline-ae19627a gb-headline-text">
                            © 2024 PT CLP Loyalty
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav id="generate-slideout-menu" class="main-navigation slideout-navigation offside offside--right" itemtype="https://schema.org/SiteNavigationElement" itemscope="">
        <div class="inside-navigation grid-container grid-parent">
            <button class="slideout-exit has-svg-icon"><span class="gp-icon pro-close">
            <svg viewbox="0 0 512 512" aria-hidden="true" role="img" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1em" height="1em">
            <path d="M71.029 71.029c9.373-9.372 24.569-9.372 33.942 0L256 222.059l151.029-151.03c9.373-9.372 24.569-9.372 33.942 0 9.372 9.373 9.372 24.569 0 33.942L289.941 256l151.03 151.029c9.372 9.373 9.372 24.569 0 33.942-9.373 9.372-24.569 9.372-33.942 0L256 289.941l-151.029 151.03c-9.373 9.372-24.569 9.372-33.942 0-9.372-9.373-9.372-24.569 0-33.942L222.059 256 71.029 104.971c-9.372-9.373-9.372-24.569 0-33.942z"></path>
            </svg>
            </span><span class="screen-reader-text">Close</span></button>
            <div class="main-nav">
                <ul id="menu-mobile-off-canvas" class=" slideout-menu">
                    <li id="menu-item-48780" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-48780">
                        <a href="https://dewabiz.com/" aria-current="page" class="menu-image-title-after menu-image-not-hovered"><img width="21" height="21" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/server.svg" class="menu-image menu-image-title-after" alt="" decoding="async" loading="lazy"><span class="menu-image-title-after menu-image-title">HOSTING</span><span role="button" class="dropdown-menu-toggle" tabindex="0" aria-expanded="true"><span class="gp-icon icon-arrow"><svg viewbox="0 0 330 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"><path d="M305.913 197.085c0 2.266-1.133 4.815-2.833 6.514L171.087 335.593c-1.7 1.7-4.249 2.832-6.515 2.832s-4.815-1.133-6.515-2.832L26.064 203.599c-1.7-1.7-2.832-4.248-2.832-6.514s1.132-4.816 2.832-6.515l14.162-14.163c1.7-1.699 3.966-2.832 6.515-2.832 2.266 0 4.815 1.133 6.515 2.832l111.316 111.317 111.316-111.317c1.7-1.699 4.249-2.832 6.515-2.832s4.815 1.133 6.515 2.832l14.162 14.163c1.7 1.7 2.833 4.249 2.833 6.515z"></path></svg></span></span><span class="description"></span></a>
                        <ul class="sub-menu">
                            <li id="menu-item-48783" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48783">
                                <a href="https://dewabiz.com/hosting-super/">Hosting Super<span class="description">Harga Mulai Rp 50K/Bulan</span></a>
                            </li>
                            <li id="menu-item-48784" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48784">
                                <a href="https://dewabiz.com/wordpress-hosting/">WordPress Hosting<span class="description">Hosting Wordpress Rp 42,970/bln</span></a>
                            </li>
                            <li id="menu-item-48785" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48785">
                                <a href="https://dewabiz.com/hosting-murah/">Unlimited Hosting<span class="description">Pilihan hosting termurah &amp; terbaik</span></a>
                            </li>
                            <li id="menu-item-48786" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48786">
                                <a href="https://dewabiz.com/mail-hosting/">Mail Hosting<span class="description">Gunakan email proffesional untuk bisnismu!</span></a>
                            </li>
                        </ul>
                    </li>
                    <li id="menu-item-48787" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-48787">
                        <a href="https://dewabiz.com/" aria-current="page" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/domain-white.svg" class="menu-image menu-image-title-after" alt="" decoding="async" loading="lazy"><span class="menu-image-title-after menu-image-title">DOMAIN</span><span role="button" class="dropdown-menu-toggle" tabindex="0" aria-expanded="true"><span class="gp-icon icon-arrow"><svg viewbox="0 0 330 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"><path d="M305.913 197.085c0 2.266-1.133 4.815-2.833 6.514L171.087 335.593c-1.7 1.7-4.249 2.832-6.515 2.832s-4.815-1.133-6.515-2.832L26.064 203.599c-1.7-1.7-2.832-4.248-2.832-6.514s1.132-4.816 2.832-6.515l14.162-14.163c1.7-1.699 3.966-2.832 6.515-2.832 2.266 0 4.815 1.133 6.515 2.832l111.316 111.317 111.316-111.317c1.7-1.699 4.249-2.832 6.515-2.832s4.815 1.133 6.515 2.832l14.162 14.163c1.7 1.7 2.833 4.249 2.833 6.515z"></path></svg></span></span><span class="description"></span></a>
                        <ul class="sub-menu">
                            <li id="menu-item-48792" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48792">
                                <a href="https://dewabiz.com/domain/">Domain Murah<span class="description"></span></a>
                            </li>
                            <li id="menu-item-48796" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-48796">
                                <a href="https://dewabiz.com/reseller-domain/">Reseller Domain<span class="description"></span></a>
                            </li>
                            <li id="menu-item-48793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48793">
                                <a href="https://dewabiz.com/domain-backorder/">Domain Backorder<span class="description"></span></a>
                            </li>
                            <li id="menu-item-48795" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-48795">
                                <a href="https://my.dewabiz.com/domainmarket.php">Lelang Domain<span class="description"></span></a>
                            </li>
                            <li id="menu-item-48797" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48797">
                                <a href="https://dewabiz.com/transfer-domain/">Transfer Domain<span class="description"></span></a>
                            </li>
                            <li id="menu-item-48794" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48794">
                                <a href="https://dewabiz.com/domain-id/">Domain ID<span class="description"></span></a>
                            </li>
                        </ul>
                    </li>
                    <li id="menu-item-48799" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48799">
                        <a href="https://dewabiz.com/ssl-certificate/" class="menu-image-title-after menu-image-not-hovered"><img width="36" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/ssl-white.svg" class="menu-image menu-image-title-after" alt="" decoding="async" loading="lazy"><span class="menu-image-title-after menu-image-title">SSL Certificate</span><span class="description"></span></a>
                    </li>
                    <li id="menu-item-48802" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48802">
                        <a href="https://dewabiz.com/pricing/" class="menu-image-title-after menu-image-not-hovered"><img width="21" height="21" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/server.svg" class="menu-image menu-image-title-after" alt="" decoding="async" loading="lazy"><span class="menu-image-title-after menu-image-title">Pricing</span><span class="description"></span></a>
                    </li>
                    <li id="menu-item-48803" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48803">
                        <a href="https://dewabiz.com/promo-list/" class="menu-image-title-after menu-image-not-hovered"><img width="31" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/promo-white.svg" class="menu-image menu-image-title-after" alt="" decoding="async" loading="lazy"><span class="menu-image-title-after menu-image-title">Promo</span><span class="description"></span></a>
                    </li>
                    <li id="menu-item-49709" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49709">
                        <a href="https://dewabiz.com/blog/" class="menu-image-title-after menu-image-not-hovered"><img width="31" height="36" src="./DewaBiz.com_ Web Hosting, Server &amp; Domain Murah_files/promo-white.svg" class="menu-image menu-image-title-after" alt="" decoding="async" loading="lazy"><span class="menu-image-title-after menu-image-title">Blog</span><span class="description"></span></a>
                    </li>
                </ul>
            </div>
            <div class="gb-container gb-container-7d4b5781">
                <div class="gb-container gb-container-01sdfeef" id="top-nav">
                    <a class="gb-button gb-button-3dsdc72d gb-button-3d1ac72d" href="https://my.dewabiz.com/supporttickets.php"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-chat" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"></path></svg></span><span class="gb-button-text">Support</span></a><a class="gb-button gb-button-308sd6eb gb-button-3086e6eb" href="https://wa.me/6285215222259"><span class="gb-icon"><svg viewbox="0 0 16 16" class="bi bi-whatsapp" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path></svg></span><span class="gb-button-text">WhatsApp CS 24/7</span></a>
                </div>
                <div class="gb-container gb-container-a3c08ae6">
                    <a class="gb-button gb-button-e5900724 gb-button-text" href="https://my.dewabiz.com/login">Member Area</a>
                </div>
            </div>
        </div>
        </nav>
        <div class="slideout-overlay"></div>
@endsection
