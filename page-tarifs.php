<?php get_header(); ?>

<?php get_template_part('template-parts/page-hero'); ?>
<?php get_template_part('template-parts/tarifs/explainer'); ?>
<?php get_template_part('template-parts/tarifs/tarifs'); ?>
<?php get_template_part('template-parts/tarifs/simulator-section'); ?>
<?php get_template_part('template-parts/tarifs/result-bar'); ?>
<?php get_template_part('template-parts/tarifs'); ?>

<?php get_footer(); ?>

<script>
    const categories = [{
            name: "Hauts & Chemises",
            icon: "👔",
            color: "blue",
            items: [{
                    name: "Chemise ordinaire sur cintre",
                    min: 8
                },
                {
                    name: "Chemise ordinaire pliée / Blouse / Chemisier",
                    min: 9
                },
                {
                    name: "Chemise en lin, soie, volants, dentelles et/ou XL",
                    min: 10
                },
                {
                    name: "10 chemises ordinaires sur cintres (tarif réduit)",
                    min: 6,
                    promo: true
                },
                {
                    name: "Veste simple (dame ou homme)",
                    min: 10
                },
                {
                    name: "Veste délicate / Manteau / Robe délicate",
                    min: 15
                },
                {
                    name: "Pull / Sweat-shirt / Gilet (longues manches)",
                    min: 5
                },
                {
                    name: "Polo / T-shirt / Top (courtes manches)",
                    min: 4
                },
                {
                    name: "Sweat capuche / Pyjama / Robe de chambre / Jogging",
                    min: 9
                },
            ]
        },
        {
            name: "Bas & Pantalons",
            icon: "👖",
            color: "purple",
            items: [{
                    name: "Jupe ordinaire",
                    min: 5
                },
                {
                    name: "Jupe plissée ou à volants, en lin ou coton",
                    min: 10
                },
                {
                    name: "Robe ordinaire / Paréo",
                    min: 8
                },
                {
                    name: "Robe en lin / Robe en coton",
                    min: 10
                },
                {
                    name: "Pantalon en jeans",
                    min: 8
                },
                {
                    name: "Pantalon ordinaire",
                    min: 9
                },
                {
                    name: "Pantalon lin/flanelle, à pinces ou délicat / Salopette",
                    min: 10
                },
                {
                    name: "Short / Bermuda ordinaire / Leggings",
                    min: 4
                },
                {
                    name: "Short / Bermuda délicat (poches ou pinces)",
                    min: 8
                },
            ]
        },
        {
            name: "Sous-vêtements & Accessoires",
            icon: "🧦",
            color: "pink",
            items: [{
                    name: "Sous-vêtement (chemisette, body, slip, boxer...)",
                    min: 3
                },
                {
                    name: "Cravate, petit foulard, écharpe, mouchoir",
                    min: 2
                },
            ]
        },
        {
            name: "Enfants & Bébés",
            icon: "👶",
            color: "green",
            items: [{
                    name: "Vêtement simple pour bébé",
                    min: 2
                },
                {
                    name: "Vêtement délicat bébé (plis, dentelles, volants...)",
                    min: 5
                },
                {
                    name: "Vêtement ordinaire enfant, T. 10 ans max",
                    min: 3
                },
                {
                    name: "Vêtement délicat enfant, T. 10 ans max",
                    min: 6
                },
                {
                    name: "Robe / Chemisier / Chemise enfant, T. 10 ans max",
                    min: 6
                },
            ]
        },
        {
            name: "Draps & Linge de lit",
            icon: "🛏️",
            color: "orange",
            items: [{
                    name: "Drap bébé",
                    min: 5
                },
                {
                    name: "Drap enfant",
                    min: 8
                },
                {
                    name: "Drap adulte (1 personne)",
                    min: 10
                },
                {
                    name: "Drap adultes (2 pers.) < 220x220 cm",
                    min: 15
                },
                {
                    name: "Drap adultes (2 pers.) XL",
                    min: 20
                },
                {
                    name: "Drap-housse délicat (lin...) ou XXL",
                    min: 30
                },
                {
                    name: "Drap-housse enfant ou adulte (1 pers.)",
                    min: 15
                },
                {
                    name: "Drap-housse adultes (2 pers.) < 220x220",
                    min: 20
                },
                {
                    name: "Drap-housse adultes (2 pers.) XL",
                    min: 25
                },
                {
                    name: "Housse de couette / Couvre-lit enfant",
                    min: 10
                },
                {
                    name: "Housse de couette (1 personne)",
                    min: 15
                },
                {
                    name: "Housse de couette (2 pers.) < 220x220",
                    min: 20
                },
                {
                    name: "Housse de couette (2 pers.) XL",
                    min: 25
                },
                {
                    name: "Taie d'oreiller ordinaire",
                    min: 3
                },
                {
                    name: "Taie d'oreiller longue / délicate",
                    min: 5
                },
            ]
        },
        {
            name: "Linge de maison & Divers",
            icon: "🏠",
            color: "gray",
            items: [{
                    name: "Essuie-vaisselle, petit essuie-mains",
                    min: 2
                },
                {
                    name: "Tablier de cuisine / Chemin de table",
                    min: 3
                },
                {
                    name: "Nappe ordinaire (6 convives) / Foulard XL",
                    min: 10
                },
                {
                    name: "Nappe XL (> 6 convives) ou délicate",
                    min: 15
                },
                {
                    name: "Set ou Serviette de table ordinaire",
                    min: 1
                },
                {
                    name: "Serviette de bain ordinaire",
                    min: 2
                },
                {
                    name: "Serviette de bain XL",
                    min: 5
                },
                {
                    name: "Housse de coussin",
                    min: 10
                },
                {
                    name: "Housse de fauteuil",
                    min: 15
                },
                {
                    name: "Tenture ordinaire (< 120 cm)",
                    min: 20
                },
                {
                    name: "Tenture grande dimension (> 120 cm)",
                    min: 30
                },
            ]
        }
    ];

    const quantities = {};

    function render() {
        const container = document.getElementById('simulator');
        container.innerHTML = '';
        categories.forEach((cat, ci) => {
            const catItems = cat.items.map((_, ii) => `${ci}-${ii}`);
            const catTotal = catItems.reduce((s, k) => s + (quantities[k] || 0), 0);
            const div = document.createElement('div');
            div.className = 'category';
            div.innerHTML = `
                    <div class="category-header" onclick="this.parentElement.classList.toggle('collapsed')">
                        <div class="category-icon ${cat.color}">${cat.icon}</div>
                        <h3>${cat.name}</h3>
                        <span class="category-count ${catTotal > 0 ? 'active' : ''}">${catTotal > 0 ? catTotal + ' article' + (catTotal > 1 ? 's' : '') : cat.items.length + ' types'}</span>
                        <span class="chevron-cat">▼</span>
                    </div>
                    <div class="items-grid">
                        ${cat.items.map((item, ii) => {
                            const key = `${ci}-${ii}`, qty = quantities[key] || 0;
                            return `<div class="item-row ${qty > 0 ? 'has-qty' : ''} ${item.promo ? 'promo-row' : ''}">
                                <div class="item-name">${item.name}${item.promo ? '<span class="promo-badge">Tarif réduit</span>' : ''}</div>
                                <div class="item-duration"><span>${item.min}</span> min</div>
                                <div class="qty-control">
                                    <button class="qty-btn minus" onclick="changeQty('${key}',-1)">−</button>
                                    <input class="qty-value" type="number" min="0" value="${qty}" onchange="setQty('${key}',this.value)">
                                    <button class="qty-btn plus" onclick="changeQty('${key}',1)">+</button>
                                </div>
                            </div>`;
                        }).join('')}
                    </div>`;
            container.appendChild(div);
        });
        updateTotals();
    }

    function changeQty(k, d) {
        quantities[k] = Math.max(0, (quantities[k] || 0) + d);
        render();
    }

    function setQty(k, v) {
        quantities[k] = Math.max(0, parseInt(v) || 0);
        render();
    }

    function resetAll() {
        Object.keys(quantities).forEach(k => delete quantities[k]);
        render();
    }

    function updateTotals() {
        let items = 0,
            mins = 0;
        categories.forEach((cat, ci) => cat.items.forEach((item, ii) => {
            const q = quantities[`${ci}-${ii}`] || 0;
            items += q;
            mins += q * item.min;
        }));
        const titres = Math.ceil(mins / 60),
            cost = titres * 9;
        document.getElementById('totalItems').textContent = items;
        document.getElementById('totalMinutes').textContent = mins >= 60 ?
            Math.floor(mins / 60) + 'h' + (mins % 60 > 0 ? String(mins % 60).padStart(2, '0') : '') :
            mins + ' min';
        document.getElementById('totalTitres').textContent = titres;
        document.getElementById('totalCost').textContent = cost.toFixed(2).replace('.', ',') + ' €';
    }

    render();
</script>