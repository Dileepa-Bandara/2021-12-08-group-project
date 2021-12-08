<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/nexgen-final/assets/config.php';





class Auth extends Database
{
    //register new employee

    // public function registerAuthEmployee($username, $password, $position)
    // {
    //     $sql = "INSERT INTO employee(username,password,position,isDelete) VALUES (:username,:pass,:position,:isDelete)";
    //     $statement = $this->conn->prepare($sql);
    //     $statement->execute(['username' => $username, 'pass' => $password, 'position' => $position, 'isDelete' => 1]);
    //     return true;
    // }

    //check user already registered employee
    // public function userExistEmployee($username)
    // {
    //     $sql = "SELECT username FROM employee WHERE username = :username";
    //     $statement = $this->conn->prepare($sql);
    //     $statement->execute(['username' => $username]);
    //     $result =      $statement->fetch(PDO::FETCH_ASSOC);
    //     return $result;
    // }

    //login user
    public function loginEmployee($email)
    {
        $sql = "SELECT * FROM candidate WHERE email = :email ";
        $statement = $this->conn->prepare($sql);
        $statement->execute(['email' => $email]);
        $result =      $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


    //Manager Registration quaries
    public function registerAuthManager($name, $gender, $userRole, $department, $mobile, $address, $email, $hpass, $nic)
    {
        $sql = "INSERT INTO managerreg(name, gender, userRole, department, mobile, address, email, nic,password,isDelete) VALUES (:name, :gender, :userRole, :department, :mobile, :address, :email,:nic, :password,:isDelete)";
        $statement = $this->conn->prepare($sql);
        $statement->execute(['name' => $name, 'gender' => $gender, 'userRole' => $userRole, 'department' => $department, 'mobile' => $mobile, 'address' => $address, 'email' => $email, 'nic' => $nic, 'password' => $hpass, 'isDelete' => 1]);
        return true;
    }

    //check user already registered employee
    public function userExistManager($email)
    {
        $sql = "SELECT email FROM managerreg WHERE email = :email";
        $statement = $this->conn->prepare($sql);
        $statement->execute(['email' => $email]);
        $result =      $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    //login user
    public function loginManager($email)
    {
        $sql = "SELECT * FROM managerreg WHERE email= :email";
        $statement = $this->conn->prepare($sql);
        $statement->execute(['email' => $email]);
        $result =      $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    //insert feedback
    public function insertFeedback($uid,  $first,  $last,   $issue,  $suggestions,    $workstyle, $feedback)
    {
        $sql = "INSERT INTO feedback(uid, first, last, issue, suggestions, workstyle, feedback) VALUES (:uid, :first, :last, :issue, :suggestions, :workstyle, :feedback)";
        $statement = $this->conn->prepare($sql);
        $statement->execute(['uid' => $uid, 'first' => $first, 'last' => $last, 'issue' => $issue, 'suggestions' => $suggestions, 'workstyle' => $workstyle, 'feedback' => $feedback]);
        return true;
    }

    public function showFeedbacks($uid)
    {
        $sql = "SELECT * FROM feedback WHERE uid= :uid";
        $statement = $this->conn->prepare($sql);
        $statement->execute(['uid' => $uid]);
        $row =      $statement->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
}
