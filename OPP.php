<?php
class Bank{
    public function balance(){
        return 5000;
    }
    public function deposit(){
        return 50000;
    }
}

class Account extends Bank{

}

$bank =new Bank();

echo 'Balance is: '.$bank->balance();
 
?>