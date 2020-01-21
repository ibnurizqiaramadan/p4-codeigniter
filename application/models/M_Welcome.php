<?php 

class M_Welcome extends CI_Model
{
    public function get()
    {
        return 101;
    }

    public function luas($panjang, $lebar)
    {
        return $panjang * $lebar;
    }
}


?>