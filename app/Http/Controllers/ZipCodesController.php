<?php

namespace App\Http\Controllers;
use App\Http\Controllers\SimpleXMLElement;
class ZipCodesController extends Controller
{
    
        public function index()
   {

	}
    public function show(int $id)
   {	/*Seteo la ruta de nu archivo XML*/
 		$XmlPath = resource_path('xml/').'CPdescarga.xml';
 		/*Parseo para obtener los datos*/
		$MyXML = simplexml_load_file ( $XmlPath , 'SimpleXMLElement' , LIBXML_NOWARNING | LIBXML_COMPACT | LIBXML_NSCLEAN    , null , false ); 

		foreach ($MyXML->table as $content)
		{
		    if ($content->d_codigo == $id)
		    {
		    	echo json_encode($content);

		         break;
		    }

		}
   }
}
