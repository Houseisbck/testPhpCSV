<?php

class IndexRepository extends Repository
{
    public function getAllProducts()
    {
        $result = [];
        $sql    = "SELECT * FROM products";
        $stmt   = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }

    public function addFromCSV($data)
    {
        $sql = "
            INSERT INTO products(
             code,  
             name, 
             level_1, 
             level_2,
             level_3,
             price,
             price_sp,
             property_fields, 
             joint_purchases, 
             unit, 
             image,
             output_on_main,
             description
        ) 
        VALUES(
             :code,  
             :name, 
             :level_1, 
             :level_2,
             :level_3,
             :price,
             :price_sp,
             :property_fields, 
             :joint_purchases, 
             :unit, 
             :image,
             :output_on_main,
             :description
        )";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":code", $data[0] ?? null, PDO::PARAM_STR);
        $stmt->bindValue(":name", $data[1] ?? null, PDO::PARAM_STR);
        $stmt->bindValue(":level_1", $data[2] ?? null, PDO::PARAM_STR);
        $stmt->bindValue(":level_2", $data[3] ?? null, PDO::PARAM_STR);
        $stmt->bindValue(":level_3", $data[4] ?? null, PDO::PARAM_STR);
        $stmt->bindValue(":price", $data[5] ?? null, PDO::PARAM_STR);
        $stmt->bindValue(":price_sp", $data[6] ?? null, PDO::PARAM_STR);
        $stmt->bindValue(":property_fields", $data[7] ?? null, PDO::PARAM_STR);
        $stmt->bindValue(":joint_purchases", $data[8] ?? null, PDO::PARAM_STR);
        $stmt->bindValue(":unit", $data[10] ?? null, PDO::PARAM_STR);
        $stmt->bindValue(":image", $data[11] ?? null, PDO::PARAM_STR);
        $stmt->bindValue(":output_on_main", $data[12] ?? null, PDO::PARAM_STR);
        $stmt->bindValue(":description", $data[13] ?? null, PDO::PARAM_STR);

        $stmt->execute();
    }
}