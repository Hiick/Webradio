<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQ2Uxa3u\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQ2Uxa3u/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQ2Uxa3u.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQ2Uxa3u\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQ2Uxa3u\App_KernelDevDebugContainer([
    'container.build_hash' => 'Q2Uxa3u',
    'container.build_id' => '3c17fe80',
    'container.build_time' => 1583351583,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQ2Uxa3u');
