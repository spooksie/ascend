<?php

it('renders the brand review page with the four directions', function () {
    $this->get('/brand-review')
        ->assertOk()
        ->assertSee('Four directions for the Ascend identity.')
        ->assertSeeInOrder(['Peak', 'Steps', 'Lift', 'Ascender'])
        ->assertSee('https://qquantum.ai', false);
});

it('keeps the brand review page out of search engines', function () {
    $response = $this->get('/brand-review');

    expect($response->headers->get('X-Robots-Tag'))->toContain('noindex')
        ->and($response->getContent())->toContain('<meta name="robots" content="noindex');
});
