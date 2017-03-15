<?php

namespace Fix\Entity;

use Fix\MusicHelper\MusicStyles;

/**
 * Class RnbDancer
 * @package Fix\Entity
 */
class RnbDancer extends DancerAbstract
{
    /**
     * @return array
     */
    public function getDanceSkills()
    {
        return [
            MusicStyles::HIPHOP_MUSIC,
            MusicStyles::RNB_MUSIC
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
        return "руки согнуты в локтях";
    }

    /**
     * @return string
     */
    public function moveLegs()
    {
        return "ноги в полуприседе";
    }

    /**
     * @return string
     */
    public function moveHead()
    {
        return "головой вперед-назад";
    }
}
