<?php
/**
 * Created by PhpStorm.
 * User: feng
 * Date: 17-8-30
 * Time: 下午2:19
 */

namespace App\Util;

use Parsedown;
use League\HTMLToMarkdown\HtmlConverter;

class Markdown
{
    protected $htmlParser;
    protected $markdownParser;

    /**
     * Markdown constructor.
     */
    public function __construct()
    {
        $this->htmlParser = new HtmlConverter();
        $this->markdownParser = new Parsedown();
        $this->markdownParser->setBreaksEnabled(true);
    }

    public function htmlToMarkdown($text)
    {
        return $this->htmlParser->convert($text);
    }

    public function markdownToHTML($text)
    {
        return $this->markdownParser->text(\Emoji::toImage($text));
    }

}