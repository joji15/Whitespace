var db = openDatabase('mydb', '1.0', 'Test DB', 2 * 1024 * 1024);
db.transaction(function (tx) {
tx.executeSql('CREATE TABLE IF NOT EXISTS LOGS (id unique, log)');
tx.executeSql('INSERT INTO LOGS (id, log) VALUES (1, "foobar")');
tx.executeSql('INSERT INTO LOGS (id, log) VALUES (2, "logmsg")');
});
db.transaction(function (tx) {
tx.executeSql('SELECT * FROM LOGS', [], function (tx, results) {
var len = results.rows.length, i;
msg = "<p>Found rows: " + len + "</p>";
document.querySelector('#status').innerHTML += msg;
for (i = 0; i < len; i++){
alert(results.rows.item(i).log );
}
}, null);
});
