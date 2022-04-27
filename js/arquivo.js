// TESTE DE ESCREVER EM ARQUIVO
const fs = require('fs');

console.time('#tempo');

const texto = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, dolorum accusamus sed assumenda delectus dolorem consequuntur nam quidem explicabo voluptatum debitis eius beatae quam vel ut iusto sequi! Aliquam, quo!';
fs.writeFile('javascript.txt', texto, (err) => {
    if (err) throw err;
    console.log('O arquivo foi criado!');
});

console.timeEnd('#tempo');