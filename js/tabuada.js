console.time('#tempo');

var tabuada = 5
for (let i = 1; i <= 10; i++) {
    console.log(`${tabuada} vezes ${i} é ${tabuada * i} <br>`);
}

console.timeEnd('#tempo');