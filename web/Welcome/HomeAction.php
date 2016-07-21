<?php
/** @see license */
namespace PHPWarks\Welcome;

use GuzzleHttp\Client;
use Slim\Views\Twig;
use Psr\Http\Message\ {
    ServerRequestInterface as Request,
    ResponseInterface      as Response
};

/**
 * Website home page
 *
 * @author Nigel Greenway <github@futurepixels.co.uk>
 */
final class HomeAction
{
    /** @var Twig   $view */
    private $view;
    /** @var Client $meetupAPI */
    private $meetupAPI;

    /**
     * Constructor
     *
     * @param Twig   $view
     * @param Client $meetupAPI
     */
    public function __construct(
        Twig $view,
        Client $meetupAPI
    ) {
        $this->view      = $view;
        $this->meetupAPI = $meetupAPI;
    }

    /**
     * Action dispatcher
     *
     * @param Request  $request
     * @param Response $response
     * @param array    $args
     *
     * @return Response
     */
    public function dispatch(
        Request  $request,
        Response $response,
        array    $args
    ) {
        return $this->view->render($response, '@Welcome/home.html.twig', [
            'meetup' => [
                'future' => json_decode($this->futureEvents()),
            ],
        ]);
    }

    private function futureEvents()
    {
        $payload = $this
            ->meetupAPI
            ->request('GET', '/PHP-Warwickshire/events', [
                'sign' => 'true',
                'key'  => '683d6d3f25744ae5d631c1a424437',
            ]);

        return $payload
            ->getBody()
            ->getContents();
    }
}
