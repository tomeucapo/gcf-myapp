<?php
include "../init.php";

use app\Configurator;
use gcf\Environment;

    try {
        $env = Environment::getInstance();

        $configura = Configurator::getInstance();
        $configura->setConfig($env->config);

        $tmpl = $configura->tmpl;

        // Carregam la plantilla principal i la configuram
        $tmpl->readTemplatesFromFile("index");
        
    } catch (Exception $e) {
        error_log($e->getMessage());
        exit("Error al inicialitzar la aplicació: " . $e->getMessage());
    }

    $tmpl->addVars("principal",
            ["USER" => "dude"]                        // Put your variables passed to template block principal
    );

    $tmpl->parseTemplate("principal");
    $tmpl->displayParsedTemplate("principal");
