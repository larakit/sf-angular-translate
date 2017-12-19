<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-translate')
    ->setSourceDir('public')
    ->usePackage('larakit/sf-angular')
    ->jsPackage('angular-translate.js')
    ->jsPackage('angular-translate-loader-static-files/angular-translate-loader-static-files.js')
    ->jsPackage('angular-translate-storage-cookie/angular-translate-storage-cookie.js')
;

\Larakit\LkNgModule::register('pascalprecht.translate');