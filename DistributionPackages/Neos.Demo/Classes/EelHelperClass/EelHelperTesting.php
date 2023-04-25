<?php

namespace Neos\Demo\EelHelperClass;

use Neos\Flow\Annotations as Flow;
use Neos\Eel\ProtectedContextAwareInterface;

class EelHelperTesting implements ProtectedContextAwareInterface{

    public function removeWhitespaces(string $dummyString): string
    {
        $returnString = '';
        for ($i = 0; $i < strlen($dummyString); $i++){
            $substring = substr($dummyString, $i, 1);
            if($substring != ' '){
                $returnString = $returnString . $substring;
            }
        }
        return $returnString;
    }
    public function allowsCallOfMethod($methodName)
    {
        return true;
    }
}
