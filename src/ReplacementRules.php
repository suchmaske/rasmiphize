<?php


namespace Rasmiphize;


class ReplacementRules
{
    public function getRemovalRange()
    {
        return '[\u0615-\u061e\u0621\u0640\u064b-\u0655\u0656\u0670\u0674\u06d6-\u06dc\u06df\u06e1-\u06e6\u06ed] remove';
    }

    public function getReplacementMap()
    {
        return [
            // Replace arabic letter alef wasla (\u0671) with arabic letter alef (\u0627)
            ["/ٱ/", "ا"],

            // Replace arabic letter teh (\u062A) with arabic letter dotless beh (\u066E)
            ["/ت/", "ٮ"],

            // Replace arabic letter teh marbuta (\u0629) with arabic letter heh (\u0647)
            ["/ة/", "ه"],

            // Replace arabic letter feh (\u0641) with arabic letter dotless feh (\u06A1)
            ["/ف/", "ڡ"],

            // Replace arabic letter beh (\u0628) with arabic letter dotless beh (\u066E)
            ["/ب/", "ٮ"],

            // Replace arabic letter yeh (\u064A) with arabic letter alef maksura (\u0649)
            ["/ي/", "ى"],

            // Replace arabic letter kaf (\u0643) with arabic letter keheh (\u06A9)
            ["/ك/", "ک"],

            // Replace arabic letter alef with hamza below (\u0625) with arabic letter alef (\u0627)
            ["/إ/", "ا"],

            // Replace arabic letter qaf (\u0642) with arabic letter dotless qaf (\u066F)
            ["/ق/", "ٯ"],

            // Replace arabic letter thal (\u0630) with arabic letter dal (\u062F)
            ["/ذ/", "د"],

            // Replace arabic letter alef with hamza above (\u0623) with arabic letter alef (\u0627)
            ["/أ/", "ا"],

            // Replace arabic letter ghain (\u063A) with arabic letter ain (\u0639)
            ["/غ/", "ع"],

            // Replace arabic letter dad (\u0636) with arabic letter sad (\u0635)
            ["/ض/", "ص"],

            // Replace arabic letter alef with madda above (\u0622) with arabic letter alef (\u0627)
            ["/آ/", "ا"],

            // Replace arabic letter sheen (\u0634) with arabic letter seen (\u0633)
            ["/ش/", "س"],

            // Replace arabic letter jeem (\u062C) with arabic letter hah (\u062D)
            ["/ج/", "ح"],

            // Replace arabic letter zain (\u0632) with arabic letter reh (\u0631)
            ["/ز/", "ر"],

            // Replace arabic letter khah (\u062E) with arabic letter hah (\u062D)
            ["/خ/", "ح"],

            // Replace arabic letter theh (\u062B) with arabic letter dotless beh (\u066E)
            ["/ث/", "ٮ"],

            // Replace arabic letter zah (\u0638) with arabic letter tah (\u0637)
            ["/ظ/", "ط"],

            // Replace arabic letter waw with hamza above (\u0624) with arabic letter waw (\u0648)
            ["/ؤ/", "و"],

            // Replace arabic letter yeh (\u0626) at the end of a word with arabic letter alef maksura (\u0649)
            ["/ئ$/", "ى"],

            // Replace arabic letter yeh with hamza above (\u0626) with arabic letter dotless beh (\u066E)
            ["/ئ/", "ٮ"],

            // Replace arabic letter noon (\u0646) with arabic letter noon ghunna (\u06BA)
            ["/ن/", "ں"],

            // Replace arabic letter farsi yeh (\u06CC) with arabic letter alef maksura (\u0649)
            ["/ی/", "ى"],

            // Insert zero-width-joiner (\u200D) into lam lam ha to avoid wrong ligatures
            ["/لله/", "لل‍ه"]
        ];
    }
}
