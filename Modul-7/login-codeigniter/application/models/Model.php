<?php

class Model extends CI_Model
{
    public function getUsername($username)
    {
        return $this->db->get_where('user', ['username' => $username])->row_array();
    }
    public function isLoginSessionExpired()
    {
        $login_session_duration = 500;
        $current_time = time();
        if (isset($_SESSION['loggedin_time']) and isset($_SESSION['username'])) {
            if ((time() - $this->session->userdata('loggedin_time')) > $login_session_duration) {
                return true;
            }
        }
        return false;
    }
    public function getArtikelAll()
    {
        $this->db->order_by('id_artikel', 'desc');
        return $this->db->get('artikel');
    }
    public function getArtikelUser($id)
    {
        $this->db->order_by('id_artikel', 'desc');
        return $this->db->get_where('artikel', ['id_pengarang' => $id]);
    }
    public function buatArtikel($data)
    {
        return $this->db->insert('artikel', $data);
    }
    public function getArtikel($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function ubahArtikel($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapusArtikel($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
