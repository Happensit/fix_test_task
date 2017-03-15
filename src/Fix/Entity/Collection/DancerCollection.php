<?php

namespace Fix\Entity\Collection;

use Fix\Entity\DancerInterface;
use Traversable;

/**
 * Class DancerCollection
 * @package Fix\Entity\Collection
 */
class DancerCollection implements \Countable, \IteratorAggregate
{
    /**
     * @var array
     */
    protected $collection = [];

    /**
     * @param DancerInterface $dancer
     * @return array|DancerInterface
     */
    public function add(DancerInterface $dancer)
    {
        return $this->collection[] = $dancer;
    }

    /**
     * @return array
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @return array
     */
    public function getCollectionThree()
    {
        $dancersThree = [];

        array_map(function ($dancer) use (&$dancersThree) {
            /** @var DancerInterface $dancer */
            foreach ($dancer->getDanceSkills() as $skill) {
                $dancersThree[$skill][] = $dancer;
            }
        }, $this->getCollection());

        return $dancersThree;
    }

    /**
     * @return int
     */
    public function count()
    {
        return sizeof($this->collection);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->collection);
    }
}
