<?php
require_once 'connection.php';

if(isset($_GET['user']) && isset($_GET['password'])){
    if(($_GET['user'] == "youcode") && ($_GET['password'] == "youcode-talend2021" )){
        $sql = "SELECT * FROM votes";
        $stmt= $pdo->prepare($sql);
        if($stmt->execute()){
            $data = $stmt->fetchAll();
            $votes = (object)[];
            $votes->total = count($data);
            $votes->logo1 = (object)[];
            $votes->logo1->totalVotes = 0;
            $votes->logo1->percent = 0;
            
            $votes->logo2 = (object)[];
            $votes->logo2->totalVotes = 0;
            $votes->logo2->percent = 0;
            
            $votes->logo3 = (object)[];
            $votes->logo3->totalVotes = 0;
            $votes->logo3->percent = 0;
            
            for($i=0;$i<$votes->total;$i++){
                switch ($data[$i]['vote']) {
                    case '1':
                        $votes->logo1->totalVotes++;
                        break;
                    case '2':
                        $votes->logo2->totalVotes++;
                        break;
                    case '3':
                        $votes->logo3->totalVotes++;
                        break;
                }
            }
            
            if($votes->total > 0){$votes->logo1->percent = ($votes->logo1->totalVotes / $votes->total)*100;}else{$votes->logo1->percent = 0;}
            if($votes->total > 0){$votes->logo2->percent = ($votes->logo2->totalVotes / $votes->total)*100;}else{$votes->logo1->percent = 0;}
            if($votes->total > 0){$votes->logo3->percent = ($votes->logo3->totalVotes / $votes->total)*100;}else{$votes->logo1->percent = 0;}
            // print_r($votes);
        }
    }else{
        echo "You don't have access to this page!";
        die();
    }
}else{
    echo "You don't have access to this page!";
    die();
}