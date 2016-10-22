<?php
// Routes

// Homepage
$app->get('/', 'PHPWarks\Welcome\HomeAction:dispatch')
    ->setName('homepage');

//// Events:
//$app->get('/events', 'PHPWarks\Event\HomeAction:dispatch')
//    ->setName('event_home');
//$app->get('/events/upcoming', 'PHPWarks\Event\UpcomingAction:dispatch')
//    ->setName('event_upcoming');
//$app->get('/events/request-a-talk', 'PHPWarks\Event\RequestAction:dispatch')
//    ->setName('event_request');
//$app->get('/events/propose-a-talk', 'PHPWarks\Event\ProposeAction:dispatch')
//    ->setName('event_propose');
//$app->get('/events/past', 'PHPWarks\Event\PastAction:dispatch')
//    ->setName('event_past');
//$app->get('/events/past/{year}', 'PHPWarks\Event\PastByYearAction:dispatch')
//    ->setName('event_past_by_year');
//$app->get('/events/past/{year}/{month}', 'PHPWarks\Event\PastByYearAndMonthAction:dispatch')
//    ->setName('event_past_by_year_and_month');
//
//// Contact:
//$app->map(['GET', 'POST'], '/contact', 'PHPWarks\Contact\ContactAction:dispatch')
//    ->setName('contact_us');
//
//// Sponsors
//$app->get('/our-sponsors', 'PHPWarks\Sponsors\OurSponsorsAction:dispatch')
//    ->setName('our_sponsors');
//
//// Community:
//$app->get('/communities', 'PHPWarks\Community\HomeAction:dispatch')
//    ->setName('communities');
//$app->get('/get-involved', 'PHPWarks\Community\GetInvolvedAction:dispatch')
//    ->setName('get_involved');


////////
//// API
////////

// Events
$app->get('/api/events/upcoming', 'PHPWarks\API\Internal\Events\UpcomingAction:dispatch');
