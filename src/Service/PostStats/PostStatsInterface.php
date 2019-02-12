<?php
declare(strict_types=1);

namespace AndriusJankevicius\Supermetrics\Service\PostStats;

/**
 * Interface PostStatsInterface
 *
 * @package AndriusJankevicius\Supermetrics\Service\PostStats
 */
interface PostStatsInterface
{
    /**
     * Return the stats information
     * @return array
     */
    public function get(): array;

    /**
     * The name of the stats entry
     *
     * @return string
     */
    public function getName(): string;
}
