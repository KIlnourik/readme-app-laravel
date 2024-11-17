<?php

$finder = (new PhpCsFixer\Finder())
    ->in([
        'app',
        'database',
        'config',
        'tests',
        'routes'
    ])
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@PER-CS2.0' => true,

        'ordered_imports' => ['sort_algorithm' => 'length'], // Сортировка импортов по длине (опционально по алфавиту)
        'native_function_casing' => true, // стандартные функции должны использовать нижний регистр
        'no_unused_imports' => true, // Не используемые импорты будут удалены
    ])
    ->setFinder($finder);
