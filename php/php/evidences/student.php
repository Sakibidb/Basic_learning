<?php 
    class Student {
        public $id;
        public $name;
        public $batch;
        public $data;
        public function __construct($x){
            $this->data = file($x);   
        }       
        public function result($id){
            foreach($this->data as $line){
              list($stid) =  explode("," , $line);
                if($stid == $id){
                    echo $line;
                }
            }
        }
    }
   //$st = new Student('result.txt'); 
   //$st->result(3);   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Student result</h2>
    <?php 
        if(isset($_POST['submit'])){
          //print_r($_POST);
          $myid = $_POST['id'];
          $st = new Student('result.txt'); 
          $st->result($myid);    
        }
    ?>
    <form action="" method="post">
        <input type="text" name="id"><br>
        <input type="submit" name="submit" value="RESULT">
    </form>
</body>
</html>