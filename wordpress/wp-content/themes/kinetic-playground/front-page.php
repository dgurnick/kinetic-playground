<?php get_header(); ?>
<main>
    <!-- Hero Section -->
    <section class="relative px-6 pt-16 pb-24 overflow-hidden">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="z-10 text-center lg:text-left">
                <span class="inline-block px-4 py-1.5 rounded-full bg-surface-container-highest text-primary font-bold text-sm mb-6">WHERE ENERGY MEETS IMAGINATION</span>
                <h1 class="font-headline text-5xl md:text-7xl font-extrabold text-on-surface leading-[1.1] tracking-tight mb-8">
                    The World is Your <span class="text-primary italic">Kinetic</span> Playground
                </h1>
                <p class="text-lg md:text-xl text-on-surface-variant mb-10 max-w-xl mx-auto lg:mx-0">
                    Nurturing curiosity through active play, messy art, and joyful noise. Discover a sanctuary designed for every child's unique spark.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="<?php echo esc_url( home_url( '/activities' ) ); ?>" class="bg-gradient-to-br from-primary to-primary-fixed text-on-primary text-lg px-10 py-5 rounded-full font-headline font-bold shadow-[0_20px_40px_-10px_rgba(0,100,121,0.3)] hover:scale-105 transition-transform active:scale-95 text-center">
                        Start Exploring
                    </a>
                    <a href="<?php echo esc_url( home_url( '/join' ) ); ?>" class="bg-surface-container-lowest text-on-surface text-lg px-10 py-5 rounded-full font-headline font-bold shadow-sm hover:bg-surface-container-low transition-colors active:scale-95 text-center">
                        View Schedule
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="absolute -top-20 -right-20 w-96 h-96 bg-primary-container rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
                <div class="absolute -bottom-20 -left-20 w-96 h-96 bg-tertiary-container rounded-full mix-blend-multiply filter blur-3xl opacity-30"></div>
                <div class="relative rounded-xl overflow-hidden shadow-2xl rotate-3 hover:rotate-0 transition-transform duration-700">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBX_izUnpgkH3HeQMnHX89f7QjBtbfHyfK8Nrt0nZBGFF4HxGVnLCsQ1LCXMR08U6_94GWloZ-UpWycp-Dy07XZN4qkv1x7EVwB38TSyE0QadsmaEsXT2m4hKhApIV1lqAeGf-qGRm2rHQxTsdnuZxIli7DccgHF9d6ErbhtrgyzyBnklu1xmGBNn9Lmyc8C17PFzr7TvGXheqStUgzL6qNPNtPUWClOCOIA8xQ4fGPoKnZPuiBspvDRZDsTozOX-xvCreeNOuvr2-1" alt="Kids playing" class="w-full h-[500px] object-cover rounded-xl" />
                </div>
                <div class="absolute bottom-10 -left-12 hidden md:block glass-card p-6 rounded-lg shadow-xl max-w-[200px]">
                    <div class="flex gap-2 items-center mb-2">
                        <span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="font-bold text-on-surface">500+</span>
                    </div>
                    <p class="text-sm text-on-surface-variant">Happy little explorers joined this month!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Activities: Bento Grid -->
    <section class="py-24 bg-surface-container-low">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="font-headline text-4xl font-extrabold text-on-surface mb-4">Choose Your Adventure</h2>
                <p class="text-on-surface-variant max-w-2xl mx-auto">From messy fingers to high-octane sprints, we have a specialized zone for every kind of play.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 h-auto md:h-[600px]">
                <!-- Art Zone -->
                <div class="md:col-span-8 group relative overflow-hidden rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-xl transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-on-surface/60 to-transparent z-10"></div>
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAnsiPnT1WtGxZkk7fwH7dA96lHyqiOns5ErBGscDK3a1Hhac249vWNu_-DXtrLhEmxmaO8HW5jCzp6aSJFhv24ANxpHQ_yv2NU5jCLEy0OZLJlSO88Ivsa4uWRVSLuFoGs2t3ow8diFeRSn9VfqZT56Zxij21ewwjjY5WXpgj7wvW0N7LeP7q0XpFE8mE1Z5Qt8pnrTbie_ZE0Hzt5OcSbVlxRS76jLLukMlcZTEG-C4tmtDwgeLIHK1204K23iXGda4wW6_KItoYX" alt="Art activities" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
                    <div class="absolute bottom-8 left-8 z-20">
                        <div class="organic-blob bg-secondary w-12 h-12 flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-white">palette</span>
                        </div>
                        <h3 class="font-headline text-3xl font-bold text-white mb-2">Messy Art Studio</h3>
                        <p class="text-white/90 max-w-sm">Unleash inner Picassos with finger painting, clay sculpting, and giant murals.</p>
                    </div>
                </div>
                <!-- Music Zone -->
                <div class="md:col-span-4 group relative overflow-hidden rounded-xl bg-primary shadow-sm hover:shadow-xl transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-primary-dim/80 to-transparent z-10"></div>
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjp91b4PRws1P9Fdo9uR8oRbpmWAHQen7PavssEJot3umIWY--mnMFpWRpqo3PrRpgsKY91ShzSRk5UloJaKVtStNRBvn4kiASudTuTOFkAMEc0batWow8_gfzafnrcKs8IvAr50JLlbrfxJikW3uNTNAupg-p5dQsJaDLjhCAaBFNHS74CSZ1EhmCaaG8MpShzAbMl8KsxtVBlRUClCDE7bYT93LW1kqKq2Y_l18cHn3e-2_sl-nSGYSL4E75aJYOEbkTr3fbW2nf" alt="Music activities" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 opacity-60" />
                    <div class="absolute bottom-8 left-8 z-20">
                        <div class="organic-blob bg-primary-container w-10 h-10 flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-on-primary-container">music_note</span>
                        </div>
                        <h3 class="font-headline text-2xl font-bold text-white mb-2">Music &amp; Beats</h3>
                        <p class="text-white/90">Feel the rhythm with drums, bells, and dance-alongs.</p>
                    </div>
                </div>
                <!-- Sports Zone -->
                <div class="md:col-span-4 group relative overflow-hidden rounded-xl bg-tertiary shadow-sm hover:shadow-xl transition-all duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-tertiary-dim/80 to-transparent z-10"></div>
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEF74tSQD9YruocXFOI0YVUmzlfOBpsPHZLdcv6FrMsYsBOSZ6ba0iITgnzhZI6UoyXLIHJkgYYNOkHxYLidBAp09Vz9Vvs7mPb1E71iZxSno2W-QreEBNH3g0bNFqFulDNA9qhHhaGfcXgQpvidjWytaEw4MN8abg12hcVJ1ighqL2MYn6l99n1MKPjNbuGa-mMeAkj01dbPUqB1_B07B7IXxjud9HsBhcy6jjXlpuFecfFvS11BOHwi13k3xcQp1_AMaT65IvU" alt="Sports activities" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 opacity-60" />
                    <div class="absolute bottom-8 left-8 z-20">
                        <div class="organic-blob bg-tertiary-container w-10 h-10 flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-on-tertiary-container">sports_soccer</span>
                        </div>
                        <h3 class="font-headline text-2xl font-bold text-white mb-2">Kinetic Sports</h3>
                        <p class="text-white/90">Obstacle courses, mini-soccer, and active games.</p>
                    </div>
                </div>
                <!-- Hub Link -->
                <div class="md:col-span-8 flex flex-col justify-center items-center bg-surface-container-highest rounded-xl p-8 border-4 border-dashed border-outline-variant/20">
                    <h3 class="font-headline text-2xl font-bold text-on-surface mb-4">Want more variety?</h3>
                    <p class="text-on-surface-variant mb-6 text-center">We offer over 15 different program tracks for various age groups.</p>
                    <a href="<?php echo esc_url( home_url( '/activities' ) ); ?>" class="flex items-center gap-2 font-headline font-extrabold text-primary hover:gap-4 transition-all">
                        Browse All Programs
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div class="relative">
                <div class="relative w-full aspect-square max-w-md mx-auto">
                    <div class="absolute inset-0 bg-primary-container organic-blob translate-x-4 translate-y-4 opacity-20"></div>
                    <div class="absolute inset-0 overflow-hidden organic-blob shadow-2xl">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCp0SIc3uiXtRbLLBg1QhwijXs6cKM77Gvn1r6uI8rsptM9IjZllbqgt4E-S934n2vGPIPO8fYKr8a4Xz2TkmnorlfXQMyYtLQsLJ4X5vNfYcpyP9p0TRA80Nn3k4ojB3lOvdbZZgPweCkVRufe0P0oaqpxzbFZpEbX0sUn0UsYsTo-JSZXzDyLd8t7lhzFAo8zrzz4NrBAqgBAeE55urKAQJBA3jfnM3qqsrr3Je91o_cdl859-q7xIdfgNzV5yrPw-7T1-_2dO_4Y" alt="Happy Mother" class="w-full h-full object-cover" />
                    </div>
                </div>
            </div>
            <div>
                <h2 class="font-headline text-4xl font-extrabold text-on-surface mb-12">What Our Tribe Says</h2>
                <div class="space-y-8">
                    <div class="bg-surface-container-lowest p-8 rounded-lg shadow-[0_32px_64px_-4px_rgba(33,47,69,0.06)] relative ml-0 md:-ml-20">
                        <span class="material-symbols-outlined text-primary-container text-5xl absolute -top-4 -left-4">format_quote</span>
                        <p class="text-lg text-on-surface italic mb-6">"My daughter used to be so shy. Since starting the Music &amp; Beats class, she's come home singing and dancing. Kinetic Playground isn't just a gym; it's a confidence builder."</p>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-surface-container overflow-hidden">
                                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUOJRjSWkFR3eu0P182mKERUu83C9ODTjD8SBQryXmnDomQDW6yOQVK1LjxhiwbzL2clzKkj4tXRLPQXTjI4Zy5F60Vz0cIKsAHwc4XtzXFw_bVBWzpSO3kIc8ZUUY7KzL5kzU-o-9X0wyJSmos4tbGfCR77qbkVCVRPE4mcF8cp35KQDszCTXwS0AaGZ7jminVuEzwoBTOO9v09eCUSNCPJVtCg9FxhODf3gTBU_-FN9A-8Usb4jK4Puvbvf35xVT_FR9w8kEH0eY" alt="Sarah J." class="w-full h-full object-cover" />
                            </div>
                            <div>
                                <p class="font-bold text-on-surface">Sarah J.</p>
                                <p class="text-sm text-on-surface-variant">Mother of Lily (4)</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest p-8 rounded-lg shadow-[0_32px_64px_-4px_rgba(33,47,69,0.06)] relative md:ml-12">
                        <p class="text-lg text-on-surface italic mb-6">"Finally, a place where 'messy' is encouraged! The staff is incredible and the environment is so safe. My son asks to come here every single morning."</p>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-surface-container overflow-hidden">
                                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCRmhyteWxc5gdAhOvIivFFmn_S34RfZTFvgoyanOkdtS4GXIYrHpokIIeb4WH49YHZhNHDepjeSnWxtu5VE_OtHB5USgCdUj_85Ypse_iD9m8QHi9t57u3SPID_TyOOvip-HAxJEcv3NdunBibuvrH1Fpo6zRCfMMJGNRv8Jst3DtgbAsQzcgSMw3gPvifYOlgOq7EgWz6ikAPVOhLisdsJZrlvYSJliRI20KwOYKfJfuiRxPND0svHu1nG_CCpC30ezlxA9ENvQex" alt="Mark T." class="w-full h-full object-cover" />
                            </div>
                            <div>
                                <p class="font-bold text-on-surface">Mark T.</p>
                                <p class="text-sm text-on-surface-variant">Father of Leo (6)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="max-w-7xl mx-auto px-6 mb-[-60px] relative z-20">
        <div class="bg-primary-container rounded-xl p-8 md:p-16 flex flex-col md:flex-row items-center justify-between gap-12 overflow-hidden relative shadow-2xl">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/20 organic-blob -translate-y-1/2 translate-x-1/4"></div>
            <div class="relative z-10 max-w-xl">
                <h2 class="font-headline text-3xl md:text-4xl font-extrabold text-on-primary-container mb-4">Stay in the Loop</h2>
                <p class="text-on-primary-container/80 text-lg">Get play tips, event invites, and early access to summer camp registrations delivered to your inbox.</p>
            </div>
            <div class="w-full md:w-auto relative z-10">
                <form class="flex flex-col sm:flex-row gap-3" method="post">
                    <?php wp_nonce_field( 'newsletter_signup', 'newsletter_nonce' ); ?>
                    <input type="email" name="newsletter_email" class="bg-surface-container-lowest border-none rounded-full px-8 py-4 w-full sm:w-80 focus:ring-2 focus:ring-primary/20 placeholder:text-on-surface-variant" placeholder="Your email address" required />
                    <button type="submit" class="bg-primary text-white font-headline font-bold px-8 py-4 rounded-full shadow-lg hover:bg-primary-dim transition-colors">
                        Sign Me Up!
                    </button>
                </form>
                <p class="text-xs text-on-primary-container/60 mt-4 text-center sm:text-left">We promise no spam, only play!</p>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
