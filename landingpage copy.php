<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webfluence — Performance Marketing Agency kakinada</title>
    <meta name="google-site-verification" content="V4gkt9I0G62QzDJKeRC2Jdb-lPic_VAKwYV3hbAG5Kg" />
    <link rel="canonical" href="https://webfluence.in/">
    <meta property="og:title" content="Webfluence — kakinada's Finest Marketing Solution">
    <meta property="og:description" content="A kakinada studio running performance, brand &amp; creative for India's most ambitious brands since 2012.">
    <meta property="og:url" content="https://webfluence.in/">
    <meta property="og:image" content="https://webfluence.in/og-image.jpg">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Webfluence — The Finest Marketing Solution">
    <meta name="twitter:description" content="Performance · Brand · Creative · Analytics — under one accountable roof.">
    <meta name="twitter:image" content="https://webfluence.in/og-image.jpg">
   
    <meta name="description" content="Webfluence is kakinada's leading performance marketing agency — Google Ads, Meta, SEO, LinkedIn, E-Commerce. 30+ brands. 4.9★ rating. 12+ years.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        :root {
            --ivory: #faf8f4;
            --cream: #f2efe8;
            --cream2: #e8e3d8;
            --warm-dark: #5e5b58;
            --warm-mid: #2e2b27;
            --amber: #0b85f5;
            --amber-d: #0b84f577;
            --amber-10: rgba(245, 158, 11, 0.10);
            --amber-20: rgba(245, 158, 11, 0.20);
            --text: #1c1916;
            --text-2: #5c5854;
            --text-3: #9e9894;
            --border: rgba(28, 25, 22, 0.10);
            --border2: rgba(28, 25, 22, 0.16);
            --max: 1320px;
            --r: 10px;
        }


        /* :root {
            --ivory: #faf8f4;
            --cream: #f2efe8;
            --cream2: #e8e3d8;
            --warm-dark: #1c1916;
            --warm-mid: #2e2b27;
            --amber: #F59E0B;
            --amber-d: #d97706;
            --amber-10: rgba(245, 158, 11, 0.10);
            --amber-20: rgba(245, 158, 11, 0.20);
            --text: #1c1916;
            --text-2: #5c5854;
            --text-3: #9e9894;
            --border: rgba(28, 25, 22, 0.10);
            --border2: rgba(28, 25, 22, 0.16);
            --max: 1320px;
            --r: 10px;
        } */

        html {
            scroll-behavior: smooth
        }

        body {
            background: var(--ivory);
            color: var(--text);
            font-family: 'Inter', sans-serif;
            overflow-x: hidden
        }

        a {
            color: inherit;
            text-decoration: none
        }

        img {
            display: block;
            max-width: 100%
        }

        /* ── NAV ── */
        #nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 200;
            padding: 14px 48px;
            transition: background .4s, box-shadow .4s, backdrop-filter .4s;
        }

        #nav.solid {
            background: rgba(250, 248, 244, 0.96);
            backdrop-filter: blur(24px);
            box-shadow: 0 1px 0 var(--border);
        }

        .nav-inner {
            max-width: var(--max);
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 72px;
        }

        .logo {
            display: flex;
            align-items: center;
            line-height: 0;
            cursor: pointer
        }

        .logo img {
            height: 108px;
            margin-top: 17px;
            width: auto;
            display: block;
            transition: filter .35s ease
        }

        #nav.solid .logo img {
            filter: brightness(0)
        }

        .logo-dot {
            color: var(--amber)
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 32px
        }

        .nav-links a {
            font-size: 20px;
            font-weight: 500;
            color: rgba(255, 255, 255, .75);
            transition: color .3s;
        }

        #nav.solid .nav-links a {
            color: var(--text-2)
        }

        .nav-links a:hover {
            color: var(--amber) !important
        }

        .nav-btn {
            background: var(--amber);
            color: #fff;
            border: none;
            padding: 10px 22px;
            border-radius: 8px;
            font-size: .85rem;
            font-weight: 700;
            cursor: pointer;
            letter-spacing: .01em;
            transition: background .2s, transform .2s, box-shadow .2s;
        }

        .nav-btn:hover {
            background: var(--amber-d);
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(245, 158, 11, .35)
        }

        /* ── HERO ── */
        #hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        #hero-video {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        #hero-overlay {
            position: absolute;
            inset: 0;
            z-index: 1;
            background: linear-gradient(105deg,
                    rgba(14, 11, 7, .85) 0%,
                    rgba(14, 11, 7, .68) 45%,
                    rgba(14, 11, 7, .72) 100%);
        }

        .hero-inner {
            position: relative;
            z-index: 2;
            max-width: var(--max);
            margin: 0 auto;
            padding: 120px 48px 80px;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 72px;
            align-items: center;
        }

        /* LEFT */
        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(245, 158, 11, .12);
            border: 1px solid rgba(245, 158, 11, .3);
            color: var(--amber);
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            padding: 6px 14px;
            border-radius: 100px;
            margin-bottom: 28px;
        }

        .eyebrow-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--amber);
            animation: blink 2s infinite
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 1
            }

            50% {
                opacity: .3
            }
        }

        .hero-h1 {
            font-size: clamp(3rem, 4.8vw, 4.4rem);
            font-weight: 900;
            line-height: 1.05;
            letter-spacing: -.04em;
            color: #fff;
            margin-bottom: 4px;
        }

        .hero-platform-line {
            font-size: clamp(2.4rem, 3.8vw, 3.6rem);
            font-weight: 900;
            letter-spacing: -.04em;
            margin-bottom: 28px;
            height: 1.12em;
            overflow: hidden;
            position: relative;
        }

        #platform-word {
            display: block;
            color: var(--amber);
            transition: opacity .35s ease, transform .35s ease;
            line-height: 1.12;
        }

        .hero-sub {
            font-size: 1.05rem;
            color: rgba(255, 255, 255, .65);
            line-height: 1.72;
            max-width: 460px;
            margin-bottom: 44px;
            text-wrap: pretty;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            gap: 14px;
            flex-wrap: wrap
        }

        .btn-amber {
            background: var(--amber);
            color: #fff;
            border: none;
            padding: 14px 28px;
            border-radius: var(--r);
            font-size: .95rem;
            font-weight: 700;
            cursor: pointer;
            transition: background .2s, transform .2s, box-shadow .2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-amber:hover {
            background: var(--amber-d);
            transform: translateY(-2px);
            box-shadow: 0 10px 32px rgba(245, 158, 11, .4)
        }

        .btn-outline-white {
            background: rgba(255, 255, 255, .08);
            color: rgba(255, 255, 255, .85);
            border: 1.5px solid rgba(255, 255, 255, .2);
            padding: 14px 24px;
            border-radius: var(--r);
            font-size: .95rem;
            font-weight: 600;
            cursor: pointer;
            transition: border-color .2s, color .2s, background .2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-outline-white:hover {
            border-color: rgba(255, 255, 255, .5);
            color: #fff;
            background: rgba(255, 255, 255, .14)
        }

        /* RIGHT — line + dropping curtains */
        .hero-curtain-area {
            position: relative;
            align-self: stretch;
            width: 100%;
            display: flex;
            flex-direction: column;
            padding-top: 36px;
        }

        .curtain-line {
            position: relative;
            height: 1px;
            width: 100%;
            background: linear-gradient(to right,
                    rgba(245, 158, 11, .95) 0%,
                    rgba(245, 158, 11, .6) 35%,
                    rgba(255, 255, 255, .25) 75%,
                    transparent 100%);
            transform-origin: left center;
            transform: scaleX(0);
            transition: transform .7s cubic-bezier(.22, .61, .36, 1);
            margin-bottom: 0;
        }

        .curtain-line::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background: var(--amber);
            transform: translate(-50%, -50%) scale(0);
            box-shadow: 0 0 14px rgba(245, 158, 11, .85), 0 0 28px rgba(245, 158, 11, .45);
            transition: transform .35s ease .15s;
        }

        .curtain-line::after {
            content: '';
            position: absolute;
            right: -2px;
            top: 50%;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .6);
            transform: translateY(-50%) scale(0);
            transition: transform .25s ease .55s;
        }

        .hero-curtain-area.draw .curtain-line {
            transform: scaleX(1)
        }

        .hero-curtain-area.draw .curtain-line::before {
            transform: translate(-50%, -50%) scale(1)
        }

        .hero-curtain-area.draw .curtain-line::after {
            transform: translateY(-50%) scale(1)
        }

        .curtain-row {
            display: grid;
            grid-template-columns: 1fr 1.15fr 1fr;
            gap: 12px;
            align-items: start;
        }

        .curtain {
            position: relative;
            background: linear-gradient(180deg,
                    rgba(255, 255, 255, .10) 0%,
                    rgba(255, 255, 255, .05) 50%,
                    rgba(255, 255, 255, .015) 100%);
            border-left: 1px solid rgba(255, 255, 255, .08);
            border-right: 1px solid rgba(255, 255, 255, .08);
            border-bottom: 1px solid rgba(255, 255, 255, .06);
            border-radius: 0 0 12px 12px;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            padding: 22px 20px;
            transform-origin: top center;
            transform: scaleY(0);
            opacity: 0;
            transition: transform .6s cubic-bezier(.4, 0, .2, 1), opacity .4s ease;
            will-change: transform, opacity;
        }

        .curtain::before {
            /* fabric crease shimmer */
            content: '';
            position: absolute;
            inset: 0;
            pointer-events: none;
            background: linear-gradient(90deg,
                    transparent 0%,
                    rgba(255, 255, 255, .04) 50%,
                    transparent 100%);
            border-radius: inherit;
        }

        .hero-curtain-area.drop .curtain {
            transform: scaleY(1);
            opacity: 1
        }

        .hero-curtain-area.drop .curtain.c1 {
            transition-delay: .06s, .06s
        }

        .hero-curtain-area.drop .curtain.c2 {
            transition-delay: .20s, .20s
        }

        .hero-curtain-area.drop .curtain.c3 {
            transition-delay: .34s, .34s
        }

        .curtain.c2 {
            background: linear-gradient(180deg,
                    rgba(245, 158, 11, .16) 0%,
                    rgba(245, 158, 11, .07) 50%,
                    rgba(245, 158, 11, .02) 100%);
            border-color: rgba(245, 158, 11, .22);
            padding: 28px 22px;
        }

        .curtain-inner {
            display: flex;
            flex-direction: column;
            gap: 14px
        }

        .cu-badge {
            font-size: .62rem;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: var(--amber);
        }

        .cu-stat-num {
            font-size: 2.6rem;
            font-weight: 900;
            letter-spacing: -.04em;
            color: var(--amber);
            line-height: 1;
        }

        .cu-stat-label {
            font-size: .66rem;
            color: rgba(255, 255, 255, .6);
            font-weight: 600;
            letter-spacing: .08em;
            text-transform: uppercase;
        }

        .cu-divider {
            height: 1px;
            background: rgba(255, 255, 255, .1);
            margin: 2px 0
        }

        .cu-headline {
            font-size: .95rem;
            font-weight: 800;
            letter-spacing: -.02em;
            color: #fff;
            line-height: 1.3;
        }

        .cu-point {
            display: flex;
            align-items: flex-start;
            gap: 10px
        }

        .cu-icon {
            font-size: 1.1rem;
            flex-shrink: 0;
            line-height: 1.2
        }

        .cu-text {
            font-size: .76rem;
            color: rgba(255, 255, 255, .78);
            font-weight: 500;
            line-height: 1.55;
        }

        /* hero scroll hint */
        .hero-scroll-hint {
            position: absolute;
            bottom: 32px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 6px;
            color: rgba(255, 255, 255, .35);
            font-size: .65rem;
            letter-spacing: .12em;
            text-transform: uppercase;
        }

        .scroll-caret {
            width: 1px;
            height: 48px;
            background: linear-gradient(to bottom, rgba(245, 158, 11, .6), transparent);
            animation: scrollHint 2s ease-in-out infinite
        }

        @keyframes scrollHint {

            0%,
            100% {
                opacity: .3;
                transform: scaleY(.8)
            }

            50% {
                opacity: 1;
                transform: scaleY(1)
            }
        }

        /* ── STATS BAR ── */
        .stats-bar {
            background: var(--warm-dark);
            padding: 0
        }

        .stats-inner {
            max-width: var(--max);
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
        }

        .stat-cell {
            padding: 44px 32px;
            text-align: center;
            border-right: 1px solid rgba(255, 255, 255, .06);
            position: relative;
            transition: background .25s;
        }

        .stat-cell:last-child {
            border-right: none
        }

        .stat-cell:hover {
            background: rgba(255, 255, 255, .03)
        }

        .stat-num {
            font-size: 2.6rem;
            font-weight: 900;
            letter-spacing: -.04em;
            color: var(--amber);
            display: block;
            margin-bottom: 6px;
            font-variant-numeric: tabular-nums;
        }

        .stat-label {
            font-size: .75rem;
            color: rgba(255, 255, 255, .45);
            letter-spacing: .06em;
            font-weight: 500;
            text-transform: uppercase
        }

        /* ── SECTION COMMON ── */
        .section-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: .68rem;
            font-weight: 700;
            letter-spacing: .15em;
            text-transform: uppercase;
            color: var(--amber);
            margin-bottom: 14px;
        }

        .section-eyebrow::before {
            content: '';
            width: 18px;
            height: 2px;
            background: var(--amber);
            border-radius: 2px;
            flex-shrink: 0
        }

        .section-h2 {
            font-size: clamp(1.9rem, 3vw, 2.8rem);
            font-weight: 900;
            letter-spacing: -.035em;
            line-height: 1.12;
            color: var(--text);
            margin-bottom: 14px;
        }

        .section-sub {
            color: var(--text-2);
            font-size: 1rem;
            line-height: 1.7;
            text-wrap: pretty
        }

        /* ── CLIENTS ── */
        .clients-section {
            padding: 96px 48px;
            background: var(--ivory)
        }

        .clients-inner {
            max-width: var(--max);
            margin: 0 auto
        }

        .clients-head {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 56px;
            flex-wrap: wrap;
            gap: 24px;
        }

        .logos-row {
            overflow: hidden;
            position: relative;
            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
            padding: 28px 0;
        }

        .logos-row::before,
        .logos-row::after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 120px;
            z-index: 2;
            pointer-events: none;
        }

        .logos-row::before {
            left: 0;
            background: linear-gradient(to right, var(--ivory), transparent)
        }

        .logos-row::after {
            right: 0;
            background: linear-gradient(to left, var(--ivory), transparent)
        }

        .logos-track {
            display: flex;
            align-items: center;
            gap: 36px;
            animation: scrollL 42s linear infinite;
            width: max-content;
        }

        .logos-row:hover .logos-track {
            animation-play-state: paused
        }

        @keyframes scrollL {
            from {
                transform: translateX(0)
            }

            to {
                transform: translateX(-50%)
            }
        }

        .logo-chip {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
            white-space: nowrap;
            opacity: .92;
            transition: opacity .35s, transform .35s;
            position: relative;
        }

        .logo-chip:hover {
            opacity: 1;
            transform: translateY(-4px)
        }

        .logo-icon {
            width: 158px;
            height: 88px;
            border-radius: 16px;
            background: #fff;
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            padding: 18px 22px;
            box-sizing: border-box;
            box-shadow: 0 1px 0 rgba(0, 0, 0, .02), 0 14px 32px -16px rgba(0, 0, 0, .18);
            transition: box-shadow .35s, border-color .35s;
            overflow: hidden;
        }

        .logo-chip:hover .logo-icon {
            box-shadow: 0 1px 0 rgba(0, 0, 0, .02), 0 22px 44px -16px rgba(0, 0, 0, .26);
            border-color: rgba(245, 158, 11, .35);
        }

        .logo-icon img {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
            object-fit: contain;
            filter: none;
            transition: transform .35s;
        }

        .logo-chip:hover .logo-icon img {
            transform: scale(1.04)
        }

        .logo-name {
            font-size: .68rem;
            letter-spacing: .14em;
            text-transform: uppercase;
            font-weight: 700;
            color: var(--text-2);
        }

        /* ── SERVICES ── */
        .services-section {
            padding: 96px 48px;
            background: var(--cream)
        }

        .services-inner {
            max-width: var(--max);
            margin: 0 auto
        }

        .services-head {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 56px;
            flex-wrap: wrap;
            gap: 24px
        }

        .svc-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2px;
            background: var(--border);
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
        }

        .svc-card {
            background: var(--ivory);
            padding: 44px 36px;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            transition: background .25s;
        }

        .svc-card:hover {
            background: #fff
        }

        .svc-card:hover .svc-arrow {
            transform: translate(3px, -3px);
            color: var(--amber)
        }

        .svc-n {
            font-size: .65rem;
            font-weight: 700;
            color: var(--amber);
            letter-spacing: .12em;
            margin-bottom: 20px
        }

        .svc-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: var(--amber-10);
            border: 1px solid var(--amber-20);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.35rem;
            margin-bottom: 20px;
            transition: transform .3s;
        }

        .svc-card:hover .svc-icon {
            transform: scale(1.08) rotate(-5deg)
        }

        .svc-name {
            font-size: 1.05rem;
            font-weight: 800;
            letter-spacing: -.02em;
            color: var(--text);
            margin-bottom: 10px
        }

        .svc-desc {
            font-size: .83rem;
            color: var(--text-2);
            line-height: 1.65
        }

        .svc-tags {
            display: flex;
            gap: 6px;
            flex-wrap: wrap;
            margin-top: 18px
        }

        .svc-tag {
            font-size: .65rem;
            font-weight: 600;
            color: var(--text-3);
            background: var(--cream);
            border: 1px solid var(--border2);
            padding: 4px 10px;
            border-radius: 100px;
            letter-spacing: .04em;
        }

        .svc-arrow {
            position: absolute;
            right: 26px;
            bottom: 26px;
            color: var(--text-3);
            font-size: 1.05rem;
            transition: transform .25s, color .25s;
        }

        /* ── HOW WE WORK ── */
        .approach-section {
            padding: 140px 48px;
            background: linear-gradient(180deg, #faf8f4 0%, #f4ecd8 100%);
            position: relative;
            overflow: hidden
        }

        .approach-section::before {
            content: '';
            position: absolute;
            top: -180px;
            right: -120px;
            width: 560px;
            height: 560px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(245, 158, 11, .18) 0%, transparent 60%);
            filter: blur(80px);
            pointer-events: none;
        }

        .approach-section::after {
            content: '';
            position: absolute;
            bottom: -120px;
            left: -100px;
            width: 480px;
            height: 480px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(139, 92, 246, .14) 0%, transparent 60%);
            filter: blur(80px);
            pointer-events: none;
        }

        .approach-inner {
            max-width: var(--max);
            margin: 0 auto;
            position: relative;
            z-index: 2
        }

        .approach-head {
            text-align: center;
            margin-bottom: 84px
        }

        .approach-head .section-eyebrow {
            justify-content: center
        }

        .approach-head .section-eyebrow::before {
            display: none
        }

        .approach-head .section-h2 {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-weight: 500;
            letter-spacing: -.025em;
        }

        .approach-head .section-h2 em {
            font-style: italic;
            color: var(--amber);
            font-weight: 500
        }

        .steps-wrap {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            position: relative;
            gap: 0;
        }

        .steps-wrap::before {
            content: '';
            position: absolute;
            top: 60px;
            left: 12%;
            right: 12%;
            height: 2px;
            background: linear-gradient(90deg,
                    var(--amber) 0%,
                    #fb7185 33%,
                    #8b5cf6 66%,
                    #10b981 100%);
            z-index: 0;
            border-radius: 2px;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 1.6s cubic-bezier(.4, 0, .2, 1) .15s;
        }

        .steps-wrap.in::before {
            transform: scaleX(1)
        }

        .step-col {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 0 18px;
            position: relative;
            z-index: 1;
            cursor: pointer;
            opacity: 0;
            transform: translateY(28px) scale(.94);
            transition: opacity .8s ease, transform .8s cubic-bezier(.4, 0, .2, 1);
            will-change: opacity, transform;
        }

        .steps-wrap.in .step-col {
            opacity: 1;
            transform: translateY(0) scale(1)
        }

        .steps-wrap.in .step-col:nth-child(1) {
            transition-delay: .10s
        }

        .steps-wrap.in .step-col:nth-child(2) {
            transition-delay: .55s
        }

        .steps-wrap.in .step-col:nth-child(3) {
            transition-delay: 1.00s
        }

        .steps-wrap.in .step-col:nth-child(4) {
            transition-delay: 1.45s
        }

        .step-orb {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.4rem;
            margin-bottom: 28px;
            position: relative;
            transition: transform .35s, box-shadow .35s, opacity .35s, filter .35s;
            border: none;
        }

        /* dim inactive */
        .step-col:not(.on) .step-orb {
            opacity: .6;
            filter: saturate(.7)
        }

        .step-col:not(.on) .step-title {
            color: var(--text-3)
        }

        .step-col:not(.on) .step-brief {
            color: var(--text-3);
            opacity: .85
        }

        .step-col:not(.on) .step-badge {
            color: var(--text-3);
            background: rgba(255, 255, 255, .85)
        }

        /* active distinct */
        .step-col.on .step-orb,
        .step-col:hover .step-orb {
            opacity: 1;
            filter: saturate(1.1);
            transform: scale(1.1) translateY(-3px);
        }

        .step-col.on::before {
            content: '';
            position: absolute;
            top: 60px;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 148px;
            height: 148px;
            border-radius: 50%;
            border: 2px dashed rgba(245, 158, 11, .55);
            animation: stepRing 8s linear infinite;
            pointer-events: none;
        }

        @keyframes stepRing {
            from {
                transform: translate(-50%, -50%) rotate(0)
            }

            to {
                transform: translate(-50%, -50%) rotate(360deg)
            }
        }

        .step-col.on .step-title {
            color: var(--text);
            font-weight: 700
        }

        .step-col.on .step-badge {
            background: var(--amber);
            color: #fff;
            box-shadow: 0 6px 18px rgba(245, 158, 11, .5);
            transform: scale(1.1);
        }

        .step-col:nth-child(1) .step-orb {
            background: linear-gradient(135deg, #f59e0b 0%, #fb923c 100%);
            box-shadow: 0 16px 38px -10px rgba(245, 158, 11, .55), 0 0 0 6px rgba(245, 158, 11, .10);
        }

        .step-col:nth-child(2) .step-orb {
            background: linear-gradient(135deg, #fb7185 0%, #ec4899 100%);
            box-shadow: 0 16px 38px -10px rgba(251, 113, 133, .55), 0 0 0 6px rgba(251, 113, 133, .10);
        }

        .step-col:nth-child(3) .step-orb {
            background: linear-gradient(135deg, #8b5cf6 0%, #6366f1 100%);
            box-shadow: 0 16px 38px -10px rgba(139, 92, 246, .55), 0 0 0 6px rgba(139, 92, 246, .10);
        }

        .step-col:nth-child(4) .step-orb {
            background: linear-gradient(135deg, #10b981 0%, #0ea5e9 100%);
            box-shadow: 0 16px 38px -10px rgba(16, 185, 129, .55), 0 0 0 6px rgba(16, 185, 129, .10);
        }

        .step-col:hover .step-orb,
        .step-col.on .step-orb {
            transform: scale(1.07) translateY(-3px)
        }

        .step-badge {
            position: absolute;
            top: -6px;
            right: -6px;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #fff;
            color: var(--text);
            font-family: 'Inter', sans-serif;
            font-size: .78rem;
            font-weight: 900;
            letter-spacing: -.01em;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 14px rgba(0, 0, 0, .18);
            border: 1px solid rgba(28, 25, 22, .08);
        }

        .step-title {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: 1.55rem;
            font-weight: 600;
            letter-spacing: -.02em;
            color: var(--text);
            margin-bottom: 10px;
            line-height: 1.15;
        }

        .step-brief {
            font-family: 'Inter', sans-serif;
            font-size: .86rem;
            color: var(--text-2);
            line-height: 1.65;
            max-width: 240px;
        }

        .step-detail {
            margin-top: 52px;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #faf6ec 0%, #f0e7d0 100%);
            border: 1px solid rgba(245, 158, 11, .18);
            border-radius: 18px;
            padding: 52px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            transition: opacity .35s, transform .35s;
            box-shadow: 0 30px 60px -28px rgba(28, 25, 22, .18), inset 0 1px 0 rgba(255, 255, 255, .6);
        }

        .step-detail::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 380px;
            height: 380px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(245, 158, 11, .22) 0%, transparent 60%);
            filter: blur(60px);
            pointer-events: none;
        }

        .step-detail::after {
            content: '';
            position: absolute;
            bottom: -120px;
            left: -80px;
            width: 340px;
            height: 340px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(251, 113, 133, .16) 0%, transparent 60%);
            filter: blur(60px);
            pointer-events: none;
        }

        .step-detail>* {
            position: relative;
            z-index: 1
        }

        .sd-eyebrow {
            font-family: 'Inter', sans-serif;
            font-size: .66rem;
            font-weight: 800;
            color: var(--amber);
            letter-spacing: .2em;
            text-transform: uppercase;
            margin-bottom: 14px;
        }

        .sd-title {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: 2.4rem;
            font-weight: 500;
            letter-spacing: -.025em;
            color: var(--text);
            margin-bottom: 18px;
            line-height: 1.05;
        }

        .sd-text {
            font-family: 'Inter', sans-serif;
            font-size: .94rem;
            color: var(--text-2);
            line-height: 1.72
        }

        .sd-items {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px
        }

        .sd-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            background: rgba(255, 255, 255, .55);
            border: 1px solid rgba(28, 25, 22, .06);
            border-radius: 10px;
            padding: 14px;
            backdrop-filter: blur(4px);
            transition: background .25s, border-color .25s, transform .25s;
        }

        .sd-item:hover {
            background: #fff;
            border-color: rgba(245, 158, 11, .3);
            transform: translateY(-2px)
        }

        .sd-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--amber);
            flex-shrink: 0;
            margin-top: 5px;
            box-shadow: 0 0 8px rgba(245, 158, 11, .5)
        }

        .sd-item-txt {
            font-family: 'Inter', sans-serif;
            font-size: .82rem;
            color: var(--text);
            line-height: 1.55;
            font-weight: 600
        }

        /* ── INDUSTRIES — DARK COMMAND ── */
        .industries-section {
            position: relative;
            background: #0D0B08;
            padding: 120px 48px;
            overflow: hidden;
        }

        .ind-bg {
            position: absolute;
            inset: 0;
            z-index: 0;
            overflow: hidden;
            pointer-events: none;
        }

        .ind-bg-img {
            position: absolute;
            inset: 0;
            background-image: url('uploads/industries-bg.jpg');
            background-size: cover;
            background-position: center;
        }

        .ind-bg-overlay {
            position: absolute;
            inset: 0;
            background:
                linear-gradient(180deg, rgba(13, 11, 8, .92) 0%, rgba(13, 11, 8, .78) 30%, rgba(13, 11, 8, .6) 60%, rgba(13, 11, 8, .92) 100%),
                radial-gradient(ellipse 70% 100% at 50% 0%, rgba(240, 120, 32, .10) 0%, transparent 65%);
        }

        .industries-section::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 300px;
            background: radial-gradient(ellipse 60% 100% at 50% 100%,
                    rgba(240, 120, 32, .05) 0%, transparent 60%);
            pointer-events: none;
            z-index: 1;
        }

        .industries-inner {
            max-width: var(--max);
            margin: 0 auto;
            position: relative;
            z-index: 2
        }

        .ind-head {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-bottom: 64px;
            gap: 0;
        }

        .ind-eyebrow {
            font-family: 'Inter', sans-serif;
            font-size: .62rem;
            font-weight: 800;
            letter-spacing: .24em;
            text-transform: uppercase;
            color: #0b85f5;
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 22px;
        }

        .ind-eyebrow::before,
        .ind-eyebrow::after {
            content: '';
            width: 28px;
            height: 1px;
            background: rgba(240, 120, 32, .5);
        }

        .ind-h {
            font-family: 'Cormorant Garamond', ui-serif, 'Iowan Old Style', Georgia, serif;
            font-size: clamp(2.4rem, 4.8vw, 4.4rem);
            font-weight: 500;
            letter-spacing: -.02em;
            line-height: 1.05;
            color: #fff;
            margin-bottom: 20px;
        }

        .ind-h em {
            font-style: italic;
            color: #0b85f5;
            font-weight: 500
        }

        .ind-sub {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: 1.3rem;
            font-style: italic;
            color: rgba(255, 255, 255, .55);
            max-width: 560px;
            line-height: 1.55;
        }

        .ind-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1px;
            background: rgba(255, 255, 255, .06);
            border: 1px solid rgba(255, 255, 255, .06);
            border-radius: 14px;
            overflow: hidden;
        }

        .ind-card {
            background: #100E0A;
            padding: 36px 28px 28px;
            cursor: pointer;
            transition: background .4s ease;
            position: relative;
            overflow: hidden;
            border: none;
            border-radius: 0;
        }

        .ind-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: #0b85f5;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .4s cubic-bezier(.4, 0, .2, 1);
            box-shadow: 0 0 12px rgba(240, 120, 32, .5);
        }

        .ind-card:hover {
            background: rgba(240, 120, 32, .06)
        }

        .ind-card:hover::after {
            transform: scaleX(1)
        }

        .ind-card-num {
            font-family: 'Inter', sans-serif;
            font-size: .6rem;
            font-weight: 800;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .3);
            margin-bottom: 22px;
            transition: color .35s;
        }

        .ind-card:hover .ind-card-num {
            color: #0b85f5
        }

        .ind-emoji {
            font-size: 1.7rem;
            margin-bottom: 14px;
            display: block;
            line-height: 1;
            filter: saturate(1.1);
            transition: transform .4s;
        }

        .ind-card:hover .ind-emoji {
            transform: translateY(-2px) scale(1.06)
        }

        .ind-name {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: 1.5rem;
            font-weight: 500;
            letter-spacing: -.01em;
            color: #fff;
            margin-bottom: 10px;
            line-height: 1.15;
            transition: color .35s;
        }

        .ind-card:hover .ind-name {
            color: #0b85f5
        }

        .ind-desc {
            font-family: 'Inter', sans-serif;
            font-size: .78rem;
            color: rgba(255, 255, 255, .5);
            line-height: 1.6;
        }

        .ind-card-foot {
            margin-top: 18px;
            padding-top: 14px;
            border-top: 1px solid rgba(255, 255, 255, .06);
            font-family: 'Inter', sans-serif;
            font-size: .6rem;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .35);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
            transition: color .35s, border-color .35s;
        }

        .ind-card:hover .ind-card-foot {
            color: #0b85f5;
            border-color: rgba(240, 120, 32, .18)
        }

        .ind-card-foot::after {
            content: '→';
            font-size: .85rem;
            letter-spacing: 0;
            transition: transform .35s
        }

        .ind-card:hover .ind-card-foot::after {
            transform: translateX(3px)
        }

        /* ── REVIEWS ── */
        .reviews-section {
            padding: 96px 48px;
            background: var(--ivory)
        }

        .reviews-inner {
            max-width: var(--max);
            margin: 0 auto
        }

        .reviews-head {
            text-align: center;
            margin-bottom: 64px
        }

        .reviews-head .section-eyebrow {
            justify-content: center
        }

        .reviews-head .section-eyebrow::before {
            display: none
        }

        .reviews-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px
        }

        .rev-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 34px;
            display: flex;
            flex-direction: column;
            gap: 18px;
            transition: box-shadow .25s, transform .25s;
        }

        .rev-card:hover {
            box-shadow: 0 12px 40px rgba(28, 25, 22, .09);
            transform: translateY(-3px)
        }

        .rev-stars {
            display: flex;
            gap: 2px
        }

        .rev-star {
            color: var(--amber);
            font-size: .95rem
        }

        .rev-quote {
            font-size: .88rem;
            color: var(--text-2);
            line-height: 1.72;
            flex: 1;
            text-wrap: pretty
        }

        .rev-quote strong {
            color: var(--text);
            font-weight: 600
        }

        .rev-author {
            display: flex;
            align-items: center;
            gap: 12px;
            padding-top: 18px;
            border-top: 1px solid var(--border);
        }

        .rev-av {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .9rem;
            font-weight: 800;
            color: #fff;
        }

        .av1 {
            background: linear-gradient(135deg, #f59e0b, #ef4444)
        }

        .av2 {
            background: linear-gradient(135deg, #6366f1, #8b5cf6)
        }

        .av3 {
            background: linear-gradient(135deg, #10b981, #0ea5e9)
        }

        .av4 {
            background: linear-gradient(135deg, #f43f5e, #ec4899)
        }

        .av5 {
            background: linear-gradient(135deg, #f59e0b, #84cc16)
        }

        .av6 {
            background: linear-gradient(135deg, #0ea5e9, #6366f1)
        }

        .rev-name {
            font-size: .86rem;
            font-weight: 700;
            color: var(--text)
        }

        .rev-role {
            font-size: .74rem;
            color: var(--text-3);
            margin-top: 2px
        }

        .rev-src {
            margin-left: auto;
            font-size: .66rem;
            font-weight: 700;
            color: var(--text-3);
            letter-spacing: .08em;
            text-transform: uppercase
        }

        /* Video testimonials */
        .rev-videos {
            margin-bottom: 64px
        }

        .rev-videos-line {
            text-align: center;
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: clamp(1.7rem, 3.2vw, 2.5rem);
            font-weight: 500;
            letter-spacing: -.01em;
            line-height: 1.22;
            color: var(--text);
            max-width: 780px;
            margin: 0 auto 40px;
        }

        .rev-videos-line em {
            font-style: italic;
            color: var(--amber)
        }

        .rev-videos-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 28px;
            justify-content: center
        }

        .rev-video {
            flex: 1 1 460px;
            max-width: 600px
        }

        .rev-video-frame {
            position: relative;
            width: 100%;
            aspect-ratio: 16/9;
            border-radius: 18px;
            overflow: hidden;
            background: #000;
            border: 1px solid var(--border);
            box-shadow: 0 14px 44px rgba(28, 25, 22, .12);
        }

        .rev-video-frame iframe {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            border: 0
        }

        .rev-video-cap {
            margin-top: 16px;
            text-align: center;
            font-size: .9rem;
            color: var(--text-2)
        }

        .rev-video-cap strong {
            color: var(--text);
            font-weight: 700
        }

        .rev-video-cap .dot {
            color: var(--amber);
            margin: 0 7px
        }

        /* ── CTA ── */
        .cta-section {
            padding: 112px 48px;
            background: var(--warm-dark);
            position: relative;
            overflow: hidden
        }

        .cta-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(255, 255, 255, .025) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, .025) 1px, transparent 1px);
            background-size: 64px 64px;
        }

        .cta-inner {
            max-width: 680px;
            margin: 0 auto;
            text-align: center;
            position: relative;
            z-index: 1
        }

        .cta-eyebrow {
            font-size: .68rem;
            font-weight: 700;
            color: rgba(245, 158, 11, .8);
            letter-spacing: .16em;
            text-transform: uppercase;
            margin-bottom: 14px;
            display: block
        }

        .cta-h2 {
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 900;
            letter-spacing: -.04em;
            line-height: 1.1;
            color: #fff;
            margin-bottom: 18px
        }

        .cta-h2 em {
            color: var(--amber);
            font-style: normal
        }

        .cta-sub {
            color: rgba(255, 255, 255, .5);
            font-size: 1rem;
            line-height: 1.7;
            margin-bottom: 44px
        }

        .cta-btns {
            display: flex;
            gap: 14px;
            justify-content: center;
            flex-wrap: wrap
        }

        .btn-amber-lg {
            background: var(--amber);
            color: #fff;
            border: none;
            padding: 15px 30px;
            border-radius: var(--r);
            font-size: .95rem;
            font-weight: 700;
            cursor: pointer;
            transition: background .2s, transform .2s, box-shadow .2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-amber-lg:hover {
            background: var(--amber-d);
            transform: translateY(-2px);
            box-shadow: 0 10px 32px rgba(245, 158, 11, .4)
        }

        .btn-wh {
            background: rgba(255, 255, 255, .08);
            color: rgba(255, 255, 255, .8);
            border: 1.5px solid rgba(255, 255, 255, .15);
            padding: 15px 26px;
            border-radius: var(--r);
            font-size: .95rem;
            font-weight: 600;
            cursor: pointer;
            transition: border-color .2s, color .2s, background .2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-wh:hover {
            border-color: rgba(255, 255, 255, .4);
            color: #fff;
            background: rgba(255, 255, 255, .12)
        }

        /* ── FOOTER ── */
        footer {
            padding: 64px 48px 40px;
            background: var(--ivory);
            border-top: 1px solid var(--border)
        }

        .footer-inner {
            max-width: var(--max);
            margin: 0 auto
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2.2fr 1fr 1fr 1fr;
            gap: 56px;
            margin-bottom: 52px
        }

        .foot-logo {
            margin-bottom: 18px;
            line-height: 0;
            display: inline-block
        }

        .foot-logo img {
            height: 46px;
            width: auto;
            display: block;
            filter: brightness(0)
        }

        .foot-about {
            font-size: .83rem;
            color: var(--text-3);
            line-height: 1.68;
            max-width: 260px
        }

        .foot-contact {
            margin-top: 18px
        }

        .foot-addr {
            font-size: .78rem;
            color: var(--text-3);
            margin-bottom: 4px
        }

        .foot-phone {
            font-size: .83rem;
            color: var(--amber);
            font-weight: 700
        }

        .foot-col-title {
            font-size: .68rem;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--text-2);
            margin-bottom: 18px
        }

        .foot-links {
            display: flex;
            flex-direction: column;
            gap: 11px
        }

        .foot-links a {
            font-size: .83rem;
            color: var(--text-3);
            transition: color .2s
        }

        .foot-links a:hover {
            color: var(--amber)
        }

        .foot-bottom {
            border-top: 1px solid var(--border);
            padding-top: 26px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px
        }

        .foot-copy {
            font-size: .77rem;
            color: var(--text-3)
        }

        .foot-socials {
            display: flex;
            gap: 8px
        }

        .soc-btn {
            width: 34px;
            height: 34px;
            border-radius: 8px;
            border: 1.5px solid var(--border2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-3);
            font-size: .72rem;
            font-weight: 700;
            transition: border-color .2s, color .2s, background .2s;
        }

        .soc-btn:hover {
            border-color: var(--amber);
            color: var(--amber);
            background: var(--amber-10)
        }

        /* ── PREMIUM POPUP MODAL ── */
        .modal-bg {
            position: fixed;
            inset: 0;
            z-index: 1000;
            background: rgba(15, 13, 11, .62);
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            opacity: 0;
            pointer-events: none;
            transition: opacity .25s ease;
            overflow-y: auto;
        }

        .modal-bg.open {
            opacity: 1;
            pointer-events: all
        }

        .modal {
            position: relative;
            width: 100%;
            max-width: 880px;
            background: #fff;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 40px 120px rgba(0, 0, 0, .28), 0 0 0 1px rgba(245, 158, 11, .12);
            display: grid;
            grid-template-columns: 340px 1fr;
            transform: scale(.96) translateY(18px);
            opacity: .85;
            transition: transform .32s cubic-bezier(.2, .8, .2, 1), opacity .32s ease;
            margin: auto;
            will-change: transform, opacity;
        }

        .modal-bg.open .modal {
            transform: scale(1) translateY(0);
            opacity: 1
        }

        .modal-brand {
            background: linear-gradient(155deg, #1c1916 0%, #2a1f17 55%, #3a2510 100%);
            color: #fff;
            padding: 36px 30px;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 22px;
        }

        .modal-brand::before {
            content: '';
            position: absolute;
            top: -80px;
            right: -60px;
            width: 260px;
            height: 260px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(245, 158, 11, .32) 0%, transparent 65%);
            filter: blur(34px);
            pointer-events: none;
        }

        .modal-brand::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -60px;
            width: 260px;
            height: 260px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(220, 38, 38, .18) 0%, transparent 65%);
            filter: blur(40px);
            pointer-events: none;
        }

        .mb-eyebrow {
            position: relative;
            z-index: 2;
            font-size: .6rem;
            font-weight: 800;
            letter-spacing: .22em;
            text-transform: uppercase;
            color: var(--amber);
            display: inline-flex;
            align-items: center;
            gap: 10px
        }

        .mb-eyebrow::before {
            content: '';
            width: 24px;
            height: 1px;
            background: rgba(245, 158, 11, .6)
        }

        .mb-h {
            position: relative;
            z-index: 2;
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.05rem;
            font-weight: 500;
            line-height: 1.08;
            letter-spacing: -.02em;
            color: #fff
        }

        .mb-h em {
            font-style: italic;
            color: var(--amber);
            font-weight: 500
        }

        .mb-list {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            gap: 11px;
            margin-top: 8px
        }

        .mb-li {
            display: flex;
            gap: 11px;
            align-items: flex-start;
            font-size: .83rem;
            color: rgba(255, 255, 255, .85);
            line-height: 1.45
        }

        .mb-li svg {
            flex: 0 0 16px;
            width: 16px;
            height: 16px;
            color: var(--amber);
            margin-top: 2px
        }

        .mb-foot {
            position: relative;
            z-index: 2;
            padding-top: 18px;
            border-top: 1px solid rgba(255, 255, 255, .1);
            font-family: 'JetBrains Mono', ui-monospace, monospace;
            font-size: .65rem;
            letter-spacing: .08em;
            color: rgba(255, 255, 255, .5);
            text-transform: uppercase
        }

        .mb-foot strong {
            color: var(--amber);
            font-weight: 600
        }

        .modal-form-pane {
            padding: 34px 36px 32px;
            position: relative;
            background: #fff
        }

        .modal-x {
            position: absolute;
            top: 14px;
            right: 14px;
            z-index: 5;
            background: rgba(28, 25, 22, .06);
            border: 1px solid rgba(28, 25, 22, .08);
            color: var(--text-2);
            width: 34px;
            height: 34px;
            border-radius: 9px;
            cursor: pointer;
            font-size: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background .18s, color .18s, transform .18s;
        }

        .modal-x:hover {
            background: #1c1916;
            color: #fff;
            transform: rotate(90deg)
        }

        .m-tag {
            font-size: .6rem;
            font-weight: 800;
            color: var(--amber);
            letter-spacing: .22em;
            text-transform: uppercase;
            margin-bottom: 10px;
            display: inline-flex;
            align-items: center;
            gap: 10px
        }

        .m-tag::before {
            content: '';
            width: 24px;
            height: 1px;
            background: rgba(245, 158, 11, .55)
        }

        .m-h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.7rem;
            font-weight: 500;
            letter-spacing: -.018em;
            line-height: 1.1;
            margin-bottom: 6px;
            color: var(--text)
        }

        .m-h2 em {
            font-style: italic;
            color: var(--amber);
            font-weight: 500
        }

        .m-sub {
            font-size: .84rem;
            color: var(--text-2);
            margin-bottom: 20px;
            line-height: 1.55
        }

        .f-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 11px
        }

        .f-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
            margin-bottom: 11px
        }

        .f-group label {
            font-size: .65rem;
            font-weight: 700;
            color: var(--text-2);
            letter-spacing: .08em;
            text-transform: uppercase
        }

        .f-group input,
        .f-group select,
        .f-group textarea {
            background: #faf8f4;
            border: 1.5px solid rgba(28, 25, 22, .1);
            color: var(--text);
            border-radius: 9px;
            padding: 10px 13px;
            font-size: .88rem;
            font-family: inherit;
            outline: none;
            transition: border-color .18s, background .18s, box-shadow .18s;
        }

        .f-group input:hover,
        .f-group select:hover,
        .f-group textarea:hover {
            border-color: rgba(28, 25, 22, .2)
        }

        .f-group input:focus,
        .f-group select:focus,
        .f-group textarea:focus {
            border-color: var(--amber);
            background: #fff;
            box-shadow: 0 0 0 3px rgba(245, 158, 11, .15)
        }

        .f-group textarea {
            min-height: 64px;
            resize: vertical;
            line-height: 1.5
        }

        .f-honey {
            position: absolute !important;
            left: -9999px !important;
            height: 0 !important;
            width: 0 !important;
            opacity: 0 !important;
            pointer-events: none
        }

        .f-submit {
            width: 100%;
            background: linear-gradient(135deg, #F59E0B 0%, #d97706 100%);
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 13px 16px;
            font-size: .92rem;
            font-weight: 700;
            letter-spacing: .01em;
            cursor: pointer;
            transition: transform .18s, box-shadow .18s, filter .18s;
            margin-top: 4px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            box-shadow: 0 6px 18px rgba(245, 158, 11, .32);
        }

        .f-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 28px rgba(245, 158, 11, .42);
            filter: brightness(1.04)
        }

        .f-submit:disabled {
            opacity: .7;
            cursor: wait;
            transform: none
        }

        .f-submit .spin {
            display: none;
            width: 16px;
            height: 16px;
            border: 2px solid rgba(255, 255, 255, .3);
            border-top-color: #fff;
            border-radius: 50%;
            animation: fspin .7s linear infinite
        }

        .f-submit.loading .spin {
            display: inline-block
        }

        .f-submit.loading .label,
        .f-submit.loading .arr {
            display: none
        }

        @keyframes fspin {
            to {
                transform: rotate(360deg)
            }
        }

        .f-foot {
            font-size: .72rem;
            color: var(--text-3);
            text-align: center;
            margin-top: 12px;
            line-height: 1.5
        }

        .f-foot a {
            color: var(--amber);
            font-weight: 700
        }

        .f-err {
            display: none;
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #b91c1c;
            padding: 9px 12px;
            border-radius: 8px;
            font-size: .78rem;
            margin-bottom: 12px;
            line-height: 1.4
        }

        .f-err.show {
            display: block
        }

        .f-success {
            text-align: center;
            padding: 36px 24px;
            display: none;
            animation: fsucc .4s ease
        }

        .f-success.show {
            display: block
        }

        @keyframes fsucc {
            from {
                opacity: 0;
                transform: translateY(10px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        .f-success-check {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: linear-gradient(135deg, #10b981, #059669);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 18px;
            color: #fff;
            box-shadow: 0 10px 28px rgba(16, 185, 129, .35)
        }

        .f-success-check svg {
            width: 32px;
            height: 32px
        }

        .f-success h3 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.7rem;
            font-weight: 500;
            letter-spacing: -.02em;
            color: var(--text);
            margin-bottom: 8px
        }

        .f-success h3 em {
            font-style: italic;
            color: var(--amber)
        }

        .f-success p {
            font-size: .88rem;
            color: var(--text-2);
            line-height: 1.6;
            margin-bottom: 14px
        }

        .f-success-meta {
            display: inline-flex;
            gap: 14px;
            flex-wrap: wrap;
            justify-content: center;
            font-family: 'JetBrains Mono', ui-monospace, monospace;
            font-size: .7rem;
            letter-spacing: .06em;
            color: var(--text-3);
            text-transform: uppercase;
            margin-top: 6px
        }

        .f-success-meta strong {
            color: var(--amber);
            font-weight: 600
        }

        .f-fields.hide {
            display: none
        }

        @media(max-width:760px) {
            .modal {
                grid-template-columns: 1fr;
                max-width: 480px;
                border-radius: 18px
            }

            .modal-brand {
                padding: 24px 24px 22px
            }

            .modal-brand::before {
                top: -60px;
                right: -40px;
                width: 180px;
                height: 180px
            }

            .mb-h {
                font-size: 1.55rem
            }

            .mb-list {
                gap: 8px
            }

            .mb-li {
                font-size: .78rem
            }

            .mb-foot {
                padding-top: 12px
            }

            .modal-form-pane {
                padding: 26px 22px 24px
            }

            .m-h2 {
                font-size: 1.4rem
            }

            .f-row {
                grid-template-columns: 1fr
            }
        }

        @media(max-width:420px) {
            .modal-bg {
                padding: 0;
                align-items: flex-end
            }

            .modal {
                border-radius: 18px 18px 0 0;
                max-height: 96vh;
                overflow-y: auto
            }
        }

        /* ── REVEAL ── */
        .reveal {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity .6s ease, transform .6s ease
        }

        .reveal.in {
            opacity: 1;
            transform: translateY(0)
        }

        .d1 {
            transition-delay: .07s
        }

        .d2 {
            transition-delay: .14s
        }

        .d3 {
            transition-delay: .21s
        }

        .d4 {
            transition-delay: .28s
        }

        .d5 {
            transition-delay: .35s
        }

        .d6 {
            transition-delay: .42s
        }

        /* ── RESPONSIVE ── */
        @media(max-width:1024px) {
            .hero-inner {
                grid-template-columns: 1fr;
                gap: 40px;
                padding: 120px 28px 60px
            }

            .hero-curtain-area {
                display: none
            }

            .stats-inner {
                grid-template-columns: repeat(3, 1fr)
            }

            .stat-cell:nth-child(4) {
                border-top: 1px solid rgba(255, 255, 255, .06)
            }

            .svc-grid {
                grid-template-columns: repeat(2, 1fr)
            }

            .steps-wrap {
                grid-template-columns: repeat(2, 1fr);
                gap: 28px
            }

            .steps-wrap::before {
                display: none
            }

            .step-detail {
                grid-template-columns: 1fr;
                gap: 28px;
                padding: 36px
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 36px
            }

            .reviews-grid {
                grid-template-columns: repeat(2, 1fr)
            }
        }

        @media(max-width:768px) {
            #nav {
                padding: 0 20px
            }

            .nav-links {
                display: none
            }

            .hero-inner {
                padding: 100px 20px 56px
            }

            .hero-h1 {
                font-size: 2.4rem
            }

            .hero-platform-line {
                font-size: 2rem
            }

            .stats-inner {
                grid-template-columns: repeat(2, 1fr)
            }

            .stat-cell {
                padding: 30px 20px
            }

            .stat-num {
                font-size: 2rem
            }

            .clients-section,
            .services-section,
            .approach-section,
            .industries-section,
            .reviews-section,
            .cta-section {
                padding: 60px 20px
            }

            .svc-grid {
                grid-template-columns: 1fr
            }

            .steps-wrap {
                grid-template-columns: 1fr
            }

            .sd-items {
                grid-template-columns: 1fr
            }

            .ind-grid {
                grid-template-columns: repeat(2, 1fr)
            }

            .reviews-grid {
                grid-template-columns: 1fr
            }

            .footer-grid {
                grid-template-columns: 1fr;
                gap: 28px
            }

            footer {
                padding: 48px 20px 32px
            }

            .f-row {
                grid-template-columns: 1fr
            }
        }

        /* ────────────────────── VARIANTS PICKER (shared) ────────────────────── */
        .variants-banner {
            background: #1c1916;
            color: #fff;
            padding: 18px 24px;
            text-align: center;
            font-size: .74rem;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            border-top: 1px solid rgba(255, 255, 255, .08);
            border-bottom: 1px solid rgba(255, 255, 255, .08);
        }

        .variants-banner .accent {
            color: var(--amber)
        }

        .variant-tag {
            position: absolute;
            top: 18px;
            left: 18px;
            z-index: 6;
            font-size: .6rem;
            font-weight: 800;
            letter-spacing: .18em;
            text-transform: uppercase;
            background: rgba(0, 0, 0, .65);
            color: #fff;
            padding: 7px 14px;
            border-radius: 100px;
            border: 1px solid rgba(255, 255, 255, .18);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }

        /* ───────────── STATS VARIANTS (4) ───────────── */
        .variant {
            position: relative;
            overflow: hidden
        }

        .v-stat-row {
            position: relative;
            z-index: 2;
            max-width: var(--max);
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            padding: 64px 32px;
        }

        .v-stat-cell {
            padding: 24px 16px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 14px;
            position: relative;
        }

        .v-icon {
            width: 38px;
            height: 38px;
            color: var(--amber);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .v-icon svg {
            width: 100%;
            height: 100%;
            display: block
        }

        .v-num {
            font-size: 2.4rem;
            font-weight: 900;
            letter-spacing: -.04em;
            font-variant-numeric: tabular-nums;
            line-height: 1;
        }

        .v-label {
            font-size: .7rem;
            letter-spacing: .12em;
            text-transform: uppercase;
            font-weight: 700;
            line-height: 1.5;
        }

        /* V1 Aurora Mesh */
        .variant.v1 {
            background: linear-gradient(180deg, #fdfaf3 0%, #f6efde 100%);
            padding: 130px 48px 70px;
        }

        .v1-head {
            position: relative;
            z-index: 2;
            max-width: 1100px;
            margin: 0 auto 70px;
            text-align: center;
        }

        .v1-eyebrow {
            font-family: 'Inter', sans-serif;
            font-size: .7rem;
            font-weight: 800;
            letter-spacing: .28em;
            text-transform: uppercase;
            color: var(--amber);
            display: inline-flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 26px;
        }

        .v1-eyebrow::before,
        .v1-eyebrow::after {
            content: '';
            width: 34px;
            height: 1px;
            background: rgba(245, 158, 11, .6);
        }

        .v1-title {
            font-family: 'Cormorant Garamond', ui-serif, 'Iowan Old Style', Georgia, serif;
            font-size: clamp(2.2rem, 4.6vw, 4.4rem);
            font-weight: 500;
            letter-spacing: -.025em;
            line-height: 1.06;
            color: var(--text);
            max-width: 980px;
            margin: 0 auto;
        }

        .v1-title em {
            font-style: italic;
            color: var(--amber);
            font-weight: 500
        }

        .variant.v1 .v-stat-row {
            padding: 32px 32px 0
        }

        .variant.v1 .v-blob3,
        .variant.v1::before,
        .variant.v1::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            filter: blur(95px);
            opacity: .55;
            z-index: 0;
            pointer-events: none;
        }

        .variant.v1::before {
            width: 520px;
            height: 520px;
            background: radial-gradient(circle, #f59e0b 0%, transparent 65%);
            top: -180px;
            left: -100px;
            animation: auroraDrift1 22s ease-in-out infinite alternate;
        }

        .variant.v1::after {
            width: 480px;
            height: 480px;
            background: radial-gradient(circle, #fb7185 0%, transparent 65%);
            bottom: -200px;
            right: -80px;
            animation: auroraDrift2 28s ease-in-out infinite alternate;
        }

        .variant.v1 .v-blob3 {
            width: 440px;
            height: 440px;
            background: radial-gradient(circle, #a78bfa 0%, transparent 65%);
            top: 30%;
            left: 42%;
            opacity: .4;
            animation: auroraDrift3 26s ease-in-out infinite alternate;
        }

        @keyframes auroraDrift1 {
            0% {
                transform: translate(0, 0)
            }

            100% {
                transform: translate(120px, 80px)
            }
        }

        @keyframes auroraDrift2 {
            0% {
                transform: translate(0, 0)
            }

            100% {
                transform: translate(-90px, -60px)
            }
        }

        @keyframes auroraDrift3 {
            0% {
                transform: translate(0, 0)
            }

            100% {
                transform: translate(-100px, 40px)
            }
        }

        .variant.v1 .v-stat-cell {
            background: rgba(255, 255, 255, .5);
            border-right: 1px solid rgba(28, 25, 22, .06);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
        }

        .variant.v1 .v-stat-cell:last-child {
            border-right: none
        }

        .variant.v1 .v-num {
            background: linear-gradient(135deg, #1c1916 0%, #d97706 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .variant.v1 .v-label {
            color: var(--text-2)
        }

        /* V2 Liquid Blobs */
        .variant.v2 {
            background: #0e0b09
        }

        .variant.v2 .v-blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(110px);
            opacity: .55;
            z-index: 0;
            pointer-events: none;
        }

        .variant.v2 .v-blob.b1 {
            width: 540px;
            height: 540px;
            background: #f59e0b;
            top: -160px;
            left: 8%;
            animation: liquidDrift1 24s ease-in-out infinite alternate;
        }

        .variant.v2 .v-blob.b2 {
            width: 460px;
            height: 460px;
            background: #dc2626;
            bottom: -180px;
            left: 35%;
            animation: liquidDrift2 30s ease-in-out infinite alternate;
        }

        .variant.v2 .v-blob.b3 {
            width: 500px;
            height: 500px;
            background: #f97316;
            top: 20%;
            right: -120px;
            animation: liquidDrift3 26s ease-in-out infinite alternate;
        }

        @keyframes liquidDrift1 {
            0% {
                transform: translate(0, 0)
            }

            100% {
                transform: translate(60px, 80px)
            }
        }

        @keyframes liquidDrift2 {
            0% {
                transform: translate(0, 0)
            }

            100% {
                transform: translate(-100px, -70px)
            }
        }

        @keyframes liquidDrift3 {
            0% {
                transform: translate(0, 0)
            }

            100% {
                transform: translate(-50px, 50px)
            }
        }

        .variant.v2 .v-stat-cell {
            border-right: 1px solid rgba(255, 255, 255, .08)
        }

        .variant.v2 .v-stat-cell:last-child {
            border-right: none
        }

        .variant.v2 .v-num {
            background: linear-gradient(135deg, #fff 0%, #f59e0b 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .variant.v2 .v-label {
            color: rgba(255, 255, 255, .55)
        }

        /* V3 Spotlight Grid */
        .variant.v3 {
            background: #15110d;
            --mx: 50%;
            --my: 50%
        }

        .variant.v3::before {
            content: '';
            position: absolute;
            inset: 0;
            z-index: 0;
            pointer-events: none;
            background-image:
                linear-gradient(rgba(245, 158, 11, .08) 1px, transparent 1px),
                linear-gradient(90deg, rgba(245, 158, 11, .08) 1px, transparent 1px);
            background-size: 48px 48px;
            animation: gridShift 40s linear infinite;
        }

        .variant.v3::after {
            content: '';
            position: absolute;
            inset: 0;
            z-index: 1;
            pointer-events: none;
            background: radial-gradient(640px circle at var(--mx) var(--my),
                    rgba(245, 158, 11, .18) 0%, transparent 60%);
        }

        @keyframes gridShift {
            from {
                background-position: 0 0, 0 0
            }

            to {
                background-position: 48px 48px, 48px 48px
            }
        }

        .variant.v3 .v-stat-cell {
            transition: background .25s
        }

        .variant.v3 .v-stat-cell:hover {
            background: rgba(245, 158, 11, .05)
        }

        .variant.v3 .v-icon {
            width: 54px;
            height: 54px;
            background: rgba(245, 158, 11, .08);
            border: 1px solid rgba(245, 158, 11, .22);
            border-radius: 12px;
            padding: 13px;
            box-sizing: border-box;
        }

        .variant.v3 .v-num {
            color: #fff
        }

        .variant.v3 .v-label {
            color: rgba(255, 255, 255, .55)
        }

        /* V4 Scrollytelling */
        .variant.v4 {
            background: #0a0807
        }

        .v4-track {
            height: 400vh;
            position: relative
        }

        .v4-sticky {
            position: sticky;
            top: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: #0a0807;
        }

        .v4-sticky::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at var(--gx, 30%) var(--gy, 40%),
                    var(--gc1, rgba(245, 158, 11, .25)) 0%, transparent 55%);
            transition: background 1s ease;
            pointer-events: none;
        }

        .v4-display {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 760px;
            padding: 0 32px;
            color: #fff;
        }

        .v4-eyebrow {
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--amber);
            margin-bottom: 18px;
        }

        .v4-num {
            font-size: clamp(5rem, 12vw, 10rem);
            font-weight: 900;
            letter-spacing: -.05em;
            line-height: 1;
            margin-bottom: 18px;
            background: linear-gradient(135deg, #fff 0%, var(--amber) 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            font-variant-numeric: tabular-nums;
        }

        .v4-label {
            font-size: 1.4rem;
            font-weight: 800;
            letter-spacing: -.02em;
            color: #fff;
            margin-bottom: 16px
        }

        .v4-desc {
            font-size: .95rem;
            line-height: 1.7;
            color: rgba(255, 255, 255, .6);
            max-width: 540px;
            margin: 0 auto
        }

        .v4-progress {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 36px;
            z-index: 3;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .v4-dot {
            width: 34px;
            height: 3px;
            border-radius: 2px;
            background: rgba(255, 255, 255, .15);
            transition: background .35s
        }

        .v4-dot.on {
            background: var(--amber)
        }

        .v4-blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(110px);
            opacity: .45;
            pointer-events: none
        }

        .v4-blob.bA {
            width: 520px;
            height: 520px;
            background: var(--amber);
            top: -150px;
            left: -100px;
            animation: v4Drift1 18s ease-in-out infinite alternate;
        }

        .v4-blob.bB {
            width: 480px;
            height: 480px;
            background: #dc2626;
            bottom: -180px;
            right: -100px;
            animation: v4Drift2 22s ease-in-out infinite alternate;
        }

        @keyframes v4Drift1 {
            0% {
                transform: translate(0, 0)
            }

            100% {
                transform: translate(80px, 60px)
            }
        }

        @keyframes v4Drift2 {
            0% {
                transform: translate(0, 0)
            }

            100% {
                transform: translate(-60px, -50px)
            }
        }

        /* ───────────── SERVICES VARIANTS (3) ───────────── */
        .srv-variant {
            position: relative
        }

        .srv-banner {
            background: #0e0b09;
            color: #fff;
            text-align: center;
            padding: 18px 24px;
            font-size: .74rem;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .srv-banner .accent {
            color: var(--amber)
        }

        /* SV1 Horizontal Cinema */
        .sv1 {
            background: #0a0807
        }

        .sv1-track {
            height: 600vh;
            position: relative
        }

        .sv1-sticky {
            position: sticky;
            top: 0;
            height: 100vh;
            overflow: hidden
        }

        .sv1-rail {
            display: flex;
            height: 100%;
            width: max-content;
            will-change: transform
        }

        .sv1-card {
            flex: 0 0 100vw;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 120px 8vw 100px;
            color: #fff;
            position: relative;
            background: radial-gradient(circle at 25% 50%, var(--accent, #f59e0b) 0%, transparent 55%), #0a0807;
        }

        .sv1-card-inner {
            max-width: 920px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .sv1-n {
            font-size: .72rem;
            font-weight: 800;
            color: var(--amber);
            letter-spacing: .2em;
            text-transform: uppercase;
            margin-bottom: 24px;
        }

        .sv1-icon {
            width: 82px;
            height: 82px;
            border-radius: 18px;
            background: rgba(255, 255, 255, .06);
            border: 1px solid rgba(255, 255, 255, .12);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.4rem;
            margin-bottom: 28px;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .sv1-title {
            font-size: clamp(2.4rem, 4.5vw, 4rem);
            font-weight: 900;
            letter-spacing: -.04em;
            line-height: 1.05;
            color: #fff;
            margin-bottom: 24px;
        }

        .sv1-desc {
            font-size: 1.05rem;
            line-height: 1.7;
            color: rgba(255, 255, 255, .7);
            margin-bottom: 28px;
            max-width: 480px
        }

        .sv1-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px
        }

        .sv1-tags span {
            font-size: .7rem;
            font-weight: 600;
            letter-spacing: .06em;
            padding: 7px 14px;
            border-radius: 100px;
            background: rgba(255, 255, 255, .06);
            border: 1px solid rgba(255, 255, 255, .12);
            color: rgba(255, 255, 255, .85);
        }

        .sv1-side {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 18px;
        }

        .sv1-bigicon {
            font-size: clamp(8rem, 16vw, 16rem);
            filter: drop-shadow(0 30px 60px rgba(0, 0, 0, .5));
            animation: sv1Float 6s ease-in-out infinite alternate;
        }

        @keyframes sv1Float {
            0% {
                transform: translateY(0)
            }

            100% {
                transform: translateY(-20px)
            }
        }

        .sv1-progress {
            position: absolute;
            left: 50%;
            bottom: 32px;
            transform: translateX(-50%);
            z-index: 3;
            width: min(60%, 500px);
            height: 3px;
            background: rgba(255, 255, 255, .1);
            border-radius: 2px;
            overflow: hidden;
        }

        .sv1-progress-bar {
            height: 100%;
            background: var(--amber);
            width: 100%;
            transform-origin: left;
            transform: scaleX(0);
            transition: transform .1s linear;
        }

        .sv1-counter {
            position: absolute;
            top: 32px;
            right: 32px;
            z-index: 3;
            font-size: .7rem;
            font-weight: 800;
            letter-spacing: .18em;
            color: rgba(255, 255, 255, .6);
        }

        .sv1-counter span {
            color: var(--amber);
            font-size: .95rem
        }

        /* SV2 Sticky Index + Feature */
        .sv2 {
            background: #fdfaf3
        }

        .sv2-track {
            height: 500vh;
            position: relative
        }

        .sv2-sticky {
            position: sticky;
            top: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            background: #fdfaf3
        }

        .sv2-grid {
            max-width: var(--max);
            margin: 0 auto;
            width: 100%;
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 64px;
            padding: 0 48px;
            align-items: center;
        }

        .sv2-side-eyebrow {
            font-size: .65rem;
            font-weight: 800;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--amber);
            margin-bottom: 24px;
        }

        .sv2-side-h {
            font-size: 1.6rem;
            font-weight: 900;
            letter-spacing: -.03em;
            color: var(--text);
            margin-bottom: 32px;
            line-height: 1.15;
        }

        .sv2-index {
            display: flex;
            flex-direction: column;
            gap: 4px
        }

        .sv2-idx-item {
            padding: 14px 18px;
            border-radius: 10px;
            font-size: .95rem;
            font-weight: 700;
            color: var(--text-3);
            cursor: pointer;
            transition: all .4s ease;
            border-left: 2px solid transparent;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .sv2-idx-item .sv2-idx-n {
            font-size: .62rem;
            font-weight: 800;
            letter-spacing: .14em;
            color: var(--text-3);
            transition: color .4s;
        }

        .sv2-idx-item.on {
            background: rgba(245, 158, 11, .07);
            color: var(--text);
            border-left-color: var(--amber);
            padding-left: 22px;
        }

        .sv2-idx-item.on .sv2-idx-n {
            color: var(--amber)
        }

        .sv2-panel {
            position: relative;
            min-height: 500px
        }

        .sv2-feature {
            position: absolute;
            inset: 0;
            opacity: 0;
            transform: translateY(24px);
            pointer-events: none;
            transition: opacity .55s ease, transform .55s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 18px;
        }

        .sv2-feature.on {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto
        }

        .sv2-fea-icon {
            width: 88px;
            height: 88px;
            border-radius: 20px;
            background: linear-gradient(135deg, var(--amber) 0%, #fb7185 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.6rem;
            margin-bottom: 8px;
            box-shadow: 0 20px 50px -16px rgba(245, 158, 11, .5);
        }

        .sv2-fea-eyebrow {
            font-size: .65rem;
            font-weight: 800;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--amber);
        }

        .sv2-fea-title {
            font-size: clamp(2rem, 3.6vw, 3.2rem);
            font-weight: 900;
            letter-spacing: -.035em;
            line-height: 1.1;
            color: var(--text);
        }

        .sv2-fea-desc {
            font-size: 1.05rem;
            line-height: 1.75;
            color: var(--text-2);
            max-width: 540px;
        }

        .sv2-fea-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 10px
        }

        .sv2-fea-tags span {
            font-size: .7rem;
            font-weight: 600;
            letter-spacing: .04em;
            padding: 7px 14px;
            border-radius: 100px;
            background: #fff;
            border: 1px solid var(--border2);
            color: var(--text-2);
        }

        /* SV3 Apple-Stack */
        .sv3 {
            background: #0a0807
        }

        .sv3-track {
            height: 600vh;
            position: relative
        }

        .sv3-sticky {
            position: sticky;
            top: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            perspective: 1400px;
        }

        .sv3-sticky::before {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 50% 50%, rgba(245, 158, 11, .15) 0%, transparent 50%);
        }

        .sv3-stage {
            position: relative;
            width: min(820px, 92%);
            height: 540px
        }

        .sv3-card {
            position: absolute;
            inset: 0;
            border-radius: 28px;
            padding: 56px;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 18px;
            border: 1px solid rgba(255, 255, 255, .08);
            box-shadow: 0 40px 100px -20px rgba(0, 0, 0, .7), inset 0 1px 0 rgba(255, 255, 255, .08);
            background: linear-gradient(135deg, var(--accent, #f59e0b) 0%, rgba(20, 15, 12, .95) 100%);
            transform: translateY(120%) scale(.9);
            opacity: 0;
            transition: opacity .7s cubic-bezier(.4, 0, .2, 1), transform .7s cubic-bezier(.4, 0, .2, 1);
            will-change: transform, opacity;
        }

        .sv3-card.on {
            opacity: 1;
            transform: translateY(0) scale(1)
        }

        .sv3-card.past {
            opacity: 0;
            transform: translateY(-110%) scale(.94)
        }

        .sv3-n {
            font-size: .72rem;
            font-weight: 800;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .7);
        }

        .sv3-icon {
            width: 74px;
            height: 74px;
            border-radius: 18px;
            background: rgba(255, 255, 255, .12);
            border: 1px solid rgba(255, 255, 255, .18);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .sv3-title {
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 900;
            letter-spacing: -.04em;
            line-height: 1.05;
            color: #fff;
        }

        .sv3-desc {
            font-size: 1.05rem;
            line-height: 1.7;
            color: rgba(255, 255, 255, .85);
            max-width: 560px
        }

        .sv3-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 10px
        }

        .sv3-tags span {
            font-size: .68rem;
            font-weight: 600;
            letter-spacing: .05em;
            padding: 7px 14px;
            border-radius: 100px;
            background: rgba(255, 255, 255, .14);
            border: 1px solid rgba(255, 255, 255, .18);
            color: #fff;
        }

        .sv3-counter {
            position: absolute;
            top: 24px;
            right: 24px;
            font-size: .62rem;
            font-weight: 800;
            letter-spacing: .18em;
            color: rgba(255, 255, 255, .55);
        }

        .sv3-progress {
            position: absolute;
            left: 50%;
            bottom: 48px;
            transform: translateX(-50%);
            z-index: 5;
            display: flex;
            gap: 8px;
        }

        .sv3-progress .d {
            width: 28px;
            height: 3px;
            border-radius: 2px;
            background: rgba(255, 255, 255, .18);
            transition: background .4s;
        }

        .sv3-progress .d.on {
            background: var(--amber)
        }

        @media(max-width:1024px) {
            .v-stat-row {
                grid-template-columns: repeat(3, 1fr);
                padding: 40px 20px
            }

            .sv2-grid {
                grid-template-columns: 1fr;
                gap: 32px
            }

            .sv1-card-inner {
                grid-template-columns: 1fr;
                gap: 32px;
                text-align: center
            }

            .sv1-side {
                display: none
            }
        }

        @media(max-width:640px) {
            .v-stat-row {
                grid-template-columns: repeat(2, 1fr);
                padding: 32px 16px
            }

            .v-num {
                font-size: 2rem
            }

            .v4-track {
                height: 300vh
            }

            .sv1-track,
            .sv3-track {
                height: 400vh
            }

            .sv2-track {
                height: 400vh
            }
        }

        /* ────────────────────── DARK COMMAND · SERVICES ────────────────────── */
        .dc-services {
            position: relative;
            background: #0D0B08;
            font-family: 'Cormorant Garamond', ui-serif, 'Iowan Old Style', 'Palatino Linotype', Georgia, serif;
        }

        .dc-track {
            position: relative
        }

        .dc-sticky {
            position: relative;
            min-height: 880px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        /* static background photo (no animation = no scroll lag) */
        .dc-bg {
            position: absolute;
            inset: 0;
            z-index: 0;
            overflow: hidden;
            pointer-events: none
        }

        .dc-bg-img {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
        }

        .dc-bg-overlay {
            position: absolute;
            inset: 0;
            pointer-events: none;
            background:
                linear-gradient(90deg, rgba(13, 11, 8, .95) 0%, rgba(13, 11, 8, .82) 26%, rgba(13, 11, 8, .32) 60%, rgba(13, 11, 8, .18) 100%);
        }

        .dc-stage,
        .dc-counter,
        .dc-progress {
            position: relative;
            z-index: 2
        }

        .dc-stage {
            flex: 1;
            display: grid;
            grid-template-columns: 340px 1fr;
            min-height: 0;
        }

        /* SIDEBAR */
        .dc-side {
            background: rgba(16, 14, 10, .92);
            backdrop-filter: blur(2px);
            -webkit-backdrop-filter: blur(2px);
            border-right: 1px solid rgba(240, 120, 32, .10);
            position: relative;
            padding: 80px 36px 60px;
            display: flex;
            flex-direction: column;
        }

        .dc-side::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 3px;
            background: linear-gradient(to bottom,
                    transparent 0%,
                    rgba(240, 120, 32, .4) 25%,
                    rgba(240, 120, 32, .4) 75%,
                    transparent 100%);
            opacity: .45;
        }

        .dc-side-eyebrow {
            font-family: 'Inter', sans-serif;
            font-size: .6rem;
            font-weight: 800;
            letter-spacing: .24em;
            text-transform: uppercase;
            color: #0b85f5;
            margin-bottom: 18px;
        }

        .dc-side-h {
            font-size: 2.2rem;
            font-weight: 500;
            letter-spacing: -.01em;
            line-height: 1.05;
            color: #fff;
            margin-bottom: 36px;
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
        }

        .dc-side-h em {
            font-style: italic;
            /* color: rgba(240, 120, 32, .85); */
            color: #0b85f5;
            font-weight: 500
        }

        .dc-side-rule {
            height: 1px;
            background: rgba(255, 255, 255, .07);
            margin-bottom: 26px;
        }

        .dc-nav {
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 0;
            flex: 1;
        }

        .dc-nav-bar {
            position: absolute;
            left: -36px;
            top: 0;
            width: 3px;
            height: 36px;
            background: #0b85f5;
            border-radius: 2px;
            box-shadow: 0 0 14px rgba(240, 120, 32, .55);
            transition: transform .55s cubic-bezier(.4, 0, .2, 1);
            will-change: transform;
        }

        .dc-nav-item {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 14px 0;
            font-family: 'Inter', sans-serif;
            font-size: 1.05rem;
            font-weight: 500;
            color: rgba(255, 255, 255, .5);
            cursor: pointer;
            transition: color .35s, padding-left .35s;
        }

        .dc-nav-item .dc-nav-n {
            font-size: .6rem;
            font-weight: 800;
            letter-spacing: .18em;
            color: rgba(255, 255, 255, .22);
            transition: color .35s;
            min-width: 18px;
        }

        .dc-nav-item:hover {
            color: rgba(255, 255, 255, .78)
        }

        .dc-nav-item.on {
            color: #fff;
            font-weight: 700;
            padding-left: 6px
        }

        .dc-nav-item.on .dc-nav-n {
            color: #0b85f5
        }

        .dc-side-foot {
            margin-top: 36px;
            padding-top: 24px;
            border-top: 1px solid rgba(255, 255, 255, .06);
            font-family: 'Inter', sans-serif;
            font-size: .7rem;
            color: rgba(255, 255, 255, .4);
            line-height: 1.7;
        }

        .dc-side-foot strong {
            color: #0b85f5;
            font-weight: 700;
            letter-spacing: .12em
        }

        /* MAIN PANEL */
        .dc-main {
            position: relative;
            padding: 80px 72px 60px;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .dc-panel {
            position: absolute;
            inset: 80px 72px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 22px;
            opacity: 0;
            transform: translateY(24px);
            pointer-events: none;
            transition: opacity .65s ease, transform .65s ease;
            will-change: opacity, transform;
        }

        .dc-panel.on {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto
        }

        .dc-panel-eyebrow {
            font-family: 'Inter', sans-serif;
            font-size: .65rem;
            font-weight: 800;
            letter-spacing: .22em;
            text-transform: uppercase;
            color: #0b85f5;
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .dc-panel-eyebrow::before {
            content: '';
            width: 24px;
            height: 1px;
            background: #0b85f5;
            display: block;
        }

        .dc-panel-title {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: clamp(2.6rem, 5.6vw, 5rem);
            font-weight: 500;
            letter-spacing: -.02em;
            line-height: 1.02;
            color: #fff;
        }

        .dc-panel-title em {
            font-style: italic;
            color: #0b85f5;
            font-weight: 500
        }

        .dc-panel-stat {
            display: inline-flex;
            align-items: baseline;
            gap: 14px;
            padding: 14px 22px;
            background: rgba(240, 120, 32, .06);
            border: 1px solid rgba(240, 120, 32, .20);
            border-radius: 8px;
            align-self: flex-start;
        }

        .dc-panel-stat-num {
            font-family: 'Inter', sans-serif;
            font-size: 2.4rem;
            font-weight: 900;
            letter-spacing: -.04em;
            color: #0b85f5;
            line-height: 1;
            font-variant-numeric: tabular-nums;
        }

        .dc-panel-stat-label {
            font-family: 'Inter', sans-serif;
            font-size: .68rem;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .6);
        }

        .dc-panel-desc {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: 1.32rem;
            line-height: 1.55;
            color: rgba(255, 255, 255, .78);
            font-weight: 400;
            font-style: italic;
            max-width: 680px;
        }

        .dc-panel-tabs {
            display: inline-flex;
            flex-wrap: wrap;
            gap: 4px;
            padding: 5px;
            background: rgba(255, 255, 255, .04);
            border: 1px solid rgba(255, 255, 255, .08);
            border-radius: 10px;
            align-self: flex-start;
        }

        .dc-panel-tabs span {
            font-family: 'Inter', sans-serif;
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .06em;
            padding: 8px 14px;
            color: rgba(255, 255, 255, .5);
            border-radius: 6px;
            cursor: pointer;
            user-select: none;
            transition: background .25s, color .25s;
        }

        .dc-panel-tabs span:hover {
            color: rgba(255, 255, 255, .85)
        }

        .dc-panel-tabs span.on {
            background: rgba(240, 120, 32, .18);
            color: #0b85f5;
        }

        .dc-panel-tabinfo {
            margin-top: 14px;
            max-width: 560px;
            font-family: 'Inter', sans-serif;
            font-size: .82rem;
            line-height: 1.62;
            color: rgba(255, 255, 255, .6);
            min-height: 2.6em;
            transition: opacity .2s;
        }

        .dc-panel-tabinfo strong {
            color: rgba(255, 255, 255, .9);
            font-weight: 600
        }

        .dc-panel-cards {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
            max-width: 720px;
        }

        .dc-panel-card {
            padding: 22px 24px;
            background: rgba(255, 255, 255, .035);
            border: 1px solid rgba(255, 255, 255, .08);
            border-radius: 10px;
            transition: background .35s, border-color .35s, transform .35s;
            position: relative;
            overflow: hidden;
        }

        .dc-panel-card::after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #0b85f5;
            transform: scaleY(0);
            transform-origin: top;
            transition: transform .35s ease;
        }

        .dc-panel-card:hover {
            background: rgba(240, 120, 32, .05);
            border-color: rgba(240, 120, 32, .25);
            transform: translateY(-2px);
        }

        .dc-panel-card:hover::after {
            transform: scaleY(1)
        }

        .dc-panel-card-t {
            font-family: 'Inter', sans-serif;
            font-size: .68rem;
            font-weight: 800;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: #0b85f5;
            margin-bottom: 10px;
        }

        .dc-panel-card-d {
            font-family: 'Inter', sans-serif;
            font-size: .84rem;
            line-height: 1.65;
            color: rgba(255, 255, 255, .7);
        }

        /* progress + meta */
        .dc-progress {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 2px;
            background: rgba(255, 255, 255, .06);
            z-index: 5;
        }

        .dc-progress::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            background: #0b85f5;
            width: var(--p, 0%);
            transition: width .25s linear;
            box-shadow: 0 0 12px rgba(240, 120, 32, .5);
        }

        .dc-counter {
            position: absolute;
            top: 32px;
            right: 36px;
            z-index: 4;
            font-family: 'Inter', sans-serif;
            font-size: .62rem;
            font-weight: 800;
            letter-spacing: .22em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .45);
        }

        .dc-counter span {
            color: #0b85f5
        }

        @media(max-width:1024px) {
            .dc-stage {
                grid-template-columns: 1fr;
                grid-template-rows: auto 1fr
            }

            .dc-side {
                padding: 28px 24px;
                border-right: none;
                border-bottom: 1px solid rgba(240, 120, 32, .1)
            }

            .dc-side-h {
                font-size: 1.4rem;
                margin-bottom: 18px
            }

            .dc-side-rule,
            .dc-side-foot {
                display: none
            }

            .dc-side::before {
                display: none
            }

            .dc-nav {
                flex-direction: row;
                flex-wrap: wrap;
                gap: 8px
            }

            .dc-nav-bar {
                display: none
            }

            .dc-nav-item {
                padding: 6px 14px;
                background: rgba(255, 255, 255, .04);
                border-radius: 100px;
                font-size: .78rem
            }

            .dc-nav-item.on {
                background: rgba(240, 120, 32, .18);
                color: #0b85f5;
                padding-left: 14px
            }

            .dc-main {
                padding: 32px 24px
            }

            .dc-panel {
                inset: 32px 24px
            }

            .dc-panel-title {
                font-size: 2rem
            }

            .dc-panel-cards {
                grid-template-columns: 1fr
            }
        }

        /* ────────────────────── WHO WE ARE ────────────────────── */
        .who-section {
            position: relative;
            background: linear-gradient(180deg, #faf8f4 0%, #f6efde 100%);
            padding: 160px 48px;
            overflow: hidden;
            contain: layout paint;
        }

        .who-section::before {
            content: '';
            position: absolute;
            top: -150px;
            right: -100px;
            width: 560px;
            height: 560px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(245, 158, 11, .18) 0%, transparent 60%);
            filter: blur(80px);
            animation: whoFloat 16s ease-in-out infinite alternate;
            pointer-events: none;
        }

        .who-section::after {
            content: '';
            position: absolute;
            bottom: -120px;
            left: -80px;
            width: 480px;
            height: 480px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(251, 113, 133, .13) 0%, transparent 60%);
            filter: blur(80px);
            animation: whoFloat 22s ease-in-out infinite alternate;
            pointer-events: none;
        }

        @keyframes whoFloat {
            0% {
                transform: translate(0, 0) scale(1)
            }

            100% {
                transform: translate(-60px, 40px) scale(1.08)
            }
        }

        .who-inner {
            max-width: var(--max);
            margin: 0 auto;
            position: relative;
            z-index: 2
        }

        .who-grid {
            display: grid;
            grid-template-columns: 1.15fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .who-eyebrow {
            font-family: 'Inter', sans-serif;
            font-size: .62rem;
            font-weight: 800;
            letter-spacing: .24em;
            text-transform: uppercase;
            color: var(--amber);
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 24px;
        }

        .who-eyebrow::before {
            content: '';
            width: 28px;
            height: 1px;
            background: var(--amber)
        }

        .who-title {
            font-family: 'Cormorant Garamond', ui-serif, 'Iowan Old Style', Georgia, serif;
            font-size: clamp(2.4rem, 4.4vw, 4rem);
            font-weight: 500;
            letter-spacing: -.022em;
            line-height: 1.05;
            color: var(--text);
            margin-bottom: 24px;
            white-space: nowrap;
        }

        @media(max-width:1180px) {
            .who-title {
                white-space: normal
            }
        }

        .who-title em {
            font-style: italic;
            color: var(--amber);
            font-weight: 500
        }

        .who-lead {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: 1.4rem;
            font-style: italic;
            color: var(--text-2);
            line-height: 1.55;
            max-width: 560px;
            margin-bottom: 20px;
        }

        .who-body {
            font-family: 'Inter', sans-serif;
            font-size: .98rem;
            line-height: 1.75;
            color: var(--text-2);
            max-width: 540px;
            margin-bottom: 36px;
        }

        .who-stats {
            display: flex;
            gap: 42px;
            flex-wrap: wrap
        }

        .who-stat {
            display: flex;
            flex-direction: column;
            gap: 6px
        }

        .who-stat-num {
            font-family: 'Inter', sans-serif;
            font-size: 2.4rem;
            font-weight: 900;
            letter-spacing: -.04em;
            color: var(--amber);
            line-height: 1;
            font-variant-numeric: tabular-nums;
        }

        .who-stat-label {
            font-family: 'Inter', sans-serif;
            font-size: .66rem;
            letter-spacing: .16em;
            text-transform: uppercase;
            font-weight: 700;
            color: var(--text-3);
        }

        .who-logo-panel {
            position: relative;
            background: linear-gradient(135deg, #1c1916 0%, #0e0b09 100%);
            border-radius: 22px;
            padding: 120px 56px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 36px;
            min-height: 580px;
            justify-content: center;
            overflow: hidden;
            box-shadow: 0 30px 80px -30px rgba(0, 0, 0, .45);
            border: 1px solid rgba(255, 255, 255, .05);
            contain: layout paint;
        }

        /* simple static glows, no animation */
        .who-logo-panel::after {
            content: '';
            position: absolute;
            inset: 0;
            pointer-events: none;
            z-index: 1;
            background:
                radial-gradient(circle at 15% 20%, rgba(245, 158, 11, .30) 0%, transparent 45%),
                radial-gradient(circle at 85% 85%, rgba(220, 38, 38, .18) 0%, transparent 45%);
        }

        /* neon grid (static — no bg-position animation, scroll-friendly) */
        .who-logo-panel::before {
            content: '';
            position: absolute;
            inset: 0;
            z-index: 0;
            pointer-events: none;
            background-image:
                linear-gradient(rgba(245, 158, 11, .06) 1px, transparent 1px),
                linear-gradient(90deg, rgba(245, 158, 11, .06) 1px, transparent 1px);
            background-size: 38px 38px;
            mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, #000 30%, transparent 80%);
            -webkit-mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, #000 30%, transparent 80%);
        }

        /* (removed) neon rings, scan line, corner brackets — keeping section simple */
        .who-logo-img {
            position: relative;
            z-index: 3;
            width: min(300px, 72%);
            height: auto;
            display: block;
            filter: drop-shadow(0 0 28px rgba(245, 158, 11, .4));
        }

        .who-logo-tag {
            position: relative;
            z-index: 3;
            font-family: 'Inter', sans-serif;
            font-size: .62rem;
            letter-spacing: .26em;
            text-transform: uppercase;
            font-weight: 700;
            color: rgba(255, 255, 255, .55);
            padding-top: 22px;
            border-top: 1px solid rgba(245, 158, 11, .15);
            width: 80%;
            text-align: center;
        }

        .who-logo-tag span {
            color: var(--amber)
        }

        .who-logo-tag::before {
            content: '';
            display: inline-block;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--amber);
            margin-right: 8px;
            vertical-align: middle;
            box-shadow: 0 0 8px rgba(245, 158, 11, .5);
        }

        @media(max-width:1024px) {
            .who-grid {
                grid-template-columns: 1fr;
                gap: 48px
            }

            .who-section {
                padding: 80px 28px
            }

            .who-logo-panel {
                padding: 60px 36px;
                min-height: 340px
            }
        }

        /* ────────────────────── LIGHT CTA ────────────────────── */
        .cta-light {
            position: relative;
            background: linear-gradient(180deg, #faf8f4 0%, #f6efde 100%);
            padding: 120px 48px;
            overflow: hidden;
        }

        .cta-light::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(245, 158, 11, .18) 0%, transparent 60%);
            filter: blur(80px);
            animation: ctaGlow 18s ease-in-out infinite alternate;
            pointer-events: none;
        }

        .cta-light::after {
            content: '';
            position: absolute;
            bottom: -150px;
            left: -100px;
            width: 520px;
            height: 520px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(251, 113, 133, .14) 0%, transparent 60%);
            filter: blur(80px);
            animation: ctaGlow 22s ease-in-out infinite alternate;
            pointer-events: none;
        }

        @keyframes ctaGlow {
            0% {
                transform: translate(0, 0)
            }

            100% {
                transform: translate(-50px, 40px)
            }
        }

        .cta-light-inner {
            max-width: var(--max);
            margin: 0 auto;
            position: relative;
            z-index: 2
        }

        /* CTA robot — 3D floating mascot (desktop only) */
        .cta-robot-wrap {
            position: absolute;
            left: 51.5%;
            bottom: 0;
            z-index: 3;
            width: clamp(192px, 15.2vw, 222px);
            transform: translateX(-50%) translateZ(0);
            pointer-events: none;
            will-change: transform;
            animation: ctaRobotFloat 5.6s ease-in-out infinite;
        }

        .cta-robot {
            display: block;
            width: 100%;
            height: auto;
            transform: perspective(1100px) rotateY(-7deg) rotateX(1deg);
            transform-origin: center 62%;
            filter: drop-shadow(0 22px 18px rgba(28, 20, 10, .22));
            transition: transform .45s cubic-bezier(.22, .61, .36, 1);
            will-change: transform;
            backface-visibility: hidden;
        }

        @keyframes ctaRobotFloat {

            0%,
            100% {
                transform: translateX(-50%) translateZ(0) translateY(0)
            }

            50% {
                transform: translateX(-50%) translateZ(0) translateY(-12px)
            }
        }

        @media(prefers-reduced-motion:reduce) {
            .cta-robot-wrap {
                animation: none
            }
        }

        .cta-grid {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 72px;
            align-items: center;
        }

        .cta-l-eyebrow {
            font-family: 'Inter', sans-serif;
            font-size: .62rem;
            font-weight: 800;
            letter-spacing: .24em;
            text-transform: uppercase;
            color: var(--amber);
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 22px;
        }

        .cta-l-eyebrow::before {
            content: '';
            width: 28px;
            height: 1px;
            background: var(--amber)
        }

        .cta-l-title {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: clamp(3rem, 6.4vw, 5.6rem);
            font-weight: 500;
            letter-spacing: -.025em;
            line-height: 1;
            color: var(--text);
            margin-bottom: 24px;
        }

        .cta-l-title em {
            font-style: italic;
            color: var(--amber);
            font-weight: 500
        }

        .cta-l-lead {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: 1.35rem;
            font-style: italic;
            color: var(--text-2);
            line-height: 1.55;
            max-width: 540px;
            margin-bottom: 36px;
        }

        .cta-l-actions {
            display: flex;
            gap: 18px;
            align-items: center;
            flex-wrap: wrap
        }

        .cta-l-btn-primary {
            background: var(--text);
            color: #fff;
            border: none;
            padding: 18px 32px;
            border-radius: 10px;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: background .25s, transform .25s, box-shadow .25s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .cta-l-btn-primary:hover {
            background: var(--amber);
            transform: translateY(-2px);
            box-shadow: 0 16px 36px -12px rgba(245, 158, 11, .5);
        }

        .cta-l-btn-secondary {
            font-family: 'Inter', sans-serif;
            font-size: .95rem;
            font-weight: 700;
            color: var(--text-2);
            border-bottom: 1px dashed rgba(28, 25, 22, .3);
            padding-bottom: 3px;
            text-decoration: none;
            transition: color .25s, border-color .25s;
        }

        .cta-l-btn-secondary:hover {
            color: var(--amber);
            border-color: var(--amber)
        }

        .cta-form-card {
            background: rgba(255, 255, 255, .78);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid rgba(28, 25, 22, .06);
            border-radius: 20px;
            padding: 40px 36px;
            box-shadow: 0 1px 0 rgba(0, 0, 0, .02), 0 30px 60px -30px rgba(28, 25, 22, .18);
        }

        .cta-form-eyebrow {
            font-family: 'Inter', sans-serif;
            font-size: .6rem;
            font-weight: 800;
            letter-spacing: .22em;
            text-transform: uppercase;
            color: var(--amber);
            margin-bottom: 22px;
        }

        .cta-form-h {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: 1.5rem;
            font-weight: 600;
            letter-spacing: -.02em;
            color: var(--text);
            margin-bottom: 24px;
            line-height: 1.2;
        }

        .cta-form-h em {
            font-style: italic;
            color: var(--amber);
            font-weight: 600
        }

        .cta-form {
            display: flex;
            flex-direction: column;
            gap: 16px
        }

        .cta-field {
            display: flex;
            flex-direction: column;
            gap: 6px
        }

        .cta-field label {
            font-family: 'Inter', sans-serif;
            font-size: .62rem;
            font-weight: 800;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: var(--text-3);
        }

        .cta-field input,
        .cta-field textarea {
            font-family: 'Inter', sans-serif;
            font-size: .95rem;
            font-weight: 500;
            color: var(--text);
            padding: 13px 16px;
            background: #fff;
            border: 1px solid rgba(28, 25, 22, .1);
            border-radius: 10px;
            outline: none;
            transition: border-color .25s, box-shadow .25s, background .25s;
            resize: none;
        }

        .cta-field textarea {
            min-height: 96px;
            line-height: 1.5
        }

        .cta-field input:focus,
        .cta-field textarea:focus {
            border-color: var(--amber);
            box-shadow: 0 0 0 4px rgba(245, 158, 11, .12);
        }

        .cta-field input::placeholder,
        .cta-field textarea::placeholder {
            color: var(--text-3);
            font-weight: 400
        }

        .cta-form-submit {
            background: var(--text);
            color: #fff;
            border: none;
            padding: 15px 24px;
            border-radius: 10px;
            font-family: 'Inter', sans-serif;
            font-size: .95rem;
            font-weight: 700;
            cursor: pointer;
            transition: background .25s, transform .25s, box-shadow .25s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 6px;
        }

        .cta-form-submit:hover {
            background: var(--amber);
            transform: translateY(-2px);
            box-shadow: 0 16px 36px -12px rgba(245, 158, 11, .5);
        }

        .cta-form-foot {
            margin-top: 14px;
            font-family: 'Inter', sans-serif;
            font-size: .78rem;
            color: var(--text-3);
            text-align: center;
        }

        .cta-form-foot a {
            color: var(--amber);
            font-weight: 700;
            text-decoration: none
        }

        .cta-form-success {
            display: none;
            text-align: center;
            padding: 36px 0;
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
        }

        .cta-form-success.show {
            display: block
        }

        .cta-form-fields.hide {
            display: none
        }

        .cta-form-success .check {
            width: 54px;
            height: 54px;
            border-radius: 50%;
            background: rgba(16, 185, 129, .14);
            color: #10b981;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            margin: 0 auto 16px;
        }

        .cta-form-success-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text);
            margin-bottom: 8px
        }

        .cta-form-success-sub {
            font-family: 'Inter', sans-serif;
            font-size: .88rem;
            color: var(--text-2)
        }

        @media(max-width:1024px) {
            .cta-grid {
                grid-template-columns: 1fr;
                gap: 36px
            }

            .cta-light {
                padding: 80px 28px
            }

            .cta-robot-wrap {
                display: none
            }
        }

        /* ────────────────────── INTRO (below hero) ────────────────────── */
        .intro-section {
            position: relative;
            background: var(--warm-dark);
            padding: 120px 48px;
            text-align: center;
            overflow: hidden;
            border-bottom: 1px solid rgba(255, 255, 255, .06);
        }

        .intro-section::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 1100px;
            height: 520px;
            background: radial-gradient(ellipse 60% 100% at 50% 50%, rgba(245, 158, 11, .18) 0%, transparent 65%);
            filter: blur(60px);
            pointer-events: none;
        }

        .intro-section::after {
            content: '';
            position: absolute;
            bottom: -150px;
            right: -100px;
            width: 480px;
            height: 480px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(251, 113, 133, .12) 0%, transparent 60%);
            filter: blur(80px);
            pointer-events: none;
        }

        .intro-inner {
            max-width: 1100px;
            margin: 0 auto;
            position: relative;
            z-index: 2
        }

        .intro-eyebrow {
            font-family: 'Inter', sans-serif;
            font-size: .7rem;
            font-weight: 800;
            letter-spacing: .28em;
            text-transform: uppercase;
            color: var(--amber);
            display: inline-flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 28px;
        }

        .intro-eyebrow::before,
        .intro-eyebrow::after {
            content: '';
            width: 34px;
            height: 1px;
            background: rgba(245, 158, 11, .6);
        }

        .intro-title {
            font-family: 'Cormorant Garamond', ui-serif, 'Iowan Old Style', Georgia, serif;
            font-size: clamp(2.6rem, 5.6vw, 5.4rem);
            font-weight: 500;
            letter-spacing: -.025em;
            line-height: 1.05;
            color: #fff;
            margin-bottom: 22px;
        }

        .intro-title em {
            font-style: italic;
            color: var(--amber);
            font-weight: 500
        }

        .intro-sub {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: 1.4rem;
            font-style: italic;
            color: rgba(255, 255, 255, .65);
            margin-bottom: 48px;
        }

        .intro-marquee {
            position: relative;
            overflow: hidden;
            border-top: 1px solid rgba(255, 255, 255, .08);
            border-bottom: 1px solid rgba(255, 255, 255, .08);
            padding: 18px 0;
        }

        .intro-marquee-track {
            display: flex;
            width: max-content;
            animation: introMarquee 40s linear infinite;
        }

        .intro-marquee-track>span {
            font-family: 'Inter', sans-serif;
            font-size: .86rem;
            font-weight: 700;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .55);
            display: flex;
            align-items: center;
            gap: 36px;
            padding: 0 22px;
            white-space: nowrap;
        }

        .intro-marquee-track>span::after {
            content: '★';
            color: var(--amber);
            font-size: .8em
        }

        @keyframes introMarquee {
            from {
                transform: translateX(0)
            }

            to {
                transform: translateX(-50%)
            }
        }

        @media(max-width:768px) {
            .intro-section {
                padding: 80px 28px
            }
        }

        /* ────────────────────── INDUSTRIES — VARIANTS BANNER ────────────────────── */
        .ind-pick-banner {
            background: #0a0807;
            color: #fff;
            text-align: center;
            padding: 18px 24px;
            font-size: .74rem;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            border-top: 1px solid rgba(255, 255, 255, .06);
        }

        .ind-pick-banner .accent {
            color: var(--amber)
        }

        .ind-variant-tag {
            position: absolute;
            top: 22px;
            left: 22px;
            z-index: 6;
            font-size: .6rem;
            font-weight: 800;
            letter-spacing: .18em;
            text-transform: uppercase;
            background: rgba(0, 0, 0, .65);
            color: #fff;
            padding: 7px 14px;
            border-radius: 100px;
            border: 1px solid rgba(255, 255, 255, .18);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }

        /* INDUSTRIES — VARIANT B: Editorial List */
        .ind-vb {
            position: relative;
            background: linear-gradient(180deg, #faf8f4 0%, #f4ecd8 100%);
            padding: 120px 48px;
            overflow: hidden;
        }

        .ind-vb::before {
            content: '';
            position: absolute;
            top: -150px;
            left: -120px;
            width: 560px;
            height: 560px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(245, 158, 11, .15) 0%, transparent 60%);
            filter: blur(80px);
            pointer-events: none;
        }

        .ind-vb-inner {
            max-width: var(--max);
            margin: 0 auto;
            position: relative;
            z-index: 2
        }

        .ind-vb-head {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 48px;
            align-items: end;
            margin-bottom: 64px;
        }

        .ind-vb-head .ind-eyebrow {
            color: var(--amber);
            justify-self: start
        }

        .ind-vb-head .ind-eyebrow::before,
        .ind-vb-head .ind-eyebrow::after {
            background: var(--amber)
        }

        .ind-vb-h {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: clamp(2.6rem, 5vw, 4.6rem);
            font-weight: 500;
            letter-spacing: -.025em;
            line-height: 1.02;
            color: var(--text);
        }

        .ind-vb-h em {
            font-style: italic;
            color: var(--amber);
            font-weight: 500
        }

        .ind-vb-sub {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: 1.25rem;
            font-style: italic;
            color: var(--text-2);
            line-height: 1.55;
        }

        .ind-vb-list {
            display: flex;
            flex-direction: column
        }

        .ind-vb-row {
            display: grid;
            grid-template-columns: 80px 1fr 2fr 60px;
            gap: 28px;
            align-items: center;
            padding: 32px 0;
            border-top: 1px solid rgba(28, 25, 22, .1);
            cursor: pointer;
            transition: background .35s, padding .35s;
        }

        .ind-vb-row:last-child {
            border-bottom: 1px solid rgba(28, 25, 22, .1)
        }

        .ind-vb-row:hover {
            background: rgba(245, 158, 11, .05);
            padding-left: 18px;
            padding-right: 18px;
            border-radius: 12px
        }

        .ind-vb-num {
            font-family: 'Inter', sans-serif;
            font-size: .66rem;
            font-weight: 800;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--text-3);
            transition: color .35s;
        }

        .ind-vb-row:hover .ind-vb-num {
            color: var(--amber)
        }

        .ind-vb-name {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: clamp(1.6rem, 2.6vw, 2.4rem);
            font-weight: 500;
            letter-spacing: -.02em;
            color: var(--text);
            line-height: 1.05;
        }

        .ind-vb-name em {
            font-style: italic;
            color: var(--amber)
        }

        .ind-vb-desc {
            font-family: 'Inter', sans-serif;
            font-size: .92rem;
            color: var(--text-2);
            line-height: 1.6;
        }

        .ind-vb-arrow {
            font-size: 1.3rem;
            color: var(--text-3);
            text-align: right;
            transition: color .35s, transform .35s;
        }

        .ind-vb-row:hover .ind-vb-arrow {
            color: var(--amber);
            transform: translateX(6px)
        }

        @media(max-width:1024px) {
            .ind-vb-head {
                grid-template-columns: 1fr;
                gap: 24px
            }

            .ind-vb-row {
                grid-template-columns: 50px 1fr 30px;
                gap: 18px
            }

            .ind-vb-desc {
                display: none
            }
        }

        /* INDUSTRIES — Light Premium Feature Card */
        .ind-vc {
            position: relative;
            background: linear-gradient(180deg, #faf8f4 0%, #f4ecd8 100%);
            padding: 130px 48px;
            overflow: hidden;
        }

        .ind-vc::before {
            content: '';
            position: absolute;
            top: -180px;
            left: -120px;
            width: 540px;
            height: 540px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(245, 158, 11, .16) 0%, transparent 60%);
            filter: blur(80px);
            pointer-events: none;
        }

        .ind-vc::after {
            content: '';
            position: absolute;
            bottom: -180px;
            right: -100px;
            width: 520px;
            height: 520px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(251, 113, 133, .14) 0%, transparent 60%);
            filter: blur(80px);
            pointer-events: none;
        }

        .ind-vc-inner {
            max-width: var(--max);
            margin: 0 auto;
            position: relative;
            z-index: 2
        }

        .ind-vc-head {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-bottom: 54px;
        }

        .ind-vc-head .ind-eyebrow {
            margin-bottom: 22px
        }

        .ind-vc-head .ind-eyebrow::before,
        .ind-vc-head .ind-eyebrow::after {
            content: '';
            width: 28px;
            height: 1px;
            background: var(--amber)
        }

        .ind-vc-head .ind-vb-h {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: clamp(2.4rem, 5vw, 4.4rem);
            font-weight: 500;
            letter-spacing: -.025em;
            line-height: 1.05;
            color: var(--text);
            margin-bottom: 0;
        }

        .ind-vc-head .ind-vb-h em {
            font-style: italic;
            color: var(--amber);
            font-weight: 500
        }

        .brand-mark {
            font-style: italic;
            background: linear-gradient(135deg, #1c1916 0%, #d97706 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-pulse {
            position: relative;
            display: inline-flex;
            align-items: center;
            gap: 7px;
        }

        .nav-pulse::before {
            content: '';
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--amber);
            box-shadow: 0 0 0 0 rgba(245, 158, 11, .6);
            animation: navPulseDot 2s ease-out infinite;
        }

        @keyframes navPulseDot {
            0% {
                box-shadow: 0 0 0 0 rgba(245, 158, 11, .6)
            }

            100% {
                box-shadow: 0 0 0 8px rgba(245, 158, 11, 0)
            }
        }

        .ind-vc-tabs {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            justify-content: center;
            margin-bottom: 40px;
            padding: 6px;
            background: rgba(255, 255, 255, .7);
            border: 1px solid rgba(28, 25, 22, .08);
            border-radius: 100px;
            align-self: center;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            box-shadow: 0 4px 18px -10px rgba(28, 25, 22, .15);
        }

        .ind-vc-tab {
            font-family: 'Inter', sans-serif;
            font-size: .8rem;
            font-weight: 700;
            letter-spacing: .04em;
            padding: 11px 20px;
            border-radius: 100px;
            color: var(--text-2);
            cursor: pointer;
            transition: background .25s, color .25s, box-shadow .25s;
            border: none;
            background: transparent;
        }

        .ind-vc-tab:hover {
            color: var(--text)
        }

        .ind-vc-tab.on {
            background: var(--amber);
            color: #fff;
            box-shadow: 0 6px 18px -6px rgba(245, 158, 11, .55);
        }

        .ind-vc-feature {
            position: relative;
            background: #fff;
            border: 1px solid rgba(28, 25, 22, .08);
            border-radius: 24px;
            padding: 56px;
            display: grid;
            grid-template-columns: 1.25fr 1fr;
            gap: 56px;
            align-items: stretch;
            text-align: left;
            min-height: 520px;
            overflow: hidden;
            box-shadow: 0 1px 0 rgba(0, 0, 0, .02), 0 30px 80px -30px rgba(28, 25, 22, .18);
        }

        .ind-vc-feature::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -120px;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(245, 158, 11, .18) 0%, transparent 60%);
            filter: blur(60px);
            pointer-events: none;
        }

        .ind-vc-content {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            gap: 22px
        }

        .ind-vc-num {
            font-family: 'Inter', sans-serif;
            font-size: .66rem;
            font-weight: 800;
            letter-spacing: .22em;
            text-transform: uppercase;
            color: var(--amber);
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .ind-vc-num::before {
            content: '';
            width: 24px;
            height: 1px;
            background: var(--amber);
            display: block
        }

        .ind-vc-name {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: clamp(2.2rem, 4.2vw, 3.6rem);
            font-weight: 500;
            letter-spacing: -.025em;
            line-height: 1.02;
            color: var(--text);
        }

        .ind-vc-name em {
            font-style: italic;
            color: var(--amber);
            font-weight: 500
        }

        .ind-vc-desc {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: 1.25rem;
            font-style: italic;
            color: var(--text-2);
            line-height: 1.55;
            margin: 0;
            max-width: 540px;
        }

        .ind-vc-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
            padding: 18px;
            background: rgba(245, 158, 11, .06);
            border: 1px solid rgba(245, 158, 11, .18);
            border-radius: 14px;
            margin-top: 4px;
        }

        .ind-vc-stat {
            display: flex;
            flex-direction: column;
            gap: 4px;
            text-align: center
        }

        .ind-vc-stat-num {
            font-family: 'Inter', sans-serif;
            font-size: 1.6rem;
            font-weight: 900;
            letter-spacing: -.04em;
            color: var(--amber);
            line-height: 1;
            font-variant-numeric: tabular-nums;
        }

        .ind-vc-stat-label {
            font-family: 'Inter', sans-serif;
            font-size: .6rem;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: var(--text-3);
        }

        .ind-vc-svc-h {
            font-family: 'Inter', sans-serif;
            font-size: .62rem;
            font-weight: 800;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--text-3);
            margin-top: 6px;
        }

        .ind-vc-bullets {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px
        }

        .ind-vc-bullets div {
            font-family: 'Inter', sans-serif;
            font-size: .85rem;
            font-weight: 600;
            color: var(--text);
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 14px;
            background: #faf8f4;
            border: 1px solid rgba(28, 25, 22, .06);
            border-radius: 8px;
            transition: background .25s, border-color .25s;
        }

        .ind-vc-bullets div:hover {
            background: #fff;
            border-color: rgba(245, 158, 11, .3)
        }

        .ind-vc-bullets div::before {
            content: '';
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: var(--amber);
            flex-shrink: 0;
        }

        .ind-vc-clients {
            margin-top: 6px;
            padding-top: 18px;
            border-top: 1px solid rgba(28, 25, 22, .06);
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .ind-vc-clients-h {
            font-family: 'Inter', sans-serif;
            font-size: .62rem;
            font-weight: 800;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--text-3);
        }

        .ind-vc-clients-list {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: 1.05rem;
            font-style: italic;
            color: var(--text-2);
            line-height: 1.5;
        }

        /* visual side — premium illustration block */
        .ind-vc-visual {
            position: relative;
            z-index: 2;
            border-radius: 18px;
            background: linear-gradient(135deg, #1c1916 0%, #0e0b09 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 48px 32px;
            color: #fff;
            text-align: center;
            gap: 24px;
            overflow: hidden;
            box-shadow: 0 20px 50px -20px rgba(0, 0, 0, .35);
        }

        .ind-vc-visual::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 20% 30%, rgba(245, 158, 11, .4) 0%, transparent 55%),
                radial-gradient(circle at 80% 80%, rgba(220, 38, 38, .25) 0%, transparent 55%);
            pointer-events: none;
        }

        .ind-vc-visual::after {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(245, 158, 11, .06) 1px, transparent 1px),
                linear-gradient(90deg, rgba(245, 158, 11, .06) 1px, transparent 1px);
            background-size: 32px 32px;
            mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, #000 30%, transparent 80%);
            -webkit-mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, #000 30%, transparent 80%);
            pointer-events: none;
        }

        .ind-vc-visual>* {
            position: relative;
            z-index: 1
        }

        .ind-vc-emoji {
            font-size: 6.5rem;
            line-height: 1;
            filter: drop-shadow(0 15px 30px rgba(0, 0, 0, .35));
        }

        .ind-vc-visual-h {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: 1.5rem;
            font-weight: 600;
            letter-spacing: -.01em;
            color: #fff;
            line-height: 1.2;
        }

        .ind-vc-visual-h em {
            font-style: italic;
            color: var(--amber)
        }

        .ind-vc-cta {
            font-family: 'Inter', sans-serif;
            font-size: .66rem;
            font-weight: 800;
            letter-spacing: .22em;
            text-transform: uppercase;
            color: var(--amber);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 18px;
            border: 1px solid rgba(245, 158, 11, .4);
            border-radius: 100px;
            cursor: pointer;
            transition: background .25s, color .25s;
            text-decoration: none;
        }

        .ind-vc-cta:hover {
            background: var(--amber);
            color: #fff;
            border-color: var(--amber)
        }

        @media(max-width:1024px) {
            .ind-vc-feature {
                grid-template-columns: 1fr;
                gap: 32px;
                padding: 36px 28px
            }

            .ind-vc-bullets {
                grid-template-columns: 1fr
            }

            .ind-vc-stats {
                grid-template-columns: 1fr 1fr
            }

            .ind-vc-emoji {
                font-size: 4rem
            }
        }

        /* WhatsApp floating button */
        .wa-fab {
            position: fixed;
            bottom: 28px;
            right: 28px;
            z-index: 300;
            width: 62px;
            height: 62px;
            border-radius: 50%;
            background: #25D366;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(37, 211, 102, .45);
            text-decoration: none;
            transition: transform .25s, box-shadow .25s;
        }

        .wa-fab::before {
            content: '';
            position: absolute;
            inset: -4px;
            border-radius: 50%;
            background: rgba(37, 211, 102, .45);
            animation: waPulse 2.2s ease-out infinite;
            z-index: -1;
        }

        @keyframes waPulse {
            0% {
                transform: scale(.9);
                opacity: .6
            }

            100% {
                transform: scale(1.5);
                opacity: 0
            }
        }

        .wa-fab:hover {
            transform: translateY(-3px);
            box-shadow: 0 16px 36px rgba(37, 211, 102, .55)
        }

        .wa-fab svg {
            width: 32px;
            height: 32px;
            fill: #fff
        }

        .wa-tip {
            position: absolute;
            right: 78px;
            top: 50%;
            transform: translateY(-50%);
            background: #1c1916;
            color: #fff;
            padding: 10px 16px;
            border-radius: 10px;
            font-family: 'Inter', sans-serif;
            font-size: .82rem;
            font-weight: 600;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: opacity .25s, transform .25s;
        }

        .wa-tip::after {
            content: '';
            position: absolute;
            right: -5px;
            top: 50%;
            transform: translateY(-50%) rotate(45deg);
            width: 10px;
            height: 10px;
            background: #1c1916;
        }

        .wa-fab:hover .wa-tip {
            opacity: 1;
            transform: translateY(-50%) translateX(-4px)
        }

        @media(max-width:640px) {
            .wa-fab {
                bottom: 18px;
                right: 18px;
                width: 54px;
                height: 54px
            }

            .wa-tip {
                display: none
            }
        }

        /* INDUSTRIES — VARIANT A enhancements (gaps + neon sweep + bigger heading) */
        .industries-section .ind-grid {
            gap: 18px;
            background: transparent;
            border: none;
            border-radius: 0;
            overflow: visible;
        }

        .industries-section .ind-card {
            border-radius: 14px;
            border: 1px solid rgba(255, 255, 255, .08);
            background: rgba(16, 14, 10, .72);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            padding: 36px 28px 32px;
        }

        .industries-section .ind-name {
            font-size: 1.85rem;
            line-height: 1.1;
        }

        .industries-section {
            position: relative
        }

        .industries-section .ind-sweep {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: 140px;
            z-index: 1;
            pointer-events: none;
            background: linear-gradient(180deg,
                    rgba(245, 158, 11, 0) 0%,
                    rgba(245, 158, 11, .18) 30%,
                    rgba(245, 158, 11, .4) 50%,
                    rgba(245, 158, 11, .18) 70%,
                    rgba(245, 158, 11, 0) 100%);
            filter: blur(8px);
            animation: indSweep 7s ease-in-out infinite;
            mix-blend-mode: screen;
        }

        @keyframes indSweep {
            0% {
                transform: translateY(-160px)
            }

            100% {
                transform: translateY(calc(100vh + 200px))
            }
        }

        /* ────────────────────── PREMIUM FOOTER (shared) ────────────────────── */
        .wf-footer {
            position: relative;
            overflow: hidden;
            background: linear-gradient(180deg, #0a0807 0%, #1c1916 60%, #0e0b09 100%);
            color: rgba(255, 255, 255, .65);
            font-family: 'Inter', sans-serif;
            padding: 96px 48px 32px;
            border-top: 1px solid rgba(245, 158, 11, .18);
        }

        .wf-footer::before {
            content: '';
            position: absolute;
            top: -150px;
            left: -120px;
            width: 560px;
            height: 560px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(245, 158, 11, .22) 0%, transparent 60%);
            filter: blur(90px);
            pointer-events: none;
        }

        .wf-footer::after {
            content: '';
            position: absolute;
            bottom: -180px;
            right: -100px;
            width: 520px;
            height: 520px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(251, 113, 133, .14) 0%, transparent 60%);
            filter: blur(80px);
            pointer-events: none;
        }

        .wf-footer-inner {
            max-width: var(--max);
            margin: 0 auto;
            position: relative;
            z-index: 2
        }

        .wf-foot-top {
            display: grid;
            grid-template-columns: 1.3fr 2.5fr;
            gap: 72px;
            padding-bottom: 48px;
            border-bottom: 1px solid rgba(255, 255, 255, .07);
            margin-bottom: 28px;
        }

        .wf-foot-brand {
            display: flex;
            flex-direction: column;
            gap: 24px
        }

        .wf-foot-logo {
            line-height: 0
        }

        .wf-foot-logo img {
            height: 46px;
            width: auto;
            display: block
        }

        .wf-foot-tag {
            font-family: 'Cormorant Garamond', ui-serif, Georgia, serif;
            font-size: 1.2rem;
            line-height: 1.5;
            color: rgba(255, 255, 255, .78);
            font-weight: 500;
            max-width: 380px;
        }

        .wf-foot-tag em {
            font-style: italic;
            color: var(--amber);
            font-weight: 500
        }

        .wf-foot-news-h {
            font-size: .6rem;
            font-weight: 800;
            letter-spacing: .22em;
            text-transform: uppercase;
            color: var(--amber);
            margin-bottom: 12px;
        }

        .wf-foot-news-f {
            display: flex;
            gap: 8px;
            max-width: 340px
        }

        .wf-foot-news-f input {
            flex: 1;
            padding: 11px 14px;
            border-radius: 8px;
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(255, 255, 255, .12);
            color: #fff;
            font-family: 'Inter', sans-serif;
            font-size: .85rem;
            outline: none;
            transition: border-color .25s;
        }

        .wf-foot-news-f input:focus {
            border-color: var(--amber)
        }

        .wf-foot-news-f input::placeholder {
            color: rgba(255, 255, 255, .4)
        }

        .wf-foot-news-f button {
            width: 42px;
            background: var(--amber);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: background .25s, transform .25s;
        }

        .wf-foot-news-f button:hover {
            background: var(--amber-d);
            transform: translateY(-1px)
        }

        .wf-foot-socials {
            display: flex;
            gap: 10px;
            margin-top: 6px
        }

        .wf-soc {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(255, 255, 255, .1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, .7);
            transition: background .25s, color .25s, border-color .25s, transform .25s;
        }

        .wf-soc:hover {
            background: var(--amber);
            border-color: var(--amber);
            color: #fff;
            transform: translateY(-2px)
        }

        .wf-soc svg {
            width: 17px;
            height: 17px
        }

        .wf-foot-cols {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 36px;
        }

        .wf-foot-col {
            display: flex;
            flex-direction: column;
            gap: 11px
        }

        .wf-foot-h {
            font-size: .6rem;
            font-weight: 800;
            letter-spacing: .22em;
            text-transform: uppercase;
            color: #fff;
            margin-bottom: 6px;
        }

        .wf-foot-col a {
            font-size: .85rem;
            font-weight: 500;
            color: rgba(255, 255, 255, .6);
            transition: color .2s, padding-left .25s;
        }

        .wf-foot-col a:hover {
            color: var(--amber);
            padding-left: 5px
        }

        .wf-foot-addr {
            font-size: .84rem;
            line-height: 1.65;
            color: rgba(255, 255, 255, .6);
            margin-bottom: 6px;
        }

        .wf-foot-addr strong {
            color: #fff;
            font-weight: 700
        }

        .wf-foot-phone,
        .wf-foot-mail,
        .wf-foot-wa {
            font-weight: 600 !important
        }

        .wf-foot-phone {
            color: var(--amber) !important;
            font-size: .95rem !important
        }

        .wf-foot-mail {
            color: #fff !important
        }

        .wf-foot-wa {
            display: inline-flex !important;
            align-items: center;
            gap: 6px;
            margin-top: 6px;
            padding: 8px 14px;
            border-radius: 100px;
            background: rgba(37, 211, 102, .12);
            border: 1px solid rgba(37, 211, 102, .35);
            color: #25D366 !important;
            font-size: .78rem !important;
            align-self: flex-start;
            width: max-content;
            transition: background .25s, padding-left .25s !important;
        }

        .wf-foot-wa:hover {
            background: #25D366;
            color: #fff !important;
            padding-left: 18px !important
        }

        .wf-foot-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 14px;
            padding-top: 8px;
        }

        .wf-foot-copy {
            font-size: .78rem;
            color: rgba(255, 255, 255, .45)
        }

        .wf-foot-mini {
            display: flex;
            gap: 10px;
            align-items: center;
            font-size: .78rem;
            color: rgba(255, 255, 255, .45)
        }

        .wf-foot-mini a {
            color: rgba(255, 255, 255, .55);
            transition: color .2s
        }

        .wf-foot-mini a:hover {
            color: var(--amber)
        }

        .wf-foot-mini .dot {
            color: rgba(255, 255, 255, .25)
        }

        @media(max-width:1024px) {
            .wf-foot-top {
                grid-template-columns: 1fr;
                gap: 48px
            }

            .wf-foot-cols {
                grid-template-columns: 1fr 1fr
            }
        }

        @media(max-width:600px) {
            .wf-footer {
                padding: 64px 20px 24px
            }
        }

        /* ============================================================
   MOBILE OVERHAUL — Phase 1A
   Targets: stats grid · who-we-are stats · how-we-work scroll ·
   industries width · reviews horizontal scroll · footer 2-col
   ============================================================ */
        @media(max-width:640px) {

            /* 1. Stats bar (5 cells) — 2/2/1 with last spanning full width, tighter padding */
            .v-stat-row {
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 0;
                padding: 18px 14px !important
            }

            .variant.v1 .v-stat-cell {
                padding: 22px 14px;
                border-right: 1px solid rgba(245, 158, 11, .12)
            }

            .variant.v1 .v-stat-cell:nth-child(2n) {
                border-right: none
            }

            .variant.v1 .v-stat-cell:nth-child(5) {
                grid-column: span 2;
                border-right: none;
                border-top: 1px solid rgba(245, 158, 11, .12)
            }

            .variant.v1 .v-num {
                font-size: 1.85rem
            }

            .variant.v1 .v-label {
                font-size: .62rem;
                letter-spacing: .1em
            }

            .variant.v1 .v-icon {
                width: 32px;
                height: 32px;
                margin-bottom: 8px
            }

            .v1-head {
                padding: 36px 20px 0
            }

            /* 2. Who-we-are 4 stats — single row, smaller */
            .who-stats {
                display: grid !important;
                grid-template-columns: repeat(4, 1fr);
                gap: 8px;
                width: 100%
            }

            .who-stat {
                align-items: center;
                text-align: center
            }

            .who-stat-num {
                font-size: 1.4rem
            }

            .who-stat-label {
                font-size: .55rem;
                letter-spacing: .08em
            }

            /* 3. Industries — wider cards, less side margin */
            .industries-section {
                padding: 60px 14px
            }

            .ind-grid {
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 10px
            }

            .ind-card {
                padding: 22px 16px
            }

            .ind-card-num {
                font-size: .6rem
            }

            .ind-name {
                font-size: 1rem
            }

            /* 4. Reviews — horizontal scroll snap */
            .reviews-section {
                padding: 60px 0 60px 20px
            }

            .reviews-section>* {
                padding-right: 20px
            }

            .reviews-grid {
                display: grid !important;
                grid-auto-flow: column;
                grid-auto-columns: 84%;
                grid-template-columns: none !important;
                gap: 14px;
                overflow-x: auto;
                overflow-y: visible;
                scroll-snap-type: x mandatory;
                -webkit-overflow-scrolling: touch;
                padding: 4px 20px 18px 0;
            }

            .reviews-grid>* {
                scroll-snap-align: start;
                min-width: 0
            }

            .reviews-grid::-webkit-scrollbar {
                height: 4px
            }

            .reviews-grid::-webkit-scrollbar-thumb {
                background: rgba(245, 158, 11, .4);
                border-radius: 2px
            }

            /* 5. Footers — 2 columns per row */
            .footer-grid {
                grid-template-columns: 1fr 1fr !important;
                gap: 26px 18px
            }

            .wf-foot-top {
                grid-template-columns: 1fr;
                gap: 32px;
                padding-bottom: 32px;
                margin-bottom: 20px
            }

            .wf-foot-cols {
                grid-template-columns: 1fr 1fr !important;
                gap: 24px 16px
            }

            .wf-foot-col {
                gap: 8px
            }

            .wf-foot-col a {
                font-size: .78rem;
                line-height: 1.5
            }

            .wf-foot-h {
                font-size: .55rem;
                letter-spacing: .18em
            }

            .wf-foot-addr {
                font-size: .78rem;
                line-height: 1.55
            }

            .wf-foot-bottom {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
                text-align: left
            }

            .wf-foot-mini {
                flex-wrap: wrap;
                font-size: .7rem
            }
        }

        @media(max-width:480px) {
            .variant.v1 .v-num {
                font-size: 1.6rem
            }

            .who-stat-num {
                font-size: 1.2rem
            }

            .reviews-grid {
                grid-auto-columns: 88%
            }
        }

        @media(max-width:380px) {
            .who-stats {
                gap: 6px
            }

            .who-stat-num {
                font-size: 1.05rem
            }

            .who-stat-label {
                font-size: .5rem
            }
        }

        /* ============================================================
   MOBILE OVERHAUL — Phase 2
   Services 2-column nav · darker overlay · content not clipped ·
   Industries wider cards
   ============================================================ */
        @media(max-width:768px) {

            /* SERVICES — let panels grow to fit content (no more cutoff) */
            .dc-sticky {
                min-height: auto !important;
                overflow: visible
            }

            .dc-bg-overlay {
                background: linear-gradient(180deg, rgba(13, 11, 8, .97) 0%, rgba(13, 11, 8, .94) 100%)
            }

            .dc-stage {
                display: flex !important;
                flex-direction: column;
                grid-template-columns: none !important
            }

            .dc-side {
                padding: 36px 22px 18px;
                border-bottom: 1px solid rgba(245, 158, 11, .18)
            }

            .dc-side-eyebrow {
                font-size: .62rem;
                margin-bottom: 14px
            }

            .dc-side-h {
                font-size: 1.55rem;
                line-height: 1.1;
                margin-bottom: 20px
            }

            /* The 8-item nav becomes a 2-column tile grid — even-sized pills */
            .dc-nav {
                display: grid !important;
                grid-template-columns: 1fr 1fr;
                gap: 8px;
                flex-direction: initial !important;
                flex-wrap: nowrap !important
            }

            .dc-nav-item {
                padding: 11px 12px !important;
                background: rgba(255, 255, 255, .05) !important;
                border: 1px solid rgba(255, 255, 255, .08);
                border-radius: 10px;
                font-size: .74rem !important;
                font-weight: 600;
                display: flex;
                align-items: center;
                justify-content: flex-start;
                color: rgba(255, 255, 255, .7);
                min-height: 46px;
                line-height: 1.25;
            }

            .dc-nav-item.on {
                background: rgba(240, 120, 32, .16) !important;
                border-color: rgba(240, 120, 32, .45);
                color: #fff !important;
                padding-left: 12px !important
            }

            .dc-nav-item .dc-nav-n {
                min-width: 18px;
                color: rgba(255, 255, 255, .4);
                font-size: .55rem
            }

            .dc-nav-item.on .dc-nav-n {
                color: #0b85f5
            }

            .dc-nav-bar {
                display: none !important
            }

            /* Main panel: stack naturally; only .on visible; whole content shown */
            .dc-main {
                padding: 24px 20px 40px !important;
                display: block !important;
                overflow: visible !important;
                align-items: initial !important
            }

            .dc-panel {
                position: relative !important;
                inset: auto !important;
                display: none !important;
                opacity: 1 !important;
                transform: none !important;
                pointer-events: auto !important
            }

            .dc-panel.on {
                display: flex !important;
                flex-direction: column;
                gap: 18px
            }

            .dc-panel-title {
                font-size: 1.7rem !important;
                line-height: 1.1
            }

            .dc-panel-stat {
                display: flex;
                align-items: baseline;
                gap: 14px
            }

            .dc-panel-stat-num {
                font-size: 1.8rem
            }

            .dc-panel-stat-label {
                font-size: .62rem
            }

            .dc-panel-tabs {
                flex-wrap: wrap;
                gap: 6px
            }

            .dc-panel-tabs span {
                font-size: .62rem;
                padding: 5px 10px
            }

            .dc-panel-cards {
                display: grid !important;
                grid-template-columns: 1fr;
                gap: 10px
            }

            .dc-panel-card {
                padding: 18px 16px
            }

            .dc-panel-card-t {
                font-size: .95rem
            }

            .dc-panel-card-d {
                font-size: .82rem
            }

            .dc-counter {
                padding: 12px 20px;
                font-size: .66rem
            }

            .dc-progress {
                display: none
            }

            /* INDUSTRIES — wider cards, less side margin */
            .ind-vc {
                padding: 64px 12px !important
            }

            .ind-vc-inner {
                padding: 0
            }

            .ind-vc-tabs {
                padding: 4px;
                gap: 3px;
                width: 100%;
                max-width: 100%;
                overflow-x: auto;
                flex-wrap: nowrap;
                justify-content: flex-start;
                scrollbar-width: none
            }

            .ind-vc-tabs::-webkit-scrollbar {
                display: none
            }

            .ind-vc-tab {
                padding: 9px 14px;
                font-size: .72rem;
                white-space: nowrap;
                flex-shrink: 0
            }

            .ind-vc-feature {
                padding: 24px 20px !important;
                border-radius: 18px !important;
                gap: 24px !important;
                min-height: auto
            }

            .ind-vc-name {
                font-size: 1.7rem !important;
                line-height: 1.05
            }

            .ind-vc-desc {
                font-size: 1rem !important;
                line-height: 1.55
            }

            .ind-vc-stats {
                padding: 14px 12px;
                gap: 6px
            }

            .ind-vc-stat-num {
                font-size: 1.3rem
            }

            .ind-vc-stat-label {
                font-size: .55rem
            }

            .ind-vc-num {
                font-size: .6rem
            }
        }

        /* ============================================================
   NAV — Home link, Services dropdown, mobile hamburger drawer
   ============================================================ */
        .nav-item-drop {
            position: relative
        }

        /* Homepage nav: follow same transparent/solid pattern as the other nav links.
   White-ish on transparent hero, dark when scrolled (.solid). */
        .nav-item-drop>a {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
            color: rgba(255, 255, 255, .85);
            font-size: 20px;
            font-weight: 500;
            transition: color .3s
        }

        #nav.solid .nav-item-drop>a {
            color: var(--text-2)
        }

        .nav-item-drop>a:hover {
            color: var(--amber) !important
        }

        /* Amber caret + bold so the dropdown indicator is always visible regardless of bg state */
        .nav-item-drop .caret {
            font-size: .7rem;
            color: var(--amber);
            font-weight: 800;
            transition: transform .25s;
            display: inline-block;
            line-height: 1
        }

        .nav-item-drop:hover .caret {
            transform: rotate(180deg)
        }

        .nav-dropdown {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(8px);
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 14px;
            min-width: 280px;
            box-shadow: 0 30px 80px -20px rgba(28, 25, 22, .25);
            opacity: 0;
            pointer-events: none;
            transition: opacity .2s, transform .2s;
            z-index: 300
        }

        .nav-item-drop:hover .nav-dropdown {
            opacity: 1;
            pointer-events: auto;
            transform: translateX(-50%) translateY(2px)
        }

        .nav-dropdown a {
            display: block;
            padding: 10px 14px;
            font-size: .86rem;
            font-weight: 500;
            color: var(--text);
            border-radius: 8px;
            transition: background .2s, color .2s;
            border: none
        }

        .nav-dropdown a:hover {
            background: rgba(245, 158, 11, .08);
            color: var(--amber)
        }

        .nav-dropdown-foot {
            border-top: 1px solid var(--border);
            margin-top: 6px;
            padding-top: 8px
        }

        .nav-dropdown-foot a {
            font-size: .78rem;
            font-weight: 700;
            color: var(--amber)
        }

        .nav-hamburger {
            display: none;
            background: black;
            /* background: transparent; */
            border: none;
            cursor: pointer;
            width: 40px;
            height: 40px;
            flex-direction: column;
            justify-content: center;
            gap: 5px;
            align-items: center;
            padding: 0
        }

        .nav-hamburger span {
            display: block;
            width: 22px;
            height: 2px;
            background: #fff;
            border-radius: 2px;
            transition: transform .3s, opacity .3s, background .3s
        }

        #nav.solid .nav-hamburger span {
            background: var(--text)
        }

        .nav-hamburger.open span:nth-child(1) {
            transform: translateY(7px) rotate(45deg)
        }

        .nav-hamburger.open span:nth-child(2) {
            opacity: 0
        }

        .nav-hamburger.open span:nth-child(3) {
            transform: translateY(-7px) rotate(-45deg)
        }

        .nav-drawer-bg {
            position: fixed;
            inset: 0;
            background: rgba(28, 25, 22, .5);
            backdrop-filter: blur(6px);
            opacity: 0;
            pointer-events: none;
            transition: opacity .3s;
            z-index: 198
        }

        .nav-drawer-bg.open {
            opacity: 1;
            pointer-events: auto
        }

        .nav-drawer {
            position: fixed;
            top: 0;
            right: -100%;
            height: 100vh;
            width: min(360px, 86vw);
            background: #fff;
            z-index: 199;
            padding: 88px 28px 28px;
            overflow-y: auto;
            box-shadow: -30px 0 80px rgba(28, 25, 22, .18);
            transition: right .35s cubic-bezier(.2, .8, .2, 1);
            display: flex;
            flex-direction: column;
            gap: 6px
        }

        .nav-drawer.open {
            right: 0
        }

        .nav-drawer a {
            padding: 14px 4px;
            font-size: 1.02rem;
            font-weight: 600;
            color: var(--text);
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-decoration: none
        }

        .nav-drawer a.on {
            color: var(--amber)
        }

        .nav-drawer .drawer-section-h {
            font-size: .6rem;
            font-weight: 800;
            letter-spacing: .22em;
            text-transform: uppercase;
            color: var(--amber);
            padding: 18px 4px 6px;
            border-bottom: none
        }

        .nav-drawer .sub a {
            padding: 10px 4px 10px 14px;
            font-size: .92rem;
            font-weight: 500;
            color: var(--text-2);
            border-bottom: 1px solid rgba(28, 25, 22, .05)
        }

        .nav-drawer .drawer-cta {
            margin-top: 18px;
            padding: 14px 22px;
            background: var(--amber);
            color: #fff;
            border-radius: 10px;
            font-weight: 700;
            text-align: center;
            justify-content: center;
            font-size: .92rem;
            border-bottom: none
        }

        .nav-drawer .drawer-foot {
            margin-top: auto;
            padding-top: 24px;
            font-size: .78rem;
            color: var(--text-3);
            text-align: center;
            border-bottom: none
        }

        @media(max-width:1024px) {

            .nav-links,
            .nav-btn-desktop {
                display: none !important
            }

            .nav-hamburger {
                display: flex !important
            }
        }
    </style>
    <script src="js/site-head.js?v=20260728" defer></script>

</head>

<body>
    <!-- <img src="" class="img-fluid   " style="width: 150px;height: 65px;" alt=""> -->
    <!-- NAV -->
    <nav id="nav">
        <div class="nav-inner">
            <a href="/" class="logo" aria-label="Webfluence"><img src="assests/images/Bhavi_Creations/best_digital_marketing_white_logo_bhavi_creations.webp " alt="Webfluence"></a>
            <div class="nav-links">
                <a href="index.php" class="on">Home</a>
                <div class="nav-item-drop">
                    <a href="services.php">Services </a>
                    <!-- <div class="nav-dropdown">
                        <a href="performance-marketing-kakinada.html">Performance Marketing</a>
                        <a href="google-ads-service-kakinada.html">Google Ads</a>
                        <a href="meta-ads-service-kakinada.html">Meta Ads</a>
                        <a href="seo-service-kakinada.html">SEO</a>
                        <a href="linkedin-ads-service-kakinada.html">LinkedIn Ads</a>
                        <a href="web-design-kakinada.html">Web Design</a>
                        <a href="brand-creative-kakinada.html">Brand & Creative</a>
                        <div class="nav-dropdown-foot"><a href="/#services">All services →</a></div>
                    </div> -->
                </div>
                <!-- <a href="/#industries">Industries</a> -->
                <a href="about.php">Our Team</a>
                <a href="about.php">About</a>
                <a href="blogs.php">Blog</a>
                <a href="contact_us.php">contact</a>
                <!-- <a href="pulse.html"><span class="nav-pulse">Updates</span></a>/ -->
            </div>
            <!-- <button class="nav-btn nav-btn-desktop" id="#landing-page-contact">Get Free Quote</button>
            <button class="nav-btn nav-btn-desktop" id="landing-page-contact">
                Get Free Quote
            </button> -->

            <!-- <button class="nav-btn nav-btn-desktop" onclick="openQuote()"  href="blogs.php">Get Free Quote</button> -->
            <button class="nav-hamburger" aria-label="Menu" aria-expanded="false" onclick="toggleNavDrawer()">
                <span></span><span></span><span></span>
            </button>
        </div>
    </nav>
    <div class="nav-drawer-bg" id="navDrawerBg" onclick="toggleNavDrawer()"></div>
    <!-- <aside class="nav-drawer" id="navDrawer" aria-hidden="true">
        <a href="/">Home</a>
        <div class="drawer-section-h">Services</div>
        <div class="sub">
            <a href="performance-marketing-kakinada.html">Performance Marketing</a>
            <a href="google-ads-service-kakinada.html">Google Ads</a>
            <a href="meta-ads-service-kakinada.html">Meta Ads</a>
            <a href="seo-service-kakinada.html">SEO</a>
            <a href="linkedin-ads-service-kakinada.html">LinkedIn Ads</a>
            <a href="web-design-kakinada.html">Web Design</a>
            <a href="brand-creative-kakinada.html">Brand & Creative</a>
        </div>
        <a href="/#industries">Industries</a>
        <a href="team.html">Our Team</a>
        <a href="about.html">About</a>
        <a href="the-brief.html">Blog</a>
        <a href="pulse.html">Updates</a>
        <a href="contact.html" class="drawer-cta">Get Free Quote →</a>
        <div class="drawer-foot">+91 9642343434 · bhavicreations2022@gmail.com</div>
    </aside> -->

    <!-- HERO -->
    <section id="hero">
        <video id="hero-video" autoplay muted loop playsinline preload="metadata" disablepictureinpicture poster="uploads/hero-poster.jpg">
            <source src="./assests/images/hero-loop.mp4" type="video/mp4">
        </video>
        <div id="hero-overlay"></div>

        <div class="hero-inner">
            <!-- LEFT -->
            <div class="hero-left">
                <div class="hero-eyebrow">
                    <div class="eyebrow-dot"></div>Bhavi Creations Pvt Ltd
                </div>
                <div class="hero-h1">We Build Brands<br>That Lead</div>
                <div class="hero-platform-line">
                    <span id="platform-word">Brand Identity.</span>
                </div>
                <p class="hero-sub" id="hero-sub">Crafting iconic brand identities, premium design systems, and strategic digital experiences that turn ambition into market leadership.</p>
                <div class="hero-actions">
                    <button class="btn-amber" onclick="openQuote()">Start Your Brand Journey →</button>
                    <button class="btn-outline-white">Explore Our Work</button>
                </div>
            </div>

            <!-- RIGHT — drawing line + dropping curtains -->
            <div class="hero-curtain-area" id="heroCurtain">
                <div class="curtain-line"></div>
                <div class="curtain-row">
                    <div class="curtain c1">
                        <div class="curtain-inner">
                            <div class="cu-badge" id="cu-badge">Branding & Strategy</div>
                            <div class="cu-point">
                                <div class="cu-icon" id="cu-icon-1">🎨</div>
                                <div class="cu-text" id="cu-text-1">Visual Identity, Packaging & Digital Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="curtain c2">
                        <div class="curtain-inner">
                            <div class="cu-stat-num" id="cu-stat-num">100+</div>
                            <div class="cu-stat-label" id="cu-stat-label">Brands Transformed</div>
                            <div class="cu-divider"></div>
                            <div class="cu-headline" id="cu-headline">Bold Ideas,<br>Timeless Impact</div>
                        </div>
                    </div>
                    <div class="curtain c3">
                        <div class="curtain-inner">
                            <div class="cu-point">
                                <div class="cu-icon" id="cu-icon-2">✨</div>
                                <div class="cu-text" id="cu-text-2">End-to-End Brand Guidelines</div>
                            </div>
                            <div class="cu-point">
                                <div class="cu-icon" id="cu-icon-3">🚀</div>
                                <div class="cu-text" id="cu-text-3">High-Impact Creative Direction</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-scroll-hint">
            <div class="scroll-caret"></div>
            Scroll
        </div>
    </section>

    <!-- ICON SPRITE -->
    <svg width="0" height="0" style="position:absolute" aria-hidden="true">
        <defs>
            <symbol id="i-brands" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="11" width="6" height="10" rx="1.2" />
                <rect x="9" y="6" width="6" height="15" rx="1.2" />
                <rect x="15" y="14" width="6" height="7" rx="1.2" />
            </symbol>
            <symbol id="i-star" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
            </symbol>
            <symbol id="i-pin" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 1 1 18 0z" />
                <circle cx="12" cy="10" r="3" />
            </symbol>
            <symbol id="i-trend" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                <polyline points="16 7 22 7 22 13" />
            </symbol>
            <symbol id="i-target" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <circle cx="12" cy="12" r="6" />
                <circle cx="12" cy="12" r="2" />
            </symbol>
        </defs>
    </svg>

    <!-- STATS + INTRO -->
    <section class="variant v1">
        <div class="v-blob3"></div>
        <div class="v1-head">
            <div class="v1-eyebrow">Bhavi Creations Pvt Ltd</div>
            <h2 class="v1-title">A <em>Branding & Creative</em> Solution Built for Brands Who Refuse to Settle.</h2>
        </div>
        <div class="v-stat-row">
            <div class="v-stat-cell">
                <div class="v-icon">
                    <svg>
                        <use href="#i-brands" />
                    </svg>
                </div>
                <div class="v-num">Design</div>
                <div class="v-label">Identity & Branding</div>
            </div>
            <div class="v-stat-cell">
                <div class="v-icon">
                    <svg>
                        <use href="#i-star" />
                    </svg>
                </div>
                <div class="v-num">Social</div>
                <div class="v-label">Media Management</div>
            </div>
            <div class="v-stat-cell">
                <div class="v-icon">
                    <svg>
                        <use href="#i-pin" />
                    </svg>
                </div>
                <div class="v-num">SEO</div>
                <div class="v-label">Search Ranking</div>
            </div>
            <div class="v-stat-cell">
                <div class="v-icon">
                    <svg>
                        <use href="#i-trend" />
                    </svg>
                </div>
                <div class="v-num">Web</div>
                <div class="v-label">Development</div>
            </div>
            <div class="v-stat-cell">
                <div class="v-icon">
                    <svg>
                        <use href="#i-target" />
                    </svg>
                </div>
                <div class="v-num">Calling</div>
                <div class="v-label">Telecaller Support</div>
            </div>
        </div>
    </section>

    <!-- WHO WE ARE -->
    <section class="who-section" id="about">
        <div class="who-inner">
            <div class="who-grid">
                <div class="who-text reveal">
                    <div class="who-eyebrow">Who We Are</div>
                    <h2 class="who-title">The <em>Finest</em> Creative & Branding Agency.</h2>
                    <p class="who-lead">Bhavi Creations Pvt Ltd is a full-service creative agency — built around the simple belief that exceptional brands require seamless end-to-end execution.</p>
                    <p class="who-body">From high-impact Brand Design and dynamic Web Development to dedicated SEO, Social Media management, and Telecaller lead support — we handle it all. Plus, we bring your vision to life with custom client video & photo shoots tailored precisely to your brand's unique needs.</p>
                    <div class="who-stats">
                        <div class="who-stat">
                            <div class="who-stat-num">5+</div>
                            <div class="who-stat-label">In-House Teams</div>
                        </div>
                        <div class="who-stat">
                            <div class="who-stat-num">100+</div>
                            <div class="who-stat-label">Brands Transformed</div>
                        </div>
                        <div class="who-stat">
                            <div class="who-stat-num">50+</div>
                            <div class="who-stat-label">Custom Shoots</div>
                        </div>
                        <div class="who-stat">
                            <div class="who-stat-num">4.9★</div>
                            <div class="who-stat-label">Client Rating</div>
                        </div>
                    </div>
                </div>
                <div class="who-logo-panel reveal d2">
                    <img class="who-logo-img" src="assests/images/Bhavi_Creations/best_digital_marketing_white_logo_bhavi_creations.webp" alt="Bhavi Creations Pvt Ltd">
                    <div class="who-logo-tag"><span>Bhavi Creations Pvt Ltd</span> · Branding & Media Agency</div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES — DARK COMMAND -->
    <section class="dc-services" id="services">
        <div class="dc-track" id="dcTrack">
            <div class="dc-sticky">
                <div class="dc-bg">
                    <div class="dc-bg-img" style="background-image:url('./assests/images/Bhavi-staff.png')"></div>
                    <div class="dc-bg-overlay"></div>
                </div>
                <div class="dc-counter">Service <span id="dcCounter">01</span> / 13</div>
                <div class="dc-stage">
                    <aside class="dc-side">
                        <div class="dc-side-eyebrow">— What We Do</div>
                        <h3 class="dc-side-h">Services<br><em>&amp; Capabilities</em></h3>
                        <div class="dc-side-rule"></div>
                        <nav class="dc-nav" id="dcNav"></nav>
                        <div class="dc-side-foot">
                            <strong>kakinada · 2012</strong><br>
                            Full-stack performance &amp; brand work for India's most ambitious teams.
                        </div>
                    </aside>
                    <main class="dc-main" id="dcMain"></main>
                </div>
                <div class="dc-progress" id="dcProgress"></div>
            </div>
        </div>
    </section>




    <!-- below content  -->

    <!-- HOW WE WORK -->
    <section class="approach-section" id="approach">
        <div class="approach-inner">
            <div class="approach-head">
                <div class="section-eyebrow">How We Work</div>
                <h2 class="section-h2">Our Proven 360° Branding Framework</h2>
                <p class="section-sub" style="margin:0 auto;max-width:520px">A transparent, end-to-end process that turns brand vision into high-converting digital assets and growth.</p>
            </div>
            <div class="steps-wrap reveal">
                <div class="step-col on" onclick="setStep(0,this)">
                    <div class="step-orb">🔍<div class="step-badge">1</div>
                    </div>
                    <div class="step-title">Discovery & Strategy</div>
                    <div class="step-brief">Deep-dive into your brand identity, market positioning, and target audience needs.</div>
                </div>
                <div class="step-col" onclick="setStep(1,this)">
                    <div class="step-orb">🎨<div class="step-badge">2</div>
                    </div>
                    <div class="step-title">Design & Web Build</div>
                    <div class="step-brief">Creating custom visual identities, UI/UX designs, and high-performance websites.</div>
                </div>
                <div class="step-col" onclick="setStep(2,this)">
                    <div class="step-orb">📸<div class="step-badge">3</div>
                    </div>
                    <div class="step-title">Shoots & Media Production</div>
                    <div class="step-brief">Tailored photo and video shoots based on client-specific requirements.</div>
                </div>
                <div class="step-col" onclick="setStep(3,this)">
                    <div class="step-orb">🚀<div class="step-badge">4</div>
                    </div>
                    <div class="step-title">Marketing & Lead Desk</div>
                    <div class="step-brief">SEO, Social Media management, and active Telecaller conversion support.</div>
                </div>
            </div>
            <div class="step-detail reveal d1" id="stepDetail">
                <div class="sd-left">
                    <div class="sd-eyebrow" id="sd-eyebrow">Step 01 of 04</div>
                    <div class="sd-title" id="sd-title">Discovery & Strategy</div>
                    <div class="sd-text" id="sd-text">A thorough deep-dive into your brand's core values and market presence. Our strategy team analyzes competitor positioning, maps out target audience personas, and prepares a clear roadmap for web, design, and media execution.</div>
                </div>
                <div class="sd-right">
                    <div class="sd-items" id="sd-items">
                        <div class="sd-item">
                            <div class="sd-dot"></div>
                            <div class="sd-item-txt">Brand audit & market positioning</div>
                        </div>
                        <div class="sd-item">
                            <div class="sd-dot"></div>
                            <div class="sd-item-txt">Design & visual style-guide blueprint</div>
                        </div>
                        <div class="sd-item">
                            <div class="sd-dot"></div>
                            <div class="sd-item-txt">Target audience persona mapping</div>
                        </div>
                        <div class="sd-item">
                            <div class="sd-dot"></div>
                            <div class="sd-item-txt">Custom shoot & media concept plan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INDUSTRIES -->
    <section class="industries-section" id="industries-old" style="display:none">
        <div class="ind-bg">
            <div class="ind-bg-img"></div>
            <div class="ind-bg-overlay"></div>
        </div>
        <div class="industries-inner">
            <div class="ind-head">
                <div class="ind-eyebrow">Industries We Serve</div>
                <h2 class="ind-h">Sector-Specific <em>Branding &amp; Creative Solutions</em></h2>
                <p class="ind-sub">We speak your industry's language — crafting visual identities, custom shoots, and digital experiences that connect.</p>
            </div>
            <div class="ind-grid">
                <div class="ind-card reveal">
                    <div class="ind-card-num">01 — Property</div>
                    <span class="ind-emoji">🏘️</span>
                    <div class="ind-name">Real Estate</div>
                    <div class="ind-desc">High-end branding, property walkthrough video shoots, web portals, and dedicated telecalling lead follow-ups.</div>
                    <div class="ind-card-foot"><span>View Sector</span></div>
                </div>
                <div class="ind-card reveal d1">
                    <div class="ind-card-num">02 — Health</div>
                    <span class="ind-emoji">🏥</span>
                    <div class="ind-name">Healthcare &amp; Clinics</div>
                    <div class="ind-desc">Patient trust building with clinic promotional shoots, medical SEO, healthcare web design, and appointment calling desks.</div>
                    <div class="ind-card-foot"><span>View Sector</span></div>
                </div>
                <div class="ind-card reveal d2">
                    <div class="ind-card-num">03 — Energy</div>
                    <span class="ind-emoji">☀️</span>
                    <div class="ind-name">Solar &amp; Clean Tech</div>
                    <div class="ind-desc">Corporate brochures, site installation photo/video shoots, lead generation SEO, and direct telecaller conversion pipelines.</div>
                    <div class="ind-card-foot"><span>View Sector</span></div>
                </div>
                <div class="ind-card reveal d3">
                    <div class="ind-card-num">04 — Education</div>
                    <span class="ind-emoji">🎓</span>
                    <div class="ind-name">Education &amp; Academies</div>
                    <div class="ind-desc">Campus media shoots, social media branding, fast web applications, and admission helpline desk management.</div>
                    <div class="ind-card-foot"><span>View Sector</span></div>
                </div>
                <div class="ind-card reveal d4">
                    <div class="ind-card-num">05 — Retail</div>
                    <span class="ind-emoji">🛍️</span>
                    <div class="ind-name">E-Commerce &amp; D2C</div>
                    <div class="ind-desc">Product catalog photoshoots, brand packaging designs, high-speed online stores, and organic social media growth.</div>
                    <div class="ind-card-foot"><span>View Sector</span></div>
                </div>
                <div class="ind-card reveal d5">
                    <div class="ind-card-num">06 — Hospitality</div>
                    <span class="ind-emoji">🍽️</span>
                    <div class="ind-name">Food &amp; Hospitality</div>
                    <div class="ind-desc">Food shoot reels, restaurant branding, interactive online menus, and local SEO ranking optimization.</div>
                    <div class="ind-card-foot"><span>View Sector</span></div>
                </div>
                <div class="ind-card reveal d1">
                    <div class="ind-card-num">07 — Corporate</div>
                    <span class="ind-emoji">⚙️</span>
                    <div class="ind-name">B2B &amp; Enterprises</div>
                    <div class="ind-desc">Professional corporate identity kits, testimonial video shoots, high-authority web solutions, and B2B tele-outreach.</div>
                    <div class="ind-card-foot"><span>View Sector</span></div>
                </div>
                <div class="ind-card reveal d2">
                    <div class="ind-card-num">08 — Travel</div>
                    <span class="ind-emoji">✈️</span>
                    <div class="ind-name">Travel &amp; Tourism</div>
                    <div class="ind-desc">Destination visual content shoots, booking website development, and social media campaigns built for seasonal bookings.</div>
                    <div class="ind-card-foot"><span>View Sector</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- INDUSTRIES — VARIANT B: Editorial List (hidden) -->
    <section class="ind-vb" style="display:none">
        <div class="ind-variant-tag" style="color:var(--text);background:rgba(255,255,255,.85);border-color:rgba(28,25,22,.1)">Variant B · Editorial List</div>
        <div class="ind-vb-inner">
            <div class="ind-vb-head">
                <div>
                    <div class="ind-eyebrow" style="color:var(--amber)">Industries We Serve</div>
                    <h2 class="ind-vb-h">Sector-Specific <em>Branding &amp; Media.</em></h2>
                </div>
                <p class="ind-vb-sub">Full agency support — we craft your visual identity, shoot custom content, and run lead desks tailored to your industry.</p>
            </div>
            <div class="ind-vb-list">
                <div class="ind-vb-row">
                    <div class="ind-vb-num">01 — Property</div>
                    <div class="ind-vb-name">Real <em>Estate</em></div>
                    <div class="ind-vb-desc">High-end branding, property walkthrough video shoots, web portals, and dedicated telecalling lead follow-ups.</div>
                    <div class="ind-vb-arrow">→</div>
                </div>
                <div class="ind-vb-row">
                    <div class="ind-vb-num">02 — Health</div>
                    <div class="ind-vb-name">Healthcare</div>
                    <div class="ind-vb-desc">Patient trust building with clinic promotional shoots, medical SEO, healthcare web design, and appointment calling desks.</div>
                    <div class="ind-vb-arrow">→</div>
                </div>
                <div class="ind-vb-row">
                    <div class="ind-vb-num">03 — Energy</div>
                    <div class="ind-vb-name">Solar &amp; <em>Clean Tech</em></div>
                    <div class="ind-vb-desc">Corporate brochures, site installation photo/video shoots, lead generation SEO, and direct telecaller conversion pipelines.</div>
                    <div class="ind-vb-arrow">→</div>
                </div>
                <div class="ind-vb-row">
                    <div class="ind-vb-num">04 — Education</div>
                    <div class="ind-vb-name">Education &amp; <em>Academies</em></div>
                    <div class="ind-vb-desc">Campus media shoots, social media branding, fast web applications, and admission helpline desk management.</div>
                    <div class="ind-vb-arrow">→</div>
                </div>
                <div class="ind-vb-row">
                    <div class="ind-vb-num">05 — Retail</div>
                    <div class="ind-vb-name">E-<em>Commerce &amp; D2C</em></div>
                    <div class="ind-vb-desc">Product catalog photoshoots, brand packaging designs, high-speed online stores, and organic social media growth.</div>
                    <div class="ind-vb-arrow">→</div>
                </div>
                <div class="ind-vb-row">
                    <div class="ind-vb-num">06 — Hospitality</div>
                    <div class="ind-vb-name">Food &amp; <em>Hospitality</em></div>
                    <div class="ind-vb-desc">Food shoot reels, restaurant branding, interactive online menus, and local SEO ranking optimization.</div>
                    <div class="ind-vb-arrow">→</div>
                </div>
                <div class="ind-vb-row">
                    <div class="ind-vb-num">07 — Corporate</div>
                    <div class="ind-vb-name">B2B &amp; <em>Enterprises</em></div>
                    <div class="ind-vb-desc">Professional corporate identity kits, testimonial video shoots, high-authority web solutions, and B2B tele-outreach.</div>
                    <div class="ind-vb-arrow">→</div>
                </div>
                <div class="ind-vb-row">
                    <div class="ind-vb-num">08 — Travel</div>
                    <div class="ind-vb-name">Travel &amp; <em>Tourism</em></div>
                    <div class="ind-vb-desc">Destination visual content shoots, booking website development, and social media campaigns built for seasonal bookings.</div>
                    <div class="ind-vb-arrow">→</div>
                </div>
            </div>
        </div>
    </section>

    <!-- INDUSTRIES — Tabs + Feature Card (final pick) -->
    <section class="ind-vc" id="industries">
        <div class="ind-vc-inner">
            <div class="ind-vc-head">
                <div class="ind-eyebrow" style="color:var(--amber)">Industries We Serve</div>
                <h2 class="ind-vb-h">Where <span class="brand-mark">Bhavi Creations</span> <em>Delivers.</em></h2>
            </div>
            <div class="ind-vc-tabs" id="indVcTabs">
                <button class="ind-vc-tab on" data-i="0">Real Estate</button>
                <button class="ind-vc-tab" data-i="1">Healthcare</button>
                <button class="ind-vc-tab" data-i="2">Solar Energy</button>
                <button class="ind-vc-tab" data-i="3">Education</button>
                <button class="ind-vc-tab" data-i="4">E-Commerce</button>
                <button class="ind-vc-tab" data-i="5">Food &amp; Hospitality</button>
                <button class="ind-vc-tab" data-i="6">B2B &amp; Corporate</button>
                <button class="ind-vc-tab" data-i="7">Travel &amp; Tourism</button>
            </div>
            <div class="ind-vc-feature" id="indVcFeature"></div>
        </div>
    </section>

    <!-- REVIEWS -->
    <section class="reviews-section" id="reviews">
        <div class="reviews-inner">
            <div class="reviews-head">
                <div class="section-eyebrow">Client Reviews</div>
                <h2 class="section-h2">What Our Clients Say</h2>
                <p class="section-sub" style="margin:0 auto;max-width:480px">Real results, real clients — in their own words.</p>
            </div>

            <!-- VIDEO TESTIMONIALS -->
            <!-- <div class="rev-videos">
                <p class="rev-videos-line">Don't take our word for it — <em>hear theirs</em>.</p>
                <div class="rev-videos-grid">
                    <div class="rev-video">
                        <div class="rev-video-frame">
                            <iframe src="https://www.youtube-nocookie.com/embed/09VGNkhq_Hw?rel=0&modestbranding=1"
                                title="Client testimonial — Dr. Sharanya, The Gyn Next Door"
                                loading="lazy" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="rev-video-cap"><strong>Dr. Sharanya</strong><span class="dot">·</span>The Gyn Next Door</div>
                    </div>
                    <div class="rev-video">
                        <div class="rev-video-frame">
                            <iframe src="https://www.youtube-nocookie.com/embed/MQeb8n79g3c?rel=0&modestbranding=1"
                                title="Client testimonial — Bhargav, Homiz Realty LLP"
                                loading="lazy" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="rev-video-cap"><strong>Bhargav</strong><span class="dot">·</span>Homiz Realty LLP</div>
                    </div>
                </div>
            </div> -->

            <div class="reviews-grid">
                <div class="rev-card reveal">
                    <div class="rev-stars"><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span></div>
                    <div class="rev-quote">I have tried quite a few marketing agencies in last 12 years. Bhavi Creations stands out in their commitment, they are open for suggestions and also give results. First time, I feel, I can trust them and in safe hands.
                        Highly recommend their services.</div>
                    <div class="rev-author">
                        <div class="rev-av av1">SS</div>
                        <div>
                            <div class="rev-name">Dr Sunil Sathyanarayana</div>
                            <div class="rev-role">Care 'n' concern Dental Family Clinic Doctor</div>
                        </div>
                        <div class="rev-src">Google</div>
                    </div>
                </div>
                <div class="rev-card reveal d1">
                    <div class="rev-stars"><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span></div>
                    <div class="rev-quote">"I am using their service for marketing from last 3 years and Iam very happy with their work and sincerity in delivering good results on time.</div>
                    <div class="rev-author">
                        <div class="rev-av av2">KR</div>
                        <div>
                            <div class="rev-name">kiran raju</div>
                            <div class="rev-role">Srinivasa Multispeciality Dental Hospital Doctor</div>
                        </div>
                        <div class="rev-src">Google</div>
                    </div>
                </div>
                <div class="rev-card reveal d2">
                    <div class="rev-stars"><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span></div>
                    <div class="rev-quote">"Designs are good and response is quick and overall Experience with them is 🙂</div>
                    <div class="rev-author">
                        <div class="rev-av av3">SS</div>
                        <div>
                            <div class="rev-name">sowmya manasa</div>
                            <div class="rev-role">Dermatologist In Kakinada</div>
                        </div>
                        <div class="rev-src">Google</div>
                    </div>
                </div>
                <div class="rev-card reveal">
                    <div class="rev-stars"><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span></div>
                    <div class="rev-quote">"I would like to give thanks to Bhavi Creations Pvt Ltd and They have done a good job regarding my website building and with a Respective manner and all the team I appreciate they have good communication and Best skills and the CEO really Good person and anytime His response and explanation is excellent..</div>
                    <div class="rev-author">
                        <div class="rev-av av4">PD</div>
                        <div>
                            <div class="rev-name">pastor davidpaul</div>
                            <div class="rev-role">Client</div>
                        </div>
                        <div class="rev-src">Google</div>
                    </div>
                </div>
                <div class="rev-card reveal d1">
                    <div class="rev-stars"><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span></div>
                    <div class="rev-quote">"Quick and fast response.with in 1hour they delivered voice over script and audio for outdoor marketing
                    </div>
                    <div class="rev-author">
                        <div class="rev-av av5">SS</div>
                        <div>
                            <div class="rev-name">Subha Sangram</div>
                            <div class="rev-role">Client</div>
                        </div>
                        <div class="rev-src">Google</div>
                    </div>
                </div>
                <div class="rev-card reveal d2">
                    <div class="rev-stars"><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span><span class="rev-star">★</span></div>
                    <div class="rev-quote">"Excellent team work and With in a time I got my website done and good communication with clarification of every work the design and templets and compose the way build the website is very satisfying and I Thank you CEO for uncompromising works and excellent deeds .. </div>
                    <div class="rev-author">
                        <div class="rev-av av6">PD</div>
                        <div>
                            <div class="rev-name">palivela davidpael</div>
                            <div class="rev-role">Client</div>
                        </div>
                        <div class="rev-src">Google</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CLIENTS -->
    <!-- <section class="clients-section" id="clients">
        <div class="clients-inner">
            <div class="clients-head">
                <div>
                    <div class="section-eyebrow reveal">Trusted By India's Best</div>
                    <h2 class="section-h2 reveal d1">India's Biggest<br>Real-Estate Brands.</h2>
                </div>
                <p class="section-sub reveal d2" style="max-width:290px;text-align:right">From luxury residential to landmark commercial — our campaigns move markets.</p>
            </div>
            <div class="logos-row">
                <div class="logos-track">
                    <div class="logo-chip">
                        <div class="logo-icon"><img src="logos/godrej%20logo.jpg" alt="Godrej Properties"></div><span class="logo-name">Godrej Properties</span>
                    </div>
                    <div class="logo-chip">
                        <div class="logo-icon"><img src="logos/prestige%20logo.jpg" alt="Prestige Group"></div><span class="logo-name">Prestige Group</span>
                    </div>
                    <div class="logo-chip">
                        <div class="logo-icon"><img src="logos/mahindra%20lifespace%20logo.webp" alt="Mahindra Lifespace"></div><span class="logo-name">Mahindra Lifespace</span>
                    </div>
                    <div class="logo-chip">
                        <div class="logo-icon"><img src="logos/lodha%20group.jpg" alt="Lodha Group"></div><span class="logo-name">Lodha Group</span>
                    </div>
                    <div class="logo-chip">
                        <div class="logo-icon"><img src="logos/sattva%20developer.webp" alt="Sattva Group"></div><span class="logo-name">Sattva Group</span>
                    </div>
                    <div class="logo-chip">
                        <div class="logo-icon"><img src="logos/bridage%20logo.jpg" alt="Brigade Enterprises"></div><span class="logo-name">Brigade Enterprises</span>
                    </div>
                    <div class="logo-chip">
                        <div class="logo-icon"><img src="logos/shobha%20developer.webp" alt="Sobha Developers"></div><span class="logo-name">Sobha Developers</span>
                    </div>
                    <div class="logo-chip">
                        <div class="logo-icon"><img src="logos/adani_realty_logo.jpeg" alt="Adani Realty"></div><span class="logo-name">Adani Realty</span>
                    </div>
                    dup for seamless marquee
                    <div class="logo-chip">
                        <div class="logo-icon"><img src="logos/godrej%20logo.jpg" alt="Godrej Properties"></div><span class="logo-name">Godrej Properties</span>
                    </div>
                    <div class="logo-chip">
                        <div class="logo-icon"><img src="logos/prestige%20logo.jpg" alt="Prestige Group"></div><span class="logo-name">Prestige Group</span>
                    </div>
                    <div class="logo-chip">
                        <div class="logo-icon"><img src="logos/mahindra%20lifespace%20logo.webp" alt="Mahindra Lifespace"></div><span class="logo-name">Mahindra Lifespace</span>
                    </div>
                    <div class="logo-chip">
                        <div class="logo-icon"><img src="logos/lodha%20group.jpg" alt="Lodha Group"></div><span class="logo-name">Lodha Group</span>
                    </div>
                    <div class="logo-chip">
                        <div class="logo-icon"><img src="logos/sattva%20developer.webp" alt="Sattva Group"></div><span class="logo-name">Sattva Group</span>
                    </div>
                    <div class="logo-chip">
                        <div class="logo-icon"><img src="logos/bridage%20logo.jpg" alt="Brigade Enterprises"></div><span class="logo-name">Brigade Enterprises</span>
                    </div>
                    <div class="logo-chip">
                        <div class="logo-icon"><img src="logos/shobha%20developer.webp" alt="Sobha Developers"></div><span class="logo-name">Sobha Developers</span>
                    </div>
                    <div class="logo-chip">
                        <div class="logo-icon"><img src="logos/adani_realty_logo.jpeg" alt="Adani Realty"></div><span class="logo-name">Adani Realty</span>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- CTA SECTION WITH EMAIL INTEGRATION -->
    <section class="cta-light" id="contact" id="#landing-page-contact">
        <div class="cta-light-inner">
            <div class="cta-robot-wrap" aria-hidden="true">
                <img class="cta-robot" src="./assests/images/robot-cta.webp" alt="Bhavi Creations Assistant" width="344" height="699" decoding="async" loading="lazy">
            </div>
            <div class="cta-grid">
                <div class="reveal">
                    <div class="cta-l-eyebrow">Let's Connect</div>
                    <h2 class="cta-l-title">Ready to <em>Scale Your Brand?</em></h2>
                    <p class="cta-l-lead">Bring us your vision — whether it's custom shoots, full-stack web development, targeted SEO, or lead converting telecalling systems — and we will build the ecosystem to get you there.</p>
                    <div class="cta-l-actions">
                        <a class="cta-l-btn-secondary" href="mailto:info@bhavicreations.com">info@bhavicreations.com</a>
                    </div>
                </div>
                <div class="cta-form-card reveal d2">
                    <div class="cta-form-eyebrow">— Tell us about your project</div>
                    <div class="cta-form-h">Get a <em>Free</em> Strategy Call.</div>

                    <form class="cta-form cta-form-fields" id="ctaFormFields" action="send_cta.php" method="POST" novalidate>
                        <!-- Anti-Spam Honeypot Fields -->
                        <input class="f-honey" type="text" name="website" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px;height:0;width:0;opacity:0;pointer-events:none">
                        <input class="f-honey" type="text" name="nickname" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px;height:0;width:0;opacity:0;pointer-events:none">
                        <input type="hidden" name="_t" id="ctaFormT">
                        <input type="hidden" name="source" value="Bhavi Creations Homepage">

                        <div class="cta-field">
                            <label for="ctaName">Full Name</label>
                            <input id="ctaName" name="name" type="text" placeholder="e.g. Anish Kumar" required>
                        </div>
                        <div class="cta-field">
                            <label for="ctaEmail">Email Address</label>
                            <input id="ctaEmail" name="email" type="email" placeholder="you@company.com" required>
                        </div>
                        <div class="cta-field">
                            <label for="ctaPhone">Phone Number</label>
                            <input id="ctaPhone" name="phone" type="tel" placeholder="+91 98765 43210" required>
                        </div>
                        <div class="cta-field">
                            <label for="ctaService">Required Service</label>
                            <select id="ctaService" name="service" style="width:100%;padding:12px;border-radius:8px;border:1px solid #ccc;margin-top:4px;" required>
                                <option value="" disabled selected>Select a Service</option>
                                <option value="Web Development & Design">Web Development &amp; Design</option>
                                <option value="Custom Media & Video Shoots">Custom Media &amp; Video Shoots</option>
                                <option value="SEO & Social Media Marketing">SEO &amp; Social Media Marketing</option>
                                <option value="Dedicated Telecalling Services">Dedicated Telecalling Services</option>
                                <option value="Complete Brand Identity">Complete Brand Identity</option>
                            </select>
                        </div>
                        <div class="cta-field">
                            <label for="ctaReq">Project Details</label>
                            <textarea id="ctaReq" name="message" placeholder="Tell us about your requirements, timeline, or business goals..." required></textarea>
                        </div>

                        <div class="cta-form-err" id="ctaFormErr" style="display:none;background:#fef2f2;border:1px solid #fecaca;color:#b91c1c;padding:9px 12px;border-radius:8px;font-size:.78rem;margin-bottom:10px;line-height:1.4"></div>

                        <button class="cta-form-submit" type="submit" id="ctaFormSubmit">Send Enquiry <span>→</span></button>
                        <div class="cta-form-foot">Or email us directly at <a href="mailto:info@bhavicreations.com">info@bhavicreations.com</a></div>
                    </form>

                    <div class="cta-form-success" id="ctaFormSuccess" style="display:none;">
                        <div class="check">✓</div>
                        <div class="cta-form-success-title">Thank You!</div>
                        <div class="cta-form-success-sub">Your message has been delivered. Expect a prompt response from <strong>info@bhavicreations.com</strong> within 24 hours.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include EmailJS Library (Place before closing </body> tag) -->
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>


    <!-- FOOTER (shared across pages) -->
    <footer class="wf-footer">
        <div class="wf-footer-inner">
            <div class="wf-foot-top">
                <div class="wf-foot-brand">
                    <a href="/" class="wf-foot-logo" aria-label="Webfluence"><img src="assests/images/Bhavi_Creations/best_digital_marketing_white_logo_bhavi_creations.webp " alt="Webfluence" style="width:250px; height:auto;"></a>
                    <p class="wf-foot-tag">kakinada's <em>finest</em> performance &amp; brand marketing studio. Built for ambitious teams since 2012.</p>
                    <!-- <div class="wf-foot-news">
                        <div class="wf-foot-news-h">— The Blog, in your inbox</div>
                        <form class="wf-foot-news-f" onsubmit="event.preventDefault();this.querySelector('input').value='Subscribed.';">
                            <input type="email" placeholder="you@company.com" required>
                            <button type="submit" aria-label="Subscribe">→</button>
                        </form>
                    </div>
                    <div class="wf-foot-socials">
                        <a class="wf-soc" href="https://www.youtube.com/@Webfluenceofficial" target="_blank" rel="noopener" aria-label="YouTube"><svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23 12s0-3.6-.46-5.34a2.78 2.78 0 0 0-1.95-1.95C18.84 4.25 12 4.25 12 4.25s-6.84 0-8.59.46a2.78 2.78 0 0 0-1.95 1.95C1 8.4 1 12 1 12s0 3.6.46 5.34a2.78 2.78 0 0 0 1.95 1.95c1.75.46 8.59.46 8.59.46s6.84 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.95C23 15.6 23 12 23 12zM9.75 15.42V8.58L15.5 12l-5.75 3.42z" />
                            </svg></a>
                        <a class="wf-soc" href="https://www.linkedin.com/company/webfluence-marketing-solutions/" target="_blank" rel="noopener" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14zM8.34 9.5H5.67v9h2.67v-9zM7 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11.33 13v-5.06c0-2.62-1.4-3.84-3.27-3.84-1.5 0-2.18.83-2.55 1.41V9.5h-2.66v9h2.66v-4.97c0-.74.13-1.46 1.05-1.46s1.06.85 1.06 1.51v4.92h2.71z" />
                            </svg></a>
                        <a class="wf-soc" href="https://www.instagram.com/webfluencemarketing/" target="_blank" rel="noopener" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.42.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.8-.25-2.23-.41a3.7 3.7 0 0 1-1.38-.9 3.7 3.7 0 0 1-.9-1.38c-.16-.42-.36-1.06-.41-2.23C2.17 15.58 2.16 15.2 2.16 12s.01-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.16 1.06-.36 2.23-.41C8.42 2.17 8.8 2.16 12 2.16zm0 1.8c-3.16 0-3.5.01-4.74.07-1.07.05-1.65.23-2.04.38-.51.2-.88.44-1.26.82-.38.38-.62.75-.82 1.26-.15.39-.33.97-.38 2.04-.06 1.24-.07 1.58-.07 4.74s.01 3.5.07 4.74c.05 1.07.23 1.65.38 2.04.2.51.44.88.82 1.26.38.38.75.62 1.26.82.39.15.97.33 2.04.38 1.24.06 1.58.07 4.74.07s3.5-.01 4.74-.07c1.07-.05 1.65-.23 2.04-.38.51-.2.88-.44 1.26-.82.38-.38.62-.75.82-1.26.15-.39.33-.97.38-2.04.06-1.24.07-1.58.07-4.74s-.01-3.5-.07-4.74c-.05-1.07-.23-1.65-.38-2.04-.2-.51-.44-.88-.82-1.26-.38-.38-.75-.62-1.26-.82-.39-.15-.97-.33-2.04-.38C15.5 3.97 15.16 3.96 12 3.96zm0 3.07a4.97 4.97 0 1 1 0 9.94 4.97 4.97 0 0 1 0-9.94zm0 1.8a3.17 3.17 0 1 0 0 6.34 3.17 3.17 0 0 0 0-6.34zm5.16-2.34a1.16 1.16 0 1 1 0 2.32 1.16 1.16 0 0 1 0-2.32z" />
                            </svg></a>
                        <a class="wf-soc" href="https://www.facebook.com/p/Webfluence-Marketing-Solutions-61551103613640/" target="_blank" rel="noopener" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M22 12a10 10 0 1 0-11.56 9.88v-7H8.08V12h2.36V9.92c0-2.33 1.39-3.62 3.5-3.62 1.02 0 2.08.18 2.08.18v2.29h-1.17c-1.16 0-1.52.72-1.52 1.46V12h2.59l-.41 2.88h-2.18v7A10 10 0 0 0 22 12z" />
                            </svg></a>
                    </div> -->
                </div>

                <div class="wf-foot-cols">
                    <div class="wf-foot-col">
                        <div class="wf-foot-h">Services</div>
                        <a href="#services" data-svc="0">Google Ads &amp; PPC</a>
                        <a href="#services" data-svc="1">Meta &amp; Instagram</a>
                        <a href="#services" data-svc="2">LinkedIn &amp; YouTube</a>
                        <a href="#services" data-svc="3">Organic SEO</a>
                        <a href="#services" data-svc="4">Creative &amp; Branding</a>
                        <a href="#services" data-svc="5">Analytics</a>
                        <a href="#services" data-svc="6">Web &amp; Landing</a>
                        <a href="#services" data-svc="7">CRO &amp; Automation</a>
                    </div>
                    <div class="wf-foot-col">
                        <div class="wf-foot-h">Industries</div>
                        <a href="#industries" data-ind="0">Real Estate</a>
                        <a href="#industries" data-ind="1">Healthcare</a>
                        <a href="#industries" data-ind="2">Fintech</a>
                        <a href="#industries" data-ind="3">Travel &amp; Hospitality</a>
                        <a href="#industries" data-ind="4">B2B &amp; SaaS</a>
                        <a href="#industries" data-ind="5">Food &amp; D2C</a>
                        <a href="#industries" data-ind="6">EdTech</a>
                        <a href="#industries" data-ind="7">E-Commerce</a>
                    </div>
                    <div class="wf-foot-col">
                        <div class="wf-foot-h">Company</div>
                        <a href="about.html">About Us</a>
                        <a href="team.html">Our Team</a>
                        <a href="contact.html">Contact</a>
                        <a href="#approach">How We Work</a>
                        <a href="the-brief.html">Blog</a>
                        <a href="pulse.html">Updates</a>
                        <a href="privacy.html">Privacy Policy</a>
                    </div>
                    <div class="wf-foot-col">
                        <div class="wf-foot-h">Studio</div>
                        <div class="wf-foot-addr">
                            Plot no 28, RTO Office Rd, behind lazza icecream shop, Ranga Rao Nagar, Kakinada, Vakalapudi, Andhra Pradesh 533003
                        </div>
                        <a class="wf-foot-phone" href="tel:+9196423 43434">+91 96423 43434</a>
                        <a class="wf-foot-mail" href="mailto:bhavicreations2022@gmail.com">bhavicreations2022@gmail.com</a>
                        <a class="wf-foot-wa" href="https://wa.me/919642343434" target="_blank" rel="noopener">WhatsApp →</a>
                    </div>
                </div>
            </div>

            <div class="wf-foot-bottom">
                <div class="wf-foot-copy">© 2026 Webfluence Marketing Solutions Pvt. Ltd. · All rights reserved.</div>
                <div class="wf-foot-mini">
                    <a href="privacy.html">Privacy</a>
                    <span class="dot">·</span>
                    <a href="privacy.html#terms">Terms</a>
                    <span class="dot">·</span>
                    <a href="privacy.html#cookies">Cookies</a>
                    <span class="dot">·</span>
                    <span>Crafted in kakinada</span>
                </div>
            </div>
        </div>
    </footer>



    <!-- PREMIUM POPUP — Get Free Strategy -->
    <div class="modal-bg" id="modalBg" onclick="handleBgClick(event)" aria-hidden="true">
        <div class="modal" role="dialog" aria-modal="true" aria-labelledby="modalH">
            <aside class="modal-brand" aria-hidden="true">
                <div>
                    <div class="mb-eyebrow">Free Strategy Call</div>
                    <h2 class="mb-h">Let's chart your <em>growth</em> together.</h2>
                </div>
                <ul class="mb-list">
                    <li class="mb-li"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 6L9 17l-5-5" />
                        </svg><span>30-min session with a senior strategist — no juniors, no scripts.</span></li>
                    <li class="mb-li"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 6L9 17l-5-5" />
                        </svg><span>Reply within <strong>4 business hours</strong> — we don't ghost.</span></li>
                    <li class="mb-li"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 6L9 17l-5-5" />
                        </svg><span>Zero obligation. Walk away with a written action plan either way.</span></li>
                    <li class="mb-li"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 6L9 17l-5-5" />
                        </svg><span>30+ ambitious brands. <strong>4.9★ rating.</strong> 12+ years in kakinada.</span></li>
                </ul>
                <div class="mb-foot"><strong>+91 9642343434</strong> · bhavicreations2022@gmail.com</div>
            </aside>

            <div class="modal-form-pane">
                <button class="modal-x" type="button" onclick="closeQuote()" aria-label="Close">✕</button>

                <div class="f-fields" id="fFields">
                    <div class="m-tag">Talk to Us</div>
                    <h2 class="m-h2" id="modalH">Tell us about <em>your business</em>.</h2>
                    <p class="m-sub">A few quick details — we'll come back with a real plan, not a sales pitch.</p>

                    <div class="f-err" id="fErr"></div>



                    <form class="cta-form cta-form-fields" id="popForm" id="ctaFormFields" action="send_cta.php" method="POST" novalidate>
                        <!-- Anti-Spam Honeypot Fields -->
                        <input class="f-honey" type="text" name="website" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px;height:0;width:0;opacity:0;pointer-events:none">
                        <input class="f-honey" type="text" name="nickname" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px;height:0;width:0;opacity:0;pointer-events:none">
                        <input type="hidden" name="_t" id="ctaFormT">
                        <input type="hidden" name="source" value="Bhavi Creations Homepage">

                        <div class="cta-field">
                            <label for="ctaName">Full Name</label>
                            <input id="ctaName" name="name" type="text" placeholder="e.g. Anish Kumar" required>
                        </div>
                        <div class="cta-field">
                            <label for="ctaEmail">Email Address</label>
                            <input id="ctaEmail" name="email" type="email" placeholder="you@company.com" required>
                        </div>
                        <div class="cta-field">
                            <label for="ctaPhone">Phone Number</label>
                            <input id="ctaPhone" name="phone" type="tel" placeholder="+91 98765 43210" required>
                        </div>
                        <div class="cta-field">
                            <label for="ctaService">Required Service</label>
                            <select id="ctaService" name="service" style="width:100%;padding:12px;border-radius:8px;border:1px solid #ccc;margin-top:4px;" required>
                                <option value="" disabled selected>Select a Service</option>
                                <option value="Web Development & Design">Web Development &amp; Design</option>
                                <option value="Custom Media & Video Shoots">Custom Media &amp; Video Shoots</option>
                                <option value="SEO & Social Media Marketing">SEO &amp; Social Media Marketing</option>
                                <option value="Dedicated Telecalling Services">Dedicated Telecalling Services</option>
                                <option value="Complete Brand Identity">Complete Brand Identity</option>
                            </select>
                        </div>
                        <div class="cta-field">
                            <label for="ctaReq">Project Details</label>
                            <textarea id="ctaReq" name="message" placeholder="Tell us about your requirements, timeline, or business goals..." required></textarea>
                        </div>

                        <div class="cta-form-err" id="ctaFormErr" style="display:none;background:#fef2f2;border:1px solid #fecaca;color:#b91c1c;padding:9px 12px;border-radius:8px;font-size:.78rem;margin-bottom:10px;line-height:1.4"></div>

                        <button class="cta-form-submit" type="submit" id="ctaFormSubmit">Send Enquiry <span>→</span></button>
                        <div class="cta-form-foot">Or email us directly at <a href="mailto:info@bhavicreations.com">info@bhavicreations.com</a></div>
                    </form>
                </div>

                <div class="f-success" id="fSuccess" role="status" aria-live="polite">
                    <div class="f-success-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 6L9 17l-5-5" />
                        </svg></div>
                    <h3>You're <em>in</em>. Talk soon.</h3>
                    <p>A senior strategist will call you within <strong style="color:var(--amber)">4 business hours</strong> to set up your free 30-minute strategy session.</p>
                    <div class="f-success-meta"><span>Call <strong>+91 9642343434</strong></span><span>Mail <strong>bhavicreations2022@gmail.com</strong></span></div>
                </div>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
        /* ── PLATFORM DATA ── */
        const platforms = [{
                word: 'Google Ads.',
                sub: 'Your ads at the top of search — the moment your ideal customer is ready to buy.',
                badge: 'PPC & Search',
                headline: 'Top of Search,<br>Every Time',
                statNum: '4.8×',
                statLabel: 'Average ROAS delivered',
                points: [{
                        icon: '🎯',
                        text: 'Search, Shopping & YouTube campaigns'
                    },
                    {
                        icon: '📊',
                        text: '4.8× avg. return on ad spend'
                    },
                    {
                        icon: '⚡',
                        text: 'Campaigns live in 72 hours'
                    },
                    {
                        icon: '🔁',
                        text: 'Continuous A/B optimisation'
                    }
                ]
            },
            {
                word: 'Social Media.',
                sub: 'Scroll-stopping Meta and Instagram campaigns that build audiences and drive conversions at scale.',
                badge: 'Meta & Instagram',
                headline: 'Scroll-Stopping<br>Campaigns',
                statNum: '+340%',
                statLabel: 'Average lead volume increase',
                points: [{
                        icon: '📱',
                        text: 'Meta, Instagram & Facebook Ads'
                    },
                    {
                        icon: '🎬',
                        text: 'Reels & Stories that convert'
                    },
                    {
                        icon: '👥',
                        text: 'Lookalike & retargeting audiences'
                    },
                    {
                        icon: '📈',
                        text: '340% avg. lead volume increase'
                    }
                ]
            },
            {
                word: 'Organic SEO.',
                sub: 'Rank #1 for your highest-value keywords and own your market — with results that compound every month.',
                badge: 'Search Engine Optimisation',
                headline: 'Rank #1,<br>Stay There',
                statNum: '8.7×',
                statLabel: 'Organic traffic growth delivered',
                points: [{
                        icon: '🔍',
                        text: 'On-page & technical SEO'
                    },
                    {
                        icon: '🌐',
                        text: 'Local SEO for kakinada & India'
                    },
                    {
                        icon: '✍️',
                        text: 'Content strategy & link building'
                    },
                    {
                        icon: '📈',
                        text: 'Results that compound monthly'
                    }
                ]
            },
            {
                word: 'LinkedIn & YouTube.',
                sub: 'Reach decision-makers on LinkedIn and build lasting brand authority with YouTube — built for B2B and high-ticket deals.',
                badge: 'B2B & Video Marketing',
                headline: 'Authority in<br>Every Frame',
                statNum: '5×',
                statLabel: 'B2B pipeline growth in 6 months',
                points: [{
                        icon: '💼',
                        text: 'LinkedIn ads & thought leadership'
                    },
                    {
                        icon: '🎥',
                        text: 'YouTube pre-roll & brand films'
                    },
                    {
                        icon: '🏢',
                        text: 'Reach C-suite decision makers'
                    },
                    {
                        icon: '📊',
                        text: 'B2B pipeline grown 5× in 6 months'
                    }
                ]
            },
            {
                word: 'App Store.',
                sub: 'Drive downloads, improve ratings, and keep users coming back — with data-led ASO and app install campaigns.',
                badge: 'App Store Optimisation',
                headline: 'More Downloads,<br>Better Retention',
                statNum: '60%',
                statLabel: 'Lower cost per install achieved',
                points: [{
                        icon: '📲',
                        text: 'App Store & Google Play ASO'
                    },
                    {
                        icon: '📣',
                        text: 'App install & UAC campaigns'
                    },
                    {
                        icon: '⭐',
                        text: 'Review & rating improvement'
                    },
                    {
                        icon: '🔄',
                        text: 'App engagement & re-engagement'
                    }
                ]
            },
            {
                word: 'E-Commerce.',
                sub: 'ROAS-obsessed campaigns across Google Shopping, Meta, and marketplaces that drive revenue at scale.',
                badge: 'Shopping & Marketplace',
                headline: 'More Sales,<br>Less Spend',
                statNum: '6.2×',
                statLabel: 'ROAS on top e-commerce accounts',
                points: [{
                        icon: '🛍️',
                        text: 'Google Shopping & Performance Max'
                    },
                    {
                        icon: '🔄',
                        text: 'Dynamic retargeting campaigns'
                    },
                    {
                        icon: '📦',
                        text: 'Amazon & marketplace ads'
                    },
                    {
                        icon: '💰',
                        text: '6.2× ROAS on top accounts'
                    }
                ]
            },
            {
                word: 'Branding.',
                sub: 'Strategic brand identity and creative systems that make your brand unforgettable across every touchpoint.',
                badge: 'Creative & Brand Strategy',
                headline: 'Brands That<br>Are Remembered',
                statNum: '2×',
                statLabel: 'Brand recall uplift measured',
                points: [{
                        icon: '🎨',
                        text: 'Brand identity & visual systems'
                    },
                    {
                        icon: '✏️',
                        text: 'Ad creatives & motion graphics'
                    },
                    {
                        icon: '📸',
                        text: 'Photography & video direction'
                    },
                    {
                        icon: '💡',
                        text: 'Brand strategy & positioning'
                    }
                ]
            },
            {
                word: 'Performance Marketing.',
                sub: 'Full-funnel performance — awareness to retention — engineered against ROAS, not vanity. Every rupee earns its keep.',
                badge: 'Full-Funnel Performance',
                headline: 'Performance That<br>Compounds',
                statNum: '4.8×',
                statLabel: 'Average ROAS delivered',
                points: [{
                        icon: '🎯',
                        text: 'Multi-channel performance strategy'
                    },
                    {
                        icon: '📊',
                        text: 'Attribution & MMM modelling'
                    },
                    {
                        icon: '⚡',
                        text: 'Always-on creative testing'
                    },
                    {
                        icon: '🔁',
                        text: 'Weekly optimisation cadence'
                    }
                ]
            },
            {
                word: 'Lead Generation.',
                sub: 'High-intent leads delivered to your sales team — pipeline-grade conversions, not vanity form-fills.',
                badge: 'B2B & Demand Gen',
                headline: 'Pipeline,<br>Not Form-Fills',
                statNum: '+340%',
                statLabel: 'Avg. lead volume increase',
                points: [{
                        icon: '🎯',
                        text: 'Lead-form ads & landing pages'
                    },
                    {
                        icon: '🤝',
                        text: 'CRM & SDR enablement'
                    },
                    {
                        icon: '📞',
                        text: 'Click-to-WhatsApp & call tracking'
                    },
                    {
                        icon: '🔄',
                        text: 'Lifecycle nurture flows'
                    }
                ]
            }
        ];

        /* ── ROTATING PLATFORM ── */
        let current = 0;
        let rotating = true;
        const wordEl = document.getElementById('platform-word');
        const subEl = document.getElementById('hero-sub');
        const curtainArea = document.getElementById('heroCurtain');

        function updatePanel(idx) {
            const p = platforms[idx];
            document.getElementById('cu-badge').textContent = p.badge;
            document.getElementById('cu-stat-num').textContent = p.statNum;
            document.getElementById('cu-stat-label').textContent = p.statLabel;
            document.getElementById('cu-headline').innerHTML = p.headline;
            document.getElementById('cu-icon-1').textContent = p.points[0].icon;
            document.getElementById('cu-text-1').textContent = p.points[0].text;
            document.getElementById('cu-icon-2').textContent = p.points[2 % p.points.length].icon;
            document.getElementById('cu-text-2').textContent = p.points[2 % p.points.length].text;
            document.getElementById('cu-icon-3').textContent = p.points[3 % p.points.length].icon;
            document.getElementById('cu-text-3').textContent = p.points[3 % p.points.length].text;
        }

        function rotateTo(idx) {
            // 1) Curtains roll up first
            curtainArea.classList.remove('drop');
            // 2) Then line retracts
            setTimeout(() => curtainArea.classList.remove('draw'), 280);
            // 3) Word fades out (in parallel)
            wordEl.style.opacity = '0';
            wordEl.style.transform = 'translateY(-14px)';
            subEl.style.opacity = '0';

            // 4) Swap content while hidden, then bring it all back
            setTimeout(() => {
                current = idx;
                wordEl.textContent = platforms[current].word;
                subEl.textContent = platforms[current].sub;
                updatePanel(current);

                // word & sub fade in
                wordEl.style.opacity = '1';
                wordEl.style.transform = 'translateY(0)';
                subEl.style.opacity = '1';

                // line draws after word settles
                setTimeout(() => curtainArea.classList.add('draw'), 250);
                // curtains drop after line is mostly drawn
                setTimeout(() => curtainArea.classList.add('drop'), 700);
            }, 950);
        }

        // Smooth fades for word and sub
        wordEl.style.transition = 'opacity .55s ease, transform .55s ease';
        subEl.style.transition = 'opacity .55s ease';

        // Initial entrance
        window.addEventListener('load', () => {
            setTimeout(() => curtainArea.classList.add('draw'), 350);
            setTimeout(() => curtainArea.classList.add('drop'), 850);
        });

        // Auto-rotate (gives time for full out → in choreography + a hold)
        setInterval(() => {
            rotateTo((current + 1) % platforms.length);
        }, 7500);

        /* ── NAV ── */
        window.addEventListener('scroll', () => {
            const heroH = document.getElementById('hero').offsetHeight;
            document.getElementById('nav').classList.toggle('solid', window.scrollY > heroH * 0.7);
        }, {
            passive: true
        });

        /* ── SCROLL REVEAL ── */
        const io = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('in');
                    io.unobserve(e.target)
                }
            });
        }, {
            threshold: 0.1
        });
        document.querySelectorAll('.reveal').forEach(el => io.observe(el));

        /* steps-wrap sequential reveal */
        const stepsIO = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('in');
                    stepsIO.unobserve(e.target)
                }
            });
        }, {
            threshold: 0.25
        });
        document.querySelectorAll('.steps-wrap').forEach(el => stepsIO.observe(el));

        /* ── HOW WE WORK ── */
        const stepData = [{
                eyebrow: 'Step 01 of 04',
                title: 'Discovery & Audit',
                text: "A thorough deep-dive into your brand's digital footprint. We audit your ad accounts, dissect competitor strategies, and map your audience to surface every growth opportunity hiding in your market.",
                items: ['Google Ads & Meta account audit', 'SEO technical crawl', 'Competitor gap analysis', 'Audience persona mapping']
            },
            {
                eyebrow: 'Step 02 of 04',
                title: 'Strategy & Blueprint',
                text: 'A custom 90-day growth roadmap: channel mix, budget allocation, content calendar, and KPI targets built precisely for your business goals and the competitive landscape you operate in.',
                items: ['90-day growth roadmap', 'Channel & budget allocation', 'Content calendar creation', 'KPI targets & benchmarks']
            },
            {
                eyebrow: 'Step 03 of 04',
                title: 'Launch & Execute',
                text: 'We launch fast. Creatives live, campaigns active, tracking fully verified — all within 72 hours of strategy sign-off. Speed is a genuine competitive advantage we hand directly to you.',
                items: ['Campaign go-live within 72h', 'Creative production & testing', 'Full tracking & attribution setup', 'First-week performance review']
            },
            {
                eyebrow: 'Step 04 of 04',
                title: 'Optimise & Scale',
                text: 'Weekly A/B testing, audience refinements, bid adjustments — we never stop improving. Month over month, results compound, cost per acquisition drops, and the gap between you and competitors widens.',
                items: ['Weekly A/B testing cycles', 'Audience & bid optimisation', 'Monthly performance reviews', 'Scaling winning campaigns']
            }
        ];

        function setStep(idx, el) {
            document.querySelectorAll('.step-col').forEach(s => s.classList.remove('on'));
            el.classList.add('on');
            const d = stepData[idx];
            const det = document.getElementById('stepDetail');
            det.style.opacity = '0';
            det.style.transform = 'translateY(8px)';
            det.style.transition = 'opacity .3s,transform .3s';
            setTimeout(() => {
                document.getElementById('sd-eyebrow').textContent = d.eyebrow;
                document.getElementById('sd-title').textContent = d.title;
                document.getElementById('sd-text').textContent = d.text;
                document.getElementById('sd-items').innerHTML = d.items.map(i =>
                    `<div class="sd-item"><div class="sd-dot"></div><div class="sd-item-txt">${i}</div></div>`
                ).join('');
                det.style.opacity = '1';
                det.style.transform = 'translateY(0)';
                /* Mobile: scroll the description card into view so the user actually sees their click took effect */
                if (window.innerWidth <= 768) {
                    det.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            }, 280);
        }

        /* ── PREMIUM POPUP — open / close / submit ── */
        function openQuote() {
            const bg = document.getElementById('modalBg');
            bg.classList.add('open');
            bg.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
            /* time-trap stamp */
            const t = document.getElementById('popFormT');
            if (t) t.value = String(Math.floor(Date.now() / 1000));
            /* focus first real field for accessibility */
            setTimeout(() => {
                const f = document.querySelector('#popForm input[name="name"]');
                if (f) f.focus();
            }, 220);
        }

        function closeQuote() {
            const bg = document.getElementById('modalBg');
            bg.classList.remove('open');
            bg.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        function handleBgClick(e) {
            if (e.target === document.getElementById('modalBg')) closeQuote();
        }
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') closeQuote();
        });

        (function() {
            const form = document.getElementById('popForm');
            if (!form) return;
            const btn = document.getElementById('popSubmit');
            const err = document.getElementById('fErr');

            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                err.classList.remove('show');
                err.textContent = '';

                /* Required-field check */
                const name = form.name.value.trim();
                const email = form.email.value.trim();
                const phone = form.phone.value.trim();
                const message = form.message.value.trim();
                if (!name || !email || !phone || !message) {
                    err.textContent = 'Name, email, phone and goal are all required.';
                    err.classList.add('show');
                    return;
                }
                if (!/^\S+@\S+\.\S+$/.test(email)) {
                    err.textContent = 'That email address looks incomplete.';
                    err.classList.add('show');
                    return;
                }

                btn.classList.add('loading');
                btn.disabled = true;

                try {
                    const res = await fetch('form-handler.php', {
                        method: 'POST',
                        body: new FormData(form)
                    });
                    const data = await res.json().catch(() => ({}));
                    if (res.ok && data.ok) {
                        document.getElementById('fFields').classList.add('hide');
                        document.getElementById('fSuccess').classList.add('show');
                        if (window.wflTrackLead) wflTrackLead(); // Google Ads lead conversion
                    } else {
                        err.textContent = data.error || 'Could not send right now. Please email bhavicreations2022@gmail.com directly.';
                        err.classList.add('show');
                        btn.classList.remove('loading');
                        btn.disabled = false;
                    }
                } catch (_) {
                    err.textContent = 'Network hiccup — please try again or email bhavicreations2022@gmail.com.';
                    err.classList.add('show');
                    btn.classList.remove('loading');
                    btn.disabled = false;
                }
            });
        })();

        /* Footer service/industry links → scroll to section + activate the right tab */
        (function() {
            // Service links: data-svc="0..7"
            document.querySelectorAll('a[data-svc]').forEach(a => {
                a.addEventListener('click', e => {
                    e.preventDefault();
                    const idx = parseInt(a.dataset.svc, 10);
                    const target = document.getElementById('services');
                    if (target) target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    setTimeout(() => {
                        const items = document.querySelectorAll('#dcNav .dc-nav-item');
                        if (items[idx]) items[idx].click();
                    }, 350);
                });
            });
            // Industry links: data-ind="0..7"
            document.querySelectorAll('a[data-ind]').forEach(a => {
                a.addEventListener('click', e => {
                    e.preventDefault();
                    const idx = parseInt(a.dataset.ind, 10);
                    const target = document.getElementById('industries');
                    if (target) target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    setTimeout(() => {
                        const tabs = document.querySelectorAll('#indVcTabs .ind-vc-tab');
                        if (tabs[idx]) tabs[idx].click();
                    }, 350);
                });
            });
        })();

        /* Hero video — start as soon as possible, and pause when scrolled off-screen
           (a video decoding frames while off-screen is the main cause of scroll jank). */
        (function() {
            const v = document.getElementById('hero-video');
            const hero = document.getElementById('hero');
            if (!v) return;
            let inView = true;
            const tryPlay = () => {
                if (inView && !document.hidden) v.play().catch(() => {});
            };
            tryPlay();
            v.addEventListener('loadeddata', tryPlay, {
                once: true
            });
            document.addEventListener('visibilitychange', () => {
                document.hidden ? v.pause() : tryPlay();
            });

            if (hero && 'IntersectionObserver' in window) {
                new IntersectionObserver((entries) => {
                    inView = entries[0].isIntersecting;
                    inView ? tryPlay() : v.pause();
                }, {
                    threshold: 0.01
                }).observe(hero);
            }
        })();

        /* Industries — pill tabs + premium light feature card */
        (function() {
            const tabs = document.getElementById('indVcTabs');
            const feature = document.getElementById('indVcFeature');
            if (!tabs || !feature) return;
            const data = [{
                    n: '01',
                    name: 'Real',
                    italic: 'Estate',
                    icon: '🏘️',
                    desc: 'Luxury residential, commercial and plotted — we know the Indian property buyer journey end-to-end, from teaser launch to RERA-grade closures.',
                    stats: [{
                        n: '15+',
                        l: 'Brands'
                    }, {
                        n: '340%',
                        l: 'Avg. Lead Lift'
                    }, {
                        n: '4.8×',
                        l: 'ROAS'
                    }],
                    bullets: ['Launch & teaser campaigns', 'Site-visit conversion', 'Channel-partner enablement', 'Brochure-grade creative'],
                    clients: 'Godrej · Prestige · Lodha · Brigade · Sobha',
                    visualH: 'A category we built our <em>reputation</em> on.'
                },
                {
                    n: '02',
                    name: 'Healthcare',
                    italic: '',
                    icon: '🏥',
                    desc: 'Patient acquisition at the lowest cost per appointment for hospitals, multi-specialty clinics and diagnostic chains.',
                    stats: [{
                        n: '8+',
                        l: 'Hospitals'
                    }, {
                        n: '-58%',
                        l: 'Cost / Appt'
                    }, {
                        n: '12k+',
                        l: 'Leads / mo'
                    }],
                    bullets: ['Doctor & specialty ads', 'Lead-form micro-funnels', 'Retention & recall flows', 'Clinic location SEO'],
                    clients: 'Multi-specialty groups · Diagnostic chains · Wellness brands',
                    visualH: 'Patient trust, <em>compounded.</em>'
                },
                {
                    n: '03',
                    name: 'Fintech',
                    italic: '',
                    icon: '💳',
                    desc: 'Compliant, high-trust campaigns that cut through noise in competitive financial markets — credit, lending, wealth and insurance.',
                    stats: [{
                        n: '5+',
                        l: 'Fintechs'
                    }, {
                        n: '-42%',
                        l: 'CAC drop'
                    }, {
                        n: '2.6×',
                        l: 'Approval rate'
                    }],
                    bullets: ['Conversion-led storytelling', 'RBI / IRDAI-safe copy', 'LinkedIn ABM for B2B', 'Onboarding analytics'],
                    clients: 'Lending platforms · Wealth-tech · Insurance brokers',
                    visualH: 'Compliance-first, <em>conversion-led.</em>'
                },
                {
                    n: '04',
                    name: 'Travel &',
                    italic: 'Hospitality',
                    icon: '✈️',
                    desc: 'Visually-led campaigns tuned to seasonal demand that drive direct bookings, packages and repeat stays.',
                    stats: [{
                        n: '12+',
                        l: 'Properties'
                    }, {
                        n: '+62%',
                        l: 'Direct bookings'
                    }, {
                        n: '3.4×',
                        l: 'ROAS'
                    }],
                    bullets: ['OTA-bypass direct bookings', 'Seasonal package launches', 'Brand films & reels', 'Loyalty re-engagement'],
                    clients: 'Boutique resorts · Hotel chains · Tour operators',
                    visualH: 'From OTA-dependent to <em>direct.</em>'
                },
                {
                    n: '05',
                    name: 'B2B &',
                    italic: 'SaaS',
                    icon: '⚙️',
                    desc: 'High-value lead generation through LinkedIn, content engines and ABM for long-cycle enterprise deals.',
                    stats: [{
                        n: '10+',
                        l: 'B2B brands'
                    }, {
                        n: '5×',
                        l: 'Pipeline lift'
                    }, {
                        n: '18mo',
                        l: 'Avg. retainer'
                    }],
                    bullets: ['LinkedIn ABM', 'Content-led inbound', 'Webinar & case-study engines', 'Sales-marketing alignment'],
                    clients: 'Enterprise SaaS · IT services · Industrial B2B',
                    visualH: 'Pipeline, not just <em>impressions.</em>'
                },
                {
                    n: '06',
                    name: 'Food &',
                    italic: 'D2C',
                    icon: '🍽️',
                    desc: 'Build loyal customer bases and repeat-purchase loops for cloud kitchens, FMCG D2C brands and challenger consumer plays.',
                    stats: [{
                        n: '14+',
                        l: 'D2C brands'
                    }, {
                        n: '+220%',
                        l: 'Repeat orders'
                    }, {
                        n: '4.1×',
                        l: 'ROAS'
                    }],
                    bullets: ['Catalog & Shopping ads', 'Influencer + creator', 'Subscription & LTV plays', 'Retention CRM flows'],
                    clients: 'Cloud kitchens · FMCG D2C · Challenger food brands',
                    visualH: 'First order to <em>fanbase.</em>'
                },
                {
                    n: '07',
                    name: 'EdTech',
                    italic: '',
                    icon: '🎓',
                    desc: 'Course enrollments, admissions, and category authority in competitive education markets — schools, upskilling and tutoring.',
                    stats: [{
                        n: '9+',
                        l: 'Edu brands'
                    }, {
                        n: '-48%',
                        l: 'Cost / lead'
                    }, {
                        n: '2.8×',
                        l: 'Enrollment'
                    }],
                    bullets: ['Lead-form & call campaigns', 'Webinar funnels', 'Counsellor enablement', 'Brand-trust content'],
                    clients: 'K-12 · Higher-ed · Upskilling platforms',
                    visualH: 'Enrollment-first <em>storytelling.</em>'
                },
                {
                    n: '08',
                    name: 'E-',
                    italic: 'Commerce',
                    icon: '🛍️',
                    desc: 'ROAS-obsessed campaigns across Google Shopping, Meta and marketplaces — for category leaders and challengers alike.',
                    stats: [{
                        n: '18+',
                        l: 'Stores'
                    }, {
                        n: '6.2×',
                        l: 'ROAS'
                    }, {
                        n: '+340%',
                        l: 'Revenue'
                    }],
                    bullets: ['Performance Max & PMax', 'Dynamic retargeting', 'Amazon · Flipkart ads', 'Catalog & feed engineering'],
                    clients: 'Fashion · Beauty · Home · Electronics',
                    visualH: 'Where every rupee <em>earns its keep.</em>'
                }
            ];

            function render(i) {
                const s = data[i];
                feature.innerHTML = `
      <div class="ind-vc-content">
        <div class="ind-vc-num">Sector ${s.n} · India</div>
        <h3 class="ind-vc-name">${s.name} ${s.italic?'<em>'+s.italic+'</em>':''}</h3>
        <p class="ind-vc-desc">${s.desc}</p>
        <div class="ind-vc-stats">
          ${s.stats.map(st=>`<div class="ind-vc-stat"><div class="ind-vc-stat-num">${st.n}</div><div class="ind-vc-stat-label">${st.l}</div></div>`).join('')}
        </div>
        <div class="ind-vc-svc-h">— Services we deliver</div>
        <div class="ind-vc-bullets">${s.bullets.map(b=>`<div>${b}</div>`).join('')}</div>
        <div class="ind-vc-clients">
          <div class="ind-vc-clients-h">Notable engagements</div>
          <div class="ind-vc-clients-list">${s.clients}</div>
        </div>
      </div>
      <div class="ind-vc-visual">
        <div class="ind-vc-emoji">${s.icon}</div>
        <div class="ind-vc-visual-h">${s.visualH}</div>
        <a class="ind-vc-cta" href="#" onclick="openQuote();return false;">Discuss this sector →</a>
      </div>`;
            }
            tabs.addEventListener('click', e => {
                const t = e.target.closest('.ind-vc-tab');
                if (!t) return;
                tabs.querySelectorAll('.ind-vc-tab').forEach(x => x.classList.remove('on'));
                t.classList.add('on');
                render(parseInt(t.dataset.i, 10));
            });
            render(0);
        })();

        /* CTA inline form — POSTs to form-handler.php (3 recipients) */
        (function() {
            const t = document.getElementById('ctaFormT');
            if (t) t.value = String(Math.floor(Date.now() / 1000));
        })();
        async function submitCtaForm(e) {
            e.preventDefault();
            const form = e.target;
            const btn = document.getElementById('ctaFormSubmit');
            const err = document.getElementById('ctaFormErr');
            err.style.display = 'none';
            err.textContent = '';
            const name = form.name.value.trim(),
                email = form.email.value.trim(),
                phone = form.phone.value.trim(),
                msg = form.message.value.trim();
            if (!name || !email || !phone || !msg) {
                err.textContent = 'Name, email, phone and message are required.';
                err.style.display = 'block';
                return false;
            }
            if (!/^\S+@\S+\.\S+$/.test(email)) {
                err.textContent = 'That email looks incomplete.';
                err.style.display = 'block';
                return false;
            }
            const oldHTML = btn.innerHTML;
            btn.innerHTML = 'Sending…';
            btn.disabled = true;
            try {
                const res = await fetch('form-handler.php', {
                    method: 'POST',
                    body: new FormData(form)
                });
                const data = await res.json().catch(() => ({}));
                if (res.ok && data.ok) {
                    document.getElementById('ctaFormFields').classList.add('hide');
                    document.getElementById('ctaFormSuccess').classList.add('show');
                    if (window.wflTrackLead) wflTrackLead(); // Google Ads lead conversion
                } else {
                    err.textContent = data.error || 'Could not send. Please email bhavicreations2022@gmail.com directly.';
                    err.style.display = 'block';
                    btn.innerHTML = oldHTML;
                    btn.disabled = false;
                }
            } catch (_) {
                err.textContent = 'Network error. Please try again or email bhavicreations2022@gmail.com.';
                err.style.display = 'block';
                btn.innerHTML = oldHTML;
                btn.disabled = false;
            }
            return false;
        }

        /* ────────────────────────────────────────────────────────────
           STATS · VARIANT 03 — Spotlight Grid (mouse follows)
           ──────────────────────────────────────────────────────────── */
        (function() {
            const v3 = document.getElementById('v3');
            if (!v3) return;
            v3.addEventListener('pointermove', e => {
                const r = v3.getBoundingClientRect();
                v3.style.setProperty('--mx', ((e.clientX - r.left) / r.width * 100) + '%');
                v3.style.setProperty('--my', ((e.clientY - r.top) / r.height * 100) + '%');
            }, {
                passive: true
            });
        })();

        /* ────────────────────────────────────────────────────────────
           STATS · VARIANT 04 — Scrollytelling
           ──────────────────────────────────────────────────────────── */
        (function() {
            const track = document.getElementById('v4Track');
            if (!track) return;
            const stats = [{
                    num: '30+',
                    label: 'Brands Scaled',
                    desc: "From bootstrapped startups to India's most loved real-estate giants — 30+ brands trust us with their growth.",
                    gx: '30%',
                    gy: '40%',
                    gc: 'rgba(245,158,11,.28)'
                },
                {
                    num: '4.9★',
                    label: 'Client Rating',
                    desc: 'Across Google, Clutch and direct testimonials — clients consistently rate us 4.9 out of 5 for performance and partnership.',
                    gx: '70%',
                    gy: '30%',
                    gc: 'rgba(251,191,36,.30)'
                },
                {
                    num: '12+',
                    label: 'Years in kakinada',
                    desc: 'A decade-plus of in-the-trenches campaign craft, with creative teams, media buyers and analysts under one roof in kakinada.',
                    gx: '50%',
                    gy: '70%',
                    gc: 'rgba(220,38,38,.28)'
                },
                {
                    num: '340%',
                    label: 'Avg. Lead Growth',
                    desc: 'On a typical engagement, our clients see lead volume more than 3× within 6 months — driven by integrated paid + organic + creative.',
                    gx: '20%',
                    gy: '50%',
                    gc: 'rgba(16,185,129,.28)'
                },
                {
                    num: '4.8×',
                    label: 'Average ROAS',
                    desc: '4.8× average return on ad spend — delivered through obsessive testing, daily optimisation, and creative built for performance.',
                    gx: '80%',
                    gy: '60%',
                    gc: 'rgba(139,92,246,.28)'
                }
            ];
            const eyebrowEl = document.getElementById('v4-eyebrow');
            const numEl = document.getElementById('v4-num');
            const labelEl = document.getElementById('v4-label');
            const descEl = document.getElementById('v4-desc');
            const sticky = document.getElementById('v4Sticky');
            const dots = document.querySelectorAll('#v4-progress .v4-dot');
            let curr = -1;

            function update() {
                const r = track.getBoundingClientRect();
                if (r.bottom < 0 || r.top > window.innerHeight) return;
                const p = Math.min(1, Math.max(0, -r.top / (r.height - window.innerHeight)));
                const idx = Math.min(stats.length - 1, Math.floor(p * stats.length));
                if (idx === curr) return;
                curr = idx;
                const s = stats[idx];
                eyebrowEl.textContent = String(idx + 1).padStart(2, '0') + ' / 05';
                numEl.textContent = s.num;
                labelEl.textContent = s.label;
                descEl.textContent = s.desc;
                sticky.style.setProperty('--gx', s.gx);
                sticky.style.setProperty('--gy', s.gy);
                sticky.style.setProperty('--gc1', s.gc);
                dots.forEach((d, i) => d.classList.toggle('on', i === idx));
            }
            window.addEventListener('scroll', update, {
                passive: true
            });
            update();
        })();

        /* ────────────────────────────────────────────────────────────
           DARK COMMAND — SERVICES (click-driven, no scroll-jacking)
           ──────────────────────────────────────────────────────────── */
        (function() {
            const navEl = document.getElementById('dcNav');
            const mainEl = document.getElementById('dcMain');
            const progEl = document.getElementById('dcProgress');
            const counter = document.getElementById('dcCounter');
            if (!navEl || !mainEl) return;

            const data = [{
                    n: '01',
                    tag: 'Performance · PPC & Search',
                    name: 'Google Ads',
                    italic: '& PPC',
                    stat: '4.8×',
                    statLabel: 'Average ROAS',
                    desc: 'Search, Shopping, YouTube and Display campaigns engineered to put your offer in front of high-intent buyers — and to keep optimising until every rupee earns its keep.',
                    tags: [{
                        t: 'Search',
                        d: 'Intent-driven text ads on Google Search — capture buyers at the exact moment they search for what you sell.'
                    }, {
                        t: 'Shopping',
                        d: 'Product-listing ads with an optimised feed — your image, price and title right inside the results.'
                    }, {
                        t: 'YouTube',
                        d: 'Skippable, bumper and in-feed video ads that build demand and retarget warm audiences at low cost-per-view.'
                    }, {
                        t: 'Display',
                        d: 'Responsive banner and native placements across 2M+ sites — awareness and retargeting at scale.'
                    }, {
                        t: 'PMax',
                        d: 'Performance Max campaigns that run every Google channel from one goal-led, AI-optimised asset set.'
                    }],
                    cards: [{
                            t: 'Strategy',
                            d: 'Funnel mapping, keyword universe, audience layering and bid strategy crafted for your category and competitive set.'
                        },
                        {
                            t: 'Creative & Copy',
                            d: 'High-converting RSA copy, Performance Max assets and sitelinks built to win the auction and the click.'
                        }
                    ]
                },
                {
                    n: '02',
                    tag: 'Performance · Social',
                    name: 'Meta & Instagram',
                    italic: 'Ads',
                    stat: '+340%',
                    statLabel: 'Avg. Lead Volume',
                    desc: 'Scroll-stopping Feed, Stories and Reels campaigns that build audiences, drive conversions, and compound brand affinity at scale.',
                    tags: [{
                        t: 'Meta Ads',
                        d: 'Full-funnel Facebook & Instagram campaigns — prospecting, retargeting and conversion, managed daily.'
                    }, {
                        t: 'Instagram',
                        d: 'Feed, Stories and Explore placements tuned to your audience and creative-tested every week.'
                    }, {
                        t: 'Reels',
                        d: 'Short-form vertical video built native for Reels — the cheapest reach on the platform right now.'
                    }, {
                        t: 'Catalog',
                        d: 'Dynamic product ads and Advantage+ shopping that auto-match the right SKU to the right buyer.'
                    }],
                    cards: [{
                            t: 'Audiences',
                            d: 'Lookalike, retargeting and interest stacks layered with on-platform signals for low CPL at volume.'
                        },
                        {
                            t: 'Reels & UGC',
                            d: 'Native, scroll-native creatives produced in-house — story-led hooks built for the algorithm.'
                        }
                    ]
                },
                {
                    n: '03',
                    tag: 'B2B · Authority',
                    name: 'LinkedIn',
                    italic: '& YouTube',
                    stat: '5×',
                    statLabel: 'B2B Pipeline Growth',
                    desc: 'Reach decision-makers on LinkedIn and build category authority on YouTube — a duo built for B2B, considered purchases and high-ticket deals.',
                    tags: [{
                        t: 'LinkedIn Ads',
                        d: 'Sponsored content, message and lead-gen ads targeted by job title, company and seniority.'
                    }, {
                        t: 'YouTube',
                        d: 'Authority-building video and pre-roll that keeps your brand in front of decision-makers.'
                    }, {
                        t: 'B2B',
                        d: 'Account-based plays against your ICP — built for long sales cycles and high-ticket deals.'
                    }, {
                        t: 'Pre-roll',
                        d: 'Short skippable spots before relevant content — top-of-funnel reach at a fraction of TV cost.'
                    }],
                    cards: [{
                            t: 'ABM Targeting',
                            d: 'Account-based audience builds against your ICP — pipeline plays for sales-led growth.'
                        },
                        {
                            t: 'Brand Films',
                            d: 'Premium video direction & production — credibility content for the long game.'
                        }
                    ]
                },
                {
                    n: '04',
                    tag: 'Earned · Organic',
                    name: 'Organic',
                    italic: 'SEO',
                    stat: '8.7×',
                    statLabel: 'Organic Traffic Growth',
                    desc: 'Rank #1 for the keywords your buyers actually search. Technical SEO, content strategy and link building that compound month-over-month.',
                    tags: [{
                        t: 'On-Page',
                        d: 'Titles, content, internal links and schema tuned to rank for the terms your buyers search.'
                    }, {
                        t: 'Technical',
                        d: 'Site speed, crawlability, Core Web Vitals and indexing fixed so Google can rank you at all.'
                    }, {
                        t: 'Local SEO',
                        d: 'Google Business Profile, citations and local pages that win the Kakinada map pack.'
                    }, {
                        t: 'Backlinks',
                        d: 'White-hat digital PR and link building that grows domain authority the way Google rewards.'
                    }],
                    cards: [{
                            t: 'Topical Authority',
                            d: 'Cluster-led content systems built around buyer intent — owning the SERP, not chasing it.'
                        },
                        {
                            t: 'Local & National',
                            d: 'Kakinada-first local SEO with national rollouts — Google Business Profile to schema.'
                        }
                    ]
                },
                {
                    n: '05',
                    tag: 'Brand · Creative',
                    name: 'Creative',
                    italic: '& Branding',
                    stat: '2×',
                    statLabel: 'Brand Recall Uplift',
                    desc: 'Strategic identity, ad creative systems and motion design that make your brand impossible to ignore — across every platform, every touchpoint.',
                    tags: [{
                        t: 'Identity',
                        d: 'Logo, palette, type and tone-of-voice systems that make your brand instantly recognisable.'
                    }, {
                        t: 'Ad Creatives',
                        d: 'Scroll-stopping static and carousel creative, produced in volume and tested against performance.'
                    }, {
                        t: 'Motion',
                        d: 'Motion graphics and animated ads that lift recall and stop the thumb mid-scroll.'
                    }, {
                        t: 'Photography',
                        d: 'Product, lifestyle and brand shoots directed for both credibility and conversion.'
                    }],
                    cards: [{
                            t: 'Identity Systems',
                            d: 'Visual languages, type, palette and tone-of-voice built for performance — and recognition.'
                        },
                        {
                            t: 'Always-on Creative',
                            d: 'A creative engine that keeps fresh assets shipping — never stale, never starved.'
                        }
                    ]
                },
                {
                    n: '06',
                    tag: 'Insight · Measurement',
                    name: 'Analytics',
                    italic: '& Reporting',
                    stat: '100%',
                    statLabel: 'Tracking Confidence',
                    desc: 'Real-time dashboards, GA4, server-side tracking and weekly insights — so every decision is grounded in data you can actually trust.',
                    tags: [{
                        t: 'GA4',
                        d: 'A clean GA4 setup with the events and conversions that actually map to revenue.'
                    }, {
                        t: 'Server-side',
                        d: 'Server-side GTM and conversion APIs that survive iOS and cookie loss — accurate, future-proof data.'
                    }, {
                        t: 'Dashboards',
                        d: 'Live Looker Studio dashboards so you see spend, leads and ROAS in one place, any time.'
                    }, {
                        t: 'Attribution',
                        d: 'Multi-touch and offline-conversion tracking that shows which channels really drive sales.'
                    }],
                    cards: [{
                            t: 'Tracking Stack',
                            d: 'GTM + server-side + offline conversion uploads. Privacy-first, future-proof setup.'
                        },
                        {
                            t: 'Weekly Insights',
                            d: 'Looker Studio dashboards and a weekly readout that surfaces what to do next, not just what happened.'
                        }
                    ]
                },
                {
                    n: '07',
                    tag: 'Web · Conversion',
                    name: 'Web',
                    italic: '& Landing Pages',
                    stat: '2.4×',
                    statLabel: 'Conversion Lift',
                    desc: 'Sales-grade websites and landing pages built for performance — fast, accessible, conversion-engineered, and shipped without the agency drag.',
                    tags: [{
                        t: 'Webflow',
                        d: 'Fast, CMS-driven Webflow sites you can actually edit — no developer bottleneck.'
                    }, {
                        t: 'WordPress',
                        d: 'Secure, scalable WordPress builds tuned for speed and easy content management.'
                    }, {
                        t: 'Headless',
                        d: 'Headless front-ends for teams that need edge speed, custom UX and full control.'
                    }, {
                        t: 'Landing Pages',
                        d: 'Single-goal, CRO-engineered pages built to convert paid traffic — not just look good.'
                    }],
                    cards: [{
                            t: 'Performance',
                            d: 'Lighthouse-100 builds with Core Web Vitals tuned, responsive image pipelines and edge-cached delivery.'
                        },
                        {
                            t: 'CRO Engineered',
                            d: 'Every section validated against funnel data — copy, layout and proof crafted for the click that matters.'
                        }
                    ]
                },
                {
                    n: '08',
                    tag: 'Lifecycle · Automation',
                    name: 'CRO',
                    italic: '& Automation',
                    stat: '+62%',
                    statLabel: 'Funnel Conversion',
                    desc: 'Conversion-rate optimisation, email and WhatsApp marketing, and lifecycle automation that turns one-time clicks into compounding revenue.',
                    tags: [{
                        t: 'CRO',
                        d: 'A/B tests, heatmaps and session replay that lift conversion on the traffic you already pay for.'
                    }, {
                        t: 'Email',
                        d: 'Automated welcome, cart and win-back flows measured against revenue, not opens.'
                    }, {
                        t: 'WhatsApp',
                        d: 'WhatsApp automation for reminders, offers and support — the highest-open-rate channel in India.'
                    }, {
                        t: 'Lifecycle',
                        d: 'End-to-end lifecycle journeys that turn one-time buyers into repeat revenue.'
                    }],
                    cards: [{
                            t: 'Funnel Tests',
                            d: 'A/B tests, heatmap and session-replay-led iteration on landing pages, checkouts and onboarding flows.'
                        },
                        {
                            t: 'Lifecycle Flows',
                            d: 'Email + WhatsApp sequences for welcome, abandonment and reactivation — measured against revenue, not opens.'
                        }
                    ]
                },
                {
                    n: '09',
                    tag: 'Lifecycle · Retention',
                    name: 'Email',
                    italic: 'Marketing',
                    stat: '40×',
                    statLabel: 'Avg. Email ROI',
                    desc: 'Newsletters, broadcasts and automated flows that keep your list warm and turn subscribers into repeat buyers — every send earning its place in the inbox.',
                    tags: [{
                        t: 'Campaigns',
                        d: 'Designed, written and scheduled broadcasts — launches, offers and newsletters that get opened.'
                    }, {
                        t: 'Automations',
                        d: 'Welcome, abandoned-cart, post-purchase and win-back flows that sell around the clock.'
                    }, {
                        t: 'Segmentation',
                        d: 'List segmentation by behaviour and intent, so the right message reaches the right person.'
                    }, {
                        t: 'Deliverability',
                        d: 'Domain warm-up, authentication (SPF, DKIM, DMARC) and list hygiene that keep you out of spam.'
                    }],
                    cards: [{
                            t: 'Flow Design',
                            d: 'Revenue-driving automation maps built in Klaviyo, Mailchimp or your ESP of choice.'
                        },
                        {
                            t: 'Copy & Design',
                            d: 'On-brand templates and persuasive copy tested for opens, clicks and conversions.'
                        }
                    ]
                },
                {
                    n: '10',
                    tag: 'Conversational · Retention',
                    name: 'WhatsApp',
                    italic: 'Marketing',
                    stat: '98%',
                    statLabel: 'Message Open Rate',
                    desc: 'The most-used messaging app in India, put to work — broadcasts, catalogues and chatbots on the official WhatsApp Business API, reaching customers where they already are.',
                    tags: [{
                        t: 'Broadcasts',
                        d: 'Compliant bulk campaigns to opted-in contacts — offers and updates with near-total open rates.'
                    }, {
                        t: 'Catalog',
                        d: 'In-chat product catalogues and carts, so customers browse and buy without leaving WhatsApp.'
                    }, {
                        t: 'Chatbots',
                        d: 'Automated flows for FAQs, lead qualification and order updates — around the clock, no staff needed.'
                    }, {
                        t: 'Business API',
                        d: 'Official WhatsApp Business API setup with green-tick verification and CRM integration.'
                    }],
                    cards: [{
                            t: 'Automation',
                            d: 'Order, booking and reminder flows wired to your CRM and payment links.'
                        },
                        {
                            t: 'Campaigns',
                            d: 'Segmented broadcast campaigns that respect opt-in rules and drive real replies.'
                        }
                    ]
                },
                {
                    n: '11',
                    tag: 'Creator · Social Proof',
                    name: 'Influencer',
                    italic: 'Marketing',
                    stat: '6×',
                    statLabel: 'Avg. Earned Reach',
                    desc: 'Creator partnerships that place your brand in trusted feeds — from nano-influencers to category names — matched, briefed and measured for real business impact, not vanity likes.',
                    tags: [{
                        t: 'Creator Sourcing',
                        d: 'Vetted creators matched to your niche, audience and budget — nano to macro.'
                    }, {
                        t: 'Campaigns',
                        d: 'End-to-end campaign management: briefs, contracts, timelines and content approvals.'
                    }, {
                        t: 'Barter & Paid',
                        d: 'Both gifting and paid collaborations, structured for the best cost-per-reach.'
                    }, {
                        t: 'Reporting',
                        d: 'Reach, engagement and conversion tracking with promo codes and UTM attribution.'
                    }],
                    cards: [{
                            t: 'Matchmaking',
                            d: 'Data-led creator selection, so spend goes to audiences that actually convert.'
                        },
                        {
                            t: 'Whitelisting',
                            d: 'Boost top creator posts as ads from their own handle — social proof at paid scale.'
                        }
                    ]
                },
                {
                    n: '12',
                    tag: 'Creator · Content',
                    name: 'UGC',
                    italic: 'Content',
                    stat: '2.4×',
                    statLabel: 'Higher Ad CTR',
                    desc: 'Authentic, creator-style content built for paid social — unboxings, testimonials and how-tos that feel native, beat polished ads on cost-per-result, and never run dry.',
                    tags: [{
                        t: 'Testimonials',
                        d: 'Real-voice customer and creator testimonials that build trust faster than any brand ad.'
                    }, {
                        t: 'Unboxings',
                        d: 'First-impression unboxing and reveal videos shot for the scroll.'
                    }, {
                        t: 'How-To',
                        d: 'Problem-solution and tutorial content that educates and sells in one clip.'
                    }, {
                        t: 'Ad-Ready',
                        d: 'Multiple hooks and aspect ratios per concept — plug straight into Meta and Google.'
                    }],
                    cards: [{
                            t: 'Creator Network',
                            d: 'A roster of UGC creators producing fresh, on-brief content on a monthly cadence.'
                        },
                        {
                            t: 'Hook Testing',
                            d: 'Several openings per concept, tested so winners scale and the rest get cut fast.'
                        }
                    ]
                },
                {
                    n: '13',
                    tag: 'AI · Production',
                    name: 'AI',
                    italic: 'Video',
                    stat: '10×',
                    statLabel: 'Faster Turnaround',
                    desc: 'Studio-grade video without the studio — AI avatars, voiceovers, product visuals and motion, produced in days not weeks, in every language and aspect ratio your funnel needs.',
                    tags: [{
                        t: 'AI Avatars',
                        d: 'Presenter-led videos with lifelike AI avatars — no shoot, no crew, no reshoots.'
                    }, {
                        t: 'Voiceover',
                        d: 'Natural AI voiceovers in multiple Indian and global languages, on brand and on script.'
                    }, {
                        t: 'Product Video',
                        d: 'AI-generated product visuals and scenes for ads, listings and social.'
                    }, {
                        t: 'Localisation',
                        d: 'One video, many languages — localise campaigns for every region overnight.'
                    }],
                    cards: [{
                            t: 'Ad Variations',
                            d: 'Dozens of on-brand ad cuts from one brief — perfect for creative testing at scale.'
                        },
                        {
                            t: 'Human + AI',
                            d: 'AI speed with human editing and direction, so the output still feels premium.'
                        }
                    ]
                }
            ];

            const total = String(data.length).padStart(2, '0');

            /* render nav */
            navEl.innerHTML = `<div class="dc-nav-bar" id="dcBar"></div>` +
                data.map((s, i) => `
      <div class="dc-nav-item${i===0?' on':''}" data-idx="${i}">
        <span class="dc-nav-n">${s.n}</span>
        <span>${s.name} ${s.italic}</span>
      </div>
    `).join('');

            /* render panels */
            mainEl.innerHTML = data.map((s, i) => `
    <div class="dc-panel${i===0?' on':''}" data-idx="${i}">
      <div class="dc-panel-eyebrow">${s.tag} · Service ${s.n} of ${total}</div>
      <h2 class="dc-panel-title">${s.name} <em>${s.italic}</em></h2>
      <div class="dc-panel-stat">
        <div class="dc-panel-stat-num">${s.stat}</div>
        <div class="dc-panel-stat-label">${s.statLabel}</div>
      </div>
      <p class="dc-panel-desc">${s.desc}</p>
      <div class="dc-panel-tabs">${s.tags.map((t,ti)=>`<span class="${ti===0?'on':''}" data-tab="${ti}">${t.t}</span>`).join('')}</div>
      <div class="dc-panel-tabinfo">${s.tags[0].d}</div>
      <div class="dc-panel-cards">${s.cards.map(c=>`
        <div class="dc-panel-card">
          <div class="dc-panel-card-t">${c.t}</div>
          <div class="dc-panel-card-d">${c.d}</div>
        </div>`).join('')}
      </div>
    </div>
  `).join('');

            const N = data.length;
            const items = navEl.querySelectorAll('.dc-nav-item');
            const panels = mainEl.querySelectorAll('.dc-panel');
            const bar = navEl.querySelector('#dcBar');
            let curr = 0;

            function moveBar(idx) {
                const target = items[idx];
                if (target && bar) {
                    bar.style.transform = `translateY(${target.offsetTop}px)`;
                    bar.style.height = `${target.offsetHeight - 8}px`;
                }
            }

            function setActive(idx) {
                if (idx === curr) return;
                curr = idx;
                items.forEach((el, i) => el.classList.toggle('on', i === idx));
                panels.forEach((el, i) => el.classList.toggle('on', i === idx));
                counter.textContent = data[idx].n;
                progEl.style.setProperty('--p', `${(idx+1)/N*100}%`);
                moveBar(idx);
            }

            /* click only — no scroll jacking */
            items.forEach((el, i) => el.addEventListener('click', () => setActive(i)));

            /* sub-tabs within each panel (Search / Shopping / … reveal their own info) */
            panels.forEach((panel, pi) => {
                const tabs = panel.querySelectorAll('.dc-panel-tabs span');
                const info = panel.querySelector('.dc-panel-tabinfo');
                const svc = data[pi];
                tabs.forEach((tab, ti) => {
                    tab.addEventListener('click', () => {
                        tabs.forEach((t, k) => t.classList.toggle('on', k === ti));
                        if (info && svc.tags[ti]) info.textContent = svc.tags[ti].d;
                    });
                });
            });

            /* initial bar + progress */
            requestAnimationFrame(() => {
                moveBar(0);
                progEl.style.setProperty('--p', `${(1/N)*100}%`);
            });
            window.addEventListener('resize', () => moveBar(curr), {
                passive: true
            });
        })();
    </script>

    <script>
        /* CTA robot — subtle 3D mouse-parallax tilt (desktop only) */
        (function() {
            const sec = document.querySelector('.cta-light');
            const robot = document.querySelector('.cta-robot');
            if (!sec || !robot) return;
            if (window.matchMedia('(prefers-reduced-motion:reduce)').matches) return;
            let raf = null;
            sec.addEventListener('mousemove', (e) => {
                if (window.innerWidth <= 1024) return;
                const r = sec.getBoundingClientRect();
                const dx = (e.clientX - r.left) / r.width - .5;
                const dy = (e.clientY - r.top) / r.height - .5;
                if (raf) cancelAnimationFrame(raf);
                raf = requestAnimationFrame(() => {
                    robot.style.transform = `perspective(1100px) rotateY(${(-7 + dx*9).toFixed(2)}deg) rotateX(${(1 - dy*5).toFixed(2)}deg)`;
                });
            });
            sec.addEventListener('mouseleave', () => {
                robot.style.transform = 'perspective(1100px) rotateY(-7deg) rotateX(1deg)';
            });
        })();
    </script>

    <!-- WhatsApp floating button -->
    <a class="wa-fab" href="https://wa.me/919642343434?text=Hi%20Webfluence%20%E2%80%94%20I'd%20like%20to%20discuss%20a%20marketing%20project." target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
        <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M19.05 4.91A10 10 0 0 0 4.62 18.7L3 22l3.4-1.61a10 10 0 0 0 14.7-12.85 9.94 9.94 0 0 0-2.05-2.63zm-7 15.21A8.4 8.4 0 0 1 7.5 18.5l-.32-.2-2 .94.95-1.94-.21-.33a8.42 8.42 0 1 1 6.13 3.16zm4.6-6.3c-.25-.13-1.48-.73-1.71-.81s-.4-.13-.57.13-.65.81-.8 1-.29.2-.54.07a6.85 6.85 0 0 1-2-1.25 7.59 7.59 0 0 1-1.4-1.74c-.15-.25 0-.39.11-.51s.25-.29.37-.43a1.7 1.7 0 0 0 .25-.41.46.46 0 0 0 0-.44c-.06-.13-.57-1.37-.78-1.88s-.41-.42-.57-.43h-.49a.94.94 0 0 0-.68.32 2.86 2.86 0 0 0-.89 2.13 5 5 0 0 0 1 2.65 11.45 11.45 0 0 0 4.36 3.85 14.74 14.74 0 0 0 1.46.54 3.5 3.5 0 0 0 1.61.1 2.63 2.63 0 0 0 1.71-1.21 2.13 2.13 0 0 0 .15-1.21c-.06-.11-.22-.17-.47-.29z" />
        </svg>
        <span class="wa-tip">+91 9642343434</span>
    </a>

    <script>
        /* Mobile drawer toggle */
        function toggleNavDrawer() {
            const drawer = document.getElementById('navDrawer');
            const bg = document.getElementById('navDrawerBg');
            const burger = document.querySelector('.nav-hamburger');
            if (!drawer || !bg || !burger) return;
            const isOpen = drawer.classList.toggle('open');
            bg.classList.toggle('open', isOpen);
            burger.classList.toggle('open', isOpen);
            burger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            drawer.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
            document.body.style.overflow = isOpen ? 'hidden' : '';
        }
    </script>

    <script>
        /* Mobile drawer toggle */
        function toggleNavDrawer() {
            const drawer = document.getElementById('navDrawer');
            const bg = document.getElementById('navDrawerBg');
            const burger = document.querySelector('.nav-hamburger');
            if (!drawer || !bg || !burger) return;
            const isOpen = drawer.classList.toggle('open');
            bg.classList.toggle('open', isOpen);
            burger.classList.toggle('open', isOpen);
            burger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            drawer.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
            document.body.style.overflow = isOpen ? 'hidden' : '';
        }
    </script>

    <script>
        document.getElementById("landing-page-contact").addEventListener("click", function() {
            document.getElementById("contact-us").scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        });
    </script>

</body>

</html>