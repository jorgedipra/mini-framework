<?php
/**
 * PhpToolCase
 * Page:http://phptoolcase.com/api/0.9.2/query_builder.html
 */
use PHPMailer\PHPMailer\PHPMailer;

class Landing__Controller extends Controller
{

    public function home($id = '', $var = '')
    {
        $curl = file_get_contents(getenv('API_BACKEND_URL'));
        $data = json_decode($curl);

        return $view = [
            'Nombre'=>'jorgedipra',
            'data' => $data,
        ];
    } ##->END function home

    public function _404($id = '', $var = '')
    {
        if ($id == true):
            echo "id [" . $id . "]";
            echo "var [" . $var . "]";
        endif;

    } //::END->_404

} ##->END class landing__Controller
