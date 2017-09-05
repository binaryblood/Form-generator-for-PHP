<?php
include('_attrib_form_build.php');

class form extends attributes_add
{
  public function text( $attribs = "null")
  {
    $ip = "<input type=\"text\"";

    $ip = form::add_class($attribs, $ip);
    $ip = form::add_id($attribs, $ip);
    $ip = form::add_value($attribs, $ip);
    $ip = form::add_ph($attribs, $ip);
    $ip = form::add_name($attribs, $ip);
    $ip = form::add_closetag($ip);

    return $ip;
  }

  public function password( $attribs = "null")
  {
    $ip = "<input type=\"password\"";
    $ip = form::add_class($attribs, $ip);
    $ip = form::add_id($attribs, $ip);
    $ip = form::add_value($attribs, $ip);
    $ip = form::add_ph($attribs, $ip);
    $ip = form::add_name($attribs, $ip);
    $ip = form::add_closetag($ip);

    return $ip;
  }

  public function radio($attribs = "null")
  {
    $ip = "<input type=\"radio\"";
    $ip = form::add_class($attribs, $ip);
    $ip = form::add_id($attribs, $ip);
    $ip = form::add_value($attribs, $ip);
    $ip = form::add_name($attribs, $ip);
    $ip = form::add_closetag($ip);
  }

  public function checkbox($attribs = "null")
  {
    $ip = "<input type=\"checkbox\"";
    $ip = form::add_class($attribs, $ip);
    $ip = form::add_id($attribs, $ip);
    $ip = form::add_value($attribs, $ip);
    $ip = form::add_name($attribs, $ip);
    $ip = form::add_closetag($ip);
    return $ip;
  }

  public function open_select($attribs = "null")
  {
    $ip = "<select";
    $ip = form::add_class($attribs, $ip);
    $ip = form::add_id($attribs, $ip);
    $ip = form::add_name($attribs, $ip);
    $ip = form::add_closetag($ip);
    return $ip;
  }
  public function close_select()
  {
    $ip = "</select>";
    return $ip;
  }
  public function option($attribs = "null")
  {
    $ip = "<option";
    $ip = form::add_class($attribs, $ip);
    $ip = form::add_id($attribs, $ip);
    $ip = form::add_value($attribs, $ip);
    $ip = form::add_closetag($ip);
    $ip = form::add_disp_value($attribs, $ip);
    $ip = form::closeoption($ip);
    return $ip;
  }

  public function label($attribs = "null")
  {
    $ip = "<label";
    $ip = form::add_for($attribs, $ip);
    $ip = form::add_class($attribs, $ip);
    $ip = form::add_id($attribs, $ip);
    $ip = form::add_closetag($ip);
    $ip = form::add_disp_value($attribs, $ip);
    $ip = form::closelabel($ip);

    return $ip;
  }

  public function textarea($attribs = "null")
  {
    $ip = "<textarea";
    $ip = form::add_id($attribs, $ip);
    $ip = form::add_class($attribs, $ip);
    $ip = form::add_name($attribs, $ip);
    $ip = form::add_rows($attribs, $ip);
    $ip = form::add_cols($attribs, $ip);
    $ip = form::add_closetag($ip);
    $ip = form::add_value($attribs, $ip);
    $ip = form::closetextarea($ip);
    return $ip;

  }

}
?>
