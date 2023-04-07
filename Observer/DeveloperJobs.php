<?php

class DeveloperJobs implements SplSubject
{
    use TSingletone;

    private $jobs;
    private $observers;
    public $lastAddedJob;

    public function attach(SplObserver $observer)
    {
        $this->observers[$observer->language][] = $observer;
    }

    public function detach(SplObserver $observer)
    {
        foreach ($this->observers[$observer->language] as $key => $value) {
            if ($value === $observer) {
                unset($this->observers[$observer->language][$key]);
                return;
            }
        }
    }

    public function notify()
    {
        $data = $this->lastAddedJob;
        if (!isset($data)) {
            echo 'Error';
            return;
        }
        foreach ($this->observers[$data->language] as $observer) {
            $observer->update($this);
        }
    }
    public function addJob(Job $job)
    {
        $this->jobs[$job->language][] = $job;
        $this->lastAddedJob = $job;
        $this->notify();
    }
}
