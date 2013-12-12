<?php

interface EmployeeID {

  public function employeeDepartment();
  public function employeeNumber();

} 

class Person {

  private $legal_name;
  private $preferred_name;

  public function __construct($legal_name, $preferred_name=NULL) {

    $this->legal_name = $legal_name;
    if(!is_null($preferred_name)) {
      $this->preferred_name = $preferred_name;
    } else {
      $this->preferred_name = $this->legal_name;
    }
  }

  public function getName($require_legal=FALSE) {
    if($require_legal == TRUE) {
      return $this->legal_name;
    }
    return $this->preferred_name; 
  }

  public function toEmployee($number, $department=NULL) {
    return new Employee($this->legal_name,
                        $number,
                        $department,
                        $this->preferred_name);
  }

}

class Employee extends Person implements EmployeeID {

  private $department = 'the Mail Room';
  private $employee_number;

  public function __construct($legal_name,
                              $employee_number,
                              $department=NULL,
                              $preferred_name=NULL) {
    
    $this->employee_number = $employee_number;
    $this->department = $department;

    parent::__construct($legal_name, $preferred_name);
  }

  public function employeeDepartment() {
    return $this->department; 
  }

  public function employeeNumber() {
    return $this->employee_number;
  }

}







// Remind anyone of Java yet?
// Around PHP 5.2 they decided to be less like Perl 
// and more like Java.

$person = new Person('Jonathan Martin Daniel', 'Jon');
echo "Hello, I am {$person->getName()}.\n";

$employee = $person->toEmployee("1337", "Software Development");
echo "My employee ID is {$employee->employeeNumber()} " . 
  "and I am in {$employee->employeeDepartment()}.\n";
