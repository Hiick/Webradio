<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEVxNYqF\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEVxNYqF/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEVxNYqF.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEVxNYqF\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEVxNYqF\App_KernelDevDebugContainer([
    'container.build_hash' => 'EVxNYqF',
    'container.build_id' => '28f8dca0',
    'container.build_time' => 1583249485,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEVxNYqF');
