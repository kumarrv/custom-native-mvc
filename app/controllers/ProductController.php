<?php
require_once __DIR__.'/../core/Controller.php';
require_once __DIR__.'/../core/traits/ApiResponseTrait.php';
require_once __DIR__.'/../models/User.php';
class ProductController extends Controller{
    use ApiResponseTrait;
    private User $userModel;

    public function __construct(Database $db){
        parent::__construct($db);
        $this->userModel = new User($db);
    }
     public function index(): void
    {
        echo "<h1 style='color:red'>Products Controller</h1>";
    }
}