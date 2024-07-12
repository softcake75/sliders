<?php

namespace App\Controllers;

use App\Models\SliderModel;
use CodeIgniter\Controller;

class SliderController extends Controller
{
    public function index()
    {
        $sliderModel = new SliderModel();
        $data['sliders'] = $sliderModel->findAll();

        return view('slider/index', $data);
    }

    public function admin()
    {
        $sliderModel = new SliderModel();
        $data['sliders'] = $sliderModel->findAll();

        return view('slider/admin', $data);
    }

    public function create()
    {
        return view('slider/create');
    }

    public function store()
    {
        $sliderModel = new SliderModel();
        $file = $this->request->getFile('image');

        if ($file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move(FCPATH . 'images', $fileName);

            $data = [
                'image' => $fileName,
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
            ];

            $sliderModel->insert($data);

            return redirect()->to('/admin/slider');
        } else {
            return redirect()->back()->with('error', 'File upload failed.');
        }
    
    }
}
?>
