<?php

namespace Fix;

use Fix\Entity\Collection\DancerCollection;
use Fix\Entity\DancerInterface;
use Fix\MusicHelper\MusicStyles;

/**
 * Class Club
 * @package Fix\Entity
 */
final class Club
{
    /**
     * @var DancerCollection
     */
    private $dancerCollection;

    /**
     * @var integer
     */
    private $music;

    /**
     * Club constructor.
     * @param DancerCollection $dancerCollection
     */
    public function __construct(DancerCollection $dancerCollection)
    {
        $this->dancerCollection = $dancerCollection;
    }

    /**
     * @param DancerInterface $dancer
     */
    public function setDancer(DancerInterface $dancer)
    {
        $this->dancerCollection->add($dancer);
    }

    /**
     * @param integer $music
     */
    public function setMusic(int $music)
    {
        $this->music = $music;
    }

    /**
     * @return integer
     */
    public function getMusic()
    {
        return $this->music;
    }

    /**
     * @return string
     */
    public function letsComeOff()
    {
        $dancersThree = $this->dancerCollection->getCollectionThree();
        $dancersActions = $this->getDancersActions($dancersThree);
        $musicStyle = MusicStyles::getStyleName($this->music);
        $countDancers = $this->pluralize($this->dancerCollection->count());

        return <<<EOF
    Сейчас в клубе играет музыка в стиле $musicStyle, 
на вечеринке тусят $countDancers. <br />
$dancersActions;
EOF;
    }

    /**
     * @param $dancersThree
     * @return string
     */
    public function getDancersActions($dancersThree)
    {
        switch ($this->getMusic()) {
            case MusicStyles::POP_MUSIC:
                $dancer = current($dancersThree[MusicStyles::POP_MUSIC]);
                return sprintf(
                    "Любители %s музыки танцуют делая %s, остальные пьют водку в баре",
                    MusicStyles::getStyleName(MusicStyles::POP_MUSIC),
                    $this->getAction($dancer)
                );
                break;
            case MusicStyles::ELECTRONIC_MUSIC:
            case MusicStyles::HOUSE_MUSIC:
                $dancer = current($dancersThree[MusicStyles::ELECTRONIC_MUSIC]);
                return sprintf(
                    "Любители %s и %s музыки танцуют делая %s, остальные пьют водку в баре",
                    MusicStyles::getStyleName(MusicStyles::ELECTRONIC_MUSIC),
                    MusicStyles::getStyleName(MusicStyles::HOUSE_MUSIC),
                    $this->getAction($dancer)
                );
                break;
            case MusicStyles::RNB_MUSIC:
            case MusicStyles::HIPHOP_MUSIC:
                $dancer = current($dancersThree[MusicStyles::RNB_MUSIC]);
                return sprintf(
                    "Любители %s и %s музыки танцуют делая %s, остальные пьют водку в баре",
                    MusicStyles::getStyleName(MusicStyles::RNB_MUSIC),
                    MusicStyles::getStyleName(MusicStyles::HIPHOP_MUSIC),
                    $this->getAction($dancer)
                );
                break;
            default:
                return "Никто не танцует, вс пьют водку.";
        }
    }

    /**
     * @param DancerInterface $dancer
     * @return string
     */
    private function getAction(DancerInterface $dancer)
    {
        return sprintf(
            "%s, %s, %s, %s",
            $dancer->moveBody(),
            $dancer->moveHand(),
            $dancer->moveLegs(),
            $dancer->moveHead()
        );
    }

    /**
     * @param $number
     * @param array $titles
     * @return string
     */
    public function pluralize($number, $titles = ['человек', 'человека', 'человек'])
    {
        $cases = array(2, 0, 1, 1, 1, 2);

        return $number . ' ' . $titles[($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[min($number % 10, 5)]];
    }
}
