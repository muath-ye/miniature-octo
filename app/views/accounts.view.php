<?php require 'partials/head.php'; ?>

<div class="py-5 text-center">
    <h2>نموذج الشجرة</h2>
    <p class="lead">
        <?= 'هذا نموذج عرض بيانات من جدولي الحسابات وأنواع الحسابات بشكل استدعاء ذاتي من جدول الحسابات' ?>
    </p>
</div>
<div class="contianer text-center">
    
<?php foreach ($accounts_types as $account) { ?>
    <?php $selected_acount = isset($_GET['account']) ? $_GET['account'] : 1; ?>
    <a class="btn btn-<?= $selected_acount == $account->id ? 'primary' : 'default'; ?>" href="?account=<?= $account->id ?>"><?= $account->name; ?></a>
<?php } ?>

</div>


<div class="contianer text-right">
<?php

function getAccounts($parent_id = 0, $account_type_id = 1)
{
    if (isset($_GET['account'])) {
        $account_type_id = $_GET['account'];
    }
    $data = \App\Core\App::get('database')->where('accounts', 'WHERE parent_id = '.$parent_id.' and account_type_id = '.$account_type_id);

    return $data;
}

$data = getAccounts();

function nested2ul($data)
{
    $result = '';

    if (count($data) > 0) {
        $result .= '<ul>';
        foreach ($data as $entry) {
            $result .= '<li>';
            $result .= $entry->id.' | '.$entry->name;
            $result .= nested2ul(getAccounts($entry->id));
            $result .= '</li>';
        }
        $result .= '</ul>';

        return $result;
    }
}
echo nested2ul($data);
?>
</div>
<?php require 'partials/footer.php'; ?>
