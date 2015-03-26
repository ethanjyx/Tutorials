<?php

class My_Job
{
    public function perform()
    {
        // Work work work
        sleep(10);
        echo $this->args['name'];
    }
}
?>