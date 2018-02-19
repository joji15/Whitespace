
var wsDatabase;

function wsWebSQLInit() {
	var wsDBObj = this;
	wsDatabase = window.openDatabase('wsSchoolsDemoDatabase', '1.0', 'wsSchoolsDemoDatabase', 2 * 1024 * 1024);
	function wsDropTable(tablename) {
		var sql="DROP TABLE [" + tablename + "]";
		wsDatabase.transaction(function (tx)
			{
				tx.executeSql(sql,[]);
			}
			,function (err) {
				window.alert("Error 3: " + err.message);
			}
	
		);
	}
	function wsDropView(tablename) {
		var sql="DROP VIEW [" + tablename + "]";
		wsDatabase.transaction(function (tx)
			{
				tx.executeSql(sql,[]);
			}
			,function (err) {
				window.alert("Error 4: " + err.message);
			}
		);
	}
	function wsDropIndex(tablename) {
		var sql="DROP INDEX [" + tablename + "]";
		wsDatabase.transaction(function (tx)
			{
				tx.executeSql(sql,[]);
			}
			,function (err) {
				window.alert("Error 5: " + err.message);
			}
	
		);
	}
	function checkDBChanges(x) {
		if (
			x.toUpperCase().indexOf("INSERT INTO ")>-1 ||
			x.toUpperCase().indexOf("UPDATE ")>-1 ||
			x.toUpperCase().indexOf("DELETE ")>-1 ||
			x.toUpperCase().indexOf("ALTER TABLE ")>-1 ||
			x.toUpperCase().indexOf("DROP TABLE ")>-1 ||
			x.toUpperCase().indexOf("INTO ")>-1 ||
			x.toUpperCase().indexOf("CREATE TABLE ")>-1 ||
			x.toUpperCase().indexOf("ALTER TABLE ")>-1 ||
			x.toUpperCase().indexOf("CREATE VIEW ")>-1 ||		
			x.toUpperCase().indexOf("REPLACE VIEW ")>-1 ||
			x.toUpperCase().indexOf("DROP VIEW ")>-1 ||
			(x.toUpperCase().indexOf("CREATE INDEX")>-1 ) ||
			(x.toUpperCase().indexOf("CREATE UNIQUE INDEX")>-1 ) ||		
			(x.toUpperCase().indexOf("DROP INDEX")>-1 )		
			) {
			return true;
		}
		return false;
	}
	this.wsExecuteSQL = function(sql) {
		var resultContainer;
		resultContainer = document.getElementById("divResultSQL");
		resultContainer.innerHTML = "";
		wsDatabase.transaction(function (tx)
			{
				tx.executeSql(sql,[],function (tx, results)
					{
						var len = results.rows.length, i, j, m, txt, columns = [], DBChanges = 0;
						if (len > 0) {
							txt = "";
							txt = txt + "<div style='padding:10px;'><div style='margin-bottom:10px;'>Number of Records: " + len + "</div>";
							txt = txt + "<table class='reference notranslate'><tr>";
							for (m in results.rows.item(0)) {
							    columns.push(m);
							}
							for (j = 0; j < columns.length; j++) {
								txt = txt + "<th>" + columns[j] + "</th>";  
							}
							txt = txt + "</tr>";
							for (i = 0; i < len; i++) {
								txt = txt + "<tr>";	   
								for (j = 0; j < columns.length; j++) {
									txt = txt + "<td>" + results.rows.item(i)[columns[j]] + "</td>";  
								}
								txt = txt + "</tr>";	   
							}
							resultContainer.innerHTML =  txt + "</table></div>";
						} else {
							DBChanges = checkDBChanges(sql);
							if (DBChanges === true) {
								txt = "<div style='padding:10px;'>You have made changes to the database.";
								if (results.rowsAffected > 0) {txt = txt + " Rows affected: " + results.rowsAffected; }
								resultContainer.innerHTML = txt + "</div>";
							} else {
								txt = "<div style='padding:10px;'>No result.</div>";
								resultContainer.innerHTML = txt;
							}
						}
						wsDBObj.myDatabase();
					}
				);
			}
			,function (err) {
				window.alert("Error 1: " + err.message);
			}
		);
	};
    this.selectStar = function (tablename) {
    	var sql = "SELECT * FROM [" + tablename + "]";
		document.getElementById("textareaCodeSQL").value = sql;
		wsDBObj.wsExecuteSQL(sql);
	};
    this.myDatabase = function () {
		wsDatabase.transaction(function (tx)
			{
				var tblnames = [], recordcounts = [], viewnames = [], viewrecordcounts = [], indexnames = [];
				document.getElementById("yourDB").innerHTML = "";
				document.getElementById("yourRC").innerHTML = "";
				document.getElementById("yourIX").innerHTML = "";				
				function wsDBInfo() {
					var txt = "", i;
					txt = txt + "<table width='100%' xclass='reference notranslate'><tr>";
					txt = txt + "<th style='text-align:left;'>Tablename</th>";  
					txt = txt + "<th style='text-align:right;'>Records</th>";  						
					txt = txt + "</tr>";
					for (i = 0; i < tblnames.length; i++) {
						txt = txt + "<tr>";	   
						txt = txt + "<td title='Click to see the content of the " + tblnames[i] + " table' style='text-align:left;cursor:pointer;text-decoration:underline;' onclick='wsschoolsWebSQL1.selectStar(\"" + tblnames[i] + "\")'>" + tblnames[i] + "</td>";  
						txt = txt + "<td style='text-align:right;'>" + recordcounts[i] + "</td>";  				
						txt = txt + "</tr>";	   
					}
					document.getElementById("yourDB").innerHTML =  txt + "</table>";
				}
				function wsDBViewInfo() {
					var txt = "", i;
					txt = txt + "<h6 style='color:#8AC007'>Views:</h6>";
					txt = txt + "<table width='100%' xclass='reference notranslate'><tr>";
					txt = txt + "<th style='text-align:left;'>Name of View</th>";  
					txt = txt + "<th style='text-align:right;'>Records</th>";  						
					txt = txt + "</tr>";
					for (i = 0; i < viewnames.length; i++) {
						txt = txt + "<tr>";	   
						txt = txt + "<td title='Click to see the content of the " + viewnames[i] + " view' style='text-align:left;cursor:pointer;text-decoration:underline;' onclick='wsschoolsWebSQL1.selectStar(\"" + viewnames[i] + "\")'>" + viewnames[i] + "</td>";  
						txt = txt + "<td style='text-align:right;'>" + viewrecordcounts[i] + "</td>";  				
						txt = txt + "</tr>";	   
					}
					document.getElementById("yourRC").innerHTML =  txt + "</table>";
				}
				function wsDBIndexInfo() {
					var txt = "", i;
					txt = txt + "<h6 style='color:#8AC007'>Indexes:</h6>";
					txt = txt + "<table width='100%' xclass='reference notranslate'><tr>";
					txt = txt + "<th style='text-align:left;'>Name of Index</th>";  
					txt = txt + "</tr>";
					for (i = 0; i < viewnames.length; i++) {
						txt = txt + "<tr>";	   
						txt = txt + "<td style='text-align:left;'>" + indexnames[i] + "</td>";  
						txt = txt + "</tr>";	   
					}
					document.getElementById("yourIX").innerHTML =  txt + "</table>";
				}
				function makeRecordcountsArray(x) {
					var i, lastTable = false;
					for (i = 0; i < x.length; i++) {
						if (i === (x.length - 1)) {lastTable = true; }
						tx.executeSql("SELECT count(*) AS rc,'" + lastTable + "' AS i FROM [" + x[i] + "]",[],function (tx, results)
							{
								var len = results.rows.length, k, cc = "";
								if (len > 0) {
									for (k = 0; k < len; k++) {
										recordcounts.push(results.rows.item(k).rc);
										cc = results.rows.item(k).i;
									}
									if (cc === "true") {
										wsDBInfo();
									}
								} else {
									window.alert("ERROR 4");
								}
							
							}
						);
					}
				}
				function makeViewRecorcountsArray(x) {
					var i, lastTable = false;
					for (i = 0; i < x.length; i++) {
						if (i === (x.length - 1)) {lastTable = true; }
						tx.executeSql("SELECT count(*) AS rc,'" + lastTable + "' AS i FROM [" + x[i] + "]",[],function (tx, results)
							{
								var len = results.rows.length, k, cc = "", txt;
								if (len > 0) {
									for (k = 0; k < len; k++) {
										viewrecordcounts.push(results.rows.item(k).rc);
										cc = results.rows.item(k).i;
									}
									if (cc === "true") {
										wsDBViewInfo();
									}
								} else {
									window.alert("ERROR 5");
								}
							
							}
						);
					}
				}
				tx.executeSql("SELECT tbl_name FROM sqlite_master WHERE type='table' AND tbl_name NOT LIKE '__WebKitDatabaseInfoTable__' AND tbl_name NOT LIKE 'sqlite_sequence'",[],function (tx, results)
					{
						var len = results.rows.length, i;
						if (len > 0) {
							for (i = 0; i < len; i++) {
								tblnames.push(results.rows.item(i).tbl_name);
							}
							makeRecordcountsArray(tblnames);
						}
					}
				);
				tx.executeSql("SELECT tbl_name FROM sqlite_master WHERE type='view'",[],function (tx, results)
					{
						var len = results.rows.length, i;
						if (len > 0) {
							for (i = 0; i < len; i++) {
								viewnames.push(results.rows.item(i).tbl_name);
							}
							makeViewRecorcountsArray(viewnames);
						}
					}
				);
				tx.executeSql("SELECT name FROM sqlite_master WHERE type='index' AND tbl_name NOT LIKE '__WebKitDatabaseInfoTable__'",[],function (tx, results)
					{
						var len = results.rows.length, i;
						if (len > 0) {
							for (i = 0; i < len; i++) {
								indexnames.push(results.rows.item(i).name);
							}
							wsDBIndexInfo();
						}
					}
				);
			}
			,function (err) {
				window.alert("ERROR 2.5" + err.message);
			}
		);
	};
	this.wsInitDatabase = function(n) {
		wsDBObj.wsInitRep();
		wsDBObj.wsInitCustomer();
		wsDBObj.wsInitOrders();
		wsDBObj.wsInitOrder_Line();	
		wsDBObj.wsInitPart(n);	
	};
	this.wsClearDatabase = function() {
		var warn = window.confirm("This action will restore the database back to its original content.\n\nAre you sure you want to continue?");
		if (warn === false) {
			return false;
		}
		document.getElementById("divResultSQL").innerHTML =  "";
		if (wsDatabase) {
			wsDatabase.transaction(function (tx)
				{
					tx.executeSql("SELECT name FROM sqlite_master WHERE type='index' AND name<>'sqlite_autoindex___WebKitDatabaseInfoTable___1'",[],function (tx, results)
						{
							var len = results.rows.length, i;
							if (len>0) {
								for (i = 0; i < len; i++) {
									wsDropIndex(results.rows.item(i).name);
								}
							}
						}
					);
					tx.executeSql("SELECT name FROM sqlite_master WHERE type='view'",[],function (tx, results)
						{
							var len = results.rows.length, i;
							if (len>0) {
								for (i = 0; i < len; i++) {
									wsDropView(results.rows.item(i).name);
								}
							}
						}
					);
					tx.executeSql("SELECT name FROM sqlite_master WHERE type='table' AND name<>'sqlite_sequence' AND name<>'__WebKitDatabaseInfoTable__'",[],function (tx, results)
						{	
							var len = results.rows.length, i;
							if (len>0) {
								for (i = 0; i < len; i++) {
									wsDropTable(results.rows.item(i).name);
									if (i === (len - 1)) { wsDBObj.wsInitDatabase(1); }
								}
							} else {
								wsDBObj.wsInitDatabase(1);
							}
						}
					);
				}
				,function (err) {
					window.alert("Error 2: " + err.message);
				}
			);
		}
	};
	this.wsInitRep = function() {
		wsDatabase.transaction(function (tx)
			{
				tx.executeSql('CREATE TABLE Rep (REP_NUM INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,LAST_NAME NVARCHAR(255),FIRST_NAME NVARCHAR(255),STREET NVARCHAR(255),CITY NVARCHAR(255), STATE NVARCHAR(255), ZIP NVARCHAR(255), COMMISSION INTEGER(255), RATE INTEGER(255))',[], function(tx)
					{
						tx.executeSql('INSERT INTO Rep (REP_NUM, LAST_NAME,FIRST_NAME,STREET, CITY, STATE, ZIP, COMMISSION, RATE) VALUES ("1", "Kaiser", "Valerie", "624 Randall", "Grove", "FL", "33321", "20542", "0.05")');
						tx.executeSql('INSERT INTO Rep (REP_NUM, LAST_NAME,FIRST_NAME,STREET, CITY, STATE, ZIP, COMMISSION, RATE) VALUES ("2", "Hull", "Richard", "532 Jackson", "Sheldon", "FL", "33553", "39216", "0.07")');
						tx.executeSql('INSERT INTO Rep (REP_NUM, LAST_NAME,FIRST_NAME,STREET, CITY, STATE, ZIP, COMMISSION, RATE) VALUES ("3", "Perez", "Juan", "1626 Taylor", "Fillmore", "FL", "33336", "23487", "0.05")');
						tx.executeSql('INSERT INTO Rep (REP_NUM, LAST_NAME,FIRST_NAME,STREET, CITY, STATE, ZIP, COMMISSION, RATE) VALUES ("4", "George", "Miller", "420 Brooklyn", "Corner", "NY", "34376", "25351", "0.06")');
						tx.executeSql('INSERT INTO Rep (REP_NUM, LAST_NAME,FIRST_NAME,STREET, CITY, STATE, ZIP, COMMISSION, RATE) VALUES ("5", "Ian", "Dubs", "911 Green", "Boxes", "CA", "35758", "40423", "0.07")');
						tx.executeSql('INSERT INTO Rep (REP_NUM, LAST_NAME,FIRST_NAME,STREET, CITY, STATE, ZIP, COMMISSION, RATE) VALUES ("6", "Max", "Foomoe", "999 Legend", "Uge", "AU", "38436", "26487", "0.05")');
						tx.executeSql('INSERT INTO Rep (REP_NUM, LAST_NAME,FIRST_NAME,STREET, CITY, STATE, ZIP, COMMISSION, RATE) VALUES ("7", "Jazelene", "De Vera", "409 Stand", "Dee", "WA", "24821", "45357", "0.04")');
						tx.executeSql('INSERT INTO Rep (REP_NUM, LAST_NAME,FIRST_NAME,STREET, CITY, STATE, ZIP, COMMISSION, RATE) VALUES ("8", "Aimee", "Cruz", "555 Avenue", "Calou", "WY", "15579", "45216", "0.06")');
						tx.executeSql('INSERT INTO Rep (REP_NUM, LAST_NAME,FIRST_NAME,STREET, CITY, STATE, ZIP, COMMISSION, RATE) VALUES ("9", "Patrick", "Joji", "909 One", "Abbey", "SF", "99999", "99999", "0.09")');
						tx.executeSql('INSERT INTO Rep (REP_NUM, LAST_NAME,FIRST_NAME,STREET, CITY, STATE, ZIP, COMMISSION, RATE) VALUES ("10", "Felix", "Peidy", "399 Forlora", "Skratta", "PE", "60000", "39999", "0.06")');
					}
				);
			}
			,function (err) {
				if (err.message.indexOf("Rep already exists") === -1) {
					window.alert("Error 6: " + err.message);
				}
			}
		);
	};
	this.wsInitCustomer = function() {
		wsDatabase.transaction(function (tx)
			{
				tx.executeSql('CREATE TABLE Customer (CUSTOMER_NUM INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,CUSTOMER_NAME NVARCHAR(255),STREET NVARCHAR(255),CITY NVARCHAR(255),STATE NVARCHAR(255),ZIP NVARCHAR(255),BALANCE NVARCHAR(255),CREDIT_LIMIT NVARCHAR(255),REP_NUM NVARCHAR(255))',[], function(tx)
					{
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("148","Al\'s Appliance and Sport","2837 Greenway","Fillmore","FL","33336","6550.00","7500.00","1")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("152","Brookings Direct","3827 Devon","Grove","FL","33321","461.50","10000.00","1")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("189","Ferguson\'s","382 Wildwood","Northfield","FL","33146","5785.00","7500.00","2")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("208","The Everything Shop","1828 Raven","Crystal","FL","33503","5285.25","5000.00","2")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("253","Bargains Galore","3829 Central","Grove","FL","33321","3412.00","10000.00","5")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("274","Kline\'s","838 Ridgeland","Fillmore","FL","33336","12762.00","15000.00","9")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("303","Johnson\'s Department Store","372 Oxford","Sheldon","FL","33553","2106.00","10000.00","5")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("326","Lee\'s Sport and Appliance","282 Evergreen","Altonville","FL","32543","2851.00","5000.00","8")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("388","Deerfield\'s Four Seasons","282 Columbia","Sheldon","FL","33553","248.00","7500.00","1")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("437","All Season","28 Lakeview","Grove","FL","33321","8221.00","7500.00","10")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("442","Al\'s Appliance and Sport","2837 Greenway","Fillmore","FL","33336","6550.00","7500.00","10")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("487","Brookings Direct","3827 Devon","Grove","FL","33321","461.50","10000.00","6")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("519","Ferguson\'s","382 Wildwood","Northfield","FL","33146","5785.00","7500.00","5")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("524","The Everything Shop","1828 Raven","Crystal","FL","33503","5285.25","5000.00","2")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("558","Bargains Galore","3829 Central","Grove","FL","33321","3412.00","10000.00","2")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("654","Kline\'s","838 Ridgeland","Fillmore","FL","33336","12762.00","15000.00","6")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("664","Johnson\'s Department Store","372 Oxford","Sheldon","FL","33553","2106.00","10000.00","8")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("691","Lee\'s Sport and Appliance","282 Evergreen","Altonville","FL","32543","2851.00","5000.00","9")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("834","Ferguson\'s","382 Wildwood","Northfield","FL","33146","5785.00","7500.00","1")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("888","The Everything Shop","1828 Raven","Crystal","FL","33503","5285.25","5000.00","4")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("935","Bargains Galore","3829 Central","Grove","FL","33321","3412.00","10000.00","7")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("979","Kline\'s","838 Ridgeland","Fillmore","FL","33336","12762.00","15000.00","7")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("1024","Johnson\'s Department Store","372 Oxford","Sheldon","FL","33553","2106.00","10000.00","6")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("1066","Lee\'s Sport and Appliance","282 Evergreen","Altonville","FL","32543","2851.00","5000.00","3")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("1099","Deerfield\'s Four Seasons","282 Columbia","Sheldon","FL","33553","248.00","7500.00","4")');
						tx.executeSql('INSERT INTO Customer (CUSTOMER_NUM, CUSTOMER_NAME,STREET,CITY,STATE,ZIP,BALANCE,CREDIT_LIMIT,REP_NUM) VALUES ("1150","All Season","28 Lakeview","Grove","FL","33321","8221.00","7500.00","10")');
					}
				);
			}
			,function (err) {
				if (err.message.indexOf("Customer already exists") === -1) {
					window.alert("Error 7: " + err.message);
				}
			}
		);
	};
	this.wsInitOrders = function() {
		wsDatabase.transaction(function (tx)
			{
				tx.executeSql('CREATE TABLE Orders (ORDER_NUM INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,ORDER_DATE DATE, CUSTOMER_NUM INTEGER)',[], function(tx)
					{
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21600", "2010-10-19", "148")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21601", "2010-10-19", "356")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21602", "2010-10-19", "148")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21603", "2010-10-19", "356")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21604", "2010-10-19", "148")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21605", "2010-10-20", "356")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21606", "2010-10-20", "148")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21607", "2010-10-20", "356")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21608", "2010-10-20", "148")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21609", "2010-10-20", "356")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21610", "2010-10-20", "408")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21611", "2010-10-20", "282")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21612", "2010-10-21", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21614", "2010-10-21", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21615", "2010-10-21", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21616", "2010-10-21", "148")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21617", "2010-10-22", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21618", "2010-10-22", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21619", "2010-10-22", "148")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21620", "2010-10-22", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21621", "2010-10-22", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21623", "2010-10-23", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21624", "2010-10-23", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21626", "2010-10-23", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21627", "2010-10-23", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21628", "2010-10-23", "148")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21629", "2010-10-23", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21630", "2010-10-23", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21631", "2010-10-23", "148")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21632", "2010-10-23", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21633", "2010-10-23", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21634", "2010-10-23", "148")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21635", "2010-10-24", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21636", "2010-10-24", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21637", "2010-10-24", "148")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21638", "2010-10-24", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21639", "2010-10-24", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21640", "2010-10-24", "148")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21642", "2010-10-25", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21643", "2010-10-26", "148")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21645", "2010-10-26", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21646", "2010-10-26", "148")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21647", "2010-10-28", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21648", "2010-10-29", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21651", "2010-10-29", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21652", "2010-10-29", "148")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21653", "2010-10-29", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21654", "2010-10-29", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21656", "2010-10-30", "148")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21658", "2010-10-30", "608")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21659", "2010-10-30", "148")');
						tx.executeSql('INSERT INTO Orders (ORDER_NUM, ORDER_DATE, CUSTOMER_NUM) VALUES ("21660", "2010-10-30", "608")');
					}
				);
			}
			,function (err) {
				if (err.message.indexOf("Orders already exists") === -1) {
					window.alert("Error 8: " + err.message);
				}
			}
		);
	};
	this.wsInitOrder_Line = function() {
		wsDatabase.transaction(function (tx)
			{
				tx.executeSql('CREATE TABLE Order_Line (ORDER_LINE_NUM INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT, ORDER_NUM INTEGER(255), PART_NUM NVARCHAR(255), NUM_ORDERED INTEGER(255), QUOTED_PRICE INTEGER(255))',[], function(tx)
					{
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("1","21608","AT94","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("2","21610","DR93","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("3","21610","DW11","1","39999")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("4","21613","KL62","4","32995")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("5","21614","KT03","2","59500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("6","21617","BV06","2","79495")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("7","21617","CD52","4","15000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("8","21619","DR93","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("9","21623","KV29","2","129000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("10","21608","CD52","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("11","21608","AT94","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("12","21610","UT53","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("13","21610","DW11","1","39999")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("14","21613","KL62","4","32995")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("15","21614","KT03","2","59500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("16","21617","BV06","2","79495")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("17","21617","CD52","4","15000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("18","21619","UT53","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("19","21623","KV29","2","129000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("20","21608","AT94","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("21","21608","AT94","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("22","21610","DR93","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("23","21610","DW11","1","39999")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("24","21613","FI31","4","32995")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("25","21614","KT03","2","59500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("26","21617","BV06","2","79495")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("27","21617","CD52","4","15000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("28","21619","DR93","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("29","21623","KV29","2","129000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("30","21608","AT94","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("31","21608","AT94","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("32","21610","DR93","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("33","21610","DW11","1","39999")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("34","21613","FI31","4","32995")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("35","21614","KT03","2","59500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("36","21617","BV06","2","79495")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("37","21617","CD52","4","15000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("38","21619","DR93","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("39","21623","KV29","2","129000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("40","21608","AT94","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("41","21608","AT94","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("42","21610","DR93","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("43","21610","DW11","1","39999")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("44","21613","CP57","4","32995")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("45","21614","KT03","2","59500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("46","21617","BV06","2","79495")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("47","21617","CD52","4","15000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("48","21619","DR93","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("49","21623","KV29","2","129000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("50","21608","AT94","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("51","21608","AT94","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("52","21610","DR93","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("53","21610","DW11","1","39999")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("54","21613","IH47","4","32995")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("55","21614","KT03","2","59500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("56","21617","BV06","2","79495")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("57","21617","CD52","4","15000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("58","21619","DR93","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("59","21623","KV29","2","129000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("60","21608","AT94","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("61","21608","HW48","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("62","21610","IH47","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("63","21610","DW11","1","39999")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("64","21613","KL62","4","32995")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("65","21614","KT03","2","59500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("66","21617","BV06","2","79495")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("67","21617","CD52","4","15000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("68","21619","DR93","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("69","21623","KV29","2","129000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("70","21608","HW48","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("71","21608","AT94","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("72","21610","DR93","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("73","21610","CP57","1","39999")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("74","21613","HW48","4","32995")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("75","21614","IH47","2","59500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("76","21617","BV06","2","79495")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("77","21617","CD52","4","15000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("78","21619","DR93","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("79","21623","KV29","2","129000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("80","21608","AT94","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("81","21608","AT94","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("82","21610","DR93","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("83","21610","DW11","1","39999")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("84","21613","PL34","4","32995")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("85","21614","KT03","2","59500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("86","21617","BV06","2","79495")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("87","21617","CD52","4","15000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("88","21619","DR93","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("89","21623","KV29","2","129000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("90","21608","PL34","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("91","21608","AT94","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("92","21610","DR93","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("93","21610","DW11","1","39999")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("94","21613","KL62","4","32995")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("95","21614","KT03","2","59500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("96","21617","BV06","2","79495")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("97","21617","CD52","4","15000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("98","21619","DR93","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("99","21623","KV29","2","129000")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("100","21608","AT94","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("101","21608","AT94","11","2195")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("102","21610","DR93","1","49500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("103","21610","DW11","1","39999")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("104","21613","KL62","4","32995")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("105","21614","KT03","2","59500")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("106","21617","BV06","2","79495")');
						tx.executeSql('INSERT INTO Order_Line (ORDER_LINE_NUM,ORDER_NUM,PART_NUM,NUM_ORDERED,QUOTED_PRICE) VALUES ("107","21617","CD52","4","15000")');
					}
				);
			}
			,function (err) {
				if (err.message.indexOf("Order_Line already exists") === -1) {
					window.alert("Error 9: " + err.message);
				}
			}
		);
	};
	this.wsInitPart = function(n) {
		wsDatabase.transaction(function (tx)
			{
				tx.executeSql('CREATE TABLE Part (PART_ID INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,PART_NUM NVARCHAR(255), DESCRIPTION NVARCHAR(255),ON_HAND NVARCHAR(255),CLASS NVARCHAR(255),WAREHOUSE NVARCHAR(255),PRICE NVARCHAR(255))',[], function(tx)
					{
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (1,"AT94", "Iron", "50", "HW", "3", "24.95")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (2,"BV06", "Home Gym", "45", "SG", "2", "795.95")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (3,"CD52", "Microwave Oven", "32", "AP", "1", "105.00")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (4,"DL71", "Cordless Drill", "21", "HW", "3", "129.95")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (5,"DR93", "Gas Range", "8", "AP", "2", "95.00")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (6,"DW11", "Washer", "12", "AP", "3", "399.99")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (7,"FD21", "Stand Mixer", "22", "HW", "3", "159.95")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (8,"KL62", "Dryer", "12", "AP", "1", "349.95")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (9,"KT03", "Dishwasher", "8", "AP", "3", "295.00")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (10,"YH59", "Running Shoes", "65", "SG", "2", "99.99")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (11,"UJ60", "Computer Chair", "60", "AP", "1", "399.00")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (12,"BQ36", "Gloves", "34", "SG", "2", "10.50")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (13,"CP57", "Toaster", "27", "AP", "1", "35.00")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (14,"DA11", "Screwdriver Set", "21", "HW", "3", "55.85")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (15,"MR63", "Blender", "13", "AP", "1", "14.99")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (16,"DL81", "Dremil", "5", "AP", "2", "145.99")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (17,"FI31", "Plates", "75", "HW", "3", "69.95")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (18,"KG52", "Induction Cooker", "38", "AP", "3", "235.50")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (19,"UT53", "Dishwasher", "8", "AP", "3", "595.00")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (20,"AR38", "Quartz Clock", "80", "HW", "1", "5.99")');
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (21,"HW48", "Waffle Maker", "29", "AP", "2", "19.99")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (22,"ML43", "Desk Lamp", "3", "HW", "3", "3.99")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (23,"PL34", "Food Processor", "20", "AP", "1", "53.95")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (24,"KO05", "Knife Set", "8", "AP", "3", "29.99")'); 
						tx.executeSql('INSERT INTO Part (PART_ID,PART_NUM,DESCRIPTION,ON_HAND,CLASS,WAREHOUSE,PRICE) VALUES (25,"IH47", "Treadmill", "9", "SG", "2", "590.00")',[], function(tx)
							{
								var sql = document.getElementById("textareaCodeSQL").value;
								if (n === 0) {
									wsDBObj.wsExecuteSQL(sql);
								} else {
									document.getElementById("divResultSQL").innerHTML = "<div style='margin:10px;'>The database is fully restored.</div>";
								}
								wsDBObj.myDatabase();
							}
						); 
					}
				);
			}
			,function (err) {
				if (err.message.indexOf("Part already exists") === -1) {
					window.alert("Error 13: " + err.message);
				}
			}
		);
	};
	this.runSQL = function(n) {
		wsDatabase.transaction(function (tx)
			{
				tx.executeSql("SELECT * FROM sqlite_sequence",[],function ()
					{
					var sql = document.getElementById("textareaCodeSQL").value;
					wsDBObj.wsExecuteSQL(sql);
					}
				);
			}
			,function (err) {
				wsDBObj.wsInitDatabase(0);
			}
		);
	};
	
}