<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

class SlideController extends Controller
{
    // 登録処理
    public function register(Request $request){
      // getの場合フォームを表示
      if($request -> isMethod("get")){
        $slides = Slide::all();
        return view('slide/register',compact('slides'));
      // postの場合データベースへ登録
      } else {
        $slide = new Slide();
        $slide->title = $request->title;
        $slide->description = $request->description;
        $filename = $request->file('src')->store('public');
        $filename = str_replace('public/', '', $filename);
        $slide->src = $filename;
        $slide->save();
        $slides = Slide::all();
        return view('slide/register',compact('slides'));
      }
    }
    // 更新処理
    public function update(Request $request){
      $slide = Slide::findOrFail($request->id); // IDに基づいて対象のレコードを取得
      $slide->title = $request->title;
      $slide->description = $request->description;
      if($request->file('src') != null){
        $filename = $request->file('src')->store('public');
        $filename = str_replace('public/', '', $filename);
        $slide->src = $filename;
      };
      $slide->save();
      $slides = Slide::all();
      return view('slide/register',compact('slides'));
    }
    // 一覧表示
    public function index(){
      $slides = Slide::all();
      return view('slide/index',compact('slides'));
    }
    // スライドショー
    public function show(){
      $slides = Slide::all();
      return view('slide/show',compact('slides'));
    }
}
