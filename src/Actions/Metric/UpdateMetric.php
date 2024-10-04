<?php

namespace Cachet\Actions\Metric;

use Cachet\Models\Metric;

class UpdateMetric
{
    /**
     * Handle the action.
     */
    public function handle(Metric $metric, ?array $data = []): Metric
    {
        $metric->update($data);

        return $metric->fresh();
    }
}
