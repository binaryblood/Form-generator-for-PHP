<?php
class attributes_add
{
  protected function add_class($attribs, $ip)
  {
    $class_att = isset($attribs['class']) ? $attribs['class'] : "";
    if($class_att != "")
    {
      $ip .= " class=\"".$class_att."\"";
    }
    return $ip;
  }

  protected function add_id($attribs, $ip)
  {
    $id_att = isset($attribs['id']) ? $attribs['id'] : "";
    if($id_att != "")
    {
      $ip .= " id=\"".$id_att."\"";
    }
    return $ip;
  }


  protected function add_value($attribs, $ip)
  {
    $value_att = isset($attribs['value']) ? $attribs['value'] : "";
    if($value_att != "")
    {
      $ip .= " value=\"".$value_att."\"";
    }
    return $ip;
  }

  protected function add_ph($attribs, $ip)
  {
    $ph_att = isset($attribs['ph']) ? $attribs['ph'] : "";
    if($ph_att != "")
    {
      $ip .= " placeholder=\"".$ph_att."\"";
    }
    return $ip;
  }

  protected function add_name($attribs, $ip)
  {
    $name_att = isset($attribs['name']) ? $attribs['name'] : "";
    if($name_att != "")
    {
      $ip .= " name=\"".$name_att."\"";
    }
    return $ip;
  }

  protected function add_closetag($ip)
  {
    $ip .= ">";
    return $ip;
  }

  protected function closeoption($ip)
  {
    $ip .= "</option>";
    return $ip;
  }
  protected function add_disp_value($attribs, $ip)
  {
    $ip .= $attribs['disp'];
    return $ip;
  }
  protected function closelabel($ip)
  {
    $ip .= "</label>";
    return $ip;
  }
  protected function add_for($attribs, $ip)
  {
    $for_att = isset($attribs['for']) ? $attribs['for'] : "";
    if($for_att != "")
    {
      $ip .= " for=\"".$for_att."\"";
    }
    return $ip;
  }
  protected function closetextarea($ip)
  {
    $ip .= "</textarea>";
    return $ip;
  }
  protected function add_rows($attribs, $ip)
  {
    $rows_att = isset($attribs['rows']) ? $attribs['rows'] : "";
    if($rows_att != "")
    {
      $ip .= " rows=\"".$rows_att."\"";
    }
    return $ip;
  }
  protected function add_cols($attribs, $ip)
  {
    $cols_att = isset($attribs['cols']) ? $attribs['cols'] : "";
    if($cols_att != "")
    {
      $ip .= " cols=\"".$cols_att."\"";
    }
    return $ip;
  }

}
 ?>
