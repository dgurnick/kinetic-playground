<?php
/**
 * Kinetic Playground — languages.php
 * Slovenian (sl) is the site default. English (en) is selected via the /en/ URL prefix.
 */

/**
 * Returns the current active language: 'sl' (default) or 'en'.
 * Detects from the request path: /en or /en/* = English, everything else = Slovenian.
 */
function kp_get_lang() {
    static $lang = null;
    if ( $lang !== null ) return $lang;
    $path = isset( $_SERVER['REQUEST_URI'] )
        ? (string) parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH )
        : '/';
    $lang = ( $path === '/en' || strncmp( $path, '/en/', 4 ) === 0 ) ? 'en' : 'sl';
    return $lang;
}

/**
 * Returns a translated string by key. Falls back to English if key is missing in Slovenian.
 */
function kp_t( $key ) {
    static $cache = null;
    if ( $cache === null ) {
        $cache = kp_translations();
    }
    $lang = kp_get_lang();
    return $cache[ $lang ][ $key ] ?? $cache['en'][ $key ] ?? $key;
}

/**
 * Returns a home_url() path with the /en/ prefix when the active language is English.
 */
function kp_url( $path = '/' ) {
    $path = '/' . ltrim( $path, '/' );
    if ( kp_get_lang() === 'en' ) {
        return home_url( '/en' . ( $path === '/' ? '' : $path ) );
    }
    return home_url( $path );
}

/**
 * Returns a URL that switches to the given target language while keeping the current page.
 */
function kp_lang_switch_url( $target_lang ) {
    $path = isset( $_SERVER['REQUEST_URI'] )
        ? (string) parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH )
        : '/';
    // Strip any existing /en prefix to get the language-neutral relative path.
    if ( preg_match( '#^/en(/.*)?$#', $path, $m ) ) {
        $relative = ( isset( $m[1] ) && $m[1] !== '' && $m[1] !== '/' ) ? $m[1] : '/';
    } else {
        $relative = $path ?: '/';
    }
    if ( $target_lang === 'en' ) {
        return home_url( '/en' . ( $relative === '/' ? '' : $relative ) );
    }
    return home_url( $relative );
}

/**
 * All site translations.
 */
function kp_translations() {
    return [

        // ── English ──────────────────────────────────────────────────────────────
        'en' => [

            // Navigation
            'nav_programs'  => 'Programs',
            'nav_play_hub'  => 'Play-Hub',
            'nav_parents'   => 'Parents',
            'nav_about'     => 'About Us',
            'nav_join'      => 'Join Now',

            // Footer
            'footer_tagline'  => 'Creating vibrant spaces where children learn through movement and creativity. Join our community of little explorers.',
            'footer_rights'   => 'All rights reserved.',
            'footer_links'    => 'Quick Links',
            'footer_connect'  => 'Connect',
            'footer_privacy'  => 'Privacy Policy',
            'footer_terms'    => 'Terms of Play',
            'footer_contact'  => 'Contact Us',

            // ── Home page ────────────────────────────────────────────────────────
            'home_badge'      => 'WHERE ENERGY MEETS IMAGINATION',
            'home_h1_1'       => 'The World is Your',
            'home_h1_2'       => 'Kinetic Playground',
            'home_subtitle'   => 'Nurturing curiosity through active play, messy art, and joyful noise. Discover a sanctuary designed for every child\'s unique spark.',
            'home_cta1'       => 'Start Exploring',
            'home_cta2'       => 'View Schedule',
            'home_stat_count' => '500+',
            'home_stat_text'  => 'Happy little explorers joined this month!',

            'home_activities_title' => 'Choose Your Adventure',
            'home_activities_sub'   => 'From messy fingers to high-octane sprints, we have a specialised zone for every kind of play.',
            'home_art_title'        => 'Messy Art Studio',
            'home_art_desc'         => 'Unleash inner Picassos with finger painting, clay sculpting, and giant murals.',
            'home_music_title'      => 'Music &amp; Beats',
            'home_music_desc'       => 'Feel the rhythm with drums, bells, and dance-alongs.',
            'home_sports_title'     => 'Kinetic Sports',
            'home_sports_desc'      => 'Obstacle courses, mini-soccer, and active games.',
            'home_more_title'       => 'Want more variety?',
            'home_more_desc'        => 'We offer over 15 different program tracks for various age groups.',
            'home_browse'           => 'Browse All Programs',

            'home_testimonials_title' => 'What Our Tribe Says',
            'home_testimonial1'       => '&#8220;My daughter used to be so shy. Since starting the Music &amp; Beats class, she&#8217;s come home singing and dancing. Kinetic Playground isn&#8217;t just a gym; it&#8217;s a confidence builder.&#8221;',
            'home_testimonial1_name'  => 'Sarah J.',
            'home_testimonial1_role'  => 'Mother of Lily (4)',
            'home_testimonial2'       => '&#8220;Finally, a place where &#8216;messy&#8217; is encouraged! The staff is incredible and the environment is so safe. My son asks to come here every single morning.&#8221;',
            'home_testimonial2_name'  => 'Mark T.',
            'home_testimonial2_role'  => 'Father of Leo (6)',

            'home_newsletter_title'       => 'Stay in the Loop',
            'home_newsletter_desc'        => 'Get play tips, event invites, and early access to summer camp registrations delivered to your inbox.',
            'home_newsletter_placeholder' => 'Your email address',
            'home_newsletter_btn'         => 'Sign Me Up!',
            'home_newsletter_note'        => 'We promise no spam, only play!',

            // ── About page ──────────────────────────────────────────────────────
            'about_badge'           => 'BEHIND THE MAGIC',
            'about_h1_1'            => 'Where Play Meets',
            'about_h1_2'            => 'Pure Possibility',
            'about_subtitle'        => 'We\'re not just building a playground; we\'re architecting a future where every child moves with confidence, curiosity, and joy.',
            'about_story_title'     => 'Our Story: Born in Motion',
            'about_story_p1'        => 'Kinetic Playground started with a simple observation: children\'s natural instinct to move was being boxed into rigid, static learning environments. We wanted to break those boxes open.',
            'about_story_p2'        => 'Founded by a team of pediatric movement specialists and experience designers, we created a sanctuary where kinetic energy is the primary currency of learning. We believe that when a body is in motion, the mind follows in spectacular directions.',
            'about_story_stat'      => 'Trusted by 5,000+ active families',
            'about_philosophy_title'=> 'Our Philosophy',
            'about_philosophy_sub'  => 'The core values that keep us moving forward.',
            'about_p1_title'        => 'Movement as Literacy',
            'about_p1_desc'         => 'We teach children to read their own bodies. Every jump, roll, and reach is a syllable in the language of physical confidence.',
            'about_p2_title'        => 'Radical Safety',
            'about_p2_desc'         => 'Soft surfaces, rigorous oversight, and an environment engineered for risk-taking without the bruises.',
            'about_p3_title'        => 'Zero-Boredom Policy',
            'about_p3_desc'         => 'If it\'s not fun, it\'s not Kinetic. We pivot and adapt our programming to the energy in the room.',
            'about_p4_title'        => 'Continuous Discovery',
            'about_p4_desc'         => 'We update our playground modules every month. New challenges, new textures, and new ways to play mean the adventure never ends.',
            'about_team_title'      => 'Meet the Play-Makers',
            'about_team_sub'        => 'The experts, dreamers, and big kids who run the show.',
            'about_team1_name'      => 'Dr. Sarah Chen',
            'about_team1_role'      => 'Founder &amp; Lead Scientist',
            'about_team2_name'      => 'Coach Mike Rossi',
            'about_team2_role'      => 'Head of Play Design',
            'about_team3_name'      => 'Aisha Ibrahim',
            'about_team3_role'      => 'Experience Architect',
            'about_team4_name'      => 'Leo Martinez',
            'about_team4_role'      => 'Safety Specialist',
            'about_cta_title'       => 'Ready to join the movement?',
            'about_cta_desc'        => 'Visit our hub and see the playground in action. Your first session is always on us.',
            'about_cta1'            => 'Book a Free Tour',
            'about_cta2'            => 'Contact Us',

            // ── Activities page ─────────────────────────────────────────────────
            'activities_h1_1'           => 'Adventure',
            'activities_h1_2'           => 'Starts Here',
            'activities_subtitle'       => 'Unlock your child\'s potential through our curated blend of physical play, scientific inquiry, and creative expression.',
            'activities_filter_all'     => 'All Ages',
            'activities_filter_tots'    => 'Tiny Tots (2-4)',
            'activities_filter_expl'    => 'Little Explorers (5-7)',
            'activities_filter_aces'    => 'Junior Aces (8-12)',
            'activities_search'         => 'Search programs...',
            'activities_learn_more'     => 'Learn More',
            'act_arts_title'            => 'Creative Arts',
            'act_arts_age'              => 'Ages 4-10',
            'act_arts_desc'             => 'Ignite imagination through multi-sensory painting, clay molding, and digital storytelling workshops.',
            'act_science_title'         => 'Little Scientists',
            'act_science_age'           => 'Ages 6-12',
            'act_science_desc'          => 'Hands-on experiments where bubbles, magnets, and simple machines bring the laws of physics to life.',
            'act_athletes_title'        => 'Junior Athletes',
            'act_athletes_age'          => 'Ages 5-9',
            'act_athletes_desc'         => 'Dynamic obstacle courses and team games designed to build coordination, speed, and great sportsmanship.',
            'act_rhythm_title'          => 'Rhythm &amp; Movement',
            'act_rhythm_age'            => 'Ages 2-5',
            'act_rhythm_desc'           => 'A joyful introduction to dance and music focusing on self-expression and basic motor skills development.',
            'act_nature_title'          => 'Nature Rangers',
            'act_nature_age'            => 'Ages 7-12',
            'act_nature_desc'           => 'Outdoor exploration identifying local flora, building bug hotels, and learning environmental stewardship.',
            'act_tech_title'            => 'Tech Tinkerers',
            'act_tech_age'              => 'Ages 9-12',
            'act_tech_desc'             => 'Introduction to basic robotics and visual coding where kids build and program their own moving machines.',
            'summer_title'              => 'Can\'t decide on just one?<br/>Try our Summer Pass!',
            'summer_desc'               => 'Get unlimited access to all weekly workshops and weekend special events for the entire summer season.',
            'summer_cta'                => 'Grab Your Pass',
            'summer_pass_label'         => 'Ultimate Pass',
            'summer_pass_valid'         => 'VALID JUN - AUG',
            'summer_pass_price'         => '$299',
            'summer_pass_period'        => '/season',

            // ── Programs page ───────────────────────────────────────────────────
            'programs_badge'            => 'STRUCTURED LEARNING THROUGH PLAY',
            'programs_h1_1'             => 'Programs Built for',
            'programs_h1_2'             => 'Every Child',
            'programs_subtitle'         => 'From weekly drop-in sessions to full-season tracks, we have a program that fits your child\'s age, energy level, and schedule.',
            'programs_tracks_title'     => 'Seasonal Program Tracks',
            'prog_track1_name'          => 'Tiny Tots',
            'prog_track1_age'           => 'Ages 2–4',
            'prog_track1_desc'          => 'Gentle, sensory-rich sessions designed for toddlers exploring movement, sound, and texture for the very first time.',
            'prog_track1_feat1'         => '45-minute weekly classes',
            'prog_track1_feat2'         => 'Parent &amp; child together',
            'prog_track1_feat3'         => 'Max 8 children per class',
            'prog_track1_price'         => '$89',
            'prog_track1_period'        => '/month',
            'prog_track2_name'          => 'Little Explorers',
            'prog_track2_age'           => 'Ages 5–8',
            'prog_track2_popular'       => 'Most Popular',
            'prog_track2_desc'          => 'A high-energy mix of movement games, creative arts, and team challenges. The full Kinetic experience.',
            'prog_track2_feat1'         => '60-minute weekly classes',
            'prog_track2_feat2'         => 'Drop-off sessions',
            'prog_track2_feat3'         => 'Max 12 children per class',
            'prog_track2_price'         => '$119',
            'prog_track2_period'        => '/month',
            'prog_track3_name'          => 'Junior Aces',
            'prog_track3_age'           => 'Ages 9–12',
            'prog_track3_desc'          => 'Advanced programming mixing sport performance, science projects, and leadership challenges for older kids.',
            'prog_track3_feat1'         => '90-minute weekly classes',
            'prog_track3_feat2'         => 'Project-based curriculum',
            'prog_track3_feat3'         => 'End-of-season showcase',
            'prog_track3_price'         => '$149',
            'prog_track3_period'        => '/month',
            'programs_schedule_title'   => 'Weekly Schedule',
            'programs_schedule_desc'    => 'Classes run throughout the week so you can find a time that works for your family.',
            'programs_trial_title'      => 'Not sure where to start?',
            'programs_trial_desc'       => 'Book a free trial class and let your child try any session at no charge.',
            'programs_trial_btn'        => 'Book a Free Trial',
            'programs_enroll_title'     => 'Ready to enrol?',
            'programs_enroll_desc'      => 'Spots fill up fast each season. Secure your child\'s place in the program that\'s right for them.',
            'programs_enroll_btn'       => 'Enrol Now',
            'programs_browse_btn'       => 'Browse Activities',
            'day_monday'                => 'Monday',
            'day_tuesday'               => 'Tuesday',
            'day_wednesday'             => 'Wednesday',
            'day_thursday'              => 'Thursday',
            'day_friday'                => 'Friday',
            'day_saturday'              => 'Saturday',
            'prog_open_play'            => 'All Ages Open Play',

            // ── Parents page ─────────────────────────────────────────────────────
            'parents_badge'             => 'FOR THE GROWN-UPS',
            'parents_h1_1'              => 'Everything You Need to',
            'parents_h1_2'              => 'Know',
            'parents_subtitle'          => 'We know you have questions. Here\'s everything parents want to know before their child\'s first day — and after.',
            'parents_safety_title'      => 'Safety First, Always',
            'parents_safety_desc'       => 'All surfaces are soft and impact-rated. Staff are certified in first aid and child CPR. We maintain a strict 1:6 staff-to-child ratio at all times.',
            'parents_dropoff_title'     => 'Easy Drop-Off',
            'parents_dropoff_desc'      => 'Dedicated drop-off and pick-up zone with covered parking. Staff greet children at the car door. No long walks with little ones in the rain.',
            'parents_lounge_title'      => 'Parent Lounge',
            'parents_lounge_desc'       => 'Stay and unwind in our comfortable lounge with complimentary coffee, fast WiFi, and a viewing window so you can watch without distracting your little one.',
            'parents_loop_title'        => 'Always in the Loop',
            'parents_loop_desc'         => 'Weekly recap emails, progress photos after every class, and a parent app to track attendance, upcoming events, and session notes.',
            'parents_allergy_title'     => 'Allergy &amp; Health Aware',
            'parents_allergy_desc'      => 'Nut-free facility. All health notes and allergy profiles are reviewed by staff before your child\'s first session. We take special needs seriously.',
            'parents_flex_title'        => 'Flexible Plans',
            'parents_flex_desc'         => 'Pause or change programs at the end of any month — no penalty. Life with kids is unpredictable; your membership shouldn\'t make it harder.',
            'parents_bring_title'       => 'What to Bring',
            'parents_bring_intro'       => 'Keep it simple. Here\'s our recommended checklist for every visit:',
            'parents_bring1'            => 'Comfortable, stretchy clothing — kids move a lot!',
            'parents_bring2'            => 'Closed-toe sneakers (no sandals or Crocs on the floor)',
            'parents_bring3'            => 'A labelled water bottle',
            'parents_bring4'            => 'A nut-free snack for longer sessions',
            'parents_bring5'            => 'Any prescribed medication with written instructions',
            'parents_bring6'            => 'A big smile — everything else we take care of',
            'parents_hours_title'       => 'Hours &amp; Location',
            'parents_hours_label'       => 'Opening Hours',
            'parents_address_label'     => 'Address',
            'parents_address'           => '123 Energy Lane<br/>Brighton Heights, BH 90210',
            'parents_address_note'      => 'Ample free parking on-site. Bus routes 14 and 22 stop directly outside.',
            'parents_mon_fri'           => 'Monday – Friday',
            'parents_saturday'          => 'Saturday',
            'parents_sunday'            => 'Sunday',
            'parents_cta_title'         => 'Still have questions?',
            'parents_cta_desc'          => 'Our team is always happy to chat — by phone, email, or in person. Come by for a free tour anytime.',
            'parents_cta1'              => 'Get in Touch',
            'parents_cta2'              => 'View Programs',

            // ── Join page ────────────────────────────────────────────────────────
            'join_h1_1'                 => 'Let\'s',
            'join_h1_2'                 => 'Play Together',
            'join_subtitle'             => 'Ready to jump into the fun? Whether you\'re signing up for a season of play or just have a quick question, we\'re all ears!',
            'join_label_parent'         => 'Parent\'s Name',
            'join_label_child'          => 'Kiddo\'s Name',
            'join_label_email'          => 'Email Address',
            'join_label_inquiry'        => 'How can we help?',
            'join_label_message'        => 'Your Message',
            'join_placeholder_parent'   => 'Sarah Jenkins',
            'join_placeholder_child'    => 'Little Explorer',
            'join_placeholder_email'    => 'hello@playhouse.com',
            'join_placeholder_message'  => 'Tell us what\'s on your mind...',
            'join_option1'              => 'Signing up for a program',
            'join_option2'              => 'Asking a question',
            'join_option3'              => 'Scheduling a tour',
            'join_option4'              => 'Just saying hi!',
            'join_submit'               => 'Send to the Play-Hub',
            'join_visit_title'          => 'Visit the Playground',
            'join_visit_address'        => '123 Energy Lane,<br/>Brighton Heights, BH 90210',
            'join_follow'               => 'Follow the Fun',
            'join_open_today'           => 'Open Today: 8am - 6pm',
            'join_faq_title'            => 'Common Questions',
            'join_faq1'                 => 'What age groups do you cater to?',
            'join_faq2'                 => 'Can we book a birthday party here?',
            'join_faq3'                 => 'Is there an area for parents to work?',
            'join_faq4'                 => 'What safety measures are in place?',
        ],

        // ── Slovenian (default) ──────────────────────────────────────────────────
        'sl' => [

            // Navigation
            'nav_programs'  => 'Programi',
            'nav_play_hub'  => 'Igralni center',
            'nav_parents'   => 'Za starše',
            'nav_about'     => 'O nas',
            'nav_join'      => 'Pridruži se',

            // Footer
            'footer_tagline'  => 'Ustvarjamo živahne prostore, kjer se otroci učijo skozi gibanje in ustvarjalnost. Pridruži se naši skupnosti malih raziskovalcev.',
            'footer_rights'   => 'Vse pravice pridržane.',
            'footer_links'    => 'Hitre povezave',
            'footer_connect'  => 'Poveži se',
            'footer_privacy'  => 'Politika zasebnosti',
            'footer_terms'    => 'Pogoji igre',
            'footer_contact'  => 'Kontakt',

            // ── Home page ────────────────────────────────────────────────────────
            'home_badge'      => 'KJER SE ENERGIJA SREČA Z DOMIŠLJIJO',
            'home_h1_1'       => 'Svet je tvoje',
            'home_h1_2'       => 'Kinetično igrišče',
            'home_subtitle'   => 'Spodbujamo radovednost skozi aktivno igro, ustvarjalne delavnice in veselje do gibanja. Odkrij zavetišče, ki je oblikovano za enkratno iskrico vsakega otroka.',
            'home_cta1'       => 'Začni raziskovati',
            'home_cta2'       => 'Ogled urnika',
            'home_stat_count' => '500+',
            'home_stat_text'  => 'Srečnih malih raziskovalcev se je pridružilo ta mesec!',

            'home_activities_title' => 'Izberi svojo pustolovščino',
            'home_activities_sub'   => 'Od umazanih prstov do hitrih tekov – imamo specializirano cono za vsako vrsto igre.',
            'home_art_title'        => 'Umazana likovnica',
            'home_art_desc'         => 'Sprostite notranjega Picassa s prstnimi barvami, modeliranjem gline in velikanskimi poslikavami.',
            'home_music_title'      => 'Glasba in ritem',
            'home_music_desc'       => 'Začutite ritem z bobni, zvonci in plesom.',
            'home_sports_title'     => 'Kinetični šport',
            'home_sports_desc'      => 'Oviraški teki, mini-nogomet in aktivne igre.',
            'home_more_title'       => 'Želiš več izbire?',
            'home_more_desc'        => 'Ponujamo več kot 15 različnih programov za različne starostne skupine.',
            'home_browse'           => 'Prebrskaj vse programe',

            'home_testimonials_title' => 'Kaj pravijo naši',
            'home_testimonial1'       => '&#8222;Moja hčerka je bila prej tako sramežljiva. Odkar obiskuje skupino Glasba in ritem, se vsak dan vrne domov s petjem in plesom. Kinetično igrišče ni samo telovadnica &#8211; je gradilnica samozavesti.&#8220;',
            'home_testimonial1_name'  => 'Sara J.',
            'home_testimonial1_role'  => 'Mama Lile (4)',
            'home_testimonial2'       => '&#8222;Končno kraj, kjer je &#8218;umazano&#8216; dobrodošlo! Osebje je neverjetno, okolje pa je tako varno. Moj sin prosi, da pridemo sem vsako jutro.&#8220;',
            'home_testimonial2_name'  => 'Marko T.',
            'home_testimonial2_role'  => 'Oče Leota (6)',

            'home_newsletter_title'       => 'Ostani v stiku',
            'home_newsletter_desc'        => 'Prejmi nasvete za igro, vabila na dogodke in zgodnji dostop do prijave na poletni tabor v nabiralnik.',
            'home_newsletter_placeholder' => 'Tvoj e-poštni naslov',
            'home_newsletter_btn'         => 'Prijavi me!',
            'home_newsletter_note'        => 'Obljubimo – brez nezaželene pošte, samo igra!',

            // ── About page ──────────────────────────────────────────────────────
            'about_badge'           => 'ZA KULISAMI ČAROVNIJE',
            'about_h1_1'            => 'Kjer se igra sreča z',
            'about_h1_2'            => 'neskončnimi možnostmi',
            'about_subtitle'        => 'Ne gradimo le igrišča &#8211; arhitekturiramo prihodnost, kjer vsak otrok giblje s samozavestjo, radovednostjo in veseljem.',
            'about_story_title'     => 'Naša zgodba: rojeni v gibanju',
            'about_story_p1'        => 'Kinetično igrišče se je rodilo iz preproste ugotovitve: naravni instinkt otrok do gibanja je bil stisnjen v toga, statična učna okolja. Hoteli smo razbiti te okvirje.',
            'about_story_p2'        => 'Ekipa strokovnjakov za pediatrično gibanje in oblikovalcev izkušenj je ustvarila zavetišče, kjer je kinetična energija primarno sredstvo učenja. Verjamemo, da kjer se telo giblje, tja z veseljem sledi tudi um.',
            'about_story_stat'      => 'Zaupalo nam je 5.000+ aktivnih družin',
            'about_philosophy_title'=> 'Naša filozofija',
            'about_philosophy_sub'  => 'Temeljne vrednote, ki nas ženejo naprej.',
            'about_p1_title'        => 'Gibanje kot pismenost',
            'about_p1_desc'         => 'Otroke učimo brati lastna telesa. Vsak skok, prevrat in doseg je zlog v jeziku telesne samozavesti.',
            'about_p2_title'        => 'Radikalna varnost',
            'about_p2_desc'         => 'Mehke površine, strog nadzor in okolje, zasnovano za prevzemanje tveganj brez modric.',
            'about_p3_title'        => 'Politika brez dolgočasja',
            'about_p3_desc'         => 'Če ni zabavno, ni Kinetično. Prilagajamo programe energiji v prostoru.',
            'about_p4_title'        => 'Nenehno odkrivanje',
            'about_p4_desc'         => 'Vsak mesec posodabljamo module igrišča. Novi izzivi, nove teksture in novi načini igre pomenijo, da pustolovščina nikoli ne konča.',
            'about_team_title'      => 'Spoznaj ustvarjalce igre',
            'about_team_sub'        => 'Strokovnjaki, sanjači in veliki otroci, ki vodijo show.',
            'about_team1_name'      => 'Dr. Sara Kos',
            'about_team1_role'      => 'Ustanoviteljica in vodja znanosti',
            'about_team2_name'      => 'Trener Miha Rosi',
            'about_team2_role'      => 'Vodja oblikovanja igre',
            'about_team3_name'      => 'Aiša Ibrahim',
            'about_team3_role'      => 'Arhitektka izkušenj',
            'about_team4_name'      => 'Leo Martinez',
            'about_team4_role'      => 'Specialist za varnost',
            'about_cta_title'       => 'Pripravljeni na pridružitev gibanju?',
            'about_cta_desc'        => 'Obiščite naš center in si oglejte igrišče v akciji. Prva seja je vedno brezplačna.',
            'about_cta1'            => 'Rezerviraj brezplačen ogled',
            'about_cta2'            => 'Kontaktiraj nas',

            // ── Activities page ─────────────────────────────────────────────────
            'activities_h1_1'           => 'Pustolovščina',
            'activities_h1_2'           => 'se začne tukaj',
            'activities_subtitle'       => 'Odkrij otrokov potencial skozi skrbno izbrano mešanico telesne igre, znanstvenega odkrivanja in kreativnega izražanja.',
            'activities_filter_all'     => 'Vse starosti',
            'activities_filter_tots'    => 'Malčki (2-4)',
            'activities_filter_expl'    => 'Mali raziskovalci (5-7)',
            'activities_filter_aces'    => 'Mladinski usi (8-12)',
            'activities_search'         => 'Iskanje programov...',
            'activities_learn_more'     => 'Več info',
            'act_arts_title'            => 'Ustvarjalne umetnosti',
            'act_arts_age'              => 'Starost 4-10',
            'act_arts_desc'             => 'Razpihnite domišljijo z veččutnim slikanjem, modeliranjem gline in digitalnimi pripovedniškimi delavnicami.',
            'act_science_title'         => 'Mali znanstveniki',
            'act_science_age'           => 'Starost 6-12',
            'act_science_desc'          => 'Praktični poskusi, kjer mehurčki, magneti in preprosti stroji oživijo zakone fizike.',
            'act_athletes_title'        => 'Mladi športniki',
            'act_athletes_age'          => 'Starost 5-9',
            'act_athletes_desc'         => 'Dinamični oviraški teki in skupinske igre, namenjene razvoju koordinacije, hitrosti in športnega duha.',
            'act_rhythm_title'          => 'Ritem &amp; Gibanje',
            'act_rhythm_age'            => 'Starost 2-5',
            'act_rhythm_desc'           => 'Vesel uvod v ples in glasbo, osredotočen na samoizražanje in razvoj osnovnih motoričnih spretnosti.',
            'act_nature_title'          => 'Narodni Rangers',
            'act_nature_age'            => 'Starost 7-12',
            'act_nature_desc'           => 'Odkrivanje narave, prepoznavanje rastlin, gradnja hišic za žuželke in učenje o varstvu okolja.',
            'act_tech_title'            => 'Tehniški Tinkerji',
            'act_tech_age'              => 'Starost 9-12',
            'act_tech_desc'             => 'Uvod v osnovno robotiko in vizualno kodiranje, kjer otroci gradijo in programirajo lastne premikajoče stroje.',
            'summer_title'              => 'Ne moreš se odločiti?<br/>Priskrbi si poletno karto!',
            'summer_desc'               => 'Pridobi neomejen dostop do vseh tedenskih delavnic in vikend posebnih dogodkov za celotno poletno sezono.',
            'summer_cta'                => 'Pridobi svojo karto',
            'summer_pass_label'         => 'Ultimativna karta',
            'summer_pass_valid'         => 'VELJAVNO JUN - AVG',
            'summer_pass_price'         => '299 €',
            'summer_pass_period'        => '/sezona',

            // ── Programs page ───────────────────────────────────────────────────
            'programs_badge'            => 'STRUKTURIRANO UČENJE SKOZI IGRO',
            'programs_h1_1'             => 'Programi za',
            'programs_h1_2'             => 'vsakega otroka',
            'programs_subtitle'         => 'Od tedenskih ur do celosezonsnih programov &#8211; imamo program, ki ustreza starosti, energiji in urniku vašega otroka.',
            'programs_tracks_title'     => 'Sezonski programi',
            'prog_track1_name'          => 'Malčki',
            'prog_track1_age'           => 'Starost 2–4',
            'prog_track1_desc'          => 'Nežne, čutno bogate ure za malčke, ki prvič odkrivajo gibanje, zvoke in teksture.',
            'prog_track1_feat1'         => '45-minutni tedenski tečaji',
            'prog_track1_feat2'         => 'Starš in otrok skupaj',
            'prog_track1_feat3'         => 'Max 8 otrok na tečaj',
            'prog_track1_price'         => '89 €',
            'prog_track1_period'        => '/mesec',
            'prog_track2_name'          => 'Mali raziskovalci',
            'prog_track2_age'           => 'Starost 5–8',
            'prog_track2_popular'       => 'Najbolj priljubljen',
            'prog_track2_desc'          => 'Visokoenergijska mešanica gibalnih iger, kreativnih umetnosti in skupinskih izzivov. Polna Kinetična izkušnja.',
            'prog_track2_feat1'         => '60-minutni tedenski tečaji',
            'prog_track2_feat2'         => 'Ure brez staršev',
            'prog_track2_feat3'         => 'Max 12 otrok na tečaj',
            'prog_track2_price'         => '119 €',
            'prog_track2_period'        => '/mesec',
            'prog_track3_name'          => 'Mladinski usi',
            'prog_track3_age'           => 'Starost 9–12',
            'prog_track3_desc'          => 'Napredni program z mešanico športnih dosežkov, znanstvenih projektov in vodstvenih izzivov za starejše otroke.',
            'prog_track3_feat1'         => '90-minutni tedenski tečaji',
            'prog_track3_feat2'         => 'Projektni kurikulum',
            'prog_track3_feat3'         => 'Sezonska razstava',
            'prog_track3_price'         => '149 €',
            'prog_track3_period'        => '/mesec',
            'programs_schedule_title'   => 'Tedenski urnik',
            'programs_schedule_desc'    => 'Tečaji potekajo skozi teden, tako da najdete čas, ki ustreza vaši družini.',
            'programs_trial_title'      => 'Niste prepričani, kje začeti?',
            'programs_trial_desc'       => 'Rezervirajte brezplačni preizkusni tečaj in pustite otroku, da preizkusi katero koli uro brezplačno.',
            'programs_trial_btn'        => 'Rezerviraj brezplačen preizkus',
            'programs_enroll_title'     => 'Pripravljeni za vpis?',
            'programs_enroll_desc'      => 'Mesta se hitro zapolnijo vsako sezono. Zavarujte otrokovo mesto v programu, ki mu ustreza.',
            'programs_enroll_btn'       => 'Vpiši se zdaj',
            'programs_browse_btn'       => 'Prebrskaj aktivnosti',
            'day_monday'                => 'Ponedeljek',
            'day_tuesday'               => 'Torek',
            'day_wednesday'             => 'Sreda',
            'day_thursday'              => 'Četrtek',
            'day_friday'                => 'Petek',
            'day_saturday'              => 'Sobota',
            'prog_open_play'            => 'Prosta igra za vse',

            // ── Parents page ─────────────────────────────────────────────────────
            'parents_badge'             => 'ZA ODRASLE',
            'parents_h1_1'              => 'Vse, kar',
            'parents_h1_2'              => 'morate vedeti',
            'parents_subtitle'          => 'Vemo, da imate vprašanja. Tukaj je vse, kar starši želijo vedeti pred prvim dnem svojega otroka &#8211; in po njem.',
            'parents_safety_title'      => 'Varnost je na prvem mestu',
            'parents_safety_desc'       => 'Vse površine so mehke in protiudarno ocenjene. Osebje ima certifikate iz prve pomoči in otroškega CPR. Razmerje osebje-otrok je vedno 1:6.',
            'parents_dropoff_title'     => 'Enostavno sprejemanje',
            'parents_dropoff_desc'      => 'Namenjena cona za prihod in odhod s pokritim parkiranjem. Osebje pozdravi otroke pri avtomobilu. Brez dolgih sprehodov z malčki v dežju.',
            'parents_lounge_title'      => 'Čakalnica za starše',
            'parents_lounge_desc'       => 'Ostanite in sprostite se v naši udobni čakalnici z brezplačno kavo, hitrim WiFi-jem in steklenim oknom za opazovanje.',
            'parents_loop_title'        => 'Vedno obveščeni',
            'parents_loop_desc'         => 'Tedenski povzetki po e-pošti, fotografije po vsaki uri in starševska aplikacija za sledenje prisotnosti, prihajajočih dogodkov in zapiskov.',
            'parents_allergy_title'     => 'Upoštevamo alergije in zdravje',
            'parents_allergy_desc'      => 'Prostor brez oreščkov. Vse zdravstvene opombe in alergijski profili so pregledani pred prvim obiskom vašega otroka.',
            'parents_flex_title'        => 'Fleksibilni plani',
            'parents_flex_desc'         => 'Prekinite ali zamenjajte programe ob koncu katerega koli meseca &#8211; brez kazni. Življenje z otroki je nepredvidljivo; vaše članstvo tega ne bi smelo otežiti.',
            'parents_bring_title'       => 'Kaj prinesti',
            'parents_bring_intro'       => 'Preprosto. Tukaj je naš priporočeni seznam za vsak obisk:',
            'parents_bring1'            => 'Udobna, raztegljiva oblačila &#8211; otroci se veliko gibljejo!',
            'parents_bring2'            => 'Zaprti čevlji (brez sandal ali cokel na tleh)',
            'parents_bring3'            => 'Označena steklenica za vodo',
            'parents_bring4'            => 'Prigrizek brez oreščkov za daljše ure',
            'parents_bring5'            => 'Kakršno koli predpisano zdravilo s pisnimi navodili',
            'parents_bring6'            => 'Velik nasmeh &#8211; za vse ostalo poskrbimo mi',
            'parents_hours_title'       => 'Delovni čas in lokacija',
            'parents_hours_label'       => 'Delovni čas',
            'parents_address_label'     => 'Naslov',
            'parents_address'           => '123 Energy Lane<br/>Brighton Heights, BH 90210',
            'parents_address_note'      => 'Brezplačno parkiranje na mestu. Avtobusni liniji 14 in 22 se ustavita neposredno pred vhodom.',
            'parents_mon_fri'           => 'Ponedeljek – petek',
            'parents_saturday'          => 'Sobota',
            'parents_sunday'            => 'Nedelja',
            'parents_cta_title'         => 'Imate še vprašanja?',
            'parents_cta_desc'          => 'Naša ekipa je vedno rada na voljo &#8211; po telefonu, e-pošti ali osebno. Pridite na brezplačen ogled kadarkoli.',
            'parents_cta1'              => 'Stopite v stik',
            'parents_cta2'              => 'Ogled programov',

            // ── Join page ────────────────────────────────────────────────────────
            'join_h1_1'                 => 'Skupaj se',
            'join_h1_2'                 => 'igrajmo',
            'join_subtitle'             => 'Pripravljeni skočiti v zabavo? Naj gre za vpis v program ali le za hitro vprašanje &#8211; z veseljem prisluhnemo!',
            'join_label_parent'         => 'Ime starša',
            'join_label_child'          => 'Ime otroka',
            'join_label_email'          => 'E-poštni naslov',
            'join_label_inquiry'        => 'Kako vam lahko pomagamo?',
            'join_label_message'        => 'Vaše sporočilo',
            'join_placeholder_parent'   => 'Sara Jenkins',
            'join_placeholder_child'    => 'Mali Raziskovalec',
            'join_placeholder_email'    => 'pozdravljeni@igrisce.si',
            'join_placeholder_message'  => 'Povejte nam, kaj vas zanima...',
            'join_option1'              => 'Vpis v program',
            'join_option2'              => 'Vprašanje',
            'join_option3'              => 'Rezervacija ogleda',
            'join_option4'              => 'Samo pozdravljam!',
            'join_submit'               => 'Pošlji na igrišče',
            'join_visit_title'          => 'Obiščite igrišče',
            'join_visit_address'        => '123 Energy Lane,<br/>Brighton Heights, BH 90210',
            'join_follow'               => 'Sledite zabavi',
            'join_open_today'           => 'Odprto danes: 8:00 - 18:00',
            'join_faq_title'            => 'Pogosta vprašanja',
            'join_faq1'                 => 'Katerim starostnim skupinam ste namenjeni?',
            'join_faq2'                 => 'Ali lahko rezerviramo rojstnodnevno zabavo?',
            'join_faq3'                 => 'Ali obstaja prostor za starše za delo?',
            'join_faq4'                 => 'Kakšni varnostni ukrepi so vzpostavljeni?',
        ],
    ];
}
