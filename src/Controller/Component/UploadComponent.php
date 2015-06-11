<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class UploadComponent extends Component
{

    // Execute any other additional setup for your component.
    public function initialize(array $config)
    {
    }

    public function uploadIt($field)
    {
        $dados = $this->request->data[$field];
        $filename = time() . '-' . $dados['name'];
        $uploadPath = WWW_ROOT . 'uploads' . DS . $filename;

        if(!empty($dados)) {
            if(move_uploaded_file($dados['tmp_name'], $uploadPath))
            {
                return $filename;
            }
        }

        return false;
    }

}