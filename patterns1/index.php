
<html>
    <head>
        <meta charset="UTF-8">
        <title>Singleton</title>
    </head>
    <body>
        <?php
        class Tigger {
            static $count = 0;
            private static $instance;
            private function  __construct() {
               echo "Building character..." . PHP_EOL;
            }

            public function roar() { 
               echo "Grrr!" . PHP_EOL;
               self::$count++;
                
            }
       
            protected function __clone() { }
                public function __wakeup(){
                throw new \Exception("Cannot unserialize a singleton.");
            }
            public static function getInstance(){
                if (is_null(self::$instance)) {
                    self::$instance = new Tigger();
            }

        return self::$instance;
        }
            public static function getCounter() {     
                echo Tigger::$count;
        }
        
  
   }
   
   $tigreton = Tigger::getInstance(); 
   $tigreton -> roar();
   $tigreton -> roar();
   $tigreton -> roar();
   $tigreton -> roar();
   $tigreton->getCounter();
        ?>
    </body>
</html>
