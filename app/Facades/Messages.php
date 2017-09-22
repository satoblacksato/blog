<?php

namespace App\Facades;



use Alert;

class Messages {

    public function  message($data,$type){
        return session()->flash('alertmanager',compact('data','type'));
    }


	public  function errorRegisterCustom( $data){
        $type='danger';
        return session()->flash('alertmanager',compact('data','type'));
	}

	public  function warningRegisterCustom( $data){
        $type='warning';
        return session()->flash('alertmanager',compact('data','type'));
	}

	public  function infoRegisterCustom( $data){
        $type='success';
        return session()->flash('alertmanager',compact('data','type'));
	}

    public function render(){
        if(session('alertmanager')){
            return view()->make('components.alertmanager',session('alertmanager'));
        }
    }
}