<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../core/traits/ApiResponseTrait.php';
require_once __DIR__ . '/../models/User.php';

class HomeController extends Controller
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
        // Now $userModel is ready to use
        $users = $this->userModel->getAllUsers();
        echo "Hello Home — Users loaded successfully!<br>";
        echo "<pre>";
        print_r($users);
        echo "</pre>";
    }
}
