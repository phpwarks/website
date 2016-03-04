<?php
// Routes

// Homepage
$app->get('/', 'App\Action\HomeAction:dispatch')
    ->setName('homepage');

// Events:
$app->get('/events', 'App\Event\Action\HomeAction:dispatch')
    ->setName('event_home');
$app->get('/events/upcoming', 'App\Event\Action\UpcomingAction:dispatch')
    ->setName('event_upcoming');
$app->get('/events/request-a-talk', 'App\Event\Action\RequestAction:dispatch')
    ->setName('event_request');
$app->get('/events/propose-a-talk', 'App\Event\Action\ProposeAction:dispatch')
    ->setName('event_propose');
$app->get('/events/past', 'App\Event\Action\PastAction:dispatch')
    ->setName('event_past');
$app->get('/events/past/{year}', 'App\Event\Action\PastByYearAction:dispatch')
    ->setName('event_past_by_year');
$app->get('/events/past/{year}/{month}', 'App\Event\Action\PastByYearAndMonthAction:dispatch')
    ->setName('event_past_by_year_and_month');

// Contact:
$app->map(['GET', 'POST'], '/contact', 'App\Contact\ContactAction::dispatch')
    ->setName('contact_us');

// Communities:
$app->get('/our-sponsors', 'App\Sponsors\OurSponsorsAction::dispatch')
    ->setName('our_sponsors');
$app->get('/communities/surrounding-communities', 'App\Communities\OtherCommunitiesAction::dispatch')
    ->setName('other_communities');
$app->get('/communities/get-involved', 'App\Communities\GetInvolvedAction::dispatch')
    ->setName('get_involved');
