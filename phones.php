 <?php
 function phones_all($link){
    // Формируем запрос
        $query = "SELECT * FROM phones ORDER BY id DESC";
        $result = mysqli_query($link, $query);
        
        if(!$result)
            die(mysqli_error($link));
        
    // Извлекаем данные
        $n = mysqli_num_rows($result);
        $phones = array();
        
        for ($i = 0; $i < $n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $phones[] = $row;
        }
        
        return $phones;
    }
	
	function phone_get($link, $id_phone){
        $query = sprintf("SELECT * FROM phones WHERE id=%d", (int)$id_phone);
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        $phone = mysqli_fetch_assoc($result);
        
        return $phone;
    }
