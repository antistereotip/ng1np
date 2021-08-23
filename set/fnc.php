<?php
#--------FUNKCIJE ENGINE-A-----------#

#---nema direktnog pristupa funkcijama---#
defined('ROOT_DIR') or exit('No direct script access allowed');

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

#-----upotreba funkcije-----#
//$folder_name = "./";
//echo folderSize($folder_name);




#--------kompresuj_stranicu---------#
function kompresija($buffer) {
    $pretrazi = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/' // Remove HTML comments
    );
    $zameni = array(
        '>',
        '<',
        '\\1',
        ''
    );
    $buffer = preg_replace($pretrazi, $zameni, $buffer);
    return $buffer;
}

#-----upotreba funkcije-----#
//ob_start("kompresija");


#--------broji_stranice_u_xml_mapi-----------#
function sitemapBrojacStranica() {
  $xmlDoc=new DOMDocument(); 
  $xmlDoc->load("sitemap.xml");
  $count = $xmlDoc->getElementsByTagName('loc')->length; 
  echo  'Pages in sitemap: ' . $count . '';
}

#----upotreba funkcije----#
//count_pages();









