{{--
    Ascend.com — public landing page (the domain is for sale).
    Self-contained: inline CSS/JS, Google Fonts only, no Vite build.
    Every fact and contact detail below is carried over word-for-word from the
    original ascend.com holding page. Do not invent prices, dates or owners.
--}}
@php
    $url = 'https://ascend.com/';
    $email = 'AMiller@atmholdings.com';
    $mailto = 'mailto:AMiller@atmholdings.com?subject=Domain%20Inquiry%20for%20Ascend.com';
    $broker = 'https://atmholdings.com/';

    $title = 'Ascend.com is for sale — one of the world’s elite domain names';
    $description = 'Ascend.com, a one-word .com registered in 1990 and previously owned by Nokia, is available to acquire. Brokered by ATM Holdings.';

    $why = [
        ['A single, meaningful word', 'To ascend is to rise, climb and improve. The name carries a positive promise before a single word of marketing is written.'],
        ['The .com people type first', 'Customers assume the .com. Owning it means every word-of-mouth mention, every guess and every search lands on you.'],
        ['No industry lock-in', 'Ascend describes an outcome rather than a product, so it fits a bank, an airline, a clinic or an AI start-up equally well.'],
        ['Real pedigree', 'Registered in 1990 and previously owned by Nokia — a name with more than three decades of history behind it.'],
    ];

    $industries = [
        ['Finance & wealth', 'Wealth managers, private banks, investment and savings apps — a name that promises growth.'],
        ['Fintech & payments', 'Neobanks, payment platforms and credit products that want a short, trusted, global .com.'],
        ['Aviation & aerospace', 'Airlines, private charter, drones and space technology, where the name describes the product.'],
        ['Health & fitness', 'Clinics, fitness studios, performance coaching and wellbeing apps built around getting better.'],
        ['Education & learning', 'Academies, online courses, tutoring and executive education focused on progress.'],
        ['Software & AI', 'SaaS platforms and AI products that help teams level up — memorable enough to be a verb.'],
        ['Real estate & property', 'Developers, high-rise living, proptech and property investment brands.'],
        ['Careers & recruiting', 'Talent platforms, recruitment firms and leadership programmes about moving up.'],
        ['Travel & outdoor', 'Mountaineering, adventure travel, outdoor gear and expedition companies.'],
        ['Venture & start-ups', 'Venture funds, accelerators and incubators backing companies on the rise.'],
        ['Consulting & leadership', 'Advisory firms, coaching practices and transformation consultancies.'],
        ['Energy & sustainability', 'Clean-energy, climate and infrastructure companies building what comes next.'],
    ];

    $faqs = [
        ['Is Ascend.com for sale?', 'Yes. Ascend.com is an elite-level .com domain and is available to acquire.'],
        ['Who is brokering Ascend.com?', 'The domain is being brokered by ATM Holdings.'],
        ['Who owned Ascend.com before?', 'Ascend.com was previously owned by Nokia.'],
        ['When was Ascend.com registered?', 'Ascend.com was registered in 1990.'],
        ['How do I make an enquiry or an offer?', 'Email AMiller@atmholdings.com with the subject “Domain Inquiry for Ascend.com”.'],
        ['What could Ascend.com be used for?', 'Because “ascend” describes rising and improving rather than a specific product, it suits finance, fintech, aviation, health, education, software and AI, real estate, recruiting, travel, venture capital, consulting and energy brands.'],
        ['What does the price depend on?', 'Pricing is handled directly by the broker. Contact ATM Holdings to discuss terms.'],
    ];

    $schema = [
        '@context' => 'https://schema.org',
        '@graph' => [
            ['@type' => 'WebSite', '@id' => $url.'#website', 'url' => $url, 'name' => 'Ascend.com', 'description' => $description, 'inLanguage' => 'en', 'copyrightHolder' => ['@id' => 'https://coherence.com/#organization'], 'publisher' => ['@id' => 'https://coherence.com/#organization'], 'creator' => ['@id' => 'https://qquantum.ai/#organization']],
            ['@type' => 'Organization', '@id' => 'https://coherence.com/#organization', 'name' => 'Coherence', 'legalName' => 'Booth.com Ltd', 'url' => 'https://coherence.com/'],
            ['@type' => 'Organization', '@id' => 'https://qquantum.ai/#organization', 'name' => 'QQuantum.ai', 'url' => 'https://qquantum.ai/', 'description' => 'AI systems engineering studio in Barcelona — brand identity, logo and web design, AI agents and custom AI systems.'],
            ['@type' => 'WebPage', '@id' => $url.'#webpage', 'url' => $url, 'name' => $title, 'description' => $description, 'isPartOf' => ['@id' => $url.'#website'], 'about' => ['@id' => $url.'#domain'], 'inLanguage' => 'en', 'primaryImageOfPage' => ['@type' => 'ImageObject', 'url' => $url.'og-image.png', 'width' => 1200, 'height' => 630]],
            [
                '@type' => 'Product', '@id' => $url.'#domain', 'name' => 'Ascend.com', 'category' => 'Premium .com domain name',
                'description' => 'Ascend.com is an elite-level .com domain, registered in 1990 and previously owned by Nokia, brokered by ATM Holdings.',
                'offers' => ['@type' => 'Offer', 'url' => $url, 'availability' => 'https://schema.org/InStock', 'seller' => ['@id' => $broker.'#organization']],
            ],
            [
                '@type' => 'Organization', '@id' => $broker.'#organization', 'name' => 'ATM Holdings', 'url' => $broker, 'email' => $email,
                'contactPoint' => ['@type' => 'ContactPoint', 'contactType' => 'sales', 'email' => $email],
            ],
            [
                '@type' => 'FAQPage', '@id' => $url.'#faq',
                'mainEntity' => array_map(fn ($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]], $faqs),
            ],
        ],
    ];

    // Deterministic "ascender" lines rising behind the hero.
    $lines = collect(range(1, 26))->map(fn ($i) => [
        'x' => round(fmod($i * 37.7, 100), 2),
        'h' => 60 + (int) round(fmod($i * 53.3, 160)),
        'dur' => 9 + (int) round(fmod($i * 7.1, 12)),
        'delay' => -round(fmod($i * 3.9, 20), 1),
        'dot' => $i % 5 === 0,
    ]);

    $dMark = '<svg viewBox="251.5 -2 180 180" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-width="13" stroke-linecap="round"><circle cx="341.5" cy="148" r="23.5"></circle><path d="M365,171.5 V30"></path></g><circle cx="365" cy="12" r="10" class="acc-fill"></circle></svg>';
// Animated Ascender mark. 'full' = hero proportions (ascender climbs 3× the
    // x-height); 'compact' = nav/footer lockup, ascender shortened to 1.4× so the
    // letters stay legible at pill height. Same intro / idle / hover / click.
    $amark = function (string $variant = 'full') {
        $c = $variant === 'compact';
        $top = $c ? 66 : 30;   // top of the ascender
        $dot = $c ? 48 : 12;   // dot centre
        $vb = $c ? '0 36 372 142' : '0 0 372 184';
        $w = $c ? 't' : '';
        return '<svg viewBox="'.$vb.'" aria-hidden="true">'
            .'<g class="as-rest">'
            .'<circle class="as-s" style="--i: 0" cx="33.5" cy="148" r="23.5" pathLength="1"></circle>'
            .'<path class="as-s" style="--i: 0.6" d="M57,124.5 V171.5" pathLength="1"></path>'
            .'<path class="as-s" style="--i: 1.2" d="M107,132 C105,127 99,124.5 93,124.5 C85,124.5 79,129 79,136 C79,143 85,145.5 93,148 C101,150.5 107,153 107,160 C107,167 101,171.5 93,171.5 C86,171.5 80,168.5 78,163.5" pathLength="1"></path>'
            .'<path class="as-s" style="--i: 2.1" d="M168.12,131.38 A23.5,23.5 0 1 0 168.12,164.62" pathLength="1"></path>'
            .'<path class="as-s" style="--i: 3" d="M189,148 H236 A23.5,23.5 0 1 0 229.12,164.62" pathLength="1"></path>'
            .'<path class="as-s" style="--i: 3.9" d="M257,171.5 V124.5 M257,144 A20,20 0 0 1 297,144 V171.5" pathLength="1"></path>'
            .'</g>'
            .'<circle class="as-s" style="--i: 4.8" cx="341.5" cy="148" r="23.5" pathLength="1"></circle>'
            .'<path class="as-s" style="--i: 5.4" d="M365,171.5 V124.5" pathLength="1"></path>'
            .'<g class="as-xk"><g class="as-xh"><path class="as-ext" d="M365,124.5 V'.$top.'" pathLength="1"></path></g></g>'
            .'<g class="as-dh"><circle class="as-burst" cx="365" cy="'.$dot.'" r="7"></circle>'
            .'<g class="as-dk"><g class="as-di"><g class="as-dw">'
            .'<circle class="as-halo" cx="365" cy="'.$dot.'" r="7"></circle>'
            .'<circle class="as-dot" cx="365" cy="'.$dot.'" r="'.($c ? 8.5 : 7).'"></circle>'
            .'</g></g></g></g></svg>';
    };
    $coherence = <<<'SVG'
<svg xmlns="http://www.w3.org/2000/svg" viewBox="3.00 3.00 275.00 58.00" role="img" aria-label="Coherence">
  <title>Coherence</title>
  <g id="mark">
    <g fill="none" stroke-width="2.8" stroke-linejoin="round">
        <path d="M52.56 49.26L52.07 50.39L51.35 51.35L50.39 52.07L49.26 52.56L48.01 52.86L46.72 53.03L45.48 53.16L44.34 53.37L43.31 53.72L42.38 54.27L41.53 55.01L40.7 55.89L39.83 56.84L38.89 57.73L37.87 58.46L36.75 58.92L35.56 59.08L34.36 58.92L33.16 58.5L32 57.92L30.9 57.29L29.84 56.72L28.8 56.32L27.75 56.13L26.65 56.15L25.48 56.34L24.24 56.6L22.97 56.82L21.69 56.89L20.47 56.72L19.37 56.26L18.42 55.53L17.63 54.56L16.99 53.44L16.45 52.27L15.93 51.15L15.37 50.15L14.69 49.31L13.85 48.63L12.85 48.07L11.73 47.55L10.56 47.01L9.44 46.37L8.47 45.58L7.74 44.63L7.28 43.53L7.11 42.31L7.18 41.03L7.4 39.76L7.66 38.52L7.85 37.35L7.87 36.25L7.68 35.2L7.28 34.16L6.71 33.1L6.08 32L5.5 30.84L5.08 29.64L4.92 28.44L5.08 27.25L5.54 26.13L6.27 25.11L7.16 24.17L8.11 23.3L8.99 22.47L9.73 21.62L10.28 20.69L10.63 19.66L10.84 18.52L10.97 17.28L11.14 15.99L11.44 14.74L11.93 13.61L12.65 12.65L13.61 11.93L14.74 11.44L15.99 11.14L17.28 10.97L18.52 10.84L19.66 10.63L20.69 10.28L21.62 9.73L22.47 8.99L23.3 8.11L24.17 7.16L25.11 6.27L26.13 5.54L27.25 5.08L28.44 4.92L29.64 5.08L30.84 5.5L32 6.08L33.1 6.71L34.16 7.28L35.2 7.68L36.25 7.87L37.35 7.85L38.52 7.66L39.76 7.4L41.03 7.18L42.31 7.11L43.53 7.28L44.63 7.74L45.58 8.47L46.37 9.44L47.01 10.56L47.55 11.73L48.07 12.85L48.63 13.85L49.31 14.69L50.15 15.37L51.15 15.93" stroke="currentColor" stroke-opacity="1"/>
        <path d="M46.57 44.22L46.22 45.03L45.7 45.7L45.03 46.22L44.22 46.57L43.34 46.78L42.43 46.89L41.55 46.99L40.74 47.14L40.01 47.38L39.35 47.77L38.75 48.3L38.16 48.92L37.55 49.6L36.88 50.23L36.15 50.74L35.36 51.07L34.53 51.18L33.67 51.07L32.82 50.77L32 50.36L31.22 49.91L30.47 49.51L29.73 49.23L28.99 49.09L28.21 49.11L27.38 49.24L26.51 49.43L25.6 49.58L24.7 49.63L23.84 49.51L23.05 49.19L22.38 48.67L21.82 47.98L21.37 47.18L20.98 46.36L20.62 45.56L20.22 44.85L19.74 44.26L19.15 43.78L18.44 43.38L17.64 43.02L16.82 42.63L16.02 42.18L15.33 41.62L14.81 40.95L14.49 40.16L14.37 39.3L14.42 38.4L14.57 37.49L14.76 36.62L14.89 35.79L14.91 35.01L14.77 34.27L14.49 33.53L14.09 32.78L13.64 32L13.23 31.18L12.93 30.33L12.82 29.47L12.93 28.64L13.26 27.85L13.77 27.12L14.4 26.45L15.08 25.84L15.7 25.25L16.23 24.65L16.62 23.99L16.86 23.26L17.01 22.45L17.11 21.57L17.22 20.66L17.43 19.78L17.78 18.97L18.3 18.3L18.97 17.78L19.78 17.43L20.66 17.22L21.57 17.11L22.45 17.01L23.26 16.86L23.99 16.62L24.65 16.23L25.25 15.7L25.84 15.08L26.45 14.4L27.12 13.77L27.85 13.26L28.64 12.93L29.47 12.82L30.33 12.93L31.18 13.23L32 13.64L32.78 14.09L33.53 14.49L34.27 14.77L35.01 14.91L35.79 14.89L36.62 14.76L37.49 14.57L38.4 14.42L39.3 14.37L40.16 14.49L40.95 14.81L41.62 15.33L42.18 16.02L42.63 16.82L43.02 17.64L43.38 18.44L43.78 19.15L44.26 19.74L44.85 20.22L45.56 20.62" stroke="#00BDF1"/>
        <path d="M40.57 39.19L40.36 39.66L40.06 40.06L39.66 40.36L39.19 40.57L38.67 40.69L38.13 40.76L37.62 40.82L37.14 40.9L36.71 41.05L36.33 41.28L35.97 41.59L35.62 41.96L35.26 42.35L34.87 42.72L34.44 43.02L33.98 43.22L33.49 43.28L32.98 43.22L32.48 43.04L32 42.8L31.54 42.54L31.1 42.3L30.67 42.13L30.23 42.05L29.77 42.06L29.28 42.14L28.77 42.25L28.24 42.34L27.7 42.37L27.2 42.3L26.74 42.11L26.34 41.8L26.01 41.4L25.75 40.93L25.52 40.45L25.31 39.98L25.07 39.56L24.79 39.21L24.44 38.93L24.02 38.69L23.55 38.48L23.07 38.25L22.6 37.99L22.2 37.66L21.89 37.26L21.7 36.8L21.63 36.3L21.66 35.76L21.75 35.23L21.86 34.72L21.94 34.23L21.95 33.77L21.87 33.33L21.7 32.9L21.46 32.46L21.2 32L20.96 31.52L20.78 31.02L20.72 30.51L20.78 30.02L20.98 29.56L21.28 29.13L21.65 28.74L22.04 28.38L22.41 28.03L22.72 27.67L22.95 27.29L23.1 26.86L23.18 26.38L23.24 25.87L23.31 25.33L23.43 24.81L23.64 24.34L23.94 23.94L24.34 23.64L24.81 23.43L25.33 23.31L25.87 23.24L26.38 23.18L26.86 23.1L27.29 22.95L27.67 22.72L28.03 22.41L28.38 22.04L28.74 21.65L29.13 21.28L29.56 20.98L30.02 20.78L30.51 20.72L31.02 20.78L31.52 20.96L32 21.2L32.46 21.46L32.9 21.7L33.33 21.87L33.77 21.95L34.23 21.94L34.72 21.86L35.23 21.75L35.76 21.66L36.3 21.63L36.8 21.7L37.26 21.89L37.66 22.2L37.99 22.6L38.25 23.07L38.48 23.55L38.69 24.02L38.93 24.44L39.21 24.79L39.56 25.07L39.98 25.31" stroke="currentColor" stroke-opacity="1"/>
    </g>
    <circle cx="32" cy="32" r="3.4" fill="#00BDF1"/>
  </g>
  <g id="wordmark" fill="currentColor">
    <path d="M83.928 46.95L83.928 46.95Q80.469 46.95 77.84 45.827Q75.212 44.704 73.46 42.659Q71.707 40.615 70.854 37.829Q70 35.044 70 31.674L70 31.674Q70 28.214 70.899 25.339Q71.797 22.463 73.527 20.397Q75.257 18.33 77.818 17.184Q80.379 16.038 83.704 16.038L83.704 16.038Q86.489 16.038 88.646 16.825Q90.802 17.611 92.24 19.049Q93.678 20.486 94.374 22.396Q95.071 24.305 94.981 26.552L94.981 26.552L89.724 27.451Q89.679 25.339 88.915 23.879Q88.152 22.418 86.781 21.632Q85.411 20.846 83.524 20.846L83.524 20.846Q81.951 20.846 80.558 21.475Q79.166 22.104 78.132 23.407Q77.099 24.71 76.515 26.687Q75.931 28.664 75.931 31.404L75.931 31.404Q75.931 34.909 76.897 37.29Q77.863 39.671 79.705 40.907Q81.547 42.143 84.063 42.143L84.063 42.143Q86.444 42.143 87.904 41.132Q89.365 40.121 90.039 38.279Q90.713 36.436 90.668 34.1L90.668 34.1L95.924 34.729Q96.059 37.245 95.408 39.447Q94.756 41.648 93.296 43.333Q91.836 45.018 89.522 45.984Q87.208 46.95 83.928 46.95Z"/>
    <path d="M108.909 46.95L108.909 46.95Q105.539 46.95 102.933 45.557Q100.327 44.164 98.845 41.424Q97.362 38.683 97.362 34.594L97.362 34.594Q97.362 30.416 98.89 27.675Q100.417 24.935 103.023 23.587Q105.629 22.239 108.909 22.239L108.909 22.239Q112.234 22.239 114.84 23.632Q117.446 25.024 118.928 27.765Q120.411 30.506 120.411 34.639L120.411 34.639Q120.411 38.818 118.906 41.558Q117.401 44.299 114.772 45.625Q112.144 46.95 108.909 46.95ZM109.044 42.592L109.044 42.592Q110.841 42.592 112.077 41.693Q113.312 40.795 113.986 39.065Q114.66 37.335 114.66 34.909L114.66 34.909Q114.66 32.348 113.964 30.551Q113.267 28.754 111.942 27.765Q110.616 26.777 108.774 26.777L108.774 26.777Q106.977 26.777 105.719 27.698Q104.461 28.619 103.787 30.349Q103.113 32.078 103.113 34.505L103.113 34.505Q103.113 38.324 104.686 40.458Q106.258 42.592 109.044 42.592Z"/>
    <path d="M128.588 46.321L122.927 46.321L122.927 34.055L122.882 15.05L128.633 15.05L128.633 21.52Q128.633 22.374 128.543 23.699Q128.453 25.024 128.274 26.552Q128.094 28.08 127.914 29.607Q127.735 31.135 127.555 32.438L127.555 32.438L128.139 32.438Q128.588 28.933 129.622 26.664Q130.655 24.395 132.362 23.317Q134.07 22.239 136.451 22.239L136.451 22.239Q140.36 22.239 142.247 25.002Q144.134 27.765 144.134 33.336L144.134 33.336L144.134 46.321L138.428 46.321L138.428 33.786Q138.428 30.371 137.462 28.798Q136.496 27.226 134.474 27.226L134.474 27.226Q132.677 27.226 131.374 28.461Q130.071 29.697 129.352 32.056Q128.633 34.415 128.588 37.829L128.588 37.829L128.588 46.321Z"/>
    <path d="M158.017 46.95L158.017 46.95Q155.007 46.95 152.828 46.051Q150.649 45.153 149.211 43.558Q147.773 41.963 147.077 39.784Q146.38 37.605 146.38 34.999L146.38 34.999Q146.38 32.348 147.077 30.034Q147.773 27.72 149.166 25.968Q150.559 24.216 152.67 23.227Q154.782 22.239 157.613 22.239L157.613 22.239Q160.308 22.239 162.353 23.16Q164.397 24.081 165.7 25.811Q167.003 27.54 167.542 29.922Q168.081 32.303 167.767 35.268L167.767 35.268L149.975 35.493L149.975 32.168L163.768 31.944L162.51 33.875Q162.735 31.584 162.218 30.034Q161.701 28.484 160.533 27.653Q159.365 26.822 157.613 26.822L157.613 26.822Q155.726 26.822 154.445 27.81Q153.165 28.798 152.536 30.573Q151.907 32.348 151.907 34.774L151.907 34.774Q151.907 38.683 153.502 40.637Q155.097 42.592 158.107 42.592L158.107 42.592Q159.5 42.592 160.421 42.187Q161.342 41.783 161.926 41.132Q162.51 40.48 162.78 39.649Q163.049 38.818 163.094 37.964L163.094 37.964L168.261 38.503Q168.171 40.166 167.565 41.693Q166.958 43.221 165.722 44.389Q164.487 45.557 162.577 46.254Q160.668 46.95 158.017 46.95Z"/>
    <path d="M176.214 46.321L170.552 46.321L170.552 34.415L170.507 22.868L175.495 22.868L175.225 32.348L175.764 32.348Q176.034 28.798 176.887 26.597Q177.741 24.395 179.089 23.362Q180.437 22.329 182.279 22.329L182.279 22.329Q182.908 22.329 183.627 22.463Q184.346 22.598 185.065 22.958L185.065 22.958L184.795 29.113Q183.986 28.709 183.178 28.506Q182.369 28.304 181.695 28.304L181.695 28.304Q180.033 28.304 178.842 29.338Q177.651 30.371 177 32.325Q176.348 34.28 176.214 37.065L176.214 37.065L176.214 46.321Z"/>
    <path d="M196.881 46.95L196.881 46.95Q193.871 46.95 191.692 46.051Q189.513 45.153 188.075 43.558Q186.637 41.963 185.941 39.784Q185.244 37.605 185.244 34.999L185.244 34.999Q185.244 32.348 185.941 30.034Q186.637 27.72 188.03 25.968Q189.423 24.216 191.535 23.227Q193.646 22.239 196.477 22.239L196.477 22.239Q199.173 22.239 201.217 23.16Q203.261 24.081 204.564 25.811Q205.867 27.54 206.406 29.922Q206.945 32.303 206.631 35.268L206.631 35.268L188.839 35.493L188.839 32.168L202.632 31.944L201.374 33.875Q201.599 31.584 201.082 30.034Q200.565 28.484 199.397 27.653Q198.229 26.822 196.477 26.822L196.477 26.822Q194.59 26.822 193.309 27.81Q192.029 28.798 191.4 30.573Q190.771 32.348 190.771 34.774L190.771 34.774Q190.771 38.683 192.366 40.637Q193.961 42.592 196.971 42.592L196.971 42.592Q198.364 42.592 199.285 42.187Q200.206 41.783 200.79 41.132Q201.374 40.48 201.644 39.649Q201.913 38.818 201.958 37.964L201.958 37.964L207.125 38.503Q207.035 40.166 206.429 41.693Q205.822 43.221 204.587 44.389Q203.351 45.557 201.441 46.254Q199.532 46.95 196.881 46.95Z"/>
    <path d="M215.078 46.321L209.416 46.321L209.416 33.471L209.372 22.868L214.314 22.868L213.999 32.258L214.538 32.258Q214.898 28.843 215.886 26.642Q216.875 24.44 218.582 23.34Q220.289 22.239 222.761 22.239L222.761 22.239Q226.714 22.239 228.669 24.979Q230.623 27.72 230.623 33.336L230.623 33.336L230.623 46.321L224.917 46.321L224.917 33.875Q224.917 30.461 223.929 28.821Q222.94 27.181 220.829 27.181L220.829 27.181Q219.031 27.181 217.751 28.394Q216.47 29.607 215.796 31.988Q215.123 34.37 215.078 37.919L215.078 37.919L215.078 46.321Z"/>
    <path d="M244.506 46.95L244.506 46.95Q241.541 46.95 239.34 46.029Q237.138 45.108 235.7 43.445Q234.263 41.783 233.566 39.582Q232.87 37.38 232.87 34.819L232.87 34.819Q232.87 32.168 233.589 29.899Q234.307 27.63 235.723 25.9Q237.138 24.171 239.295 23.205Q241.451 22.239 244.327 22.239L244.327 22.239Q247.652 22.239 249.808 23.452Q251.965 24.665 253.043 26.642Q254.121 28.619 254.076 31.045L254.076 31.045L248.955 31.854Q248.955 30.236 248.37 29.113Q247.786 27.99 246.73 27.406Q245.675 26.822 244.237 26.822L244.237 26.822Q242.979 26.822 241.968 27.271Q240.957 27.72 240.193 28.686Q239.429 29.652 239.025 31.09Q238.621 32.528 238.621 34.549L238.621 34.549Q238.621 37.2 239.34 38.975Q240.058 40.75 241.406 41.648Q242.754 42.547 244.596 42.547L244.596 42.547Q246.483 42.547 247.562 41.738Q248.64 40.929 249.134 39.649Q249.628 38.368 249.584 36.976L249.584 36.976L254.795 37.515Q254.84 39.492 254.234 41.199Q253.627 42.906 252.347 44.209Q251.066 45.512 249.112 46.231Q247.157 46.95 244.506 46.95Z"/>
    <path d="M267.555 46.95L267.555 46.95Q264.545 46.95 262.366 46.051Q260.187 45.153 258.749 43.558Q257.311 41.963 256.615 39.784Q255.919 37.605 255.919 34.999L255.919 34.999Q255.919 32.348 256.615 30.034Q257.311 27.72 258.704 25.968Q260.097 24.216 262.209 23.227Q264.32 22.239 267.151 22.239L267.151 22.239Q269.847 22.239 271.891 23.16Q273.935 24.081 275.238 25.811Q276.541 27.54 277.08 29.922Q277.62 32.303 277.305 35.268L277.305 35.268L259.513 35.493L259.513 32.168L273.306 31.944L272.048 33.875Q272.273 31.584 271.756 30.034Q271.24 28.484 270.071 27.653Q268.903 26.822 267.151 26.822L267.151 26.822Q265.264 26.822 263.983 27.81Q262.703 28.798 262.074 30.573Q261.445 32.348 261.445 34.774L261.445 34.774Q261.445 38.683 263.04 40.637Q264.635 42.592 267.645 42.592L267.645 42.592Q269.038 42.592 269.959 42.187Q270.88 41.783 271.464 41.132Q272.048 40.48 272.318 39.649Q272.587 38.818 272.632 37.964L272.632 37.964L277.799 38.503Q277.709 40.166 277.103 41.693Q276.496 43.221 275.261 44.389Q274.025 45.557 272.116 46.254Q270.206 46.95 267.555 46.95Z"/>
  </g>
</svg>
SVG;
    $sun = '<svg class="i-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"></path></svg>';
    $moon = '<svg class="i-moon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 14.5A8 8 0 0 1 9.5 4a8 8 0 1 0 10.5 10.5Z"></path></svg>';
    $arrow = '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"></path></svg>';
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
<link rel="canonical" href="{{ $url }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Ascend.com">
<meta property="og:url" content="{{ $url }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="https://ascend.com/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Ascend.com is for sale — one of the world’s elite .com domains, registered 1990, brokered by ATM Holdings">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="https://ascend.com/og-image.png">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="theme-color" content="#F6F6F3" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#0B0B0D" media="(prefers-color-scheme: dark)">
<meta name="color-scheme" content="light dark">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="alternate" type="text/plain" href="/llms.txt" title="LLM summary">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@400;500&amp;family=Geist:wght@400;500;600&amp;display=swap">
<script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>
@verbatim
<script>
(function () {
  var d = document.documentElement, t = null;
  try { t = localStorage.getItem('theme'); } catch (e) {}
  d.dataset.theme = t || (matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
  d.classList.add('js');
})();
</script>
<style>
:root{
  --bg:#F6F6F3;--bg2:#EDEDE8;--card:#FFFFFF;--ink:#0B0B0D;--muted:#5A5A62;--line:rgba(11,11,13,.12);
  --acc:#2F5BEA;--acc-ink:#FFFFFF;--hover:rgba(11,11,13,.06);--glass:rgba(246,246,243,.72);--shadow:rgba(11,11,13,.18);
  color-scheme:light;interpolate-size:allow-keywords;
}
@media (prefers-color-scheme:dark){:root:not([data-theme="light"]){
  --bg:#0B0B0D;--bg2:#121215;--card:#141417;--ink:#F3F3EF;--muted:#A0A0A8;--line:rgba(243,243,239,.12);
  --acc:#5B8CFF;--acc-ink:#0B0B0D;--hover:rgba(243,243,239,.08);--glass:rgba(11,11,13,.66);--shadow:rgba(0,0,0,.6);color-scheme:dark}}
:root[data-theme="dark"]{
  --bg:#0B0B0D;--bg2:#121215;--card:#141417;--ink:#F3F3EF;--muted:#A0A0A8;--line:rgba(243,243,239,.12);
  --acc:#5B8CFF;--acc-ink:#0B0B0D;--hover:rgba(243,243,239,.08);--glass:rgba(11,11,13,.66);--shadow:rgba(0,0,0,.6);color-scheme:dark}

*{box-sizing:border-box}
html{scroll-behavior:smooth;-webkit-text-size-adjust:100%}
body{margin:0;background:var(--bg);color:var(--ink);font:400 17px/1.6 'Geist',system-ui,-apple-system,sans-serif;-webkit-font-smoothing:antialiased;transition:background-color .4s,color .4s}
a{color:inherit}
img,svg{display:block}
.wrap{max-width:1180px;margin:0 auto;padding:0 16px}
@media (min-width:760px){.wrap{padding:0 40px}}
.mono{font-family:'Geist Mono',ui-monospace,monospace}
.acc-fill{fill:var(--acc)}
.sr-only{position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0 0 0 0);white-space:nowrap}
.skip{position:absolute;left:16px;top:-60px;z-index:100;background:var(--ink);color:var(--bg);padding:10px 16px;border-radius:999px;text-decoration:none}
.skip:focus{top:16px}
:focus-visible{outline:2px solid var(--acc);outline-offset:3px}
::selection{background:var(--acc);color:var(--acc-ink)}

/* Buttons */
.btn{display:inline-flex;align-items:center;justify-content:center;gap:10px;min-height:52px;padding:0 24px;border-radius:999px;font:500 16px/1 'Geist',system-ui,sans-serif;text-decoration:none;border:1px solid transparent;cursor:pointer;transition:transform .35s cubic-bezier(.3,1.4,.5,1),background-color .25s,border-color .25s,color .25s}
.btn:hover{transform:translateY(-2px)}
.btn:active{transform:translateY(0) scale(.98)}
.btn svg{transition:transform .35s cubic-bezier(.3,1.4,.5,1)}
.btn:hover svg{transform:translateX(3px)}
.btn-primary{background:var(--ink);color:var(--bg)}
.btn-ghost{border-color:var(--line);color:var(--ink);background:transparent}
.btn-ghost:hover{border-color:var(--ink)}
.chip-btn{display:inline-flex;align-items:center;justify-content:center;width:44px;height:44px;border-radius:999px;border:1px solid var(--line);background:var(--glass);color:var(--ink);cursor:pointer;backdrop-filter:blur(10px);-webkit-backdrop-filter:blur(10px);transition:border-color .25s,transform .35s cubic-bezier(.3,1.4,.5,1)}
.chip-btn:hover{border-color:var(--ink);transform:rotate(-12deg)}
:root[data-theme="dark"] .i-moon,:root[data-theme="light"] .i-sun{display:none}

/* ---------- Hero ---------- */
.hero{position:relative;min-height:100svh;display:flex;flex-direction:column;justify-content:center;overflow:hidden;padding:96px 0 120px;isolation:isolate}
.hero-top{position:absolute;top:0;left:0;right:0;display:flex;justify-content:space-between;align-items:center;padding:20px 16px}
@media (min-width:760px){.hero-top{padding:24px 40px}}
.hero-tag{font:500 12px/1 'Geist Mono',monospace;letter-spacing:.12em;text-transform:uppercase;color:var(--muted)}
.field{position:absolute;inset:0;z-index:-1;pointer-events:none;-webkit-mask-image:linear-gradient(to bottom,transparent,#000 30%,#000 70%,transparent);mask-image:linear-gradient(to bottom,transparent,#000 30%,#000 70%,transparent)}
.field i{position:absolute;bottom:-30%;width:1px;background:linear-gradient(to top,transparent,var(--ink));opacity:.14;animation:rise var(--dur) linear var(--delay) infinite}
.field i.dot::before{content:"";position:absolute;top:-4px;left:-3px;width:7px;height:7px;border-radius:50%;background:var(--acc)}
.field i.dot{opacity:.5}
@keyframes rise{from{transform:translateY(0)}to{transform:translateY(-160svh)}}
.hero-inner{display:flex;flex-direction:column;align-items:center;text-align:center}
.eyebrow{display:inline-flex;align-items:center;gap:10px;padding:8px 14px 8px 10px;border-radius:999px;border:1px solid var(--line);background:var(--glass);backdrop-filter:blur(10px);-webkit-backdrop-filter:blur(10px);font-size:14px;color:var(--muted)}
.eyebrow b{display:inline-block;width:8px;height:8px;border-radius:50%;background:var(--acc);box-shadow:0 0 0 0 var(--acc);animation:ping 2.4s ease-out infinite}
@keyframes ping{0%{box-shadow:0 0 0 0 color-mix(in srgb,var(--acc) 60%,transparent)}80%,100%{box-shadow:0 0 0 10px transparent}}
.hero h1{margin:14px 0 0;font-size:clamp(34px,5.6vw,64px);line-height:1.02;letter-spacing:-.04em;font-weight:600;max-width:15ch;text-wrap:balance}
.hero .lede{margin:22px auto 0;max-width:58ch;font-size:clamp(16px,1.8vw,19px);color:var(--muted);text-wrap:pretty}
.hero .lede a{color:var(--ink);text-decoration-color:var(--acc);text-underline-offset:4px;text-decoration-thickness:2px}
.hero-cta{display:flex;gap:12px;flex-wrap:wrap;justify-content:center;margin-top:34px}
.hero-contact{margin-top:20px;font-size:15px;color:var(--muted)}
.hero-contact a{color:var(--ink);text-underline-offset:4px}
.scroll-cue{position:absolute;left:50%;bottom:28px;transform:translateX(-50%);display:flex;flex-direction:column;align-items:center;gap:10px;font:500 11px/1 'Geist Mono',monospace;letter-spacing:.14em;text-transform:uppercase;color:var(--muted);text-decoration:none}
.scroll-cue span{width:1px;height:44px;background:var(--line);position:relative;overflow:hidden}
.scroll-cue span::after{content:"";position:absolute;left:0;top:-50%;width:1px;height:50%;background:var(--ink);animation:cue 2s cubic-bezier(.6,0,.3,1) infinite}
@keyframes cue{to{top:110%}}

/* Hero entrance */
.js .h-in{opacity:0;transform:translateY(18px);animation:h-in .9s cubic-bezier(.2,.8,.2,1) forwards;animation-delay:var(--d)}
@keyframes h-in{to{opacity:1;transform:none}}

/* ---------- Animated wordmark ---------- */
.wm{appearance:none;background:none;border:0;padding:12px;margin:18px 0 0;cursor:pointer;color:inherit;border-radius:24px;-webkit-tap-highlight-color:transparent}
.wm svg{width:min(80vw,460px,calc((100svh - 420px) * 2));min-width:min(80vw,260px);height:auto;overflow:visible}
.amark g{transform-box:fill-box;transform-origin:center}
.amark svg{overflow:visible}
.js .amark:not(.play),.js .amark:not(.play) *{animation-play-state:paused!important}
.compact .as-s,.compact .as-ext{stroke-width:11px}
.amark.compact:hover .as-dh{transform:translateY(-13px)}
@keyframes as-launch-c{0%{transform:none;animation-timing-function:cubic-bezier(.2,.7,.3,1)}30%{transform:translateY(-40px);animation-timing-function:cubic-bezier(.6,0,.8,.4)}58%{transform:none;animation-timing-function:cubic-bezier(.2,.7,.3,1)}74%{transform:translateY(-9px);animation-timing-function:cubic-bezier(.6,0,.8,.4)}88%{transform:none}100%{transform:none}}
.compact.ca .as-dk,.compact.cb .as-dk{animation:as-launch-c 1s linear}
.compact.cb .as-dk{animation-name:as-launch-d}
@keyframes as-launch-d{0%{transform:none;animation-timing-function:cubic-bezier(.2,.7,.3,1)}30%{transform:translateY(-40px);animation-timing-function:cubic-bezier(.6,0,.8,.4)}58%{transform:none;animation-timing-function:cubic-bezier(.2,.7,.3,1)}74%{transform:translateY(-9px);animation-timing-function:cubic-bezier(.6,0,.8,.4)}88%{transform:none}100%{transform:none}}
.as-s,.as-ext{fill:none;stroke:var(--ink);stroke-width:9px;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:1 1.1;stroke-dashoffset:1.05;transition:stroke .4s}
.as-s{animation:as-draw .7s cubic-bezier(.6,0,.3,1) calc(.25s + var(--i)*.11s) forwards}
.as-ext{animation:as-draw .6s cubic-bezier(.2,.8,.2,1) 1.35s forwards}
@keyframes as-draw{to{stroke-dashoffset:0}}
.as-dot{fill:var(--acc)}
.as-halo,.as-burst{fill:none;stroke:var(--acc);stroke-width:1.5px;opacity:0}
.as-halo{animation:as-halo 3s ease-out 2.4s infinite}
@keyframes as-halo{0%{transform:scale(1);opacity:.6}70%,100%{transform:scale(2.6);opacity:0}}
.as-rest{transition:transform .5s cubic-bezier(.3,1.3,.5,1),opacity .5s ease}
.amark:hover .as-rest{transform:translateY(3px);opacity:.82}
.amark .as-xk,.amark .as-xh{transform-origin:50% 100%}
.as-xh{transition:transform .55s cubic-bezier(.3,1.5,.5,1)}
.amark:hover .as-xh{transform:scaleY(1.18)}
.as-dh{transition:transform .55s cubic-bezier(.3,1.5,.5,1)}
.amark:hover .as-dh{transform:translateY(-21px)}
.as-di{animation:as-pop .55s ease-out 1.85s backwards}
@keyframes as-pop{0%{transform:scale(0)}60%{transform:scale(1.35)}100%{transform:none}}
.as-dw{animation:as-float 3s ease-in-out 2.4s infinite}
@keyframes as-float{0%,100%{transform:none}50%{transform:translateY(-5px)}}
.ca .as-xk{animation:as-twang-a .9s ease-out}.cb .as-xk{animation:as-twang-b .9s ease-out}
@keyframes as-twang-a{0%,100%{transform:none}15%{transform:scaleY(.9)}40%{transform:scaleY(1.12)}60%{transform:scaleY(.97)}80%{transform:scaleY(1.02)}}
@keyframes as-twang-b{0%,100%{transform:none}15%{transform:scaleY(.9)}40%{transform:scaleY(1.12)}60%{transform:scaleY(.97)}80%{transform:scaleY(1.02)}}
.ca .as-dk{animation:as-launch-a 1.15s linear}.cb .as-dk{animation:as-launch-b 1.15s linear}
@keyframes as-launch-a{0%{transform:none;animation-timing-function:cubic-bezier(.2,.7,.3,1)}28%{transform:translateY(-64px);animation-timing-function:cubic-bezier(.6,0,.8,.4)}56%{transform:none;animation-timing-function:cubic-bezier(.2,.7,.3,1)}70%{transform:translateY(-14px);animation-timing-function:cubic-bezier(.6,0,.8,.4)}82%{transform:none;animation-timing-function:cubic-bezier(.2,.7,.3,1)}91%{transform:translateY(-4px);animation-timing-function:cubic-bezier(.6,0,.8,.4)}100%{transform:none}}
@keyframes as-launch-b{0%{transform:none;animation-timing-function:cubic-bezier(.2,.7,.3,1)}28%{transform:translateY(-64px);animation-timing-function:cubic-bezier(.6,0,.8,.4)}56%{transform:none;animation-timing-function:cubic-bezier(.2,.7,.3,1)}70%{transform:translateY(-14px);animation-timing-function:cubic-bezier(.6,0,.8,.4)}82%{transform:none;animation-timing-function:cubic-bezier(.2,.7,.3,1)}91%{transform:translateY(-4px);animation-timing-function:cubic-bezier(.6,0,.8,.4)}100%{transform:none}}
.ca .as-burst{animation:as-burst-a .8s cubic-bezier(.2,.7,.3,1) .62s}.cb .as-burst{animation:as-burst-b .8s cubic-bezier(.2,.7,.3,1) .62s}
@keyframes as-burst-a{0%{transform:scale(1);opacity:.9}100%{transform:scale(4);opacity:0}}
@keyframes as-burst-b{0%{transform:scale(1);opacity:.9}100%{transform:scale(4);opacity:0}}

/* ---------- Pill dock navigation (appears after the hero) ---------- */
.dock{position:fixed;z-index:50;left:50%;top:14px;translate:-50% 0;display:flex;align-items:center;gap:4px;padding:5px;border-radius:999px;isolation:isolate;visibility:hidden;pointer-events:none;transition:visibility 0s linear .6s}
.dock::before{content:"";position:absolute;inset:0;z-index:-1;border-radius:999px;background:var(--glass);backdrop-filter:blur(18px) saturate(1.5);-webkit-backdrop-filter:blur(18px) saturate(1.5);border:1px solid var(--line);box-shadow:0 18px 50px -20px var(--shadow);clip-path:inset(0 50% 0 50% round 999px);transition:clip-path .6s cubic-bezier(.2,.8,.2,1)}
.nav-on .dock{visibility:visible;pointer-events:auto;transition:visibility 0s}
.nav-on .dock::before{clip-path:inset(0 0 0 0 round 999px);transition:clip-path .7s cubic-bezier(.2,.8,.2,1)}
.dock [data-k]{opacity:0;transform:translateY(-10px) scale(.85);transition:opacity .3s ease,transform .5s cubic-bezier(.3,1.5,.5,1);transition-delay:0s}
.nav-on .dock [data-k]{opacity:1;transform:none;transition-delay:calc(120ms + var(--k)*55ms)}
.dock-mark{display:flex;align-items:center;justify-content:center;height:42px;padding:0 14px 0 16px;border-radius:999px;color:var(--ink);text-decoration:none;transition:background-color .25s}
.dock-mark:hover{background:var(--hover)}
.dock-mark svg{width:auto;height:34px}
@media (max-width:759px){.dock-mark{padding:0 10px 0 12px}.dock-mark svg{height:30px}}
.dock-links{position:relative;display:flex;gap:2px}
.dock-ind{position:absolute;top:0;left:0;height:100%;width:0;border-radius:999px;background:var(--hover);opacity:0;transition:transform .5s cubic-bezier(.3,1.2,.4,1),width .5s cubic-bezier(.3,1.2,.4,1),opacity .3s}
.dock-links a{position:relative;z-index:1;display:flex;align-items:center;height:42px;padding:0 15px;border-radius:999px;font-size:14px;font-weight:500;color:var(--muted);text-decoration:none;white-space:nowrap;transition:color .25s}
.dock-links a:hover,.dock-links a.active{color:var(--ink)}
.dock .chip-btn{width:42px;height:42px;border:0;background:transparent;backdrop-filter:none}
.dock-cta{display:flex;align-items:center;gap:8px;height:42px;padding:0 18px;border-radius:999px;background:var(--ink);color:var(--bg);font-size:14px;font-weight:500;text-decoration:none;white-space:nowrap}
.dock-cta:hover{background:var(--acc);color:var(--acc-ink)}
.dock-menu{display:none}
@media (max-width:759px){
  .dock{top:auto;bottom:calc(12px + env(safe-area-inset-bottom))}
  .dock [data-k]{transform:translateY(10px) scale(.85)}
  .dock-menu{display:inline-flex;align-items:center;gap:8px;height:42px;padding:0 16px;border-radius:999px;border:0;background:transparent;color:var(--ink);font:500 14px/1 'Geist',system-ui,sans-serif;cursor:pointer}
  .dock-menu i{position:relative;display:block;width:16px;height:12px}
  .dock-menu i::before,.dock-menu i::after{content:"";position:absolute;left:0;width:16px;height:2px;border-radius:2px;background:currentColor;transition:top .3s,rotate .3s cubic-bezier(.3,1.4,.5,1)}
  .dock-menu i::before{top:2px}.dock-menu i::after{top:8px}
  .dock.open .dock-menu i::before{top:5px;rotate:45deg}.dock.open .dock-menu i::after{top:5px;rotate:-45deg}
  .dock-ind{display:none}
  .dock-links{position:absolute;bottom:calc(100% + 12px);left:50%;translate:-50% 0;flex-direction:column;align-items:center;gap:8px;pointer-events:none}
  .dock-links a{height:48px;padding:0 22px;font-size:16px;color:var(--ink);background:var(--card);border:1px solid var(--line);backdrop-filter:blur(18px);-webkit-backdrop-filter:blur(18px);box-shadow:0 12px 30px -14px var(--shadow)}
  .dock-links a.active{background:var(--ink);color:var(--bg)}
  .nav-on .dock .dock-links a{opacity:0;transform:translateY(16px) scale(.8);transition-delay:0s}
  .nav-on .dock.open .dock-links{pointer-events:auto}
  .nav-on .dock.open .dock-links a{opacity:1;transform:none;transition-delay:calc(var(--m)*45ms)}
}

/* ---------- Sections ---------- */
section{scroll-margin-top:90px}
.sec{padding:clamp(80px,12vw,150px) 0}
.label{display:inline-flex;align-items:center;gap:10px;font:500 12px/1 'Geist Mono',monospace;letter-spacing:.14em;text-transform:uppercase;color:var(--muted)}
.label::before{content:"";width:18px;height:1px;background:var(--acc)}
h2{margin:18px 0 0;font-size:clamp(32px,5vw,58px);line-height:1.04;letter-spacing:-.035em;font-weight:600;max-width:18ch;text-wrap:balance}
.sec-intro{margin:20px 0 0;max-width:60ch;color:var(--muted);font-size:18px;text-wrap:pretty}

.js [data-reveal]{opacity:0;transform:translateY(28px);transition:opacity .8s cubic-bezier(.2,.8,.2,1),transform .9s cubic-bezier(.2,.8,.2,1);transition-delay:calc(var(--d,0)*80ms)}
.js [data-reveal].in{opacity:1;transform:none}

/* Facts */
.facts{border-top:1px solid var(--line);border-bottom:1px solid var(--line);background:var(--bg2)}
.facts dl{margin:0;display:grid;grid-template-columns:repeat(4,minmax(0,1fr))}
@media (max-width:759px){.facts dl{grid-template-columns:repeat(2,minmax(0,1fr))}}
.fact{padding:36px 20px;border-left:1px solid var(--line);display:flex;flex-direction:column-reverse;gap:8px}
.fact:first-child{border-left:0}
@media (max-width:759px){.fact:nth-child(3){border-left:0}.fact:nth-child(n+3){border-top:1px solid var(--line)}}
.fact dt{font-size:14px;color:var(--muted)}
.fact dd{margin:0;font-size:clamp(28px,4vw,44px);font-weight:600;letter-spacing:-.03em;line-height:1}

/* Why */
.why-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px;margin-top:56px}
@media (max-width:759px){.why-grid{grid-template-columns:minmax(0,1fr)}}
.why{position:relative;padding:32px;border-radius:28px;background:var(--card);border:1px solid var(--line);overflow:hidden;transition:transform .5s cubic-bezier(.3,1.3,.5,1),border-color .3s}
.why:hover{transform:translateY(-4px);border-color:color-mix(in srgb,var(--acc) 50%,var(--line))}
.why .n{font:500 13px/1 'Geist Mono',monospace;color:var(--acc)}
.why h3{margin:40px 0 0;font-size:24px;letter-spacing:-.02em;line-height:1.2;font-weight:600}
.why p{margin:12px 0 0;color:var(--muted);text-wrap:pretty}
.why .stem{position:absolute;right:32px;top:32px;width:2px;height:28px;border-radius:2px;background:var(--ink);transform-origin:bottom;transition:transform .6s cubic-bezier(.3,1.5,.5,1)}
.why .stem::after{content:"";position:absolute;left:-3px;top:-12px;width:8px;height:8px;border-radius:50%;background:var(--acc);transition:transform .6s cubic-bezier(.3,1.5,.5,1)}
.why:hover .stem{transform:scaleY(1.8)}

/* Industries */
.ind-head{display:grid;gap:24px}
@media (min-width:960px){.ind-head{grid-template-columns:minmax(0,1.1fr) minmax(0,1fr);align-items:end}}
.marquee{margin-top:56px;overflow:hidden;border-top:1px solid var(--line);border-bottom:1px solid var(--line);padding:18px 0;-webkit-mask-image:linear-gradient(to right,transparent,#000 10%,#000 90%,transparent);mask-image:linear-gradient(to right,transparent,#000 10%,#000 90%,transparent)}
.marquee-track{display:flex;gap:40px;width:max-content;animation:marquee 40s linear infinite}
.marquee:hover .marquee-track{animation-play-state:paused}
.marquee span{font-size:clamp(22px,3vw,34px);font-weight:500;letter-spacing:-.02em;white-space:nowrap;display:flex;align-items:center;gap:40px}
.marquee span::after{content:"";width:8px;height:8px;border-radius:50%;background:var(--acc)}
@keyframes marquee{to{transform:translateX(-50%)}}
.ind-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:12px;margin-top:32px}
@media (max-width:959px){.ind-grid{grid-template-columns:repeat(2,minmax(0,1fr))}}
@media (max-width:559px){.ind-grid{grid-template-columns:minmax(0,1fr)}}
.ind{position:relative;padding:26px 24px 26px;border-radius:22px;border:1px solid var(--line);background:var(--card);overflow:hidden;transition:transform .5s cubic-bezier(.3,1.3,.5,1),background-color .35s,color .35s,border-color .35s}
.ind::before{content:"";position:absolute;inset:auto 0 0 0;height:0;background:var(--ink);transition:height .55s cubic-bezier(.6,0,.2,1);z-index:0}
.ind > *{position:relative;z-index:1}
.ind:hover{transform:translateY(-3px);color:var(--bg);border-color:var(--ink)}
.ind:hover::before{height:100%}
.ind:hover p{color:color-mix(in srgb,var(--bg) 78%,transparent)}
.ind h3{margin:0;font-size:19px;font-weight:600;letter-spacing:-.01em;display:flex;justify-content:space-between;align-items:center;gap:12px}
.ind h3 small{font:500 11px/1 'Geist Mono',monospace;color:var(--acc);letter-spacing:.06em}
.ind p{margin:10px 0 0;font-size:15px;color:var(--muted);transition:color .35s;text-wrap:pretty}

/* Heritage */
.tlw{position:relative;margin-top:64px}
.timeline{list-style:none;margin:0;padding:0;display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:24px}
@media (max-width:759px){.timeline{grid-template-columns:minmax(0,1fr);gap:40px;padding-left:28px}}
.tl-line{position:absolute;left:0;right:0;top:9px;height:2px;background:var(--line);overflow:hidden}
.tl-line::after{content:"";position:absolute;inset:0;background:var(--acc);transform:scaleX(0);transform-origin:left;transition:transform 1.6s cubic-bezier(.6,0,.2,1)}
.tlw.in .tl-line::after{transform:scaleX(1)}
@media (max-width:759px){.tl-line{left:9px;right:auto;top:0;bottom:0;width:2px;height:auto}.tl-line::after{transform:scaleY(0);transform-origin:top}.tlw.in .tl-line::after{transform:scaleY(1)}}
.tl{position:relative;padding-top:44px}
@media (max-width:759px){.tl{padding-top:0}}
.tl::before{content:"";position:absolute;top:0;left:0;width:20px;height:20px;border-radius:50%;background:var(--bg);border:2px solid var(--acc);transform:scale(0);transition:transform .5s cubic-bezier(.3,1.6,.5,1);transition-delay:calc(var(--d)*450ms + 200ms)}
@media (max-width:759px){.tl::before{left:-28px}}
.tlw.in .tl::before{transform:none}
.tl .yr{font-size:clamp(34px,4.6vw,52px);font-weight:600;letter-spacing:-.04em;line-height:1}
.tl p{margin:12px 0 0;color:var(--muted);max-width:32ch}

/* FAQ */
.faq-grid{display:grid;gap:40px}
@media (min-width:960px){.faq-grid{grid-template-columns:minmax(0,.8fr) minmax(0,1.2fr)}}
.faq{border-top:1px solid var(--line)}
.faq details{border-bottom:1px solid var(--line)}
.faq summary{list-style:none;display:flex;justify-content:space-between;align-items:center;gap:20px;min-height:64px;padding:18px 0;cursor:pointer;font-size:19px;font-weight:500;letter-spacing:-.01em}
.faq summary::-webkit-details-marker{display:none}
.faq summary i{flex:none;position:relative;width:28px;height:28px;border-radius:50%;border:1px solid var(--line);transition:transform .45s cubic-bezier(.3,1.4,.5,1),background-color .3s}
.faq summary i::before,.faq summary i::after{content:"";position:absolute;left:50%;top:50%;width:10px;height:1.5px;background:currentColor;translate:-50% -50%}
.faq summary i::after{rotate:90deg;transition:rotate .45s cubic-bezier(.3,1.4,.5,1)}
.faq details[open] summary i{transform:rotate(180deg);background:var(--hover)}
.faq details[open] summary i::after{rotate:0deg}
.faq details::details-content{height:0;overflow:clip;transition:height .45s cubic-bezier(.2,.8,.2,1),content-visibility .45s allow-discrete}
.faq details[open]::details-content{height:auto}
.faq .a{padding:0 48px 24px 0;color:var(--muted);margin:0}

/* Enquire */
.enquire{position:relative;overflow:hidden;background:var(--ink);color:var(--bg);border-radius:clamp(28px,4vw,44px);padding:clamp(40px,8vw,96px) clamp(24px,6vw,80px);isolation:isolate}
.enquire .label{color:color-mix(in srgb,var(--bg) 70%,transparent)}
.enquire h2{max-width:14ch}
.enquire p{max-width:52ch;color:color-mix(in srgb,var(--bg) 72%,transparent);margin:20px 0 0;font-size:18px}
.mail{display:flex;flex-wrap:wrap;align-items:center;gap:12px;margin-top:40px}
.mail a.big{font-size:clamp(22px,4.2vw,44px);font-weight:600;letter-spacing:-.03em;text-decoration:none;background:linear-gradient(var(--acc),var(--acc)) 0 100%/0 3px no-repeat;padding-bottom:4px;transition:background-size .5s cubic-bezier(.6,0,.2,1);overflow-wrap:anywhere}
.mail a.big:hover{background-size:100% 3px}
.copy{display:inline-flex;align-items:center;gap:8px;min-height:44px;padding:0 16px;border-radius:999px;border:1px solid color-mix(in srgb,var(--bg) 30%,transparent);background:transparent;color:var(--bg);font:500 14px/1 'Geist',system-ui,sans-serif;cursor:pointer}
.copy:hover{border-color:var(--bg)}
.enquire .row{display:flex;gap:12px;flex-wrap:wrap;margin-top:32px}
.enquire .btn-primary{background:var(--bg);color:var(--ink)}
.enquire .btn-ghost{color:var(--bg);border-color:color-mix(in srgb,var(--bg) 30%,transparent)}
.enquire .btn-ghost:hover{border-color:var(--bg)}
.enquire .ghost-d{position:absolute;right:-40px;bottom:-60px;width:clamp(200px,34vw,420px);color:color-mix(in srgb,var(--bg) 10%,transparent);z-index:-1}
.enquire .ghost-d .acc-fill{fill:var(--acc)}

/* Footer */
.site-foot{border-top:1px solid var(--line);background:var(--bg2);padding:64px 0 calc(110px + env(safe-area-inset-bottom))}
@media (min-width:760px){.site-foot{padding-bottom:36px}}
.foot-top{display:grid;gap:40px;grid-template-columns:minmax(0,1fr);padding-bottom:48px}
@media (min-width:760px){.foot-top{grid-template-columns:repeat(2,minmax(0,1fr))}}
@media (min-width:1180px){.foot-top{grid-template-columns:minmax(0,1.2fr) minmax(0,.7fr) minmax(0,1fr) minmax(0,1.1fr)}}
@media (min-width:760px) and (max-width:1179px){.foot-cta{grid-column:1 / -1}}
.foot-logo{display:inline-flex;color:var(--ink)}
.foot-logo svg{height:52px;width:auto}
.foot-brand p{margin:16px 0 0;color:var(--muted);font-size:15px;max-width:30ch}
.foot-col{display:flex;flex-direction:column;gap:6px}
.foot-col h2{margin:0 0 8px;font:500 11px/1 'Geist Mono',monospace;letter-spacing:.16em;text-transform:uppercase;color:var(--muted);max-width:none}
.foot-col a{display:inline-flex;align-items:center;min-height:32px;font-size:15px;color:color-mix(in srgb,var(--ink) 78%,transparent);text-decoration:none;width:fit-content;transition:color .25s}
.foot-col a:hover{color:var(--ink)}
.foot-cta{display:flex;flex-direction:column;align-items:flex-start;gap:14px;min-width:0}
.foot-cta .btn{max-width:100%;text-align:center;line-height:1.2;padding-block:12px}
.foot-cta p{margin:0;font-size:18px;font-weight:500;letter-spacing:-.01em}
.foot-bottom{border-top:1px solid var(--line);padding-top:28px;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:20px;font-size:13px;color:var(--muted)}
.foot-bottom p{margin:0}
.foot-credits{display:flex;flex-wrap:wrap;align-items:center;gap:16px 24px}
.foot-credits a{display:inline-flex;align-items:center;gap:12px;min-height:44px;color:var(--ink);text-decoration:none}
.foot-credits span{font:500 10px/1 'Geist Mono',monospace;letter-spacing:.18em;text-transform:uppercase;color:var(--muted);transition:color .25s}
.foot-credits a:hover span{color:var(--ink)}
.foot-credits svg{width:auto;opacity:.75;transition:opacity .25s}
.foot-credits a:hover svg{opacity:1}
.credit-qq svg{height:13px}
.credit-coh svg{height:24px}
.foot-sep{width:1px;height:18px;background:var(--line)}
@media (max-width:559px){.foot-sep{display:none}}

/* Theme switch reveal */
::view-transition-old(root),::view-transition-new(root){animation:none;mix-blend-mode:normal}

@media (prefers-reduced-motion:reduce){
  html{scroll-behavior:auto}
  *,*::before,*::after{animation-duration:1ms!important;animation-delay:0s!important;animation-iteration-count:1!important;transition-duration:1ms!important;transition-delay:0s!important}
  .field{display:none}
  .marquee-track{animation:none}
}
</style>
@endverbatim
</head>
<body>
<a class="skip" href="#main">Skip to content</a>

<nav class="dock" id="dock" aria-label="Primary">
    <a class="dock-mark amark compact" href="#top" data-k style="--k: 0" aria-label="Ascend.com — back to top">{!! $amark('compact') !!}</a>
    <div class="dock-links" id="dock-links">
        <span class="dock-ind" aria-hidden="true"></span>
        <a href="#why" data-k style="--k: 1; --m: 3">Why Ascend</a>
        <a href="#industries" data-k style="--k: 2; --m: 2">Industries</a>
        <a href="#heritage" data-k style="--k: 3; --m: 1">Heritage</a>
        <a href="#faq" data-k style="--k: 4; --m: 0">FAQ</a>
    </div>
    <button class="dock-menu" type="button" data-k style="--k: 1" aria-expanded="false" aria-controls="dock-links"><i aria-hidden="true"></i>Menu</button>
    <button class="chip-btn theme-toggle" type="button" data-k style="--k: 5" aria-label="Toggle dark mode">{!! $sun !!}{!! $moon !!}</button>
    <a class="dock-cta" href="{{ $mailto }}" data-k style="--k: 6">Enquire</a>
</nav>

<header class="hero" id="top">
    <div class="field" aria-hidden="true">
        @foreach ($lines as $l)
            <i class="{{ $l['dot'] ? 'dot' : '' }}" style="left: {{ $l['x'] }}%; height: {{ $l['h'] }}px; --dur: {{ $l['dur'] }}s; --delay: {{ $l['delay'] }}s"></i>
        @endforeach
    </div>

    <div class="hero-top">
        <span class="hero-tag h-in" style="--d: .1s">Ascend.com</span>
        <button class="chip-btn theme-toggle h-in" style="--d: .2s" type="button" aria-label="Toggle dark mode">{!! $sun !!}{!! $moon !!}</button>
    </div>

    <div class="wrap hero-inner">
        <span class="eyebrow h-in" style="--d: .15s"><b aria-hidden="true"></b>Premium .com domain · Available now</span>

        <button type="button" class="wm amark play" aria-label="Ascend">
            {!! $amark('full') !!}
        </button>

        <h1 class="h-in" style="--d: 1.1s">This is an elite-level .com domain</h1>
        <p class="lede h-in" style="--d: 1.25s">It is being brokered by ATM Holdings (previously owned by Nokia and registered in 1990). Check out <a href="{{ $broker }}" target="_blank" rel="noopener">this resource</a> to see some relevant domain upgrades.</p>
        <div class="hero-cta h-in" style="--d: 1.4s">
            <a class="btn btn-primary" href="{{ $mailto }}">Contact Us About This Domain {!! $arrow !!}</a>
            <a class="btn btn-ghost" href="#industries">See who it fits</a>
        </div>
        <p class="hero-contact h-in" style="--d: 1.55s">Contact us: <a href="mailto:{{ $email }}">{{ $email }}</a></p>
    </div>

    <a class="scroll-cue h-in" style="--d: 1.8s" href="#main" aria-label="Scroll to learn more"><span></span>Scroll</a>
</header>

<main id="main">
    <div class="facts" aria-label="Domain facts">
        <div class="wrap">
            <dl>
                <div class="fact" data-reveal style="--d: 0"><dt>Registered</dt><dd>1990</dd></div>
                <div class="fact" data-reveal style="--d: 1"><dt>Previous owner</dt><dd>Nokia</dd></div>
                <div class="fact" data-reveal style="--d: 2"><dt>One word, six letters</dt><dd>Ascend</dd></div>
                <div class="fact" data-reveal style="--d: 3"><dt>Brokered by ATM Holdings</dt><dd>.com</dd></div>
            </dl>
        </div>
    </div>

    <section class="sec" id="why" aria-labelledby="why-title">
        <div class="wrap">
            <span class="label" data-reveal>Why Ascend.com</span>
            <h2 id="why-title" data-reveal style="--d: 1">A name that means going up.</h2>
            <p class="sec-intro" data-reveal style="--d: 2">Short, positive, easy to spell and impossible to mishear. Ascend.com is the kind of domain a brand is built around, not squeezed into.</p>
            <div class="why-grid">
                @foreach ($why as $i => [$h, $p])
                    <article class="why" data-reveal style="--d: {{ $i }}">
                        <span class="stem" aria-hidden="true"></span>
                        <span class="n">0{{ $i + 1 }}</span>
                        <h3>{{ $h }}</h3>
                        <p>{{ $p }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="sec" id="industries" aria-labelledby="ind-title" style="padding-top: 0">
        <div class="wrap">
            <div class="ind-head">
                <div>
                    <span class="label" data-reveal>Use cases by industry</span>
                    <h2 id="ind-title" data-reveal style="--d: 1">One domain. Every industry that wants to rise.</h2>
                </div>
                <p class="sec-intro" data-reveal style="--d: 2">Ascend describes an outcome — growth, altitude, progress — so it works for almost any category. A few of the businesses it was made for:</p>
            </div>
        </div>
        <div class="marquee" aria-hidden="true">
            <div class="marquee-track">
                @foreach (array_merge($industries, $industries) as [$name])
                    <span>{{ $name }}</span>
                @endforeach
            </div>
        </div>
        <div class="wrap">
            <div class="ind-grid">
                @foreach ($industries as $i => [$name, $text])
                    <article class="ind" data-reveal style="--d: {{ $i % 3 }}">
                        <h3>{{ $name }} <small>{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</small></h3>
                        <p>{{ $text }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="sec" id="heritage" aria-labelledby="her-title" style="padding-top: 0">
        <div class="wrap">
            <span class="label" data-reveal>Heritage</span>
            <h2 id="her-title" data-reveal style="--d: 1">More than three decades of history.</h2>
            <div class="tlw" data-reveal style="--d: 2">
            <span class="tl-line" aria-hidden="true"></span>
            <ol class="timeline">
                <li class="tl" style="--d: 0"><div class="yr">1990</div><p>Ascend.com is registered.</p></li>
                <li class="tl" style="--d: 1"><div class="yr">Nokia</div><p>Previously owned by Nokia.</p></li>
                <li class="tl" style="--d: 2"><div class="yr">Today</div><p>Brokered by ATM Holdings and available to acquire.</p></li>
            </ol>
            </div>
        </div>
    </section>

    <section class="sec" id="faq" aria-labelledby="faq-title" style="padding-top: 0">
        <div class="wrap faq-grid">
            <div>
                <span class="label" data-reveal>FAQ</span>
                <h2 id="faq-title" data-reveal style="--d: 1">Questions about Ascend.com</h2>
            </div>
            <div class="faq" data-reveal style="--d: 2">
                @foreach ($faqs as $i => [$q, $a])
                    <details @if ($i === 0) open @endif>
                        <summary>{{ $q }}<i aria-hidden="true"></i></summary>
                        <p class="a">{{ $a }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    <section class="sec" id="enquire" aria-labelledby="enq-title" style="padding-top: 0">
        <div class="wrap">
            <div class="enquire" data-reveal>
                <div class="ghost-d" aria-hidden="true">{!! $dMark !!}</div>
                <span class="label">Enquire</span>
                <h2 id="enq-title">Contact us about this domain.</h2>
                <p>Ascend.com is being brokered by ATM Holdings. Send an enquiry and the broker will take it from there.</p>
                <div class="mail">
                    <a class="big" href="{{ $mailto }}">{{ $email }}</a>
                    <button class="copy" type="button" data-copy="{{ $email }}">Copy email</button>
                </div>
                <div class="row">
                    <a class="btn btn-primary" href="{{ $mailto }}">Contact Us About This Domain {!! $arrow !!}</a>
                    <a class="btn btn-ghost" href="{{ $broker }}" target="_blank" rel="noopener">See relevant domain upgrades</a>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="site-foot">
    <div class="wrap">
        <div class="foot-top">
            <div class="foot-brand">
                <a href="#top" class="foot-logo amark compact" aria-label="Ascend.com — back to top">{!! $amark('compact') !!}</a>
                <p>One of the world’s elite domain names. Brokered by ATM Holdings.</p>
            </div>
            <nav class="foot-col" aria-label="Explore">
                <h2>Explore</h2>
                <a href="#why">Why Ascend</a>
                <a href="#industries">Industries</a>
                <a href="#heritage">Heritage</a>
                <a href="#faq">FAQ</a>
            </nav>
            <div class="foot-col">
                <h2>Contact</h2>
                <a href="{{ $mailto }}">{{ $email }}</a>
                <a href="{{ $broker }}" target="_blank" rel="noopener">ATM Holdings</a>
                <a href="/llms.txt">llms.txt</a>
            </div>
            <div class="foot-cta">
                <p>Interested in Ascend.com?</p>
                <a class="btn btn-primary" href="{{ $mailto }}">Contact Us About This Domain {!! $arrow !!}</a>
            </div>
        </div>
        <div class="foot-bottom">
            <p>&copy;{{ date('Y') }} Booth.com Ltd. All Rights Reserved.</p>
            <div class="foot-credits">
                <a class="credit-qq" href="https://qquantum.ai/creative-design/domain-landing-pages" target="_blank" rel="noopener" title="QQuantum.ai — domain landing pages designed and built by an AI systems engineering studio">
                    <span>Designed &amp; built by</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-40 -780 5620 1010" role="img" aria-label="QQuantum.ai" fill="none"><title>QQuantum.ai</title><g><path transform="translate(301 0)" d="M338 14Q206 14 128 -58Q50 -131 50 -266V-434Q50 -569 128 -642Q206 -714 338 -714Q470 -714 548 -642Q626 -569 626 -434V-266Q626 -131 548 -58Q470 14 338 14ZM338 -104Q412 -104 453 -147Q494 -190 494 -262V-438Q494 -510 453 -553Q412 -596 338 -596Q265 -596 224 -553Q182 -510 182 -438V-262Q182 -190 224 -147Q265 -104 338 -104ZM384 180Q335 180 304 150Q274 119 274 68V0H402V48Q402 78 430 78H489V180Z" fill="currentColor"/></g><g><path transform="translate(942 0)" d="M259 8Q201 8 158 -18Q114 -45 90 -92Q66 -139 66 -200V-496H192V-210Q192 -154 220 -126Q247 -98 298 -98Q356 -98 388 -136Q420 -175 420 -244V-496H546V0H422V-65H404Q392 -40 359 -16Q326 8 259 8Z" fill="currentColor"/></g><g><path transform="translate(1523 0)" d="M224 14Q171 14 129 -4Q87 -23 62 -58Q38 -94 38 -145Q38 -196 62 -230Q87 -265 130 -282Q174 -300 230 -300H366V-328Q366 -363 344 -386Q322 -408 274 -408Q227 -408 204 -386Q181 -365 174 -331L58 -370Q70 -408 96 -440Q123 -471 168 -490Q212 -510 276 -510Q374 -510 431 -461Q488 -412 488 -319V-134Q488 -104 516 -104H556V0H472Q435 0 411 -18Q387 -36 387 -66V-67H368Q364 -55 350 -36Q336 -16 306 -1Q276 14 224 14ZM246 -88Q299 -88 332 -118Q366 -147 366 -196V-206H239Q204 -206 184 -191Q164 -176 164 -149Q164 -122 185 -105Q206 -88 246 -88Z" fill="currentColor"/></g><g><path transform="translate(2066 0)" d="M70 0V-496H194V-431H212Q224 -457 257 -480Q290 -504 357 -504Q415 -504 458 -478Q502 -451 526 -404Q550 -358 550 -296V0H424V-286Q424 -342 396 -370Q369 -398 318 -398Q260 -398 228 -360Q196 -321 196 -252V0Z" fill="currentColor"/></g><g><path transform="translate(2647 0)" d="M260 0Q211 0 180 -30Q150 -61 150 -112V-392H26V-496H150V-650H276V-496H412V-392H276V-134Q276 -104 304 -104H400V0Z" fill="currentColor"/></g><g><path transform="translate(3068 0)" d="M259 8Q201 8 158 -18Q114 -45 90 -92Q66 -139 66 -200V-496H192V-210Q192 -154 220 -126Q247 -98 298 -98Q356 -98 388 -136Q420 -175 420 -244V-496H546V0H422V-65H404Q392 -40 359 -16Q326 8 259 8Z" fill="currentColor"/></g><g><path transform="translate(3649 0)" d="M70 0V-496H194V-442H212Q225 -467 255 -486Q285 -504 334 -504Q387 -504 419 -484Q451 -463 468 -430H486Q503 -462 534 -483Q565 -504 622 -504Q668 -504 706 -484Q743 -465 766 -426Q788 -386 788 -326V0H662V-317Q662 -358 641 -378Q620 -399 582 -399Q539 -399 516 -372Q492 -344 492 -293V0H366V-317Q366 -358 345 -378Q324 -399 286 -399Q243 -399 220 -372Q196 -344 196 -293V0Z" fill="currentColor"/></g><g><path transform="translate(4468 0)" d="M150 14Q109 14 82 -13Q54 -39 54 -81Q54 -123 82 -150Q109 -176 150 -176Q190 -176 217 -149Q244 -123 244 -81Q244 -39 217 -12Q190 14 150 14Z" fill="#5eb3d6"/></g><g><path transform="translate(4731 0)" d="M224 14Q171 14 129 -4Q87 -23 62 -58Q38 -94 38 -145Q38 -196 62 -230Q87 -265 130 -282Q174 -300 230 -300H366V-328Q366 -363 344 -386Q322 -408 274 -408Q227 -408 204 -386Q181 -365 174 -331L58 -370Q70 -408 96 -440Q123 -471 168 -490Q212 -510 276 -510Q374 -510 431 -461Q488 -412 488 -319V-134Q488 -104 516 -104H556V0H472Q435 0 411 -18Q387 -36 387 -66V-67H368Q364 -55 350 -36Q336 -16 306 -1Q276 14 224 14ZM246 -88Q299 -88 332 -118Q366 -147 366 -196V-206H239Q204 -206 184 -191Q164 -176 164 -149Q164 -122 185 -105Q206 -88 246 -88Z" fill="#5eb3d6"/></g><g><path transform="translate(5274 0)" d="M70 0V-496H196V0ZM133 -554Q99 -554 76 -576Q52 -598 52 -634Q52 -670 76 -692Q99 -714 133 -714Q168 -714 191 -692Q214 -670 214 -634Q214 -598 191 -576Q168 -554 133 -554Z" fill="#5eb3d6"/></g><g><path transform="translate(0 0)" d="M338 14Q206 14 128 -58Q50 -131 50 -266V-434Q50 -569 128 -642Q206 -714 338 -714Q470 -714 548 -642Q626 -569 626 -434V-266Q626 -131 548 -58Q470 14 338 14ZM338 -104Q412 -104 453 -147Q494 -190 494 -262V-438Q494 -510 453 -553Q412 -596 338 -596Q265 -596 224 -553Q182 -510 182 -438V-262Q182 -190 224 -147Q265 -104 338 -104ZM384 180Q335 180 304 150Q274 119 274 68V0H402V48Q402 78 430 78H489V180Z" fill="none" stroke="#c9a75c" stroke-width="55" stroke-linejoin="round"/></g></svg>
                </a>
                <span class="foot-sep" aria-hidden="true"></span>
                <a class="credit-coh" href="https://coherence.com" target="_blank" rel="noopener" title="Coherence — ethical, human-centred AI across sound, education and consciousness">
                    <span>Part of</span>
                    {!! $coherence !!}
                </a>
            </div>
        </div>
    </div>
</footer>

@verbatim
<script>
(function () {
  var root = document.documentElement;
  var reduced = matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* Theme toggle with a circular reveal from the button that was pressed. */
  function label(t) {
    document.querySelectorAll('.theme-toggle').forEach(function (b) {
      b.setAttribute('aria-label', t === 'dark' ? 'Switch to light mode' : 'Switch to dark mode');
    });
  }
  function applyTheme(t) {
    root.dataset.theme = t;
    try { localStorage.setItem('theme', t); } catch (e) {}
    label(t);
  }
  document.querySelectorAll('.theme-toggle').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var next = root.dataset.theme === 'dark' ? 'light' : 'dark';
      if (!document.startViewTransition || reduced) { applyTheme(next); return; }
      var r = btn.getBoundingClientRect(), x = r.left + r.width / 2, y = r.top + r.height / 2;
      var end = Math.hypot(Math.max(x, innerWidth - x), Math.max(y, innerHeight - y));
      document.startViewTransition(function () { applyTheme(next); }).ready.then(function () {
        root.animate({ clipPath: ['circle(0px at ' + x + 'px ' + y + 'px)', 'circle(' + end + 'px at ' + x + 'px ' + y + 'px)'] },
          { duration: 650, easing: 'cubic-bezier(.2,.8,.2,1)', pseudoElement: '::view-transition-new(root)' });
      });
    });
  });
  label(root.dataset.theme);
  try {
    if (!localStorage.getItem('theme')) {
      matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function (e) {
        if (!localStorage.getItem('theme')) { root.dataset.theme = e.matches ? 'dark' : 'light'; label(root.dataset.theme); }
      });
    }
  } catch (e) {}

  /* Wordmark click: the dot launches and the ascender twangs. */
  document.querySelectorAll('.amark').forEach(function (m) {
    var n = 0;
    m.addEventListener('click', function () {
      n++;
      m.classList.remove('ca', 'cb');
      m.classList.add(n % 2 ? 'ca' : 'cb');
    });
  });
  var footMark = document.querySelector('.foot-logo');
  new IntersectionObserver(function (e, o) {
    if (e[0].isIntersecting) { footMark.classList.add('play'); o.disconnect(); }
  }, { threshold: 0.6 }).observe(footMark);

  /* Dock: hidden while the hero is on screen, unfolds once you scroll past it. */
  var dock = document.getElementById('dock'), hero = document.getElementById('top');
  var menu = dock.querySelector('.dock-menu');
  function closeMenu() { dock.classList.remove('open'); menu.setAttribute('aria-expanded', 'false'); }
  new IntersectionObserver(function (e) {
    var past = !e[0].isIntersecting;
    document.body.classList.toggle('nav-on', past);
    if (past) dock.querySelector('.dock-mark').classList.add('play');
    if (!past) closeMenu();
  }, { rootMargin: '-20% 0px 0px 0px' }).observe(hero);

  menu.addEventListener('click', function () {
    var open = dock.classList.toggle('open');
    menu.setAttribute('aria-expanded', open ? 'true' : 'false');
  });
  dock.querySelectorAll('.dock-links a').forEach(function (a) { a.addEventListener('click', closeMenu); });
  document.addEventListener('click', function (e) { if (!dock.contains(e.target)) closeMenu(); });
  dock.addEventListener('keydown', function (e) { if (e.key === 'Escape') { closeMenu(); menu.focus(); } });

  /* Active section: highlight its pill and slide the indicator under it. */
  var links = Array.prototype.slice.call(dock.querySelectorAll('.dock-links a'));
  var ind = dock.querySelector('.dock-ind');
  function setActive(id) {
    links.forEach(function (a) {
      var on = a.getAttribute('href') === '#' + id;
      a.classList.toggle('active', on);
      if (on) { a.setAttribute('aria-current', 'true'); } else { a.removeAttribute('aria-current'); }
      if (on) { ind.style.width = a.offsetWidth + 'px'; ind.style.transform = 'translateX(' + a.offsetLeft + 'px)'; ind.style.opacity = 1; }
    });
    if (!links.some(function (a) { return a.classList.contains('active'); })) ind.style.opacity = 0;
  }
  var spy = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) { if (e.isIntersecting) setActive(e.target.id); });
  }, { rootMargin: '-45% 0px -50% 0px' });
  links.forEach(function (a) { spy.observe(document.querySelector(a.getAttribute('href'))); });
  spy.observe(document.getElementById('enquire'));

  /* Scroll reveals. */
  var rev = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('in'); rev.unobserve(e.target); } });
  }, { threshold: 0.15, rootMargin: '0px 0px -8% 0px' });
  document.querySelectorAll('[data-reveal]').forEach(function (el) { rev.observe(el); });

  /* Copy email. */
  document.querySelectorAll('[data-copy]').forEach(function (b) {
    b.addEventListener('click', function () {
      if (!navigator.clipboard) return;
      navigator.clipboard.writeText(b.dataset.copy).then(function () {
        var t = b.textContent; b.textContent = 'Copied';
        setTimeout(function () { b.textContent = t; }, 1600);
      });
    });
  });
})();
</script>
@endverbatim
</body>
</html>
