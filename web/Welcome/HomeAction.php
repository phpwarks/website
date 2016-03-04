<?php
/**
 * @see license
 */
namespace PHPWarks\Welcome;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

/**
 * @author Nigel Greenway <github@futurepixels.co.uk>
 */
final class HomeAction
{ 
    private $view;
    private $logger;

    public function __construct(
        Twig            $view,
        LoggerInterface $logger
    ) {
        $this->view = $view;
        $this->logger = $logger;
    }

    public function dispatch(
        Request $request,
        Response $response,
        array $args
    ) {
        $this->logger->info("Home page action dispatched");
        
        $this->view->render($response, 'home.twig');
        
        return $response;
    }
}
