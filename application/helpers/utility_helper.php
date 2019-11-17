<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

     if ( ! function_exists('asset_url()'))
     {
       function asset_url()
       {
          return base_url().'assets/';
       }
     }
	 
	 if ( ! function_exists('upload_url()'))
     {
       function upload_url()
       {
          return base_url().'uploads/';
       }
	 }
	 
	 
       function upload_mp3_url()
       {
          return base_url().'uploads/mp3/';
	   }
	   function upload_mp4_url()
       {
          return base_url().'uploads/mp4/';
       }
     
	 
	 
	 
	 function IsAdminLogin()
	 {
		 $ci=&get_instance();
		 if($ci->session->has_userdata("login"))
		 {
			 return TRUE;
		 }
		 return FALSE;
	 }
	 
	 function IsLogin()
	 {
		if(IsAdminLogin()==FALSE)
		{
			
			redirect("admin/account/login");
		}
	 }
	 
	 //Pakistan Cities List
	 
	 
	 function get_username()
	 {
		 $ci=&get_instance();
		 if($ci->session->has_userdata("login"))
		 {
			 
			return $ci->session->get_userdata("login")["login"]["username"];
		 }
	 }
	 
	 function get_thumbnail($imageName)
	 {
		 
		 $tmp = explode('.', $imageName);
		$ext = end($tmp);
		 $fileName = substr($imageName, 0, strrpos($imageName, "."));
		 return $fileName."_thumb.".$ext;
		 
	 }
	 
	 function get_product_url($productObj)
	 {
		 
		 if(!empty($productObj))
		 {
			 return site_url()."/Product/".$productObj->Slug."/".$productObj->ProductId;
		 }
		 return "#";
	 }
	 
	 function get_category_url($productCatObj)
	 {
		 
		 if(!empty($productCatObj))
		 {
			 return site_url()."/ProductCategory/".slugify($productCatObj->CatName)."/".$productCatObj->ProductCatId;
		 }
		 return "#";
	 }
	 
	 
	 function get_delivery_charges()
	 {
		 return 200;
	 }
	 
	 function amount_format($price)
	 {
		 return "Rs. ".number_format($price);
	 }
	 
	 function create_thumbnail($fullpath)
	 {
		     $ci =& get_instance();
	$ci->load->library('image_lib');
    $config['image_library']  = 'gd2';
    $config['source_image']   = $fullpath;       
    $config['create_thumb']   = TRUE;
    $config['maintain_ratio'] = TRUE;
    $config['width']          = 300;
    $config['height']         = 300;
    $config['new_image']      = $fullpath;               
    $ci->image_lib->initialize($config);
    if (! $ci->image_lib->resize()) { 
        echo $ci->image_lib->display_errors();
    }        
	 }
	 
	 if(!function_exists("slugify"))
	 {
		  function slugify($text)
{
  // replace non letter or digits by -
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, '-');

  // remove duplicate -
  $text = preg_replace('~-+~', '-', $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}
		 
	 }
	 
	 if ( ! function_exists('SiteName()'))
     {
       function SiteName()
       {
          return "Songs CMS";
       }
     }