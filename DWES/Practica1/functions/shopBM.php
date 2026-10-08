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

    $productosConDescuento = [
        'prod1' => [
            'nombre' => 'portátil gaming',
            'precio' => 899.99,
            'stock' => 15,
            'categoria' => 'electrónica',
            'descuento' => 15 
        ],
        'prod2' => [
            'nombre' => 'mesa escritorio',
            'precio' => 120.50,
            'stock' => 8,
            'categoria' => 'hogar',
            'descuento' => 5
        ],
        'prod3' => [
            'nombre' => 'ratón inalámbrico',
            'precio' => 25.99,
            'stock' => 0,
            'categoria' => 'electrónica',
        ]
    ];

    function formatPrice($precio){
        return number_format($precio, 2) . " $";
    }

    function calculateIVA($precio, $iva = 0.21){
        $result = $precio * $iva;
        $precio += $result;
        return $precio;
    }

    function getStock($productos){
        $vuelta = [];
        foreach($productos as $prod => $producto){
            if($producto['stock'] > 0){
                $vuelta[$prod] = $producto;
            }
        }
        return $vuelta;
    }

?>
