<?php
// Routes

// Homepage
$app->get('/', 'PHPWarks\Welcome\HomeAction:dispatch')
    ->setName('homepage');

// Events:
$app->get('/events', 'PHPWarks\Event\HomeAction:dispatch')
    ->setName('event_home');
$app->get('/events/upcoming', 'PHPWarks\Event\UpcomingAction:dispatch')
    ->setName('event_upcoming');
$app->get('/events/request-a-talk', 'PHPWarks\Event\RequestAction:dispatch')
    ->setName('event_request');
$app->get('/events/propose-a-talk', 'PHPWarks\Event\ProposeAction:dispatch')
    ->setName('event_propose');
$app->get('/events/past', 'PHPWarks\Event\PastAction:dispatch')
    ->setName('event_past');
$app->get('/events/past/{year}', 'PHPWarks\Event\PastByYearAction:dispatch')
    ->setName('event_past_by_year');
$app->get('/events/past/{year}/{month}', 'PHPWarks\Event\PastByYearAndMonthAction:dispatch')
    ->setName('event_past_by_year_and_month');

// Contact:
$app->map(['GET', 'POST'], '/contact', 'PHPWarks\Contact\ContactAction:dispatch')
    ->setName('contact_us');

// Sponsors
$app->get('/our-sponsors', 'PHPWarks\Sponsors\OurSponsorsAction:dispatch')
    ->setName('our_sponsors');

// Communities:
$app->get('/communities/surrounding', 'PHPWarks\Communities\OtherAction:dispatch')
    ->setName('other_communities');
$app->get('/communities/get-involved', 'PHPWarks\Communities\GetInvolvedAction:dispatch')
    ->setName('get_involved');
