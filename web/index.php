<?php

$filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// turn off debug mode for live site
$app['debug'] = (gethostname() == 'web01') ? false : true;

// register twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../views',
));

$published_menu = array(
    'Home' => '/',
    //'Schedule' => '/schedule/',
    //'Speakers' => '/speakers/',
    'Venue/Hotel' => '/venue/',
    'Sponsors' => '/sponsors/',
    'What to Expect' => '/expect/',
    'Tickets' => '/tickets/',
    'Call for Papers' => 'http://cfp.madisonphpconference.com',
    'Code of Conduct' => '/conduct/',
    'Contact' => 'http://contact.madisonphpconference.com'
);

$app['nav'] = $published_menu;

$sponsors = array(
    'partner' => array(
        array(
            'name' => '',
            'href' => '',
            'img'  => '',
            'thumbnail' => '',
            'twitter' => '',
        ),
    ),
    'gold' => array(
        array(
            'name' => '',
            'href' => '',
            'img'  => '',
            'thumbnail' => '',
            'twitter' => '',
        ),
    ),
    'silver' => array(
        array(
            'name' => '',
            'href' => '',
            'img'  => '',
            'thumbnail' => '',
            'twitter' => '',
        ),
    ),
    'bronze' => array(
        array(
            'name' => 'boberdoo.com',
            'href' => 'http://boberdoo.com/jobs',
            'img'  => '/assets/images/sponsors/boberdoo.png',
            'thumbnail' => '/assets/images/sponsors/boberdoo_thumb.png',
            'twitter' => 'boberdoo',
        ),
    ),
    'scholarship' => array(
        array(
            'name' => '',
            'href' => '',
            'img'  => '',
            'thumbnail' => '',
            'twitter' => '',
        ),
    ),
    'community' => array(
        array(
            'name' => 'Columbus PHP',
            'href' => 'http://columbusphp.org',
            'img'  => '/assets/images/sponsors/columbus_php.png',
            'thumbnail' => '/assets/images/sponsors/columbus_php_thumb.png',
            'twitter' => 'columbusphp',
        ),
    ),
);

$app['sponsors'] = $sponsors;

$talks = array(
    'schedule_set' => 'No',
    'rooms_set' => 'No',
    'keynote' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'A1' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'A2' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'A3' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'A4' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'B1' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'B2' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'B3' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'B4' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'C1' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'C2' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'C3' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'C4' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'D1' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'D2' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'D3' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'D4' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'E1' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'E2' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'E3' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
    'E4' => array(
        'speaker' => array (
            array (
                'name' => '',
                'img' => '',
                'bio' => '',
                'twitter' => '',
            ),
        ),
        'title' => '',
        'tagline' => '',
        'talk_description' => '',
    ),
);

$app['talks'] = $talks;

// use layout templates
$app->before(function () use ($app) {
    $app['twig']->addGlobal('layout', null);
    $app['twig']->addGlobal('layout', $app['twig']->loadTemplate('layout.twig.html'));
});

// route for home page
$app->get('/', function() use($app) {
    return $app['twig']->render('pages/home.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Home',
    ));
});

// route for schedule
$app->get('/schedule/', function() use($app) {
    return $app['twig']->render('pages/schedule.html', array(
        'nav' => $app['nav'],
        'talks' => $app['talks'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
    ));
});

// route for speakers
$app->get('/speakers/', function() use($app) {
    return $app['twig']->render('pages/speakers.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Speakers',
    ));
});

// route for venue
$app->get('/venue/', function() use($app) {
    return $app['twig']->render('pages/venue.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Venue',
    ));
});

// route for hotel
$app->get('/hotel/', function() use($app) {
    return $app['twig']->render('pages/hotel.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Hotel',
    ));
});

// route for sponsors
$app->get('/sponsors/', function() use($app) {
    return $app['twig']->render('pages/sponsors.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Sponsors',
    ));
});

// route for expect
$app->get('/expect/', function() use($app) {
    return $app['twig']->render('pages/expect.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'What to Expect',
    ));
});

// route for organizers
$app->get('/organizers/', function() use($app) {
    return $app['twig']->render('pages/organizers.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Organizers',
    ));
});

// route for tickets
$app->get('/tickets/', function() use($app) {
    return $app['twig']->render('pages/tickets.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Tickets',
    ));
});

// route for conduct
$app->get('/conduct/', function() use($app) {
    return $app['twig']->render('pages/conduct.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Code of Conduct',
    ));
});

// route for the conference map
$app->get('/conference_map/', function() use($app) {
    return $app['twig']->render('pages/conference_map.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Conference Map',
    ));
});

// routes for schedule
$app->get('/talks/A1/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'active' => 'Schedule',
        'sponsors' => $app['sponsors'],
        'talk' => $app['talks']['A1'],

    ));
});
$app->get('/talks/A2/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['A2'],

    ));
});
$app->get('/talks/A3/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['A3'],

    ));
});
$app->get('/talks/A4/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['A4'],

    ));
});
$app->get('/talks/B1/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['B1'],

    ));
});
$app->get('/talks/B2/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['B2'],

    ));
});
$app->get('/talks/B3/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['B3'],

    ));
});
$app->get('/talks/B4/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['B4'],

    ));
});
$app->get('/talks/C1/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['C1'],

    ));
});
$app->get('/talks/C2/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['C2'],

    ));
});
$app->get('/talks/C3/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['C3'],

    ));
});
$app->get('/talks/C4/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['C4'],

    ));
});
$app->get('/talks/D1/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['D1'],

    ));
});
$app->get('/talks/D2/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['D2'],

    ));
});
$app->get('/talks/D3/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['D3'],

    ));
});
$app->get('/talks/D4/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['D4'],

    ));
});
$app->get('/talks/E1/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['E1'],

    ));
});
$app->get('/talks/E2/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['E2'],

    ));
});
$app->get('/talks/E3/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['E3'],

    ));
});
$app->get('/talks/E4/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['E4'],

    ));
});
$app->get('/talks/keynote/', function() use($app) {
    return $app['twig']->render('pages/talks.html', array(
        'nav' => $app['nav'],
        'sponsors' => $app['sponsors'],
        'active' => 'Schedule',
        'talk' => $app['talks']['keynote'],

    ));
});



$app->run();
