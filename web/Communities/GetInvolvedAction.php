<?php
/** @see license */
namespace PHPWarks\Communities;

use Slim\Views\Twig;
use Psr\Http\Message\ {
    ServerRequestInterface as Request,
    ResponseInterface      as Response
};

/**
 * Get involved with other communities page
 *
 * @author Nigel Greenway <github@futurepixels.co.uk>
 */
final class GetInvolvedAction
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
        $this->view->render($response, '@Communities/get_involved.html.twig');

        return $response;
    }
}
