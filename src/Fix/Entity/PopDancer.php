<?php

namespace Fix\Entity;

use Fix\MusicHelper\MusicStyles;

/**
 * Class PopDancer
 * @package Fix\Entity
 */
class PopDancer extends DancerAbstract
{
    /**
     * @return array
     */
    public function getDanceSkills()
    {
        return [
            MusicStyles::POP_MUSIC,
        ];
    }

    /**
     * @return string
     */
    public function moveBody()
    {
        return "плавные движения телом";
    }

    /**
     * @return string
     */
    public function moveHand()
    {
        return "плавные движения руками";
    }

    /**
     * @return string
     */
    public function moveLegs()
    {
        return "плавные движения ногами";
    }

    /**
     * @return string
     */
    public function moveHead()
    {
        return "плавные движения головой";
    }
}
