<?php
function clientCode(Facade $facade)
{
    print($facade->operation());
}

$subSystem1 = new SubSystem1();
$subSystem2 = new SubSystem2();
$facade = new Facade($subSystem1, $subSystem2);
clientCode($facade);