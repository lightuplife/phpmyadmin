<?php
/* $Id$ */

$charset = 'windows-1257';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bait�', 'KBait�', 'MBait�', 'GBait�');

$day_of_week = array('Sekmadienis', 'Pirmadienis', 'Antradienis', 'Tre�iadienis', 'Ketvirtadienis', 'Penktadienis', '�e�tadienis');
$month = array('Sausio', 'Vasario', 'Kovo', 'Baland�io', 'Gegu�io', 'Bir�elio', 'Liepos', 'Rugpj��io', 'Rugs�jo', 'Spalio', 'Lapkri�io', 'Gruod�io');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = ' %Y m. %B %d d.  %H:%M';


$strAccessDenied = 'Pri�jimas u�draustas ';
$strAction = 'Valdymo veiksmai';
$strAddDeleteColumn = '�terpti/Trinti stulpelius';
$strAddDeleteRow = '�terpti/Trinti po�ymio eilut�(es)';
$strAddNewField = '�terpti nauj� laukel�(ius)';
$strAddPriv = '�terpti privilegij�(as)';
$strAddPrivMessage = 'J�s �terp�te privilegijas.';
$strAddSearchConditions = '�terpkite paie�kos s�lygas � "where" sakin�:';
$strAddToIndex = '�terpti indeksui papildomus &nbsp;%s&nbsp;stulpel�(ius)';
$strAddUser = 'Sukurti nauj� vartotoj�';
$strAddUserMessage = 'J�s suk�r�te nauj� vartotoj�.';
$strAffectedRows = 'Pakeista eilu�i�:';
$strAfter = 'Prie� %s';
$strAfterInsertBack = 'Sugr��ti � buvus� puslap�';
$strAfterInsertNewInsert = '�terpti sekan�i� nauj� eilut�';
$strAll = 'Visk�';
$strAlterOrderBy = 'Pakeisti lentel�s r��iavim� pagal:';
$strAnalyzeTable = 'Analizuoti lentel�';
$strAnd = 'IR';
$strAnIndex = 'Indeksas sukurtas %s stulpeliui';
$strAny = 'Bet kur�(i�)';
$strAnyColumn = 'Bet kur� stulpel�';
$strAnyDatabase = 'Bet kuri� duomen� baz�';
$strAnyHost = 'Bet kur� prisijungimo adres�';
$strAnyTable = 'Bet kuri� lentel�';
$strAnyUser = 'Bet kur� vartotoj�';
$strAPrimaryKey = 'Stulpeliui %s sukurtas PIRMINIS raktas';
$strAscending = 'Did�jimo tvarka';
$strAtBeginningOfTable = 'Lentel�s prad�ioje';
$strAtEndOfTable = 'Lentel�s pabaigoje';
$strAttr = 'Atributai';

$strBack = 'Atgal';
$strBinary = 'Dvejetainis';
$strBinaryDoNotEdit = 'Dvejetainis - nekeisti';
$strBookmarkDeleted = 'Nuoroda i�trinta.';
$strBookmarkLabel = 'Nuorodos Antra�t�';
$strBookmarkQuery = 'Sukurti nuoroda SQL-u�klausai';
$strBookmarkThis = 'Sukurti nuorod�';
$strBookmarkView = 'Per�i�ra';
$strBrowse = 'Per�i�r�ti';
$strBzip = '"bzip"';

$strCantLoadMySQL = 'negali u�krauti MySQL proceso,<br />patikrinkite PHP nustatymus.';
$strCantRenameIdxToPrimary = 'Indeks� pervadinti PIRMINIU nepavyko!';
$strCardinality = 'Element� skai�ius';
$strCarriage = 'Gr��imo � eilut�s prad�i� simbolis(CR): \\r';
$strChange = 'Keisti';
$strChangePassword = 'Pakeisti slapta�od�';
$strCheckAll = 'Pa�ym�ti visus(as)';
$strCheckDbPriv = 'Pa�ym�ti duomen� baz�s privilegijas';
$strCheckTable = 'Patikrinti lentel�';
$strColumn = 'Stulpelis';
$strColumnNames = 'Stulpeli� vardai';
$strCompleteInserts = 'Visi�kas �terpimas';
$strConfirm = 'Ar TIKRAI norite atlikti �� veiksm�?';
$strCookiesRequired = 'Sausain�liai(Cookies) turi b�ti priimami.';
$strCopyTable = 'Kopijuoti lentel� � (duomen� baz�<b>.</b>lentel�):';
$strCopyTableOK = 'Letel� %s nukopijuota � %s.';
$strCreate = 'Sukurti';
$strCreateIndex = 'Sukurti indeks� &nbsp;%s&nbsp;stulpeliui(iams)';
$strCreateIndexTopic = 'Sukurti nauj� indeks�';
$strCreateNewDatabase = 'Sukurti nauj� duomen� baz�';
$strCreateNewTable = 'Sukurti nauj� lentel� duomen� baz�je %s';
$strCriteria = 'Kriterijai';

$strData = 'Duomenys';
$strDatabase = 'Duomen� baz� ';
$strDatabaseHasBeenDropped = 'Duomen� baz� %s i�trinta.';
$strDatabases = 'duomen� baz�s';
$strDatabasesStats = 'Duomen� bazi� statistika';
$strDatabaseWildcard = 'Duomen� baz� (galima naudoti pakaitos simbolius):';
$strDataOnly = 'Tik duomenys';
$strDefault = 'Nutylint';
$strDelete = 'Trinti';
$strDeleted = 'Eilut� i�trinta';
$strDeletedRows = 'Eilut�s i�trintos:';
$strDeleteFailed = 'Trynimo klaida!';
$strDeleteUserMessage = 'J�s i�tyn�te vartotoj� %s.';
$strDescending = 'Ma��jimo tvarka';
$strDisplay = 'Atvaizduoti';
$strDisplayOrder = 'Atvaizdavimo tvarka:';
$strDoAQuery = 'Vykdyti "u�klaus� pagal pavyzd�" (pakaitos simbolis: "%")';
$strDocu = 'Dokumentacija';
$strDoYouReally = 'Ar TIKRAI norite ';
$strDrop = 'Panaikinti';
$strDropDB = 'Panaikinti domen� baz� %s';
$strDropTable = 'Panaikinti lentel�';
$strDumpingData = 'Sukurta duomen� kopija lentelei';
$strDynamic = 'dinaminis';

$strEdit = 'Taisyti';
$strEditPrivileges = 'Taisyti privilegijas';
$strEffective = 'Efektyvus';
$strEmpty = 'Panaikinti reik�mes';
$strEmptyResultSet = 'MySQL gra�ino tu��i� rezultat� rinkin� (n�ra eilu�i�).';
$strEnd = 'Pabaiga';
$strEnglishPrivileges = ' Pastaba: MySQL privilegij� pavadinimai pateikiami Angl� kalba';
$strError = 'Klaida';
$strExtendedInserts = 'I�pl�stinis �terpimas';
$strExtra = 'Papildomai';

$strField = 'Laukas';
$strFieldHasBeenDropped = 'Laukas %s i�mestas';
$strFields = 'Kiek lauk�';
$strFieldsEmpty = ' Tu��ia lauk� skai�iaus reik�m�! ';
$strFieldsEnclosedBy = 'Lauk� reik�m�s apskliaustos  simboliais';
$strFieldsEscapedBy = 'Lauk� reik�m�s baigiasi simboliu';
$strFieldsTerminatedBy = 'Lauk� pabaigos �ym�';
$strFixed = 'fiksuotas';
$strFlushTable = 'I�valyti lentel� ("FLUSH")';
$strFormat = 'Formatas';
$strFormEmpty = 'Tr�ksta reik�m�s formoje !';
$strFullText = 'Visus tekstus';
$strFunction = 'Funkcija';

$strGenTime = 'Atlikimo laikas';
$strGo = 'Eiti';
$strGrants = 'Leisti';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'i�pl�sta.';
$strHasBeenCreated = 'sukurta.';
$strHome = 'Pirmas puslapis';
$strHomepageOfficial = 'Oficialus phpMyAdmin tinklapis';
$strHomepageSourceforge = 'Parsisi�sti phpMyAdmin i� Sourceforge tinklapio';
$strHost = 'Prisijungimo adresas';
$strHostEmpty = 'Tu��ias prisijungimo adresas!';

$strIdxFulltext = '"Fulltext" indeksas';
$strIfYouWish = 'Jei pageidaujate pakrauti kelet� lentel�s stulpeli�, sudarykite lauk� s�ra�� atskirt� kabliata�kiais.';
$strIgnore = 'Ignoruoti';
$strIndex = 'Indeksas';
$strIndexes = 'Indeksai';
$strIndexHasBeenDropped = 'Indeksas %s panaikintas';
$strIndexName = 'Indekso vardas&nbsp;:';
$strIndexType = 'Indekso tipas&nbsp;:';
$strInsert = '�terpti';
$strInsertAsNewRow = '�terpti nauj� �ra��';
$strInsertedRows = '�terpt� eilu�i�:';
$strInsertNewRow = '�terpti nauj� eilut�';
$strInsertTextfiles = '�terpti duomenis i� tekstinio failo � lentel�';
$strInstructions = 'Instrukcijos';
$strInUse = '�iuo metu naudojama';
$strInvalidName = '"%s" rezervuotas �odis, J�s negalite �io �od�io naudoti kaip duomen� baz�s, lentel�s arba laukelio vardo.';

$strKeepPass = 'Nekeisti slapta�od�io';
$strKeyname = 'Raktinis �odis';
$strKill = 'Stabdyti proces�';

$strLength = 'Ilgis';
$strLengthSet = 'Ilgis/reik�m�s*';
$strLimitNumRows = 'Eilu�i� skai�ius puslapyje';
$strLineFeed = 'Eilut�s: \\n';
$strLines = 'Eilu�i�';
$strLinesTerminatedBy = 'Eilut�s pabaigos �ym�';
$strLocationTextfile = 'Tekstiniai SQL u�klaus� failai';
$strLogin = '�siregistruoti';
$strLogout = 'I�siregistruoti';
$strLogPassword = 'Slapta�odis:';
$strLogUsername = 'Vartotojo vardas:';

$strModifications = 'Pakeitimai i�saugoti';
$strModify = 'Keisti';
$strModifyIndexTopic = 'Keisti indeks�';
$strMoveTable = 'Perkelti lentel� � (duomen� baz�<b>.</b>lentel�):';
$strMoveTableOK = 'Lentel� %s perkelta � %s.';
$strMySQLReloaded = 'MySQL procesas perkrautas.';
$strMySQLSaid = 'MySQL atsakymas: ';
$strMySQLServerProcess = 'MySQL %pma_s1% procesas serveryje %pma_s2%. �registruotas vartotojas %pma_s3%';
$strMySQLShowProcess = 'Rodyti procesus';
$strMySQLShowStatus = 'Rodyti MySQL aplinkos b�sen�';
$strMySQLShowVars = 'Rodyti MySQL sistemos kintamuosius';

$strName = 'Pavadinimas';
$strNbRecords = '�ra�� skai�ius';
$strNext = 'Sekantis';
$strNo = 'Ne';
$strNoDatabases = 'N�ra duomen� bazi�';
$strNoDropDatabases = '"DROP DATABASE" komandos �vykdyti negalima.';
$strNoFrames = 'phpMyAdmin draugi�kesnis su <b>r�melius</b> palaikan�iomis nar�ykl�mis.';
$strNoIndex = 'Neapra�yti indeksai!';
$strNoIndexPartsDefined = 'Neapra�ytos indekso dalys!';
$strNoModification = 'N�ra pakeitim�';
$strNone = 'N�ra';
$strNoPassword = 'N�ra slapta�od�io';
$strNoPrivileges = 'N�ra privilegij�';
$strNoQuery = 'N�ra SQL u�klausos!';
$strNoRights = 'Neturite pakankamai teisi�';
$strNoTablesFound = 'Duomen� baz�je nerasta lenteli�.';
$strNotNumber = '�veskite skai�i�!';
$strNotValidNumber = ' netinkamas eilut�s numeris!';
$strNoUsersFound = 'Nerasta vartotojo(�).';
$strNull = 'Null';

$strOftenQuotation = 'Da�nai kartojasi kabut�s. Pasirinktinai rei�kia, kad tik  char ir varchar laukai yra u�daryti kabut�mis.';
$strOptimizeTable = 'Optimizuoti lentel�';
$strOptionalControls = 'Pasirinktinai. Kontroliuojama kaip skaitoma, ra�oma specialiuosius simbolius.';
$strOptionally = 'Pasirinktinai';
$strOr = 'Arba';
$strOverhead = 'Perteklinis';

$strPartialText = 'Daliniai tekstai';
$strPassword = 'Slapta�odis';
$strPasswordEmpty = 'Tu��ias slapta�odis!';
$strPasswordNotSame = 'Slapta�od�iai nesutampa!';
$strPHPVersion = 'PHP versija';
$strPmaDocumentation = 'phpMyAdmin\'o dokumentacija';
$strPmaUriError = 'Reikia konfig�raciniame faile �ra�yti <tt>$cfg[\'PmaAbsoluteUri\']</tt> reik�m�!';
$strPos1 = 'Prad�ia';
$strPrevious = 'Pra�j�s';
$strPrimary = 'Pirminis';
$strPrimaryKey = 'Pirminis raktas';
$strPrimaryKeyHasBeenDropped = 'Panaikintas pirminis raktas';
$strPrimaryKeyName = 'Pirminio rakto pavadinimas turi b�ti "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>yra vienintelis</b> pirminio rakto tipas!)';
$strPrintView = 'Atspausdinti strukt�ra';
$strPrivileges = 'Privilegijos';
$strProperties = 'Nustatymai';

$strQBE = 'U�klausa pagal pavyzd�';
$strQBEDel = 'Pakei�iant';
$strQBEIns = '�terpiant';
$strQueryOnDb = 'SQL-u�klausa duomen� baz�je <b>%s</b>:';

$strRecords = 'Viso �ra��:';
$strReloadFailed = 'MySQL proces� perkrauti nepavyko.';
$strReloadMySQL = 'Perkrauti MySQL proces�';
$strRememberReload = 'Neu�mir�kite perkrauti server�.';
$strRenameTable = 'Pervadinti lentel� �';
$strRenameTableOK = 'Lentel� %s pervadinta � %s';
$strRepairTable = 'Taisyti lentel�';
$strReplace = 'Pakeisti';
$strReplaceTable = 'Pakeisti lentel�s turin� failo duomenimis ';
$strReset = 'Nustatyti � pradin� b�sen�';
$strReType = '�veskite dar kart�';
$strRevoke = 'Panaikinti';
$strRevokeGrant = 'Panaikinti GRANT privilegij�';
$strRevokeGrantMessage = 'J�s panaikinote GRANT privilegij� %s';
$strRevokeMessage = 'J�s panaikinote privilegijas %s';
$strRevokePriv = 'Panaikinti privilegijas';
$strRowLength = 'Eilut�s ilgis';
$strRows = 'Eilut�s';
$strRowsFrom = 'eilu�i� pradedant nuo';
$strRowSize = 'Eilut�s dydis';
$strRowsModeHorizontal = 'horizontaliai';
$strRowsModeOptions = 'i�d�stant  %s pakartoti antra�tes kas %s �ra��';
$strRowsModeVertical = 'vertikaliai';
$strRowsStatistic = 'Eilu�i� statistika';
$strRunning = 'adresu %s';
$strRunQuery = 'Vykdyti u�klaus�';
$strRunSQLQuery = 'Vykdyti SQL u�klaus�(as) duomen� baz�je %s';

$strSave = 'I�saugoti';
$strSelect = 'I�rinkti';
$strSelectADb = 'Pasirinkti duomen� baz�';
$strSelectAll = 'I�rinkti visas(us)';
$strSelectFields = 'Pasirinkti laukus (nors vien�)';
$strSelectNumRows = 'u�klaus� vykdoma';
$strSend = 'I�saugoti � fail�';
$strServerChoice = 'Pasirinkti server�';
$strServerVersion = 'Serverio versija';
$strSetEnumVal = 'Jeigu laukelio tipas yra "enum" arba "set", tuomet duomen� reik�mes reikia �vesti naudojant �� format�: \'a\',\'b\',\'c\'...<br />. Jeigu jums reikia �ra�yti de�inin� ��amb�j� br�k�n� ("\") arba kabutes("\'"), tuomet prie� �ios simbolius reikia papildomo de�ininio ��ambaus br�k�nio (pavyzd�iui: \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Rodyti';
$strShowAll = 'Rodyti visk�';
$strShowCols = 'Rodyti stulpelius';
$strShowingRecords = 'Rodomi �ra�ai';
$strShowPHPInfo = 'Rodyti PHP informacij�';
$strShowTables = 'Rodyti lentel�s';
$strShowThisQuery = ' Rodyti �i� u�klaus� v�l ';
$strSingly = '(pavieniui)';
$strSize = 'Dydis';
$strSort = 'R��iuoti';
$strSpaceUsage = 'Vietos naudojimas';
$strSQLQuery = 'SQL- u�klausa';
$strStartingRecord = 'Pirma eilut�';
$strStatement = 'Parametrai';
$strStrucCSV = 'Duomenys CSV formatu';
$strStrucData = 'Strukt�ra ir duomenys';
$strStrucDrop = 'Panaikinti-�terpti lentel�';
$strStrucExcelCSV = 'Duomenys ekselio CSV formatu';
$strStrucOnly = 'Tik strukt�r�';
$strSubmit = 'Si�sti';
$strSuccess = 'J�s� SQL-u�klausa s�kmingai �vykdyta';
$strSum = 'Sumos';

$strTable = 'lentel� ';
$strTableComments = 'Lentel�s komentarai';
$strTableEmpty = 'Tu��ias lentel�s vardas!';
$strTableHasBeenDropped = 'Lentel� %s panaikinta';
$strTableHasBeenEmptied = 'Lentel�s reik�m�s %s i�tu�tintos';
$strTableHasBeenFlushed = 'Lentel�s buferis  %s i�valytas';
$strTableMaintenance = 'Lentel�s diagnostika';
$strTables = '%s lentel�(s)';
$strTableStructure = 'Sukurta duomen� strukt�ra lentelei';
$strTableType = 'Lentel�s tipas';
$strTextAreaLength = ' Tai yra jo ilgis,<br /> �is laukelis neredaguojamas ';
$strTheContent = 'J�s� failo turinys �terptas.';
$strTheContents = 'Failo turinys �terpus panaikina i�rinktos lentel�s ar stulpelio turin�, bet i�lieka unikal�s ir pirminiai indeksai.';
$strTheTerminator = 'Lauk� pabaigos �ym�.';
$strTotal = ' i� viso ';
$strType = 'Tipas';

$strUncheckAll = 'Nepa�ym�ti visus(as)';
$strUnique = 'Unikalus';
$strUnselectAll = 'Nepa�ym�ti visus(as)';
$strUpdatePrivMessage = 'J�s pakeit�te privilegijas  %s.';
$strUpdateProfile = 'Papildyti profil�:';
$strUpdateProfileMessage = 'Profilis papildytas.';
$strUpdateQuery = 'Atnaujinti u�klaus�';
$strUsage = 'I�naudota';
$strUseBackquotes = 'Lenteli� ir lauk� vardams naudoti �ias kabutes ` `';
$strUser = 'Vartotojas';
$strUserEmpty = 'Tu��ias vartotojo vardas!';
$strUserName = 'Vartotojo vardas';
$strUsers = 'Vartotojai';
$strUseTables = 'Naudoti lenteles';

$strValue = 'Reik�m�';
$strViewDump = 'Per�i�r�ti lentel�s strukt�ros dump�';
$strViewDumpDB = 'Sukurti, per�i�r�ti duomen� baz�s dump�';

$strWelcome = 'Sveiki atvyk� � %s';
$strWithChecked = 'Pasirinktas lenteles:';
$strWrongUser = 'Neteisingas vartotojo vardas arba slapta�odis. Pri�jimas u�draustas.';

$strYes = 'Taip';

$strZip = '"zip"';

//to translate:
$strReferentialIntegrity = 'Check referential integrity:';  //to translate
$strLinksTo = 'Links to';  //to translate
$strExport = 'Export';  //to translate
$strOperations = 'Operations';  //to translate
$strExportToXML = 'Export to XML format'; //to translate
$strOptions = 'Options';  //to translate
?>
