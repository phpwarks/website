<?php
declare(strict_types=1);
/** @see license */
namespace PHPWarks\Welcome;

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

    /**
     * Constructor
     *
     * @param Twig $view
     */
    public function __construct(Twig $view) {
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
    ) :Response {
        return $this->view->render($response, '@Welcome/home.html.twig');
    }
}
