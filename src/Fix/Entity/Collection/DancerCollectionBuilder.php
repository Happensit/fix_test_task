<?php

namespace Fix\Entity\Collection;

use Fix\MusicHelper\MusicStyles;
use Fix\Entity\ElectroDancer;
use Fix\Entity\PopDancer;
use Fix\Entity\RnbDancer;

/**
 * Helper for build dancer collection
 * Class DancerCollectionBuilder
 * @package Fix\Entity\Collection
 */
class DancerCollectionBuilder
{
    /**
     * @var int
     */
    private $countDancers;
    /**
     * @var DancerCollection
     */
    private $collection;

    /**
     * @var array
     */
    public static $musicStyles = [
        MusicStyles::POP_MUSIC          => PopDancer::class,
        MusicStyles::ELECTRONIC_MUSIC   => ElectroDancer::class,
        MusicStyles::HOUSE_MUSIC        => ElectroDancer::class,
        MusicStyles::RNB_MUSIC          => RnbDancer::class,
        MusicStyles::HIPHOP_MUSIC       => RnbDancer::class,
    ];

    /**
     * DancerCollectionBuilder constructor.
     * @param DancerCollection $collection
     * @param int $countDancers Amount of dancers to generate
     */
    public function __construct(DancerCollection $collection, int $countDancers = 15)
    {
        $this->countDancers = $countDancers;
        $this->collection = $collection;
    }

    /**
     * @return DancerCollection
     */
    public function buildCollection()
    {
        for ($i = 1; $i <= $this->countDancers; $i++) {
            $randomDancer = self::getDancer(array_rand(self::$musicStyles));
            $this->collection->add(new $randomDancer);
        }

        return $this->collection;
    }

    /**
     * Get Dancer class
     * @param $style
     * @return mixed
     */
    public static function getDancer($style)
    {
        return static::$musicStyles[$style];
    }
}
