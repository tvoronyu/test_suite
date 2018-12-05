<?php
/**
 * 
 */
class Notes
{
	
	public static function getNotesListUserId($id){
		
        	$dbPath = ROOT."/template/dbConnect.php";
                include_once $dbPath;

                $dbConnect = new dbConnect();

                $db = $dbConnect->dbCon();

                $result = $db->query('SELECT `notes_id`,`notes_name`, `notes_text` FROM `notes` WHERE notes_owner_id='.$id);

                $result->setFetchMode(PDO::FETCH_ASSOC);

                return $result;
	}

        public static function setNotesListUserId($note){

                $dbPath = ROOT."/template/dbConnect.php";
                include_once $dbPath;

                $dbConnect = new dbConnect();
                $db = $dbConnect->dbCon();

                $notes_text = $note['notes_text'];
                // $notes_id = addslashes($_POST['notes_id']);
                // $login = $_SESSION['login'];
                $user_id = $note['user_id'];

                $result = $db->query("INSERT INTO notes(notes_text, notes_owner_id) VALUES ('$notes_text', '$user_id')");
                // var_dump($result);
                return $result;

        }
}