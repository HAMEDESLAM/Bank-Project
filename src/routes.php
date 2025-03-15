<?php

session_start();
header("Content-Type: application/json");
require_once 'database.php';
require_once 'user.php';

$user = new User();
$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', trim(str_replace('/user/', '', $uri), '/'));

try {
    switch ($uri[0] ?? '') {
        case 'register':
            if ($method !== 'POST') {
                throw new Exception("Invalid request method", 405);
            }

            $input = file_get_contents("php://input");

            $data = json_decode($input,true);
            if (!$data) {
                throw new Exception($data, 400);
            }
            if ($user->findByUsername($data['fullname'])) {
                throw new Exception("الحساب متواجد بالفعل", 409);
            }

            $user->createUser($data['fullname'], $data['birthDate'], $data['nationalId'], $data['address'], $data['phoneNumber'], $data['email'], $data['password']);
            
            // updating session
            $_SESSION['user'] = $data;

            echo json_encode(["message" => "User registered successfully"]);
            break;

        case 'login':
            if ($method !== 'POST') {
                throw new Exception("Invalid request method", 405);
            }

            $data = json_decode(file_get_contents("php://input"), true);

            if (empty($data['username']) || empty($data['password'])) {
                throw new Exception("User Name and password are required", 400);
            }

            $foundUser = $user->findByUsername($data['username']);

            if (!$foundUser || !password_verify($data['password'], $foundUser['password'])) {
                throw new Exception("اسم المستخدم او كلمة المرور غير صحيحه", 401);
            }
            
            // updating session
            $_SESSION['user'] = $foundUser;

            echo json_encode(["message" => "Login successful"]);
            break;

        case 'update':
            if ($method !== 'PUT') {
                throw new Exception("Invalid request method", 405);
            }
            if (!isset($_SESSION['user'])) {
                throw new Exception("Unauthorized", 401);
            }

            $data = json_decode(file_get_contents("php://input"), true);
            if (empty($data['email']) || empty($data['phoneNumber'])) {
                throw new Exception("Fullname and phone number are required", 400);
            }

            $user->updateUser($data['email'], $data['phoneNumber'], $_SESSION['user']['fullname']);

            $_SESSION['user'] = $user->findByUsername($_SESSION['user']['fullname']);
            
            echo json_encode(["message" => "User updated successfully","user" => ["phoneNumber" => $_SESSION['user']["phoneNumber"], "email" => $_SESSION['user']["email"]]]);
            break;

        case 'logout':
            if ($method !== 'POST') {
                throw new Exception("Invalid request method", 405);
            }
            session_unset();
            session_destroy();
            echo json_encode(["message" => "Logout successful"]);
            break;

        case 'profile':
            $foundUser = $user->findByUsername($_SESSION['user']["fullname"]);
            if (!isset($_SESSION['user']) || !$foundUser) {
                session_unset();
                session_destroy();
                throw new Exception("Unauthorized", 401);
            }
            $_SESSION['user'] = $foundUser; 
            echo json_encode(["user" => $_SESSION['user']]);
            break;
        default:
            throw new Exception("Not Found", 404);
    }
} catch (Exception $e) {
    http_response_code($e->getCode());
    echo json_encode(["message"  => $e->getMessage()]);
}

?>
