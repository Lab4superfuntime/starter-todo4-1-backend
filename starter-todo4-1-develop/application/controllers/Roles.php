<?php
/**
 * Created by PhpStorm.
 * User: Getry
 * Date: 2017-10-19
 * Time: 3:50 PM
 */

class Roles extends Application
{

    public function actor($role = ROLE_GUEST)
    {
        $this->session->set_userdata('userrole',$role);
        redirect($_SERVER['HTTP_REFERER']); // back where we came from
    }

}