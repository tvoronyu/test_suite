<?php
include_once ROOT."/models/Test.php";

class TestController
{
	public function actionTest()
	{
		// include_once ROOT."/models/Test.php";
		$result = Test::getTestList();
		$res = array();
		while ($row = $result->fetch()) {
			array_push($res, $row);
		}
		include_once ROOT."/views/test/index.php";
		return true;
	}

	public function actionTestCase($id=false)
	{
		$result = Test::getTestcaseList($id);
		$res = array();
		while ($row = $result->fetch()) {
			array_push($res, $row);
		}
		include_once ROOT."/views/test/test_case.php";
		return true;
	}

	public function actionAddTest()
	{
		$data = array();
		$data['text'] = $_POST['text'];
		$result = Test::setTest($data);
		// $res = array();
		// while ($row = $result->fetch()) {
		// 	array_push($res, $row);
		// }
		var_dump($result);
		// return true;
	}

	public function actionDelTest()
	{
		// include_once ROOT."/models/Test.php";
		$result = Test::getTestList();
		$res = array();
		while ($row = $result->fetch()) {
			array_push($res, $row);
		}
		include_once ROOT."/views/test/index.php";
		return true;
	}

	public function actionAddTestCase($id=false)
	{
		$result = Test::getTestcaseList($id);
		$res = array();
		while ($row = $result->fetch()) {
			array_push($res, $row);
		}
		include_once ROOT."/views/test/test_case.php";
		return true;
	}

	public function actionDelTestCase($id=false)
	{
		$result = Test::getTestcaseList($id);
		$res = array();
		while ($row = $result->fetch()) {
			array_push($res, $row);
		}
		include_once ROOT."/views/test/test_case.php";
		return true;
	}
}