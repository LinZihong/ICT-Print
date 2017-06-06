<?php

namespace App\Http\Controllers;

use App\Events\PrintAFile;
use Illuminate\Http\Request;
use HTML2PDF;
use Illuminate\Support\Facades\Storage;

class PDFController extends Controller
{
    public function toPDF(Request $request)
	{
		$htp = new HTML2PDF('P', array(57,1000));
		$htp->writeHTML($request->html);
		$fileName='print'.time().'.pdf';
		Storage::put($fileName, $htp->output('','S'));
		event(new PrintAFile(Storage::url($fileName)));
	}
}
