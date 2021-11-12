<?php 
// to simplify updates, we post the helpers in the fuel module
require_once(FUEL_PATH.'helpers/MY_html_helper.php');


if(!function_exists('gentrate_custim_nav')){
    function gentrate_custim_nav($data,$lvl=0)
        {
			//print_r($data);
			$ulclasses=array('wsmenu-list','sub-menu','sub-menu');
			$no_child_liclass='nl-simple';
			$navhtml='<ul class="'.$ulclasses[$lvl].'">';
			foreach($data as $li)
			{
				if($lvl==0)
				{
					if(!isset($li['children']))
					{
						$navhtml.='<li class="nl-simple" aria-haspopup="true"><a href="'.(($li['location']=='')?"#":base_url($li['location'])).'">'.$li['label'].'</a></li>';
					}
					else{
						$navhtml.='<li aria-haspopup="true"><a href="'.(($li['location']=='')?"#":base_url($li['location'])).'">'.$li['label'].'<span class="wsarrow"></span></a>';
						$navhtml.=gentrate_custim_nav($li['children'],$lvl+1);
						$navhtml.='</li>';
					}
				}
				else{
					if(!isset($li['children']) )
					{
						$navhtml.='<li class=" " aria-haspopup="true"><a href="'.(($li['location']=='')?"#":base_url($li['location'])).'">'.$li['label'].'</a></li>';
					}
					else{
						$navhtml.='<li aria-haspopup="true"><a href="'.(($li['location']=='')?"#":base_url($li['location'])).'">'.$li['label'].'</a>';
						$navhtml.=gentrate_custim_nav($li['children'],$lvl+1);
						$navhtml.='</li>';
					}
				}
			}
          return  $navhtml.='</ul>';    
        }
}

if(!function_exists('get_page_listselect')){
 function   get_page_listselect()
    {
        $ci= & get_instance();
        $plist=array();
        foreach ( $ci->db->select('Slug,title')->from('fuel_posts')
                ->get()->result() as $page)
        {
            $plist[$page->Slug]=$page->title;
        }
        return $plist;
        
    }
}

if(!function_exists('remove_extra_spacess')){ 
    function remove_extra_spacess($str,$size=0)
    {
        if($size==0){
            $str=str_replace(array("\r", "\n", "\r\n"),"",$str);
             $size=strlen($str);
        }
        $str=str_replace('  ', ' ', $str);
        return (strlen($str)==$size)?$str:remove_extra_spacess($str,strlen($str));
    }
}