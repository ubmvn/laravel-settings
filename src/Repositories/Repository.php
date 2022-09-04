<?php

namespace Ubmvn\Settings\Repositories;

use Ubmvn\Settings\Contracts\Repository as RepositoryContract;

abstract class Repository implements RepositoryContract
{
    /**
     * Settings filter instance.
     *
     * @var \Ubmvn\Settings\EntryFilter
     */
    protected $entryFilter;

    /**
     * Set settings filter.
     *
     * @param \Ubmvn\Settings\EntryFilter $filter
     * @return \Ubmvn\Settings\Repositories\Repository $this
     */
    public function withFilter($filter)
    {
        $this->entryFilter = $filter;

        return $this;
    }
}
