    <div class="result-bar" id="resultBar">
        <div class="container">
            <div class="result-inner">
                <div class="result-stats">
                    <div class="result-stat">
                        <div class="value" id="totalItems">0</div>
                        <div class="label">Articles</div>
                    </div>
                    <div class="result-stat">
                        <div class="value" id="totalMinutes">0 min</div>
                        <div class="label">Temps total</div>
                    </div>
                    <div class="result-stat">
                        <div class="value accent" id="totalTitres">0</div>
                        <div class="label">Titres-services</div>
                    </div>
                    <div class="result-stat">
                        <div class="value accent" id="totalCost">0,00 €</div>
                        <div class="label">Après déduction 10%</div>
                    </div>
                </div>
                <div class="result-cta">
                    <button class="btn btn-outline-dark" onclick="resetAll()">Réinitialiser</button>
                    <a href="<?php echo esc_url(home_url('/contactez-nous/')); ?>" class="btn btn-primary">Nous contacter →</a>
                </div>
            </div>
        </div>
    </div>