<?php 
class Cms5e3a7dd8c7573422674922_c023b95826f9ac7782af04502c0fb900Class extends Cms\Classes\PageCode
{
public function onStart() {
    $this['week'] = $this->param("week");
	if(empty($this['week'])){
		$this['week'] = date('w');
	}
}
}
