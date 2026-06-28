<?php
function alnuur_get_products() {
    return [
        'sofas' => [
            'name' => 'Sofas',
            'slug' => 'sofas',
            'icon' => '🛋️',
            'image' => 'IMAGES/Sofas.jpg',
            'description' => 'Premium sofas crafted for comfort and style.',
            'products' => [
                ['name' => 'Classic Velvet Sofa Set', 'price' => 45000, 'image' => 'IMAGES/Sofas 1.jpg', 'desc' => 'Elegant 3-seater velvet sofa with plush cushioning.', 'featured' => true],
                ['name' => 'Modern L-Shaped Sofa', 'price' => 68000, 'image' => 'IMAGES/Sofas 2.jpg', 'desc' => 'Spacious L-shaped sofa perfect for family living rooms.', 'featured' => true],
                ['name' => 'Luxury Leather Sofa', 'price' => 85000, 'image' => 'IMAGES/Sofas 3.jpg', 'desc' => 'Genuine leather sofa with premium craftsmanship.', 'featured' => true],
                ['name' => '3-Seater Fabric Sofa', 'price' => 38000, 'image' => 'IMAGES/Sofas 4.jpg', 'desc' => 'Comfortable fabric sofa in contemporary design.'],
                ['name' => 'Recliner Sofa Set', 'price' => 72000, 'image' => 'IMAGES/Sofas 5.jpg', 'desc' => 'Power recliner sofa set with built-in massage.'],
                ['name' => 'Compact 2-Seater Sofa', 'price' => 32000, 'image' => 'IMAGES/Sofas 6.jpg', 'desc' => 'Space-saving 2-seater for apartments and small spaces.'],
                ['name' => 'Sectional Sofa with Ottoman', 'price' => 95000, 'image' => 'IMAGES/Sofas 7.jpg', 'desc' => 'Large sectional with ottoman and storage compartment.'],
                ['name' => 'Premium Chesterfield Sofa', 'price' => 120000, 'image' => 'IMAGES/Sofas.jpg', 'desc' => 'Classic tufted chesterfield with rolled arms.', 'featured' => true],
            ]
        ],
        'beds' => [
            'name' => 'Beds',
            'slug' => 'beds',
            'icon' => '🛏️',
            'image' => 'IMAGES/Beds.jpg',
            'description' => 'Quality bed frames for restful sleep.',
            'products' => [
                ['name' => 'Classic Wooden Bed Frame', 'price' => 28000, 'image' => 'IMAGES/Beds 1.jpg', 'desc' => 'Solid木 bed frame with slatted base.', 'featured' => true],
                ['name' => 'Upholstered King Size Bed', 'price' => 65000, 'image' => 'IMAGES/Beds 2.jpg', 'desc' => 'Luxury upholstered king bed with headboard.', 'featured' => true],
                ['name' => 'Modern Platform Bed', 'price' => 42000, 'image' => 'IMAGES/Beds 3.jpg', 'desc' => 'Low-profile platform bed with storage underneath.'],
                ['name' => 'Bunk Bed with Storage', 'price' => 38000, 'image' => 'IMAGES/Beds 4.jpg', 'desc' => 'Space-saving bunk bed with built-in drawers.'],
                ['name' => 'Queen Size Bed Frame', 'price' => 35000, 'image' => 'IMAGES/Beds 5.jpg', 'desc' => 'Elegant queen bed frame with wooden finish.'],
                ['name' => 'Luxury Sleigh Bed', 'price' => 78000, 'image' => 'IMAGES/Beds.jpg', 'desc' => 'Grand sleigh bed with curved headboard and footboard.', 'featured' => true],
            ]
        ],
        'mattresses' => [
            'name' => 'Mattresses',
            'slug' => 'mattresses',
            'icon' => '🛏️',
            'image' => 'IMAGES/mattress and beds.jpg',
            'description' => 'Comfort and support for every sleeper.',
            'products' => [
                ['name' => 'Orthopedic Memory Foam Mattress', 'price' => 25000, 'image' => 'IMAGES/Orthobliss orthopedic mattress.jpg', 'desc' => 'Pressure-relieving memory foam for spinal alignment.', 'featured' => true],
                ['name' => 'Heavy Duty 10-Inch Mattress', 'price' => 32000, 'image' => 'IMAGES/Heavy Duty 10-Inch Mattress.jpg', 'desc' => 'Extra thick mattress with reinforced support.'],
                ['name' => 'Premium Spring Mattress', 'price' => 18000, 'image' => 'IMAGES/All Size Medical Mattress and Spring Mattress.jpg', 'desc' => 'Bonnel spring mattress with quilted top.'],
                ['name' => 'Medical Mattress', 'price' => 45000, 'image' => 'IMAGES/All Size Medical Mattress and Spring Mattress.jpg', 'desc' => 'Hospital-grade mattress with anti-bacterial cover.', 'featured' => true],
                ['name' => 'Morning Glory Mattress', 'price' => 22000, 'image' => 'IMAGES/morning glory mattress.jpg', 'desc' => 'Medium-firm mattress with cooling gel layer.'],
                ['name' => 'Rose Foam Mattress', 'price' => 15000, 'image' => 'IMAGES/Rose foam mattresses.jpg', 'desc' => 'Budget-friendly foam mattress with 5-year warranty.'],
                ['name' => 'Heavy Duty Mattress (Twin)', 'price' => 28000, 'image' => 'IMAGES/Heavy Duty 10-Inch Mattressess.jpg', 'desc' => 'Durable twin mattress for guest rooms.'],
            ]
        ],
        'dining' => [
            'name' => 'Dining Sets',
            'slug' => 'dining',
            'icon' => '🍽️',
            'image' => 'IMAGES/Dining Sets.jpg',
            'description' => 'Beautiful dining sets for every home.',
            'products' => [
                ['name' => '6-Seater Dining Set', 'price' => 55000, 'image' => 'IMAGES/Dining Sets 1.jpg', 'desc' => 'Solid wood table with 6 upholstered chairs.', 'featured' => true],
                ['name' => '4-Seater Dining Set', 'price' => 38000, 'image' => 'IMAGES/Dining Sets 2.jpg', 'desc' => 'Compact dining set ideal for small families.'],
                ['name' => 'Glass Top Dining Set', 'price' => 48000, 'image' => 'IMAGES/Dining Sets 3.jpg', 'desc' => 'Modern glass table with steel base and 6 chairs.', 'featured' => true],
                ['name' => 'Wooden Dining Set', 'price' => 42000, 'image' => 'IMAGES/Dining Sets 4.jpg', 'desc' => 'Classic wooden set with intricate carvings.'],
                ['name' => 'Extendable Dining Set', 'price' => 65000, 'image' => 'IMAGES/Dining Sets5.jpg', 'desc' => 'Extendable table seating 6-8 with leaf extension.', 'featured' => true],
                ['name' => 'Modern Dining Set', 'price' => 35000, 'image' => 'IMAGES/Dining Sets.jpg', 'desc' => 'Sleek modern set in matte black finish.'],
            ]
        ],
        'wardrobes' => [
            'name' => 'Wardrobes',
            'slug' => 'wardrobes',
            'icon' => '🚪',
            'image' => 'IMAGES/Wardrobes.jpg',
            'description' => 'Stylish storage solutions for your wardrobe.',
            'products' => [
                ['name' => '6-Door Sliding Wardrobe', 'price' => 58000, 'image' => 'IMAGES/Wardrobes 1.jpg', 'desc' => 'Large sliding door wardrobe with premium finish.', 'featured' => true],
                ['name' => '4-Door Wardrobe', 'price' => 42000, 'image' => 'IMAGES/Wardrobes 2.jpg', 'desc' => 'Spacious 4-door wardrobe with hanging and shelves.'],
                ['name' => '2-Door Wardrobe', 'price' => 28000, 'image' => 'IMAGES/Wardrobes 3.jpg', 'desc' => 'Compact 2-door wardrobe for smaller bedrooms.'],
                ['name' => 'Corner Wardrobe', 'price' => 48000, 'image' => 'IMAGES/Wardrobes 4.jpg', 'desc' => 'Space-maximizing corner wardrobe unit.', 'featured' => true],
                ['name' => 'Walk-in Closet System', 'price' => 120000, 'image' => 'IMAGES/Wardrobes 5.jpg', 'desc' => 'Customizable walk-in closet with modular components.'],
                ['name' => 'Built-in Wardrobe Set', 'price' => 75000, 'image' => 'IMAGES/Wardrobes 6.jpg', 'desc' => 'Floor-to-ceiling built-in wardrobe with drawers.', 'featured' => true],
                ['name' => 'Modern Wardrobe with Drawers', 'price' => 35000, 'image' => 'IMAGES/Wardrobes.jpg', 'desc' => 'Sleek modern wardrobe with 3 drawers and hanging.'],
            ]
        ],
        'office' => [
            'name' => 'Office Furniture',
            'slug' => 'office',
            'icon' => '💼',
            'image' => 'IMAGES/Office Furniture.jpg',
            'description' => 'Ergonomic office furniture for productivity.',
            'products' => [
                ['name' => 'Executive Office Desk', 'price' => 45000, 'image' => 'IMAGES/Office Furniture 1.jpg', 'desc' => 'Large executive desk with return bridge.', 'featured' => true],
                ['name' => 'Office Workstation', 'price' => 35000, 'image' => 'IMAGES/Office Furniture.jpg', 'desc' => 'Modern workstation with cable management.', 'featured' => true],
                ['name' => 'Homall High Back Gaming Chair', 'price' => 28000, 'image' => 'IMAGES/Homall High Back Leather Office Gaming Chair.jpg', 'desc' => 'Ergonomic gaming chair with lumbar support.'],
                ['name' => 'Ergonomic Office Chair', 'price' => 22000, 'image' => 'IMAGES/Office chair.jpg', 'desc' => 'Adjustable office chair with mesh back.'],
                ['name' => 'Leopard Gaming Chair', 'price' => 32000, 'image' => 'IMAGES/Leopard Gaming Chair.jpg', 'desc' => 'Premium gaming chair with unique leopard print.'],
                ['name' => 'Leopard Gaming Chair Pro', 'price' => 35000, 'image' => 'IMAGES/Leopard Gaming Chair 1.jpg', 'desc' => 'Leopard chair with footrest and massage.', 'featured' => true],
            ]
        ],
        'outdoor' => [
            'name' => 'Outdoor Furniture',
            'slug' => 'outdoor',
            'icon' => '🌿',
            'image' => 'IMAGES/Outdoor Furniture.jpg',
            'description' => 'Durable outdoor furniture for your patio.',
            'products' => [
                ['name' => 'Garden Sofa Set', 'price' => 58000, 'image' => 'IMAGES/Outdoor Furniture 1.jpg', 'desc' => 'Weather-resistant rattan sofa set with cushions.', 'featured' => true],
                ['name' => 'Outdoor Dining Table', 'price' => 42000, 'image' => 'IMAGES/Outdoor Furniture 2.jpg', 'desc' => '8-seater outdoor dining table in teak finish.'],
                ['name' => 'Poolside Lounge Chairs', 'price' => 18000, 'image' => 'IMAGES/Outdoor Furniture 3.jpg', 'desc' => 'Adjustable lounge chairs with UV-resistant straps.'],
                ['name' => 'Balcony Bistro Set', 'price' => 15000, 'image' => 'IMAGES/Outdoor Furniture 4.jpg', 'desc' => 'Compact 2-seater bistro set for small balconies.'],
                ['name' => 'Patio Umbrella & Stand', 'price' => 12000, 'image' => 'IMAGES/Outdoor Furniture 5.jpg', 'desc' => 'Large 3m patio umbrella with tilting mechanism.'],
                ['name' => 'Outdoor Daybed', 'price' => 65000, 'image' => 'IMAGES/Outdoor Furniture.jpg', 'desc' => 'Spacious daybed with canopy and cushions.', 'featured' => true],
            ]
        ],
        'decor' => [
            'name' => 'Home Decor',
            'slug' => 'decor',
            'icon' => '🏠',
            'image' => 'IMAGES/Home Decor 1.jpg',
            'description' => 'Elevate your space with premium home decor.',
            'products' => [
                ['name' => 'Luxury Table Lamp Set', 'price' => 8500, 'image' => 'IMAGES/Home Decor 1.jpg', 'desc' => 'Set of 2 crystal table lamps with linen shades.', 'featured' => true],
                ['name' => 'Decorative Wall Mirror', 'price' => 12000, 'image' => 'IMAGES/Home Decor 2.jpg', 'desc' => 'Large ornate mirror with gold leaf frame.'],
                ['name' => 'Premium Area Rug', 'price' => 18000, 'image' => 'IMAGES/Home Decor 3.jpg', 'desc' => 'Hand-woven wool rug in geometric patterns.'],
                ['name' => 'Wall Art Canvas Set', 'price' => 9500, 'image' => 'IMAGES/Home Decor 4.jpg', 'desc' => 'Set of 3 abstract canvas wall art pieces.'],
            ]
        ],
        'refrigerators' => [
            'name' => 'Refrigerators & Freezers',
            'slug' => 'refrigerators',
            'icon' => '❄️',
            'image' => 'IMAGES/refrigerators and freezers.jpg',
            'description' => 'Energy-efficient cooling for your kitchen.',
            'products' => [
                ['name' => 'French Door Refrigerator', 'price' => 145000, 'image' => 'IMAGES/refrigerators and freezers 1.jpg', 'desc' => 'Stainless steel french door fridge with ice maker.', 'featured' => true],
                ['name' => 'Side-by-Side Fridge', 'price' => 115000, 'image' => 'IMAGES/refrigerators and freezers 2.jpg', 'desc' => 'Large capacity side-by-side with water dispenser.', 'featured' => true],
                ['name' => 'Single Door Refrigerator', 'price' => 45000, 'image' => 'IMAGES/refrigerators and freezers 3.jpg', 'desc' => 'Compact single door fridge perfect for small kitchens.'],
                ['name' => 'Chest Freezer', 'price' => 55000, 'image' => 'IMAGES/refrigerators and freezers 4.jpg', 'desc' => '200L chest freezer with efficient cooling.', 'featured' => true],
                ['name' => 'Upright Freezer', 'price' => 65000, 'image' => 'IMAGES/refrigerators and freezers.jpg', 'desc' => '300L upright freezer with adjustable shelves.'],
            ]
        ],
        'washing' => [
            'name' => 'Washing Machines',
            'slug' => 'washing',
            'icon' => '🧺',
            'image' => 'IMAGES/Washing Machines.jpg',
            'description' => 'Reliable washing machines for your laundry.',
            'products' => [
                ['name' => 'Front Load Washer 10kg', 'price' => 65000, 'image' => 'IMAGES/Washing Machines 1.jpg', 'desc' => 'Energy-efficient front loader with steam cycle.', 'featured' => true],
                ['name' => 'Top Load Washer 8kg', 'price' => 42000, 'image' => 'IMAGES/Washing Machines 2.jpg', 'desc' => 'Automatic top loader with multiple programs.'],
                ['name' => 'Washer-Dryer Combo', 'price' => 85000, 'image' => 'IMAGES/Washing Machines 3.jpg', 'desc' => '2-in-1 washer dryer with sensor drying.', 'featured' => true],
                ['name' => 'Semi-Automatic Washer', 'price' => 25000, 'image' => 'IMAGES/Washing Machines 4.jpg', 'desc' => 'Twin-tub washer with separate spinner.'],
                ['name' => 'Front Load Washer 7kg', 'price' => 52000, 'image' => 'IMAGES/Washing Machines.jpg', 'desc' => 'Compact front loader for smaller spaces.'],
            ]
        ],
        'cookers' => [
            'name' => 'Cookers & Ovens',
            'slug' => 'cookers',
            'icon' => '🔥',
            'image' => 'IMAGES/Cookers.jpg',
            'description' => 'Professional cooking appliances for your kitchen.',
            'products' => [
                ['name' => '4-Burner Gas Cooker with Oven', 'price' => 55000, 'image' => 'IMAGES/Tempered Glass Built-in 4-Burner Gas Cooktop Cooking Range With Oven.jpg', 'desc' => 'Gas cooker with tempered glass top and oven.', 'featured' => true],
                ['name' => '4-Burner Electric Cooker', 'price' => 48000, 'image' => 'IMAGES/4 gas burner and one electric.jpg', 'desc' => 'Electric cooker with 4 burners and grill.', 'featured' => true],
                ['name' => 'Electronic Cooker', 'price' => 35000, 'image' => 'IMAGES/Electronic coocker.jpg', 'desc' => 'Digital cooker with multiple cooking modes.'],
                ['name' => 'Gas Burner', 'price' => 8500, 'image' => 'IMAGES/gas burner.jpg', 'desc' => 'Single gas burner for portable cooking.'],
                ['name' => 'Built-in Cooktop', 'price' => 42000, 'image' => 'IMAGES/Cookers 1.jpg', 'desc' => '4-burner built-in gas cooktop in stainless steel.'],
                ['name' => 'Standard Gas Cooker', 'price' => 38000, 'image' => 'IMAGES/Cookers.jpg', 'desc' => 'Reliable 4-burner gas cooker with oven.'],
            ]
        ],
        'microwaves' => [
            'name' => 'Microwaves',
            'slug' => 'microwaves',
            'icon' => '📡',
            'image' => 'IMAGES/microwaves picture.jpg',
            'description' => 'Convenient microwave ovens for quick cooking.',
            'products' => [
                ['name' => 'Solo Microwave 25L', 'price' => 12000, 'image' => 'IMAGES/microwaves picture 1.jpg', 'desc' => 'Digital microwave with auto-cook menus.', 'featured' => true],
                ['name' => 'Grill Microwave 30L', 'price' => 18000, 'image' => 'IMAGES/microwaves picture 2.jpg', 'desc' => 'Microwave with grill function for crispy food.', 'featured' => true],
                ['name' => 'Convection Microwave 32L', 'price' => 25000, 'image' => 'IMAGES/microwaves picture 3.jpg', 'desc' => 'Convection microwave with baking capabilities.'],
                ['name' => 'Compact Microwave 20L', 'price' => 8500, 'image' => 'IMAGES/microwaves picture 4.jpg', 'desc' => 'Space-saving microwave for small kitchens.'],
                ['name' => 'Smart Microwave 28L', 'price' => 22000, 'image' => 'IMAGES/microwaves picture.jpg', 'desc' => 'Smart inverter microwave with sensor cooking.'],
            ]
        ],
        'dispensers' => [
            'name' => 'Water Dispensers',
            'slug' => 'dispensers',
            'icon' => '💧',
            'image' => 'IMAGES/Water Dispensers pictures.jpg',
            'description' => 'Clean drinking water for your home or office.',
            'products' => [
                ['name' => 'Hot & Cold Dispenser', 'price' => 15000, 'image' => 'IMAGES/Water Dispensers pictures 1.jpg', 'desc' => 'Top-loading dispenser with hot and cold taps.', 'featured' => true],
                ['name' => 'Bottom-Load Dispenser', 'price' => 22000, 'image' => 'IMAGES/Water Dispensers pictures 2.jpg', 'desc' => 'Bottom-loading dispenser with child safety lock.', 'featured' => true],
                ['name' => '3-Temperature Dispenser', 'price' => 28000, 'image' => 'IMAGES/Water Dispensers pictures 3.jpg', 'desc' => 'Hot, cold and room temperature water dispenser.'],
                ['name' => 'Freestanding Water Dispenser', 'price' => 12000, 'image' => 'IMAGES/Water Dispensers pictures 4.jpg', 'desc' => 'Basic freestanding model with hot and cold.', 'featured' => true],
                ['name' => 'Stainless Steel Dispenser', 'price' => 18000, 'image' => 'IMAGES/Water Dispensers pictures.jpg', 'desc' => 'Premium stainless steel dispenser with modern design.'],
            ]
        ],
        'televisions' => [
            'name' => 'Televisions',
            'slug' => 'televisions',
            'icon' => '📺',
            'image' => 'IMAGES/Televisions.jpg',
            'description' => 'Crystal-clear entertainment for your home.',
            'products' => [
                ['name' => '55" 4K Smart TV', 'price' => 65000, 'image' => 'IMAGES/Televisions 1.jpg', 'desc' => 'Ultra HD smart TV with built-in streaming.', 'featured' => true],
                ['name' => '65" 4K OLED TV', 'price' => 120000, 'image' => 'IMAGES/Televisions 2.jpg', 'desc' => 'OLED display with vivid colors and deep blacks.', 'featured' => true],
                ['name' => '43" Full HD TV', 'price' => 35000, 'image' => 'IMAGES/Televisions 3.jpg', 'desc' => 'Full HD LED TV with smart functionality.'],
                ['name' => '75" Smart TV', 'price' => 185000, 'image' => 'IMAGES/Televisions 4.jpg', 'desc' => 'Large screen smart TV with Dolby Atmos.'],
                ['name' => '32" HD TV', 'price' => 22000, 'image' => 'IMAGES/Televisions.jpg', 'desc' => 'Compact HD TV perfect for bedrooms.'],
            ]
        ],
        'airconditioners' => [
            'name' => 'Air Conditioners',
            'slug' => 'airconditioners',
            'icon' => '❄️',
            'image' => 'IMAGES/Air Conditioners.jpg',
            'description' => 'Stay cool with premium air conditioning.',
            'products' => [
                ['name' => '1.5 Ton Split AC', 'price' => 65000, 'image' => 'IMAGES/Air Conditioners 1.jpg', 'desc' => 'Inverter split AC with energy-saving mode.', 'featured' => true],
                ['name' => '2 Ton Split AC', 'price' => 85000, 'image' => 'IMAGES/Air Conditioners 2.jpg', 'desc' => 'High-capacity split AC for large rooms.', 'featured' => true],
                ['name' => '1 Ton Split AC', 'price' => 48000, 'image' => 'IMAGES/Air Conditioners 3.jpg', 'desc' => 'Compact split AC ideal for bedrooms.'],
                ['name' => 'Portable AC Unit', 'price' => 35000, 'image' => 'IMAGES/Air Conditioners 4.jpg', 'desc' => 'Movable air conditioner with exhaust hose.'],
                ['name' => 'Window AC 1.5 Ton', 'price' => 42000, 'image' => 'IMAGES/Air Conditioners 5.jpg', 'desc' => 'Window-mounted AC with remote control.', 'featured' => true],
                ['name' => 'Cassette AC 2 Ton', 'price' => 95000, 'image' => 'IMAGES/Air Conditioners 6.jpg', 'desc' => 'Ceiling cassette AC for commercial spaces.'],
                ['name' => 'Floor Standing AC', 'price' => 78000, 'image' => 'IMAGES/Air Conditioners.jpg', 'desc' => 'Floor-standing AC unit with smart controls.'],
            ]
        ],
    ];
}

function alnuur_format_kes($amount) {
    return 'KES ' . number_format($amount);
}
