<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;
use MenuActionType as MAT;
// Load custom helpers
helper("commonfunction_helper");
helper('array');
/**
 * Automatically adds routes for all modules found in the specified directory.
 *
 * @param string $directory The directory to scan for modules.
 * @param RouteCollection $routes The route collection instance.
 * @return void
 */
/**
 * @var RouteCollection $routes
 */

if (!function_exists('autoAddRoutes')) {
    function autoAddRoutes(string $directory, RouteCollection $routes): void
    {
        $modules = scandir($directory);

        foreach ($modules as $module) {
            if ($module === '.' || $module === '..') {
                continue;
            }

            $fullPath = $directory . '/' . $module;

            if (is_dir($fullPath)) {
                $routesPath = $fullPath . '/Config/Routes.php';
                if (file_exists($routesPath)) {
                    // Load the module's routes
                    require $routesPath;
                }

                autoAddRoutes($fullPath, $routes);
            }
        }
    }
}

// Retrieve PHP_SELF
$php_self = $_SERVER['PHP_SELF'];

// Define allowed file extensions
$extensions = ['js', 'css', 'img', 'map', 'jpg', 'jpeg', 'png', 'gif', 'webp', 'woff', 'woff2', 'ttf', 'otf', 'mp4', 'webm', 'ogg', 'mp3', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'txt'];

// Extract file extension using pathinfo
$file_extension = pathinfo($php_self, PATHINFO_EXTENSION);
function encodeArray($array)
{
    $serializedArray = serialize($array);
    return urlencode($serializedArray);
}
if (!in_array($file_extension, $extensions)) {
    $routes->get('/','PageController::index');
    $routes->get('/Parishad','PageController::Parishad');
    $routes->get('/aboutus','PageController::aboutus');
    $routes->get('/map','PageController::map');
    $routes->get('/placestovisit','PageController::placestovisit');
    $routes->get('/howtoreach','PageController::howtoreach');
    $routes->get('/contactus','PageController::contactus');
}
