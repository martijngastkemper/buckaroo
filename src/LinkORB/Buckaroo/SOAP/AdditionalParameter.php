<?php

namespace LinkORB\Buckaroo\SOAP;

class AdditionalParameter
{
    public $_;
    public $Name;
    public $Group;

    public function __construct($Name, $Value) {
        $this->Name = $Name;
        $this->_ = $Value;
    }
}
