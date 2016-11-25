<?php
interface TestInterface {
	public function test();
}

abstract class Test extends Illuminate\Database\Eloquent\Model implements TestInterface {
	public $timestamps = false;
  	protected $table = 'articles';
}