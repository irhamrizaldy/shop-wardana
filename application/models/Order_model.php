<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order_model extends CI_Model
{
    public function create($order)
    {
        $this->db->insert('tbl_pembelian', $order);
        return $this->db->insert_id();
    }
}
