<?php
require 'PHPMailerAutoload.php';

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

	function deleteDocumentById($db, $id){
		try{
			$sql = "DELETE FROM document WHERE id = :id";
			$req = $db->prepare($sql);
			$req->execute(array(':id' => $id));
			$result = $req->fetchAll(PDO::FETCH_ASSOC);
			return true;
		}
		catch (PDOException $e){
			print 'Erreur PDO : '.$e->getMessage().'<br/>';
			die();
		}
	}

	function uploadDocument($db, $name, $path, $partOf){
		try{
			$sql = "INSERT INTO document SET name = :name, piece_of = :part_of, path_to = :path_to";
			$req = $db->prepare($sql);
			$req->execute(array(':name' => $name, ':part_of' => $partOf, ':path_to' => $path));
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

	function selectInformation($db, $id){
		try{
			$sql = "SELECT * FROM informations WHERE piece_of = $id LIMIT 1";
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

	function selectProjectInfos($db, $id){
		try{
			$sql = "SELECT * FROM form2 WHERE piece_of = $id LIMIT 1";
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

	function selectProjectCom($db, $id){
		try{
			$sql = "SELECT * FROM communication WHERE piece_of = $id LIMIT 1";
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