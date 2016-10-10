<?php
	function userConnection($db, $email, $password){
		//Requête SQL
		$sql = "SELECT * FROM users WHERE `email` = '$email' AND `password` = '$password' LIMIT 1";
		$req = $db->prepare($sql);
		$req->execute();
		$result = $req->fetch(PDO::FETCH_ASSOC);
		//Si le fetch réussi, alors un résultat a été retourné donc le couple email / password est correct
		if($result == true){
			//on définit la SESSION
			$_SESSION['id'] = $result['id'];
			$_SESSION['username'] = $result['username'];
			$_SESSION['email'] = $result['email'];
			$_SESSION['created_at'] = $result['created_at'];
			$_SESSION['picture'] = $result['picture'];
			return true;
		}else{
			return false;
		}
	}

	function remenberConnection($db, $key){
		//Requête SQL
		$sql = "SELECT * FROM users WHERE `key` = '$key'";
		$req = $db->prepare($sql);
		$req->execute();
		$result = $req->fetch(PDO::FETCH_ASSOC);
		//var_dump($req);
		//Si le fetch réussi, alors un résultat a été retourné donc le couple email / password est correct
		if($result == true){
			//on définit la SESSION
			$_SESSION['id'] = $result['id'];
			$_SESSION['username'] = $result['username'];
			$_SESSION['email'] = $result['email'];
			$_SESSION['created_at'] = $result['created_at'];
			$_SESSION['picture'] = $result['picture'];
			setcookie("iibridgem",$key,time() + 2678400, null, null, false, true);
			return true;
		}else{
			return false;
		}
	}


		/*1.3!selectTweets
			return :
				list of tweets in array
			$db -> 				database object
		*/
	function selectArticles($db){
		try{
			$sql = "SELECT * FROM articles ORDER BY created_at DESC";
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

	function selectUserArticles($db, $id){
		try{
			$sql = "SELECT * FROM articles WHERE user_id = $id ORDER BY created_at DESC";
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

	function selectArticleComments($db, $id){
		try{
			$sql = "SELECT * FROM comments WHERE article_id = $id ORDER BY created_at DESC";
			$req = $db->prepare($sql);
			$req->execute();
			$result = $req->fetchAll(PDO::FETCH_ASSOC);
			//comments array and foreach addition
			$comments = array();
			foreach ($result as $fuck) {
				$id = $fuck['id'];
				$fuck['childs'] = array();
				$comments[$id] = $fuck;
			}
			foreach ($comments as $k => &$v) {
			  	if ($v['parent'] != 0) {
			    	$comments[$v['parent']]['childs'][] =& $v;
			  	}
			}
			unset($v);
			// delete the childs comments from the top level
			foreach ($comments as $k => $v) {
			  	if ($v['parent'] != 0) {
			    	unset($comments[$k]);
			  	}
			}
			return $comments;
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