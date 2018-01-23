<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <script src="jquery-3.3.1.min.js"></script>


    <meta charset="utf-8">

    <title>Barrister, attorney, lawyer, advocate of Ukraine</title>


    <link rel="shortcut icon" href="icon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="icon.ico" type="image/x-icon">

    <style type="text/css">/*
 * contextMenu.js v 1.4.0срака
 * Author: Sudhanshu Yadav
 * s-yadav.github.com
 * Copyright (c) 2013 Sudhanshu Yadav.
 * Dual licensed under the MIT and GPL licenses
**/

        .iw-contextMenu {
            box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.10);
            border: 1px solid #c8c7cc;
            border-radius: 11px;
            display: none;
            z-index: 1000000132;
            max-width: 300px;
        }

        .iw-cm-menu {
            background: #fff;
            color: #000;
            margin: 0px;
            padding: 0px;
        }

        .iw-curMenu {
        }

        .iw-cm-menu li {
            font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, Arial, Ubuntu, sans-serif;
            list-style: none;
            padding: 10px;
            padding-right: 20px;
            border-bottom: 1px solid #c8c7cc;
            cursor: pointer;
            position: relative;
            font-size: 14px;
            margin: 0;
            line-height: inherit;
        }

        .iw-cm-menu li:first-child {
            border-top-left-radius: 11px;
            border-top-right-radius: 11px;
        }

        .iw-cm-menu li:last-child {
            border-bottom-left-radius: 11px;
            border-bottom-right-radius: 11px;
            border-bottom: none;
        }

        .iw-mOverlay {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0px;
            left: 0px;
            background: #FFF;
            opacity: .5;
        }

        .iw-contextMenu li.iw-mDisable {
            opacity: 0.3;
            cursor: default;
        }

        .iw-mSelected {
            background-color: #F6F6F6;
        }

        .iw-cm-arrow-right {
            width: 0;
            height: 0;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-left: 5px solid #000;
            position: absolute;
            right: 5px;
            top: 50%;
            margin-top: -5px;
        }

        .iw-mSelected > .iw-cm-arrow-right {
        }

        /*context menu css end */</style>

    <style type="text/css">@-webkit-keyframes load4 {
                               0%,
                               100% {
                                   box-shadow: 0 -3em 0 0.2em, 2em -2em 0 0em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 0;
                               }
                               12.5% {
                                   box-shadow: 0 -3em 0 0, 2em -2em 0 0.2em, 3em 0 0 0, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
                               }
                               25% {
                                   box-shadow: 0 -3em 0 -0.5em, 2em -2em 0 0, 3em 0 0 0.2em, 2em 2em 0 0, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
                               }
                               37.5% {
                                   box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 0, 2em 2em 0 0.2em, 0 3em 0 0em, -2em 2em 0 -1em, -3em 0em 0 -1em, -2em -2em 0 -1em;
                               }
                               50% {
                                   box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 0em, 0 3em 0 0.2em, -2em 2em 0 0, -3em 0em 0 -1em, -2em -2em 0 -1em;
                               }
                               62.5% {
                                   box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 0, -2em 2em 0 0.2em, -3em 0 0 0, -2em -2em 0 -1em;
                               }
                               75% {
                                   box-shadow: 0em -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0.2em, -2em -2em 0 0;
                               }
                               87.5% {
                                   box-shadow: 0em -3em 0 0, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0, -2em -2em 0 0.2em;
                               }
                           }

        @keyframes load4 {
            0%,
            100% {
                box-shadow: 0 -3em 0 0.2em, 2em -2em 0 0em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 0;
            }
            12.5% {
                box-shadow: 0 -3em 0 0, 2em -2em 0 0.2em, 3em 0 0 0, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
            }
            25% {
                box-shadow: 0 -3em 0 -0.5em, 2em -2em 0 0, 3em 0 0 0.2em, 2em 2em 0 0, 0 3em 0 -1em, -2em 2em 0 -1em, -3em 0 0 -1em, -2em -2em 0 -1em;
            }
            37.5% {
                box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 0, 2em 2em 0 0.2em, 0 3em 0 0em, -2em 2em 0 -1em, -3em 0em 0 -1em, -2em -2em 0 -1em;
            }
            50% {
                box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 0em, 0 3em 0 0.2em, -2em 2em 0 0, -3em 0em 0 -1em, -2em -2em 0 -1em;
            }
            62.5% {
                box-shadow: 0 -3em 0 -1em, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 0, -2em 2em 0 0.2em, -3em 0 0 0, -2em -2em 0 -1em;
            }
            75% {
                box-shadow: 0em -3em 0 -1em, 2em -2em 0 -1em, 3em 0em 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0.2em, -2em -2em 0 0;
            }
            87.5% {
                box-shadow: 0em -3em 0 0, 2em -2em 0 -1em, 3em 0 0 -1em, 2em 2em 0 -1em, 0 3em 0 -1em, -2em 2em 0 0, -3em 0em 0 0, -2em -2em 0 0.2em;
            }
        }</style>
    <style type="text/css">/* This is not a zero-length file! */</style>
    <style type="text/css">a, abbr, acronym, address, applet, b, big, blockquote, body, button, caption, center, cite, code, dd, del, dfn, div, dl, dt, em, fieldset, font, footer, form, h1, h2, h3, h4, h5, h6, header, html, i, iframe, img, ins, kbd, label, legend, li, nav, object, ol, p, pre, q, s, samp, section, small, span, strike, strong, sub, sup, table, tbody, td, tfoot, th, thead, title, tr, tt, u, ul, var {
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;
            vertical-align: baseline;
            background: transparent
        }

        body {
            font-size: 10px;
            font-family: Arial, Helvetica, sans-serif
        }

        input, select, textarea {
            font-family: Helvetica, Arial, sans-serif;
            box-sizing: border-box
        }

        ol, ul {
            list-style: none
        }

        blockquote, q {
            quotes: none
        }

        ins {
            text-decoration: none
        }

        del {
            text-decoration: line-through
        }

        table {
            border-collapse: collapse;
            border-spacing: 0
        }

        a {
            cursor: pointer;
            text-decoration: none
        }

        body, html {
            height: 100%
        }

        body {
            overflow-x: hidden;
            overflow-y: scroll
        }

        .testStyles {
            overflow-y: hidden
        }

        .reset-button {
            background: none;
            border: 0;
            outline: 0;
            color: inherit;
            font: inherit;
            line-height: normal;
            overflow: visible;
            padding: 0;
            -webkit-appearance: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none
        }

        :focus {
            outline: none
        }

        .wixSiteProperties {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            overflow: hidden
        }

        .SITE_ROOT {
            min-height: 100%;
            position: relative;
            margin: 0 auto
        }

        .POPUPS_ROOT {
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            overflow-y: scroll;
            position: fixed;
            z-index: 99999
        }

        .POPUPS_ROOT.mobile {
            z-index: 1005
        }

        .POPUPS_WRAPPER {
            position: relative;
            overflow: hidden
        }

        .POPUPS_WRAPPER > div {
            margin: 0 auto
        }

        .auto-generated-link {
            color: inherit
        }

        .warmup .hidden-on-warmup {
            visibility: hidden
        }

        html.device-phone body {
            overflow-y: auto
        }

        html.device-mobile-optimized.device-android {
            margin-bottom: 1px
        }

        html.device-mobile-optimized.blockSiteScrolling > body {
            position: fixed;
            width: 100%
        }

        html.device-mobile-optimized.media-zoom-mode > body {
            touch-action: manipulation
        }

        html.device-mobile-optimized.media-zoom-mode > body > #SITE_CONTAINER {
            height: 100%;
            overflow: hidden
        }

        html.device-mobile-optimized.media-zoom-mode > body > #SITE_CONTAINER > .noop {
            height: 100%
        }

        html.device-mobile-optimized.media-zoom-mode > body > #SITE_CONTAINER > .noop > .siteAspectsContainer {
            height: 100%;
            z-index: 1005
        }

        .siteAspectsContainer {
            position: absolute;
            top: 0;
            margin: 0 auto;
            left: 0;
            right: 0
        }

        body.device-mobile-optimized {
            overflow-x: hidden;
            overflow-y: scroll
        }

        body.device-mobile-optimized.qa-mode {
            overflow-y: auto
        }

        body.device-mobile-optimized #SITE_CONTAINER {
            width: 320px;
            overflow-x: hidden;
            margin: 0 auto;
            position: relative
        }

        body.device-mobile-optimized > * {
            max-width: 100% !important
        }

        body.device-mobile-optimized .SITE_ROOT {
            overflow-x: hidden;
            overflow-y: hidden
        }

        body.device-mobile-non-optimized #SITE_CONTAINER > :not(.mobile-non-optimized-overflow) .SITE_ROOT {
            overflow-x: hidden;
            overflow-y: auto
        }

        body.device-mobile-non-optimized.fullScreenMode {
            background-color: #5f6360
        }

        body.device-mobile-non-optimized.fullScreenMode #MOBILE_ACTIONS_MENU, body.device-mobile-non-optimized.fullScreenMode #SITE_BACKGROUND, body.device-mobile-non-optimized.fullScreenMode .SITE_ROOT {
            visibility: hidden
        }

        body.fullScreenMode {
            overflow-x: hidden !important;
            overflow-y: hidden !important
        }

        body.fullScreenMode.device-mobile-optimized #TINY_MENU {
            opacity: 0;
            pointer-events: none
        }

        body.fullScreenMode-scrollable.device-mobile-optimized {
            overflow-x: hidden !important;
            overflow-y: auto !important
        }

        body.fullScreenMode-scrollable.device-mobile-optimized #masterPage, body.fullScreenMode-scrollable.device-mobile-optimized .SITE_ROOT {
            overflow-x: hidden !important;
            overflow-y: hidden !important
        }

        body.fullScreenMode-scrollable.device-mobile-optimized #masterPage, body.fullScreenMode-scrollable.device-mobile-optimized #SITE_BACKGROUND {
            height: auto !important
        }

        .fullScreenOverlay {
            z-index: 1005;
            position: fixed;
            left: 0;
            top: -60px;
            right: 0;
            bottom: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            overflow-y: hidden
        }

        .fullScreenOverlay > .fullScreenOverlayContent {
            margin: 0 auto;
            position: absolute;
            right: 0;
            top: 60px;
            left: 0;
            bottom: 0;
            overflow: hidden;
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }

        .mobile-actions-menu-wrapper {
            z-index: 1000
        }

        body[contenteditable] {
            overflow-x: hidden;
            overflow-y: auto
        }

        .bold {
            font-weight: 700
        }

        .italic {
            font-style: italic
        }

        .underline {
            text-decoration: underline
        }

        .lineThrough {
            text-decoration: line-through
        }

        .singleLineText {
            white-space: nowrap;
            text-overflow: ellipsis
        }

        .alignLeft {
            text-align: left
        }

        .alignCenter {
            text-align: center
        }

        .alignRight {
            text-align: right
        }

        .alignJustify {
            text-align: justify
        }

        ol.font_100, ul.font_100 {
            color: #080808;
            font-family: "Arial, Helvetica, sans-serif", serif;
            font-size: 10px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            margin: 0;
            text-decoration: none;
            line-height: normal;
            letter-spacing: normal
        }

        ol.font_100 li, ul.font_100 li {
            margin-bottom: 12px
        }

        letter {
            position: relative
        }

        letter, word {
            display: inline-block
        }

        word {
            white-space: nowrap
        }

        letter.space, word.space {
            display: inline
        }

        ol.wix-list-text-align, ul.wix-list-text-align {
            list-style-position: inside
        }

        ol.wix-list-text-align h1, ol.wix-list-text-align h2, ol.wix-list-text-align h3, ol.wix-list-text-align h4, ol.wix-list-text-align h5, ol.wix-list-text-align h6, ol.wix-list-text-align p, ul.wix-list-text-align h1, ul.wix-list-text-align h2, ul.wix-list-text-align h3, ul.wix-list-text-align h4, ul.wix-list-text-align h5, ul.wix-list-text-align h6, ul.wix-list-text-align p {
            display: inline
        }

        .wixapps-less-spacers-align.ltr {
            text-align: left
        }

        .wixapps-less-spacers-align.center {
            text-align: center
        }

        .wixapps-less-spacers-align.rtl {
            text-align: right
        }

        .wixapps-less-spacers-align > a, .wixapps-less-spacers-align > div {
            display: inline-block !important
        }

        .flex_display {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex
        }

        .flex_vbox {
            box-sizing: border-box;
            padding-top: .01em;
            padding-bottom: .01em
        }

        a.wixAppsLink img {
            cursor: pointer
        }

        .singleLine {
            white-space: nowrap;
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            word-wrap: normal
        }

        [data-z-counter] {
            z-index: 0
        }

        [data-z-counter="0"] {
            z-index: auto
        }

        .circle-preloader {
            -webkit-animation: semi-rotate 1s 1ms linear infinite;
            animation: semi-rotate 1s 1ms linear infinite;
            height: 30px;
            left: 50%;
            margin-left: -15px;
            margin-top: -15px;
            overflow: hidden;
            position: absolute;
            top: 50%;
            -webkit-transform-origin: 100% 50%;
            transform-origin: 100% 50%;
            width: 15px
        }

        .circle-preloader:before {
            content: "";
            top: 0;
            left: 0;
            right: -100%;
            bottom: 0;
            border: 3px solid currentColor;
            border-color: currentColor transparent transparent currentColor;
            border-radius: 50%;
            position: absolute;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-animation: inner-rotate .5s 1ms linear infinite alternate;
            animation: inner-rotate .5s 1ms linear infinite alternate;
            color: #7fccf7
        }

        .circle-preloader:after {
            content: "";
            top: 0;
            left: 0;
            right: -100%;
            bottom: 0;
            border: 3px solid currentColor;
            border-color: currentColor transparent transparent currentColor;
            border-radius: 50%;
            position: absolute;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-animation: inner-rotate .5s 1ms linear infinite alternate;
            animation: inner-rotate .5s 1ms linear infinite alternate;
            color: #3899ec;
            opacity: 0
        }

        .circle-preloader.white:before {
            color: #f0f0f0
        }

        .circle-preloader.white:after {
            color: #dcdcdc
        }

        @-webkit-keyframes inner-rotate {
            to {
                opacity: 1;
                -webkit-transform: rotate(115deg);
                transform: rotate(115deg)
            }
        }

        @keyframes inner-rotate {
            to {
                opacity: 1;
                -webkit-transform: rotate(115deg);
                transform: rotate(115deg)
            }
        }

        @-webkit-keyframes semi-rotate {
            0% {
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg)
            }
            45% {
                -webkit-transform: rotate(198deg);
                transform: rotate(198deg)
            }
            55% {
                -webkit-transform: rotate(234deg);
                transform: rotate(234deg)
            }
            to {
                -webkit-transform: rotate(540deg);
                transform: rotate(540deg)
            }
        }

        @keyframes semi-rotate {
            0% {
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg)
            }
            45% {
                -webkit-transform: rotate(198deg);
                transform: rotate(198deg)
            }
            55% {
                -webkit-transform: rotate(234deg);
                transform: rotate(234deg)
            }
            to {
                -webkit-transform: rotate(540deg);
                transform: rotate(540deg)
            }
        }

        .hidden-comp-ghost-mode {
            opacity: .5
        }

        .collapsed-comp-mode:after {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            content: "";
            background: -webkit-repeating-linear-gradient(135deg, transparent, transparent 49%, #2b5672 0, #2b5672 0, transparent 51%);
            background: repeating-linear-gradient(-45deg, transparent, transparent 49%, #2b5672 0, #2b5672 0, transparent 51%);
            background-size: 6px 6px;
            background-repeat: repeat
        }

        .g-transparent-a:link, .g-transparent-a:visited {
            border-color: transparent
        }

        .transitioning-comp * {
            transition: inherit !important;
            -webkit-transition: inherit !important
        }

        .selectionSharerContainer {
            position: absolute;
            background-color: #fff;
            box-shadow: 0 4px 10px 0 rgba(57, 86, 113, .24);
            width: 142px;
            height: 45px;
            border-radius: 100px;
            text-align: center
        }

        .selectionSharerContainer:after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 42%;
            border-width: 10px 10px 0;
            border-style: solid;
            border-color: #fff transparent;
            display: block;
            width: 0
        }

        .selectionSharerContainer .selectionSharerOption {
            display: inline-block;
            cursor: pointer;
            vertical-align: top;
            padding: 13px 11px 11px 13px;
            margin: 1px;
            z-index: -1
        }

        .selectionSharerContainer .selectionSharerVerticalSeparator {
            margin-top: 9px;
            margin-bottom: 18px;
            background-color: #eaf7ff;
            height: 26px;
            width: 1px;
            display: inline-block
        }

        .visual-focus-on .focus-ring:not(.has-custom-focus):focus {
            box-shadow: inset 0 0 0 1px hsla(0, 0%, 100%, .9), 0 0 1px 2px #3899ec !important
        }</style>

    <meta name="robots" content="index, follow" />

</head>
<body class="" style="overflow-x: hidden;">
<div id="SITE_CONTAINER" data-santa-render-status="CLIENT">
    <div data-reactroot="" class="noop" data-santa-version="1.2682.24">
        <div>
            <style type="text/css" data-styleid="theme_fonts">.font_0 {
                    font: normal normal bold 60px/1.4em 'open sans', sans-serif;
                    color: #FFFFFF;
                }

                .font_1 {
                    font: normal normal normal 16px/1.4em din-next-w01-light, din-next-w02-light, din-next-w10-light, sans-serif;
                    color: #474A59;
                }

                .font_2 {
                    font: normal normal normal 45px/1.4em avenir-lt-w01_85-heavy1475544, sans-serif;
                    color: #070A0E;
                }

                .font_3 {
                    font: normal normal normal 90px/1.4em avenir-lt-w01_85-heavy1475544, sans-serif;
                    color: #070A0E;
                }

                .font_4 {
                    font: normal normal bold 38px/1.4em 'open sans', sans-serif;
                    color: #070A0E;
                }

                .font_5 {
                    font: normal normal normal 25px/1.4em avenir-lt-w01_35-light1475496, sans-serif;
                    color: #070A0E;
                }

                .font_6 {
                    font: normal normal bold 20px/1.4em 'open sans', sans-serif;
                    color: #070A0E;
                }

                .font_7 {
                    font: normal normal normal 17px/1.4em 'open sans', sans-serif;
                    color: #070A0E;
                }

                .font_8 {
                    font: normal normal normal 15px/1.4em 'open sans', sans-serif;
                    color: #070A0E;
                }

                .font_9 {
                    font: normal normal normal 13px/1.4em 'open sans', sans-serif;
                    color: #070A0E;
                }

                .font_10 {
                    font: normal normal normal 12px/1.4em din-next-w01-light, din-next-w02-light, din-next-w10-light, sans-serif;
                    color: #474A59;
                }
            </style>
            <style type="text/css" data-styleid="theme_colors">.color_0 {
                    color: #FFFFFF;
                }

                .backcolor_0 {
                    background-color: #FFFFFF;
                }

                .color_1 {
                    color: #FFFFFF;
                }

                .backcolor_1 {
                    background-color: #FFFFFF;
                }

                .color_2 {
                    color: #000000;
                }

                .backcolor_2 {
                    background-color: #000000;
                }

                .color_3 {
                    color: #ED1C24;
                }

                .backcolor_3 {
                    background-color: #ED1C24;
                }

                .color_4 {
                    color: #0088CB;
                }

                .backcolor_4 {
                    background-color: #0088CB;
                }

                .color_5 {
                    color: #FFCB05;
                }

                .backcolor_5 {
                    background-color: #FFCB05;
                }

                .color_6 {
                    color: #727272;
                }

                .backcolor_6 {
                    background-color: #727272;
                }

                .color_7 {
                    color: #B0B0B0;
                }

                .backcolor_7 {
                    background-color: #B0B0B0;
                }

                .color_8 {
                    color: #FFFFFF;
                }

                .backcolor_8 {
                    background-color: #FFFFFF;
                }

                .color_9 {
                    color: #727272;
                }

                .backcolor_9 {
                    background-color: #727272;
                }

                .color_10 {
                    color: #B0B0B0;
                }

                .backcolor_10 {
                    background-color: #B0B0B0;
                }

                .color_11 {
                    color: #FFFFFF;
                }

                .backcolor_11 {
                    background-color: #FFFFFF;
                }

                .color_12 {
                    color: #EDEFF5;
                }

                .backcolor_12 {
                    background-color: #EDEFF5;
                }

                .color_13 {
                    color: #A0A09F;
                }

                .backcolor_13 {
                    background-color: #A0A09F;
                }

                .color_14 {
                    color: #474A59;
                }

                .backcolor_14 {
                    background-color: #474A59;
                }

                .color_15 {
                    color: #070A0E;
                }

                .backcolor_15 {
                    background-color: #070A0E;
                }

                .color_16 {
                    color: #F4B5BB;
                }

                .backcolor_16 {
                    background-color: #F4B5BB;
                }

                .color_17 {
                    color: #EA8F98;
                }

                .backcolor_17 {
                    background-color: #EA8F98;
                }

                .color_18 {
                    color: #DF3143;
                }

                .backcolor_18 {
                    background-color: #DF3143;
                }

                .color_19 {
                    color: #95212D;
                }

                .backcolor_19 {
                    background-color: #95212D;
                }

                .color_20 {
                    color: #4A1016;
                }

                .backcolor_20 {
                    background-color: #4A1016;
                }

                .color_21 {
                    color: #BBC8DD;
                }

                .backcolor_21 {
                    background-color: #BBC8DD;
                }

                .color_22 {
                    color: #94A3BA;
                }

                .backcolor_22 {
                    background-color: #94A3BA;
                }

                .color_23 {
                    color: #6A7B98;
                }

                .backcolor_23 {
                    background-color: #6A7B98;
                }

                .color_24 {
                    color: #2E4975;
                }

                .backcolor_24 {
                    background-color: #2E4975;
                }

                .color_25 {
                    color: #17253B;
                }

                .backcolor_25 {
                    background-color: #17253B;
                }

                .color_26 {
                    color: #AFC7F4;
                }

                .backcolor_26 {
                    background-color: #AFC7F4;
                }

                .color_27 {
                    color: #86A8E9;
                }

                .backcolor_27 {
                    background-color: #86A8E9;
                }

                .color_28 {
                    color: #2163DE;
                }

                .backcolor_28 {
                    background-color: #2163DE;
                }

                .color_29 {
                    color: #164294;
                }

                .backcolor_29 {
                    background-color: #164294;
                }

                .color_30 {
                    color: #0B214A;
                }

                .backcolor_30 {
                    background-color: #0B214A;
                }

                .color_31 {
                    color: #B1F4E4;
                }

                .backcolor_31 {
                    background-color: #B1F4E4;
                }

                .color_32 {
                    color: #89E9D1;
                }

                .backcolor_32 {
                    background-color: #89E9D1;
                }

                .color_33 {
                    color: #28DEB1;
                }

                .backcolor_33 {
                    background-color: #28DEB1;
                }

                .color_34 {
                    color: #1B9476;
                }

                .backcolor_34 {
                    background-color: #1B9476;
                }

                .color_35 {
                    color: #0D4A3B;
                }

                .backcolor_35 {
                    background-color: #0D4A3B;
                }
            </style>
            <style type="text/css" data-styleid="s_DtaksTPAWidgetSkin">.s_DtaksTPAWidgetSkin {
                    overflow: hidden;
                }

                .s_DtaksTPAWidgetSkin iframe {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    overflow: hidden;
                }

                .s_DtaksTPAWidgetSkinpreloaderOverlay {
                    position: absolute;
                    top: 0;
                    left: 0;
                    color: #373737;
                    width: 100%;
                    height: 100%;
                }

                .s_DtaksTPAWidgetSkinpreloaderOverlaycontent {
                    width: 100%;
                    height: 100%;
                }

                .s_DtaksTPAWidgetSkinunavailableMessageOverlay {
                    position: absolute;
                    top: 0;
                    left: 0;
                    color: #373737;
                    width: 100%;
                    height: 100%;
                }

                .s_DtaksTPAWidgetSkinunavailableMessageOverlaycontent {
                    width: 100%;
                    height: 100%;
                    background: rgba(255, 255, 255, 0.9);
                    font-size: 0;
                    margin-top: 5px;
                }

                .s_DtaksTPAWidgetSkinunavailableMessageOverlaytextContainer {
                    color: #373737;
                    font-family: "Helvetica Neue", "HelveticaNeueW01-55Roma", "HelveticaNeueW02-55Roma", "HelveticaNeueW10-55Roma", Helvetica, Arial, sans-serif;
                    font-size: 14px;
                    display: inline-block;
                    vertical-align: middle;
                    width: 100%;
                    margin-top: 10px;
                    text-align: center;
                }

                .s_DtaksTPAWidgetSkinunavailableMessageOverlayreloadButton {
                    display: inline-block;
                }

                .s_DtaksTPAWidgetSkinunavailableMessageOverlay a {
                    color: #0099FF;
                    text-decoration: underline;
                    cursor: pointer;
                }

                .s_DtaksTPAWidgetSkinunavailableMessageOverlayiconContainer {
                    display: none;
                }

                .s_DtaksTPAWidgetSkinunavailableMessageOverlaydismissButton {
                    display: none;
                }

                .s_DtaksTPAWidgetSkinunavailableMessageOverlaytextTitle {
                    font-family: "Helvetica Neue", "HelveticaNeueW01-55Roma", "HelveticaNeueW02-55Roma", "HelveticaNeueW10-55Roma", Helvetica, Arial, sans-serif;
                    display: none;
                }

                .s_DtaksTPAWidgetSkinunavailableMessageOverlay[data-state~="hideIframe"] .s_DtaksTPAWidgetSkinunavailableMessageOverlay_buttons {
                    opacity: 1;
                }

                .s_DtaksTPAWidgetSkinunavailableMessageOverlay[data-state~="hideOverlay"] {
                    display: none;
                }</style>
            <style type="text/css" data-styleid="hc1">.hc1screenWidthBackground {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }

                .hc1[data-state~="fixedPosition"] {
                    position: fixed !important;
                    left: auto !important;
                    z-index: 50;
                }

                .hc1[data-state~="fixedPosition"].hc1_footer {
                    top: auto;
                    bottom: 0;
                }

                .hc1bg {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }

                .hc1inlineContent {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }

                .hc1centeredContent {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }</style>
            <style type="text/css" data-styleid="style-it2zq6n1">.style-it2zq6n1screenWidthBackground {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }

                .style-it2zq6n1[data-state~="fixedPosition"] {
                    position: fixed !important;
                    left: auto !important;
                    z-index: 50;
                }

                .style-it2zq6n1[data-state~="fixedPosition"].style-it2zq6n1_footer {
                    top: auto;
                    bottom: 0;
                }

                .style-it2zq6n1_bg {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    background-color: rgba(237, 239, 245, 1);
                    border-top: 0px solid rgba(71, 74, 89, 1);
                    border-bottom: 0px solid rgba(71, 74, 89, 1);
                }

                .style-it2zq6n1[data-state~="mobileView"] .style-it2zq6n1bg {
                    left: 10px;
                    right: 10px;
                }

                .style-it2zq6n1bg {
                    position: absolute;
                    top: 0px;
                    right: 0;
                    bottom: 0px;
                    left: 0;
                    background-color: rgba(237, 239, 245, 1);
                    border-radius: 0;
                }

                .style-it2zq6n1inlineContent {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }

                .style-it2zq6n1centeredContent {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }</style>
            <style type="text/css" data-styleid="txtNew">.txtNew {
                    word-wrap: break-word;
                }

                .txtNew_override-left * {
                    text-align: left !important;
                }

                .txtNew_override-right * {
                    text-align: right !important;
                }

                .txtNew_override-center * {
                    text-align: center !important;
                }

                .txtNew_override-justify * {
                    text-align: justify !important;
                }

                .txtNew li {
                    font-style: inherit;
                    font-weight: inherit;
                    line-height: inherit;
                    letter-spacing: normal;
                }

                .txtNew ol, .txtNew ul {
                    padding-left: 1.3em;
                    padding-right: 0;
                    margin-left: 0.5em;
                    margin-right: 0;
                    line-height: normal;
                    letter-spacing: normal;
                }

                .txtNew ul {
                    list-style-type: disc;
                }

                .txtNew ol {
                    list-style-type: decimal;
                }

                .txtNew ul ul, .txtNew ol ul {
                    list-style-type: circle;
                }

                .txtNew ul ul ul, .txtNew ol ul ul {
                    list-style-type: square;
                }

                .txtNew ul ol ul, .txtNew ol ol ul {
                    list-style-type: square;
                }

                .txtNew ul[dir="rtl"], .txtNew ol[dir="rtl"] {
                    padding-left: 0;
                    padding-right: 1.3em;
                    margin-left: 0;
                    margin-right: 0.5em;
                }

                .txtNew ul[dir="rtl"] ul, .txtNew ul[dir="rtl"] ol, .txtNew ol[dir="rtl"] ul, .txtNew ol[dir="rtl"] ol {
                    padding-left: 0;
                    padding-right: 1.3em;
                    margin-left: 0;
                    margin-right: 0.5em;
                }

                .txtNew p {
                    margin: 0;
                    line-height: normal;
                    letter-spacing: normal;
                }

                .txtNew h1 {
                    margin: 0;
                    line-height: normal;
                    letter-spacing: normal;
                }

                .txtNew h2 {
                    margin: 0;
                    line-height: normal;
                    letter-spacing: normal;
                }

                .txtNew h3 {
                    margin: 0;
                    line-height: normal;
                    letter-spacing: normal;
                }

                .txtNew h4 {
                    margin: 0;
                    line-height: normal;
                    letter-spacing: normal;
                }

                .txtNew h5 {
                    margin: 0;
                    line-height: normal;
                    letter-spacing: normal;
                }

                .txtNew h6 {
                    margin: 0;
                    line-height: normal;
                    letter-spacing: normal;
                }

                .txtNew a {
                    color: inherit;
                }</style>
            <style type="text/css"
                   data-styleid="b1">.b1[data-state~="shouldUseFlex"] .b1link, .b1[data-state~="shouldUseFlex"] .b1labelwrapper {
                    text-align: initial;
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: flex;
                    -webkit-box-align: center;
                    -webkit-align-items: center;
                    align-items: center;
                }

                .b1[data-state~="shouldUseFlex"][data-state~="center"] .b1link, .b1[data-state~="shouldUseFlex"][data-state~="center"] .b1labelwrapper {
                    -webkit-box-pack: center;
                    -webkit-justify-content: center;
                    justify-content: center;
                }

                .b1[data-state~="shouldUseFlex"][data-state~="left"] .b1link, .b1[data-state~="shouldUseFlex"][data-state~="left"] .b1labelwrapper {
                    -webkit-box-pack: start;
                    -webkit-justify-content: flex-start;
                    justify-content: flex-start;
                }

                .b1[data-state~="shouldUseFlex"][data-state~="right"] .b1link, .b1[data-state~="shouldUseFlex"][data-state~="right"] .b1labelwrapper {
                    -webkit-box-pack: end;
                    -webkit-justify-content: flex-end;
                    justify-content: flex-end;
                }

                .b1link {
                    border-radius: 0;
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    transition: border-color 0.4s ease 0s, background-color 0.4s ease 0s;
                }

                .b1label {
                    font: normal normal normal 13px/1.4em 'open sans', sans-serif;
                    transition: color 0.4s ease 0s;
                    color: #070A0E;
                    display: inline-block;
                    margin: calc(-1 * 1px) 1px 0;
                    position: relative;
                    white-space: nowrap;
                }

                .b1[data-state~="shouldUseFlex"] .b1label {
                    margin: 0;
                }

                .b1[data-disabled="false"] .b1link {
                    background-color: transparent;
                    border: solid rgba(7, 10, 14, 1) 1px;
                    cursor: pointer !important;
                }

                .b1[data-disabled="false"]:active[data-state~="mobile"] .b1link, .b1[data-disabled="false"]:hover[data-state~="desktop"] .b1link, .b1[data-disabled="false"][data-preview~="hover"] .b1link {
                    background-color: rgba(255, 255, 255, 1);
                    border-color: rgba(223, 49, 67, 1);
                }

                .b1[data-disabled="false"]:active[data-state~="mobile"] .b1label, .b1[data-disabled="false"]:hover[data-state~="desktop"] .b1label, .b1[data-disabled="false"][data-preview~="hover"] .b1label {
                    color: #DF3143;
                }

                .b1[data-disabled="true"] .b1link, .b1[data-preview~="disabled"] .b1link {
                    background-color: rgba(204, 204, 204, 1);
                    border-color: rgba(204, 204, 204, 1);
                }

                .b1[data-disabled="true"] .b1label, .b1[data-preview~="disabled"] .b1label {
                    color: #FFFFFF;
                }</style>
            <style type="text/css" data-styleid="lb1">.lb1itemsContainer {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    white-space: nowrap;
                }

                .lb1itemsContainer > li:last-child {
                    margin: 0 !important;
                }

                .lb1[data-state~="mobileView"] .lb1itemsContainer {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    white-space: normal;
                }

                .lb1 a {
                    display: block;
                    height: 100%;
                }

                .lb1imageItemlink {
                    cursor: pointer;
                }

                .lb1imageItemimageimage {
                    position: static;
                    box-shadow: #000 0 0 0;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                }</style>
            <style type="text/css" data-styleid="pc1">.pc1screenWidthBackground {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }

                .pc1[data-state~="fixedPosition"] {
                    position: fixed !important;
                    left: auto !important;
                    z-index: 50;
                }

                .pc1[data-state~="fixedPosition"].pc1_footer {
                    top: auto;
                    bottom: 0;
                }

                .pc1bg {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }

                .pc1inlineContent {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }

                .pc1centeredContent {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }</style>
            <style type="text/css" data-styleid="s_VOwPageGroupSkin">.s_VOwPageGroupSkin {
                    height: 100px;
                    width: 100px;
                }

                .s_VOwPageGroupSkinoverlay {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    background-color: rgba(0, 0, 0, 0.664);
                }

                .s_VOwPageGroupSkininlineContent {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }</style>
            <style type="text/css" data-styleid="style-ix4t813j">.style-ix4t813j a span {
                    pointer-events: none;
                }

                .style-ix4t813j_noLink {
                    cursor: default !important;
                }

                .style-ix4t813j_counter {
                    margin: 0 10px;
                    opacity: 0.6;
                }

                .style-ix4t813jmenuContainer {
                    padding: 0;
                    margin: 0;
                    position: relative;
                }

                .style-ix4t813jmenuContainer .style-ix4t813j_emptySubMenu {
                    display: none !important;
                }

                .style-ix4t813j_item {
                    padding-left: 0px;
                    padding-right: 0px;
                    margin: 0;
                    position: relative;
                    display: block;
                    cursor: pointer;
                    list-style: none;
                }

                .style-ix4t813j_item:last-child {
                    border-bottom: 0;
                }

                .style-ix4t813j_item.style-ix4t813j_hover:not(.style-ix4t813j_noLink) > .style-ix4t813j_label {
                    color: #BBC8DD;
                }

                .style-ix4t813j_item.style-ix4t813j_hover > .style-ix4t813j_subMenu {
                    opacity: 1;
                    transition: all 0.4s ease 0s;
                    display: block;
                }

                .style-ix4t813j_item.style-ix4t813j_selected > .style-ix4t813j_label, .style-ix4t813j_item.style-ix4t813j_selectedContainer > .style-ix4t813j_label {
                    color: #FFFFFF;
                }

                .style-ix4t813j_label {
                    font: normal normal 700 20px/1.4em 'open sans', sans-serif;
                    color: #BBC8DD;
                    display: inline;
                    white-space: nowrap;
                    overflow: hidden;
                }

                .style-ix4t813j_subMenu {
                    z-index: 999;
                    min-width: 100%;
                    opacity: 0;
                    display: none;
                    position: absolute;
                    transition: all 0.4s ease 0s;
                    background-color: rgba(71, 74, 89, 1);
                }

                .style-ix4t813j_subMenu .style-ix4t813j_label {
                    font: normal normal bold 20px/1.4em 'open sans', sans-serif;
                }

                .style-ix4t813j_subMenu:before {
                    content: " ";
                    display: block;
                    width: 0px;
                    height: 100%;
                    position: absolute;
                    top: 0;
                }

                .style-ix4t813j[data-state~="items-align-left"] .style-ix4t813j_item {
                    text-align: left;
                }

                .style-ix4t813j[data-state~="items-align-center"] .style-ix4t813j_item {
                    text-align: center;
                }

                .style-ix4t813j[data-state~="items-align-right"] .style-ix4t813j_item {
                    text-align: right;
                }

                .style-ix4t813j[data-state~="subItems-align-left"] .style-ix4t813j_subMenu > .style-ix4t813j_item {
                    text-align: left;
                    padding-left: 0px;
                    padding-right: 7px;
                }

                .style-ix4t813j[data-state~="subItems-align-center"] .style-ix4t813j_subMenu > .style-ix4t813j_item {
                    text-align: center;
                    padding-left: 0px;
                    padding-right: 0px;
                }

                .style-ix4t813j[data-state~="subItems-align-right"] .style-ix4t813j_subMenu > .style-ix4t813j_item {
                    text-align: right;
                    padding-left: 7px;
                    padding-right: 0px;
                }

                .style-ix4t813j[data-state~="subMenuOpenSide-right"] .style-ix4t813j_subMenu {
                    left: 100%;
                    float: left;
                    margin-left: 0px;
                }

                .style-ix4t813j[data-state~="subMenuOpenSide-right"] .style-ix4t813j_subMenu:before {
                    left: 0;
                    margin-left: calc(-1 * 0px);
                }

                .style-ix4t813j[data-state~="subMenuOpenSide-left"] .style-ix4t813j_subMenu {
                    right: 100%;
                    float: right;
                    margin-right: 0px;
                }

                .style-ix4t813j[data-state~="subMenuOpenSide-left"] .style-ix4t813j_subMenu:before {
                    right: 0;
                    margin-right: calc(-1 * 0px);
                }

                .style-ix4t813j[data-open-direction~="subMenuOpenDir-down"] .style-ix4t813j_subMenu {
                    top: 0;
                }

                .style-ix4t813j[data-open-direction~="subMenuOpenDir-up"] .style-ix4t813j_subMenu {
                    bottom: 0;
                }

                .style-ix4t813jmenuContainer_with-validation-indication select:not(:focus):invalid {
                    border: solid 2px rgba(249, 249, 249, 1);
                    background-color: rgba(255, 255, 255, 1);
                }

                .style-ix4t813jmenuContainer select {
                    border-radius: 5px;
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    font: normal normal 700 20px/1.4em 'open sans', sans-serif;
                    background-color: rgba(255, 255, 255, 1);
                    color: #BBC8DD;
                    border: solid 2px rgba(249, 249, 249, 1);
                    margin: 0;
                    padding: 0 45px;
                    cursor: pointer;
                    position: relative;
                    max-width: 100%;
                    min-width: 100%;
                    min-height: 10px;
                    height: 100%;
                    text-overflow: ellipsis;
                    white-space: nowrap;
                    display: block;
                }

                .style-ix4t813jmenuContainer select option {
                    text-overflow: ellipsis;
                    white-space: nowrap;
                    overflow: hidden;
                }

                .style-ix4t813jmenuContainer select.style-ix4t813jmenuContainer_placeholder-style {
                    color: #070A0E;
                }

                .style-ix4t813jmenuContainer select:-moz-focusring {
                    color: transparent;
                    text-shadow: 0 0 0 #000;
                }

                .style-ix4t813jmenuContainer select::-ms-expand {
                    display: none;
                }

                .style-ix4t813jmenuContainer select:focus::-ms-value {
                    background: transparent;
                }

                .style-ix4t813jmenuContainer select:not(.style-ix4t813jmenuContainer_mobileCollection):hover, .style-ix4t813jmenuContainer select:not(.style-ix4t813jmenuContainer_mobileCollection)[data-preview~="hover"] {
                    border: solid 2px rgba(249, 249, 249, 1);
                    background-color: rgba(255, 255, 255, 1);
                }

                .style-ix4t813jmenuContainer select:not(.style-ix4t813jmenuContainer_mobileCollection):focus, .style-ix4t813jmenuContainer select:not(.style-ix4t813jmenuContainer_mobileCollection)[data-preview~="focus"] {
                    border: solid 2px rgba(249, 249, 249, 1);
                    background-color: rgba(255, 255, 255, 1);
                }

                .style-ix4t813jmenuContainer select:not(.style-ix4t813jmenuContainer_mobileCollection)[data-error="true"], .style-ix4t813jmenuContainer select:not(.style-ix4t813jmenuContainer_mobileCollection)[data-preview~="error"] {
                    border: solid 2px rgba(249, 249, 249, 1);
                    background-color: rgba(255, 255, 255, 1);
                }

                .style-ix4t813jmenuContainer select:not(.style-ix4t813jmenuContainer_mobileCollection):disabled, .style-ix4t813jmenuContainer select:not(.style-ix4t813jmenuContainer_mobileCollection)[data-disabled="true"], .style-ix4t813jmenuContainer select:not(.style-ix4t813jmenuContainer_mobileCollection)[data-preview~="disabled"] {
                    border-width: 2px;
                    border-color: rgba(204, 204, 204, 1);
                    color: #FFFFFF;
                    background-color: rgba(204, 204, 204, 1);
                }

                .style-ix4t813jmenuContainer select:not(.style-ix4t813jmenuContainer_mobileCollection):disabled + .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer select:not(.style-ix4t813jmenuContainer_mobileCollection)[data-disabled="true"] + .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer select:not(.style-ix4t813jmenuContainer_mobileCollection)[data-preview~="disabled"] + .style-ix4t813jmenuContainerarrow {
                    border-width: 2px;
                    border-color: rgba(204, 204, 204, 1);
                    color: #FFFFFF;
                    border: none;
                }

                .style-ix4t813jmenuContainerarrow {
                    position: absolute;
                    pointer-events: none;
                    top: 0;
                    box-sizing: border-box;
                    padding-left: 20px;
                    padding-right: 20px;
                    height: inherit;
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: flex;
                    -webkit-box-align: center;
                    -webkit-align-items: center;
                    align-items: center;
                }

                .style-ix4t813jmenuContainerarrow .style-ix4t813jmenuContainer_svg_container {
                    width: 12px;
                }

                .style-ix4t813jmenuContainerarrow .style-ix4t813jmenuContainer_svg_container svg {
                    height: 100%;
                    fill: rgba(237, 239, 245, 1);
                }

                .style-ix4t813jmenuContainer_left-direction {
                    text-align-last: left;
                }

                .style-ix4t813jmenuContainer_left-direction .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_left-direction select:hover + .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_left-direction select[data-preview~="hover"] + .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_left-direction select:focus + .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_left-direction select[data-preview~="focus"] + .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_left-direction[data-preview~="focus"] .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_left-direction select[data-error="true"] + .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_left-direction select[data-preview~="error"] + .style-ix4t813jmenuContainerarrow {
                    border-left: 0;
                }

                .style-ix4t813jmenuContainer_left-direction .style-ix4t813jmenuContainerarrow {
                    right: 0;
                }

                .style-ix4t813jmenuContainer_right-direction {
                    text-align-last: right;
                }

                .style-ix4t813jmenuContainer_right-direction .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_right-direction select:hover + .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_right-direction select[data-preview~="hover"] + .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_right-direction select:focus + .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_right-direction select[data-preview~="focus"] + .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_right-direction[data-preview~="focus"] .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_right-direction select[data-error="true"] + .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_right-direction select[data-preview~="error"] + .style-ix4t813jmenuContainerarrow {
                    border-right: 0;
                }

                .style-ix4t813jmenuContainer_right-direction .style-ix4t813jmenuContainerarrow {
                    left: 0;
                }

                .style-ix4t813jmenuContainer_center-direction {
                    text-align-last: left;
                    text-align-last: center;
                }

                .style-ix4t813jmenuContainer_center-direction .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_center-direction select:hover + .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_center-direction select[data-preview~="hover"] + .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_center-direction select:focus + .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_center-direction select[data-preview~="focus"] + .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_center-direction[data-preview~="focus"] .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_center-direction select[data-error="true"] + .style-ix4t813jmenuContainerarrow, .style-ix4t813jmenuContainer_center-direction select[data-preview~="error"] + .style-ix4t813jmenuContainerarrow {
                    border-left: 0;
                }

                .style-ix4t813jmenuContainer_center-direction .style-ix4t813jmenuContainerarrow {
                    right: 0;
                }

                .style-ix4t813jmenuContainer_mobileMenuContainer {
                    border: 0;
                }

                .style-ix4t813jmenuContainer_mobileMenuContainer .style-ix4t813jmenuContainerarrow .style-ix4t813jmenuContainer_svg_container .style-ix4t813jmenuContainericon {
                    fill: #BBC8DD;
                }</style>
            <style type="text/css" data-styleid="p1">.p1bg {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }

                .p1[data-state~="mobileView"] .p1bg {
                    left: 10px;
                    right: 10px;
                }

                .p1inlineContent {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }</style>
            <style type="text/css" data-styleid="style-it437nea1">.style-it437nea1 {
                    background-color: transparent;
                    box-sizing: border-box !important;
                    position: relative;
                    min-height: 50px;
                }

                .style-it437nea1[data-shouldhideoverflowcontent="true"] .style-it437nea1inlineContent {
                    overflow: hidden;
                }

                .style-it437nea1navigationArrows[data-show-navigation-arrows="false"] {
                    display: none;
                }

                .style-it437nea1dotsMenuWrapper[data-show-navigation-dots="false"] {
                    display: none;
                }

                .style-it437nea1bg {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }

                .style-it437nea1inlineContent {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }

                .style-it437nea1inlineContentParent {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                }

                .style-it437nea1dotsMenuWrapper {
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: flex;
                    -webkit-box-align: center;
                    -webkit-align-items: center;
                    align-items: center;
                    position: absolute;
                    width: 100%;
                    pointer-events: none;
                }

                .style-it437nea1_navigation-arrows {
                    position: absolute;
                    width: 100%;
                }

                .style-it437nea1_navigation-dot {
                    pointer-events: auto;
                    position: relative;
                    display: inline-block;
                    cursor: pointer;
                    border-radius: 50%;
                    background-color: rgba(46, 73, 117, 1);
                }

                .style-it437nea1prevButton {
                    -webkit-transform: scale(-1);
                    transform: scale(-1);
                }

                .style-it437nea1_navigation-dot.style-it437nea1_selected {
                    background-color: transparent;
                    border: 2px solid rgba(46, 73, 117, 1);
                }

                .style-it437nea1_btn {
                    position: absolute;
                    cursor: pointer;
                }

                .style-it437nea1_btn:hover {
                    opacity: .6;
                }

                .style-it437nea1_btn svg {
                    fill: rgba(46, 73, 117, 1);
                }</style>
            <style type="text/css" data-styleid="style-it437nf7">.style-it437nf7borderNode {
                    border: 0px solid rgba(149, 33, 45, 1);
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    pointer-events: none;
                }

                .style-it437nf7inlineContent {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }

                .style-it437nf7inlineContentParent {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                }

                .style-it437nf7[data-shouldhideoverflowcontent="true"] {
                    overflow: hidden;
                }</style>
            <style type="text/css" data-styleid="style-it437nft">.style-it437nft {
                    border-bottom: 7px solid rgba(223, 49, 67, 1);
                    height: 0 !important;
                    min-height: 0 !important;
                }</style>
            <style type="text/css" data-styleid="style-it437ng0">.style-it437ng0borderNode {
                    border: 0px solid rgba(149, 33, 45, 1);
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    pointer-events: none;
                }

                .style-it437ng0inlineContent {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }

                .style-it437ng0inlineContentParent {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                }

                .style-it437ng0[data-shouldhideoverflowcontent="true"] {
                    overflow: hidden;
                }</style>
            <style type="text/css" data-styleid="style-it437ng72">.style-it437ng72 {
                    border-bottom: 7px solid rgba(223, 49, 67, 1);
                    height: 0 !important;
                    min-height: 0 !important;
                }</style>
            <style type="text/css" data-styleid="style-it437ngu">.style-it437nguborderNode {
                    border: 0px solid rgba(149, 33, 45, 1);
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    pointer-events: none;
                }

                .style-it437nguinlineContent {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }

                .style-it437nguinlineContentParent {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                }

                .style-it437ngu[data-shouldhideoverflowcontent="true"] {
                    overflow: hidden;
                }</style>
            <style type="text/css" data-styleid="style-it437ngz2">.style-it437ngz2 {
                    border-bottom: 7px solid rgba(223, 49, 67, 1);
                    height: 0 !important;
                    min-height: 0 !important;
                }</style>
            <style type="text/css" data-styleid="style-it437nhm">.style-it437nhmborderNode {
                    border: 0px solid rgba(149, 33, 45, 1);
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    pointer-events: none;
                }

                .style-it437nhminlineContent {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }

                .style-it437nhminlineContentParent {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                }

                .style-it437nhm[data-shouldhideoverflowcontent="true"] {
                    overflow: hidden;
                }</style>
            <style type="text/css" data-styleid="style-it437nhz1">.style-it437nhz1 {
                    border-bottom: 7px solid rgba(223, 49, 67, 1);
                    height: 0 !important;
                    min-height: 0 !important;
                }</style>
            <style type="text/css" data-styleid="style-it437ni5">.style-it437ni5showMore {
                    color: #2F2E2E;
                    font: normal normal normal 12px/1.4em raleway, sans-serif;
                    cursor: pointer;
                    text-decoration: underline !important;
                    height: 30px;
                    line-height: 30px;
                    position: absolute;
                    bottom: 0;
                    left: 35%;
                    right: 35%;
                    text-align: center;
                }

                .style-it437ni5[data-state~="fullView"] .style-it437ni5showMore {
                    display: none;
                }

                .style-it437ni5imageItemtitle, .style-it437ni5imageItemdescription {
                    overflow: hidden;
                    text-overflow: ellipsis;
                    white-space: pre-line;
                    overflow: hidden;
                    text-overflow: ellipsis;
                }

                .style-it437ni5imageItem {
                    border-radius: 50%;
                    background-color: rgba(255, 255, 255, 1);
                }

                .style-it437ni5imageItem:hover .style-it437ni5imageItemzoom {
                    opacity: 1;
                }

                .style-it437ni5imageItem:hover .style-it437ni5imageItemzoom .style-it437ni5imageItemtitle {
                    font: normal normal normal 16px/1.4em raleway, sans-serif;
                    color: #2F2E2E;
                }

                .style-it437ni5imageItem_imgBorder {
                    position: absolute;
                    top: 0px;
                    right: 0px;
                    bottom: 0px;
                    left: 0px;
                    overflow: hidden;
                }

                .style-it437ni5imageItemzoom {
                    opacity: 0;
                    transition: opacity 0.5s ease 0s;
                    border-radius: 50%;
                    background-color: rgba(106, 123, 152, 0.6);
                    text-align: center;
                    padding: 15%;
                    position: absolute;
                    top: 0px;
                    right: 0px;
                    bottom: 0px;
                    left: 0px;
                    overflow: hidden;
                }

                .style-it437ni5imageItemtitle {
                    color: #2F2E2E;
                    font: normal normal normal 16px/1.4em raleway, sans-serif;
                    white-space: nowrap;
                }

                .style-it437ni5imageItemdescription {
                    color: #2F2E2E;
                    font: normal normal normal 12px/1.4em raleway, sans-serif;
                }

                .style-it437ni5imageItemlink {
                    color: #2F2E2E;
                    font: normal normal normal 12px/1.4em raleway, sans-serif;
                    white-space: nowrap;
                    text-decoration: underline !important;
                }

                .style-it437ni5imageItemimage {
                    overflow: hidden;
                    border-radius: 50%;
                }

                .style-it437ni5imageItemimageimage {
                    position: static;
                    box-shadow: #000 0 0 0;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                }</style>
            <style type="text/css" data-styleid="style-it437nj7">.style-it437nj7_zoomedin {
                    cursor: url(https://static.parastorage.com/services/skins/2.1229.79/images/wysiwyg/core/themes/base/cursor_zoom_out.png), url(https://static.parastorage.com/services/skins/2.1229.79/images/wysiwyg/core/themes/base/cursor_zoom_out.cur), auto;
                    overflow: hidden;
                    display: block;
                }

                .style-it437nj7_zoomedout {
                    cursor: url(https://static.parastorage.com/services/skins/2.1229.79/images/wysiwyg/core/themes/base/cursor_zoom_in.png), url(https://static.parastorage.com/services/skins/2.1229.79/images/wysiwyg/core/themes/base/cursor_zoom_in.cur), auto;
                }

                .style-it437nj7link {
                    display: block;
                    border-radius: 50%;
                    border: 8px solid rgba(237, 239, 245, 1);
                    background-color: rgba(237, 239, 245, 1);
                    overflow: hidden;
                }

                .style-it437nj7img {
                    border-radius: 50%;
                    overflow: hidden;
                }

                .style-it437nj7imgimage {
                    position: static;
                    box-shadow: #000 0 0 0;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                }</style>
            <style type="text/css" data-styleid="strc1">.strc1inlineContent {
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                }</style>
            <style type="text/css" data-styleid="style-it437nly1">.style-it437nly1 {
                    border-bottom: 7px solid rgba(255, 255, 255, 1);
                    height: 0 !important;
                    min-height: 0 !important;
                }</style>
            <style type="text/css" data-styleid="style-j28qqa6b">.style-j28qqa6b {
                    overflow: hidden;
                }

                .style-j28qqa6b iframe {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    overflow: hidden;
                }

                .style-j28qqa6bpreloaderOverlay {
                    position: absolute;
                    top: 0;
                    left: 0;
                    color: #373737;
                    width: 100%;
                    height: 100%;
                }

                .style-j28qqa6bpreloaderOverlaycontent {
                    width: 100%;
                    height: 100%;
                }

                .style-j28qqa6bunavailableMessageOverlay {
                    position: absolute;
                    top: 0;
                    left: 0;
                    color: #373737;
                    width: 100%;
                    height: 100%;
                }

                .style-j28qqa6bunavailableMessageOverlaycontent {
                    width: 100%;
                    height: 100%;
                    background: rgba(255, 255, 255, 0.9);
                    font-size: 0;
                    margin-top: 5px;
                }

                .style-j28qqa6bunavailableMessageOverlaytextContainer {
                    color: #373737;
                    font-family: "Helvetica Neue", "HelveticaNeueW01-55Roma", "HelveticaNeueW02-55Roma", "HelveticaNeueW10-55Roma", Helvetica, Arial, sans-serif;
                    font-size: 14px;
                    display: inline-block;
                    vertical-align: middle;
                    width: 100%;
                    margin-top: 10px;
                    text-align: center;
                }

                .style-j28qqa6bunavailableMessageOverlayreloadButton {
                    display: inline-block;
                }

                .style-j28qqa6bunavailableMessageOverlay a {
                    color: #0099FF;
                    text-decoration: underline;
                    cursor: pointer;
                }

                .style-j28qqa6bunavailableMessageOverlayiconContainer {
                    display: none;
                }

                .style-j28qqa6bunavailableMessageOverlaydismissButton {
                    display: none;
                }

                .style-j28qqa6bunavailableMessageOverlaytextTitle {
                    font-family: "Helvetica Neue", "HelveticaNeueW01-55Roma", "HelveticaNeueW02-55Roma", "HelveticaNeueW10-55Roma", Helvetica, Arial, sans-serif;
                    display: none;
                }

                .style-j28qqa6bunavailableMessageOverlay[data-state~="hideIframe"] .style-j28qqa6bunavailableMessageOverlay_buttons {
                    opacity: 1;
                }

                .style-j28qqa6bunavailableMessageOverlay[data-state~="hideOverlay"] {
                    display: none;
                }</style>
            <style type="text/css"
                   data-styleid="b3">.b3[data-state~="shouldUseFlex"] .b3link, .b3[data-state~="shouldUseFlex"] .b3labelwrapper {
                    text-align: initial;
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: flex;
                    -webkit-box-align: center;
                    -webkit-align-items: center;
                    align-items: center;
                }

                .b3[data-state~="shouldUseFlex"][data-state~="center"] .b3link, .b3[data-state~="shouldUseFlex"][data-state~="center"] .b3labelwrapper {
                    -webkit-box-pack: center;
                    -webkit-justify-content: center;
                    justify-content: center;
                }

                .b3[data-state~="shouldUseFlex"][data-state~="left"] .b3link, .b3[data-state~="shouldUseFlex"][data-state~="left"] .b3labelwrapper {
                    -webkit-box-pack: start;
                    -webkit-justify-content: flex-start;
                    justify-content: flex-start;
                }

                .b3[data-state~="shouldUseFlex"][data-state~="right"] .b3link, .b3[data-state~="shouldUseFlex"][data-state~="right"] .b3labelwrapper {
                    -webkit-box-pack: end;
                    -webkit-justify-content: flex-end;
                    justify-content: flex-end;
                }

                .b3link {
                    border-radius: 0;
                    position: absolute;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    transition: border-color 0.4s ease 0s, background-color 0.4s ease 0s;
                }

                .b3label {
                    font: normal normal normal 13px/1.4em 'open sans', sans-serif;
                    transition: color 0.4s ease 0s;
                    color: #FFFFFF;
                    display: inline-block;
                    margin: calc(-1 * 1px) 1px 0;
                    position: relative;
                    white-space: nowrap;
                }

                .b3[data-state~="shouldUseFlex"] .b3label {
                    margin: 0;
                }

                .b3[data-disabled="false"] .b3link {
                    background-color: transparent;
                    border: solid rgba(255, 255, 255, 1) 1px;
                    cursor: pointer !important;
                }

                .b3[data-disabled="false"]:active[data-state~="mobile"] .b3link, .b3[data-disabled="false"]:hover[data-state~="desktop"] .b3link, .b3[data-disabled="false"][data-preview~="hover"] .b3link {
                    background-color: rgba(255, 255, 255, 1);
                    border-color: rgba(223, 49, 67, 1);
                }

                .b3[data-disabled="false"]:active[data-state~="mobile"] .b3label, .b3[data-disabled="false"]:hover[data-state~="desktop"] .b3label, .b3[data-disabled="false"][data-preview~="hover"] .b3label {
                    color: #DF3143;
                }

                .b3[data-disabled="true"] .b3link, .b3[data-preview~="disabled"] .b3link {
                    background-color: rgba(204, 204, 204, 1);
                    border-color: rgba(204, 204, 204, 1);
                }

                .b3[data-disabled="true"] .b3label, .b3[data-preview~="disabled"] .b3label {
                    color: #FFFFFF;
                }</style>
            <style type="text/css" data-styleid="style-it43cp2y">.style-it43cp2y {
                    border-bottom: 7px solid rgba(223, 49, 67, 1);
                    height: 0 !important;
                    min-height: 0 !important;
                }</style>
            <style type="text/css" data-styleid="cf1">.cf1wrapper {
                    min-width: 180px;
                    max-width: 980px;
                    position: absolute;
                    width: 100%;
                    text-align: center;
                }

                .cf1_hiddenField {
                    display: none !important;
                }

                .cf1_first-row-wrapper {
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: flex;
                }

                .cf1_first-row-wrapper input {
                    -webkit-box-flex: 1;
                    -webkit-flex: 1;
                    flex: 1;
                    min-width: 0;
                }

                .cf1_first-row-wrapper input:first-child {
                    margin-right: 30px;
                }

                .cf1 input, .cf1 textarea {
                    padding: 5px;
                    border: none;
                    border-bottom: 1px solid rgba(46, 73, 117, 1);
                    color: #FFFFFF;
                    margin: 0 0 5px;
                    width: 100%;
                    -webkit-transition: 0.5s ease all;
                    transition: 0.5s ease all;
                    background-color: transparent;
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    font: normal normal normal 17px/1.4em 'open sans', sans-serif;
                    -webkit-appearance: none;
                    border-radius: 0;
                }

                .cf1 input:focus, .cf1 textarea:focus {
                    outline: none;
                    border-color: rgba(46, 73, 117, 1);
                }

                .cf1 input.cf1_error, .cf1 textarea.cf1_error {
                    font: normal normal normal 17px/1.4em 'open sans', sans-serif;
                    color: #8B0000;
                    border-bottom: 1px solid #8B0000;
                }

                .cf1 input.cf1_error::-webkit-input-placeholder, .cf1 textarea.cf1_error::-webkit-input-placeholder {
                    color: #8B0000;
                }

                .cf1 input.cf1_error:-ms-input-placeholder, .cf1 textarea.cf1_error:-ms-input-placeholder {
                    color: #8B0000;
                }

                .cf1 input.cf1_error::-ms-input-placeholder, .cf1 textarea.cf1_error::-ms-input-placeholder {
                    color: #8B0000;
                }

                .cf1 input.cf1_error::placeholder, .cf1 textarea.cf1_error::placeholder {
                    color: #8B0000;
                }

                .cf1 input::-webkit-input-placeholder, .cf1 textarea::-webkit-input-placeholder {
                    color: #2E4975;
                }

                .cf1 input:-ms-input-placeholder, .cf1 textarea:-ms-input-placeholder {
                    color: #2E4975;
                }

                .cf1 input::-ms-input-placeholder, .cf1 textarea::-ms-input-placeholder {
                    color: #2E4975;
                }

                .cf1 input::placeholder, .cf1 textarea::placeholder {
                    color: #2E4975;
                }

                .cf1 input {
                    margin-bottom: 12px;
                }

                .cf1 textarea {
                    resize: none;
                    overflow: hidden;
                    margin: 0 0 10px;
                }

                .cf1fieldMessage {
                    min-height: 128px;
                }

                .cf1submit1 {
                    color: #2E4975;
                    font: normal normal normal 17px/1.4em 'open sans', sans-serif;
                }

                .cf1submit1:hover {
                    cursor: pointer;
                }

                .cf1notifications {
                    font: normal 14px 'Helvetica Neue', Helvetica, sans-serif;
                    margin-top: 20px;
                    height: 14px;
                }

                .cf1notifications.cf1_success {
                    color: #8680E0;
                }

                .cf1notifications.cf1_error {
                    color: #8B0000;
                }

                .cf1[data-state~="mobile"] input, .cf1[data-state~="mobile"] textarea {
                    font-size: 14px;
                }

                .cf1[data-state~="mobile"] input::-webkit-input-placeholder, .cf1[data-state~="mobile"] textarea::-webkit-input-placeholder {
                    font-size: 14px;
                }

                .cf1[data-state~="mobile"] input:-ms-input-placeholder, .cf1[data-state~="mobile"] textarea:-ms-input-placeholder {
                    font-size: 14px;
                }

                .cf1[data-state~="mobile"] input::-ms-input-placeholder, .cf1[data-state~="mobile"] textarea::-ms-input-placeholder {
                    font-size: 14px;
                }

                .cf1[data-state~="mobile"] input::placeholder, .cf1[data-state~="mobile"] textarea::placeholder {
                    font-size: 14px;
                }

                .cf1[data-state~="mobile"] input {
                    min-height: 35px;
                    line-height: 35px;
                    margin-bottom: 12px;
                }

                .cf1[data-state~="mobile"] textarea {
                    min-height: 110px;
                }

                .cf1[data-state~="right"] {
                    direction: rtl;
                    text-align: right;
                }

                .cf1[data-state~="right"] input {
                    -webkit-box-flex: 1;
                    -webkit-flex: 1;
                    flex: 1;
                    min-width: 0;
                }

                .cf1[data-state~="right"] input:first-child {
                    margin-right: 0;
                    margin-left: 30px;
                }

                .cf1[data-state~="left"] {
                    direction: ltr;
                    text-align: left;
                }</style>
            <style type="text/css" data-styleid="style-it43dhm8">.style-it43dhm8 {
                    border-bottom: 7px solid rgba(223, 49, 67, 1);
                    height: 0 !important;
                    min-height: 0 !important;
                }</style>
            <style type="text/css" data-styleid="deadComp">.deadComp {
                    background: transparent;
                }</style>
            <style type="text/css" data-styleid="siteBackground">.siteBackground {
                    width: 100%;
                    position: absolute;
                }

                .siteBackgroundbgBeforeTransition {
                    position: absolute;
                    top: 0;
                }

                .siteBackgroundbgAfterTransition {
                    position: absolute;
                    top: 0;
                }</style>
            <style type="text/css" data-styleid="loginDialog">.loginDialog {
                    position: fixed;
                    width: 100%;
                    height: 100%;
                    z-index: 99;
                    font-family: Arial, sans-serif;
                    font-size: 1em;
                    color: #9C9C9C;
                }

                .loginDialogblockingLayer {
                    background-color: rgba(85, 85, 85, 0.75);
                    position: fixed;
                    top: 0;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    visibility: visible;
                    zoom: 1;
                    overflow: auto;
                }

                .loginDialogdialog {
                    background-color: rgba(170, 170, 170, 0.7);
                    width: 455px;
                    position: fixed;
                    padding: 20px;
                }

                .loginDialog_wrapper {
                    background-color: rgba(255, 255, 255, 1);
                    padding: 45px 40px 0 40px;
                }

                .loginDialogxButton {
                    position: absolute;
                    top: -14px;
                    right: -14px;
                    cursor: pointer;
                    background: transparent url(https://static.parastorage.com/services/skins/2.1229.79/images/wysiwyg/core/themes/base/viewer_login_sprite.png) no-repeat right top;
                    height: 30px;
                    width: 30px;
                }

                .loginDialogxButton:hover {
                    background-position: right -80px;
                }

                .loginDialogheader {
                    padding-bottom: 25px;
                    line-height: 30px;
                }

                .loginDialogfavIcon {
                    float: left;
                    margin: 7px 7px 0 0;
                    width: 16px;
                    height: 16px;
                }

                .loginDialogtitle {
                    font-size: 20px;
                    font-weight: bold;
                    color: #555555;
                }

                .loginDialog[data-state~="mobile"] {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    z-index: 99;
                    font-family: Arial, sans-serif;
                    font-size: 1em;
                    color: #9C9C9C;
                    top: 0;
                }

                .loginDialog[data-state~="mobile"] .loginDialogheader {
                    padding-bottom: 10px;
                    line-height: 30px;
                }

                .loginDialog[data-state~="mobile"] .loginDialogfavIcon {
                    display: none;
                }

                .loginDialog[data-state~="mobile"] .loginDialogtitle {
                    font-size: 14px;
                }

                .loginDialog[data-state~="mobile"] .loginDialogdialog {
                    width: 260px;
                    padding: 10px;
                    position: absolute;
                }

                .loginDialog[data-state~="mobile"] .loginDialog_footer {
                    margin-top: 0;
                    padding-bottom: 10px;
                }

                .loginDialog[data-state~="mobile"] .loginDialogcancel {
                    font-size: 14px;
                    line-height: 30px;
                }

                .loginDialog[data-state~="mobile"] .loginDialog_wrapper {
                    padding: 14px 12px 0 12px;
                }

                .loginDialog[data-state~="mobile"] .loginDialogsubmitButton {
                    height: 30px;
                    width: 100px;
                    font-size: 14px;
                }

                .loginDialog_forgot {
                    text-align: left;
                    font-size: 12px;
                }

                .loginDialog_forgot a {
                    color: #0198ff;
                    border-bottom: 1px solid #0198ff;
                }

                .loginDialog_forgot a:hover {
                    color: #0044ff;
                    border-bottom: 1px solid #0044ff;
                }

                .loginDialog_error {
                    font-size: 12px;
                    color: #d74401;
                    text-align: right;
                }

                .loginDialog_footer {
                    width: 100%;
                    margin-top: 27px;
                    padding-bottom: 40px;
                }

                .loginDialogcancel {
                    color: #9C9C9C;
                    font-size: 18px;
                    text-decoration: underline;
                    line-height: 36px;
                }

                .loginDialogcancel:hover {
                    color: #9c3c3c;
                }

                .loginDialogpasswordInput label {
                    font-size: 14px;
                }

                .loginDialogpasswordInput label[data-type="password"] {
                    font-size: 14px;
                    line-height: 30px;
                    height: 30px;
                }

                .loginDialogsubmitButton {
                    float: right;
                    cursor: pointer;
                    border: solid 2px #0064a8;
                    height: 36px;
                    width: 143px;
                    background: transparent url(https://static.parastorage.com/services/skins/2.1229.79/images/wysiwyg/core/themes/base/viewer_login_sprite.png) repeat-x right -252px;
                    color: #ffffff;
                    font-size: 24px;
                    font-weight: bold;
                    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
                }

                .loginDialogsubmitButton:hover {
                    background-position: right -352px;
                    border-color: #004286;
                }

                .loginDialog[data-state="normal"] .loginDialogerror {
                    display: none;
                }

                .loginDialog[data-state="error"] .loginDialogerror {
                    display: block;
                    font-size: 12px;
                    color: #d74401;
                    text-align: right;
                }

                .loginDialog[data-state="error"] .loginDialogpasswordInput {
                    border-color: #d74401;
                }

                .loginDialogpasswordInput {
                    font-size: 1em;
                }

                .loginDialogpasswordInput label {
                    float: none;
                    font-size: 17px;
                    line-height: 25px;
                    color: #585858;
                }

                .loginDialogpasswordInput[data-state~="mobile"] label {
                    float: none;
                    font-size: 14px;
                    line-height: 20px;
                    color: #585858;
                }

                .loginDialogpasswordInputinput {
                    padding: 0 15px;
                    width: 100%;
                    height: 42px;
                    font-size: 19px;
                    line-height: 42px;
                    color: #0198ff;
                    margin: 0 -3px;
                    background: transparent url(https://static.parastorage.com/services/skins/2.1229.79/images/wysiwyg/core/themes/base/viewer_login_sprite.png) repeat-x right -170px;
                    border: solid 1px #a1a1a1;
                    box-sizing: border-box;
                }

                .loginDialogpasswordInput[data-state~="mobile"] .loginDialogpasswordInputinput {
                    padding: 0 15px;
                    width: 100%;
                    height: 30px;
                    font-size: 14px;
                    line-height: 30px;
                    color: #0198ff;
                    margin: 0 -3px;
                    background: transparent url(https://static.parastorage.com/services/skins/2.1229.79/images/wysiwyg/core/themes/base/viewer_login_sprite.png) repeat-x right -170px;
                    border: solid 1px #a1a1a1;
                    box-sizing: border-box;
                }

                .loginDialogpasswordInputinput[data-type="password"] {
                    font-size: 38px;
                }

                .loginDialogpasswordInput[data-state~="mobile"] .loginDialogpasswordInputinput[data-type="password"] {
                    font-size: 14px;
                }

                .loginDialogpasswordInputerrorMessage {
                    display: block;
                    font-size: 12px;
                    color: #d74401;
                    text-align: right;
                    height: 15px;
                }

                .loginDialogpasswordInput:not([data-state~="invalid"]) .loginDialogpasswordInputerrorMessage {
                    visibility: hidden;
                }

                .loginDialogpasswordInput[data-state~="invalid"] .loginDialogpasswordInputerrorMessage {
                    visibility: visible;
                }

                .loginDialogpasswordInput[data-state~="invalid"] input {
                    border-color: #d74401;
                }

                .loginDialogpasswordInput[data-state~="invalid"] .loginDialogpasswordInputinput {
                    border-color: #ff0000;
                }</style>
            <style type="text/css">.testStyles {
                    position: absolute;
                    display: none;
                    z-index: 1
                }</style>
            <div class="testStyles"></div>
            <style type="text/css" data-styleid="uploadedFonts"></style>
            <div style="overflow: hidden; visibility: hidden; max-height: 0px; max-width: 0px; position: absolute;">
                <style>.font-ruler-content::after {
                        content: "@#$%%^&*~IAO"
                    }</style>
            </div>
        </div>
        <div id="SITE_BACKGROUND" class="siteBackground"
             style="position: absolute; top: 0px; height: 886px; width: 1423px;">
            <div id="SITE_BACKGROUND_previous_noPrev" class="siteBackgroundprevious" style="width: 100%; height: 100%;">
                <div id="SITE_BACKGROUNDpreviousImage" class="siteBackgroundpreviousImage"></div>
                <div id="SITE_BACKGROUNDpreviousVideo" class="siteBackgroundpreviousVideo"></div>
                <div id="SITE_BACKGROUND_previousOverlay_noPrev" class="siteBackgroundpreviousOverlay"></div>
            </div>
            <div id="SITE_BACKGROUND_current_s2vg5_desktop_bg" data-position="fixed" class="siteBackgroundcurrent"
                 style="top: 0px; background-color: rgb(7, 10, 14); position: fixed; width: 100%; height: 100%;">
                <div id="SITE_BACKGROUND_currentImage_s2vg5_desktop_bg" data-type="bgimage" data-height="100%"
                     class="siteBackgroundcurrentImage"
                     style="position: absolute; top: 0px; width: 100%; opacity: 0.5; background-size: cover; background-position: center center; background-repeat: no-repeat; height: 100%; background-image: url(fon.jpg);"
                     data-image-css="{&quot;backgroundSize&quot;:&quot;cover&quot;,&quot;backgroundPosition&quot;:&quot;center center&quot;,&quot;backgroundRepeat&quot;:&quot;no-repeat&quot;,&quot;height&quot;:&quot;100%&quot;}"></div>
                <div id="SITE_BACKGROUNDcurrentVideo" class="siteBackgroundcurrentVideo"></div>
                <div id="SITE_BACKGROUND_currentOverlay_s2vg5_desktop_bg" class="siteBackgroundcurrentOverlay"
                     style="position: absolute; top: 0px; width: 100%; height: 100%;"></div>
            </div>
        </div>
        <div class="SITE_ROOT" id="SITE_ROOT" style="width: 980px; padding-bottom: 0px;">
            <div id="masterPage" style="width: 980px; position: static; top: 0px; height: 886px;">
                <!--<header class="hc1" data-state="" id="SITE_HEADER"
                        style="width: 980px; top: 0px; height: 88px; left: 0px; position: absolute;">
                    <div id="SITE_HEADERscreenWidthBackground" class="hc1screenWidthBackground"
                         style="width: 1423px; left: -222px;"></div>
                    <div id="SITE_HEADERcenteredContent" class="hc1centeredContent">
                        <div id="SITE_HEADERbg" class="hc1bg"></div>
                        <div id="SITE_HEADERinlineContent" class="hc1inlineContent"></div>
                    </div>
                </header>-->
                <footer class="style-it2zq6n1_footer style-it2zq6n1" data-state=" " id="SITE_FOOTER"
                        style="width: 980px; position: absolute; left: 0px; height: 56px; bottom: auto; top: 1575px;">
                    <div id="SITE_FOOTERscreenWidthBackground" class="style-it2zq6n1screenWidthBackground"
                         style="width: 1423px; left: -222px;">
                        <div class="style-it2zq6n1_bg"></div>
                    </div>
                    <div id="SITE_FOOTERcenteredContent" class="style-it2zq6n1centeredContent">
                        <div id="SITE_FOOTERbg" class="style-it2zq6n1bg"></div>
                        <div id="SITE_FOOTERinlineContent" class="style-it2zq6n1inlineContent">
                            <div class="txtNew" id="comp-irlzrzwk"
                                 style="left: 20px; width: 471px; position: absolute; top: 20px;"><p class="font_9"
                                                                                                      style="line-height:1.4em;">
                                    <span style="font-family:open sans,sans-serif;font-size: 20px;">All rights reserved. ©Copyright 2018</span></p>
                            </div>
                            <div class="txtNew" id="comp-irlzw5l9"
                                 style="left: 655px; width: 325px; position: absolute; top: 37px;text-align: center;"><p class="font_9"
                                                                                                       style="line-height:1.4em;">
                                    Subscribe to me in social networks</p>
                            </div>
                            <!--<div id="comp-irlzpov0" data-align="center" data-disabled="false" data-margin="0"
                                 data-should-use-flex="true" class="b1" data-state="desktop shouldUseFlex center"
                                 style="left: 21px; position: absolute; top: 67px; height: 51px; min-height: 18px; width: 470px;"
                                 data-prev-text="СКАЧАТЬ РЕЗЮМЕ В PDF" data-prev-min-width="154" data-prev-width="470">
                                <a href="http://docs.wixstatic.com/ugd/68c56f_7a72d45d7e584ca08fab51482721992f.pdf"
                                   target="_blank"
                                   data-content="http://docs.wixstatic.com/ugd/68c56f_7a72d45d7e584ca08fab51482721992f.pdf"
                                   data-type="external" role="button" id="comp-irlzpov0link"
                                   class="g-transparent-a b1link"><span id="comp-irlzpov0label" class="b1label"
                                                                        style="">СКАЧАТЬ РЕЗЮМЕ В PDF</span></a></div>-->
                            <div class="lb1" id="comp-it437nfg"
                                 style="width: 325px; left: 655px; position: absolute; top: 3px; height: 32px;text-align: center;">
                                <ul aria-label="Social bar" id="comp-it437nfgitemsContainer" class="lb1itemsContainer">
                                    <li class="lb1imageItem" id="comp-it437nfg0image"
                                        style="width: 32px; height: 32px; margin-bottom: 0px; margin-right: 13px; display: inline-block;">
                                        <a href="https://www.linkedin.com" target="_blank"
                                           data-content="https://www.linkedin.com" data-type="external"
                                           id="comp-it437nfg0imagelink" class="lb1imageItemlink">
                                            <div data-style="position:absolute" class="lb1imageItemimage"
                                                 id="comp-it437nfg0imageimage"
                                                 style="position: absolute; width: 32px; height: 32px;">
                                                <div class="lb1imageItemimagepreloader"
                                                     id="comp-it437nfg0imageimagepreloader"></div>
                                                <img id="comp-it437nfg0imageimageimage" alt="LinkedIn - Black Circle"
                                                     data-type="image"
                                                     style="width: 32px; height: 32px; object-fit: cover;"
                                                     src="in.png">
                                            </div>
                                        </a></li>
                                    <li class="lb1imageItem" id="comp-it437nfg1image"
                                        style="width: 32px; height: 32px; margin-bottom: 0px; margin-right: 13px; display: inline-block;">
                                        <a href="http://www.twitter.com" target="_blank"
                                           data-content="http://www.twitter.com" data-type="external"
                                           id="comp-it437nfg1imagelink" class="lb1imageItemlink">
                                            <div data-style="position:absolute" class="lb1imageItemimage"
                                                 id="comp-it437nfg1imageimage"
                                                 style="position: absolute; width: 32px; height: 32px;">
                                                <div class="lb1imageItemimagepreloader"
                                                     id="comp-it437nfg1imageimagepreloader"></div>
                                                <img id="comp-it437nfg1imageimageimage" alt="Twitter - Black Circle"
                                                     data-type="image"
                                                     style="width: 32px; height: 32px; object-fit: cover;"
                                                     src="tw.png">
                                            </div>
                                        </a></li>
                                    <li class="lb1imageItem" id="comp-it437nfg2image"
                                        style="width: 32px; height: 32px; margin-bottom: 0px; margin-right: 13px; display: inline-block;">
                                        <a href="https://plus.google.com" target="_blank"
                                           data-content="https://plus.google.com" data-type="external"
                                           id="comp-it437nfg2imagelink" class="lb1imageItemlink">
                                            <div data-style="position:absolute" class="lb1imageItemimage"
                                                 id="comp-it437nfg2imageimage"
                                                 style="position: absolute; width: 32px; height: 32px;">
                                                <div class="lb1imageItemimagepreloader"
                                                     id="comp-it437nfg2imageimagepreloader"></div>
                                                <img id="comp-it437nfg2imageimageimage" alt="Google+ - Black Circle"
                                                     data-type="image"
                                                     style="width: 32px; height: 32px; object-fit: cover;"
                                                     src="go.png">
                                            </div>
                                        </a></li>
                                    <li class="lb1imageItem" id="comp-it437nfg3image"
                                        style="width: 32px; height: 32px; margin-bottom: 0px; margin-right: 13px; display: inline-block;">
                                        <a href="http://www.facebook.com" target="_blank"
                                           data-content="http://www.facebook.com" data-type="external"
                                           id="comp-it437nfg3imagelink" class="lb1imageItemlink">
                                            <div data-style="position:absolute" class="lb1imageItemimage"
                                                 id="comp-it437nfg3imageimage"
                                                 style="position: absolute; width: 32px; height: 32px;">
                                                <div class="lb1imageItemimagepreloader"
                                                     id="comp-it437nfg3imageimagepreloader"></div>
                                                <img id="comp-it437nfg3imageimageimage" alt="Facebook - Black Circle"
                                                     data-type="image"
                                                     style="width: 32px; height: 32px; object-fit: cover;"
                                                     src="fa.png">
                                            </div>
                                        </a></li>
                                    <li class="lb1imageItem" id="comp-it437nfg4image"
                                        style="width: 32px; height: 32px; margin-bottom: 0px; margin-right: 13px; display: inline-block;">
                                        <a href="https://vk.com" target="_blank" data-content="https://vk.com"
                                           data-type="external" id="comp-it437nfg4imagelink" class="lb1imageItemlink">
                                            <div data-style="position:absolute" class="lb1imageItemimage"
                                                 id="comp-it437nfg4imageimage"
                                                 style="position: absolute; width: 32px; height: 32px;">
                                                <div class="lb1imageItemimagepreloader"
                                                     id="comp-it437nfg4imageimagepreloader"></div>
                                                <img id="comp-it437nfg4imageimageimage" alt="Vkontakte - Black Circle"
                                                     data-type="image"
                                                     style="width: 32px; height: 32px; object-fit: cover;"
                                                     src="vk.png">
                                            </div>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <div class="pc1" data-state="" id="PAGES_CONTAINER"
                     style="width: 980px; position: absolute; top: -177px; height: 1532px; left: 0px;">
                    <div id="PAGES_CONTAINERscreenWidthBackground" class="pc1screenWidthBackground"
                         style="width: 1423px; left: -222px;"></div>
                    <div id="PAGES_CONTAINERcenteredContent" class="pc1centeredContent">
                        <div id="PAGES_CONTAINERbg" class="pc1bg"></div>
                        <div id="PAGES_CONTAINERinlineContent" class="pc1inlineContent">
                            <div class="s_VOwPageGroupSkin" id="SITE_PAGES"
                                 style="left: 0px; width: 980px; position: absolute; top: 0px; height: 1532px;">
                                <div class="p1" id="s2vg5"
                                     style="left: 0px; width: 980px; position: absolute; top: 0px; height: 1532px;">
                                    <div id="s2vg5bg" class="p1bg"></div>
                                    <div id="s2vg5inlineContent" class="p1inlineContent">
                                        <div role="region" aria-label="Slideshow" class="style-it437nea1"
                                             id="comp-it437ne7"
                                             style="position: absolute; top: 539px; height: 675px; left: 0px; width: 980px;">
                                            <div id="comp-it437ne7bg" class="style-it437nea1bg"></div>
                                            <div id="comp-it437ne7shownOnAllSlides"
                                                 class="style-it437nea1shownOnAllSlides"></div>
                                            <div tabindex="-1" id="comp-it437ne7inlineContentParent"
                                                 class="style-it437nea1inlineContentParent"
                                                 style="overflow: visible; left: -222px; width: 1423px;">
                                                <div aria-live="polite" id="comp-it437ne7inlineContent"
                                                     class="style-it437nea1inlineContent"
                                                     style="left: 222px; width: 980px;">
                                                    <div data-flexibleboxheight="false" data-parent-id="comp-it437ne7"
                                                         data-min-height="675" class="style-it437ng0" id="comp-it437nfy"
                                                         style="min-height: 456px; position: absolute; top: 0px; height: 456px; left: 0px; width: 980px; opacity: 1; visibility: inherit;">
                                                        <div data-enable-video="true" class="style-it437ng0balata"
                                                             id="comp-it437nfybalata"
                                                             style="position: absolute; top: 0px; height: 100%; pointer-events: auto; overflow: hidden; left: -222px; width: 1423px; clip: rect(0px 1423px 675px 0px);">
                                                            <div class="bgColor" id="comp-it437nfybalatabgcolor"
                                                                 style="position: absolute; width: 100%; height: 100%;">
                                                                <div id="comp-it437nfybalatabgcoloroverlay"
                                                                     class="bgColoroverlay"
                                                                     style="width: 100%; height: 100%; position: absolute; background-color: rgb(237, 239, 245);"></div>
                                                            </div>
                                                        </div>
                                                        <div id="comp-it437nfyborderNode"
                                                             class="style-it437ng0borderNode"></div>
                                                        <div id="comp-it437nfyinlineContentParent"
                                                             class="style-it437ng0inlineContentParent"
                                                             style="overflow: visible; left: -222px; width: 1423px;">
                                                            <div id="comp-it437nfyinlineContent"
                                                                 class="style-it437ng0inlineContent"
                                                                 style="left: 222px; width: 980px;">
                                                                <!--<div class="txtNew" id="comp-it437ng4"
                                                                     style="left: 20px; width: 648px; position: absolute; top: 205px;">
                                                                    <h4 class="font_4"><span
                                                                                style="letter-spacing:0.1em;">ОПЫТ РАБОТЫ</span>
                                                                    </h4>
                                                                </div>
                                                                <div class="style-it437ng72" id="comp-it437ng7"
                                                                     style="left: 20px; width: 52px; position: absolute; top: 277px; height: 7px;">
                                                                    <div id="comp-it437ng7line"
                                                                         class="style-it437ng72line"></div>
                                                                </div>
                                                                <div class="txtNew" id="comp-it437nga"
                                                                     style="left: 20px; width: 244px; position: absolute; top: 350px;">
                                                                    <h6 class="font_6" style="line-height:1.4em;">
                                                                        Должность</h6>

                                                                    <h6 class="font_6" style="line-height:1.4em;"><span
                                                                                class="color_15"><a
                                                                                    href="http://www.wix.com"
                                                                                    target="_blank"
                                                                                    data-content="http://www.wix.com"
                                                                                    data-type="external">Название компании</a></span>
                                                                    </h6>

                                                                    <h6 class="font_6" style="line-height:1.4em;"><span
                                                                                class="color_22">2014 — Н. В.</span>
                                                                    </h6>

                                                                    <h6 class="font_6" style="line-height:1.4em;"><span
                                                                                class="color_15"><span class="wixGuard">​</span></span>
                                                                    </h6>

                                                                    <p class="font_8" style="line-height:1.4em;">Это
                                                                        текст. Нажмите один раз и выберите
                                                                        «Редактировать текст» или просто кликните
                                                                        дважды, чтобы добавить свой текст.</p>
                                                                </div>
                                                                <div class="txtNew" id="comp-it437nge"
                                                                     style="left: 368px; width: 244px; position: absolute; top: 350px;">
                                                                    <h6 class="font_6" style="line-height:1.4em;">
                                                                        Должность</h6>

                                                                    <h6 class="font_6" style="line-height:1.4em;"><span
                                                                                class="color_15"><a
                                                                                    href="http://www.wix.com"
                                                                                    target="_blank"
                                                                                    data-content="http://www.wix.com"
                                                                                    data-type="external">Название компании</a></span>
                                                                    </h6>

                                                                    <h6 class="font_6" style="line-height:1.4em;"><span
                                                                                class="color_22">2010 — 2013</span></h6>

                                                                    <h6 class="font_6" style="line-height:1.4em;"><span
                                                                                class="color_15"><span class="wixGuard">​</span></span>
                                                                    </h6>

                                                                    <p class="font_8" style="line-height:1.4em;">Это
                                                                        текст. Нажмите один раз и выберите
                                                                        «Редактировать текст» или просто кликните
                                                                        дважды, чтобы добавить свой текст.</p>
                                                                </div>
                                                                <div class="txtNew" id="comp-it437ngh1"
                                                                     style="left: 716px; width: 244px; position: absolute; top: 350px;">
                                                                    <h6 class="font_6" style="line-height:1.4em;">
                                                                        Должность</h6>

                                                                    <h6 class="font_6" style="line-height:1.4em;"><span
                                                                                class="color_15"><a
                                                                                    href="http://www.wix.com"
                                                                                    target="_blank"
                                                                                    data-content="http://www.wix.com"
                                                                                    data-type="external">Название компании</a></span>
                                                                    </h6>

                                                                    <h6 class="font_6" style="line-height:1.4em;"><span
                                                                                class="color_22">2008&nbsp;— 2012</span>
                                                                    </h6>

                                                                    <h6 class="font_6" style="line-height:1.4em;"><span
                                                                                class="color_15"><span class="wixGuard">​</span></span>
                                                                    </h6>

                                                                    <p class="font_8" style="line-height:1.4em;">Это
                                                                        текст. Нажмите один раз и выберите
                                                                        «Редактировать текст» или просто кликните
                                                                        дважды, чтобы добавить свой текст.</p>
                                                                </div>
                                                                <div id="comp-it437ngk" data-align="center"
                                                                     data-disabled="false" data-margin="0"
                                                                     data-should-use-flex="true" class="b1"
                                                                     data-state="desktop shouldUseFlex center"
                                                                     style="left: 716px; position: absolute; top: 207px; height: 42px; min-height: 18px; width: 230px;"
                                                                     data-prev-text="СКАЧАТЬ РЕЗЮМЕ В PDF"
                                                                     data-prev-min-width="154" data-prev-width="230"><a
                                                                            href="https://docs.wixstatic.com/ugd/68c56f_7a72d45d7e584ca08fab51482721992f.pdf"
                                                                            target="_blank" data-type="document"
                                                                            role="button" id="comp-it437ngklink"
                                                                            class="g-transparent-a b1link"><span
                                                                                id="comp-it437ngklabel" class="b1label"
                                                                                style="">СКАЧАТЬ РЕЗЮМЕ В PDF</span></a>
                                                                </div>-->



                                                                <div style="font-size: 28px;position: absolute;top: 142px;">
                                                                    <div style="text-align: center"><h1 style="font-size: 35px;margin: 0 0 10px 0;">Barrister, attorney, lawyer, advocate of Ukraine</h1></div>
                                                                    <div style="text-align: center">Barrister Rostislav Malimonenko, the member of Ukrainian National BAR Association will help to resolve any legal issues in Ukraine including representation in criminal cases, recovering a debt, divorce, determination of the child's place of residence through the court in Ukraine, division of spouses' property in Ukraine , representation and protection in Ukraine in all disputable cases on the territory of Ukraine. <a href="mailto:malimonenko@ukr.net" target="_blank" rel="noreferrer noopener">malimonenko@ukr.net</a> <a href="tel:+380667371277" target="_blank" value="+380667371277">+380667371277</a> <a href="tel:+380993090829" value="+380993090829" target="_blank">+380993090829</a></div>
                                                                </div>

                                                                <!--<div class="txtNew" id="comp-it437nfo"
                                                                     style="left: 20px; width: 428px; position: absolute; top: 470px;">
                                                                    <h4 class="font_4"><span
                                                                                style="letter-spacing:0.1em;color: white;">ABOUT ME</span>
                                                                    </h4>
                                                                </div>
                                                                <div class="style-it437nft" id="comp-it437nfr"
                                                                     style="left: 20px; width: 53px; position: absolute; top: 542px; height: 7px;">
                                                                    <div id="comp-it437nfrline"
                                                                         class="style-it437nftline"></div>
                                                                </div>-->

                                                                <div style="font-size: 21px;position: absolute;top: 474px;color: white;">
                                                                    <div style="text-align: center;margin: 0 0 20px 0;">I live and work as a barrister in Ukraine. I have a lot of experience in all criminal cases, labour cases, civil cases, matrimonial cases, corporate cases, administrative proceedings, as well as other cases solution of which is required by the client.</div>
                                                                    <div style="text-align: center;margin: 0 0 20px 0;">I have a lot of practical experience in appealing against illegal actions of police officers, prosecutors, and other officials.</div>
                                                                    <div style="text-align: center;margin: 0 0 20px 0;">I always glad to help in solving your problems in Ukraine and protecting your rights and interests.</div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--<ol data-show-navigation-dots="true" id="comp-it437ne7dotsMenuWrapper"
                                                class="style-it437nea1dotsMenuWrapper"
                                                style="bottom: 44.5px; justify-content: center;">
                                                <li class="style-it437nea1_navigation-dot-wrapper">
                                                    <button class="style-it437nea1_navigation-dot reset-button"
                                                            aria-label="Go to slide 1"
                                                            style="width: 7px; height: 7px; margin-right: 7.5px; margin-left: 7.5px;"></button>
                                                </li>
                                                <li class="style-it437nea1_navigation-dot-wrapper">
                                                    <button class="style-it437nea1_navigation-dot style-it437nea1_selected reset-button"
                                                            aria-label="Go to slide 2"
                                                            style="width: 11px; height: 11px; margin-right: 7.5px; margin-left: 7.5px;"></button>
                                                </li>
                                                <li class="style-it437nea1_navigation-dot-wrapper">
                                                    <button class="style-it437nea1_navigation-dot reset-button"
                                                            aria-label="Go to slide 3"
                                                            style="width: 7px; height: 7px; margin-right: 7.5px; margin-left: 7.5px;"></button>
                                                </li>
                                                <li class="style-it437nea1_navigation-dot-wrapper">
                                                    <button class="style-it437nea1_navigation-dot reset-button"
                                                            aria-label="Go to slide 4"
                                                            style="width: 7px; height: 7px; margin-right: 7.5px; margin-left: 7.5px;"></button>
                                                </li>
                                            </ol>
                                            <div data-show-navigation-arrows="true" data-navigation-button-margin="64"
                                                 id="comp-it437ne7navigationArrows"
                                                 class="style-it437nea1_navigation-arrows style-it437nea1navigationArrows"
                                                 style="top: calc(50% - 9.1px);">
                                                <div class="reset-button style-it437nea1_btn style-it437nea1nextButton"
                                                     id="comp-it437ne7nextButton"
                                                     style="width: 43.3333px; right: -158px;">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                         viewBox="0 0 39 11" enable-background="new 0 0 39 11">
                                                        <polygon
                                                                points="33.5,0 32.8,0.7 37.1,5 0,5 0,6 37.1,6 32.8,10.3 33.5,11 39,5.5 "></polygon>
                                                    </svg>
                                                </div>
                                                <div class="reset-button style-it437nea1_btn style-it437nea1prevButton"
                                                     id="comp-it437ne7prevButton"
                                                     style="width: 43.3333px; left: -158px;">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                         viewBox="0 0 39 11" enable-background="new 0 0 39 11">
                                                        <polygon
                                                                points="33.5,0 32.8,0.7 37.1,5 0,5 0,6 37.1,6 32.8,10.3 33.5,11 39,5.5 "></polygon>
                                                    </svg>
                                                </div>
                                            </div>-->
                                        </div>
                                        <div data-exact-height="260" data-content-padding-horizontal="16"
                                             data-content-padding-vertical="16" title="" class="style-it437nj7"
                                             id="comp-it437nj5"
                                             style="left: 360px; position: absolute; top: 407px; width: 264px; height: 260px;">
                                            <div id="comp-it437nj5link" class="style-it437nj7link"
                                                 style="width: 248px; height: 244px;">
                                                <div data-style="" class="style-it437nj7img" id="comp-it437nj5img"
                                                     style="position: relative; width: 248px; height: 244px;">
                                                    <div class="style-it437nj7imgpreloader"
                                                         id="comp-it437nj5imgpreloader"></div>
                                                    <img id="comp-it437nj5imgimage" alt="" data-type="image"
                                                         src="photo.jpg"
                                                         style="width: 79%; height: 117%; object-fit: cover;margin: -13px 0 0 25px;">
                                                </div>
                                            </div>
                                        </div>
                                        <!--<section class="strc1" id="comp-it437nlm"
                                                 style="width: 980px; position: absolute; top: 1214px; height: 980px; left: 0px;">
                                            <div data-enable-video="true" class="strc1balata" id="comp-it437nlmbalata"
                                                 style="position: absolute; top: 0px; width: calc((100vw - 17px) - 0px); height: 100%; pointer-events: auto; bottom: 0px; left: calc(490px - (((100vw - 17px) - 0px) / 2)); right: calc(490px + (((100vw - 17px) - 0px) / 2)); overflow: hidden; clip: rect(0px 1423px 980px 0px);">
                                                <div class="bgColor" id="comp-it437nlmbalatabgcolor"
                                                     style="position: absolute; width: 100%; height: 100%;">
                                                    <div id="comp-it437nlmbalatabgcoloroverlay" class="bgColoroverlay"
                                                         style="width: 100%; height: 100%; position: absolute; background-color: transparent;"></div>
                                                </div>
                                            </div>
                                            <div id="comp-it437nlminlineContent" class="strc1inlineContent">
                                                <div class="strc1" id="comp-it437nlq"
                                                     style="position: absolute; left: calc((((((100vw - 17px) - 0px) * 0.5) + ((980px - ((100vw - 17px) - 0px)) / 2)) + 0px) + -490px); width: 980px; top: 0px; height: 980px;">
                                                    <div data-enable-video="true" class="strc1balata"
                                                         id="comp-it437nlqbalata"
                                                         style="position: absolute; top: 0px; width: calc((((100vw - 17px) - 0px) * 1) + 1px); height: 100%; pointer-events: none; left: calc((((((100vw - 17px) - 0px) * 1) - 980px) * -0.5) - 1px); bottom: 0px; overflow: hidden; clip: rect(0px 1424px 980px 0px);">
                                                        <div class="bgColor" id="comp-it437nlqbalatabgcolor"
                                                             style="position: fixed; width: 100%; height: 100%; top: 0px;">
                                                            <div id="comp-it437nlqbalatabgcoloroverlay"
                                                                 class="bgColoroverlay"
                                                                 style="width: 100%; height: 100%; position: absolute; background-color: rgb(23, 37, 59);"></div>
                                                        </div>
                                                        <div data-effect="BackgroundParallax" data-fitting="fill"
                                                             data-align="center" class="bgMedia"
                                                             id="comp-it437nlqbalatamedia"
                                                             style="position: fixed; pointer-events: none; top: 0px; transform-style: preserve-3d; width: 1424px; left: -1px; height: 980px;">
                                                            <div data-type="image" data-style="" class="bgImage"
                                                                 id="comp-it437nlqbalatamediacontent"
                                                                 style="transform: translate3d(0px, 20.6px, 0px); position: relative; width: 1424px; height: 980px; opacity: 0.7;">
                                                                <div class="bgImagepreloader"
                                                                     id="comp-it437nlqbalatamediacontentpreloader"></div>
                                                                <img id="comp-it437nlqbalatamediacontentimage" alt=""
                                                                     data-type="image"
                                                                     style="width: 1424px; height: 980px; object-fit: cover;"
                                                                     src="https://static.wixstatic.com/media/05e3dc_cc646f530d6846828d53dd3216ec8023~mv2.jpg/v1/fill/w_1424,h_980,al_c,q_85,usm_0.66_1.00_0.01/05e3dc_cc646f530d6846828d53dd3216ec8023~mv2.webp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="comp-it437nlqinlineContent" class="strc1inlineContent"
                                                         style="position: absolute; width: 980px; top: 0px; bottom: 0px; left: calc((100% - 980px) * 0.5);">
                                                        <div class="txtNew" id="comp-it437nlv"
                                                             style="left: 20px; width: 768px; position: absolute; top: 113px;">
                                                            <h4 class="font_4"><span class="color_11"><span
                                                                            style="letter-spacing:0.1em;">НАВЫКИ</span></span>
                                                            </h4>
                                                        </div>
                                                        <div class="style-it437nly1" id="comp-it437nlx"
                                                             style="left: 20px; width: 53px; position: absolute; top: 185px; height: 7px;">
                                                            <div id="comp-it437nlxline"
                                                                 class="style-it437nly1line"></div>
                                                        </div>
                                                        <div class="style-j28qqa6b" id="comp-it437nm0"
                                                             style="min-height: 626px; min-width: 941px; left: 19px; width: 941px; position: absolute; top: 298px; height: 626px;">
                                                            <iframe is="true" scrolling="no" frameborder="0"
                                                                    allow="microphone; camera" allowtransparency="true"
                                                                    allowfullscreen="true" name="comp-it437nm0"
                                                                    title="Wix Pro Gallery" aria-label="Wix Pro Gallery"
                                                                    id="comp-it437nm0iframe"
                                                                    classname="style-j28qqa6biframe"
                                                                    style="display: block; width: 100%; height: 100%; overflow: hidden; position: absolute;"
                                                                    src="https://progallery.wix.com/gallery.html?cacheKiller=1516518693473&amp;compId=comp-it437nm0&amp;deviceType=desktop&amp;externalId=f8023e89-e2d4-4ace-a5fb-fcec002e9f45&amp;height=626&amp;instance=qZM17LemK5217tmsWgOomnWKfnpURktilmkndeAfF08.eyJpbnN0YW5jZUlkIjoiNDM0ZTEzNzAtYWU1Zi00ZGJmLTg2YmUtMmYzZTYzZGQyYzliIiwiYXBwRGVmSWQiOiIxNDI3MWQ2Zi1iYTYyLWQwNDUtNTQ5Yi1hYjk3MmFlMWY3MGUiLCJzaWduRGF0ZSI6IjIwMTgtMDEtMjFUMDc6MTE6MzAuNzg1WiIsInVpZCI6bnVsbCwiaXBBbmRQb3J0IjoiOTEuMjIyLjYwLjE2OC80MTA0MSIsInZlbmRvclByb2R1Y3RJZCI6bnVsbCwiZGVtb01vZGUiOnRydWUsIm9yaWdpbkluc3RhbmNlSWQiOiJjMGI2ZTRjZS02NDgwLTQ5MmMtYWMwOC1mZWJiYjQwODg2YTgiLCJhaWQiOiI5MWIzYTFiYS1lMjNlLTQ4MjgtOTE2Ni1jZDY2YzkxZGI1NTQiLCJiaVRva2VuIjoiZmRjN2Q4ZTEtYzYwOS0wYTU0LTEyYTUtN2RhODAyZjdlNGYzIiwic2l0ZU93bmVySWQiOiI2OGM1NmYzOS1mZTY3LTRmM2QtOGFlNy05OTE2ODQ0NjNhNjMifQ&amp;locale=ru&amp;pageId=s2vg5&amp;viewMode=site&amp;vsi=eeb01d7c-75d1-4a7c-8e06-889640c718c4&amp;width=941"></iframe>
                                                            <div id="comp-it437nm0overlay"
                                                                 class="style-j28qqa6boverlay"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>-->
                                        <!--<div id="comp-it437nmb" data-align="center" data-disabled="false"
                                             data-margin="0" data-should-use-flex="true" class="b3"
                                             data-state="desktop shouldUseFlex center"
                                             style="top: 40px; right: 64px; position: fixed; z-index: 50; height: 40px; min-height: 18px; width: 302px;"
                                             data-prev-text="СКАЧАТЬ РЕЗЮМЕ В PDF" data-prev-min-width="154"
                                             data-prev-width="302"><a
                                                    href="https://docs.wixstatic.com/ugd/68c56f_7a72d45d7e584ca08fab51482721992f.pdf"
                                                    target="_blank" data-type="document" role="button"
                                                    id="comp-it437nmblink" class="g-transparent-a b3link"><span
                                                        id="comp-it437nmblabel" class="b3label" style="">СКАЧАТЬ РЕЗЮМЕ В PDF</span></a>
                                        </div>-->
                                        <div class="txtNew" id="comp-it437nmg"
                                             style="left: 64px; width: 851px; position: absolute; top: 238px;"><h1
                                                    class="font_0" style="line-height:1.2em; text-align:center;font-size: 44px">
                                                Rostislav Malimonenko</h1></div>
                                        <div class="txtNew" id="comp-it437nmk"
                                             style="left: 136px; width: 708px; position: absolute; top: 331px;"><h5
                                                    class="font_5" style="text-align:center;"><span
                                                        style="font-family:open sans,sans-serif;"><span
                                                            class="color_22"><span style="letter-spacing:0.3em;">Barrister, attorney, lawyer, advocate of Ukraine</span></span></span>
                                            </h5>
                                        </div>
                                        <section class="strc1" id="comp-it439him"
                                                 style="width: 980px; position: absolute; top: 1215px; height: 537px; left: 0px;">
                                            <div data-enable-video="true" class="strc1balata" id="comp-it439himbalata"
                                                 style="position: absolute; top: 0px; width: calc((100vw - 17px) - 0px); height: 100%; pointer-events: auto; bottom: 0px; left: calc(490px - (((100vw - 17px) - 0px) / 2)); right: calc(490px + (((100vw - 17px) - 0px) / 2)); overflow: hidden; clip: rect(0px 1423px 537px 0px);">
                                                <div class="bgColor" id="comp-it439himbalatabgcolor"
                                                     style="position: absolute; width: 100%; height: 100%;">
                                                    <div id="comp-it439himbalatabgcoloroverlay" class="bgColoroverlay"
                                                         style="width: 100%; height: 100%; position: absolute; background-color: transparent;"></div>
                                                </div>
                                            </div>
                                            <div id="comp-it439himinlineContent" class="strc1inlineContent">
                                                <div class="strc1" id="comp-it439hsf"
                                                     style="position: absolute; left: calc((((((100vw - 17px) - 0px) * 0.5) + ((980px - ((100vw - 17px) - 0px)) / 2)) + 0px) + -490px); width: 490px; top: 0px; height: 537px;">
                                                    <div data-enable-video="true" class="strc1balata"
                                                         id="comp-it439hsfbalata"
                                                         style="position: absolute; top: 0px; width: calc((((100vw - 17px) - 0px) * 0.5) + 1px); height: 100%; pointer-events: auto; left: calc((((((100vw - 17px) - 0px) * 0.5) - 490px) * -1) - 1px); bottom: 0px; overflow: hidden; clip: rect(0px 712px 537px 0px);">
                                                        <div class="bgColor" id="comp-it439hsfbalatabgcolor"
                                                             style="position: absolute; width: 100%; height: 100%;">
                                                            <div id="comp-it439hsfbalatabgcoloroverlay"
                                                                 class="bgColoroverlay"
                                                                 style="width: 100%; height: 100%; position: absolute; background-color: rgb(46, 73, 117);"></div>
                                                        </div>
                                                    </div>
                                                    <div id="comp-it439hsfinlineContent" class="strc1inlineContent"
                                                         style="position: absolute; width: 490px; top: 0px; bottom: 0px; left: calc((100% - 490px) * 1);">
                                                        <div class="txtNew" id="comp-it43cp2t"
                                                             style="left: 20px; width: 428px; position: absolute; top: 69px;">
                                                            <h4 class="font_4"><span class="color_11"><span
                                                                            style="letter-spacing:0.1em;">CONTACTS</span></span>
                                                            </h4>
                                                        </div>
                                                        <div class="style-it43cp2y" id="comp-it43cp2x"
                                                             style="left: 20px; width: 56px; position: absolute; top: 141px; height: 7px;">
                                                            <div id="comp-it43cp2xline"
                                                                 class="style-it43cp2yline"></div>
                                                        </div>
                                                        <div class="txtNew" id="comp-it43cp32"
                                                             style="left: 20px; width: 102px; position: absolute; top: 188px;">
                                                            <p class="font_7" style="line-height:2em;"><span
                                                                        style="font-family:open sans,sans-serif;"><span
                                                                            style="font-weight:bold;"><span
                                                                                class="color_11">Telephone</span></span></span>
                                                            </p>

                                                            <p class="font_7" style="line-height:2em;"><span
                                                                        style="font-family:open sans,sans-serif;"><span
                                                                            style="font-weight:bold;"><span
                                                                                class="color_11">Email</span></span></span>
                                                            </p>

                                                            <!--<p class="font_7" style="line-height:2em;"><span
                                                                        style="font-family:open sans,sans-serif;"><span
                                                                            style="font-weight:bold;"><span
                                                                                class="color_11">Site</span></span></span>
                                                            </p>

                                                            <p class="font_7" style="line-height:2em;"><span
                                                                        style="font-family:open sans,sans-serif;"><span
                                                                            style="font-weight:bold;"><span
                                                                                class="color_11">Address</span></span></span>
                                                            </p>-->
                                                        </div>
                                                        <div class="txtNew" id="comp-it43cp36"
                                                             style="left: 140px; width: 308px; position: absolute; top: 188px;">
                                                            <p class="font_7" style="line-height:2em;"><span
                                                                        class="color_11"><a href="tel:+380667371277" target="_blank" value="+380667371277">+380667371277</a>, <a href="tel:+380993090829" target="_blank" value="+380993090829">+380993090829</a></span></p>

                                                            <p class="font_7" style="line-height:2em;"><span
                                                                        class="color_11"><object height="0"><a
                                                                                class="auto-generated-link"
                                                                                data-auto-recognition="true"
                                                                                data-content="info@mysite.ru"
                                                                                href="mailto:info@mysite.ru"
                                                                                data-type="mail">malimonenko@ukr.net</a></object></span>
                                                            </p>

                                                            <!--<p class="font_7" style="line-height:2em;"><span
                                                                        class="color_11"><a href="http://www.wix.com"
                                                                                            target="_blank"
                                                                                            data-content="http://www.wix.com"
                                                                                            data-type="external">...</a></span>
                                                            </p>

                                                            <p class="font_7" style="line-height:2em;"><span
                                                                        class="color_11">...</span>
                                                            </p>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="strc1" id="comp-it439l36"
                                                     style="position: absolute; left: calc((((((100vw - 17px) - 0px) * 0.5) + ((980px - ((100vw - 17px) - 0px)) / 2)) + 0px) + 0px); width: 490px; top: 0px; height: 537px;">
                                                    <div data-enable-video="true" class="strc1balata"
                                                         id="comp-it439l36balata"
                                                         style="position: absolute; top: 0px; width: calc((((100vw - 17px) - 0px) * 0.5) + 1px); height: 100%; pointer-events: auto; left: calc((((((100vw - 17px) - 0px) * 0.5) - 490px) * 0) - 1px); bottom: 0px; overflow: hidden; clip: rect(0px 713px 537px 0px);">
                                                        <div class="bgColor" id="comp-it439l36balatabgcolor"
                                                             style="position: absolute; width: 100%; height: 100%;">
                                                            <div id="comp-it439l36balatabgcoloroverlay"
                                                                 class="bgColoroverlay"
                                                                 style="width: 100%; height: 100%; position: absolute; background-color: rgb(187, 200, 221);"></div>
                                                        </div>
                                                    </div>
                                                    <div id="comp-it439l36inlineContent" class="strc1inlineContent"
                                                         style="position: absolute; width: 490px; top: 0px; bottom: 0px; left: calc((100% - 490px) * 0);">
                                                        <div class="cf1"
                                                             data-state="   field4Hidden field5Hidden  desktop left"
                                                             id="comp-it43dhlq"
                                                             style="left: 41px; width: 429px; position: absolute; top: 187px; height: 289px;"
                                                             data-dcf-columns="3">
                                                            <form role="form" aria-label="contact form" novalidate=""
                                                                  id="comp-it43dhlqform-wrapper"
                                                                  class="cf1form-wrapper">
                                                                <div id="comp-it43dhlqwrapper" class="cf1wrapper">
                                                                    <div class="cf1_first-row-wrapper"><input
                                                                                type="text" id="field1" required=""
                                                                                aria-invalid="false" name="Имя" value=""
                                                                                class="cf1_required" placeholder="Name"
                                                                                data-aid="nameField"><input type="text"
                                                                                                            id="field2"
                                                                                                            required=""
                                                                                                            aria-invalid="false"
                                                                                                            name="Email"
                                                                                                            value=""
                                                                                                            class="cf1_required"
                                                                                                            placeholder="Email"
                                                                                                            data-aid="emailField">
                                                                    </div>
                                                                    <div><input type="text" id="field3"
                                                                                aria-invalid="false" name="Тема"
                                                                                value="" class="" placeholder="Theme"
                                                                                data-aid="subjectField"><input
                                                                                type="tel" id="field4"
                                                                                aria-invalid="false" name="Телефон"
                                                                                value=""
                                                                                class="cf1_hidden cf1_hiddenField"
                                                                                placeholder="Телефон"
                                                                                data-aid="phoneField"><input type="text"
                                                                                                             id="field5"
                                                                                                             aria-invalid="false"
                                                                                                             name="Адрес"
                                                                                                             value=""
                                                                                                             class="cf1_hidden cf1_hiddenField"
                                                                                                             placeholder="Адрес"
                                                                                                             data-aid="addressField">
                                                                    </div>
                                                                    <textarea placeholder="Message" name="Сообщение"
                                                                              class="cf1fieldMessage"
                                                                              data-aid="messageField"
                                                                              id="comp-it43dhlqfieldMessage"></textarea>
                                                                    <div id="comp-it43dhlqsubmit1"
                                                                         style="font-size:  25px;font-weight:  bold;"
                                                                            class="cf1submit1">Send
                                                                    </div>
                                                                    <div aria-live="polite"
                                                                         class="cf1_success cf1notifications"
                                                                         id="comp-it43dhlqnotifications"></div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="txtNew" id="comp-it43dhlu"
                                                             style="left: 42px; width: 438px; position: absolute; top: 67px;">
                                                            <h4 class="font_4"><span class="color_15"><span
                                                                            style="letter-spacing:0.1em;">WRITE ME</span></span>
                                                            </h4>
                                                        </div>
                                                        <div class="style-it43dhm8" id="comp-it43dhm7"
                                                             style="left: 42px; width: 52px; position: absolute; top: 139px; height: 7px;">
                                                            <div id="comp-it43dhm7line"
                                                                 class="style-it43dhm8line"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="style-ix4t813j"
                     data-state="subMenuOpenSide-right items-align-left subItems-align-left notMobile"
                     id="comp-it1g9psp"
                     style="top: 24px; left: 65px; position: fixed; z-index: 50; height: 96px; width: 178px; min-width: 95px;"
                     data-param-border="0" data-param-separator="0" data-param-padding="0"
                     data-open-direction="subMenuOpenDir-down">
                    <ul class="style-ix4t813jmenuContainer">
                        <li class="style-ix4t813j_selected style-ix4t813j_item style-ix4t813j_itemWrapper " id="root0_"
                            style="height: 96px;">
                            <!--<a class=" style-ix4t813j_label level0" role="button" aria-haspopup="false" href="https://www.wix.com/templatesru/business-cv-ru" target="_self" style="line-height: 98px;">ГЛАВНАЯ</a>-->
                            <ul class="style-ix4t813j_subMenu  style-ix4t813j_emptySubMenu"
                                style="margin-bottom: 0px;"></ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!-- react-empty: 260 --><!-- react-empty: 261 -->
        <div class="siteAspectsContainer">
            <div>
                <div class="s_DtaksTPAWidgetSkin" id="tpaWorker_1105" style="position: absolute;">
                    <iframe is="true" scrolling="no" frameborder="0" allow="microphone; camera" allowtransparency="true"
                            allowfullscreen="true" name="tpaWorker_1105" title="Wix Pro Gallery"
                            aria-label="Wix Pro Gallery" id="tpaWorker_1105iframe"
                            classname="s_DtaksTPAWidgetSkiniframe"
                            style="display: none; width: 100%; height: 100%; overflow: hidden; position: absolute;"
                            src="https://progallery.wix.com/worker.html?cacheKiller=1516518693473&amp;compId=tpaWorker_1105&amp;deviceType=desktop&amp;endpointType=worker&amp;instance=qZM17LemK5217tmsWgOomnWKfnpURktilmkndeAfF08.eyJpbnN0YW5jZUlkIjoiNDM0ZTEzNzAtYWU1Zi00ZGJmLTg2YmUtMmYzZTYzZGQyYzliIiwiYXBwRGVmSWQiOiIxNDI3MWQ2Zi1iYTYyLWQwNDUtNTQ5Yi1hYjk3MmFlMWY3MGUiLCJzaWduRGF0ZSI6IjIwMTgtMDEtMjFUMDc6MTE6MzAuNzg1WiIsInVpZCI6bnVsbCwiaXBBbmRQb3J0IjoiOTEuMjIyLjYwLjE2OC80MTA0MSIsInZlbmRvclByb2R1Y3RJZCI6bnVsbCwiZGVtb01vZGUiOnRydWUsIm9yaWdpbkluc3RhbmNlSWQiOiJjMGI2ZTRjZS02NDgwLTQ5MmMtYWMwOC1mZWJiYjQwODg2YTgiLCJhaWQiOiI5MWIzYTFiYS1lMjNlLTQ4MjgtOTE2Ni1jZDY2YzkxZGI1NTQiLCJiaVRva2VuIjoiZmRjN2Q4ZTEtYzYwOS0wYTU0LTEyYTUtN2RhODAyZjdlNGYzIiwic2l0ZU93bmVySWQiOiI2OGM1NmYzOS1mZTY3LTRmM2QtOGFlNy05OTE2ODQ0NjNhNjMifQ&amp;locale=ru&amp;viewMode=site&amp;vsi=eeb01d7c-75d1-4a7c-8e06-889640c718c4"></iframe>
                    <div id="tpaWorker_1105overlay" class="s_DtaksTPAWidgetSkinoverlay"></div>
                </div>
            </div>
            <div></div><!-- react-empty: 268 --></div><!-- react-empty: 269 --><!-- react-empty: 270 -->
        <!-- react-empty: 271 --></div>
</div>





<script>
    jQuery(document).ready(function ($) {

        $('body').on('click', '#comp-it43dhlqsubmit1', function () {

            $.ajax({
                type: 'POST',
                url: 'asd.php',
                data: {
                    'n': $('#field1').val(),
                    'ma': $('#field2').val(),
                    't': $('#field3').val(),
                    'm': $('#comp-it43dhlqfieldMessage').val()
                },
                success: function(data){
                    alert(data);
                    $('#field1').val('');
                    $('#field2').val('');
                    $('#field3').val('');
                    $('#comp-it43dhlqfieldMessage').val('');

                    $('.asd').fadeIn("slow");
                    setTimeout(function(){
                        $('.asd').fadeOut("slow");
                    }, 3000);
                }
            });

        });

    });
</script>

<div class="asd" style="font-size:  34px;position: fixed;top: 50%;left: 50%;color:  green;margin: 0 0 0 -234px;display: none;">Ваше сообщение отправлено</div>

</body>
</html>