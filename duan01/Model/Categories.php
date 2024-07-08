<?php
function renderCategories()
{
    $sql = "SELECT * FROM categories order by CategoryID desc";
    $renderCategories = pdo_query($sql);
    return $renderCategories;
}
function deleteCategory($CategoryID)
{
    $sql = "delete from categories where CategoryID=" . $CategoryID;
    pdo_execute($sql);
}
function loadall_danhmuc()
{
    $sql = "select * from categories order by CategoryID desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($CategoryID)
{
    $sql = "select * from categories where CategoryID=" . $CategoryID;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($CategoryID, $CategoryName)
{
    $sql = "update categories set CategoryName='" . $CategoryName . "' where CategoryID=" . $CategoryID;
    pdo_execute($sql);
}
