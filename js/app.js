function calculateAHP() {

    const criteriaWeights = [0.4, 0.3, 0.2, 0.1];

    const alternatives = {
        "Axe": [0.55, 0.30, 0.30, 0.15],
        "Nivea": [0.35, 0.50, 0.50, 0.30],
        "Натуральний": [0.10, 0.20, 0.20, 0.55]
    };

    let results = {};

    for (let alt in alternatives) {
        let score = 0;
        for (let i = 0; i < criteriaWeights.length; i++) {
            score += criteriaWeights[i] * alternatives[alt][i];
        }
        results[alt] = score;
    }

    let best = Object.keys(results).reduce((a, b) => results[a] > results[b] ? a : b);

    document.getElementById("result").innerHTML =
        "Оптимальний вибір: " + best;
}
