<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Words;
use App\Seawords;

class ToolController extends Controller
{

    public function getwords(Request $req, $text,$type,$lang,$length){
      if (!empty($text) && strlen($text) > 1) {
        if ($length != 0) {
          if ($lang == 'all') {
            if ($type == '0') {$words = Words::where('word','LIKE', $text . '%')->whereRaw('LENGTH(word) = ?', $length)->get();}
            elseif ($type == '1') {$words = Words::where('word','LIKE', '%' . $text)->whereRaw('LENGTH(word) = ?', $length)->get();}
          }else{
            if ($type == '0') {$words = Words::where('lang',$lang)->where('word','LIKE', $text . '%')->whereRaw('LENGTH(word) = ?', $length)->get();}
            elseif ($type == '1') {$words = Words::where('lang',$lang)->where('word','LIKE', '%' . $text)->whereRaw('LENGTH(word) = ?', $length)->get();}
          }
        }else{
          if ($lang == 'all') {
            if ($type == '0') {$words = Words::where('word','LIKE', $text . '%')->get();}
            elseif ($type == '1') {$words = Words::where('word','LIKE', '%' . $text)->get();}
          }else{
            if ($type == '0') {$words = Words::where('lang',$lang)->where('word','LIKE', $text . '%')->get();}
            elseif ($type == '1') {$words = Words::where('lang',$lang)->where('word','LIKE', '%' . $text)->get();}
          }
        }
        echo "<tr><td><h3 style='color:green;'>".count($words)."</h3></td><td></td></tr>";
        foreach ($words as $key => $word) {
          if ($key % 2 == 0){$even = "<tr><td>".$word['word']."</td>";}
          else{$even = '';}
          if ($key % 2 != 0){$odd = "<td>".$word['word']."</td></tr>";}
          else{$odd = '';}
          if ($key == count($words)-1){if($key % 2 == 0){$ok="<td></td>";}
          else{$ok="";}}else{$ok="";}
          echo $odd.$even.$ok;
        }
        // $pgs = ceil(count($words)/5);
        // $pg = "";
        // for ($t=1; $t < $pgs + 1; $t++) {
        //   $pg .= "<a id='pagelink".$t."' value=".$t." onclick='changeurl()'>".$t."</a>";
        // }
        // $page = "<div class='pagination'> <a href='#'>«</a>".$pg."<a href='#'>»</a></div>";
        // if ($pgs > 1) {
        //     echo $page;
        // }
        $sw_check = Seawords::where('words',$text)->where('lang',$lang)->where('type',$type)->first();
        if (empty($sw_check)) {
          $sw = new Seawords;
          $sw->words = $text;
          $sw->lang = $lang;
          $sw->type = $type;
          $sw->sum = count($words);
          $sw->save();
        }else{
          $sw = Seawords::where('id',$sw_check->id)->first();
          $sw->words = $text;
          $sw->lang = $lang;
          $sw->type = $type;
          $sw->sum = count($words);
          $sw->count += 1;
          $sw->update();
        }
      }
    }

    public function home($lang=null){
      if (!in_array($lang,['en','es','id','zh','tr','hi','az','de'])) {
        $lang='en';
      }
      app()->setLocale($lang);
      return view('home');
    }
    public function list($lang=null){
      if (!in_array($lang,['en','es','id','zh','tr','hi','az','de'])) {
        $lang='en';
      }
      app()->setLocale($lang);
      return view('list');
    }
    public function tool_form($lang=null){
      if ($lang != null) {
        if (!in_array($lang,['en','es','id','zh','tr','hi','az','de'])) {
          $lang='en';
        }
        app()->setLocale($lang);
      }else{
        $lang=null;
      }
      return view('tool-form');
    }
    public function tool_form2($lang=null){
      if (!in_array($lang,['en','es','id','zh','tr','hi','az','de'])) {
        $lang='en';
      }
      app()->setLocale($lang);
      return view('t-form2');
    }
    public function tform3($lang=null){
      if (!in_array($lang,['en','es','id','zh','tr','hi','az','de'])) {
        $lang='en';
      }
      app()->setLocale($lang);
      return view('tform3');
    }
    public function tform3_spec($lang=null,$id=null){
      if (!in_array($lang,['en','es','id','zh','tr','hi','az','de'])) {
        $lang='en';
      }
      app()->setLocale($lang);
      if (!empty($id)) {
        $sw = Seawords::find($id);
        if (isset($sw)) {
          return view('tform3',compact('sw'));
        }else{
          return view('tform3');
        }
      }else{
        return view('tform3');
      }
    }
}
