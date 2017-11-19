<?php

class model {
    protected $tableName;
    public function save()
    {
        if ($this->id == '') {
            $sql = $this->insert();
        } else {
            $sql = $this->update();
        }
    }
    private function insert() {
        $modelName1=static::$modelName;
        $tableName = $modelName1::tableName();
        $this->id=12;
        $array = get_object_vars($this);
        array_pop($array);
        $columnString = array_keys($array);
        $columnString1=implode(',', $columnString);
        $valueString = "'".implode("','", $array)."'";
        $sql= 'INSERT INTO '.$tableName.' ('.$columnString1.')'.' VALUES '.'('.$valueString.')';
        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);
        $statement->execute();
        echo 'I just saved record id = ' . $this->id.'<br>';
    }
    private function update() {
       
    }
    public function delete() {
       
    }
    
}

?>