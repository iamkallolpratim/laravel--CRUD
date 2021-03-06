<?php
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends BaseController
{

   
	protected $layout = "layouts.admin";
	
    
    public function getIndex ()
    {
        if (Auth::check() ) {
            $this->layout->content = View::make('admin.index');
        } else {
            return Redirect::to('/');
        }
    }
    public function getView ()
    {
    	if (Auth::check()) {
    		$this->layout->content = View::make('admin.view_contacts');
    	} else {
    		return Redirect::to('/');
    	}
    }

   
}
