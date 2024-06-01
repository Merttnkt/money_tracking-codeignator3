<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin/index');
    }


    public function kategori()
    {
        $this->load->view('admin/kategori');
    
    }

    public function kategoriekle()
    {
        if(isPost()){
            $data=[ 'kategori' => postvalue('kategori')];
            harcama::insert($data);
            $this->load->view('admin/kategori');
        }
        
        $this->load->view('admin/kategoriekle');
    }



    public function kategorisil($id)
    {
        harcama::delete($id);
        $this->load->view('admin/kategori');
    }

    public function gunluk()
    {
        $this->load->view('admin/gunluk');
    
    }

    public function gunluksil($id)
    {
        harcama::delete($id);
        $this->load->view('admin/gunluk');
    }

    public function gunlukduzenle($id)
    {
        $data['harcama'] = harcama::find($id);
        if (isPost()) {
            $data = ['date' => postvalue('date'), 'kategori' => postvalue('kategori'), 'tutar' => postvalue('tutar'), 'adi' => postvalue('adi')];
            harcama::update($id,$data);
            redirect('admin/gunluk');
        }

       
        $this->load->view('admin/gunlukduzenle',$data);

    }

}
