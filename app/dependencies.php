<?php
// DIC configuration

/** @var \Pimple\Container $container */
$container = $app->getContainer();

// -----------------------------------------------------------------------------
// Service providers
// -----------------------------------------------------------------------------

// Twig
$container['view'] = function ($c) {
    $settings = $c->get('settings');
    $view = new \Slim\Views\Twig($settings['view']['template_path'], $settings['view']['twig']);

    // Add extensions
    $view->addExtension(new Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()));
    $view->addExtension(new Twig_Extension_Debug());

    return $view;
};

// Flash messages
$container['flash'] = function ($c) {
    return new \Slim\Flash\Messages;
};

// -----------------------------------------------------------------------------
// Service factories
// -----------------------------------------------------------------------------

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings');
    $logger = new \Monolog\Logger($settings['logger']['name']);
    $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
    $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['logger']['path'], \Monolog\Logger::DEBUG));
    return $logger;
};

$container['api.meetup'] = function ($c) {
    return new \GuzzleHttp\Client([
        'base_uri' => 'http://api.meetup.com',
    ]);
};

//$container['errorHandler'] = function ($c) {
//    return function ($request, $response, $exception) use ($c) {
//        return $c['response']->withStatus(500)
//            ->withHeader('Content-Type', 'text/html')
//            ->write('Something went wrong!');
//    };
//};

// -----------------------------------------------------------------------------
// Action factories
// -----------------------------------------------------------------------------

// Welcome actions
$container['PHPWarks\Welcome\HomeAction'] = function ($c) {
    return new PHPWarks\Welcome\HomeAction($c->get('view'));
};

//// Event actions
//$container['PHPWarks\Event\HomeAction'] = function ($c) {
//    return new PHPWarks\Event\HomeAction($c->get('view'));
//};
//$container['PHPWarks\Event\PastAction'] = function ($c) {
//    return new PHPWarks\Event\PastAction($c->get('view'));
//};
//$container['PHPWarks\Event\ProposeAction'] = function ($c) {
//    return new PHPWarks\Event\ProposeAction($c->get('view'));
//};
//$container['PHPWarks\Event\RequestAction'] = function ($c) {
//    return new PHPWarks\Event\RequestAction($c->get('view'));
//};
//$container['PHPWarks\Event\UpcomingAction'] = function ($c) {
//    return new PHPWarks\Event\UpcomingAction($c->get('view'));
//};
//$container['PHPWarks\Event\PastByYearAction'] = function ($c) {
//    return new PHPWarks\Event\PastByYearAction($c->get('view'));
//};
//$container['PHPWarks\Event\PastByYearAndMonthAction'] = function ($c) {
//    return new PHPWarks\Event\PastByYearAndMonthAction($c->get('view'));
//};
//
//// Contact actions
//$container['PHPWarks\Contact\ContactAction'] = function ($c) {
//    return new PHPWarks\Contact\ContactAction($c->get('view'));
//};
//
//// Sponsor actions
//$container['PHPWarks\Sponsors\OurSponsorsAction'] = function ($c) {
//    return new PHPWarks\Sponsors\OurSponsorsAction($c->get('view'));
//};
//
//// Community actions
//$container['PHPWarks\Community\HomeAction'] = function ($c) {
//    return new PHPWarks\Community\HomeAction($c->get('view'));
//};
//$container['PHPWarks\Community\GetInvolvedAction'] = function ($c) {
//    return new PHPWarks\Community\GetInvolvedAction($c->get('view'));
//};

// -----------------------------------------------------------------------------
// Action factories [API]
// -----------------------------------------------------------------------------

// Events
$container['PHPWarks\API\Internal\Events\UpcomingAction'] = function ($c) {
    return new PHPWarks\API\Internal\Events\UpcomingAction(
        $c->get('api.meetup'),
        [
            'sign' => true,
            'key'  => '683d6d3f25744ae5d631c1a424437',
        ]
    );
};
