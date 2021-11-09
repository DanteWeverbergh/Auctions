
<?php


$request  = $_SERVER['REQUEST_URI'];

$path = explode('/', $request);

if(!empty($path[3])) {

    $slug = $path[3];

        if($category['slug'] == $slug) {
        $class = 'class="active"';
        } else {
            $class = '';
        }
} else {
    $class = '';
}

?>

<a href='/veiling/detail/<?=$category['slug'];?>' <?=$class;?>>
    <i class="fal fa-<?=$category['icon'];?>"></i>
    <span><?=$category['name'];?></span>
</a>






