<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles
        @livewireScripts

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Tailwind --}}
        <link rel="stylesheet" href="{{ asset('src/css/output.css') }}">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


        {{-- template dari dewabiz --}}
            {{-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> --}}
            {{-- <script src="{{ asset('src/template/twk-main.js.download') }}" charset="UTF-8" crossorigin="*"></script>
            <script src="{{ asset('src/template/twk-vendor.js.download') }}" charset="UTF-8" crossorigin="*"></script>
            <script src="{{ asset('src/template/twk-chunk-vendors.js.download') }}" charset="UTF-8" crossorigin="*"></script> --}}
            {{-- <script src="{{ asset('src/template/twk-chunk-common.js.download') }}" charset="UTF-8" crossorigin="*"></script> --}}
            {{-- <script src="{{ asset('src/template/twk-runtime.js.download') }}" charset="UTF-8" crossorigin="*"></script> --}}
            {{-- <script src="{{ asset('src/template/twk-app.js.download') }}" charset="UTF-8" crossorigin="*"></script>
            <script type="text/javascript" async="" src="{{ asset('src/template/analytics.js.download') }}"></script>
            <script type="text/javascript" async="" src="{{ asset('src/template/js') }}"></script>
            <script async="" src="{{ asset('src/template/1fhcv01e1') }}" charset="UTF-8" crossorigin="*"></script>
            <script src="{{ asset('src/template/149374275497861') }}" async=""></script> --}}
            {{-- <script src="{{ asset('src/template/openbridge3.js.download') }}" async=""></script> --}}
            {{-- <script async="" src="{{ asset('src/template/fbevents.js.download') }}"></script> --}}
            {{-- <script type="text/javascript" async="" src="{{ asset('src/template/js(1)') }}"></script>
            <script data-no-optimize="1">var litespeed_docref=sessionStorage.getItem("litespeed_docref");litespeed_docref&&(Object.defineProperty(document,"referrer",{get:function(){return litespeed_docref}}),sessionStorage.removeItem("litespeed_docref"));</script>
            <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
            {{-- <link rel="prefetch" href="https://dewabiz.com/pwa-manifest.json">
            <link rel="manifest" href="https://dewabiz.com/pwa-manifest.json"> --}}
            {{-- <link rel="apple-touch-icon" sizes="512x512" href="https://dewabiz.com/wp-content/uploads/2021/02/icon-512x512-1.png">
            <link rel="apple-touch-icon-precomposed" sizes="192x192" href="https://dewabiz.com/wp-content/uploads/2021/02/icon-192x192-1.png">
            <title>DewaBiz.com: Web Hosting, Server &amp; Domain Murah</title>
            <meta name="description" content="Web Hosting Murah, VPS dan Domain Murah Terbaik di Indonesia Fitur Lengkap, Uptime 99%, Garansi Uang Kembali, Performa dan Aktivasi Cepat!">
            <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
            <link rel="canonical" href="https://dewabiz.com/">
            <meta property="og:locale" content="en_US">
            <meta property="og:type" content="website">
            <meta property="og:title" content="DewaBiz.com: Web Hosting, Server &amp; Domain Murah">
            <meta property="og:description" content="Web Hosting Murah, VPS dan Domain Murah Terbaik di Indonesia Fitur Lengkap, Uptime 99%, Garansi Uang Kembali, Performa dan Aktivasi Cepat!">
            <meta property="og:url" content="https://dewabiz.com/">
            <meta property="og:updated_time" content="2024-01-03T07:00:27+07:00">
            <meta property="fb:app_id" content="1046871135361991">
            <meta property="og:image" content="https://dewabiz.com/wp-content/uploads/2019/10/logo-dewabiz-square.png">
            <meta property="og:image:secure_url" content="https://dewabiz.com/wp-content/uploads/2019/10/logo-dewabiz-square.png">
            <meta property="og:image:width" content="324">
            <meta property="og:image:height" content="324">
            <meta property="og:image:alt" content="hosting murah">
            <meta property="og:image:type" content="image/png">
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:title" content="DewaBiz.com: Web Hosting, Server &amp; Domain Murah">
            <meta name="twitter:description" content="Web Hosting Murah, VPS dan Domain Murah Terbaik di Indonesia Fitur Lengkap, Uptime 99%, Garansi Uang Kembali, Performa dan Aktivasi Cepat!">
            <meta name="twitter:site" content="@DewaBizMedia">
            <meta name="twitter:creator" content="@dewabizmedia">
            <meta name="twitter:image" content="https://dewabiz.com/wp-content/uploads/2019/10/logo-dewabiz-square.png">
            <meta name="twitter:label1" content="Written by">
            <meta name="twitter:data1" content="dewabiz">
            <meta name="twitter:label2" content="Time to read">
            <meta name="twitter:data2" content="7 minutes">
            <script type="application/ld+json" class="rank-math-schema-pro">{"@context":"https://schema.org","@graph":[{"@type":"Place","@id":"https://dewabiz.com/#place","address":{"@type":"PostalAddress","streetAddress":"RUKO SENTRA KOTA BLOK F2/ NO. 25","addressLocality":"PONDOKGEDE","addressRegion":"KOTA BEKASI","postalCode":"17412","addressCountry":"INDONESIA"}},{"@type":["LocalBusiness","Organization"],"@id":"https://dewabiz.com/#organization","name":"DewaBiz.com","url":"https://dewabiz.com","sameAs":["https://www.facebook.com/DewaBizMedia/","https://twitter.com/DewaBizMedia","https://instagram.com/dewabizid","https://www.linkedin.com/company/dewabiz","https://www.youtube.com/channel/UCC9u-XRFiqcj6B-_6iMzPdw","https://id.wikipedia.org/wiki/Dewabiz"],"email":"info@dewabiz.com","address":{"@type":"PostalAddress","streetAddress":"RUKO SENTRA KOTA BLOK F2/ NO. 25","addressLocality":"PONDOKGEDE","addressRegion":"KOTA BEKASI","postalCode":"17412","addressCountry":"INDONESIA"},"logo":{"@type":"ImageObject","@id":"https://dewabiz.com/#logo","url":"https://dewabiz.com/wp-content/uploads/2023/08/logo_big_inverse.svg","contentUrl":"https://dewabiz.com/wp-content/uploads/2023/08/logo_big_inverse.svg","inLanguage":"en-US","width":"0","height":"0"},"priceRange":"IDR 9900","location":{"@id":"https://dewabiz.com/#place"},"image":{"@id":"https://dewabiz.com/#logo"},"telephone":"+62 852-1522-2259"},{"@type":"WebSite","@id":"https://dewabiz.com/#website","url":"https://dewabiz.com","publisher":{"@id":"https://dewabiz.com/#organization"},"inLanguage":"en-US","potentialAction":{"@type":"SearchAction","target":"https://dewabiz.com/?s={search_term_string}","query-input":"required name=search_term_string"}},{"@type":"ImageObject","@id":"https://dewabiz.com/wp-content/uploads/2019/10/logo-dewabiz-square.png","url":"https://dewabiz.com/wp-content/uploads/2019/10/logo-dewabiz-square.png","width":"324","height":"324","inLanguage":"en-US"},{"@type":"WebPage","@id":"https://dewabiz.com/#webpage","url":"https://dewabiz.com/","name":"DewaBiz.com: Web Hosting, Server &amp; Domain Murah","datePublished":"2018-09-19T01:32:56+07:00","dateModified":"2024-01-03T07:00:27+07:00","about":{"@id":"https://dewabiz.com/#organization"},"isPartOf":{"@id":"https://dewabiz.com/#website"},"primaryImageOfPage":{"@id":"https://dewabiz.com/wp-content/uploads/2019/10/logo-dewabiz-square.png"},"inLanguage":"en-US"}]}</script>
            <link rel="dns-prefetch" href="https://static.addtoany.com/">
            <link rel="dns-prefetch" href="https://s.w.org/">
            <link rel="dns-prefetch" href="https://maps.googleapis.com/">
            <link rel="dns-prefetch" href="https://maps.gstatic.com/">
            <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
            <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
            <link rel="dns-prefetch" href="https://ajax.googleapis.com/">
            <link rel="dns-prefetch" href="https://apis.google.com/">
            <link rel="dns-prefetch" href="https://google-analytics.com/">
            <link rel="dns-prefetch" href="https://www.google-analytics.com/">
            <link rel="dns-prefetch" href="https://ssl.google-analytics.com/">
            <link rel="dns-prefetch" href="https://youtube.com/">
            <link rel="dns-prefetch" href="https://api.pinterest.com/">
            <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com/">
            <link rel="dns-prefetch" href="https://connect.facebook.net/">
            <link rel="dns-prefetch" href="https://platform.twitter.com/">
            <link rel="dns-prefetch" href="https://syndication.twitter.com/">
            <link rel="dns-prefetch" href="https://platform.instagram.com/">
            <link rel="dns-prefetch" href="https://disqus.com/">
            <link rel="dns-prefetch" href="https://sitename.disqus.com/">
            <link rel="dns-prefetch" href="https://s7.addthis.com/">
            <link rel="dns-prefetch" href="https://platform.linkedin.com/">
            <link rel="dns-prefetch" href="https://w.sharethis.com/">
            <link rel="dns-prefetch" href="https://i0.wp.com/">
            <link rel="dns-prefetch" href="https://i1.wp.com/">
            <link rel="dns-prefetch" href="https://i2.wp.com/">
            <link rel="dns-prefetch" href="https://stats.wp.com/">
            <link rel="dns-prefetch" href="https://pixel.wp.com/">
            <link rel="dns-prefetch" href="https://s.gravatar.com/">
            <link rel="dns-prefetch" href="https://0.gravatar.com/">
            <link rel="dns-prefetch" href="https://2.gravatar.com/">
            <link rel="dns-prefetch" href="https://1.gravatar.com/">
            <link href="https://fonts.gstatic.com/" crossorigin="" rel="preconnect">
            <link href="https://fonts.googleapis.com/" crossorigin="" rel="preconnect">
            <link rel="alternate" type="application/rss+xml" title="DewaBiz.com » Feed" href="https://dewabiz.com/feed/">
            <link rel="alternate" type="application/rss+xml" title="DewaBiz.com » Comments Feed" href="https://dewabiz.com/comments/feed/">
            <script src="{{ asset('src/template/js(2)') }}" data-cfasync="false" data-wpfc-render="false" async=""></script>
            <script data-cfasync="false" data-wpfc-render="false">var mi_version = '8.23.1';
                            var mi_track_user = true;
                            var mi_no_track_reason = '';
                                            var disableStrs = [
                                                    'ga-disable-G-BHBRJYPHR8',
                                                ];
                            /* Function to detect opted out users */
                            function __gtagTrackerIsOptedOut() {
                                for (var index = 0; index < disableStrs.length; index++) {
                                    if (document.cookie.indexOf(disableStrs[index] + '=true') > -1) {
                                        return true;
                                    }
                                }
                                return false;
                            }
                            /* Disable tracking if the opt-out cookie exists. */
                            if (__gtagTrackerIsOptedOut()) {
                                for (var index = 0; index < disableStrs.length; index++) {
                                    window[disableStrs[index]] = true;
                                }
                            }
                            /* Opt-out function */
                            function __gtagTrackerOptout() {
                                for (var index = 0; index < disableStrs.length; index++) {
                                    document.cookie = disableStrs[index] + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
                                    window[disableStrs[index]] = true;
                                }
                            }
                            if ('undefined' === typeof gaOptout) {
                                function gaOptout() {
                                    __gtagTrackerOptout();
                                }
                            }
                                            window.dataLayer = window.dataLayer || [];
                            window.MonsterInsightsDualTracker = {
                                helpers: {},
                                trackers: {},
                            };
                            if (mi_track_user) {
                                function __gtagDataLayer() {
                                    dataLayer.push(arguments);
                                }
                                function __gtagTracker(type, name, parameters) {
                                    if (!parameters) {
                                        parameters = {};
                                    }
                                    if (parameters.send_to) {
                                        __gtagDataLayer.apply(null, arguments);
                                        return;
                                    }
                                    if (type === 'event') {
                                                                    parameters.send_to = monsterinsights_frontend.v4_id;
                                        var hookName = name;
                                        if (typeof parameters['event_category'] !== 'undefined') {
                                            hookName = parameters['event_category'] + ':' + name;
                                        }
                                        if (typeof MonsterInsightsDualTracker.trackers[hookName] !== 'undefined') {
                                            MonsterInsightsDualTracker.trackers[hookName](parameters);
                                        } else {
                                            __gtagDataLayer('event', name, parameters);
                                        }
                                    } else {
                                        __gtagDataLayer.apply(null, arguments);
                                    }
                                }
                                __gtagTracker('js', new Date());
                                __gtagTracker('set', {
                                    'developer_id.dZGIzZG': true,
                                                        });
                                                    __gtagTracker('config', 'G-BHBRJYPHR8', {"forceSSL":"true","link_attribution":"true"} );
                                                                        window.gtag = __gtagTracker;										(function () {
                                    /* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
                                    /* ga and __gaTracker compatibility shim. */
                                    var noopfn = function () {
                                        return null;
                                    };
                                    var newtracker = function () {
                                        return new Tracker();
                                    };
                                    var Tracker = function () {
                                        return null;
                                    };
                                    var p = Tracker.prototype;
                                    p.get = noopfn;
                                    p.set = noopfn;
                                    p.send = function () {
                                        var args = Array.prototype.slice.call(arguments);
                                        args.unshift('send');
                                        __gaTracker.apply(null, args);
                                    };
                                    var __gaTracker = function () {
                                        var len = arguments.length;
                                        if (len === 0) {
                                            return;
                                        }
                                        var f = arguments[len - 1];
                                        if (typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function') {
                                            if ('send' === arguments[0]) {
                                                var hitConverted, hitObject = false, action;
                                                if ('event' === arguments[1]) {
                                                    if ('undefined' !== typeof arguments[3]) {
                                                        hitObject = {
                                                            'eventAction': arguments[3],
                                                            'eventCategory': arguments[2],
                                                            'eventLabel': arguments[4],
                                                            'value': arguments[5] ? arguments[5] : 1,
                                                        }
                                                    }
                                                }
                                                if ('pageview' === arguments[1]) {
                                                    if ('undefined' !== typeof arguments[2]) {
                                                        hitObject = {
                                                            'eventAction': 'page_view',
                                                            'page_path': arguments[2],
                                                        }
                                                    }
                                                }
                                                if (typeof arguments[2] === 'object') {
                                                    hitObject = arguments[2];
                                                }
                                                if (typeof arguments[5] === 'object') {
                                                    Object.assign(hitObject, arguments[5]);
                                                }
                                                if ('undefined' !== typeof arguments[1].hitType) {
                                                    hitObject = arguments[1];
                                                    if ('pageview' === hitObject.hitType) {
                                                        hitObject.eventAction = 'page_view';
                                                    }
                                                }
                                                if (hitObject) {
                                                    action = 'timing' === arguments[1].hitType ? 'timing_complete' : hitObject.eventAction;
                                                    hitConverted = mapArgs(hitObject);
                                                    __gtagTracker('event', action, hitConverted);
                                                }
                                            }
                                            return;
                                        }
                                        function mapArgs(args) {
                                            var arg, hit = {};
                                            var gaMap = {
                                                'eventCategory': 'event_category',
                                                'eventAction': 'event_action',
                                                'eventLabel': 'event_label',
                                                'eventValue': 'event_value',
                                                'nonInteraction': 'non_interaction',
                                                'timingCategory': 'event_category',
                                                'timingVar': 'name',
                                                'timingValue': 'value',
                                                'timingLabel': 'event_label',
                                                'page': 'page_path',
                                                'location': 'page_location',
                                                'title': 'page_title',
                                                'referrer' : 'page_referrer',
                                            };
                                            for (arg in args) {
                                                                                    if (!(!args.hasOwnProperty(arg) || !gaMap.hasOwnProperty(arg))) {
                                                    hit[gaMap[arg]] = args[arg];
                                                } else {
                                                    hit[arg] = args[arg];
                                                }
                                            }
                                            return hit;
                                        }
                                        try {
                                            f.hitCallback();
                                        } catch (ex) {
                                        }
                                    };
                                    __gaTracker.create = newtracker;
                                    __gaTracker.getByName = newtracker;
                                    __gaTracker.getAll = function () {
                                        return [];
                                    };
                                    __gaTracker.remove = noopfn;
                                    __gaTracker.loaded = true;
                                    window['__gaTracker'] = __gaTracker;
                                })();
                                                } else {
                                                    console.log("");
                                (function () {
                                    function __gtagTracker() {
                                        return null;
                                    }
                                    window['__gtagTracker'] = __gtagTracker;
                                    window['gtag'] = __gtagTracker;
                                })();
                                                }</script> --}}
            <link data-optimized="1" rel="stylesheet" id="wp-block-library-css" href="{{ asset('src/template/88cd8964b1c3d2272570a9ed83221c39.css') }}" media="all">
            <style id="rank-math-toc-block-style-inline-css">
            .wp-block-rank-math-toc-block nav ol{counter-reset:item}.wp-block-rank-math-toc-block nav ol li{display:block}.wp-block-rank-math-toc-block nav ol li:before{content:counters(item, ".") " ";counter-increment:item}
            </style>
            <style id="classic-theme-styles-inline-css">
            /*! This file is auto-generated */
            .wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
            </style>
            <style id="global-styles-inline-css">
            body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--contrast: var(--contrast);--wp--preset--color--contrast-2: var(--contrast-2);--wp--preset--color--base-2: var(--base-2);--wp--preset--color--accent: var(--accent);--wp--preset--color--tax-bg: var(--tax-bg);--wp--preset--color--tax-color: var(--tax-color);--wp--preset--color--base-3: var(--base-3);--wp--preset--color--red: var(--red);--wp--preset--color--yellow: var(--yellow);--wp--preset--color--green: var(--green);--wp--preset--color--global-color-8: var(--global-color-8);--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
            .wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
            :where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
            :where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
            .wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
            </style>
            <link data-optimized="1" rel="stylesheet" id="menu-image-css" href="{{ asset('src/template/eba3407e66a1af68b747e8a75370fff1.css') }}" media="all">
            <link data-optimized="1" rel="stylesheet" id="dashicons-css" href="{{ asset('src/template/a9d5f90f53733878059b5de1f6d7a859.css') }}" media="all">
            <link data-optimized="1" rel="stylesheet" id="owl-style-css" href="{{ asset('src/template/2789c7ec948c4d08e792e6d37a5a045c.css') }}" media="all">
            <link data-optimized="1" rel="stylesheet" id="owl-theme-style-css" href="{{ asset('src/template/db040ae32d7b2890ed5dcb8b566dadfc.css') }}" media="all">
            <link data-optimized="1" rel="stylesheet" id="generate-style-css" href="{{ asset('src/template/82d20cb90405038b938f5a1a19c16cbf.css') }}" media="all">
            <style id="generate-style-inline-css">
            body{background-color:#ffffff;color:var(--contrast);}a{color:var(--contrast-2);}a:hover, a:focus, a:active{color:var(--contrast);}.grid-container{max-width:1240px;}.wp-block-group__inner-container{max-width:1240px;margin-left:auto;margin-right:auto;}.site-header .header-image{width:160px;}:root{--contrast:#000000;--contrast-2:#116DFF;--base-2:#fff;--accent:#F15A28;--tax-bg:#f1f1f1;--tax-color:#000;--base-3:#fcfcfc;--red:#ff0000;--yellow:#f8bd47;--green:#00b090;--global-color-8:#044dc3;}:root .has-contrast-color{color:var(--contrast);}:root .has-contrast-background-color{background-color:var(--contrast);}:root .has-contrast-2-color{color:var(--contrast-2);}:root .has-contrast-2-background-color{background-color:var(--contrast-2);}:root .has-base-2-color{color:var(--base-2);}:root .has-base-2-background-color{background-color:var(--base-2);}:root .has-accent-color{color:var(--accent);}:root .has-accent-background-color{background-color:var(--accent);}:root .has-tax-bg-color{color:var(--tax-bg);}:root .has-tax-bg-background-color{background-color:var(--tax-bg);}:root .has-tax-color-color{color:var(--tax-color);}:root .has-tax-color-background-color{background-color:var(--tax-color);}:root .has-base-3-color{color:var(--base-3);}:root .has-base-3-background-color{background-color:var(--base-3);}:root .has-red-color{color:var(--red);}:root .has-red-background-color{background-color:var(--red);}:root .has-yellow-color{color:var(--yellow);}:root .has-yellow-background-color{background-color:var(--yellow);}:root .has-green-color{color:var(--green);}:root .has-green-background-color{background-color:var(--green);}:root .has-global-color-8-color{color:var(--global-color-8);}:root .has-global-color-8-background-color{background-color:var(--global-color-8);}body, button, input, select, textarea{font-family:Inter, sans-serif;font-size:16px;}body{line-height:25px;}h1.entry-title{font-family:Inter, sans-serif;font-weight:700;font-size:34px;line-height:42px;}h2{font-family:Inter, sans-serif;font-weight:700;font-size:28px;line-height:36px;}@media (max-width:768px){h2{font-size:20px;line-height:28px;}}h3{font-family:Inter, sans-serif;font-weight:bold;font-size:18px;line-height:26px;}@media (max-width:768px){h3{font-size:16px;line-height:24px;}}h1{font-family:Inter, sans-serif;font-weight:bold;font-size:26px;line-height:34px;}.main-navigation a, .main-navigation .menu-toggle, .main-navigation .menu-bar-items{font-family:Inter, sans-serif;font-weight:500;font-size:17px;}.widget-title{font-family:Inter, sans-serif;font-weight:bold;font-size:22px;}.dynamic-entry-content{font-family:Inter, sans-serif;font-size:16px;line-height:26px;}.main-navigation .main-nav ul ul li a{font-family:Inter, sans-serif;font-weight:500;font-size:16px;}.top-bar{background-color:#636363;color:#ffffff;}.site-header{background-color:var(--contrast-2);}.main-title a,.main-title a:hover{color:#ffffff;}.site-description{color:var(--contrast-2);}.main-navigation .main-nav ul li a, .main-navigation .menu-toggle, .main-navigation .menu-bar-items{color:#ffffff;}.main-navigation .main-nav ul li:not([class*="current-menu-"]):hover > a, .main-navigation .main-nav ul li:not([class*="current-menu-"]):focus > a, .main-navigation .main-nav ul li.sfHover:not([class*="current-menu-"]) > a, .main-navigation .menu-bar-item:hover > a, .main-navigation .menu-bar-item.sfHover > a{color:rgba(255,255,255,0.5);}button.menu-toggle:hover,button.menu-toggle:focus{color:#ffffff;}.main-navigation .main-nav ul li[class*="current-menu-"] > a{color:rgba(255,255,255,0.74);}.navigation-search input[type="search"],.navigation-search input[type="search"]:active, .navigation-search input[type="search"]:focus, .main-navigation .main-nav ul li.search-item.active > a, .main-navigation .menu-bar-items .search-item.active > a{color:rgba(255,255,255,0.5);}.main-navigation ul ul{background-color:#ffffff;}.main-navigation .main-nav ul ul li a{color:var(--contrast);}.main-navigation .main-nav ul ul li:not([class*="current-menu-"]):hover > a,.main-navigation .main-nav ul ul li:not([class*="current-menu-"]):focus > a, .main-navigation .main-nav ul ul li.sfHover:not([class*="current-menu-"]) > a{color:var(--contrast-2);}.main-navigation .main-nav ul ul li[class*="current-menu-"] > a{color:var(--contrast-2);}.separate-containers .inside-article, .separate-containers .comments-area, .separate-containers .page-header, .one-container .container, .separate-containers .paging-navigation, .inside-page-header{background-color:var(--tax-bg);}.entry-title a{color:var(--contrast);}.entry-title a:hover{color:var(--contrast-2);}.entry-meta{color:var(--contrast-2);}.sidebar .widget{background-color:var(--base-3);}.footer-widgets{background-color:var(--base-3);}.site-info{background-color:var(--base-3);}input[type="text"],input[type="email"],input[type="url"],input[type="password"],input[type="search"],input[type="tel"],input[type="number"],textarea,select{color:var(--contrast);background-color:var(--base-2);border-color:var(--base);}input[type="text"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="password"]:focus,input[type="search"]:focus,input[type="tel"]:focus,input[type="number"]:focus,textarea:focus,select:focus{color:var(--contrast);background-color:var(--base-2);border-color:var(--contrast-3);}button,html input[type="button"],input[type="reset"],input[type="submit"],a.button,a.wp-block-button__link:not(.has-background){color:var(--base-2);background-color:var(--contrast-2);}a.generate-back-to-top{background-color:rgba( 0,0,0,0.4 );color:#ffffff;}a.generate-back-to-top:hover,a.generate-back-to-top:focus{background-color:rgba( 0,0,0,0.6 );color:#ffffff;}:root{--gp-search-modal-bg-color:var(--base-3);--gp-search-modal-text-color:var(--contrast);--gp-search-modal-overlay-bg-color:rgba(0,0,0,0.2);}@media (max-width: 768px){.main-navigation .menu-bar-item:hover > a, .main-navigation .menu-bar-item.sfHover > a{background:none;color:#ffffff;}}.inside-header{padding:0px;}.nav-below-header .main-navigation .inside-navigation.grid-container, .nav-above-header .main-navigation .inside-navigation.grid-container{padding:0px 20px 0px 20px;}.separate-containers .inside-article, .separate-containers .comments-area, .separate-containers .page-header, .separate-containers .paging-navigation, .one-container .site-content, .inside-page-header{padding:0px;}.site-main .wp-block-group__inner-container{padding:0px;}.separate-containers .paging-navigation{padding-top:20px;padding-bottom:20px;}.entry-content .alignwide, body:not(.no-sidebar) .entry-content .alignfull{margin-left:-0px;width:calc(100% + 0px);max-width:calc(100% + 0px);}.one-container.right-sidebar .site-main,.one-container.both-right .site-main{margin-right:0px;}.one-container.left-sidebar .site-main,.one-container.both-left .site-main{margin-left:0px;}.one-container.both-sidebars .site-main{margin:0px;}.sidebar .widget, .page-header, .widget-area .main-navigation, .site-main > *{margin-bottom:30px;}.separate-containers .site-main{margin:30px;}.both-right .inside-left-sidebar,.both-left .inside-left-sidebar{margin-right:15px;}.both-right .inside-right-sidebar,.both-left .inside-right-sidebar{margin-left:15px;}.one-container.archive .post:not(:last-child):not(.is-loop-template-item), .one-container.blog .post:not(:last-child):not(.is-loop-template-item){padding-bottom:0px;}.separate-containers .featured-image{margin-top:30px;}.separate-containers .inside-right-sidebar, .separate-containers .inside-left-sidebar{margin-top:30px;margin-bottom:30px;}.main-navigation .main-nav ul li a,.menu-toggle,.main-navigation .menu-bar-item > a{line-height:70px;}.main-navigation ul ul{width:230px;}.navigation-search input[type="search"]{height:70px;}.rtl .menu-item-has-children .dropdown-menu-toggle{padding-left:20px;}.rtl .main-navigation .main-nav ul li.menu-item-has-children > a{padding-right:20px;}.widget-area .widget{padding:0px;}@media (max-width:768px){.separate-containers .inside-article, .separate-containers .comments-area, .separate-containers .page-header, .separate-containers .paging-navigation, .one-container .site-content, .inside-page-header{padding:0px;}.site-main .wp-block-group__inner-container{padding:0px;}.inside-top-bar{padding-right:30px;padding-left:30px;}.inside-header{padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;}.widget-area .widget{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;}.footer-widgets-container{padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px;}.inside-site-info{padding-right:30px;padding-left:30px;}.entry-content .alignwide, body:not(.no-sidebar) .entry-content .alignfull{margin-left:-0px;width:calc(100% + 0px);max-width:calc(100% + 0px);}.one-container .site-main .paging-navigation{margin-bottom:30px;}}/* End cached CSS */.is-right-sidebar{width:30%;}.is-left-sidebar{width:50%;}.site-content .content-area{width:100%;}@media (max-width: 768px){.main-navigation .menu-toggle,.sidebar-nav-mobile:not(#sticky-placeholder){display:block;}.main-navigation ul,.gen-sidebar-nav,.main-navigation:not(.slideout-navigation):not(.toggled) .main-nav > ul,.has-inline-mobile-toggle #site-navigation .inside-navigation > *:not(.navigation-search):not(.main-nav){display:none;}.nav-align-right .inside-navigation,.nav-align-center .inside-navigation{justify-content:space-between;}.has-inline-mobile-toggle .mobile-menu-control-wrapper{display:flex;flex-wrap:wrap;}.has-inline-mobile-toggle .inside-header{flex-direction:row;text-align:left;flex-wrap:wrap;}.has-inline-mobile-toggle .header-widget,.has-inline-mobile-toggle #site-navigation{flex-basis:100%;}.nav-float-left .has-inline-mobile-toggle #site-navigation{order:10;}}
            .dynamic-author-image-rounded{border-radius:100%;}.dynamic-featured-image, .dynamic-author-image{vertical-align:middle;}.one-container.blog .dynamic-content-template:not(:last-child), .one-container.archive .dynamic-content-template:not(:last-child){padding-bottom:0px;}.dynamic-entry-excerpt > p:last-child{margin-bottom:0px;}
            @media (max-width: 768px){.main-navigation .main-nav ul li a,.main-navigation .menu-toggle,.main-navigation .mobile-bar-items a,.main-navigation .menu-bar-item > a{line-height:50px;}.main-navigation .site-logo.navigation-logo img, .mobile-header-navigation .site-logo.mobile-header-logo img, .navigation-search input[type="search"]{height:50px;}}
            </style>
            <link data-optimized="1" rel="stylesheet" id="generate-child-css" href="{{ asset('src/template/d161fdcd2f5f4ae056d56718ff58f7e7.css') }}" media="all">
            <link rel="stylesheet" id="generate-google-fonts-css" href="{{ asset('src/template/css') }}" media="all">
            <link data-optimized="1" rel="stylesheet" id="tf-compiled-options-wdc-options-css" href="{{ asset('src/template/b3a700f3b9a76bf92392ab6f2f8b28c5.css') }}" media="all">
            <link data-optimized="1" rel="stylesheet" id="addtoany-css" href="{{ asset('src/template/8cff040dc59df28f42e4fa717bbf85dd.css') }}" media="all">
            <link data-optimized="1" rel="stylesheet" id="generateblocks-css" href="{{ asset('src/template/ede54a1729b6e30b08900ffe2d6ca2e5.css') }}" media="all">
            <link data-optimized="1" rel="stylesheet" id="pwaforwp-style-css" href="{{ asset('src/template/adbb171076e9d837460f2cfc51d797d5.css') }}" media="all">
            <link data-optimized="1" rel="stylesheet" id="generate-blog-images-css" href="{{ asset('src/template/869fbe4890e749b7c38f323db20cb305.css') }}" media="all">
            <link data-optimized="1" rel="stylesheet" id="generate-offside-css" href="{{ asset('src/template/91d2c8c26e7d42fcf35017a3dc185935.css') }}" media="all">
            <style id="generate-offside-inline-css">
            :root{--gp-slideout-width:265px;}.slideout-navigation.main-navigation{background-color:var(--contrast-2);}.slideout-navigation.main-navigation .main-nav ul li a{color:var(--base-2);}.slideout-navigation.main-navigation ul ul{background-color:var(--contrast-2);}.slideout-navigation.main-navigation .main-nav ul ul li a{color:var(--base-2);}.slideout-navigation.main-navigation .main-nav ul li:not([class*="current-menu-"]):hover > a, .slideout-navigation.main-navigation .main-nav ul li:not([class*="current-menu-"]):focus > a, .slideout-navigation.main-navigation .main-nav ul li.sfHover:not([class*="current-menu-"]) > a{color:rgba(255,255,255,0.67);}.slideout-navigation.main-navigation .main-nav ul ul li:not([class*="current-menu-"]):hover > a, .slideout-navigation.main-navigation .main-nav ul ul li:not([class*="current-menu-"]):focus > a, .slideout-navigation.main-navigation .main-nav ul ul li.sfHover:not([class*="current-menu-"]) > a{color:rgba(255,255,255,0.67);}.slideout-navigation.main-navigation .main-nav ul li[class*="current-menu-"] > a{color:rgba(255,255,255,0.67);}.slideout-navigation.main-navigation .main-nav ul ul li[class*="current-menu-"] > a{color:rgba(255,255,255,0.67);}.slideout-navigation, .slideout-navigation a{color:var(--base-2);}.slideout-navigation button.slideout-exit{color:var(--base-2);padding-left:20px;padding-right:20px;}.slide-opened nav.toggled .menu-toggle:before{display:none;}@media (max-width: 768px){.menu-bar-item.slideout-toggle{display:none;}}
            </style>
            {{-- <script src="{{ asset('src/template/frontend-gtag.js.download') }}" id="monsterinsights-frontend-script-js" defer="" data-deferred="1"></script>
            <script data-cfasync="false" data-wpfc-render="false" id="monsterinsights-frontend-script-js-extra">var monsterinsights_frontend = {"js_events_tracking":"true","download_extensions":"doc,pdf,ppt,zip,xls,docx,pptx,xlsx","inbound_paths":"[{\"path\":\"\\\/go\\\/\",\"label\":\"affiliate\"},{\"path\":\"\\\/recommend\\\/\",\"label\":\"affiliate\"}]","home_url":"https:\/\/dewabiz.com","hash_tracking":"false","v4_id":"G-BHBRJYPHR8"};</script>
            <script id="addtoany-core-js-before" src="data:text/javascript;base64,d2luZG93LmEyYV9jb25maWc9d2luZG93LmEyYV9jb25maWd8fHt9O2EyYV9jb25maWcuY2FsbGJhY2tzPVtdO2EyYV9jb25maWcub3ZlcmxheXM9W107YTJhX2NvbmZpZy50ZW1wbGF0ZXM9e307YTJhX2NvbmZpZy5jYWxsYmFja3MucHVzaCh7cmVhZHk6ZnVuY3Rpb24oKXtkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCIuYTJhX3NfdW5kZWZpbmVkIikuZm9yRWFjaChmdW5jdGlvbihlbXB0eUljb24pe2VtcHR5SWNvbi5wYXJlbnRFbGVtZW50LnN0eWxlLmRpc3BsYXk9Im5vbmUifSl9fSk=" defer=""></script>
            <script src="{{ asset('src/template/page.js.download') }}" id="addtoany-core-js" defer="" data-deferred="1"></script>
            <script src="{{ asset('src/template/jquery.min.js.download') }}" id="jquery-core-js"></script>
            <script data-optimized="1" src="{{ asset('src/template/8cf3248c9cac21f275e1f1276d57da5c.js.download') }}" id="jquery-migrate-js" defer="" data-deferred="1"></script>
            <script data-optimized="1" src="{{ asset('src/template/f304022b4587f68f1de9f7d2e9d352f7.js.download') }}" id="addtoany-jquery-js" defer="" data-deferred="1"></script>
            <script data-optimized="1" src="{{ asset('src/template/54fc579bacbbbfd8de91ddcbe3ef16cb.js.download') }}" id="jquerylibs-js" defer="" data-deferred="1"></script>
            <script data-optimized="1" src="{{ asset('src/template/51ca42f97522cdf98b6cc6610df8eeca.js.download') }}" id="owljs-js" defer="" data-deferred="1"></script>
            <script data-optimized="1" src="{{ asset('src/template/e8a20ea8b74aeed1a14371df9ca6322b.js.download') }}" id="customjs-js" defer="" data-deferred="1"></script> --}}
            <link rel="https://api.w.org/" href="https://dewabiz.com/wp-json/">
            <link rel="alternate" type="application/json" href="https://dewabiz.com/wp-json/wp/v2/pages/952">
            <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://dewabiz.com/xmlrpc.php?rsd">
            {{-- <meta name="generator" content="WordPress 6.4.2"> --}}
            <link rel="shortlink" href="https://dewabiz.com/">
            <link rel="alternate" type="application/json+oembed" href="https://dewabiz.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdewabiz.com%2F">
            <link rel="alternate" type="text/xml+oembed" href="https://dewabiz.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdewabiz.com%2F&amp;format=xml">
            {{-- <script type="text/javascript" src="data:text/javascript;base64,IWZ1bmN0aW9uKGYsYixlLHYsbix0LHMpe2lmKGYuZmJxKXJldHVybjtuPWYuZmJxPWZ1bmN0aW9uKCl7bi5jYWxsTWV0aG9kP24uY2FsbE1ldGhvZC5hcHBseShuLGFyZ3VtZW50cyk6bi5xdWV1ZS5wdXNoKGFyZ3VtZW50cyl9O2lmKCFmLl9mYnEpZi5fZmJxPW47bi5wdXNoPW47bi5sb2FkZWQ9ITA7bi52ZXJzaW9uPScyLjAnO24ucXVldWU9W107dD1iLmNyZWF0ZUVsZW1lbnQoZSk7dC5hc3luYz0hMDt0LnNyYz12O3M9Yi5nZXRFbGVtZW50c0J5VGFnTmFtZShlKVswXTtzLnBhcmVudE5vZGUuaW5zZXJ0QmVmb3JlKHQscyl9KHdpbmRvdyxkb2N1bWVudCwnc2NyaXB0JywnaHR0cHM6Ly9jb25uZWN0LmZhY2Vib29rLm5ldC9lbl9VUy9mYmV2ZW50cy5qcz92PW5leHQnKQ==" defer=""></script>
            <script type="text/javascript" src="data:text/javascript;base64,dmFyIHVybD13aW5kb3cubG9jYXRpb24ub3JpZ2luKyc/b2I9b3Blbi1icmlkZ2UnO2ZicSgnc2V0Jywnb3BlbmJyaWRnZScsJzE0OTM3NDI3NTQ5Nzg2MScsdXJsKQ==" defer=""></script>
            <script type="text/javascript" src="data:text/javascript;base64,ZmJxKCdpbml0JywnMTQ5Mzc0Mjc1NDk3ODYxJyx7fSx7ImFnZW50Ijoid29yZHByZXNzLTYuNC4yLTMuMC4xNCJ9KQ==" defer=""></script>
            <script type="text/javascript" src="data:text/javascript;base64,ZmJxKCd0cmFjaycsJ1BhZ2VWaWV3JyxbXSk=" defer=""></script> --}}
            {{-- <noscript>
            <img height="1" width="1" style="display:none" alt="fbpx" src="https://www.facebook.com/tr?id=149374275497861&ev=PageView&noscript=1"/>
            </noscript> --}}
            <link rel="icon" href="https://dewabiz.com/wp-content/uploads/2021/02/favicon.ico" sizes="32x32">
            <link rel="icon" href="https://dewabiz.com/wp-content/uploads/2021/02/favicon.ico" sizes="192x192">
            {{-- <meta name="msapplication-TileImage" content="https://dewabiz.com/wp-content/uploads/2021/02/favicon.ico">
            <meta name="pwaforwp" content="wordpress-plugin">
            <meta name="theme-color" content="#D5E0EB">
            <meta name="apple-mobile-web-app-title" content="DewaBiz.com">
            <meta name="application-name" content="DewaBiz.com">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="default">
            <meta name="mobile-web-app-capable" content="yes">
            <meta name="apple-touch-fullscreen" content="yes"> --}}
            <link rel="apple-touch-icon" sizes="192x192" href="https://dewabiz.com/wp-content/uploads/2021/02/icon-192x192-1.png">
            <link rel="apple-touch-icon" sizes="512x512" href="https://dewabiz.com/wp-content/uploads/2021/02/icon-512x512-1.png">
            <style id="wp-custom-css">
            /*left side menu callout text css snippet*/
            .pa-callout-left {
            font-size: 10px;
            margin-right: 4px;
            position: relative;
            top: -10px;
            margin-bottom: 13px;
            color: #ffffff;
            background-color: #dc3545;
            padding: 3px 4px;
            border-radius: 3px;
            }
            .ssl_img .owl-item img {
                width:80px;
            }
            .domain_slide img {
                width:40px!Important;
            }
            /*the bounce effect*/
            @keyframes bouncing {
            0% {top: -6px;}
            100% {top: -10px;}
            }
            .pa-callout-left { animation: bouncing .8s cubic-bezier(0.1,0.05,0.05,1) 0s infinite alternate both;
            }
            .dewabiz-social-wrapper {
                margin: 30px 0;
                font-size: 0;
            }
            .dewabiz-social-wrapper span {
                font-weight: bold;
                padding-right: 10px;
                font-size: 16px;
            }
            .dewabiz-social-sharing {
                font-size: 17px;
                padding: 7px 20px;
            }
            @media only screen and (max-width: 600px) {
                .dewabiz-social-sharing {
                    font-size: 17px;
                    padding: 7px 12px;
                    display: inline-block;
                }
            }
            @media only screen and (max-width: 600px){
            .hide-on-mobile {
                    display:none;
                }
            }
            .dewabiz-social-sharing svg {
                position: relative;
                top: 0.15em;
                display: inline-block;
            }
            .dewabiz-social-sharing:first-of-type {
                border-radius: 100px 0 0 100px;
            }
            .dewabiz-social-sharing:last-of-type {
                border-radius: 0 100px 100px 0;
            }
            .dewabiz-social-facebook {
                fill: #fff;
                background-color: rgba(59, 89, 152, 1);
            }
            .dewabiz-social-twitter {
                fill: #fff;
                background-color: rgba(29, 161, 242, 1);
            }
            .dewabiz-social-pinterest {
                fill: #fff;
                background-color: rgba(189, 8, 28, 1);
            }
            .dewabiz-social-linkedin {
                fill: #fff;
                background-color: rgba(0, 119, 181, 1);
            }
            .dewabiz-social-whatsapp {
                fill: #fff;
                background-color: rgba(37, 211, 102, 1);
            }
            .dewabiz-social-whatsapp:hover {
                background-color: rgba(37, 211, 102, .8);
            }
            .dewabiz-social-reddit {
                fill: #fff;
                background-color: rgba(255, 87, 0, 1);
            }
            a.dewabiz-social-sharing:hover {
            opacity: 0.8;
            }
            #commentform .comment-form-url {display:none;}
            .hero-bg:before {
                left:5%;
                bottom:-80px;
            }
            @media only screen and (max-width: 767px) {
                .hero-bg:before {
                    bottom:140px;
                    left: -20%;
                }
            }
            </style>
            {{-- <script src="{{ asset('src/template/core.KJQApO2n.js.download') }}" type="module"></script> --}}
            {{-- <script charset="utf-8" src="{{ asset('src/template/twk-chunk-2c776523.js.download') }}"></script>
            <script charset="utf-8" src="{{ asset('src/template/twk-chunk-9294da6c.js.download') }}"></script>
            <script charset="utf-8" src="{{ asset('src/template/twk-chunk-f1565420.js.download') }}"></script>
            <script charset="utf-8" src="{{ asset('src/template/twk-chunk-2d0b383d.js.download') }}"></script>
            <script charset="utf-8" src="{{ asset('src/template/twk-chunk-48f3b594.js.download') }}"></script>
            <script charset="utf-8" src="{{ asset('src/template/twk-chunk-4fe9d5dd.js.download') }}"></script>
            <script charset="utf-8" src="{{ asset('src/template/twk-chunk-2d0b9454.js.download') }}"></script>
            <script charset="utf-8" src="{{ asset('src/template/twk-chunk-24d8db78.js.download') }}"></script> --}}
            <style type="text/css">
            #e45ol5n2h0g1704605663449 {outline:none !important;
            visibility:visible !important;
            resize:none !important;
            box-shadow:none !important;
            overflow:visible !important;
            background:none !important;
            opacity:1 !important;
            filter:alpha(opacity=100) !important;
            -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important;
            -mz-opacity:1 !important;
            -khtml-opacity:1 !important;
            top:auto !important;
            right:0px !important;
            bottom:0px !important;
            left:auto !important;
            position:fixed !important;
            border:0 !important;
            min-height:0px  !important;
            min-width:0px  !important;
            max-height:none  !important;
            max-width:none  !important;
            padding:0px !important;
            margin:0px !important;
            -moz-transition-property:none !important;
            -webkit-transition-property:none !important;
            -o-transition-property:none !important;
            transition-property:none !important;
            transform:none !important;
            -webkit-transform:none !important;
            -ms-transform:none !important;
            width:auto !important;
            height:auto  !important;
            display:none !important;
            z-index:2000000000 !important;
            background-color:transparent !important;
            cursor:none !important;
            float:none !important;
            border-radius:unset !important;
            pointer-events:auto !important;
            clip:auto !important;
            color-scheme:light !important;}#e45ol5n2h0g1704605663449.widget-hidden {display: none !important;}#e45ol5n2h0g1704605663449.widget-visible {display: block !important;}
            @media print{
            #e45ol5n2h0g1704605663449.widget-visible {
            display: none !important;
            }
            }
            </style>
            {{-- <script src="{{ asset('src/template/emojione.min.js.download') }}" type="text/javascript" async="" defer=""></script>
            <script src="{{ asset('src/template/emojione.min.js.download') }}" type="text/javascript" async="" defer=""></script> --}}
            <style type="text/css">
            @keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-moz-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-webkit-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}#fclhmnv41rfg1704605663556.open{animation : tawkMaxOpen .25s ease!important;}@keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}@-moz-keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}@-webkit-keyframes tawkMaxClose{from{opacity: 1;transform:translate(0, 0px);;}to{opacity: 0;transform:translate(0, 30px);;}}#fclhmnv41rfg1704605663556.closed{animation: tawkMaxClose .25s ease!important}
            </style>

        {{-- akhir template dari dewabiz --}}
    </head>

    <body class="home page-template-default page page-id-952 wp-custom-logo wp-embed-responsive post-image-aligned-center slideout-enabled slideout-both sticky-menu-fade no-sidebar nav-float-right separate-containers header-aligned-left dropdown-hover full-width-content offside-js--init offside-js--interact using-mouse" itemtype="https://schema.org/WebPage" itemscope="">
        @yield('body')

        {{-- template dari dewabiz --}}
            {{-- <script src="{{ asset('src/template/js(2))') }}" defer="" data-deferred="1"></script> --}}
            {{-- <script src="data:text/javascript;base64,d2luZG93LmRhdGFMYXllcj13aW5kb3cuZGF0YUxheWVyfHxbXTtmdW5jdGlvbiBndGFnKCl7ZGF0YUxheWVyLnB1c2goYXJndW1lbnRzKX0KZ3RhZygnanMnLG5ldyBEYXRlKCkpO2d0YWcoJ2NvbmZpZycsJ0ctQkhCUkpZUEhSOCcp" defer=""></script>
            <script id="tawk-script" type="text/javascript" src="data:text/javascript;base64,dmFyIFRhd2tfQVBJPVRhd2tfQVBJfHx7fTt2YXIgVGF3a19Mb2FkU3RhcnQ9bmV3IERhdGUoKTsoZnVuY3Rpb24oKXt2YXIgczE9ZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnc2NyaXB0JyksczA9ZG9jdW1lbnQuZ2V0RWxlbWVudHNCeVRhZ05hbWUoJ3NjcmlwdCcpWzBdO3MxLmFzeW5jPSEwO3MxLnNyYz0naHR0cHM6Ly9lbWJlZC50YXdrLnRvLzVkNDJhNTc4ZTVhZTk2N2VmODBkZGQ2ZC8xZmhjdjAxZTEnO3MxLmNoYXJzZXQ9J1VURi04JztzMS5zZXRBdHRyaWJ1dGUoJ2Nyb3Nzb3JpZ2luJywnKicpO3MwLnBhcmVudE5vZGUuaW5zZXJ0QmVmb3JlKHMxLHMwKX0pKCk=" defer=""></script>
            <script id="generate-a11y" src="data:text/javascript;base64,IWZ1bmN0aW9uKCl7InVzZSBzdHJpY3QiO2lmKCJxdWVyeVNlbGVjdG9yImluIGRvY3VtZW50JiYiYWRkRXZlbnRMaXN0ZW5lciJpbiB3aW5kb3cpe3ZhciBlPWRvY3VtZW50LmJvZHk7ZS5hZGRFdmVudExpc3RlbmVyKCJtb3VzZWRvd24iLGZ1bmN0aW9uKCl7ZS5jbGFzc0xpc3QuYWRkKCJ1c2luZy1tb3VzZSIpfSksZS5hZGRFdmVudExpc3RlbmVyKCJrZXlkb3duIixmdW5jdGlvbigpe2UuY2xhc3NMaXN0LnJlbW92ZSgidXNpbmctbW91c2UiKX0pfX0oKQ==" defer=""></script>
            <script type="text/javascript" src="data:text/javascript;base64,ZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignd3BjZjdtYWlsc2VudCcsZnVuY3Rpb24oZXZlbnQpe2lmKCJmYl9weGxfY29kZSIgaW4gZXZlbnQuZGV0YWlsLmFwaVJlc3BvbnNlKXtldmFsKGV2ZW50LmRldGFpbC5hcGlSZXNwb25zZS5mYl9weGxfY29kZSl9fSwhMSk=" defer=""></script> --}}
            <div id="fb-pxl-ajax-code"></div>
            <link data-optimized="1" rel="stylesheet" id="wdc-styles-1-css" href="{{ asset('src/template/b18cec0cc2d0e3918d20719469545ab7.css') }}" media="all">
            <link data-optimized="1" rel="stylesheet" id="wdc-styles-fas-css" href="{{ asset('src/template/05bde985be8f2b493cbedfaf12e43a42.css') }}" media="all">
            <link data-optimized="1" rel="stylesheet" id="wdc-styles-main-css" href="{{ asset('src/template/50990bff43b2b32c3fc2ba4a2b031b82.css') }}" media="all">
            <style id="wdc-styles-main-inline-css">
            @font-face {
                    font-family: 'Montserrat';
                    src: url('https://dewabiz.com/wp-content/plugins/wp-domain-checker/assets/font/Montserrat/Montserrat-Regular.woff2') format('woff2'),
                        url('https://dewabiz.com/wp-content/plugins/wp-domain-checker/assets/font/Montserrat/Montserrat-Regular.woff') format('woff');
                    font-weight: normal;
                    font-style: normal;
                    font-display: swap;
                }
                @font-face {
                    font-family: 'Poppins';
                    src: url('https://dewabiz.com/wp-content/plugins/wp-domain-checker/assets/font/Poppins/Poppins-Regular.woff2') format('woff2'),
                        url('https://dewabiz.com/wp-content/plugins/wp-domain-checker/assets/font/Poppins/Poppins-Regular.woff') format('woff');
                    font-weight: normal;
                    font-style: normal;
                    font-display: swap;
                }
            </style>
            <link data-optimized="1" rel="stylesheet" id="wdc-styles-extras-css" href="{{ asset('src/template/ce75c64c381d6e0c4191f79b408477f8.css') }}" media="all">
            <link data-optimized="1" rel="stylesheet" id="wdc-styles-flat-css" href="{{ asset('src/template/dc080ed5276786eb91f87e84b7013575.css') }}" media="all">
            <style id="core-block-supports-inline-css">
            .wp-block-gallery.wp-block-gallery-1{--wp--style--unstable-gallery-gap:var( --wp--style--gallery-gap-default, var( --gallery-block--gutter-size, var( --wp--style--block-gap, 0.5em ) ) );gap:var( --wp--style--gallery-gap-default, var( --gallery-block--gutter-size, var( --wp--style--block-gap, 0.5em ) ) );}.wp-container-core-navigation-layout-1.wp-container-core-navigation-layout-1{flex-direction:column;align-items:flex-start;}.wp-container-core-navigation-layout-2.wp-container-core-navigation-layout-2{flex-direction:column;align-items:flex-start;}
            </style>
            {{-- <script id="generate-offside-js-extra" src="data:text/javascript;base64,dmFyIG9mZlNpZGU9eyJzaWRlIjoicmlnaHQifQ==" defer=""></script>
            <script data-optimized="1" src="{{ asset('src/template/6640c5bd2337fc3f59d7cc5dfc552abe.js.download') }}" id="generate-offside-js" defer="" data-deferred="1"></script>
            <script id="generate-smooth-scroll-js-extra" src="data:text/javascript;base64,dmFyIHNtb290aD17ImVsZW1lbnRzIjpbIi5zbW9vdGgtc2Nyb2xsIiwibGkuc21vb3RoLXNjcm9sbCBhIl0sImR1cmF0aW9uIjoiODAwIn0=" defer=""></script>
            <script data-optimized="1" src="{{ asset('src/template/14e0ed2e9ed106eb26e43487e5e92078.js.download') }}" id="generate-smooth-scroll-js" defer="" data-deferred="1"></script> --}}
            <!--[if lte IE 11]> <script src="https://dewabiz.com/wp-content/themes/generatepress/assets/js/classList.min.js" id="generate-classlist-js"></script> <![endif]-->
            {{-- <script id="generate-menu-js-extra" src="data:text/javascript;base64,dmFyIGdlbmVyYXRlcHJlc3NNZW51PXsidG9nZ2xlT3BlbmVkU3ViTWVudXMiOiIxIiwib3BlblN1Yk1lbnVMYWJlbCI6Ik9wZW4gU3ViLU1lbnUiLCJjbG9zZVN1Yk1lbnVMYWJlbCI6IkNsb3NlIFN1Yi1NZW51In0=" defer=""></script>
            <script data-optimized="1" src="{{ asset('src/template/e52418b4c4f61f503504b07127ad7f23.js.download') }}" id="generate-menu-js" defer="" data-deferred="1"></script>
            <script data-optimized="1" src="{{ asset('src/template/c880b0a06087f9b7d36e385b7748a8f0.js.download') }}" id="pwaforwp-video-js-js" defer="" data-deferred="1"></script>
            <script data-optimized="1" src="{{ asset('src/template/458a907ddfcaeef6b46a98571bc14e42.js.download') }}" id="pwaforwp-download-js-js" defer="" data-deferred="1"></script> --}}
            {{-- <script data-optimized="1" src="{{ asset('src/template/55d28e9f798d34a31fca0191fd2dafe0.js.download') }}" id="pwa-main-script-js" defer="" data-deferred="1"></script> --}}
            {{-- <script data-optimized="1" src="{{ asset('src/template/266b478a4c1038429a5264c953c493ee.js.download') }}" id="generateblocks-tabs-js" defer="" data-deferred="1"></script>
            <script data-optimized="1" src="{{ asset('src/template/1ad22046195bf2532f15707c40e4865c.js.download') }}" id="generateblocks-accordion-js" defer="" data-deferred="1"></script>
            <script id="wdc-script-js-extra" src="data:text/javascript;base64,dmFyIHdkY19jb25maWdfanM9eyJidXlfYnV0dG9uX2ljb24iOiI8aSBjbGFzcz1cImZhcyBmYS1jYXJ0LXBsdXMgd2RjLWljb24tcmVzdWx0XCI+PFwvaT4ifTt2YXIgd2RjX2FqYXg9eyJhamF4dXJsIjoiXC93cC1hZG1pblwvYWRtaW4tYWpheC5waHAiLCJ3ZGNfbm9uY2UiOiIyYWI3MWVkZTc1In0=" defer=""></script>
            <script data-optimized="1" src="{{ asset('src/template/2b5027c60b216c4c0287e867a501b54d.js.download') }}" id="wdc-script-js" defer="" data-deferred="1"></script> --}}
            <div style="position: static;">
                <div style="height: 1px; width: 1px; position: absolute; z-index: 100000; top: 0px; visibility: hidden;">
                    <iframe id="a2a_sm_ifr" title="AddToAny Utility Frame" aria-hidden="true" src="{{ asset('src/template/sm.25.html') }}" style="height: 1px; width: 1px; border: 0px; left: 0px; top: 0px; position: absolute; z-index: 100000; display: none;">
                    </iframe>
                </div>
            </div>
            {{-- <script async="" charset="UTF-8" src="{{ asset('src/template/id.js.download') }}"></script> --}}
            {{-- <div id="e45ol5n2h0g1704605663449" class="widget-visible">
                <iframe src="{{ asset('src/template/saved_resource.html') }}" frameborder="0" scrolling="no" width="64px" height="60px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:20px !important; bottom:20px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:60px !important; min-width:64px !important; max-height:60px !important; max-width:64px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:64px !important; height:60px !important; display:block !important; z-index:1000001 !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important;" id="he3mjjg0g6b81704605663470" class="" title="chat widget">
                </iframe>
                <iframe src="{{ asset('src/template/saved_resource(1).html') }}" frameborder="0" scrolling="no" width="350px" height="520px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:10px !important; bottom:90px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:520px !important; min-width:350px !important; max-height:520px !important; max-width:350px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:350px !important; height:520px !important; display:none !important; z-index:auto !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:5px !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important;" id="fclhmnv41rfg1704605663556" class="" title="chat widget">
                </iframe>
                <iframe src="{{ asset('src/template/saved_resource(2).html') }}" frameborder="0" scrolling="no" width="360px" height="55px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:20px !important; bottom:100px; left:auto !important; position:fixed !important; border:0 !important; min-height:55px !important; min-width:360px !important; max-height:55px !important; max-width:360px !important; padding:0 !important; margin:0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:none !important; -webkit-transform:none !important; -ms-transform:none !important; width:360px !important; height:55px !important; display:none !important; z-index:auto !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important;" id="dvdskrk5j70o1704605663508" class="" title="chat widget">
                </iframe>
                <iframe src="{{ asset('src/template/saved_resource(3).html') }}" frameborder="0" scrolling="no" width="87px" height="76px" style="outline:none !important; visibility:visible !important; resize:none !important; box-shadow:none !important; overflow:visible !important; background:none !important; opacity:1 !important; filter:alpha(opacity=100) !important; -ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity 1}) !important; -mz-opacity:1 !important; -khtml-opacity:1 !important; top:auto !important; right:20px !important; bottom:85px !important; left:auto !important; position:fixed !important; border:0 !important; min-height:76px !important; min-width:87px !important; max-height:76px !important; max-width:87px !important; padding:0 !important; margin:0px 0 0 0 !important; -moz-transition-property:none !important; -webkit-transition-property:none !important; -o-transition-property:none !important; transition-property:none !important; transform:rotate(0deg) translateZ(0); -webkit-transform:rotate(0deg) translateZ(0); -ms-transform:rotate(0deg) translateZ(0); width:87px !important; height:76px !important; display:block !important; z-index:1000002 !important; background-color:transparent !important; cursor:none !important; float:none !important; border-radius:unset !important; pointer-events:auto !important; clip:auto !important; color-scheme:light !important; -moz-transform:rotate(0deg) translateZ(0); -o-transform:rotate(0deg) translateZ(0); transform-origin:0; -moz-transform-origin:0; -webkit-transform-origin:0; -o-transform-origin:0; -ms-transform-origin:0;" id="g11blqc87fp1704605663485" class="" title="chat widget">
                </iframe>
            </div> --}}
        {{-- akhir template dari dewabiz --}}


    </body>
</html>
