<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_31\Model;

class NetworksPruneResponse200
{
    /**
     * @var string[]
     */
    protected $networksDeleted;

    /**
     * @return string[]
     */
    public function getNetworksDeleted()
    {
        return $this->networksDeleted;
    }

    /**
     * @param string[] $networksDeleted
     *
     * @return self
     */
    public function setNetworksDeleted(array $networksDeleted = null)
    {
        $this->networksDeleted = $networksDeleted;

        return $this;
    }
}