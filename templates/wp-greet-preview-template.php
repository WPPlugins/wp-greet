<?php 
/*
 *  Template for the preview of a wp-greet card
 *  
 *  The following placeholders can be used:
 *  {%sendername%}					- name of the sender
 *  {%sendermail%}					- email address of the sender
 *  {%ccsender%}					- should the sender get a copy of the greet card mail?
 *  {%recvname%}					- name of the receiver
 *  {%recvmail%}					- email address of the receiver
 *  {%subject%}						- subject of the message
 *  {%wp-greet-default-header%}		- gives the wp-greet header (can be set in the admin dialog)
 *  {%wp-greet-default-footer%}		- gives the wp-greet footer (can be set in the admin dialog)
 *  {%image_url%}					- gives an img tag to show the greet card picture
 *  {%message%}						- the message
 *  {%send_time%}					- date/time when the card will be send
 */
?>
<?php if ($wpg_options['wp-greet-audio']): 
         $Noneurl=plugin_dir_url(__FILE__). "../music/None.mp3";
?> 
<script type="text/javascript">
jQuery(document).ready(function() {
	song=document.getElementById('wp-greet-audio').value;
	player=document.getElementById('wpg_audio_player');
	fbplayer=document.getElementById('wpg_audio_player_fallback');
	player.src=song;
	fbplayer.src=song;
});
</script>	

<audio id="wpg_audio_player" autoplay="true" loop="true">
 <source src="<?php echo $Noneurl; ?>" />
 <!-- fallback -->
 <embed id="wpg_audio_player_fallback" type="audio/mpeg" src="<?php echo $Noneurl; ?>" autostart="true" loop="true">
</audio>
<?php endif; ?>	

<table>
<tr>
   <th><?php  _e("From","wp-greet"); ?>:</th>
   <td>{%sendername%} &lt;{%sendermail%}&gt;{%ccsender%}</td>
</tr>

<tr>
   <th><?php _e("To","wp-greet"); ?>:</th>
   <td>{%recvname%}&nbsp;&lt;{%recvmail%}&gt; <?php if ($_POST['recvbcc']!="") echo "(" . __("Bcc",'wp-greet') . ")";?></td>
</tr>

<tr>
   <th><?php _e("Subject","wp-greet");?>:</th>
   <td>{%subject%}</td>
</tr>
</table>

<div>{%wp-greet-default-header%}</div>

{%image_url%}
 
<p>{%message%}</p>

{%wp-greet-default-footer%}

<?php if ($wpg_options['wp-greet-future-send'] and $_POST['fsend']!=""): ?>
<p><strong><?php _e("This card will be sent at","wp-greet"); ?> {%send_time%}</strong></p>
<?php endif;?>