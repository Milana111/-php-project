<?php
class Helper {
    public static clearString($str){
        return trim(strip_tags($str));

    }

public static clearInt($str){
        return (int)$str;  
    }

    public static printSelectOptions(array $key = $options){
        if ($options) {
            foreach ($options as $option) { ?>
            <option value="<?=$option['id'];?>" <?=($key ==
            $option['id'])?'selected':'';?>><?=$option['value'];?></o
            ption>
            <?php }
            }
    }

    public paginator($count, $current = 1, $size= 30){
        $numPages=ceil($count/$size);
$href = $_SERVER['PHP_SELF'].'?page=';
echo '<ul class="pagination ">';
for ($i = 1; $i<=$numPages; $i++) {
if ($current == $i) {
echo ' <li class="paginate_button active"><a
href="'.$href.$i.'" data-dt-idx="'.$i.'"
tabindex="0">'.$i.'</a></li>';
} else {
echo ' <li class="paginate_button"><a
href="'.$href.$i.'" data-dt-idx="'.$i.'"
tabindex="0">'.$i.'</a></li>';
}
}
echo '</ul>';
    }
    
}

?>