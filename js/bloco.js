const mysql = require('mysql');
console.time('#tempo');

let query = 'INSERT INTO js_bloco(nome, telefone) VALUES ';

for (i = 0; i < 100; i++) {
    query += `("Leo ${i}", "123 ${i}"),`;
}
query = query.substring(0, query.length - 1);

var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "teste_performance"
});

con.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
    try {
        con.query(query, function(err, result) {
            if (err) throw err;
        });
    } finally {
        con.end();
    }
});

console.timeEnd('#tempo');