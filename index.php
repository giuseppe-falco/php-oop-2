<!-- Esercizio di oggi: OOP Ereditarietà
repo: php-oop-2 -->
<!-- oggi provate ad estendere la classe che avete fatto ieri per gli User, creare degli oggetti con questa classe figlia e a stampare i dati in una tabella html -->



<?php
    class User {
        public $name;
        public $surname;
        public $email;
        public $age;
        public $discount = 0;

        //construct
        public function __construct($name, $surname, $email, $age) {
            $this -> name = $name;
            $this -> surname = $surname;
            $this -> email = $email;
            $this -> age = $age;
            
            //check age for discount
            if ($age > 65) {
                $this -> discount = 40;
            } 
        }

     
    }

    class Employee extends User 
    {
        public $livello = null;

        public function setLivello($livello)
        {
            $this -> livello = $livello;
        
            if ($livello > 2)
            {
                $this -> discount = 60;
            }
        }
    }

    $user1 = new User("giuseppe", "falco", "giuseppe@gmail.com", 20);
    $user2 = new User("gausilbg", "gas", "giuseppe@gmail.com", 70);
    
    // var_dump($user1);
    
    $user3 = new Employee("vzbz", "falco", "giuseppe@gmail.com", 66);
    $user3 -> setLivello(4);
    
    $user4 = new Employee("vasdjbhkgvzbz", "fdhabsdfhjsf", "shvackujfbs@gmail.com", 21);

    $users = [$user1, $user2, $user3, $user4];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>surname</th>
                <th>email</th>
                <th>age</th>
                <th>discount</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user){ ?>
                <tr>
                    <td><?php echo $user -> name ?></td>
                    <td><?php echo $user -> surname ?></td>
                    <td><?php echo $user -> email ?></td>
                    <td><?php echo $user -> age ?></td>
                    <td><?php echo $user -> discount ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>
