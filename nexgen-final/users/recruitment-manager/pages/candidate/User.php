<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/nexgen-final/assets/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . "/nexgen-final/assets/mailer/Exception.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/nexgen-final/assets/mailer/PHPMailer.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/nexgen-final/assets/mailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMP;


class User extends Database
{
	public $email;
	public $password;
	public $cpassword;
	public $userRole;
	public $hpass;
	public $errors;

	public function sentUserMail()
	{
		$message = "Record Modified Successfully";


		$mail = new PHPMailer();

		$mail->isSMTP();
		$mail->Host = "smtp.gmail.com";
		$mail->SMTPAuth = "true";
		$mail->SMTPSecure = "tls";
		$mail->Port = "587";
		$mail->Username = "nexgenhrm123@gmail.com";
		$mail->Password = "next1234";
		$mail->setFrom("nexgenhrm123@gmail.com", "NexHRM");
		$mail->isHTML(true);
		$mail->Subject = "Employee Registration";
		//reciever email(candidate shoulr rgister with this email)
		$ManagerEmail = "reciever email";
		$mail->Body = "Your user email is " . $this->email . " and Password is " . $this->password;
		$mail->addAddress($ManagerEmail);
		$mailstatus = $mail->send();
		$mail->smtpClose();
		return $mailstatus;
	}

	public function getUser($id)
	{
		$sql = "SELECT * FROM users WHERE id = :id";
		$statement = $this->conn->prepare($sql);
		$statement->execute(['id' => $id]);
		$result =      $statement->fetch(PDO::FETCH_ASSOC);
		return $result;
	}

	public function getUserByEmail($email)
	{
		$sql = "SELECT * FROM candidate WHERE email = :email";
		$statement = $this->conn->prepare($sql);
		$statement->execute(['email' => $email]);
		$result =      $statement->fetch(PDO::FETCH_ASSOC);
		return $result;
	}

	public function addUser($data)
	{
		foreach ($data as $name => $attribute) {
			if (property_exists($this, $name)) {
				$this->$name = $attribute;
			}
		}


		if ($this->validateUser()) {

			$statement = $this->conn->prepare('UPDATE candidate set password= :password, userRole= :userRole WHERE email= :email');


			$result = $statement->execute([
				'password' => password_hash($this->password, PASSWORD_DEFAULT),
				'userRole' => "employee",
				'email' => $this->email
			]);

			//header("Location: ../employee/adduser.php");

		} else {
			return $this->errors;
		}
	}


	public function searchUser($data = [])
	{
		foreach ($data as $name => $attribute) {
			if (property_exists($this, $name)) {
				$this->$name = $attribute;
			}
		}
		$statement = $this->conn->prepare('SELECT * from users WHERE username =:username');

		$result = $statement->execute(['username' => '%' . $this->username . '%']);

		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}


	public function validateUser()
	{
		$this->errors = [];

		if (!$this->getUserByEmail($this->email)) {
			$this->errors["email"] = "Entered email is not matching with the email employee entered in the job application form";
		}

		if (strlen($this->password) < 6) {
			$this->errors["password"] = "Password must be minimum of 6 characters";
		}

		if (($this->password) != ($this->cpassword)) {
			$this->errors["cpassword"] = "Password and Confirm Password doesn't match";
		}

		return !count($this->errors);
	}
}
