<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSj8Msrt\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSj8Msrt/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSj8Msrt.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSj8Msrt\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerSj8Msrt\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Sj8Msrt',
    'container.build_id' => 'b2045513',
    'container.build_time' => 1676147037,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSj8Msrt');
