<?php

declare(strict_types=1);

namespace Potter\Event\Listener;

use \Psr\EventDispatcher\ListenerProviderInterface as PsrListenerProviderInterface;

interface ListenerProviderInterface extends PsrListenerProviderInterface
{
    public function getListenersForEvent(object $event): iterable;
    public function hasListenersForEvent(object $event): bool;
}