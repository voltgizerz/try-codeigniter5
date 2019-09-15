<?php defined('BASEPATH') or exit('No direct script access allowed');
class Buku_model extends CI_Model
{
    private $_table = "buku";
    protected $table = 'buku';
    public $id;
    public $nama_buku;
    public $pengarang;
    public $jumlah_halaman;
    public $penerbit;
    public $tahun_terbit;
    public $kategori_buku;
    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'field' => 'pengarang',
                'field' => 'penerbit',
                'label' => 'nama',
                'label' => 'pengarang',
                'label' => 'penerbit',
                'rules' => 'required'
            ]
        ];
    }
    public function getAll()
    {
        return $this->db->get('buku')->result();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->nama_buku = $post["nama"];
        $this->pengarang = $post["pengarang"];
        $this->jumlah_halaman = $post["halaman"];
        $this->penerbit = $post["penerbit"];
        $this->tahun_terbit = $post["tahun"];
        $this->kategori_buku = $post["kategori"];
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

    public function get_buku($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        return $query->result();
    }
}
