<?php
function insert_binhluan($IdProduct, $UserID, $CommentText)
{
    $Timestamp = date('Y-m-d');
    $sql = "
        INSERT INTO `comments`(`IdProduct`, `UserID`, `CommentText`, `Timestamp`) 
        VALUES ('$IdProduct','$UserID','$CommentText','$Timestamp');
    ";
    pdo_execute($sql);
}


function renderComment()
{
    $sql = "SELECT comments.*, users.username, products.ProductName, products.ProductID
    FROM comments
    JOIN users ON comments.UserID = users.UserID
    JOIN products ON comments.IdProduct = products.ProductID";
    $renderComment = pdo_query($sql);
    return $renderComment;
}

function loadall_binhluan($idpro)
{
    // danh sách các cột mà truy vấn sẽ trả về:
    // comment.id: ID của bình luận.
    // comment.UserID: Nội dung của bình luận.
    // users.username: Tên người dùng (username) của người đã thực hiện bình luận.
    // comment.ngaybinhluan: Ngày và giờ bình luận được thực hiện.
    $sql = "
    SELECT comments.*, users.username, products.ProductName, products.ProductID
FROM comments
JOIN users ON comments.UserID = users.UserID
JOIN products ON comments.IdProduct = products.ProductID = $idpro;
    ";
    $result =  pdo_query($sql);
    return $result;
}

function deleteComment($id)
{
    $sql = "delete from comment where id=" . $id;
    pdo_query($sql);
}

function loadone_comment($id)
{
    $sql = "select * from comment where id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_comment($id, $noidung)
{
    $sql = "update comment set noidung='" . $noidung . "' where id=" . $id;
    pdo_execute($sql);
}
