<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMrLdBww\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMrLdBww/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMrLdBww.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMrLdBww\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMrLdBww\App_KernelDevDebugContainer([
    'container.build_hash' => 'MrLdBww',
    'container.build_id' => '024d34ea',
    'container.build_time' => 1674119373,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMrLdBww');
