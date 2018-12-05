<?php

/**
	 * 
	 */
	class NotesController
	{
		public function actionMain()
		{
			include_once ROOT."/models/Notes.php";

			$result = Notes::getNotesListUserId($_SESSION['id']);
			$res = array();
			while ($row = $result->fetch()) {
				array_push($res, $row);
			}
			include_once ROOT."/views/notes/index.php";
			return true;
		}

		public function actionAdd()
		{
			if (isset($_POST['notes_text']) && isset($_SESSION['id'])){

				$notes_text = addslashes($_POST['notes_text']);
                // $notes_id = addslashes($_POST['notes_id']);
                $login = $_SESSION['login'];
                $user_id = $_SESSION['id'];

                $notes = array('notes_text' => $notes_text,
                		'user_id' => $user_id,
                		'login'	=> $login);
				include_once ROOT."/models/Notes.php";

				$result = Notes::setNotesListUserId($notes);
			}
			else
				echo "NO";
			
			return true;
		}

		// public function __default(){
		// 	echo "fefewf";
		// 	return true;
		// }
	}	