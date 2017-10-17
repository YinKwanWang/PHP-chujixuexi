<?php  

   # oop 面向对象简称
   # 创建一个类  修饰符（能见度）  public 在外面可以访问  protected在外部不能访问 子类和本类可以访问
   class Person{
   	    protected $name; # private私有的在外面是访问不到的
   	    private $email;
        # 静态变量
        private static $age = 40;
        public static function getAge(){
        	return Person::$age;
        }
   	    public function setName($sbqname){# 方法
              $this->name = $sbqname;
   	    }
   	    public function getName(){# 改变私有为课访问 
   	    	return $this->name;
   	    }

   	    public function setEmail($email){
   	    	$this->email = $email;
   	    }
   	    public function getEmail(){
   	    	return $this->email;
   	    }

   	    # 构造函数 实例化对象 就不用向上面的那么麻烦
   	   public function  __construct($name="Henry",$email="henry@gmail.com"){
   	    	$this->name = $name;
   	    	$this->email = $email;
   	    	# echo "Person 对象已被创建";
   	    	echo __Class__."对象已被创建";
   	    }

   	    # 析构函数 当对象在消失之前调用的函数
   	    public function __destruct(){
   	    	echo __Class__."对象已被销毁";
   	    }
   }

   # $person1 = new Person;
   // $person1->name = "Gaochao";
   // echo $person1->name;
   # $person1->setName('小忱');
   /*echo $person1->getName();
   echo "<br>";
   $person1->setEmail('549574268@qq.com');
   echo $person1->getEmail();*/

   // $person1 = new Person("mg天佑","mj@gmail.com");
   // echo $person1->getName();

   # 继承
   /**
   * 
   */
   class Customers extends Person{
   	    private $salary;
   	    public function setSalary($salary){
   	    	$this->salery = $salary;
   	    }
   	    public function getSalary(){
   	    	return $this->salary;
   	    }
   	    # 重写构造函数

   	    public function setName($name){
              $this->name = $name;
   	    }
   	    public function __construct($name,$email,$salary){
   	    	    # 调用父级 方法 parent::
                parent::__construct($name,$email);
                $this->salary=$salary;
   	    }
   }
   $customer = new Customers("Bucky","bucky@gmail.com",3000);
   // $customer->setSalary(3000);
   /*echo $customer->getSalary();
   echo $customer->getName();
   echo $customer->getEmail();*/
   $customer->setName("Henry");
   // $costomer->getName();
   echo $customer->name;

   # 调用静态变量
   # echo Person::$age;
   echo Person::getAge();
?>