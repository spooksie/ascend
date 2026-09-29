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
            ['@type' => 'WebPage', '@id' => $url.'#webpage', 'url' => $url, 'name' => $title, 'description' => $description, 'isPartOf' => ['@id' => $url.'#website'], 'about' => ['@id' => $url.'#domain'], 'inLanguage' => 'en'],
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
<svg xmlns="http://www.w3.org/2000/svg" viewBox="3.00 3.00 289.08 58.00" role="img" aria-label="Coherence">
  <title>Coherence</title>
  
  <defs>
    <clipPath id="coherence-mark-clip">
      <rect x="3" y="3" width="58" height="58" rx="15"/>
    </clipPath>
  </defs>
  <g id="mark">
    <rect x="3.5" y="3.5" width="57" height="57" rx="14.5" fill="none" stroke="#00BDF1" stroke-opacity="0.65" stroke-width="2.5"/>
    <g clip-path="url(#coherence-mark-clip)">
      <path d="M-48 19 q8 -12 16 0 q8 12 16 0 q8 -12 16 0 q8 12 16 0 q8 -12 16 0 q8 12 16 0 q8 -12 16 0 q8 12 16 0" fill="none" stroke="currentColor" stroke-opacity="0.85" stroke-width="2.4" stroke-linecap="round"/>
      <path d="M-48 32 q8 -12 16 0 q8 12 16 0 q8 -12 16 0 q8 12 16 0 q8 -12 16 0 q8 12 16 0 q8 -12 16 0 q8 12 16 0" fill="none" stroke="#00BDF1" stroke-opacity="1" stroke-width="2.4" stroke-linecap="round"/>
      <path d="M-48 45 q8 -12 16 0 q8 12 16 0 q8 -12 16 0 q8 12 16 0 q8 -12 16 0 q8 12 16 0 q8 -12 16 0 q8 12 16 0" fill="none" stroke="currentColor" stroke-opacity="0.85" stroke-width="2.4" stroke-linecap="round"/>
    </g>
  </g>
  <g id="wordmark" fill="currentColor">
    <path d="M88.12800000000001 46.86682352941176Q84.00752941176471 46.86682352941176 81.07764705882353 45.42776470588235Q78.14776470588235 43.98870588235294 76.30494117647059 41.65929411764706Q74.46211764705883 39.329882352941176 73.5924705882353 36.607058823529414Q72.72282352941177 33.884235294117644 72.72282352941177 31.33741176470588V30.426352941176468Q72.72282352941177 27.631058823529408 73.61317647058824 24.887529411764703Q74.50352941176472 22.143999999999995 76.35670588235294 19.90776470588235Q78.20988235294118 17.671529411764702 81.088 16.325647058823527Q83.96611764705882 14.97976470588235 87.90023529411765 14.97976470588235Q92.0 14.97976470588235 95.05411764705883 16.460235294117645Q98.10823529411766 17.940705882352937 99.93035294117648 20.60141176470588Q101.7524705882353 23.26211764705882 102.1044705882353 26.823529411764703H96.18258823529412Q95.87200000000001 24.752941176470586 94.73317647058825 23.334588235294113Q93.59435294117648 21.916235294117644 91.84470588235294 21.181176470588234Q90.09505882352941 20.44611764705882 87.90023529411765 20.44611764705882Q85.664 20.44611764705882 83.93505882352942 21.222588235294115Q82.20611764705883 21.99905882352941 81.04658823529412 23.40705882352941Q79.88705882352942 24.81505882352941 79.28658823529412 26.72Q78.68611764705882 28.624941176470585 78.68611764705882 30.923294117647053Q78.68611764705882 33.1595294117647 79.28658823529412 35.064470588235295Q79.88705882352942 36.96941176470588 81.088 38.398117647058825Q82.28894117647059 39.82682352941176 84.04894117647059 40.61364705882353Q85.8089411764706 41.400470588235294 88.12800000000001 41.400470588235294Q91.52376470588236 41.400470588235294 93.85317647058824 39.72329411764706Q96.18258823529412 38.04611764705882 96.67952941176472 35.02305882352941H102.60141176470589Q102.208 38.27388235294117 100.41694117647059 40.96564705882353Q98.62588235294118 43.657411764705884 95.53035294117647 45.26211764705882Q92.43482352941177 46.86682352941176 88.12800000000001 46.86682352941176Z"/>
    <path d="M116.47435294117648 46.86682352941176Q113.51341176470589 46.86682352941176 111.23576470588236 45.91435294117647Q108.95811764705883 44.961882352941174 107.3844705882353 43.336470588235294Q105.81082352941178 41.71105882352941 105.00329411764707 39.640470588235296Q104.19576470588237 37.56988235294118 104.19576470588237 35.31294117647059V34.443294117647056Q104.19576470588237 32.14494117647058 105.03435294117648 30.043294117647054Q105.8729411764706 27.941647058823527 107.46729411764707 26.316235294117647Q109.06164705882354 24.690823529411762 111.33929411764707 23.748705882352937Q113.6169411764706 22.806588235294114 116.47435294117648 22.806588235294114Q119.3524705882353 22.806588235294114 121.61976470588237 23.748705882352937Q123.88705882352943 24.690823529411762 125.4814117647059 26.316235294117647Q127.07576470588236 27.941647058823527 127.91435294117647 30.043294117647054Q128.75294117647059 32.14494117647058 128.75294117647059 34.443294117647056V35.31294117647059Q128.75294117647059 37.56988235294118 127.94541176470588 39.640470588235296Q127.13788235294119 41.71105882352941 125.56423529411765 43.336470588235294Q123.99058823529413 44.961882352941174 121.7129411764706 45.91435294117647Q119.43529411764706 46.86682352941176 116.47435294117648 46.86682352941176ZM116.47435294117648 41.93882352941176Q118.58635294117649 41.93882352941176 120.03576470588237 41.017411764705884Q121.48517647058824 40.096 122.2409411764706 38.49129411764706Q122.99670588235296 36.88658823529411 122.99670588235296 34.87811764705882Q122.99670588235296 32.807529411764705 122.22023529411766 31.202823529411763Q121.44376470588236 29.59811764705882 119.98400000000001 28.66635294117647Q118.52423529411766 27.734588235294115 116.47435294117648 27.734588235294115Q114.44517647058825 27.734588235294115 112.97505882352942 28.66635294117647Q111.5049411764706 29.59811764705882 110.7284705882353 31.202823529411763Q109.95200000000001 32.807529411764705 109.95200000000001 34.87811764705882Q109.95200000000001 36.88658823529411 110.70776470588237 38.49129411764706Q111.46352941176471 40.096 112.92329411764706 41.017411764705884Q114.38305882352942 41.93882352941176 116.47435294117648 41.93882352941176Z"/>
    <path d="M132.35576470588236 46.08V15.849411764705877H138.11200000000002V33.49082352941176H137.11811764705885Q137.11811764705885 30.11576470588235 137.9774117647059 27.744941176470583Q138.83670588235296 25.37411764705882 140.56564705882354 24.13176470588235Q142.29458823529413 22.88941176470588 144.92423529411766 22.88941176470588H145.17270588235294Q149.024 22.88941176470588 151.02211764705885 25.55011764705882Q153.02023529411767 28.210823529411762 153.02023529411767 33.263058823529406V46.08H147.264V32.70399999999999Q147.264 30.571294117647057 146.032 29.318588235294115Q144.8 28.065882352941173 142.81223529411767 28.065882352941173Q140.70023529411768 28.065882352941173 139.40611764705886 29.453176470588232Q138.11200000000002 30.84047058823529 138.11200000000002 33.09741176470588V46.08Z"/>
    <path d="M167.80423529411766 46.86682352941176Q164.9054117647059 46.86682352941176 162.73129411764705 45.87294117647059Q160.55717647058825 44.87905882352941 159.1284705882353 43.21223529411765Q157.69976470588236 41.54541176470588 156.97505882352942 39.474823529411765Q156.2503529411765 37.40423529411764 156.2503529411765 35.23011764705882V34.443294117647056Q156.2503529411765 32.20705882352941 156.97505882352942 30.12611764705882Q157.69976470588236 28.04517647058823 159.11811764705885 26.39905882352941Q160.53647058823532 24.752941176470586 162.6588235294118 23.77976470588235Q164.78117647058824 22.806588235294114 167.55576470588235 22.806588235294114Q171.20000000000002 22.806588235294114 173.65364705882354 24.411294117647056Q176.1072941176471 26.016 177.36 28.593882352941172Q178.61270588235294 31.17176470588235 178.61270588235294 34.15341176470588V36.24470588235294H158.69364705882353V32.724705882352936H174.98917647058823L173.22917647058824 34.443294117647056Q173.22917647058824 32.28988235294118 172.59764705882355 30.75764705882353Q171.96611764705884 29.22541176470588 170.71341176470588 28.39717647058823Q169.46070588235295 27.568941176470585 167.55576470588235 27.568941176470585Q165.63011764705882 27.568941176470585 164.3049411764706 28.448941176470584Q162.97976470588236 29.328941176470586 162.30682352941176 30.95435294117647Q161.63388235294119 32.579764705882354 161.63388235294119 34.85741176470588Q161.63388235294119 36.990117647058824 162.28611764705883 38.625882352941176Q162.93835294117648 40.26164705882353 164.3049411764706 41.18305882352941Q165.6715294117647 42.104470588235294 167.80423529411766 42.104470588235294Q169.89552941176473 42.104470588235294 171.22070588235295 41.255529411764705Q172.5458823529412 40.406588235294116 172.91858823529412 39.18494117647059H178.21929411764708Q177.74305882352942 41.483294117647056 176.32470588235296 43.22258823529411Q174.9063529411765 44.961882352941174 172.74258823529414 45.91435294117647Q170.57882352941178 46.86682352941176 167.80423529411766 46.86682352941176Z"/>
    <path d="M181.9670588235294 46.08V23.59341176470588H186.52235294117648V33.118117647058824H186.39811764705883Q186.39811764705883 28.293647058823527 188.46870588235294 25.798588235294115Q190.53929411764707 23.303529411764703 194.55623529411764 23.303529411764703H195.3844705882353V28.314352941176466H193.81082352941178Q190.89129411764708 28.314352941176466 189.30729411764707 29.877647058823527Q187.72329411764707 31.440941176470588 187.72329411764707 34.38117647058823V46.08Z"/>
    <path d="M207.8494117647059 46.86682352941176Q204.95058823529413 46.86682352941176 202.77647058823533 45.87294117647059Q200.6023529411765 44.87905882352941 199.17364705882355 43.21223529411765Q197.7449411764706 41.54541176470588 197.02023529411767 39.474823529411765Q196.29552941176473 37.40423529411764 196.29552941176473 35.23011764705882V34.443294117647056Q196.29552941176473 32.20705882352941 197.02023529411767 30.12611764705882Q197.7449411764706 28.04517647058823 199.16329411764707 26.39905882352941Q200.58164705882356 24.752941176470586 202.704 23.77976470588235Q204.82635294117648 22.806588235294114 207.6009411764706 22.806588235294114Q211.24517647058826 22.806588235294114 213.69882352941178 24.411294117647056Q216.1524705882353 26.016 217.40517647058826 28.593882352941172Q218.65788235294121 31.17176470588235 218.65788235294121 34.15341176470588V36.24470588235294H198.73882352941177V32.724705882352936H215.0343529411765L213.2743529411765 34.443294117647056Q213.2743529411765 32.28988235294118 212.64282352941177 30.75764705882353Q212.01129411764708 29.22541176470588 210.75858823529416 28.39717647058823Q209.5058823529412 27.568941176470585 207.6009411764706 27.568941176470585Q205.67529411764707 27.568941176470585 204.35011764705882 28.448941176470584Q203.0249411764706 29.328941176470586 202.35200000000003 30.95435294117647Q201.67905882352943 32.579764705882354 201.67905882352943 34.85741176470588Q201.67905882352943 36.990117647058824 202.33129411764708 38.625882352941176Q202.98352941176472 40.26164705882353 204.35011764705882 41.18305882352941Q205.71670588235295 42.104470588235294 207.8494117647059 42.104470588235294Q209.94070588235297 42.104470588235294 211.26588235294122 41.255529411764705Q212.59105882352944 40.406588235294116 212.96376470588237 39.18494117647059H218.26447058823533Q217.78823529411767 41.483294117647056 216.3698823529412 43.22258823529411Q214.95152941176474 44.961882352941174 212.78776470588238 45.91435294117647Q210.62400000000002 46.86682352941176 207.8494117647059 46.86682352941176Z"/>
    <path d="M222.01223529411766 46.08V23.59341176470588H226.56752941176472V33.24235294117647H226.1534117647059Q226.1534117647059 29.825882352941175 227.05411764705883 27.527529411764704Q227.95482352941178 25.229176470588232 229.76658823529414 24.059294117647056Q231.5783529411765 22.88941176470588 234.24941176470588 22.88941176470588H234.4978823529412Q238.5355294117647 22.88941176470588 240.60611764705885 25.488Q242.67670588235296 28.086588235294116 242.67670588235296 33.22164705882353V46.08H236.9204705882353V32.70399999999999Q236.9204705882353 30.63341176470588 235.7298823529412 29.34964705882353Q234.53929411764707 28.065882352941173 232.46870588235296 28.065882352941173Q230.35670588235297 28.065882352941173 229.06258823529413 29.380705882352938Q227.76847058823532 30.695529411764703 227.76847058823532 32.869647058823524V46.08Z"/>
    <path d="M257.35717647058823 46.86682352941176Q254.43764705882353 46.86682352941176 252.29458823529413 45.883294117647054Q250.15152941176473 44.899764705882355 248.73317647058826 43.23294117647059Q247.31482352941177 41.566117647058825 246.6108235294118 39.49552941176471Q245.90682352941178 37.42494117647058 245.90682352941178 35.2715294117647V34.48470588235294Q245.90682352941178 32.22776470588235 246.63152941176472 30.13647058823529Q247.35623529411765 28.04517647058823 248.79529411764707 26.39905882352941Q250.23435294117647 24.752941176470586 252.36705882352942 23.77976470588235Q254.49976470588237 22.806588235294114 257.3157647058824 22.806588235294114Q260.2767058823529 22.806588235294114 262.5854117647059 23.94541176470588Q264.8941176470588 25.084235294117644 266.28141176470587 27.11341176470588Q267.6687058823529 29.142588235294113 267.83435294117646 31.83435294117647H262.24376470588237Q262.036705882353 30.11576470588235 260.784 28.945882352941172Q259.53129411764706 27.775999999999996 257.3157647058824 27.775999999999996Q255.41082352941177 27.775999999999996 254.15811764705882 28.68705882352941Q252.9054117647059 29.59811764705882 252.28423529411765 31.19247058823529Q251.6630588235294 32.78682352941176 251.6630588235294 34.87811764705882Q251.6630588235294 36.86588235294117 252.25317647058824 38.470588235294116Q252.84329411764708 40.075294117647054 254.10635294117648 40.98635294117646Q255.3694117647059 41.89741176470588 257.35717647058823 41.89741176470588Q258.86870588235297 41.89741176470588 259.9454117647059 41.35905882352941Q261.02211764705885 40.82070588235294 261.664 39.87858823529412Q262.3058823529412 38.936470588235295 262.45082352941176 37.71482352941176H268.0414117647059Q267.89647058823533 40.468705882352936 266.46776470588236 42.51858823529412Q265.03905882352944 44.56847058823529 262.6889411764706 45.71764705882353Q260.3388235294118 46.86682352941176 257.35717647058823 46.86682352941176Z"/>
    <path d="M281.2724705882353 46.86682352941176Q278.37364705882356 46.86682352941176 276.19952941176473 45.87294117647059Q274.0254117647059 44.87905882352941 272.5967058823529 43.21223529411765Q271.168 41.54541176470588 270.44329411764704 39.474823529411765Q269.71858823529413 37.40423529411764 269.71858823529413 35.23011764705882V34.443294117647056Q269.71858823529413 32.20705882352941 270.44329411764704 30.12611764705882Q271.168 28.04517647058823 272.5863529411765 26.39905882352941Q274.00470588235294 24.752941176470586 276.1270588235294 23.77976470588235Q278.2494117647059 22.806588235294114 281.024 22.806588235294114Q284.66823529411766 22.806588235294114 287.12188235294116 24.411294117647056Q289.5755294117647 26.016 290.8282352941177 28.593882352941172Q292.0809411764706 31.17176470588235 292.0809411764706 34.15341176470588V36.24470588235294H272.1618823529412V32.724705882352936H288.4574117647059L286.6974117647059 34.443294117647056Q286.6974117647059 32.28988235294118 286.06588235294123 30.75764705882353Q285.4343529411765 29.22541176470588 284.1816470588235 28.39717647058823Q282.9289411764706 27.568941176470585 281.024 27.568941176470585Q279.0983529411765 27.568941176470585 277.7731764705883 28.448941176470584Q276.44800000000004 29.328941176470586 275.77505882352943 30.95435294117647Q275.10211764705883 32.579764705882354 275.10211764705883 34.85741176470588Q275.10211764705883 36.990117647058824 275.7543529411765 38.625882352941176Q276.4065882352941 40.26164705882353 277.7731764705883 41.18305882352941Q279.1397647058824 42.104470588235294 281.2724705882353 42.104470588235294Q283.3637647058824 42.104470588235294 284.6889411764706 41.255529411764705Q286.0141176470588 40.406588235294116 286.3868235294118 39.18494117647059H291.68752941176473Q291.21129411764707 41.483294117647056 289.7929411764706 43.22258823529411Q288.37458823529414 44.961882352941174 286.21082352941175 45.91435294117647Q284.0470588235294 46.86682352941176 281.2724705882353 46.86682352941176Z"/>
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
<meta name="twitter:card" content="summary">
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
                <a class="credit-qq" href="https://qquantum.ai/creative-design/brand-identity-logos" target="_blank" rel="noopener" title="QQuantum.ai — brand identity, logo and web design by an AI systems engineering studio in Barcelona">
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
