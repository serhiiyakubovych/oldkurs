<?php

    function list_all($link, $table) {
        //Запит
        $query = sprintf("SELECT * FROM %s ORDER BY id", $table);
        $result = mysqli_query($link, $query);
        
        if(!$result){
            die(mysqli_error($link));
        }
        
        //Витяжка з БД
        $num_rows = mysqli_num_rows($result); //к-ть рядків
        $services = array();
        
        for($i = 0; $i < $num_rows; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $services[] = $row;
        }
        
        return $services;
    }

    function list_get($link, $table, $id) {
        $query = sprintf("SELECT * FROM %s WHERE id=%d", $table, (int)$id);
        $result = mysqli_query($link, $query);
        
        if(!$result){
            die(mysqli_error($link));
        }
        
        $services = mysqli_fetch_assoc($result);
        
        return $services;
    }

    function list_new($link, $table, $param1, $param2, $param3) {
        $args = [];
        if ($table == "serviceslist") {
            $args = ["img_address" => $param1,
                    "title" => $param2,
                    "content" => $param3];
        }
        else if ($table === "lawyerslist") {
            $args = ["name" => $param1,
                    "position" => $param2,
                    "email" => $param3];
        }
        foreach($args as $arg) {
            if (gettype($arg) === "string") {
                $arg = trim($arg); //обрізати пусті пропуски в рядкових змінних справа і зліва
            }
        };
        if ( ( ($table === "serviceslist") && ($args['title'] == '') ) || ( ($table === "lawyerslist") && ($args['name'] === '') ) )
            return false;
        $sql = "INSERT INTO %s (%s, %s, %s) VALUES('%s', '%s', '%s')";
        $query = sprintf($sql, $table,
                         array_keys($args)[0], array_keys($args)[1], array_keys($args)[2],
                         mysqli_real_escape_string($link, $args[array_keys($args)[0]]), 
                         mysqli_real_escape_string($link, $args[array_keys($args)[1]]),
                         mysqli_real_escape_string($link, $args[array_keys($args)[2]])
                        );
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        return true;
    }

    function list_edit($link, $table, $id, $param1, $param2, $param3) {
        $id = (int)$id;
        $args = [];
        if ($table === "serviceslist") {
            $args = ["img_address" => $param1,
                    "title" => $param2,
                    "content" => $param3];
        }
        else if ($table === "lawyerslist") {
            $args = ["name" => $param1,
                    "position" => $param2,
                    "email" => $param3];
        }
        foreach($args as $arg) {
            if (gettype($arg) === "string") {
                $arg = trim($arg); //обрізати пусті пропуски в рядкових змінних справа і зліва
            }
        };
        if ( ( ($table === "serviceslist") && ($args['title'] == '') ) || ( ($table === "lawyerslist") && ($args['name'] === '') ) )
            return false;
                
        $sql = "UPDATE %s SET %s='%s', %s='%s', %s='%s' WHERE id='%d'";
        $query = sprintf($sql, $table,
                         array_keys($args)[0],
                         mysqli_real_escape_string($link, $args[array_keys($args)[0]]),
                         array_keys($args)[1],
                         mysqli_real_escape_string($link, $args[array_keys($args)[1]]),
                         array_keys($args)[2],
                         mysqli_real_escape_string($link, $args[array_keys($args)[2]]),
                         $id
                        );
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        return mysqli_affected_rows($link);
    }

    function list_delete($link, $table, $id) {
        $id = (int)$id;
        if ($id <= 0)
            return false;
        $query = sprintf("DELETE FROM %s WHERE id='%d'", $table, $id);
        $result = mysqli_query($link, $query);
        if (!$result)
            die(mysqli_error($link));
        return mysqli_affected_rows($link);
    }

?>