S - Single Responsibility Principle

A class should has one and only reason to change.

<?php
class User
{
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
}

class UserResponsibility
{
    public function save()
    {
        echo "User Saved successfully \n";
    }
}

class EmailService
{
    public function sendEmail($email, $message)
    {
        echo "Email Sent successfully" . $email . " " . $message . "\n";
    }
}


$user = new User("testUser", "testuser@test.com");

$userResponse = new UserResponsibility();
$userResponse->save();

$userEmailService = new EmailService();
$userEmailService->sendEmail($user->getEmail(), "Testing message");
