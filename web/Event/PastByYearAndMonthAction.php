<?php
/** @see license */
namespace PHPWarks\Event;

use Slim\Views\Twig;
use Psr\Http\Message\ {
    ServerRequestInterface as Request,
    ResponseInterface      as Response
};

/**
 * Past events by year and month page
 *
 * @author Nigel Greenway <github@futurepixels.co.uk>
 */
final class PastByYearAndMonthAction
{
    /** @var Twig $view */
    private $view;

    /**
     * Constructor
     *
     * @param Twig $view
     */
    public function __construct(
        Twig $view
    ) {
        $this->view = $view;
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
        $this->view->render($response, '@Event/past_by_year_and_month.html.twig', [
            'year'  => $args['year'],
            'month' => $args['month'],
        ]);

        return $response;
    }
}
