<?php 
    $productos = [
        'prod1' => [
            'nombre' => 'portátil gaming',
            'precio' => 899.99,
            'stock' => 15,
            'categoria' => 'electrónica'
        ],
        'prod2' => [
            'nombre' => 'mesa escritorio',
            'precio' => 120.50,
            'stock' => 8,
            'categoria' => 'hogar'
        ],
        'prod3' => [
            'nombre' => 'ratón inalámbrico',
            'precio' => 25.99,
            'stock' => 0,
            'categoria' => 'electrónica'
        ]
    ];

    function formatPrice($precio){
        return $precio;
    }

    function calculateIVA($precio, $iva){
        $iva = 0.21;
        $result = $precio * $iva;
        $precio += $result;
        return $precio;
    }

    funcion getStock($array)

?>

