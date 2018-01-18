<?php 
class Cms5a60b7b2061f9924854905_74fecdd9ffb2d632479cdb1fbddd0e51Class extends \Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
