<?php

namespace Controller;

use Model\DBConnection;
use Model\CustomerDB;
use Model\Customer;

class CustomerController
{
    public $customerDB;

    public function __construct()
    {
        $conn = new DBConnection('mysql:host=localhost;dbname=customer_manager', 'root', 'password');
        $this->customerDB = new CustomerDB($conn->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include 'View/add.php';
        } else {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];

            $customer = new Customer($name, $email, $address);
            $this->customerDB->create($customer);
            $message = "Created";
            include 'View/add.php';
        }
    }

    public function index()
    {
        $customers = $this->customerDB->getAll();
        include "View/list.php";
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $id = $_GET['id'];
            $customer = $this->customerDB->get($id);
            include "View/delete.php";
        } else {
            $id = $_POST['id'];
            $this->customerDB->delete($id);
            header("location:index.php");
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];
            $customer = $this->customerDB->get($id);
            include "View/edit.php";
        } else {
            $id = $_POST['id'];
            $customer = new Customer($_POST['name'], $_POST['email'], $_POST['address']);
            $this->customerDB->update($id, $customer);
            header('location: index.php');
        }
    }
}