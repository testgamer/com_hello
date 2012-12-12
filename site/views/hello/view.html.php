<?php
defined('_JEXEC') or die('Restricted access');

class HelloViewHelloHtml extends JViewHtml
{
  protected $model;
    
  public function loadPaths()
  {
    $paths = new SplPriorityQueue;
    $paths->insert(JPATH_COMPONENT . '/views/hello/layouts/', 1000);
    return $paths;
  }
  
	public function render()
	{
	  $this->data = $this->model->getMsg();
	  
	  echo "<h1>" . $this->data . "</h1>";
	  
	  return parent::render();
	}
}
