<?php
require_once __DIR__ . '/../classes/Accessories.php';
require_once __DIR__ . '/../classes/Category.php';
require_once __DIR__ . '/../classes/Toys.php';
require_once __DIR__ . '/../classes/Food.php';
require_once __DIR__ . '/../classes/Accessories.php';

// Un'altra opzione per scrivere era $pesci = new Category('pesci', 'prodotti per pesci')
$categories = [
    "pesci" => new Category('pesci', 'prodotti per pesci'),
    "cane" => new Category('cani', 'prodotti per cani'),
    "uccelli" => new Category('uccelli', 'prodotti per uccelli'),
    "gatto" => new Category('gatti', 'prodotti per gatti'),
];

$products = [
    new Food('Mini Adult', 'Royal Canin', 15, 'https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg', true, $categories['cane'], 7000, 800, ['manzo', 'pollo']),
    new Food('Holistic Maintenance Medium Large Tonno', 'Almo Nature', 40, 'https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg', true, $categories['cane'], 7000, 800, ['tonno', 'riso']),
    new Food('Cat Daily Lattina', 'Almo Nature', 16, 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', true, $categories['gatto'], 6000, 100, ['vitello', 'calcio']),
    new Food('Mangime per Pesci Guppy in Fiocchi', 'Tetra', 17, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', true, $categories['pesci'], 9000, 200, ['pane', 'briciole']),
    new Accessories('Voliera in Legno', 'Wilma', 500, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', false, $categories['uccelli'], 'yellow', 'media', 'non far scappre gli uccelli'),
    new Accessories('Cartucce Filtranti per Filtro', 'EasyCrystal', 25, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', true, $categories['pesci'], 'green', 'piccola', 'filtra acqua dell\'acquario'),
    new Toys('Gioco Kong per cani', 'Kong', 20, 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', true, $categories['cane'], 'ABS Plastico', 'rosso'),
    new Toys('Topini di peluche', 'Trixie', 22, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', true, $categories["gatto"], 'peluche sintetico', 'bianco e nero')
]

?>