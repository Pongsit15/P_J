<?php
class Database {
  private $host;
  private $username;
  private $password;
  private $database;
  private $conn;

  public function __construct($host, $username, $password, $database) {
    $this->host = $host;
    $this->username = $username;
    $this->password = $password;
    $this->database = $database;
    $this->connect();
  }

  private function connect() {
    $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
  }

  public function getUserRole($username, $password) {
    $sql = "SELECT role FROM users WHERE username = '$username' AND password = '$password'";
    $result = $this->conn->query($sql);
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row['role'];
    } else {
      return false;
    }
  }

  public function closeConnection() {
    $this->conn->close();
  }
}

// สร้างอ็อบเจ็กต์ของคลาส Database
$database = new Database("localhost", "username", "password", "database_name");

// ตรวจสอบล็อกอิน
$username = $_POST['username'];
$password = $_POST['password'];
$role = $database->getUserRole($username, $password);

if ($role === 'employee') {
  // กระทำเมื่อเป็นพนักงาน
  echo "Welcome, Employee!";
} elseif ($role === 'administrator') {
  // กระทำเมื่อเป็นผู้ดูแลระบบ
  echo "Welcome, Administrator!";
} elseif ($role === 'manager') {
  // กระทำเมื่อเป็นผู้บริหาร
  echo "Welcome, Manager!";
} else {
  // ไม่สามารถล็อกอินได้
  echo "Invalid username or password.";
}

// ปิดการเชื่อมต่อ
$database->closeConnection();
?>