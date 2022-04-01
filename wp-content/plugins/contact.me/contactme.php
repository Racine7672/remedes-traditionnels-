<?php
    /**
     * Plugin Name: Gescab Form plugin
     *
     
    *Plugin URI: http://gescabinet.com/
    *Description: Ceci est notre plugin
    *Version: 1.0  
     */

     function gescabForm()
     {
         
        $content= '';
        $content .= '<h2 style="color:MediumSeaGreen; text-align: center; margin-top:20px">Contactez-nous !</h2>';
        $content .= '<form method="post" action="http://localhost/gescabinet/merci/?preview_id=203&preview_nonce=bd9e50ec79&preview=true">';

        $content .= '<label for="your_name" style="color:MediumSeaGreen	;">Nom</label>';
        $content .= '<input type="text" name="your_name" class="form-control"  /> <br>';

        $content .= '<label for="your_emal" style="color:MediumSeaGreen	;">Email</label>';
        $content .= '<input type="email" name="your_email" class="form-control" /> <br>';

        $content .= '<label for="your_object" style="color:MediumSeaGreen	;">Objet</label>';
        $content .= '<input type="text" name="your_object" class="form-control" /> <br>';

        $content .= '<label for="your_comments" style="color:MediumSeaGreen	;">Message</label>';
        $content .= '<textarea name="your_comments" class="form-control" ></textarea> <br>';

        $content .= '<div style= "text-align: center;"><input type="submit" name="form_submit"  class="btn btn-md btn-primary" value="Envoyer" style="margin-bottom , : 20px; margin-top: 20px;"/></div>';

        $content .= '</form>';




        return $content;

     }

    add_shortcode('form', 'gescabForm');

    function user_capture()
    {
        if(isset($_POST['form_submit']))
        {
            $name = sanitize_text_field($_POST['your_name']);
            $email = sanitize_text_field($_POST['your_email']);
            $objet = sanitize_text_field($_POST['your_object']);
            $comments = sanitize_textarea_field($_POST['your_comments']);

            $to = 'diallo.mamadouracine@gmail.com';
            $to = 'text form submission';
            $message = ''.$name.' - '.$email. ' - '.$comments;

            wp_mail($to,$subject,$message);

        }

    }

    add_action('wp_head','user_capture');



?>