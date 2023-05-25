<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main(){
        return view('main');
    }
    public function PO(){
        return view('PO');
    }
    public function PO_add(){
        return view('PO/add');
    }
    public function PO_added(Request $request){
        dd($request);
    }
    public function PO_edit(){
        return view('PO/edit');
    }
    public function PO_edited(Request $request){
        dd($request);
    }
    public function PO_list(){
        return view('PO/list');
    }
    public function identify(){
        return view('identify');
    }
    public function identify_file(){
        return view('identify/file');
    }
    public function identify_file_add(Request $request){
        dd($request);
    }
    public function identify_folder(){
        return view('identify/folder');
    }
    public function identify_folder_add(Request $request){
        dd($request);
    }
    public function identify_registry(){
        return view('identify/registry');
    }
    public function identify_registry_add(Request $request){
        dd($request);
    }
    public function trace(){
        return view('trace');
    }
    public function trace_add(){
        return view('trace/add');
    }
    public function trace_added(Request $request){
        dd($request);
    }
    public function trace_load(){
        return view('trace/load');
    }
    public function trace_load_folder(Request $request){
        dd($request);
    }
    public function trace_load_shot(Request $request){
        dd($request);
    }
    public function trace_search(){
        return view('trace/search');
    }
    public function trace_searched(Request $request){
        dd($request);
    }
}
