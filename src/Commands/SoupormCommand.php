<?php

namespace Gregorycoleman\Souporm\Commands ;

use Illuminate\Console\Command ;

class SoupormCommand extends Command
{
    public $signature = 'souporm' ;

    public $description = 'My command' ;

    public function handle()
    {
        $this->comment('All done') ;
    }
}
