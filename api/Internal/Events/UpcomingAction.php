<?php
/** @see license */
namespace PHPWarks\API\Internal\Events;

use GuzzleHttp\Client;
use Slim\Http\Request;
use Slim\Http\Response;


/**
 * @author Nigel Greenway <github@futurepixels.co.uk>
 */
final class UpcomingAction
{
    /** @var Client $meetupAPI */
    private $meetupAPI;

    /**
     * @param Client $meetup
     * @param array  $options
     */
    public function __construct(
        Client $meetup,
        array $options
    ) {
        $options['status'] = 'future';

        $this->meetupAPI = $meetup;
        $this->options   = $options;
    }

    /**
     * @param Request  $request
     * @param Response $response
     * @param array    $args
     *
     * @return string
     */
    public function dispatch(
        Request  $request,
        Response $response,
        array    $args
    ) :string {
        return $this
            ->meetupAPI
            ->request('GET', '/PHP-Warwickshire/events', $this->options)
            ->getBody()
            ->getContents();
    }
}
