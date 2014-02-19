<?php ob_start() ?>
<?php	
    $c = 0;
    foreach ($data as $post) : 
        if ($c%2)
        {
            $color="#8B4513";
        }
        else
        {
            $color="#CD853F";					
        }						  
?>
<div class="span12 marginleft commentBlock" id="postContenier">
    <div class="span7 well overflow " style="color:<?php echo $color?>"><?php echo $html = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $post['text']);?></div>
    <div class="span2"><?php echo htmlspecialchars($post['name'])  ?></div>	
    <div class="span2"><?php echo $post['date'] ?></div>
    <button style="display:none" value="<?php if ($color="#8B4513") {echo "#CD853F";} else {echo "#CD853F";} ?>" id="colorText">colorForText</button>										
</div>	

<?php 
    $c++;
    endforeach;

    if ($c==0) 
    echo "<p class='well text-info span8 offset1' id='noMess'>There are no posts</p>";
?>

<?php 
    $content = ob_get_clean();
    echo $content;
?>
<div class="span8 alert alert-error alertAlign errDisplay" id="nameErr">enter the correct name</div>
<div class="span8 alert alert-error alertAlign errDisplay" id="textErr">enter the correct message</div>

<form class="span11 formalign " method="post" id="feedback">
    <input  type="text" class="input_name_magin_bottom" name="name" id="name" placeholder="Enter your name"<?php if (isset($username)) : ?> value="<?php  echo htmlspecialchars($username)?>"> <?php else : ?> > <?php endif; ?>
    <textarea name="text" id="text"><?php if (isset($msg)) echo htmlspecialchars($msg) ?></textarea>
    <button  type="submit" class="btn" name="action" value="add" id="send">submit</button>
    <button  type="submit" class="btn pull-right" name="actionDel" value="delete" id="delAllMess">delete ALL !!!</button>
</form>
<button style="display:none" value="<?php echo date("h:i:s D F Y"); ?>" id="date">dateForJs</button>