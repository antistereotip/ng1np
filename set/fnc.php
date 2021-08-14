<?php
#--------funkcije engina-----------#

#--------racuna velicinu foldera-----------#
function folderSize($dir){
$count_size = 0;
$count = 0;
$dir_array = scandir($dir);
  foreach($dir_array as $key=>$filename){
    if($filename!=".." && $filename!="."){
       if(is_dir($dir."/".$filename)){
          $new_foldersize = foldersize($dir."/".$filename);
          $count_size = $count_size+ $new_foldersize;
        }else if(is_file($dir."/".$filename)){
          $count_size = $count_size + filesize($dir."/".$filename);
          $count++;
        }
   }
 }
return $count_size;
}
//$folder_name = "./";
//echo folderSize($folder_name);

#--------broji_stranice_u_xml_mapi-----------#
function count_pages() {
  $xmlDoc=new DOMDocument(); 
  $xmlDoc->load("sitemap.xml");
  $count = $xmlDoc->getElementsByTagName('loc')->length; 
  echo  '(pages: ' . $count . ')';
}


#--------kompresuj_stranicu---------#
function KompresujStranu($Baferuj) {
  $Pretrazi = array(
        '/\>[^\S ]+/s',  // ocisti razmake izmedju tagova, izuzev spejsa
        '/[^\S ]+\</s',  // ocisti razmake pre tagova, izuzev spejsa
        '/(\s)+/s'       // skrati vise spojenih spejsova
    );
  $Zameni = array(
        '>',
        '<',
        '\\1'
    );
    return preg_replace($Pretrazi, $Zameni, $Baferuj);
}

