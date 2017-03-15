<?php

namespace Fix\Entity;

/**
 * Class DancerAbstract
 * @package Fix\Entity
 */
abstract class DancerAbstract implements DancerInterface
{
    /**
     * @var array
     */
    protected $danceSkills;

    /**
     * @param array $danceSkills
     * @return array|void
     */
    public function setDanceSkills(array $danceSkills)
    {
        $this->danceSkills = $danceSkills;
    }

    /**
     * @return array
     */
    abstract public function getDanceSkills();

    /**
     * @return mixed
     */
    abstract public function moveBody();

    /**
     * @return mixed
     */
    abstract public function moveHand();

    /**
     * @return mixed
     */
    abstract public function moveLegs();

    /**
     * @return mixed
     */
    abstract public function moveHead();

    /**
     * @return string
     */
    public function drinkVodka()
    {
        return "Drink Vodka";
    }
}
