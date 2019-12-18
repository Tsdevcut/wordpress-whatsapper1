<?php
  global $whts;
  if(isset($_POST['sub_whatsnumber'])){
      wp_whatsUpdate();
  }

  function wp_whatsUpdate(){
     $number = $_POST['whatsapnumber'];
      global $whts;
     if(get_option('whatsappnumber') != trim($number)){
        $whts = update_option('whatsappnumber', trim($number));
     }
  }
?>
<div class="wrap">
  <div class="admin-content-wrap">
      <h2>Whatsapper</h2>
      <h3>Welcome to Whatsapper</h3>
      <div class="content-comp">
          <div class="item-whatsapper">
            <label>Copy the following shortcode, recommended on the footer or header.</label>
            <input type="text" value="[whatsapper-block]" onclick="select()" readonly="" />
          </div>

          <div class="item-whatsapper">
                <form method="post" action="">
                  <table >
                      <tr>
                        <td>
                          Whatsap Number
                        </td>
                        <td><span class="codesa">+27</span>
                            <input type="text" name="whatsapnumber" value="<? echo esc_attr(get_option('whatsappnumber')); ?>" width="500px"  maxlength="9"/>
                        </td>
                      </tr>
                      <tr>
                        <td>
                        </td>
                        <td>
                          <input type="submit" name="sub_whatsnumber" value="Save Changes" class="button-primary" />
                        </td>
                      </tr>
                  </table>
                </form>
          </div>

      </div>
  </div>
</div>
