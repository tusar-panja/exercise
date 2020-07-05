<?php class Person{
    proctected $job;
    public function worksAt($position)
    {
        $this->job = new Job($position);
    }
}
