<?php

use Symfony\Bundle\FrameworkBundle\Controller\ControllerTrait;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\RouteCollectionBuilder;
use Todo\Model\Tasks;

require __DIR__.'/vendor/autoload.php';

class Kernel extends BaseKernel
{
    use MicroKernelTrait;
    use ControllerTrait;

    public function registerBundles()
    {
        return array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle()
        );
    }

    protected function configureContainer(ContainerBuilder $c, LoaderInterface $loader)
    {
        // PHP equivalent of config/packages/framework.yaml
        $c->loadFromExtension('framework', array(
            'secret' => 'S0ME_SECRET',
            'templating' => ['engines' => ['twig']],
            'session' => []
        ));
    }

    protected function configureRoutes(RouteCollectionBuilder $routes)
    {
        $routes->add('/', 'kernel:listAction', 'list');
        $routes->add('/add', 'kernel:addAction', 'add');
        $routes->add('/remove/{id}', 'kernel:removeAction', 'remove');
        $routes->add('/done/{id}', 'kernel:doneAction', 'done');
    }

    public function listAction(Request $request)
    {
        return $this->render('main.html.twig', ['tasks' => []]);
    }

    public function addAction(Request $request)
    {
        return $this->redirectToRoute('list');
    }

    public function removeAction(string $id)
    {
        return $this->redirectToRoute('list');
    }

    public function doneAction(string $id)
    {
        return $this->redirectToRoute('list');
    }
}

$kernel = new Kernel('dev', true);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
