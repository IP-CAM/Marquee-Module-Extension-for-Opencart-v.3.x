<?php

class ModelDesignMovingText extends Model
{

    public function get()
    {

        $data = $this->db->query("SELECT * FROM ".DB_PREFIX."moving_text");

        return $data->rows;

    }

    public function update($data)
    {

        foreach ($data as $customer_type => $customer_data) {

            $this->db->query("UPDATE ".DB_PREFIX."moving_text SET 
            text   = '" . $this->db->escape($data[$customer_type]['text']) . "',
            status = '" . $this->db->escape($data[$customer_type]['status']) . "'
            WHERE
            customer_type = '" . $this->db->escape($customer_type) . "'");

        }

    }
    
}



?>