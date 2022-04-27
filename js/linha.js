const mysql = require('mysql');
console.time('#tempo');

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
        for (i = 0; i < 100; i++) {
            let query = `INSERT INTO js_linha(nome , telefone) VALUES('Leo ${i}', '123 ${i}')`
            con.query(query, function(err, result) {
                if (err) throw err;
            });
        }
    } finally {
        con.end();
    }
});

console.timeEnd('#tempo');