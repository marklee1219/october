<?php 
class Cms5a609f335fd69869429259_7190fef8c0b61877568061254e56c925Class extends \Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
