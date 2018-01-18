<?php 
class Cms5a60a016d1b3c174465720_e5ae03998ab678fe3a02fcb3ccb57f08Class extends \Cms\Classes\PageCode
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
