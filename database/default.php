<?php

function prepareData($pdo, $dataToDb){
    createTable($pdo);
    setData($pdo, $dataToDb);
}
function createTable($pdo){
    $pdo->query('CREATE TABLE IF NOT EXISTS `kovpakiv_portfol`.`about` 
      ( `title` VARCHAR(255) NOT NULL , `description` TEXT NOT NULL , `image` 
      VARCHAR(255) NOT NULL , `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ) ENGINE = InnoDB;'
    );
}

function setData($pdo, $data){
    $posts = $pdo->query('SELECT * from about')->fetchAll(\PDO::FETCH_ASSOC);

    if(count($posts) >=2){
        return;
    }

    foreach ($data as $post){
        $queryString = 'INSERT INTO `about` (`title`, `description`, `image`, `date`) VALUES 
            ('
                ."'".$post['title']."',"
                ."'".$post['description']."',"
                ."'".$post['image']."',"
                . 'CURRENT_TIMESTAMP'
            .')';
        $pdo->query($queryString);
    }
}



