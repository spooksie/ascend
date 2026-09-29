<?php

it('renders the landing page with the original domain facts and contact details', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee('This is an elite-level .com domain')
        ->assertSee('It is being brokered by ATM Holdings (previously owned by Nokia and registered in 1990).', false)
        ->assertSee('mailto:AMiller@atmholdings.com?subject=Domain%20Inquiry%20for%20Ascend.com', false)
        ->assertSee('Contact us: <a href="mailto:AMiller@atmholdings.com">AMiller@atmholdings.com</a>', false)
        ->assertSee('https://atmholdings.com/', false);
});

it('is indexable and carries structured data for search engines and LLMs', function () {
    $html = $this->get('/')->getContent();

    expect($html)
        ->toContain('<meta name="robots" content="index, follow')
        ->toContain('<link rel="canonical" href="https://ascend.com/">')
        ->toContain('"@type":"FAQPage"')
        ->toContain('"@type":"Product"')
        ->not->toContain('noindex');
});

it('credits QQuantum.ai in the footer', function () {
    $this->get('/')->assertSee('https://qquantum.ai', false);
});

it('shows the Booth.com Ltd footer with the Coherence credit', function () {
    $this->get('/')
        ->assertSee('Booth.com Ltd. All Rights Reserved.', false)
        ->assertSee('https://qquantum.ai/creative-design/brand-identity-logos', false)
        ->assertSee('https://coherence.com', false);
});

it('has a large social sharing image', function () {
    expect(file_exists(public_path('og-image.png')))->toBeTrue();

    $this->get('/')
        ->assertSee('<meta property="og:image" content="https://ascend.com/og-image.png">', false)
        ->assertSee('<meta name="twitter:card" content="summary_large_image">', false);
});
