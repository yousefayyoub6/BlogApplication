<?php

namespace App\Traits;

trait Toastr {
    public function AddToastr()
    {
        toastr()->success('Add Successfully');
    }

    public function UpdateToastr()
    {
        toastr()->success('Updated Successfully');
    }

    public function ErrorToastr()
    {

        toastr()->error('Error');
    }

    public function DeleteToastr()
    {

        toastr()->success('Deleted Successfully');
    }


    public function Error($error)
    {

        toastr()->error($error);
    }
}
