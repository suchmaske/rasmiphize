<?php


namespace Rasmiphize;


class Rasmiphize
{

    /** @var ReplacementRules $replacementRules */
    private $replacementRules;

    /**
     * Rasmiphize constructor.
     * @param ReplacementRules $replacementRules
     */
    public function __construct($replacementRules) {
        $this->replacementRules = $replacementRules;
    }

    public function toRasm($arabicString)
    {
        $rasmString = transliterator_transliterate($this->replacementRules->getRemovalRange(), $arabicString);
        foreach ($this->replacementRules->getReplacementMap() as $replacementRule) {
            $rasmString = preg_replace($replacementRule[0], $replacementRule[1], $rasmString);
        }

        return $rasmString;
    }

    /**
     * @param $arabicString
     * @return false|string|string[]|null
     */
    public static function rasmiphize($arabicString)
    {
        $replacementRules = new ReplacementRules();
        $rasmifize = new Rasmiphize($replacementRules);

        return $rasmifize->toRasm($arabicString);
    }
}
