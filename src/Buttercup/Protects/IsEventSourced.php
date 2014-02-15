<?php

namespace Buttercup\Protects;

/**
 * An AggregateRoot, that can be reconstituted from an AggregateHistory.
 */
interface IsEventSourced
{
    /**
     * @param AggregateHistory $aggregateHistory
     * @return ExposesRecordedEvents
     */
    public static function reconstituteFrom(AggregateHistory $aggregateHistory);

    /**
     * @return IdentifiesAggregate
     */
    public function getAggregateId();
}
 