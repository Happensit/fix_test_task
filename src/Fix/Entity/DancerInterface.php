<?php

namespace Fix\Entity;

/**
 * Interface DancerInterface
 * @package Fix\Entity
 */
interface DancerInterface
{
    /**
     * @return array
     */
    public function getDanceSkills();

    /**
     * @param array $danceSkills
     * @return array
     */
    public function setDanceSkills(array $danceSkills);

    /**
     * @return mixed
     */
    public function moveBody();

    /**
     * @return mixed
     */
    public function moveHand();

    /**
     * @return mixed
     */
    public function moveLegs();

    /**
     * @return mixed
     */
    public function moveHead();

    /**
     * @return mixed
     */
    public function drinkVodka();
}
