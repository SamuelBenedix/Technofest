<?php

function is_logged_in()
{
    $pf = get_instance();
    if (!$pf->session->userdata('email')) {
        redirect(base_url('admin/login'));
    }
}
