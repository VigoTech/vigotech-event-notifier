<?php

declare(strict_types=1);

namespace Vigotech\Service\EventFetcher;

use Vigotech\Events;
use Vigotech\Group;

/**
 * Interface EventFetcherTypable.
 */
interface EventFetcherTypable
{
    public function fetch(Group $group, array $eventType): Events;

    public function type(): string;
}
