<?php
function renderOrder()
{
    $sql = "
    SELECT  users.username, users.Address, users.name, products.ProductName, Status.StatusID, products.Price, orders.quantity, orders.OrderID, orders.OrderDate, paymentmethod.PaymentMethodName, Status.StatusName
    FROM users
    JOIN orders ON users.UserID = orders.UserID
    JOIN products ON orders.ProductID = products.ProductID
    JOIN Status ON orders.StatusID = Status.StatusID
    JOIN paymentmethod ON orders.PaymentMethodID = paymentmethod.PaymentMethodID
    ORDER BY orders.OrderID desc;
    ";
    $renderOrder = pdo_query($sql);
    return $renderOrder;
}

function insertOrder($ProductID, $UserID, $OrderDate, $StatusID, $PaymentMethodID, $quantity)
{
    $sql = "INSERT INTO orders (ProductID, UserID, OrderDate, StatusID, PaymentMethodID, quantity) VALUES ('$ProductID', '$UserID', '$OrderDate', '$StatusID', '$PaymentMethodID', '
    $quantity')";
    pdo_execute($sql);
}


function renderOrderID($OrderID)
{
    $sql = "SELECT * FROM orders where OrderID =" . $OrderID;
    $orders = pdo_query_one($sql);
    return $orders;
}

function UpdateOrder($OrderID, $StatusID)
{
    $sql = "UPDATE orders SET StatusID='" . $StatusID . "' where OrderID=" . $OrderID;
    pdo_execute($sql);
}

function UpdateOrderPaymentMethod($OrderID, $StatusID)
{
    $sql = "UPDATE orders SET StatusID='" . 14 . "' where OrderID=" . $OrderID;
    pdo_execute($sql);
}

function renderStatus()
{
    $sql = "SELECT * FROM status";
    $renderStatus = pdo_query($sql);
    return $renderStatus;
}

function renderPaymentMethod()
{
    $sql = "SELECT * FROM paymentmethod";
    $renderPaymentMethod = pdo_query($sql);
    return $renderPaymentMethod;
}
