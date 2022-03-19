<?php require('partials/head.php'); ?>

<div class="py-5 text-center">
    <h2>نموذج الشجرة</h2>
    <p class="lead">
        <?= 'هذا نموذج عرض بيانات من جدول التصنيفات بشكل استدعاء ذاتي من نفس الجدول' ?>
    </p>
</div>
<div class="contianer text-left">
<?php


function getCategories($parent_id = 0)
{
    $data = \App\Core\App::get('database')->where('tbl_category', 'WHERE parent_category_id = ' . $parent_id);
    
    return $data;
}

$data = getCategories();

function nested2ul($data) {
    $result = '';
    
    if (sizeof($data) > 0) {
        $result .= '<ul>';
        foreach ($data as $entry) {
            $result .= '<li>';
            $result .= $entry->category_id . ' | ' .$entry->category_name;
            $result .= nested2ul(getCategories($entry->category_id));
            $result .= '</li>';
        }
        $result .= '</ul>';
        return $result;
    }
}
echo (nested2ul($data));
?>
</div>
<?php require('partials/footer.php'); ?>