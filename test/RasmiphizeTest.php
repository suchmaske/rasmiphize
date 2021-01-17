<?php


use PHPUnit\Framework\TestCase;

class RasmiphizeTest extends TestCase
{
    private $rasmiphize;

    public function setUp()
    {
        $replacementRules = new Rasmiphize\ReplacementRules();
        $this->rasmiphize = new Rasmiphize\Rasmiphize($replacementRules);
    }

    public function testToRasmOfTheWholeQuran()
    {
        $quran = file_get_contents('../data/quran_text_rasm.csv');
        $quranCoordinates = explode("\n", $quran);

        foreach ($quranCoordinates as $quranCoordinate) {
            $coordinate = explode("\t", $quranCoordinate);
            $coordinate = [
                "sura" => $coordinate[0],
                "verse" => $coordinate[1],
                "word" => $coordinate[2],
                "transliteration" => $coordinate[3],
                "original" => $coordinate[4],
                "rasm" => $coordinate[5]
            ];

            $this->assertEquals(
                trim($this->rasmiphize->toRasm($coordinate["original"])),
                trim($coordinate["rasm"]),
                "Failet at {$coordinate["sura"]}:{$coordinate["verse"]}:{$coordinate["word"]}"
            );

            $this->assertEquals(
                trim(Rasmiphize\Rasmiphize::rasmiphize($coordinate["original"])),
                trim($coordinate["rasm"]),
                "Failet at {$coordinate["sura"]}:{$coordinate["verse"]}:{$coordinate["word"]}"
            );
        }
    }

    /** @dataProvider regressionDataProvider */
    public function testToRasmRegression($original, $rasm)
    {
        $this->assertEquals(
            $this->rasmiphize->toRasm($original),
            $rasm
        );
    }

    /** @dataProvider regressionDataProvider */
    public function testRasmiphizeRegression($original, $rasm)
    {
        $this->assertEquals(
            Rasmiphize\Rasmiphize::rasmiphize($original),
            $rasm
        );
    }

    public function regressionDataProvider()
    {
        return [
            ["وَهَيِّئۡ", "وهىى"],
            ['بِإِذۡنِیۖ وَتُبۡرِئُ ٱلۡأَكۡمَهَ', 'ٮادںى وٮٮرى الاکمه']
        ];
    }
}