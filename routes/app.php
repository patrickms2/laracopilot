<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Malpaís · Island Concierge — prototipo estático (datos en duro)
|--------------------------------------------------------------------------
*/

$tours = [
    [
        'slug' => 'bodega-el-grifo',
        'name' => 'Bodega El Grifo · Cata de Malvasía',
        'type' => 'Bodega',
        'zone' => 'La Geria',
        'price' => 50,
        'unit' => 'persona',
        'duration' => '2 h',
        'rating' => 4.9,
        'reviews' => 312,
        'provider' => 'Bodegas La Geria S.L.',
        'image' => 'https://images.unsplash.com/photo-1506377247377-2a5b3b417ebb?auto=format&fit=crop&w=1200&q=70',
        'summary' => 'Paseo entre hoyos volcánicos, sala de barricas y cata de cuatro Malvasías con queso majorero.',
        'meeting' => 'LZ-30, km 11 · La Geria',
        'slots' => ['10:30', '12:00', '16:30', '18:00'],
        'includes' => ['Guía en español e inglés', 'Cata de 4 vinos', 'Tabla de quesos de la isla', 'Recogida de pedidos en bodega'],
    ],
    [
        'slug' => 'tour-barco-papagayo',
        'name' => 'Tour en barco · Papagayo',
        'type' => 'Barco',
        'zone' => 'Playa Blanca',
        'price' => 400,
        'unit' => 'embarcación',
        'duration' => '5 h',
        'rating' => 4.8,
        'reviews' => 187,
        'provider' => 'Tours Marinos Rubicón',
        'image' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=70',
        'summary' => 'Salida privada a las calas de Papagayo con snorkel, paddle y almuerzo a bordo.',
        'meeting' => 'Marina Rubicón, pantalán 3',
        'slots' => ['09:00', '14:30'],
        'includes' => ['Patrón privado', 'Equipo de snorkel', 'Almuerzo y bebidas', 'Toallas y ducha'],
    ],
    [
        'slug' => 'taxi-tour-timanfaya',
        'name' => 'Taxi Tour · Timanfaya y La Geria',
        'type' => 'Taxi tour',
        'zone' => 'Sur',
        'price' => 100,
        'unit' => 'vehículo',
        'duration' => '4 h',
        'rating' => 4.7,
        'reviews' => 264,
        'provider' => 'Taxi Lanzarote Sur',
        'image' => 'https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&fit=crop&w=1200&q=70',
        'summary' => 'Ruta en vehículo privado por el Parque Nacional, El Golfo y los viñedos de La Geria.',
        'meeting' => 'Recogida en tu alojamiento',
        'slots' => ['09:30', '13:00', '16:00'],
        'includes' => ['Conductor-guía local', 'Vehículo hasta 4 pax', 'Paradas fotográficas', 'Agua fría a bordo'],
    ],
    [
        'slug' => 'senderismo-caldera-blanca',
        'name' => 'Senderismo · Caldera Blanca',
        'type' => 'Senderismo',
        'zone' => 'Tinajo',
        'price' => 50,
        'unit' => 'persona',
        'duration' => '3 h',
        'rating' => 4.9,
        'reviews' => 143,
        'provider' => 'Malpaís Trekking',
        'image' => 'https://images.unsplash.com/photo-1551632811-561732d1e306?auto=format&fit=crop&w=1200&q=70',
        'summary' => 'Ascenso suave al cráter más fotogénico de la isla, con guía geólogo y desayuno volcánico.',
        'meeting' => 'Aparcamiento Mancha Blanca',
        'slots' => ['07:30', '16:30'],
        'includes' => ['Guía geólogo', 'Bastones y agua', 'Desayuno de campo', 'Seguro de actividad'],
    ],
    [
        'slug' => 'mercadillo-teguise',
        'name' => 'Mercadillo de Teguise',
        'type' => 'Mercadillo',
        'zone' => 'Teguise',
        'price' => 10,
        'unit' => 'persona',
        'duration' => '3 h',
        'rating' => 4.5,
        'reviews' => 96,
        'provider' => 'Teguise Cultura',
        'image' => 'https://images.unsplash.com/photo-1488459716781-31db52582fe9?auto=format&fit=crop&w=1200&q=70',
        'summary' => 'Visita guiada al mercadillo dominical: artesanía, cochinilla, quesos y timple en vivo.',
        'meeting' => 'Plaza de la Villa, Teguise',
        'slots' => ['09:00', '11:00'],
        'includes' => ['Guía cultural', 'Degustación de quesos', 'Taller de artesanía', 'Mapa de puestos'],
    ],
    [
        'slug' => 'bodega-rubicon-vinoterapia',
        'name' => 'Bodega Rubicón · Vinoterapia',
        'type' => 'Bodega',
        'zone' => 'Yaiza',
        'price' => 65,
        'unit' => 'persona',
        'duration' => '2,5 h',
        'rating' => 4.8,
        'reviews' => 118,
        'provider' => 'Bodega Rubicón',
        'image' => 'https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?auto=format&fit=crop&w=1200&q=70',
        'summary' => 'Cata vertical de tintos volcánicos y ritual de vinoterapia con extracto de uva Listán.',
        'meeting' => 'LZ-30, km 2 · Yaiza',
        'slots' => ['11:00', '17:00'],
        'includes' => ['Cata de 5 vinos', 'Ritual de vinoterapia 40 min', 'Copa de regalo', 'Envío de compras'],
    ],
    [
        'slug' => 'finca-aloe-vera',
        'name' => 'Finca de Aloe Vera · Visita y taller',
        'type' => 'Finca',
        'zone' => 'Órzola',
        'price' => 25,
        'unit' => 'persona',
        'duration' => '1,5 h',
        'rating' => 4.6,
        'reviews' => 201,
        'provider' => 'Aloe Plus Lanzarote',
        'image' => 'https://images.unsplash.com/photo-1465101162946-4377e57745c3?auto=format&fit=crop&w=1200&q=70',
        'summary' => 'Del cultivo al gel: corte de la hoja, extracción en vivo y taller de cosmética natural.',
        'meeting' => 'Finca Los Verdes, Órzola',
        'slots' => ['10:00', '12:30', '16:00'],
        'includes' => ['Visita al cultivo', 'Taller de gel puro', 'Muestra de 100 ml', 'Descuento en tienda'],
    ],
    [
        'slug' => 'cuevas-jameos',
        'name' => 'Cuevas de los Verdes y Jameos del Agua',
        'type' => 'Cultural',
        'zone' => 'Haría',
        'price' => 45,
        'unit' => 'persona',
        'duration' => '3,5 h',
        'rating' => 4.7,
        'reviews' => 158,
        'provider' => 'CACT Lanzarote',
        'image' => 'https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=1200&q=70',
        'summary' => 'El tubo volcánico más largo del mundo y el auditorio de Manrique en una sola mañana.',
        'meeting' => 'Entrada Cuevas de los Verdes',
        'slots' => ['09:30', '11:30', '15:00'],
        'includes' => ['Entradas incluidas', 'Guía CACT', 'Traslado entre centros', 'Café en Jameos'],
    ],
];

$restaurants = [
    [
        'slug' => 'la-cascada',
        'name' => 'La Cascada',
        'cuisine' => 'Cocina volcánica de autor',
        'zone' => 'Yaiza',
        'menu' => 35,
        'rating' => 4.9,
        'reviews' => 421,
        'image' => 'https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&w=1200&q=70',
        'summary' => 'Menú degustación de siete pases con producto de la isla y bodega de 180 referencias.',
        'address' => 'C/ La Fuente 4, Yaiza',
        'slots' => ['13:00', '13:30', '20:00', '20:30', '21:30'],
        'dishes' => ['Papas negras y mojo de cochinilla', 'Cherne a la sal volcánica', 'Cabrito de Femés', 'Bienmesabe y malvasía'],
    ],
    [
        'slug' => 'el-cangrejo-rojo',
        'name' => 'El Cangrejo Rojo',
        'cuisine' => 'Marisco y arroces',
        'zone' => 'Puerto del Carmen',
        'menu' => 35,
        'rating' => 4.8,
        'reviews' => 512,
        'image' => 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1200&q=70',
        'summary' => 'Terraza sobre la playa, marisco del día y el arroz caldoso más pedido del sur.',
        'address' => 'Av. de las Playas 22, Puerto del Carmen',
        'slots' => ['13:00', '14:00', '19:30', '20:30', '21:30'],
        'dishes' => ['Camarones de La Santa', 'Arroz caldoso de bogavante', 'Vieja a la espalda', 'Tarta de queso majorero'],
    ],
    [
        'slug' => 'la-bodega-de-santiago',
        'name' => 'La Bodega de Santiago',
        'cuisine' => 'Canaria de mercado',
        'zone' => 'Yaiza',
        'menu' => 32,
        'rating' => 4.7,
        'reviews' => 388,
        'image' => 'https://images.unsplash.com/photo-1552566626-52f8b828add9?auto=format&fit=crop&w=1200&q=70',
        'summary' => 'Bajo un laurel centenario, recetas de siempre con verdura de la finca.',
        'address' => 'C/ Montañas del Fuego 27, Yaiza',
        'slots' => ['13:30', '14:30', '20:00', '21:00'],
        'dishes' => ['Croquetas de queso ahumado', 'Pulpo a la brasa', 'Solomillo de cerdo negro', 'Quesillo'],
    ],
    [
        'slug' => 'el-risco',
        'name' => 'El Risco',
        'cuisine' => 'Pescado a la brasa',
        'zone' => 'Famara',
        'menu' => 38,
        'rating' => 4.8,
        'reviews' => 297,
        'image' => 'https://images.unsplash.com/photo-1466978913421-dad2ebd01d17?auto=format&fit=crop&w=1200&q=70',
        'summary' => 'Ventanal frente al risco de Famara y lonja del día en la parrilla.',
        'address' => 'C/ Montaña Clara 31, Famara',
        'slots' => ['13:00', '14:00', '19:00', '20:30'],
        'dishes' => ['Sama roquera', 'Ropa vieja de pulpo', 'Ensalada de aguacate y berros', 'Mousse de gofio'],
    ],
    [
        'slug' => 'amura',
        'name' => 'Amura',
        'cuisine' => 'Mediterránea marinera',
        'zone' => 'Marina Rubicón',
        'menu' => 42,
        'rating' => 4.6,
        'reviews' => 244,
        'image' => 'https://images.unsplash.com/photo-1424847651672-bf20a4b0982b?auto=format&fit=crop&w=1200&q=70',
        'summary' => 'Cena con los mástiles de la marina de fondo y carta de vinos volcánicos.',
        'address' => 'Marina Rubicón, Playa Blanca',
        'slots' => ['19:30', '20:30', '21:30'],
        'dishes' => ['Tartar de atún rojo', 'Risotto de erizo', 'Lubina en costra', 'Coulant de Malvasía'],
    ],
    [
        'slug' => 'casa-brigida',
        'name' => 'Casa Brígida',
        'cuisine' => 'Cocina de abuela',
        'zone' => 'Haría',
        'menu' => 28,
        'rating' => 4.7,
        'reviews' => 176,
        'image' => 'https://images.unsplash.com/photo-1476224203421-9ac39bcb3327?auto=format&fit=crop&w=1200&q=70',
        'summary' => 'Patio de palmeras en el valle de las mil palmeras. Reserva imprescindible.',
        'address' => 'C/ Cabildo 9, Haría',
        'slots' => ['13:00', '14:00', '20:00'],
        'dishes' => ['Garbanzas compuestas', 'Conejo en salmorejo', 'Queso frito con miel de palma', 'Frangollo'],
    ],
    [
        'slug' => 'lilium',
        'name' => 'Lilium',
        'cuisine' => 'Canaria contemporánea',
        'zone' => 'Arrecife',
        'menu' => 45,
        'rating' => 4.8,
        'reviews' => 331,
        'image' => 'https://images.unsplash.com/photo-1550966871-3ed3cdb5ed0c?auto=format&fit=crop&w=1200&q=70',
        'summary' => 'Marina Lanzarote. Producto canario con técnica moderna y maridaje local.',
        'address' => 'Marina Lanzarote, Arrecife',
        'slots' => ['13:30', '20:00', '21:00'],
        'dishes' => ['Ceviche de cherne', 'Cochino negro glaseado', 'Millo tostado y mojo', 'Tarta de gofio'],
    ],
    [
        'slug' => 'mar-azul',
        'name' => 'Mar Azul',
        'cuisine' => 'Chiringuito gourmet',
        'zone' => 'Playa Quemada',
        'menu' => 30,
        'rating' => 4.5,
        'reviews' => 209,
        'image' => 'https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&w=1200&q=70',
        'summary' => 'Pies en la arena, sardinas a la plancha y puesta de sol garantizada.',
        'address' => 'Playa Quemada, Yaiza',
        'slots' => ['13:00', '14:30', '19:00'],
        'dishes' => ['Sardinas encebolladas', 'Paella marinera', 'Ensalada de pulpo', 'Helado de plátano'],
    ],
];

$plans = [
    [
        'slug' => 'plan-day-welcome',
        'name' => 'Plan Day · Welcome',
        'price' => 350,
        'pax' => 2,
        'tagline' => 'Aterrizas y la isla ya está en marcha.',
        'image' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=70',
        'chain' => ['Taxi aeropuerto', 'Tour playa', 'Taxi restaurante', 'Cena El Cangrejo Rojo'],
        'timeline' => [
            ['time' => '12:30', 'title' => 'Taxi aeropuerto → villa', 'detail' => 'Mercedes Clase V · conductor Juan M. · placa con tu nombre'],
            ['time' => '15:00', 'title' => 'Tour de playas', 'detail' => 'Papagayo, Mujeres y Caleta del Congrio con sombrilla montada'],
            ['time' => '20:00', 'title' => 'Taxi villa → restaurante', 'detail' => 'Recogida puntual, 12 min de trayecto'],
            ['time' => '20:30', 'title' => 'Cena en El Cangrejo Rojo', 'detail' => 'Mesa en terraza, menú de bienvenida para 2'],
        ],
        'breakdown' => [['Taxi aeropuerto', 45], ['Tour de playas', 100], ['Taxi restaurante ida y vuelta', 40], ['Cena El Cangrejo Rojo (2 pax)', 165]],
    ],
    [
        'slug' => 'plan-day-winery',
        'name' => 'Plan Day · Winery',
        'price' => 450,
        'pax' => 2,
        'tagline' => 'La Geria completa: viñedo, cata y mesa con vistas.',
        'image' => 'https://images.unsplash.com/photo-1506377247377-2a5b3b417ebb?auto=format&fit=crop&w=1200&q=70',
        'chain' => ['Taxi ida', 'Bodega El Grifo', 'Taxi restaurante', 'La Cascada', 'Taxi vuelta'],
        'timeline' => [
            ['time' => '11:00', 'title' => 'Taxi villa → La Geria', 'detail' => 'Ruta panorámica por los hoyos volcánicos'],
            ['time' => '11:30', 'title' => 'Visita y cata en El Grifo', 'detail' => 'Bodega de 1775, cata de 4 Malvasías y quesos'],
            ['time' => '14:00', 'title' => 'Taxi bodega → La Cascada', 'detail' => 'Tus compras viajan en el maletero'],
            ['time' => '14:30', 'title' => 'Almuerzo en La Cascada', 'detail' => 'Menú degustación con maridaje volcánico'],
            ['time' => '17:30', 'title' => 'Taxi de regreso a la villa', 'detail' => 'Vuelta a tu ubicación actual'],
        ],
        'breakdown' => [['Tour de bodega guiado (2 pax)', 100], ['Taxi · 3 trayectos', 60], ['Restaurante La Cascada (2 menús)', 100], ['Cata premium y maridaje', 130], ['Caja de 3 vinos para llevar', 60]],
    ],
    [
        'slug' => 'plan-day-beach',
        'name' => 'Plan Day · Beach',
        'price' => 450,
        'pax' => 2,
        'tagline' => 'Cinco calas, cero decisiones.',
        'image' => 'https://images.unsplash.com/photo-1519046904884-53103b34b206?auto=format&fit=crop&w=1200&q=70',
        'chain' => ['Tour playas en taxi', 'Kayak', 'Taxi restaurante', 'El Cangrejo Rojo'],
        'timeline' => [
            ['time' => '10:00', 'title' => 'Taxi tour de playas', 'detail' => 'Papagayo, Caletón Blanco y Playa Quemada'],
            ['time' => '12:30', 'title' => 'Kayak transparente', 'detail' => '90 min con instructor y fotos incluidas'],
            ['time' => '19:00', 'title' => 'Taxi playa → restaurante', 'detail' => 'Con parada en la villa para cambiarse'],
            ['time' => '20:30', 'title' => 'Cena El Cangrejo Rojo', 'detail' => 'Arroz caldoso de bogavante reservado'],
        ],
        'breakdown' => [['Tour de playas en taxi', 100], ['Kayak transparente (2 pax)', 80], ['Sombrilla, hamacas y picnic', 60], ['Taxi restaurante', 40], ['Taxi regreso villa', 40], ['Cena El Cangrejo Rojo', 100], ['Cesta aftersun de aloe', 30]],
    ],
    [
        'slug' => 'plan-day-boat',
        'name' => 'Plan Day · Boat',
        'price' => 750,
        'pax' => 2,
        'tagline' => 'Barco privado al amanecer y cena de autor al caer el sol.',
        'image' => 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=1200&q=70',
        'chain' => ['Taxi marina', 'Tour en barco', 'Taxi restaurante', 'La Cascada'],
        'timeline' => [
            ['time' => '08:30', 'title' => 'Taxi villa → Marina Rubicón', 'detail' => 'Neveras y toallas cargadas por el conductor'],
            ['time' => '09:00', 'title' => 'Salida en barco privado', 'detail' => 'Calas de Papagayo, snorkel y paddle'],
            ['time' => '14:00', 'title' => 'Almuerzo a bordo', 'detail' => 'Pescado del día y Malvasía fría'],
            ['time' => '20:30', 'title' => 'Cena en La Cascada', 'detail' => 'Mesa junto al patio, taxi incluido ida y vuelta'],
        ],
        'breakdown' => [['Tour en barco privado (5 h)', 400], ['Taxi · 4 trayectos', 60], ['Restaurante La Cascada', 100], ['Almuerzo a bordo y snorkel', 130], ['Reportaje con dron', 60]],
    ],
    [
        'slug' => 'plan-day-market',
        'name' => 'Plan Day · Market',
        'price' => 750,
        'pax' => 2,
        'tagline' => 'Teguise, artesanía viva y crédito de compras incluido.',
        'image' => 'https://images.unsplash.com/photo-1488459716781-31db52582fe9?auto=format&fit=crop&w=1200&q=70',
        'chain' => ['Taxi Teguise', 'Mercadillo guiado', 'Taller artesanal', 'La Cascada'],
        'timeline' => [
            ['time' => '09:00', 'title' => 'Taxi villa → Teguise', 'detail' => 'Llegada antes de la afluencia'],
            ['time' => '09:30', 'title' => 'Mercadillo con guía cultural', 'detail' => 'Cochinilla, timple en vivo y quesos'],
            ['time' => '12:00', 'title' => 'Taller de artesanía', 'detail' => 'Tinte natural y cestería con maestros locales'],
            ['time' => '20:00', 'title' => 'Cena en La Cascada', 'detail' => 'Con lo comprado envuelto y enviado a la villa'],
        ],
        'breakdown' => [['Tour de mercadillo guiado', 100], ['Taxi · 3 trayectos', 60], ['Restaurante La Cascada', 100], ['Guía privado y taller artesanal', 140], ['Crédito de compras en el mercadillo', 250], ['Cata de cochinilla y argán', 100]],
    ],
    [
        'slug' => 'plan-day-airport',
        'name' => 'Plan Day · Airport',
        'price' => 350,
        'pax' => 2,
        'tagline' => 'El último día también cuenta: ruta, almuerzo y vuelo.',
        'image' => 'https://images.unsplash.com/photo-1551632811-561732d1e306?auto=format&fit=crop&w=1200&q=70',
        'chain' => ['Custodia equipaje', 'Senderismo o mercadillo', 'Almuerzo', 'Taxi aeropuerto'],
        'timeline' => [
            ['time' => '08:00', 'title' => 'Recogida de equipaje en la villa', 'detail' => 'Custodia hasta la salida, sin cargar maletas'],
            ['time' => '09:00', 'title' => 'Senderismo o mercadillo', 'detail' => 'Eliges por la mañana desde la app'],
            ['time' => '13:00', 'title' => 'Almuerzo ligero', 'detail' => 'Terraza con vistas cerca del aeropuerto'],
            ['time' => '16:00', 'title' => 'Taxi al aeropuerto', 'detail' => 'Con margen de 2 h antes del vuelo'],
        ],
        'breakdown' => [['Senderismo o mercadillo guiado', 100], ['Taxi aeropuerto y traslados', 60], ['Late check-out y custodia de equipaje', 90], ['Almuerzo ligero (2 pax)', 100]],
    ],
    [
        'slug' => 'plan-full',
        'name' => 'Plan Full · Villa Müller, 4 noches',
        'price' => 2500,
        'pax' => 2,
        'tagline' => 'Cuatro noches, cuatro tours, cuatro cenas y diez taxis. Todo cerrado.',
        'image' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=1200&q=70',
        'chain' => ['Villa Müller', 'Bodega', 'Barco', 'Senderismo', 'Mercadillo', '10 taxis'],
        'timeline' => [
            ['time' => 'Día 1', 'title' => 'Llegada · Plan Day Welcome', 'detail' => 'Taxi aeropuerto, tour de playa y cena en El Cangrejo Rojo'],
            ['time' => 'Día 2', 'title' => 'Plan Day Winery', 'detail' => 'Bodega El Grifo, cata y almuerzo en La Cascada'],
            ['time' => 'Día 3', 'title' => 'Plan Day Boat', 'detail' => 'Barco privado a Papagayo y cena de autor'],
            ['time' => 'Día 4', 'title' => 'Senderismo y mercadillo', 'detail' => 'Caldera Blanca por la mañana, Teguise por la tarde'],
            ['time' => 'Día 5', 'title' => 'Plan Day Airport', 'detail' => 'Custodia de equipaje, almuerzo y taxi al aeropuerto'],
        ],
        'breakdown' => [['Villa Müller · 4 noches (2 pax)', 1200], ['Tour de bodega', 100], ['Tour en barco privado', 400], ['Taxi tour de playas', 100], ['Senderismo Caldera Blanca', 100], ['Mercadillo de Teguise', 20], ['4 cenas · 2 restaurantes (35 €/pax)', 280], ['10 trayectos de taxi', 300]],
    ],
];

$products = [
    ['slug' => 'malvasia-volcanica-seco', 'name' => 'Malvasía Volcánica Seco', 'category' => 'Vinos', 'price' => 14, 'pickup' => 'Bodega El Grifo', 'stock' => 128, 'image' => 'https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?auto=format&fit=crop&w=800&q=70', 'note' => 'Cosecha 2023 · 12,5%'],
    ['slug' => 'tinto-maceracion-carbonica', 'name' => 'Tinto Maceración Carbónica', 'category' => 'Vinos', 'price' => 16, 'pickup' => 'Bodega Rubicón', 'stock' => 74, 'image' => 'https://images.unsplash.com/photo-1553361371-9b22f78e8b1d?auto=format&fit=crop&w=800&q=70', 'note' => 'Listán negro de La Geria'],
    ['slug' => 'moscatel-dulce', 'name' => 'Moscatel Dulce Naturalmente', 'category' => 'Vinos', 'price' => 19, 'pickup' => 'Bodega El Grifo', 'stock' => 42, 'image' => 'https://images.unsplash.com/photo-1474722883778-792e7990302f?auto=format&fit=crop&w=800&q=70', 'note' => 'Media botella 50 cl'],
    ['slug' => 'gel-puro-aloe', 'name' => 'Gel Puro de Aloe Vera 99%', 'category' => 'Aloe Vera', 'price' => 12, 'pickup' => 'Finca Los Verdes', 'stock' => 310, 'image' => 'https://images.unsplash.com/photo-1596755094514-f87e34085b2c?auto=format&fit=crop&w=800&q=70', 'note' => '200 ml · ecológico'],
    ['slug' => 'crema-facial-aloe', 'name' => 'Crema Facial de Aloe y Argán', 'category' => 'Aloe Vera', 'price' => 24, 'pickup' => 'Finca Los Verdes', 'stock' => 96, 'image' => 'https://images.unsplash.com/photo-1571781926291-c477ebfd024b?auto=format&fit=crop&w=800&q=70', 'note' => '50 ml · piel sensible'],
    ['slug' => 'aftersun-aloe', 'name' => 'Aftersun de Aloe Fresco', 'category' => 'Aloe Vera', 'price' => 15, 'pickup' => 'Tienda Puerto del Carmen', 'stock' => 187, 'image' => 'https://images.unsplash.com/photo-1556228720-195a672e8a03?auto=format&fit=crop&w=800&q=70', 'note' => '250 ml · efecto frío'],
    ['slug' => 'serum-uva-vinoterapia', 'name' => 'Sérum de Uva · Vinoterapia', 'category' => 'Vinoterapia', 'price' => 32, 'pickup' => 'Bodega Rubicón', 'stock' => 58, 'image' => 'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&w=800&q=70', 'note' => 'Polifenoles de Listán'],
    ['slug' => 'exfoliante-hollejo', 'name' => 'Exfoliante de Hollejo y Sal Marina', 'category' => 'Vinoterapia', 'price' => 21, 'pickup' => 'Bodega Rubicón', 'stock' => 65, 'image' => 'https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?auto=format&fit=crop&w=800&q=70', 'note' => '300 g'],
    ['slug' => 'aceite-argan', 'name' => 'Aceite de Argán 100% Puro', 'category' => 'Argán', 'price' => 28, 'pickup' => 'Tienda Puerto del Carmen', 'stock' => 83, 'image' => 'https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?auto=format&fit=crop&w=800&q=70', 'note' => '100 ml · primera presión'],
    ['slug' => 'jabon-argan', 'name' => 'Jabón Artesano de Argán', 'category' => 'Argán', 'price' => 9, 'pickup' => 'Mercadillo de Teguise', 'stock' => 240, 'image' => 'https://images.unsplash.com/photo-1600857544200-b2f666a9a2ec?auto=format&fit=crop&w=800&q=70', 'note' => 'Pastilla 120 g'],
    ['slug' => 'carmin-cochinilla', 'name' => 'Carmín de Cochinilla de Mala', 'category' => 'Cochinilla', 'price' => 22, 'pickup' => 'Mercadillo de Teguise', 'stock' => 37, 'image' => 'https://images.unsplash.com/photo-1596040033229-a9821ebd058d?auto=format&fit=crop&w=800&q=70', 'note' => 'Pigmento natural 30 g'],
    ['slug' => 'cesta-isla', 'name' => 'Cesta Isla · Vino, Aloe y Queso', 'category' => 'Packs', 'price' => 55, 'pickup' => 'Bodega El Grifo', 'stock' => 44, 'image' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=800&q=70', 'note' => 'Preparada para recoger'],
];

$bookings = [
    ['ref' => 'MLP-24815', 'client' => 'Sofía Marrero', 'type' => 'Taxi + Bodega + Restaurante', 'provider' => 'El Grifo · La Cascada', 'date' => '18 jun · 16:00', 'pax' => 2, 'total' => 280, 'status' => 'Confirmada', 'payment' => 'Pagado'],
    ['ref' => 'MLP-24816', 'client' => 'Hans Müller', 'type' => 'Plan Full · 4 noches', 'provider' => 'Villa Müller', 'date' => '19 jun · 12:30', 'pax' => 2, 'total' => 2500, 'status' => 'Confirmada', 'payment' => 'Pagado'],
    ['ref' => 'MLP-24817', 'client' => 'Laura Betancort', 'type' => 'Tour en barco', 'provider' => 'Tours Marinos Rubicón', 'date' => '19 jun · 09:00', 'pax' => 6, 'total' => 400, 'status' => 'En ruta', 'payment' => 'Pagado'],
    ['ref' => 'MLP-24818', 'client' => 'James Whitfield', 'type' => 'Taxi aeropuerto', 'provider' => 'Taxi Lanzarote Sur', 'date' => '19 jun · 14:10', 'pax' => 3, 'total' => 45, 'status' => 'Asignada', 'payment' => 'Pagado'],
    ['ref' => 'MLP-24819', 'client' => 'Marta Cabrera', 'type' => 'Restaurante', 'provider' => 'El Cangrejo Rojo', 'date' => '19 jun · 20:30', 'pax' => 4, 'total' => 140, 'status' => 'Pendiente', 'payment' => 'Autorizado'],
    ['ref' => 'MLP-24820', 'client' => 'Nicolas Fournier', 'type' => 'Plan Day · Winery', 'provider' => 'El Grifo · La Cascada', 'date' => '20 jun · 11:00', 'pax' => 2, 'total' => 450, 'status' => 'Confirmada', 'payment' => 'Pagado'],
    ['ref' => 'MLP-24821', 'client' => 'Aitana Perdomo', 'type' => 'Productos · recogida', 'provider' => 'Finca Los Verdes', 'date' => '20 jun · 12:00', 'pax' => 1, 'total' => 51, 'status' => 'Preparando', 'payment' => 'Pagado'],
    ['ref' => 'MLP-24822', 'client' => 'Greta Lindqvist', 'type' => 'Senderismo + Taxi', 'provider' => 'Malpaís Trekking', 'date' => '20 jun · 07:30', 'pax' => 2, 'total' => 140, 'status' => 'Confirmada', 'payment' => 'Pagado'],
    ['ref' => 'MLP-24823', 'client' => 'Diego Santana', 'type' => 'Taxi tour Timanfaya', 'provider' => 'Taxi Lanzarote Sur', 'date' => '21 jun · 09:30', 'pax' => 4, 'total' => 100, 'status' => 'Asignada', 'payment' => 'Pagado'],
    ['ref' => 'MLP-24824', 'client' => 'Emma Rossi', 'type' => 'Plan Day · Boat', 'provider' => 'Marina Rubicón', 'date' => '21 jun · 08:30', 'pax' => 2, 'total' => 750, 'status' => 'Pendiente', 'payment' => 'Autorizado'],
    ['ref' => 'MLP-24825', 'client' => 'Yeray Hernández', 'type' => 'Restaurante', 'provider' => 'La Cascada', 'date' => '21 jun · 21:00', 'pax' => 2, 'total' => 70, 'status' => 'Confirmada', 'payment' => 'Pagado'],
    ['ref' => 'MLP-24826', 'client' => 'Olivia Brennan', 'type' => 'Mercadillo + Taxi', 'provider' => 'Teguise Cultura', 'date' => '22 jun · 09:00', 'pax' => 3, 'total' => 90, 'status' => 'Cancelada', 'payment' => 'Reembolsado'],
];

$agents = [
    ['name' => 'Taxi Lanzarote Sur', 'server' => 'mcp://taxi.malpais.io', 'tools' => 4, 'status' => 'Conectado', 'latency' => '112 ms', 'last' => 'reservar_taxi · MLP-24818 aceptada'],
    ['name' => 'Bodegas La Geria', 'server' => 'mcp://winery.malpais.io', 'tools' => 5, 'status' => 'Conectado', 'latency' => '148 ms', 'last' => 'reservar_visita · 2 pax 16:30'],
    ['name' => 'Restaurantes Isla', 'server' => 'mcp://resto.malpais.io', 'tools' => 6, 'status' => 'Conectado', 'latency' => '96 ms', 'last' => 'consultar_disponibilidad · La Cascada'],
    ['name' => 'Tours Marinos Rubicón', 'server' => 'mcp://boat.malpais.io', 'tools' => 3, 'status' => 'Conectado', 'latency' => '204 ms', 'last' => 'reservar_tour · barco privado 09:00'],
    ['name' => 'Villas Müller', 'server' => 'mcp://villas.malpais.io', 'tools' => 5, 'status' => 'Degradado', 'latency' => '860 ms', 'last' => 'consultar_precio · reintentando webhook'],
    ['name' => 'Tienda Aloe & Vino', 'server' => 'mcp://shop.malpais.io', 'tools' => 4, 'status' => 'Conectado', 'latency' => '78 ms', 'last' => 'preparar_recogida · caja 3 Malvasías'],
];

$fleet = [
    ['driver' => 'Juan Melián', 'plate' => 'GC-4821-LZ', 'vehicle' => 'Mercedes Clase V · 7 pax', 'zone' => 'Aeropuerto', 'status' => 'En ruta', 'trips' => 6],
    ['driver' => 'Rosa Betancort', 'plate' => 'GC-9013-LP', 'vehicle' => 'Skoda Superb · 4 pax', 'zone' => 'Puerto del Carmen', 'status' => 'Libre', 'trips' => 4],
    ['driver' => 'Antonio Cabrera', 'plate' => 'GC-1177-LZ', 'vehicle' => 'Tesla Model Y · 4 pax', 'zone' => 'Playa Blanca', 'status' => 'Asignado', 'trips' => 5],
    ['driver' => 'Nayra Perdomo', 'plate' => 'GC-3390-LZ', 'vehicle' => 'Ford Tourneo · 8 pax', 'zone' => 'Yaiza', 'status' => 'En ruta', 'trips' => 3],
    ['driver' => 'Fernando Díaz', 'plate' => 'GC-7742-LM', 'vehicle' => 'Toyota Prius · 4 pax', 'zone' => 'Arrecife', 'status' => 'Libre', 'trips' => 7],
    ['driver' => 'Candelaria Rijo', 'plate' => 'GC-5508-LZ', 'vehicle' => 'Seat Alhambra · 6 pax', 'zone' => 'Teguise', 'status' => 'Descanso', 'trips' => 2],
    ['driver' => 'Óscar Ramírez', 'plate' => 'GC-2264-LZ', 'vehicle' => 'Mercedes Vito · 8 pax', 'zone' => 'La Geria', 'status' => 'Asignado', 'trips' => 4],
    ['driver' => 'Elena Curbelo', 'plate' => 'GC-8811-LZ', 'vehicle' => 'Kia Niro · 4 pax', 'zone' => 'Costa Teguise', 'status' => 'Libre', 'trips' => 5],
    ['driver' => 'Samuel Toledo', 'plate' => 'GC-6120-LZ', 'vehicle' => 'VW Caravelle · 7 pax', 'zone' => 'Famara', 'status' => 'En ruta', 'trips' => 3],
    ['driver' => 'Marisa Feo', 'plate' => 'GC-4407-LZ', 'vehicle' => 'Peugeot 5008 · 6 pax', 'zone' => 'Haría', 'status' => 'Libre', 'trips' => 1],
];

/* ---------------------------- Público ---------------------------- */

Route::get('/ai', fn () => view('public.ai.index', ['tours' => $tours, 'restaurants' => $restaurants, 'plans' => $plans]));

Route::get('/wizard', fn () => view('public.wizard.index', ['tours' => $tours, 'restaurants' => $restaurants, 'products' => $products]));

Route::get('/plans', fn () => view('public.plans.index', ['plans' => $plans]));

Route::get('/plans/{slug}', function ($slug) use ($plans) {
    $plan = collect($plans)->firstWhere('slug', $slug) ?? $plans[0];

    return view('public.plans.show', ['plan' => $plan, 'plans' => $plans]);
});

Route::get('/tours', fn () => view('public.tours.index', ['tours' => $tours]));

Route::get('/tours/{slug}', function ($slug) use ($tours, $products) {
    $tour = collect($tours)->firstWhere('slug', $slug) ?? $tours[0];

    return view('public.tours.show', ['tour' => $tour, 'tours' => $tours, 'products' => $products]);
});

Route::get('/restaurants', fn () => view('public.restaurants.index', ['restaurants' => $restaurants]));

Route::get('/restaurants/{slug}', function ($slug) use ($restaurants, $products) {
    $restaurant = collect($restaurants)->firstWhere('slug', $slug) ?? $restaurants[0];

    return view('public.restaurants.show', ['restaurant' => $restaurant, 'products' => $products]);
});

Route::get('/taxi', fn () => view('public.taxi.index', ['tours' => $tours, 'restaurants' => $restaurants]));

Route::get('/shop', fn () => view('public.shop.index', ['products' => $products]));

Route::get('/checkout', fn () => view('public.checkout.index'));

Route::get('/checkout/confirmacion', fn () => view('public.checkout.confirmation', ['agents' => $agents]));

/* ---------------------------- Panel ------------------------------ */

Route::get('/admin/bookings', fn () => view('admin.bookings.index', ['bookings' => $bookings]));

Route::get('/admin/taxis', fn () => view('admin.taxis.index', ['fleet' => $fleet, 'bookings' => $bookings]));

Route::get('/admin/tours', fn () => view('admin.tours.index', ['tours' => $tours]));

Route::get('/admin/restaurants', fn () => view('admin.restaurants.index', ['restaurants' => $restaurants]));

Route::get('/admin/products', fn () => view('admin.products.index', ['products' => $products]));

Route::get('/admin/products/create', fn () => view('admin.products.create'));

Route::get('/admin/agents', fn () => view('admin.agents.index', ['agents' => $agents]));