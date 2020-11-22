<?php
namespace App\Libraries;
use \Mpdf\Mpdf;

class LibMpdf{
	public function Out(){
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->WriteHTML('<h1>Hello world!</h1>');
		return $mpdf->method->Output();
	}
}