<?php
class DbTest extends CTestCase
{
	public function testConnection()
	{
	$this->assertNotNull(yii::app()->db->connectionString);
	}
}