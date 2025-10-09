<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src')          // analyse tous les fichiers du dossier src
    ->name('*.php')                 // uniquement les fichiers PHP
    ->ignoreDotFiles(true)          // ignore les fichiers cachés
    ->ignoreVCS(true);              // ignore les fichiers de versionnage

$config = new PhpCsFixer\Config();

return $config
    ->setRules([
        '@Symfony' => true,                  // règles de style Symfony
        'array_syntax' => ['syntax' => 'short'],  // tableau en syntaxe courte []
        'no_unused_imports' => true,         // supprime les imports inutilisés
        'ordered_imports' => ['sort_algorithm' => 'alpha'], // tri alphabétique des imports
    ])
    ->setFinder($finder)
    ->setRiskyAllowed(true)                  // autorise les règles risquées
    ->setUsingCache(true);                   // active le cache pour accélérer les prochaines analyses
