<?php
	function createDocument($db, $key){
		try{
			$sql = "INSERT INTO recettage SET doc_key = :doc_key";
			$req = $db->prepare($sql);
			$req->execute(array(':doc_key' => $key));
			$result = $req->fetchAll(PDO::FETCH_ASSOC);
			return true;
		}
		catch (PDOException $e){
			print 'Erreur PDO : '.$e->getMessage().'<br/>';
			die();
		}
	}

	function selectAllDocument($db){
		try{
			$sql = "SELECT * FROM recettage";
			$req = $db->prepare($sql);
			$req->execute(); 
			$result = $req->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		catch (PDOException $e){
			print 'Erreur PDO : '.$e->getMessage().'<br/>';
			die();
		}
	}

	function selectDocument($db, $key){
		try{
			$sql = "SELECT id FROM recettage WHERE doc_key = '".$key."'";
			$req = $db->prepare($sql);
			$req->execute(); 
			$result = $req->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		catch (PDOException $e){
			print 'Erreur PDO : '.$e->getMessage().'<br/>';
			die();
		}
	}

	function selectDocumentById($db, $id){
		try{
			$sql = "SELECT id FROM recettage WHERE id = '".$id."'";
			$req = $db->prepare($sql);
			$req->execute(); 
			$result = $req->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		catch (PDOException $e){
			print 'Erreur PDO : '.$e->getMessage().'<br/>';
			die();
		}
	}

	function uploadDocument($db, $path, $partOf){
		try{
			$sql = "INSERT INTO document SET piece_of = :part_of, path_to = :path_to";
			$req = $db->prepare($sql);
			$req->execute(array(':part_of' => $partOf, ':path_to' => $path));
			$result = $req->fetchAll(PDO::FETCH_ASSOC);
			return true;
		}
		catch (PDOException $e){
			print 'Erreur PDO : '.$e->getMessage().'<br/>';
			die();
		}
	}

	function selectUpload($db, $id){
		try{
			$sql = "SELECT * FROM document WHERE piece_of = $id ORDER BY created_at DESC";
			$req = $db->prepare($sql);
			$req->execute(); 
			$result = $req->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		catch (PDOException $e){
			print 'Erreur PDO : '.$e->getMessage().'<br/>';
			die();
		}
	}

		/*1.4!selectTweet
			return : 
				selected tweet in array
			$db -> 				database object
			$tweet_id ->				tweet's id
		*/
	function selectArticle($db, $article_id){
		try{
			$sql = "SELECT * FROM articles WHERE id = '".$article_id."'";
			$req = $db->prepare($sql);
			$req->execute(); 
			$result = $req->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		catch (PDOException $e){
			print 'Erreur PDO : '.$e->getMessage().'<br/>';
			die();
		}
	}


		/*1.5!insertTweet
			return : 
				true
			$db -> 				database object
			$user_id ->			user's id (must be current $_SESSION['id'])
			$message ->			field value : message
		*/
	function insertArticles($db, $user_id, $title, $image, $content){
		try{
			$sql = "INSERT INTO articles SET user_id = :user_id, title = :title, image = :image, content = :content";
			$req = $db->prepare($sql);
			$req->execute(array(':user_id' => $user_id, ':title' => $title, ':image' => $image , ':content' => $content));
			$result = $req->fetchAll(PDO::FETCH_ASSOC);
			return true;
		}
		catch (PDOException $e){
			print 'Erreur PDO : '.$e->getMessage().'<br/>';
			die();
		}
	}


		/*1.6!updateTweet
			return : 
				true if updated
				false for bad ownership or empty message
			$db -> 				database object
			$tweet_id ->				tweet's id
			$message ->			field value : message
			$user_id -> 		user's id (tweet's owner) | must use $_SESSION['id']
		*/
	function updateArticle($db, $article_id, $user_id, $content, $title, $image){
		try{
			$sql = "UPDATE articles SET content = :content, title = :title, image = :image WHERE id = :id AND user_id = :user_id";
			$req = $db->prepare($sql);
		  	$req->execute(array('content' => $content, 'title' => $title, 'image' => $image, 'id' => $article_id, 'user_id' => $user_id));
		  	$result = $req->fetchAll(PDO::FETCH_ASSOC);
			return true;
		}
		catch (PDOException $e){
			print 'Erreur PDO : '.$e->getMessage().'<br/>';
			die();
		}
	}


		/*1.7!deleteTweet
			return : 
				true if deleted
				false for fail
			$db -> 				database object
			$tweet_id ->				tweet's id
			$user_id -> 		user's id (tweet's owner) | must use $_SESSION['id']
		*/
	function deleteElement($db, $table, $element_id, $user_id){
		try{
			$sql = "DELETE FROM $table WHERE id = :id AND user_id = :user_id";
			$req = $db->prepare($sql);
			$req->execute(array(':id' => $element_id, ':user_id' => $user_id));
			$result = $req->fetchAll(PDO::FETCH_ASSOC);
			return true;
		}
		catch (PDOException $e){
			print 'Erreur PDO : '.$e->getMessage().'<br/>';
			die();
		}
	}