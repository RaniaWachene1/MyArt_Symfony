<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container78kQApk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container78kQApk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container78kQApk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container78kQApk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container78kQApk\App_KernelDevDebugContainer([
    'container.build_hash' => '78kQApk',
    'container.build_id' => 'e0d55112',
    'container.build_time' => 1682413153,
], __DIR__.\DIRECTORY_SEPARATOR.'Container78kQApk');
