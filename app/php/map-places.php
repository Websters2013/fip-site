<?php

$id = $_GET['id'];

if ($id == 51490){

    $json_data = '{
        "points": [{
            "place": [55.778568, 37.5888113],
            "balloon": "<p>Московский ФО</p> <span>Ямало-Ненецкий автономный округ</span>",
            "name": "Федеральное государственное бюджетное образовательное учреждение высшего",
            "reports": "Данные предоставлены Федеральное государственное",
            "reportsStatus": "1",
            "site": "Данные предоставлены Федеральное государственное",
            "siteStatus": "2",
            "fip": "Данные предоставлены Федеральное государственное",
            "fipStatus": "3"
        },
        {
            "place": [57.101214, 65.593490],
            "balloon": "<p>Уральский ФО</p> <span>Ямало-Ненецкий автономный округ</span>",
            "name": "Северо-Кавказский институт-филиал ФГБОУ ВПО Российская академия народного хозяйства",
            "reports": "Cфере закупок товаров, работ и услуг для обеспечения",
            "reportsStatus": "1",
            "site": "Данные предоставлены Федеральное государственное",
            "siteStatus": "2",
            "fip": "Данные предоставлены Федеральное государственное",
            "fipStatus": "2"
        }]
    }';

}

if ($id == 72197){

    $json_data = '{
        "points": [{
            "place": [57.101214, 65.593490],
            "balloon": "<p>Уральский ФО</p> <span>Ямало-Ненецкий автономный округ</span>",
            "name": "Северо-Кавказский институт-филиал ФГБОУ ВПО Российская академия народного хозяйства",
            "reports": "Cфере закупок товаров, работ и услуг для обеспечения",
            "reportsStatus": "1",
            "site": "Данные предоставлены Федеральное государственное",
            "siteStatus": "2",
            "fip": "Данные предоставлены Федеральное государственное",
            "fipStatus": "2"
        }]
    }';

}

if ($id == 71950){

    $json_data = '{
        "points": [{
            "place": [57.005424, 44.104233],
            "img": "img/place-003.png",
            "imgSize": [26, 35],
            "balloon": "<p>Нижнегородский ФО</p> <span>Ямало-Ненецкий автономный округ</span>",
            "name": "Северо-Кавказский институт-филиал ФГБОУ ВПО Российская академия народного хозяйства",
            "reports": "Cфере закупок товаров, работ и услуг для обеспечения",
            "reportsStatus": "1",
            "site": "Данные предоставлены Федеральное государственное",
            "siteStatus": "2",
            "fip": "Данные предоставлены Федеральное государственное",
            "fipStatus": "2"
        }]
    }';
}

$json_data = str_replace("\r\n",'',$json_data);
$json_data = str_replace("\n",'',$json_data);
echo $json_data;
exit;
?>