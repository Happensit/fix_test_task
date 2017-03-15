<?php

namespace Fix\Entity;

/**
 * Class UniversalDancer
 * @package Fix\Entity
 */
class UniversalDancer extends DancerAbstract
{
    /**
     * @return array
     */
    public function getDanceSkills()
    {
        return $this->danceSkills;
    }

    /**
     * @return string
     */
    public function moveBody()
    {
        return "двигает телом";
    }

    /**
     * @return string
     */
    public function moveHand()
    {
        return "машет руквми";
    }

    /**
     * @return string
     */
    public function moveLegs()
    {
        return "танцует вприсядку";
    }

    /**
     * @return string
     */
    public function moveHead()
    {
        return "машет головой";
    }
}
