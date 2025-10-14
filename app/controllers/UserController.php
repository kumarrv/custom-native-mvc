<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../core/traits/ApiResponseTrait.php';
require_once __DIR__ . '/../models/User.php';

class UserController extends Controller
{
    use ApiResponseTrait;
    private User $userModel;

    public function __construct(Database $db)
    {
        parent::__construct($db); // optional if parent has __construct
        $this->userModel = new User($db); // initialize user model properly
    }

    public function index(): void
    {
        $users = $this->userModel->getAllUsers();
        $this->view('users/index', ['users' => $users, 'title' => 'Products (demo)']);

    }
    
}
