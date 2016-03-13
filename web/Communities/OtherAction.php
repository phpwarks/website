<?php
/** @see license */
namespace PHPWarks\Communities;

use Slim\Views\Twig;
use Psr\Http\Message\ {
    ServerRequestInterface as Request,
    ResponseInterface      as Response
};

/**
 * Other surrounding communities page
 *
 * @author Nigel Greenway <github@futurepixels.co.uk>
 */
final class OtherAction
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
        $this->view->render($response, '@Communities/others.html.twig');

        return $response;
    }
}
