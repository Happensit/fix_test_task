<?php

namespace Fix\MusicHelper;

/**
 * Class MusicStyles
 * @package Fix\MusicHelper
 */
abstract class MusicStyles
{
    const POP_MUSIC = 1;
    const ELECTRONIC_MUSIC = 2;
    const HOUSE_MUSIC = 3;
    const RNB_MUSIC = 4;
    const HIPHOP_MUSIC = 5;

    /**
     * @param $style
     * @return string
     */
    public static function getStyleName($style)
    {
        $styles = self::getStylesArray();
        $styleName = mb_substr($styles[$style], 0, strrpos($styles[$style], '_MUSIC'));

        return ucfirst(strtolower($styleName));
    }

    /**
     * @return array
     */
    public static function getStylesArray()
    {
        $reflection = new \ReflectionClass(self::class);
        return array_flip($reflection->getConstants());
    }
}
