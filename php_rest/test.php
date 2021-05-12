<?php 

  class Student {
    public $name;
    public $age;
  }

  $mathClass = array();

  $stu = new Student();
  $stu -> name = "Yael";
  $stu -> age = 34;

  $mathClass[] = $stu;

  // echo $mathClass;
  var_dump($mathClass)


?>