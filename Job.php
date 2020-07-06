<?php
class Job{
    proctected $foo;
    proctected $title;
    function __construct($foo = null)
    {
        $this->foo = $foo;
    }

    public function title($title)
    {
        $this->title = $title;
    }
}
