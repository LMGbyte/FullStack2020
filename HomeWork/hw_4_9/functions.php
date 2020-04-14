<?php

function fInput($iType, $iClass, $iId = '', $iName = '')
{
    echo '<input type=' . $iType . ' name=' . $iName . ' class=' . $iClass . ' id=' . $iId . '>';
}