<?php

class CBPSequenceActivity extends \CBPCompositeActivity implements \IBPActivityEventListener
{
    public function __construct($name)
    {
    }
    public function Execute()
    {
    }
    protected function OnSequenceComplete()
    {
    }
    public function OnEvent(\CBPActivity $sender, $arEventParameters = array())
    {
    }
    private function TryScheduleNextChild()
    {
    }
    public function Cancel()
    {
    }
    public function HandleFault(\Exception $exception)
    {
    }
}