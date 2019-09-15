<?php defined('BASEPATH') or exit('No direct script access allowed');
class Mahasiswa_model extends CI_Model
{
    private $_table = "data_mahasiswa";
    protected $table = 'data_mahasiswa';
    public $ID;
    public $NAMA;
    public $NPM;
    public $FAKULTAS;
    public $PRODI;
    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ]
        ];
    }
    public function getAll()
    {
        return $this->db->get('data_mahasiswa')->result();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->NAMA = $post["nama"];
        $this->NPM = $post["npm"];
        $this->FAKULTAS = $post["fakultas"];
        $this->PRODI = $post["prodi"];
        $this->db->insert($this->_table, $this);
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function get_count()
    {
        return $this->db->count_all($this->table);
    }

    public function get_mahasiswa($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        return $query->result();
    }
}
