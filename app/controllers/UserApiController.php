<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../core/traits/ApiResponseTrait.php';
require_once __DIR__ . '/../models/User.php';

class UserApiController extends Controller
{
    use ApiResponseTrait;
    private User $userModel;

    public function __construct(Database $db)
    {
        parent::__construct($db);
        $this->userModel = new User($db); 
    }

    public function index(): void
    {
        $users = $this->userModel->getAllUsers();
        $this->jsonResponse(
            $users,
            $users ? 200 : 404,
            "All users returned successfully!' : 'No users found!"
        );
    }
    public function show(int $id): void
    {
        $user = $this->userModel->getUserById($id);
        $this->jsonResponse(
            $user,
            $user ? 200 : 404,
            $user ? 'User found!' : 'User not found!'
        );
    }

    public function create(array $data): void
    {
        $success = $this->userModel->createUser($data['name'], $data['email']);
        $this->jsonResponse(
            $success,
            $success ? 201 : 400,
            $success ? 'User created successfully!' : 'User creation failed!'
        );
    }

    public function delete(int $id): void
    {
        $success = $this->userModel->deleteUser($id);
        $this->jsonResponse(
            $success,
            $success ? 200 : 404,
            $success ? 'User deleted successfully!' : 'User not found!'
        );
    }
}
