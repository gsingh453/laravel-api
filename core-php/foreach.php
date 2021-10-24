<?php
        //Enter your code here, enjoy!


function getinternalaccountnumber($accountlist, $oneaccount)
{
    foreach($accountlist as $index => $account)
    {
        if($account == $oneaccount)
        {
            return true;
        }
        return false;
    }
}

 function internalaccount()
{
    $source_account = ['bsb' => '12345', 'account_number' => '232312345'];

    $array = [
        '1' => '232312345',
        '2' => '98765432',
        ];
        
        $from_account = getinternalaccountnumber($array, $source_account['account_number']);
        echo "testing".$from_account;
}

internalaccount();

?>
  




         