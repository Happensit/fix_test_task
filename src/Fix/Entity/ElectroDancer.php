<?php

namespace Fix\Entity;

use Fix\MusicHelper\MusicStyles;

/**
 * Class ElectroDancer
 * @package Fix\Entity
 */
class ElectroDancer extends DancerAbstract
{
    /**
     * @return array
     */
    public function getDanceSkills()
    {
        return [
            MusicStyles::ELECTRONIC_MUSIC,
            MusicStyles::HOUSE_MUSIC
        ];
    }

    /**
     * @return string
     */
    public function moveBody()
    {
        return "покачивание телом вперед назад";
    }

    /**
     * @return string
     */
    public function moveHand()
    {
        return "круговые движения-вращения руками";
    }

    /**
     * @return string
     */
    public function moveLegs()
    {
        return "ноги двигаются в ритме";
    }

    /**
     * @return string
     */
    public function moveHead()
    {
        return "почти нет движения головой";
    }
}
