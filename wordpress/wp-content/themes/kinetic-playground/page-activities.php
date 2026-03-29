<?php
/* Template Name: Activities */
get_header(); ?>
<main class="max-w-7xl mx-auto px-6 pt-16">

    <!-- Hero Section -->
    <header class="text-center mb-20">
        <h1 class="font-headline text-5xl md:text-7xl font-extrabold text-primary mb-6 tracking-tight">
            Adventure <span class="text-primary-container">Starts</span> Here
        </h1>
        <p class="text-on-surface-variant text-xl max-w-2xl mx-auto leading-relaxed">
            Unlock your child's potential through our curated blend of physical play, scientific inquiry, and creative expression.
        </p>
    </header>

    <!-- Filters Section -->
    <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-6">
        <div class="flex flex-wrap justify-center gap-3">
            <button class="px-6 py-2 rounded-full bg-primary text-white font-semibold shadow-lg hover:shadow-xl transition-all">All Ages</button>
            <button class="px-6 py-2 rounded-full bg-surface-container-high text-on-surface-variant font-semibold hover:bg-primary-container hover:text-on-primary-container transition-all">Tiny Tots (2-4)</button>
            <button class="px-6 py-2 rounded-full bg-surface-container-high text-on-surface-variant font-semibold hover:bg-primary-container hover:text-on-primary-container transition-all">Little Explorers (5-7)</button>
            <button class="px-6 py-2 rounded-full bg-surface-container-high text-on-surface-variant font-semibold hover:bg-primary-container hover:text-on-primary-container transition-all">Junior Aces (8-12)</button>
        </div>
        <div class="relative w-full md:w-auto">
            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
            <input type="text" class="w-full md:w-64 pl-12 pr-6 py-3 bg-surface-container-high rounded-full border-none focus:ring-2 focus:ring-primary-container focus:ring-opacity-50 text-on-surface placeholder-on-surface-variant/60" placeholder="Search programs..." />
        </div>
    </div>

    <!-- Programs Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Creative Arts -->
        <div class="bg-surface-container-lowest rounded-xl overflow-hidden group hover:-translate-y-2 transition-transform duration-500 shadow-sm hover:shadow-xl">
            <div class="relative h-64 overflow-hidden">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAd3Xp3Mq231YIBVTgZO_EDi3Z8BPRfpWDoMAlqbaVAkODC9DY5fG645XDn107uI1Vtftyigz4HcXN51Xhzxi8x_gDQ4Z5JbaRqJPYJqvtkRJz54VdCSAfO9p4umgXCdp2N3AOjcqQDkA4xyqe-OPshmyjTEWaBfsfu2xGWpvmQvwebecTvAMh1yQ-rEAuCxiN15PTjL2ZY2LXrMEpfFQPgSR2fyMuCPu8BOfbaQ40aGce6GfSi6terwStBsDNHI0E4-e6Cbf6qx9F0" alt="Creative Arts" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4">
                    <span class="px-4 py-1 rounded-full bg-secondary-container text-on-secondary-container font-bold text-xs">Ages 4-10</span>
                </div>
            </div>
            <div class="p-8">
                <div class="organic-blob w-12 h-12 bg-secondary-container/30 flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-secondary">palette</span>
                </div>
                <h3 class="font-headline text-2xl font-bold mb-3 text-on-surface">Creative Arts</h3>
                <p class="text-on-surface-variant mb-6 line-clamp-2">Ignite imagination through multi-sensory painting, clay molding, and digital storytelling workshops.</p>
                <a href="#" class="w-full py-4 px-6 rounded-xl font-bold border-2 border-primary-container text-primary hover:bg-primary-container hover:text-on-primary-container transition-all flex items-center justify-center gap-2">
                    Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
        </div>

        <!-- Little Scientists -->
        <div class="bg-surface-container-lowest rounded-xl overflow-hidden group hover:-translate-y-2 transition-transform duration-500 shadow-sm hover:shadow-xl lg:mt-8">
            <div class="relative h-64 overflow-hidden">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuD29xf1aatWKaSqrN6sIwOPetScGjimaM_Nc5702q_Pyr27-k2PcKX-uWW1cACedOvoY6ZmCbx4zPnkZ-67dZ4d1Uter_MOmOP_V70AgZU5NmzxgrnMTfbDlRwSsPZmD4GqPA0Swjba8FpQFUbiicTmpG5a9jcSvQ4HfW3_CnMpckrex4S-vpG__FFnrkffaYocWRMFnUuVUwViELos_Mpx4ONLx4JdD2VSejU4dM5aIAleN5yGP9Fu8cZFx8nLjL7k2VQea-ZYfUcg" alt="Little Scientists" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4">
                    <span class="px-4 py-1 rounded-full bg-tertiary-container text-on-tertiary-container font-bold text-xs">Ages 6-12</span>
                </div>
            </div>
            <div class="p-8">
                <div class="organic-blob w-12 h-12 bg-tertiary-container/30 flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-tertiary">science</span>
                </div>
                <h3 class="font-headline text-2xl font-bold mb-3 text-on-surface">Little Scientists</h3>
                <p class="text-on-surface-variant mb-6 line-clamp-2">Hands-on experiments where bubbles, magnets, and simple machines bring the laws of physics to life.</p>
                <a href="#" class="w-full py-4 px-6 rounded-xl font-bold border-2 border-primary-container text-primary hover:bg-primary-container hover:text-on-primary-container transition-all flex items-center justify-center gap-2">
                    Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
        </div>

        <!-- Junior Athletes -->
        <div class="bg-surface-container-lowest rounded-xl overflow-hidden group hover:-translate-y-2 transition-transform duration-500 shadow-sm hover:shadow-xl">
            <div class="relative h-64 overflow-hidden">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAkxckRKgJNct5eNu-S9HpOeJb59Xv6nWjyNjQmLCVNFO3o7dn8T6eFVKZrv6ZfeMmWiTxKj1ZYRMD7mlKXg-JwQEOzNMKUQUOAbO4fMJenU0UhRfjjPV7PEIC8jcit2MyD_9fFedBsD8DdVRQjhV-as2usPkSQyhzFEHqtntmRaJzTl4BHFlyKsaIAPhAKdeu8UHMNBFvdYOYgvt9vnonKALMWhSYvukxGprkvpdF9tQcFGR6fifCAMr2DFhACSVrirKOUykaMDwU-" alt="Junior Athletes" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4">
                    <span class="px-4 py-1 rounded-full bg-primary-container text-on-primary-container font-bold text-xs">Ages 5-9</span>
                </div>
            </div>
            <div class="p-8">
                <div class="organic-blob w-12 h-12 bg-primary-container/30 flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-primary">sports_soccer</span>
                </div>
                <h3 class="font-headline text-2xl font-bold mb-3 text-on-surface">Junior Athletes</h3>
                <p class="text-on-surface-variant mb-6 line-clamp-2">Dynamic obstacle courses and team games designed to build coordination, speed, and great sportsmanship.</p>
                <a href="#" class="w-full py-4 px-6 rounded-xl font-bold border-2 border-primary-container text-primary hover:bg-primary-container hover:text-on-primary-container transition-all flex items-center justify-center gap-2">
                    Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
        </div>

        <!-- Rhythm & Movement -->
        <div class="bg-surface-container-lowest rounded-xl overflow-hidden group hover:-translate-y-2 transition-transform duration-500 shadow-sm hover:shadow-xl lg:mb-8">
            <div class="relative h-64 overflow-hidden">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbq2sb8C8luH3M9Wz8SKaSeYChEAS590vlqbIfNItT2GcK_JSFxFMHnyzg021C2Rt11LNnz2T8dsoSWAKhb4kTcMAXKY9yfqKXB8PBcmoRcxt5CWMl4pXtSkYx5peqPNwayDrIrtFzBGWRFhuPAeR9OstaRKlNm3opYOgx0UzbGIftNW5Drd0qqJcoefhIDMbdAngdb8w0FyAsJyo5D9deahrMTsgll78tRMpN8_k7dbgrfkonp-4-93M-cYzRJIq-DHIu7mV-tyS4" alt="Rhythm and Movement" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4">
                    <span class="px-4 py-1 rounded-full bg-secondary-container text-on-secondary-container font-bold text-xs">Ages 2-5</span>
                </div>
            </div>
            <div class="p-8">
                <div class="organic-blob w-12 h-12 bg-secondary-container/30 flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-secondary">music_note</span>
                </div>
                <h3 class="font-headline text-2xl font-bold mb-3 text-on-surface">Rhythm &amp; Movement</h3>
                <p class="text-on-surface-variant mb-6 line-clamp-2">A joyful introduction to dance and music focusing on self-expression and basic motor skills development.</p>
                <a href="#" class="w-full py-4 px-6 rounded-xl font-bold border-2 border-primary-container text-primary hover:bg-primary-container hover:text-on-primary-container transition-all flex items-center justify-center gap-2">
                    Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
        </div>

        <!-- Nature Rangers -->
        <div class="bg-surface-container-lowest rounded-xl overflow-hidden group hover:-translate-y-2 transition-transform duration-500 shadow-sm hover:shadow-xl">
            <div class="relative h-64 overflow-hidden">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBH1e-yCT7qA531d7hsiWmqmmUzYD1zrqp3Hoix1HQHpA2ehNhcbAm4QrzueQiVK4PD0dSU5pQrkaeh92zOc18tFcWnqjeCAvZwp3Y1vfJu8JeApXh3QvPbatGVfQTbdYtPJ9Ns0hyhUREvoUv1FvPISm-9Lt1nTNEUI2Ira5Jv2QolknAyBVwLN56AbaVpURBKTXwYt_OY2ZVxph17_uLvuk_T6VhSLaywFps-Wf2cPxpxICiS0KM4JxZ49Xdd1iSvMSg1mFsHtql0" alt="Nature Rangers" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4">
                    <span class="px-4 py-1 rounded-full bg-tertiary-container text-on-tertiary-container font-bold text-xs">Ages 7-12</span>
                </div>
            </div>
            <div class="p-8">
                <div class="organic-blob w-12 h-12 bg-tertiary-container/30 flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-tertiary">park</span>
                </div>
                <h3 class="font-headline text-2xl font-bold mb-3 text-on-surface">Nature Rangers</h3>
                <p class="text-on-surface-variant mb-6 line-clamp-2">Outdoor exploration identifying local flora, building bug hotels, and learning environmental stewardship.</p>
                <a href="#" class="w-full py-4 px-6 rounded-xl font-bold border-2 border-primary-container text-primary hover:bg-primary-container hover:text-on-primary-container transition-all flex items-center justify-center gap-2">
                    Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
        </div>

        <!-- Tech Tinkerers -->
        <div class="bg-surface-container-lowest rounded-xl overflow-hidden group hover:-translate-y-2 transition-transform duration-500 shadow-sm hover:shadow-xl lg:mt-8">
            <div class="relative h-64 overflow-hidden">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZFHbiF_z4xtbrI5JIGXkEyPn8zeFp3HmKyfAgTJlOCPQyEWcgCC9mWbCU4bZxXvHlgkjpAAw821Ndyzv7M-ymlRqTBSbidLLusDBjMP8q18sLN1BqRFpXlCWkcF5m_Yi9_fr3QwBFKv_tza_EIqjHnz-e10j9NRU5FkuWtyzTzwj2uUiiX7DdfI8LDje9TFy4UA5hiJxIa6VpspMkBBsE9G70WkwcOHkEdxl0cRADT5kWACIpO3vfptFHOUOTL_195Szu_d9iqcoL" alt="Tech Tinkerers" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4">
                    <span class="px-4 py-1 rounded-full bg-primary-container text-on-primary-container font-bold text-xs">Ages 9-12</span>
                </div>
            </div>
            <div class="p-8">
                <div class="organic-blob w-12 h-12 bg-primary-container/30 flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-primary">precision_manufacturing</span>
                </div>
                <h3 class="font-headline text-2xl font-bold mb-3 text-on-surface">Tech Tinkerers</h3>
                <p class="text-on-surface-variant mb-6 line-clamp-2">Introduction to basic robotics and visual coding where kids build and program their own moving machines.</p>
                <a href="#" class="w-full py-4 px-6 rounded-xl font-bold border-2 border-primary-container text-primary hover:bg-primary-container hover:text-on-primary-container transition-all flex items-center justify-center gap-2">
                    Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Summer Pass Callout -->
    <section class="mt-24 mb-20 bg-primary-container rounded-xl p-12 relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-12">
        <div class="relative z-10 max-w-xl">
            <h2 class="font-headline text-4xl font-extrabold text-on-primary-container mb-6 leading-tight">Can't decide on just one? <br/>Try our Summer Pass!</h2>
            <p class="text-on-primary-container/80 text-lg mb-8">Get unlimited access to all weekly workshops and weekend special events for the entire summer season.</p>
            <a href="<?php echo esc_url( home_url( '/join' ) ); ?>" class="inline-block bg-primary text-white font-bold px-10 py-4 rounded-full shadow-lg hover:shadow-2xl hover:-translate-y-1 transition-all">Grab Your Pass</a>
        </div>
        <div class="relative z-10 w-full md:w-1/3">
            <div class="bg-white/30 backdrop-blur-md rounded-xl p-6 shadow-xl rotate-3 transform">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full bg-white flex items-center justify-center shadow-inner">
                        <span class="material-symbols-outlined text-primary">confirmation_number</span>
                    </div>
                    <div>
                        <p class="font-bold text-on-primary-container">Ultimate Pass</p>
                        <p class="text-xs text-on-primary-container/60">VALID JUN - AUG</p>
                    </div>
                </div>
                <div class="h-2 w-full bg-white/20 rounded-full mb-4"></div>
                <p class="text-2xl font-black text-on-primary-container">$299<span class="text-sm font-normal">/season</span></p>
            </div>
        </div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-primary/10 organic-blob"></div>
        <div class="absolute -top-20 -right-20 w-64 h-64 bg-white/10 organic-blob"></div>
    </section>
</main>
<?php get_footer(); ?>
