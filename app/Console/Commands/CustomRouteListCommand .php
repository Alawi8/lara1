<?php
namespace App\Console\Commands ;
use Illuminate\Console\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Helper\TableSeparator;

class CustomRouteListCommand extends Command
{
    protected $signature = 'route:list';

    protected $description = 'Display the route list in a custom table format.';

    public function handle()
    {
        $routes = collect(app('router')->getRoutes())->map(function ($route) {
            return [
                'method' => implode('|', $route->methods()),
                'uri' => $route->uri(),
                'name' => $route->getName(),
                'action' => $route->getActionName(),
            ];
        });

        $table = new Table($this->output);
        $table->setHeaders(['Method', 'URI', 'Name', 'Action']);

        foreach ($routes as $key => $route) {
            $table->addRow([$route['method'], $route['uri'], $route['name'], $route['action']]);

            if ($key < $routes->count() - 1) {
                $table->addRow(new TableSeparator());
            }
        }

        $table->render();
    }
}