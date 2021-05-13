<?php



class test{
  private $name = 'mi nombre';

  private function ejercicio1()
  {
    $markdown = '## smaller header';
    $array = preg_split('#\s+#', $markdown, 2);
		if (count($array) != 2) return '#Invalid';    
		$headerSize = substr_count($array[0], '#');
		return "<h{$headerSize}>{$array[1]}<h{$headerSize}>";
  }

  public function getName()
  {
    return $this->name;
  }

}

$test = new test();
echo $test->getName();