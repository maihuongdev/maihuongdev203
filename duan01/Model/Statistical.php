<?php
    function renderStatistical(){
        $sql = "SELECT categories.CategoryID as madm, categories.CategoryName as tendm,
                count(categories.CategoryID) as countsp,
                min(products.Price) as minPrice,
                max(products.Price) as maxPrice,
                avg(products.Price) as avgPrice 
                FROM products left join categories on categories.CategoryID=products.CategoryID
                group by categories.CategoryID order by categories.CategoryID desc";
                $listStatistical = pdo_query($sql);
                return $listStatistical;
    }
