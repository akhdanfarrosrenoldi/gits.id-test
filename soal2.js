function soaldua(scores, gitsScores) {
  let uniqueScores = [...new Set(scores)].sort((a, b) => b - a);

  let result = [];

  for (let score of gitsScores) {
    let rank = 1;
    let index = 0;

    while (index < uniqueScores.length && score < uniqueScores[index]) {
      rank++;
      index++;
    }

    result.push(rank);
  }

  return result;
}

let leaderboardScores = [100, 100, 50, 40, 40, 20, 10];
let gitsScores = [5, 25, 50, 120];

let output = soaldua(leaderboardScores, gitsScores);
console.log(output.join(" "));
