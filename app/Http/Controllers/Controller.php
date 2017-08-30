<?php

namespace App\Http\Controllers;

use App\Util\Markdown;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Parsedown;

class Controller extends BaseController
{
    private $markdown;

    /**
     * Controller constructor.
     * @param $markdown
     */
    public function __construct(Markdown $markdown)
    {
        $this->markdown = $markdown;
    }


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test(){
        $text = '~~这是 :smile: 我~~';
        print $this->markdown->markdownToHTML($text);
        print Parsedown::class;
    }
}
