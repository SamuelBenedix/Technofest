<?php

class model extends CI_Model
{
    public function show_item($table)
    {
        return $this->db->get($table);
    }


    public function getMax($table = null, $field = null)
    {
        $this->db->select_max($field);
        return $this->db->get($table)->row_array($field);
    }

    public function add_items($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function deleteitem($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function getId($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function updateData($where, $data, $table)
    {
        $this->db->where($where);
        return $this->db->update($table, $data);
    }

    public function find($where, $id, $table)
    {
        $result = $this->db->where($where)
            ->limit(1)
            ->get($table);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }


    public function findProduct($data, $table)
    {
        if ($data) {
            $this->db->like($data);
        }
        return $this->db->get($table);
    }


    public function searchId($limit, $start, $where, $table)
    {
        $result = $this->db->like($where)
            ->get($table, $limit, $start);
        return $result;
    }


    public function limit($limit, $start, $table)
    {
        $this->db->limit($limit, $start);
        return $this->db->get($table);
    }

    public function getTeam($where, $table)
    {
        $this->db->order_by('st_anggota', 'asc');
        return $this->db->get_where($table, $where);
    }
}
