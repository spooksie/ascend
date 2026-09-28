{{--
    Ascend.com — private identity review page for the client.
    Self-contained: no Vite build, no external JS. Fonts come from Google Fonts.
    Kept out of search: robots meta below + X-Robots-Tag header on the route.
--}}
@php
    // Static marks used for favicons and app icons. Colours come from CSS
    // custom properties on the wrapper (--i-ink, --i-acc, --i-b1…), so one
    // drawing serves light, dark and brand tiles. $id keeps clipPath ids unique.
    $mark = [
        'peak' => fn (string $id) => '<svg viewBox="0 0 200 200" aria-hidden="true"><defs><clipPath id="'.$id.'a"><rect width="200" height="172"></rect></clipPath><clipPath id="'.$id.'b"><rect width="200" height="150"></rect></clipPath></defs><polyline points="20.7,180 100,30 179.3,180" fill="none" stroke-width="22" stroke-linejoin="miter" style="stroke:var(--i-ink)" clip-path="url(#'.$id.'a)"></polyline><polyline points="66.2,160 100,96 133.8,160" fill="none" stroke-width="18" stroke-linejoin="miter" style="stroke:var(--i-acc)" clip-path="url(#'.$id.'b)"></polyline></svg>',
        'steps' => fn (string $id) => '<svg viewBox="0 0 200 200" aria-hidden="true"><rect x="29" y="138" width="28" height="40" rx="5" style="fill:var(--i-b1)"></rect><rect x="67" y="106" width="28" height="72" rx="5" style="fill:var(--i-b2)"></rect><rect x="105" y="74" width="28" height="104" rx="5" style="fill:var(--i-b3)"></rect><rect x="143" y="42" width="28" height="136" rx="5" style="fill:var(--i-acc)"></rect><circle cx="157" cy="25" r="12" style="fill:var(--i-ink)"></circle></svg>',
        'lift' => fn (string $id) => '<svg viewBox="0 0 200 200" aria-hidden="true"><defs><clipPath id="'.$id.'a"><rect x="40" y="-20" width="120" height="240"></rect></clipPath></defs><g fill="none" stroke-width="22" stroke-linejoin="miter" clip-path="url(#'.$id.'a)"><polyline points="30,178.33 100,120 170,178.33" style="stroke:var(--i-b1)"></polyline><polyline points="30,134.33 100,76 170,134.33" style="stroke:var(--i-b2)"></polyline><polyline points="30,90.33 100,32 170,90.33" style="stroke:var(--i-acc)"></polyline></g></svg>',
        'ascender' => fn (string $id) => '<svg viewBox="251.5 -2 180 180" aria-hidden="true"><g fill="none" stroke-width="13" stroke-linecap="round" style="stroke:var(--i-ink)"><circle cx="341.5" cy="148" r="23.5"></circle><path d="M365,171.5 V30"></path></g><circle cx="365" cy="12" r="9" style="fill:var(--i-acc)"></circle></svg>',
    ];

    $vars = fn (array $c) => collect($c)->except('bg')->map(fn ($v, $k) => "--i-{$k}: {$v}")->push('--i-bg: '.($c['bg'] ?? 'transparent'))->implode('; ');

    $concepts = [
        [
            'id' => 'peak', 'num' => '01', 'name' => 'Peak',
            'idea' => 'A summit drawn as a single stroke, with a second, brass peak rising inside it. Timeless and corporate — the direction that reads as established from day one.',
            'fonts' => [
                ['role' => 'Primary', 'use' => 'Wordmark, headings', 'family' => 'Sora', 'css' => "'Sora', system-ui, sans-serif", 'weight' => 600, 'tracking' => '-0.01em'],
                ['role' => 'Secondary', 'use' => 'Body copy, long-form', 'family' => 'Newsreader', 'css' => "'Newsreader', Georgia, serif", 'weight' => 400, 'tracking' => '0'],
            ],
            'palette' => [
                ['Ivory', '#F4F0E7', 'Light background', '#14213D'],
                ['Navy', '#14213D', 'Primary — mark & text', '#F4F0E7'],
                ['Brass', '#B07A34', 'Accent', '#FFFFFF'],
                ['Slate', '#5A6275', 'Secondary text', '#FFFFFF'],
                ['Midnight', '#0E1830', 'Dark background', '#F4F0E7'],
                ['Gilt', '#D2A15A', 'Accent on dark', '#14213D'],
            ],
            'icons' => [
                'light' => ['bg' => '#F4F0E7', 'ink' => '#14213D', 'acc' => '#B07A34'],
                'dark' => ['bg' => '#0E1830', 'ink' => '#F4F0E7', 'acc' => '#D2A15A'],
                'brand' => ['bg' => '#14213D', 'ink' => '#F4F0E7', 'acc' => '#D2A15A'],
            ],
        ],
        [
            'id' => 'steps', 'num' => '02', 'name' => 'Steps',
            'idea' => 'Four rising steps and a ball that bounces its way to the top. Optimistic and product-friendly — progress you can see.',
            'fonts' => [
                ['role' => 'Primary', 'use' => 'Wordmark, headings', 'family' => 'Bricolage Grotesque', 'css' => "'Bricolage Grotesque', system-ui, sans-serif", 'weight' => 800, 'tracking' => '-0.035em'],
                ['role' => 'Secondary', 'use' => 'Body copy, interface', 'family' => 'Figtree', 'css' => "'Figtree', system-ui, sans-serif", 'weight' => 400, 'tracking' => '0'],
            ],
            'palette' => [
                ['Paper', '#EEEBE3', 'Light background', '#17191E'],
                ['Ink', '#17191E', 'Primary — mark & text', '#EEEBE3'],
                ['Emerald', '#1F7A57', 'Accent', '#FFFFFF'],
                ['Stone', '#9B9588', 'Supporting tone', '#17191E'],
                ['Night', '#131519', 'Dark background', '#EEEBE3'],
                ['Mint', '#37B684', 'Accent on dark', '#131519'],
            ],
            'icons' => [
                'light' => ['bg' => '#EEEBE3', 'ink' => '#17191E', 'acc' => '#1F7A57', 'b1' => '#CBC5B7', 'b2' => '#9B9588', 'b3' => '#57534B'],
                'dark' => ['bg' => '#131519', 'ink' => '#EEEBE3', 'acc' => '#37B684', 'b1' => '#34373D', 'b2' => '#5E626A', 'b3' => '#A7ABB2'],
                'brand' => ['bg' => '#1F7A57', 'ink' => '#FFFFFF', 'acc' => '#17191E', 'b1' => 'rgba(255,255,255,.35)', 'b2' => 'rgba(255,255,255,.6)', 'b3' => 'rgba(255,255,255,.85)'],
            ],
        ],
        [
            'id' => 'lift', 'num' => '03', 'name' => 'Lift',
            'idea' => 'Three stacked chevrons that pulse upward like a lift indicator. Kinetic and technical — built for speed and scale.',
            'fonts' => [
                ['role' => 'Primary', 'use' => 'Wordmark, headings', 'family' => 'Unbounded', 'css' => "'Unbounded', system-ui, sans-serif", 'weight' => 600, 'tracking' => '0.01em'],
                ['role' => 'Secondary', 'use' => 'Body copy, interface (IBM Plex Mono for labels)', 'family' => 'IBM Plex Sans', 'css' => "'IBM Plex Sans', system-ui, sans-serif", 'weight' => 400, 'tracking' => '0'],
            ],
            'palette' => [
                ['Charcoal', '#0F1012', 'Dark background & primary', '#ECEDEF'],
                ['Volt', '#D4FF3A', 'Accent', '#0F1012'],
                ['Fog', '#F2F3F0', 'Light background', '#0F1012'],
                ['Steel', '#8A8F98', 'Supporting tone', '#0F1012'],
                ['Graphite', '#3A3D43', 'Supporting tone', '#ECEDEF'],
                ['Ash', '#C7CAD0', 'Supporting tone', '#0F1012'],
            ],
            'icons' => [
                'light' => ['bg' => '#F2F3F0', 'acc' => '#0F1012', 'b1' => '#C7CAD0', 'b2' => '#7C818A'],
                'dark' => ['bg' => '#0F1012', 'acc' => '#D4FF3A', 'b1' => '#3A3D43', 'b2' => '#8A8F98'],
                'brand' => ['bg' => '#D4FF3A', 'acc' => '#0F1012', 'b1' => 'rgba(15,16,18,.25)', 'b2' => 'rgba(15,16,18,.55)'],
            ],
        ],
        [
            'id' => 'ascender', 'num' => '04', 'name' => 'Ascender',
            'idea' => 'A custom-drawn wordmark whose “d” keeps climbing, crowned with a signal-blue point. The most ownable direction — the name itself becomes the mark.',
            'fonts' => [
                ['role' => 'Primary', 'use' => 'Headings, interface (wordmark is custom-drawn)', 'family' => 'Geist', 'css' => "'Geist', system-ui, sans-serif", 'weight' => 500, 'tracking' => '-0.02em'],
                ['role' => 'Secondary', 'use' => 'Labels, data, captions', 'family' => 'Geist Mono', 'css' => "'Geist Mono', ui-monospace, monospace", 'weight' => 400, 'tracking' => '0'],
            ],
            'palette' => [
                ['Black', '#0B0B0D', 'Dark background & primary', '#F3F3EF'],
                ['Chalk', '#F6F6F3', 'Light background', '#0B0B0D'],
                ['Signal', '#2F5BEA', 'Accent', '#FFFFFF'],
                ['Signal Light', '#5B8CFF', 'Accent on dark', '#0B0B0D'],
                ['Ash', '#9A9AA2', 'Secondary text on dark', '#0B0B0D'],
                ['Graphite', '#62626A', 'Secondary text on light', '#FFFFFF'],
            ],
            'icons' => [
                'light' => ['bg' => '#F6F6F3', 'ink' => '#0B0B0D', 'acc' => '#2F5BEA'],
                'dark' => ['bg' => '#0B0B0D', 'ink' => '#F3F3EF', 'acc' => '#5B8CFF'],
                'brand' => ['bg' => '#2F5BEA', 'ink' => '#FFFFFF', 'acc' => '#0B0B0D'],
            ],
        ],
    ];
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow, noarchive, nosnippet, noimageindex">
<meta name="googlebot" content="noindex, nofollow, noarchive, nosnippet, noimageindex">
<meta name="bingbot" content="noindex, nofollow, noarchive">
<meta name="referrer" content="no-referrer">
<title>Ascend identity review — private</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400..800&amp;family=Figtree:wght@400;500&amp;family=Geist+Mono:wght@400;500&amp;family=Geist:wght@400;500;600&amp;family=IBM+Plex+Mono:wght@400;500&amp;family=IBM+Plex+Sans:wght@400;500&amp;family=Newsreader:opsz,wght@6..72,400;6..72,500&amp;family=Sora:wght@400;500;600&amp;family=Unbounded:wght@500;600&amp;display=swap">
<script>document.documentElement.classList.add('js')</script>
@verbatim
<style>
:root{--page:#F4F3EF;--text:#151515;--muted:#5E5D58;--line:#E2E0D9;--card:#FFFFFF}
*{box-sizing:border-box}
html{scroll-behavior:smooth;-webkit-text-size-adjust:100%}
body{margin:0;background:var(--page);color:var(--text);font:400 16px/1.55 'Geist',system-ui,sans-serif}
a{color:inherit}
.wrap{max-width:1200px;margin:0 auto;padding:0 16px}
@media (min-width:760px){.wrap{padding:0 32px}}

/* Top bar */
.top{position:sticky;top:0;z-index:10;background:rgba(244,243,239,.88);backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px);border-bottom:1px solid var(--line)}
.top .wrap{display:flex;align-items:center;justify-content:space-between;gap:16px;min-height:60px;flex-wrap:wrap;padding-top:8px;padding-bottom:8px}
.brand{display:flex;align-items:baseline;gap:12px;font-weight:600;letter-spacing:-.01em}
.brand small{font-weight:400;font-size:13px;color:var(--muted)}
.nav{display:flex;gap:4px;flex-wrap:wrap}
.nav a{display:inline-flex;align-items:center;gap:6px;min-height:40px;padding:0 12px;border-radius:999px;text-decoration:none;font-size:14px;color:var(--muted)}
.nav a:hover{background:#E9E7E1;color:var(--text)}
.nav a span{font-family:'Geist Mono',monospace;font-size:12px}

/* Intro */
.hero{padding-top:72px;padding-bottom:40px}
.eyebrow{font:500 12px/1 'Geist Mono',monospace;letter-spacing:.12em;text-transform:uppercase;color:var(--muted);margin:0 0 20px}
.hero h1{font-size:clamp(36px,6vw,64px);line-height:1.02;letter-spacing:-.035em;font-weight:600;margin:0;max-width:14ch;text-wrap:balance}
.hero p{max-width:60ch;color:var(--muted);font-size:18px;margin:24px 0 0;text-wrap:pretty}
.how{display:flex;gap:8px;flex-wrap:wrap;margin-top:28px}
.how span{display:inline-flex;align-items:center;gap:8px;padding:8px 14px;border:1px solid var(--line);border-radius:999px;font-size:14px;background:var(--card)}
.how b{font:500 11px/1 'Geist Mono',monospace;letter-spacing:.08em;text-transform:uppercase;color:var(--muted)}

/* Concept sections */
.concept{padding:56px 0;border-top:1px solid var(--line);scroll-margin-top:72px}
.c-head{display:grid;gap:12px 40px;margin-bottom:28px}
@media (min-width:900px){.c-head{grid-template-columns:minmax(0,1fr) minmax(0,1.3fr);align-items:end}}
.c-head h2{margin:0;font-size:clamp(32px,4.4vw,48px);letter-spacing:-.03em;line-height:1;font-weight:600;display:flex;align-items:baseline;gap:16px}
.c-head h2 span{font:500 14px/1 'Geist Mono',monospace;color:var(--muted);letter-spacing:.04em}
.c-head p{margin:0;color:var(--muted);max-width:58ch;text-wrap:pretty}

.stages{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px}
@media (max-width:760px){.stages{grid-template-columns:minmax(0,1fr)}}
.stage{position:relative;height:clamp(320px,36vw,420px);border-radius:24px;overflow:hidden;display:flex;align-items:center;justify-content:center;background:var(--bg);color:var(--ink)}
.stage .mode{position:absolute;top:18px;left:20px;font:500 11px/1 'Geist Mono',monospace;letter-spacing:.14em;text-transform:uppercase;color:var(--muted)}
.replay{position:absolute;right:14px;bottom:14px;height:44px;padding:0 16px 0 12px;display:flex;align-items:center;gap:8px;border-radius:999px;border:1px solid color-mix(in srgb,var(--ink) 24%,transparent);background:transparent;color:var(--ink);font:500 13px/1 'Geist',system-ui,sans-serif;cursor:pointer;transition:background-color .2s,border-color .2s}
.replay:hover{background:color-mix(in srgb,var(--ink) 7%,transparent);border-color:color-mix(in srgb,var(--ink) 45%,transparent)}
.replay:focus-visible{outline:2px solid var(--ink);outline-offset:3px}

.details{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:16px;margin-top:16px}
@media (max-width:760px){.details{grid-template-columns:minmax(0,1fr)}}
.card{background:var(--card);border:1px solid var(--line);border-radius:24px;padding:24px;min-width:0}
.card h3{margin:0 0 20px;font:500 12px/1 'Geist Mono',monospace;letter-spacing:.12em;text-transform:uppercase;color:var(--muted)}

/* Favicon */
.tabbar{display:flex;align-items:flex-end;height:46px;padding:0 10px;border-radius:12px 12px 0 0;gap:4px}
.tabbar.light{background:#DEE1E6}
.tabbar.dark{background:#1F2023;margin-top:12px}
.tab{display:flex;align-items:center;gap:10px;height:36px;padding:0 12px;border-radius:10px 10px 0 0;font:400 13px/1 system-ui,sans-serif;min-width:0;width:230px;max-width:100%}
.tabbar.light .tab{background:#FFFFFF;color:#1F1F1F}
.tabbar.dark .tab{background:#35363A;color:#E8EAED}
.tab .t{flex:1;overflow:hidden;white-space:nowrap;text-overflow:ellipsis}
.tab .x{opacity:.6;font-size:15px}
.tab .fav{width:16px;height:16px;flex:none;display:block}
.fav svg,.app svg,.sz svg{display:block;width:100%;height:100%}
.sizes{display:flex;gap:12px;margin-top:20px;flex-wrap:wrap}
.sizes .grp{display:flex;align-items:flex-end;gap:14px;padding:14px 16px;border-radius:14px;background:var(--i-bg)}
.sz{display:flex;flex-direction:column;align-items:center;gap:8px;font:400 11px/1 'Geist Mono',monospace}
.sizes .grp.light .sz{color:#5E5D58}
.sizes .grp.dark .sz{color:#A3A3A8}

/* App icons */
.apps{display:flex;gap:20px;flex-wrap:wrap}
.app-item{display:flex;flex-direction:column;align-items:center;gap:10px;font-size:13px;color:var(--muted)}
.app{width:96px;height:96px;border-radius:22.5%;background:var(--i-bg);padding:18px;box-shadow:0 1px 2px rgba(0,0,0,.08),0 8px 24px -8px rgba(0,0,0,.25),inset 0 0 0 1px rgba(0,0,0,.06)}
.app.sm{width:60px;height:60px;padding:11px}
.apps-row{display:flex;align-items:flex-end;gap:14px;margin-top:22px;padding-top:20px;border-top:1px solid var(--line);flex-wrap:wrap}

/* Type */
.fonts{display:grid;gap:20px}
.font{display:grid;grid-template-columns:auto minmax(0,1fr);gap:4px 20px;align-items:center}
.font .aa{font-size:64px;line-height:1;grid-row:span 3}
.font .role{font:500 11px/1.4 'Geist Mono',monospace;letter-spacing:.1em;text-transform:uppercase;color:var(--muted)}
.font .fam{font-size:20px;font-weight:600;letter-spacing:-.01em}
.font .use{font-size:13px;color:var(--muted)}
.sample{margin:4px 0 0;padding-top:16px;border-top:1px solid var(--line);display:grid;gap:10px}
.sample .h{font-size:clamp(24px,3vw,30px);line-height:1.1;margin:0}
.sample .b{font-size:16px;line-height:1.6;margin:0;color:#3D3C38}

/* Palette */
.swatches{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:10px}
@media (max-width:480px){.swatches{grid-template-columns:repeat(2,minmax(0,1fr))}}
.sw{border-radius:16px;padding:14px;min-height:112px;display:flex;flex-direction:column;justify-content:space-between;gap:10px;box-shadow:inset 0 0 0 1px rgba(0,0,0,.07)}
.sw b{font-size:15px;font-weight:600}
.sw span{display:block;font:400 12px/1.35 'Geist Mono',monospace;opacity:.85}

/* Closing + footer */
.closing{padding:64px 0;border-top:1px solid var(--line)}
.closing h2{font-size:clamp(28px,4vw,40px);letter-spacing:-.03em;line-height:1.05;margin:0;font-weight:600}
.closing p{color:var(--muted);max-width:60ch;margin:16px 0 0}
.foot{border-top:1px solid var(--line);padding:28px 0 40px}
.foot .wrap{display:flex;align-items:center;justify-content:space-between;gap:16px;flex-wrap:wrap;font-size:13px;color:var(--muted)}
.credit{display:inline-flex;align-items:center;gap:12px;text-decoration:none;color:#151515;min-height:44px}
.credit svg{height:20px;width:auto;display:block}
.credit:hover svg{opacity:.8}

/* ---------- Logos: shared ---------- */
.logo{appearance:none;background:none;border:0;margin:0;padding:24px 32px;font:inherit;color:inherit;cursor:pointer;-webkit-tap-highlight-color:transparent;border-radius:24px}
.logo:focus-visible{outline:2px solid var(--acc);outline-offset:6px}
.logo svg{display:block;overflow:visible}
.logo svg g{transform-box:fill-box;transform-origin:center}
.ltr{display:inline-block}
.js .logo:not(.play),.js .logo:not(.play) *{animation-play-state:paused!important}

/* ---------- 01 Peak ---------- */
.c-peak .light{--bg:#F4F0E7;--ink:#14213D;--acc:#B07A34;--muted:#5A6275}
.c-peak .dark{--bg:#0E1830;--ink:#F4F0E7;--acc:#D2A15A;--muted:#A3ABBD}
.pk-logo{display:flex;flex-direction:column;align-items:center;gap:26px}
.pk-svg{width:clamp(120px,18vw,168px);height:auto}
.pk-outer,.pk-glint,.pk-inner{fill:none;stroke-linejoin:miter}
.pk-outer{stroke:var(--ink);stroke-width:18px;stroke-dasharray:1 1.1;stroke-dashoffset:1.05;animation:pk-draw 1.3s cubic-bezier(.65,0,.35,1) .15s forwards}
.pk-glint{stroke:var(--acc);stroke-width:4px;stroke-dasharray:.14 3;stroke-dashoffset:.14;animation:pk-glint 5.5s cubic-bezier(.45,0,.55,1) 2.6s infinite}
.pk-inner{stroke:var(--acc);stroke-width:16px}
@keyframes pk-draw{to{stroke-dashoffset:0}}
@keyframes pk-glint{0%{stroke-dashoffset:.14}45%,100%{stroke-dashoffset:-1.1}}
.pk-in{animation:pk-rise .8s cubic-bezier(.2,1.4,.4,1) 1.15s backwards}
@keyframes pk-rise{from{transform:translateY(48px);opacity:0}}
.pk-idle{animation:pk-float 3.6s ease-in-out 2.2s infinite}
@keyframes pk-float{0%,100%{transform:none}50%{transform:translateY(-4px)}}
.pk-hov{transition:transform .5s cubic-bezier(.3,1.6,.5,1)}
.logo:hover .pk-hov{transform:translateY(-16px)}
.pk-mark-hov{transition:transform .6s cubic-bezier(.3,1.4,.5,1)}
.logo:hover .pk-mark-hov{transform:scale(1.04)}
.ca .pk-click{animation:pk-shoot-a 1s cubic-bezier(.5,0,.2,1)}
.cb .pk-click{animation:pk-shoot-b 1s cubic-bezier(.5,0,.2,1)}
@keyframes pk-shoot-a{0%{transform:none;opacity:1}38%{transform:translateY(-96px);opacity:0}39%{transform:translateY(56px);opacity:0}100%{transform:none;opacity:1}}
@keyframes pk-shoot-b{0%{transform:none;opacity:1}38%{transform:translateY(-96px);opacity:0}39%{transform:translateY(56px);opacity:0}100%{transform:none;opacity:1}}
.ca .pk-press{animation:pk-press-a .55s ease-out}
.cb .pk-press{animation:pk-press-b .55s ease-out}
@keyframes pk-press-a{0%,100%{transform:none}30%{transform:scale(.94)}65%{transform:scale(1.02)}}
@keyframes pk-press-b{0%,100%{transform:none}30%{transform:scale(.94)}65%{transform:scale(1.02)}}
.pk-word{display:flex;font:600 clamp(26px,3.4vw,34px)/1 'Sora',system-ui,sans-serif;letter-spacing:.42em;padding-left:.42em;color:var(--ink);transition:letter-spacing .5s ease,padding-left .5s ease}
.logo:hover .pk-word{letter-spacing:.52em;padding-left:.52em}
.pk-word .ltr{animation:pk-letter .7s cubic-bezier(.2,.8,.2,1) calc(1.3s + var(--i)*.07s) backwards}
@keyframes pk-letter{from{opacity:0;transform:translateY(18px)}}
.ca .pk-word .ltr{animation:pk-wave-a .6s ease-out calc(.3s + var(--i)*.05s) backwards}
.cb .pk-word .ltr{animation:pk-wave-b .6s ease-out calc(.3s + var(--i)*.05s) backwards}
@keyframes pk-wave-a{0%,100%{transform:none}40%{transform:translateY(-8px)}}
@keyframes pk-wave-b{0%,100%{transform:none}40%{transform:translateY(-8px)}}

/* ---------- 02 Steps ---------- */
.c-steps .light{--bg:#EEEBE3;--ink:#17191E;--acc:#1F7A57;--b1:#CBC5B7;--b2:#9B9588;--b3:#57534B;--muted:#5C5950}
.c-steps .dark{--bg:#131519;--ink:#EEEBE3;--acc:#37B684;--b1:#34373D;--b2:#5E626A;--b3:#A7ABB2;--muted:#A0A3A9}
.st-logo{display:flex;align-items:center;gap:clamp(12px,2vw,20px)}
.st-svg{width:clamp(92px,12vw,128px);height:auto}
.st-r1{fill:var(--b1)}.st-r2{fill:var(--b2)}.st-r3{fill:var(--b3)}.st-r4{fill:var(--acc)}
.st-dot{fill:var(--ink)}
.logo svg .st-bc,.logo svg .st-bh,.logo svg .st-bi,.logo svg .st-bw,.logo svg .st-ds{transform-origin:50% 100%}
/* Intro: steps grow, then the ball bounces up them one by one */
.logo svg .st-bi{animation:st-grow .6s cubic-bezier(.2,1.5,.4,1) calc(.1s + var(--i)*.08s) backwards}
@keyframes st-grow{from{transform:scaleY(0)}}
.st-bc{animation:st-land .3s ease-out calc(.85s + var(--i)*.36s) backwards}
@keyframes st-land{0%,100%{transform:none}40%{transform:scaleY(.93)}}
.st-di{animation:st-hopup 1.5s linear .7s backwards}
@keyframes st-hopup{
0%{transform:translate(-114px,96px) scale(0);opacity:0;animation-timing-function:cubic-bezier(.3,1.6,.5,1)}
10%{transform:translate(-114px,96px) scale(1);opacity:1;animation-timing-function:cubic-bezier(.25,.8,.5,1)}
22%{transform:translate(-95px,44px);animation-timing-function:cubic-bezier(.5,0,.75,.3)}
34%{transform:translate(-76px,64px);animation-timing-function:cubic-bezier(.25,.8,.5,1)}
46%{transform:translate(-57px,12px);animation-timing-function:cubic-bezier(.5,0,.75,.3)}
58%{transform:translate(-38px,32px);animation-timing-function:cubic-bezier(.25,.8,.5,1)}
70%{transform:translate(-19px,-20px);animation-timing-function:cubic-bezier(.5,0,.75,.3)}
82%{transform:none;animation-timing-function:cubic-bezier(.25,.8,.5,1)}
91%{transform:translateY(-9px);animation-timing-function:cubic-bezier(.5,0,.75,.3)}
100%{transform:none}}
.st-ds{animation:st-squish 1.5s linear .7s backwards}
@keyframes st-squish{0%,31%,38%,55%,62%,79%,86%,100%{transform:none}34%,58%,82%{transform:scale(1.28,.72)}}
/* Idle: steps breathe, ball rides the top step */
.logo svg .st-bw{animation:st-breathe 2.8s ease-in-out calc(2.5s + var(--i)*.15s) infinite}
@keyframes st-breathe{0%,100%{transform:none}50%{transform:scaleY(1.05)}}
.st-dw{animation:st-ride 2.8s ease-in-out 2.95s infinite}
@keyframes st-ride{0%,100%{transform:none}50%{transform:translateY(-6.8px)}}
/* Hover: steps rise in sequence, ball lifts off */
.logo svg .st-bh{transition:transform .45s cubic-bezier(.3,1.5,.5,1) calc(var(--i)*.05s)}
.logo:hover svg .st-bh{transform:scaleY(1.1)}
.st-dh{transition:transform .45s cubic-bezier(.3,1.5,.5,1) .15s}
.logo:hover .st-dh{transform:translateY(-24px)}
/* Click: super-bounce with squash & stretch, a shockwave and a domino ripple */
.ca .st-dc{animation:st-boing-a 1.4s linear}
.cb .st-dc{animation:st-boing-b 1.4s linear}
@keyframes st-boing-a{0%{transform:none;animation-timing-function:ease-out}12%{transform:translateY(3px);animation-timing-function:cubic-bezier(.2,.8,.4,1)}40%{transform:translateY(-120px);animation-timing-function:cubic-bezier(.6,0,.9,.5)}64%{transform:none;animation-timing-function:cubic-bezier(.2,.8,.4,1)}76%{transform:translateY(-28px);animation-timing-function:cubic-bezier(.6,0,.9,.5)}88%{transform:none;animation-timing-function:cubic-bezier(.2,.8,.4,1)}94%{transform:translateY(-6px);animation-timing-function:cubic-bezier(.6,0,.9,.5)}100%{transform:none}}
@keyframes st-boing-b{0%{transform:none;animation-timing-function:ease-out}12%{transform:translateY(3px);animation-timing-function:cubic-bezier(.2,.8,.4,1)}40%{transform:translateY(-120px);animation-timing-function:cubic-bezier(.6,0,.9,.5)}64%{transform:none;animation-timing-function:cubic-bezier(.2,.8,.4,1)}76%{transform:translateY(-28px);animation-timing-function:cubic-bezier(.6,0,.9,.5)}88%{transform:none;animation-timing-function:cubic-bezier(.2,.8,.4,1)}94%{transform:translateY(-6px);animation-timing-function:cubic-bezier(.6,0,.9,.5)}100%{transform:none}}
.ca .st-ds{animation:st-stretch-a 1.4s ease-in-out}
.cb .st-ds{animation:st-stretch-b 1.4s ease-in-out}
@keyframes st-stretch-a{0%,100%{transform:none}12%{transform:scale(1.4,.6)}20%{transform:scale(.8,1.3)}34%{transform:none}58%{transform:scale(.85,1.2)}64%{transform:scale(1.45,.55)}70%{transform:scale(.95,1.05)}76%{transform:none}88%{transform:scale(1.2,.8)}92%{transform:none}}
@keyframes st-stretch-b{0%,100%{transform:none}12%{transform:scale(1.4,.6)}20%{transform:scale(.8,1.3)}34%{transform:none}58%{transform:scale(.85,1.2)}64%{transform:scale(1.45,.55)}70%{transform:scale(.95,1.05)}76%{transform:none}88%{transform:scale(1.2,.8)}92%{transform:none}}
.ca .st-dot{animation:st-flash-a 1.4s ease-in-out}
.cb .st-dot{animation:st-flash-b 1.4s ease-in-out}
@keyframes st-flash-a{0%,100%{fill:var(--ink)}30%,55%{fill:var(--acc)}}
@keyframes st-flash-b{0%,100%{fill:var(--ink)}30%,55%{fill:var(--acc)}}
.st-wave{fill:none;stroke:var(--acc);stroke-width:2.5px;opacity:0;transform-box:fill-box;transform-origin:center}
.ca .st-wave{animation:st-shock-a .7s ease-out .9s}
.cb .st-wave{animation:st-shock-b .7s ease-out .9s}
@keyframes st-shock-a{0%{transform:scale(1);opacity:.9}100%{transform:scale(3.4);opacity:0}}
@keyframes st-shock-b{0%{transform:scale(1);opacity:.9}100%{transform:scale(3.4);opacity:0}}
.ca .st-bc{animation:st-ripple-a .34s ease-out calc(.9s + (3 - var(--i))*.07s) backwards}
.cb .st-bc{animation:st-ripple-b .34s ease-out calc(.9s + (3 - var(--i))*.07s) backwards}
@keyframes st-ripple-a{0%,100%{transform:none}40%{transform:scaleY(.88)}}
@keyframes st-ripple-b{0%,100%{transform:none}40%{transform:scaleY(.88)}}
.st-word{display:flex;font:800 clamp(56px,7.6vw,80px)/1 'Bricolage Grotesque',system-ui,sans-serif;letter-spacing:-.045em;color:var(--ink);overflow:hidden;padding:.14em .08em .14em .02em;margin:-.14em 0}
.st-word .ltr{animation:st-up .75s cubic-bezier(.2,.9,.2,1) calc(.45s + var(--i)*.06s) backwards;transition:transform .4s cubic-bezier(.3,1.6,.5,1) calc(var(--i)*.035s)}
@keyframes st-up{from{transform:translateY(115%)}}
.logo:hover .st-word .ltr{transform:translateY(-6px)}
.ca .st-word .ltr{animation:st-wave-a .55s ease-out calc(.95s + var(--i)*.05s) backwards}
.cb .st-word .ltr{animation:st-wave-b .55s ease-out calc(.95s + var(--i)*.05s) backwards}
@keyframes st-wave-a{0%,100%{transform:none}40%{transform:translateY(-10px)}}
@keyframes st-wave-b{0%,100%{transform:none}40%{transform:translateY(-10px)}}

/* ---------- 03 Lift ---------- */
.c-lift .light{--bg:#F2F3F0;--ink:#0F1012;--acc:#0F1012;--c1:#C7CAD0;--c2:#7C818A;--c1h:#A9ADB4;--c2h:#50555D;--muted:#5E636B}
.c-lift .dark{--bg:#0F1012;--ink:#ECEDEF;--acc:#D4FF3A;--c1:#3A3D43;--c2:#8A8F98;--c1h:#5A5E66;--c2h:#C6CAD0;--muted:#A3A8B0}
.lf-logo{display:flex;align-items:center;gap:clamp(16px,2.4vw,26px)}
.lf-svg{width:clamp(84px,11vw,124px);height:auto}
.lf-chev{fill:none;stroke-width:20px;stroke-linejoin:miter;transition:stroke .4s ease}
.lf-c1{stroke:var(--c1)}.lf-c2{stroke:var(--c2)}.lf-c3{stroke:var(--acc)}
.logo:hover .lf-c1{stroke:var(--c1h)}
.logo:hover .lf-c2{stroke:var(--c2h)}
.lf-i{animation:lf-in .7s cubic-bezier(.2,1.4,.4,1) calc(.1s + var(--i)*.12s) backwards}
@keyframes lf-in{from{transform:translateY(70px);opacity:0}}
.lf-w{animation:lf-wave 2.4s ease-in-out calc(1.4s + var(--i)*.14s) infinite}
@keyframes lf-wave{0%,40%,100%{transform:none}20%{transform:translateY(-7px)}}
.lf-h{transition:transform .5s cubic-bezier(.3,1.5,.5,1)}
.logo:hover .lf-h{transform:translateY(calc((var(--i) - 1)*-10px))}
.ca .lf-k{animation:lf-launch-a .9s cubic-bezier(.6,0,.2,1) calc((2 - var(--i))*.06s) backwards}
.cb .lf-k{animation:lf-launch-b .9s cubic-bezier(.6,0,.2,1) calc((2 - var(--i))*.06s) backwards}
@keyframes lf-launch-a{0%{transform:none;opacity:1}45%{transform:translateY(-150px);opacity:0}46%{transform:translateY(90px);opacity:0}100%{transform:none;opacity:1}}
@keyframes lf-launch-b{0%{transform:none;opacity:1}45%{transform:translateY(-150px);opacity:0}46%{transform:translateY(90px);opacity:0}100%{transform:none;opacity:1}}
.lf-word{display:flex;font:600 clamp(28px,3.6vw,40px)/1 'Unbounded',system-ui,sans-serif;letter-spacing:.03em;color:var(--ink);perspective:500px;transition:letter-spacing .5s cubic-bezier(.3,1.3,.5,1)}
.logo:hover .lf-word{letter-spacing:.09em}
.lf-word .ltr{transform-origin:50% 100%;animation:lf-flip .65s cubic-bezier(.2,.9,.3,1.2) calc(.55s + var(--i)*.06s) backwards}
@keyframes lf-flip{from{opacity:0;transform:translateY(30%) rotateX(-90deg)}}
.ca .lf-word .ltr{animation:lf-hop-a .5s ease-out calc(.45s + var(--i)*.04s) backwards}
.cb .lf-word .ltr{animation:lf-hop-b .5s ease-out calc(.45s + var(--i)*.04s) backwards}
@keyframes lf-hop-a{0%,100%{transform:none}40%{transform:translateY(-10px)}}
@keyframes lf-hop-b{0%,100%{transform:none}40%{transform:translateY(-10px)}}

/* ---------- 04 Ascender ---------- */
.c-ascender .light{--bg:#F6F6F3;--ink:#0B0B0D;--acc:#2F5BEA;--muted:#62626A}
.c-ascender .dark{--bg:#0B0B0D;--ink:#F3F3EF;--acc:#5B8CFF;--muted:#A0A0A8}
.as-logo{width:100%;display:flex;justify-content:center}
.as-svg{width:min(88%,440px);height:auto}
.as-s,.as-ext{fill:none;stroke:var(--ink);stroke-width:9px;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:1 1.1;stroke-dashoffset:1.05}
.as-s{animation:as-draw .6s cubic-bezier(.6,0,.3,1) calc(.15s + var(--i)*.11s) forwards}
.as-ext{animation:as-draw .55s cubic-bezier(.2,.8,.2,1) 1.25s forwards}
@keyframes as-draw{to{stroke-dashoffset:0}}
.as-dot{fill:var(--acc)}
.as-halo,.as-burst{fill:none;stroke:var(--acc);stroke-width:1.5px;opacity:0}
.as-halo{animation:as-halo 3s ease-out 2.3s infinite}
@keyframes as-halo{0%{transform:scale(1);opacity:.6}70%,100%{transform:scale(2.6);opacity:0}}
.as-rest{transition:transform .5s cubic-bezier(.3,1.3,.5,1),opacity .5s ease}
.logo:hover .as-rest{transform:translateY(3px);opacity:.82}
.logo svg .as-xk,.logo svg .as-xh{transform-origin:50% 100%}
.as-xh{transition:transform .55s cubic-bezier(.3,1.5,.5,1)}
.logo:hover .as-xh{transform:scaleY(1.18)}
.ca .as-xk{animation:as-twang-a .9s ease-out}
.cb .as-xk{animation:as-twang-b .9s ease-out}
@keyframes as-twang-a{0%,100%{transform:none}15%{transform:scaleY(.9)}40%{transform:scaleY(1.12)}60%{transform:scaleY(.97)}80%{transform:scaleY(1.02)}}
@keyframes as-twang-b{0%,100%{transform:none}15%{transform:scaleY(.9)}40%{transform:scaleY(1.12)}60%{transform:scaleY(.97)}80%{transform:scaleY(1.02)}}
.as-dh{transition:transform .55s cubic-bezier(.3,1.5,.5,1)}
.logo:hover .as-dh{transform:translateY(-21px)}
.as-di{animation:as-pop .55s ease-out 1.7s backwards}
@keyframes as-pop{0%{transform:scale(0)}60%{transform:scale(1.35)}100%{transform:none}}
.as-dw{animation:as-float 3s ease-in-out 2.3s infinite}
@keyframes as-float{0%,100%{transform:none}50%{transform:translateY(-5px)}}
.ca .as-dk{animation:as-launch-a 1.15s linear}
.cb .as-dk{animation:as-launch-b 1.15s linear}
@keyframes as-launch-a{0%{transform:none;animation-timing-function:cubic-bezier(.2,.7,.3,1)}28%{transform:translateY(-64px);animation-timing-function:cubic-bezier(.6,0,.8,.4)}56%{transform:none;animation-timing-function:cubic-bezier(.2,.7,.3,1)}70%{transform:translateY(-14px);animation-timing-function:cubic-bezier(.6,0,.8,.4)}82%{transform:none;animation-timing-function:cubic-bezier(.2,.7,.3,1)}91%{transform:translateY(-4px);animation-timing-function:cubic-bezier(.6,0,.8,.4)}100%{transform:none}}
@keyframes as-launch-b{0%{transform:none;animation-timing-function:cubic-bezier(.2,.7,.3,1)}28%{transform:translateY(-64px);animation-timing-function:cubic-bezier(.6,0,.8,.4)}56%{transform:none;animation-timing-function:cubic-bezier(.2,.7,.3,1)}70%{transform:translateY(-14px);animation-timing-function:cubic-bezier(.6,0,.8,.4)}82%{transform:none;animation-timing-function:cubic-bezier(.2,.7,.3,1)}91%{transform:translateY(-4px);animation-timing-function:cubic-bezier(.6,0,.8,.4)}100%{transform:none}}
.ca .as-burst{animation:as-burst-a .8s cubic-bezier(.2,.7,.3,1) .62s}
.cb .as-burst{animation:as-burst-b .8s cubic-bezier(.2,.7,.3,1) .62s}
@keyframes as-burst-a{0%{transform:scale(1);opacity:.9}100%{transform:scale(4);opacity:0}}
@keyframes as-burst-b{0%{transform:scale(1);opacity:.9}100%{transform:scale(4);opacity:0}}

@media (prefers-reduced-motion:reduce){
  html{scroll-behavior:auto}
  .logo,.logo *{animation-duration:1ms!important;animation-delay:0s!important;animation-iteration-count:1!important;transition-duration:1ms!important}
}
</style>
@endverbatim
</head>
<body>

<header class="top">
    <div class="wrap">
        <div class="brand">Ascend.com <small>Identity review · private preview</small></div>
        <nav class="nav" aria-label="Directions">
            @foreach ($concepts as $c)
                <a href="#{{ $c['id'] }}"><span>{{ $c['num'] }}</span>{{ $c['name'] }}</a>
            @endforeach
        </nav>
    </div>
</header>

<main>
    <section class="hero wrap">
        <p class="eyebrow">Ascend.com · Brand identity</p>
        <h1>Four directions for the Ascend identity.</h1>
        <p>Each direction is shown as it would live on the site — animated, in light and dark mode — alongside its favicon, app icon, type pairing and colour palette.</p>
        <div class="how">
            <span><b>Hover</b> Point at a logo</span>
            <span><b>Click</b> Tap a logo</span>
            <span><b>Replay</b> Watch the intro again</span>
        </div>
    </section>

    @foreach ($concepts as $c)
        <section class="concept c-{{ $c['id'] }}" id="{{ $c['id'] }}" aria-labelledby="{{ $c['id'] }}-title">
            <div class="wrap">
                <div class="c-head">
                    <h2 id="{{ $c['id'] }}-title"><span>{{ $c['num'] }}</span>{{ $c['name'] }}</h2>
                    <p>{{ $c['idea'] }}</p>
                </div>

                <div class="stages">
                    @foreach (['light', 'dark'] as $m)
                        <div class="stage {{ $m }}">
                            <span class="mode">{{ ucfirst($m) }} mode</span>

                            @switch($c['id'])
                                @case('peak')
                                    <button type="button" class="logo pk-logo" aria-label="Play the Peak logo animation, {{ $m }} mode">
                                        <svg class="pk-svg" width="168" height="168" viewBox="0 0 200 200" aria-hidden="true">
                                            <defs>
                                                <clipPath id="pk-base-{{ $m }}"><rect width="200" height="170"></rect></clipPath>
                                                <clipPath id="pk-cut-{{ $m }}"><rect width="200" height="150"></rect></clipPath>
                                            </defs>
                                            <g class="pk-press"><g class="pk-mark-hov">
                                                <polyline class="pk-outer" points="20.7,180 100,30 179.3,180" pathLength="1" clip-path="url(#pk-base-{{ $m }})"></polyline>
                                                <polyline class="pk-glint" points="20.7,180 100,30 179.3,180" pathLength="1" clip-path="url(#pk-base-{{ $m }})"></polyline>
                                                <g class="pk-click"><g class="pk-hov"><g class="pk-in"><g class="pk-idle">
                                                    <polyline class="pk-inner" points="66.2,160 100,96 133.8,160" clip-path="url(#pk-cut-{{ $m }})"></polyline>
                                                </g></g></g></g>
                                            </g></g>
                                        </svg>
                                        <span class="pk-word">@foreach (str_split('ASCEND') as $i => $l)<span class="ltr" style="--i: {{ $i }}">{{ $l }}</span>@endforeach</span>
                                    </button>
                                    @break

                                @case('steps')
                                    <button type="button" class="logo st-logo" aria-label="Play the Steps logo animation, {{ $m }} mode">
                                        <svg class="st-svg" width="128" height="128" viewBox="0 0 200 200" aria-hidden="true">
                                            @foreach ([[29, 138, 40], [67, 106, 72], [105, 74, 104], [143, 42, 136]] as $i => [$x, $y, $h])
                                                <g class="st-bc" style="--i: {{ $i }}"><g class="st-bh"><g class="st-bi"><g class="st-bw"><rect class="st-r{{ $i + 1 }}" x="{{ $x }}" y="{{ $y }}" width="28" height="{{ $h }}" rx="5"></rect></g></g></g></g>
                                            @endforeach
                                            <ellipse class="st-wave" cx="157" cy="41" rx="14" ry="3.5"></ellipse>
                                            <g class="st-dc"><g class="st-dh"><g class="st-di"><g class="st-dw"><g class="st-ds">
                                                <circle class="st-dot" cx="157" cy="25" r="12"></circle>
                                            </g></g></g></g></g>
                                        </svg>
                                        <span class="st-word">@foreach (str_split('ascend') as $i => $l)<span class="ltr" style="--i: {{ $i }}">{{ $l }}</span>@endforeach</span>
                                    </button>
                                    @break

                                @case('lift')
                                    <button type="button" class="logo lf-logo" aria-label="Play the Lift logo animation, {{ $m }} mode">
                                        <svg class="lf-svg" width="124" height="124" viewBox="0 0 200 200" aria-hidden="true">
                                            <defs>
                                                <clipPath id="lf-clip-{{ $m }}"><rect x="40" y="-200" width="120" height="600"></rect></clipPath>
                                            </defs>
                                            @foreach (['30,178.33 100,120 170,178.33', '30,134.33 100,76 170,134.33', '30,90.33 100,32 170,90.33'] as $i => $pts)
                                                <g class="lf-k" style="--i: {{ $i }}"><g class="lf-h"><g class="lf-i"><g class="lf-w"><polyline class="lf-chev lf-c{{ $i + 1 }}" points="{{ $pts }}" clip-path="url(#lf-clip-{{ $m }})"></polyline></g></g></g></g>
                                            @endforeach
                                        </svg>
                                        <span class="lf-word">@foreach (str_split('ASCEND') as $i => $l)<span class="ltr" style="--i: {{ $i }}">{{ $l }}</span>@endforeach</span>
                                    </button>
                                    @break

                                @case('ascender')
                                    <button type="button" class="logo as-logo" aria-label="Play the Ascender logo animation, {{ $m }} mode">
                                        <svg class="as-svg" width="440" height="218" viewBox="0 0 372 184" aria-hidden="true">
                                            <g class="as-rest">
                                                <circle class="as-s" style="--i: 0" cx="33.5" cy="148" r="23.5" pathLength="1"></circle>
                                                <path class="as-s" style="--i: 0.6" d="M57,124.5 V171.5" pathLength="1"></path>
                                                <path class="as-s" style="--i: 1.2" d="M107,132 C105,127 99,124.5 93,124.5 C85,124.5 79,129 79,136 C79,143 85,145.5 93,148 C101,150.5 107,153 107,160 C107,167 101,171.5 93,171.5 C86,171.5 80,168.5 78,163.5" pathLength="1"></path>
                                                <path class="as-s" style="--i: 2.1" d="M168.12,131.38 A23.5,23.5 0 1 0 168.12,164.62" pathLength="1"></path>
                                                <path class="as-s" style="--i: 3" d="M189,148 H236 A23.5,23.5 0 1 0 229.12,164.62" pathLength="1"></path>
                                                <path class="as-s" style="--i: 3.9" d="M257,171.5 V124.5 M257,144 A20,20 0 0 1 297,144 V171.5" pathLength="1"></path>
                                            </g>
                                            <circle class="as-s" style="--i: 4.8" cx="341.5" cy="148" r="23.5" pathLength="1"></circle>
                                            <path class="as-s" style="--i: 5.4" d="M365,171.5 V124.5" pathLength="1"></path>
                                            <g class="as-xk"><g class="as-xh"><path class="as-ext" d="M365,124.5 V30" pathLength="1"></path></g></g>
                                            <g class="as-dh">
                                                <circle class="as-burst" cx="365" cy="12" r="7"></circle>
                                                <g class="as-dk"><g class="as-di"><g class="as-dw">
                                                    <circle class="as-halo" cx="365" cy="12" r="7"></circle>
                                                    <circle class="as-dot" cx="365" cy="12" r="7"></circle>
                                                </g></g></g>
                                            </g>
                                        </svg>
                                    </button>
                                    @break
                            @endswitch

                            <button type="button" class="replay">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12a9 9 0 1 0 3-6.7"></path><path d="M3 4v5h5"></path></svg>
                                <span>Replay intro</span>
                            </button>
                        </div>
                    @endforeach
                </div>

                <div class="details">
                    <div class="card">
                        <h3>Favicon</h3>
                        <div class="tabbar light">
                            <div class="tab"><span class="fav" style="{{ $vars($c['icons']['light']) }}">{!! $mark[$c['id']]($c['id'].'-tl') !!}</span><span class="t">Ascend.com</span><span class="x" aria-hidden="true">×</span></div>
                        </div>
                        <div class="tabbar dark">
                            <div class="tab"><span class="fav" style="{{ $vars($c['icons']['dark']) }}">{!! $mark[$c['id']]($c['id'].'-td') !!}</span><span class="t">Ascend.com</span><span class="x" aria-hidden="true">×</span></div>
                        </div>
                        <div class="sizes">
                            @foreach (['light', 'dark'] as $m)
                                <div class="grp {{ $m }}" style="{{ $vars($c['icons'][$m]) }}">
                                    @foreach ([16, 32, 48] as $s)
                                        <div class="sz"><span style="width: {{ $s }}px; height: {{ $s }}px; display: block">{!! $mark[$c['id']]($c['id'].'-s'.$m.$s) !!}</span>{{ $s }}px</div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="card">
                        <h3>App icon</h3>
                        <div class="apps">
                            @foreach (['light' => 'Light', 'dark' => 'Dark', 'brand' => 'Brand'] as $k => $label)
                                <div class="app-item">
                                    <div class="app" style="{{ $vars($c['icons'][$k]) }}">{!! $mark[$c['id']]($c['id'].'-a'.$k) !!}</div>
                                    {{ $label }}
                                </div>
                            @endforeach
                        </div>
                        <div class="apps-row" aria-label="Smaller sizes">
                            @foreach (['light', 'dark', 'brand'] as $k)
                                <div class="app sm" style="{{ $vars($c['icons'][$k]) }}">{!! $mark[$c['id']]($c['id'].'-m'.$k) !!}</div>
                            @endforeach
                        </div>
                    </div>

                    <div class="card">
                        <h3>Typography</h3>
                        <div class="fonts">
                            @foreach ($c['fonts'] as $f)
                                <div class="font">
                                    <span class="aa" style="font-family: {{ $f['css'] }}; font-weight: {{ $f['weight'] }}; letter-spacing: {{ $f['tracking'] }}" aria-hidden="true">Aa</span>
                                    <span class="role">{{ $f['role'] }}</span>
                                    <span class="fam">{{ $f['family'] }}</span>
                                    <span class="use">{{ $f['use'] }}</span>
                                </div>
                            @endforeach
                            <div class="sample">
                                <p class="h" style="font-family: {{ $c['fonts'][0]['css'] }}; font-weight: {{ $c['fonts'][0]['weight'] }}; letter-spacing: {{ $c['fonts'][0]['tracking'] }}">One of the world’s elite .com domains.</p>
                                <p class="b" style="font-family: {{ $c['fonts'][1]['css'] }}">Ascend.com was registered in 1990 and previously owned by Nokia. It is being brokered by ATM Holdings.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <h3>Colour palette</h3>
                        <div class="swatches">
                            @foreach ($c['palette'] as [$name, $hex, $role, $on])
                                <div class="sw" style="background: {{ $hex }}; color: {{ $on }}">
                                    <b>{{ $name }}</b>
                                    <div><span>{{ $hex }}</span><span>{{ $role }}</span></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    <section class="closing">
        <div class="wrap">
            <h2>Choosing a direction</h2>
            <p>Let us know the number of the direction you prefer. Elements can be combined — one direction’s mark with another’s motion, type or colour — before the identity is finalised.</p>
        </div>
    </section>
</main>

<footer class="foot">
    <div class="wrap">
        <span>Private preview for Ascend.com — please don’t share this link.</span>
        <a class="credit" href="https://qquantum.ai" target="_blank" rel="noopener">
            <span>Brand identity by</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-40 -780 5620 1010" role="img" aria-label="QQuantum.ai" fill="none"><title>QQuantum.ai</title><g><path transform="translate(301 0)" d="M338 14Q206 14 128 -58Q50 -131 50 -266V-434Q50 -569 128 -642Q206 -714 338 -714Q470 -714 548 -642Q626 -569 626 -434V-266Q626 -131 548 -58Q470 14 338 14ZM338 -104Q412 -104 453 -147Q494 -190 494 -262V-438Q494 -510 453 -553Q412 -596 338 -596Q265 -596 224 -553Q182 -510 182 -438V-262Q182 -190 224 -147Q265 -104 338 -104ZM384 180Q335 180 304 150Q274 119 274 68V0H402V48Q402 78 430 78H489V180Z" fill="currentColor"/></g><g><path transform="translate(942 0)" d="M259 8Q201 8 158 -18Q114 -45 90 -92Q66 -139 66 -200V-496H192V-210Q192 -154 220 -126Q247 -98 298 -98Q356 -98 388 -136Q420 -175 420 -244V-496H546V0H422V-65H404Q392 -40 359 -16Q326 8 259 8Z" fill="currentColor"/></g><g><path transform="translate(1523 0)" d="M224 14Q171 14 129 -4Q87 -23 62 -58Q38 -94 38 -145Q38 -196 62 -230Q87 -265 130 -282Q174 -300 230 -300H366V-328Q366 -363 344 -386Q322 -408 274 -408Q227 -408 204 -386Q181 -365 174 -331L58 -370Q70 -408 96 -440Q123 -471 168 -490Q212 -510 276 -510Q374 -510 431 -461Q488 -412 488 -319V-134Q488 -104 516 -104H556V0H472Q435 0 411 -18Q387 -36 387 -66V-67H368Q364 -55 350 -36Q336 -16 306 -1Q276 14 224 14ZM246 -88Q299 -88 332 -118Q366 -147 366 -196V-206H239Q204 -206 184 -191Q164 -176 164 -149Q164 -122 185 -105Q206 -88 246 -88Z" fill="currentColor"/></g><g><path transform="translate(2066 0)" d="M70 0V-496H194V-431H212Q224 -457 257 -480Q290 -504 357 -504Q415 -504 458 -478Q502 -451 526 -404Q550 -358 550 -296V0H424V-286Q424 -342 396 -370Q369 -398 318 -398Q260 -398 228 -360Q196 -321 196 -252V0Z" fill="currentColor"/></g><g><path transform="translate(2647 0)" d="M260 0Q211 0 180 -30Q150 -61 150 -112V-392H26V-496H150V-650H276V-496H412V-392H276V-134Q276 -104 304 -104H400V0Z" fill="currentColor"/></g><g><path transform="translate(3068 0)" d="M259 8Q201 8 158 -18Q114 -45 90 -92Q66 -139 66 -200V-496H192V-210Q192 -154 220 -126Q247 -98 298 -98Q356 -98 388 -136Q420 -175 420 -244V-496H546V0H422V-65H404Q392 -40 359 -16Q326 8 259 8Z" fill="currentColor"/></g><g><path transform="translate(3649 0)" d="M70 0V-496H194V-442H212Q225 -467 255 -486Q285 -504 334 -504Q387 -504 419 -484Q451 -463 468 -430H486Q503 -462 534 -483Q565 -504 622 -504Q668 -504 706 -484Q743 -465 766 -426Q788 -386 788 -326V0H662V-317Q662 -358 641 -378Q620 -399 582 -399Q539 -399 516 -372Q492 -344 492 -293V0H366V-317Q366 -358 345 -378Q324 -399 286 -399Q243 -399 220 -372Q196 -344 196 -293V0Z" fill="currentColor"/></g><g><path transform="translate(4468 0)" d="M150 14Q109 14 82 -13Q54 -39 54 -81Q54 -123 82 -150Q109 -176 150 -176Q190 -176 217 -149Q244 -123 244 -81Q244 -39 217 -12Q190 14 150 14Z" fill="#5eb3d6"/></g><g><path transform="translate(4731 0)" d="M224 14Q171 14 129 -4Q87 -23 62 -58Q38 -94 38 -145Q38 -196 62 -230Q87 -265 130 -282Q174 -300 230 -300H366V-328Q366 -363 344 -386Q322 -408 274 -408Q227 -408 204 -386Q181 -365 174 -331L58 -370Q70 -408 96 -440Q123 -471 168 -490Q212 -510 276 -510Q374 -510 431 -461Q488 -412 488 -319V-134Q488 -104 516 -104H556V0H472Q435 0 411 -18Q387 -36 387 -66V-67H368Q364 -55 350 -36Q336 -16 306 -1Q276 14 224 14ZM246 -88Q299 -88 332 -118Q366 -147 366 -196V-206H239Q204 -206 184 -191Q164 -176 164 -149Q164 -122 185 -105Q206 -88 246 -88Z" fill="#5eb3d6"/></g><g><path transform="translate(5274 0)" d="M70 0V-496H196V0ZM133 -554Q99 -554 76 -576Q52 -598 52 -634Q52 -670 76 -692Q99 -714 133 -714Q168 -714 191 -692Q214 -670 214 -634Q214 -598 191 -576Q168 -554 133 -554Z" fill="#5eb3d6"/></g><g><path transform="translate(0 0)" d="M338 14Q206 14 128 -58Q50 -131 50 -266V-434Q50 -569 128 -642Q206 -714 338 -714Q470 -714 548 -642Q626 -569 626 -434V-266Q626 -131 548 -58Q470 14 338 14ZM338 -104Q412 -104 453 -147Q494 -190 494 -262V-438Q494 -510 453 -553Q412 -596 338 -596Q265 -596 224 -553Q182 -510 182 -438V-262Q182 -190 224 -147Q265 -104 338 -104ZM384 180Q335 180 304 150Q274 119 274 68V0H402V48Q402 78 430 78H489V180Z" fill="none" stroke="#c9a75c" stroke-width="55" stroke-linejoin="round"/></g></svg>
        </a>
    </div>
</footer>

@verbatim
<script>
(function () {
  function bindLogo(logo) {
    var n = 0;
    logo.addEventListener('click', function () {
      n++;
      logo.classList.remove('ca', 'cb');
      logo.classList.add(n % 2 ? 'ca' : 'cb');
    });
  }

  // Intros wait until the logo is on screen, so lower sections aren't finished before they're seen.
  var io = 'IntersectionObserver' in window ? new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) { e.target.classList.add('play'); io.unobserve(e.target); }
    });
  }, { threshold: 0.35 }) : null;

  function watch(logo) { io ? io.observe(logo) : logo.classList.add('play'); }

  document.querySelectorAll('.logo').forEach(function (logo) { bindLogo(logo); watch(logo); });

  // Replay: swapping in a fresh clone restarts every CSS animation from zero.
  document.querySelectorAll('.replay').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var old = btn.closest('.stage').querySelector('.logo');
      var fresh = old.cloneNode(true);
      fresh.classList.remove('ca', 'cb');
      fresh.classList.add('play');
      old.replaceWith(fresh);
      bindLogo(fresh);
    });
  });
})();
</script>
@endverbatim
</body>
</html>
