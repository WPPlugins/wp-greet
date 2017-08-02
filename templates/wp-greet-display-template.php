<?php
/*
 *  Template for the display a wp-greet card
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
 */
?>

<h2><?php _e("A Greeting Card for you","wp-greet") ?></h2>

<table>
  <tr>
    <th style='text-align:left'><?php _e("From","wp-greet")?>:</th>
    <td>{%sendername%}&nbsp;&lt;{%sendermail%}&gt;</td>
  </tr>
  
  <tr>
    <th style='text-align:left'><?php _e("To","wp-greet")?>:</th>
    <td>{%recvname%}&nbsp;&lt;{%recvmail%}&gt;</td>
  </tr>
  
  <tr>
    <th><?php _e("Subject","wp-greet")?>:</th>
    <td>{%subject%}</td>
  </tr>
</table>

<div>{%wp-greet-default-header%}</div>

{%image_url%}

<audio id="wpg_audio_player" autoplay="true" loop="true">
 <source src="{%audiourl%}" />
 <!-- fallback -->
 <embed id="wpg_audio_player_fallback" type="audio/mpeg" src="%audiourl%" autostart="true" loop="true">
</audio>

<p>{%message%}</p>
{%wp-greet-default-footer%}