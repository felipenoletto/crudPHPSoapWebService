<?php

	include("../config/config.php");

	class Model {

		public function insert($name, $email) {

			try {
				$sql = "INSERT INTO users(name, email) VALUES(:name, :email)";
				$stmt = DB::prepare($sql);
				$stmt->bindParam(":name", $name, PDO::PARAM_STR);
				$stmt->bindParam(":email", $email, PDO::PARAM_STR);

				return $stmt->execute();

			} catch(PDOException $e) {
				echo $e->getMessage();
			}

		}

		public function update($id, $name, $email) {

			try {
				$sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
				$stmt = DB::prepare($sql);
				$stmt->bindParam(":name", $name, PDO::PARAM_STR);
				$stmt->bindParam(":email", $email, PDO::PARAM_STR);
				$stmt->bindParam(":id", $id, PDO::PARAM_INT);

				return $stmt->execute();

			} catch(PDOException $e) {
				echo $e->getMessage();
			}

		}

		public function listAll() {

			try {
				$sql = "SELECT id, name, email FROM users";
				$stmt = DB::prepare($sql);
				$stmt->execute();

				return $stmt->fetchAll();

			} catch(PDOException $e) {
				echo $e->getMessage();
			}

		}

		public function listById($id) {

			try {
				$sql = "SELECT name, email FROM users WHERE id = :id";
				$stmt = DB::prepare($sql);
				$stmt->bindParam(":id", $id, PDO::PARAM_INT);
				$stmt->execute();

				return $stmt->fetch();

			} catch(PDOException $e) {
				echo $e->getMessage();
			}

		}

		public function delete($id) {

			try {
				$sql = "DELETE FROM users WHERE id = :id";
				$stmt = DB::prepare($sql);
				$stmt->bindParam(":id", $id, PDO::PARAM_INT);

				return $stmt->execute();

			} catch(PDOException $e) {
				echo $e->getMessage();
			}

		}

	}
?>