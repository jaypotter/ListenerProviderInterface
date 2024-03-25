<?php

declare(strict_types=1);

namespace Potter\Event\Listener;

abstract class AbstractListenerProvider implements ListenerProviderInterface
{
    abstract public function getListenersForEvent(object $event): iterable;
    abstract public function hasListenersForEvent(object $event): bool;
}