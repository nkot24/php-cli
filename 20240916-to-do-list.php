<?php
$taskList = ["izpildīt mājasdarbu","iet gulet laicigi"]
$continue = 'y'
do {
    echo "up\n";
    echo "avd => 1\n";
    echo "ijd => 2\n";
    echo "avu=> 3\n";
    echo "iziet =>4\n";
    $choice = readline("IZVELIES DARBIBU: ");

    switch ($choice) {
        case '1':
          for($i = 0; $i <count $taskList; $i++){
            $id=$i+1;
            echo"$id" . "$taskList[$i]";
          }
        case '2':
          echo "to be implimented\n";
          break;
        case '3':
          echo "to be implimented\n";
          break;
        case '4':
            $continue = null;
            echo "godbye";
            break;
        default:
          echo "Invalid option!\n";
      }
}
while($continue = 'y');