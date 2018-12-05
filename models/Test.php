<?php



class Test
{
	
	public static function getTestList(){
		
        	
                $dbPath = ROOT."/template/dbConnect.php";
                include_once $dbPath;

                $dbConnect = new dbConnect();

                $db = $dbConnect->dbCon();

                $result = $db->query('SELECT * FROM `test_suite`');

                $result->setFetchMode(PDO::FETCH_ASSOC);

                return $result;
	}

        public static function getTestcaseList($id=false){
                
                $dbPath = ROOT."/template/dbConnect.php";
                include_once $dbPath;

                $dbConnect = new dbConnect();

                $db = $dbConnect->dbCon();

                $result = $db->query('SELECT * FROM `test_case` WHERE id_owner_test_suite='.$id);

                $result->setFetchMode(PDO::FETCH_ASSOC);
                

                return $result;
        }

       public static function setTest($data=false){
                
                
                $dbPath = ROOT."/template/dbConnect.php";
                include_once $dbPath;

                $dbConnect = new dbConnect();

                $db = $dbConnect->dbCon();

                $text = $data['text'];

                $result = $db->query("INSERT INTO `test_suite`(name_suite) VALUES ('$text')");

                $dbPath = ROOT."/template/dbConnect.php";
                include_once $dbPath;

                $dbConnect = new dbConnect();

                $db = $dbConnect->dbCon();

                $res = $db->query('SELECT `id_test_suite` FROM `test_suite` WHERE name_suite=few');

                // $res->setFetchMode(PDO::FETCH_ASSOC);

                var_dump($db);

                return $res;
        }
}