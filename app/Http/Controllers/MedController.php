<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meterms;
use App\Medefs;

class MedController extends Controller
{
    public function form($lang=null){
      if (!in_array($lang,['en','es','id','zh','tr','hi','az','de'])) {
        $lang='en';
      }
      app()->setLocale($lang);
      return view('mform');
    }
    public function getmeaning($word = null,$lang = null){
      if (!empty($word)) {
      	$mt = Meterms::where('word',$word)->first();
      	if (!empty($mt)) {
      		$mds = Medefs::where('word_id',$mt->id)->where('lang',$lang)->get();
      		 if (count($mds) == 0) {echo "no added meaning";}else{
			 	foreach ($mds as $key => $md) {
				    echo $md['definition']."\r\n";
				}
			 }
      	}else{echo "no such word";}
      }else{echo "";}
    }
    public function getsugg($part = null,$lang = null){
      if (!empty($part) && strlen($part) > 2) {
      	$mts = Meterms::where('word','LIKE',$part . '%')->take(10)->get();
      	foreach ($mts as $key => $mt) {
      		echo "<li><a onclick='select(this)'>".$mt->word."</a></li>";
      	}
      }
    }
    public function addmeaning(Request $req){
      	$mt = Meterms::where('word',$req->word)->first();
      	if (!empty($mt)) {
      		$md_ch = Medefs::where('definition',$req->mean)->where('word_id',$mt->id)->first();
      		if (empty($md_ch)) {
		      	$md = new Medefs;
		      	$md->definition = $req->mean;
		      	$md->word_id = $mt->id;
		      	$md->lang = $req->lang;
		      	$md->count = 1;
		      	$md->save();
		      	return response()->json(['success','error']);
      		}else{
      			$md = Medefs::where('id',$md_ch->id)->first();
		      	$md->count += 1;
		      	$md->update();
		      	return response()->json(['success','error']);
      		}
      	}else{
      		$mtnew = new Meterms;
      		$mtnew->status = 0;
      		$mtnew->word = $req->word;
      		$mtnew->save();
			// $id = $mt_new->save()->id;
      		// $id = Meterms::where('word',$req->word)->first();

      		$md_new = new Medefs;
		    $md_new->definition = $req->mean;
		    $md_new->word_id = $id;
		    $md_new->lang = $req->lang;
		    $md_new->count = 1;
		    $md_new->save();
		    return response()->json(['success','error']);
      	}
    }
}
