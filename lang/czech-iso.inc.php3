<?php
/* $Id$ */
/* By Michal Cihar <nijel at users.sourceforge.net> */

$charset = 'iso-8859-2';
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = '.';
$byteUnits = array('Bajt�', 'KB', 'MB', 'GB');

$day_of_week = array('Ned�le', 'Pond�l�', '�ter�', 'St�eda', '�tvrtek', 'P�tek', 'Sobota');
$month = array('ledna', '�nora', 'b�ezna', 'dubna', 'kv�tna', '�ervna', '�ervence', 'srpna', 'z���', '��jna', 'listopadu', 'prosince');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%a %e. %b %Y, %H:%M';


$strAccessDenied = 'P��stup odep�en';
$strAction = 'Akce';
$strAddDeleteColumn = 'P�idat/Smazat sloupec';
$strAddDeleteRow = 'P�idat/Smazat ��dek s podm�nkou';
$strAddNewField = 'P�idat nov� sloupec';
$strAddPriv = 'P�idat nov� privilegium';
$strAddPrivMessage = 'Opr�vn�n� bylo p�id�no.';
$strAddSearchConditions = 'P�idat vyhled�vac� parametry (obsah dotazu po p��kazu "WHERE"):';
$strAddToIndex = 'P�idat do indexu  &nbsp;%s&nbsp;sloupc�';
$strAddUser = 'P�idat nov�ho u�ivatele';
$strAddUserMessage = 'U�ivatel byl p�id�n.';
$strAffectedRows = 'Ovlivn�n� ��dky:';
$strAfter = 'Po %s';
$strAfterInsertBack = 'Zp�t';
$strAfterInsertNewInsert = 'Vlo�it dal�� ��dek';
$strAll = 'V�echno';
$strAlterOrderBy = 'Zm�nit po�ad� tabulky podle';
$strAnalyzeTable = 'Analyzovat tabulku';
$strAnd = 'a';
$strAnIndex = 'K&nbsp;tabulce %s byl p�id�n index';
$strAny = 'Jak�koliv';
$strAnyColumn = 'Jak�koliv sloupec';
$strAnyDatabase = 'Jak�koliv datab�ze';
$strAnyHost = 'Jak�koliv po��ta�';
$strAnyTable = 'Jak�koliv tabulka';
$strAnyUser = 'Jak�koliv u�ivatel';
$strAPrimaryKey = 'V&nbsp;tabulce %s byl vytvo�en prim�rn� kl��';
$strAscending = 'Vzestupn�';
$strAtBeginningOfTable = 'Na za��tku tabulky';
$strAtEndOfTable = 'Na konci tabulky';
$strAttr = 'Vlastnosti';

$strBack = 'Zp�t';
$strBinary = ' Bin�rn� ';
$strBinaryDoNotEdit = ' Bin�rn� - neupravujte ';
$strBookmarkDeleted = 'Polo�ka byla smaz�na z&nbsp;obl�ben�ch.';
$strBookmarkLabel = 'N�zev';
$strBookmarkQuery = 'Obl�ben� SQL dotaz';
$strBookmarkThis = 'P�idat tento SQL dotaz do obl�ben�ch';
$strBookmarkView = 'Jen zobrazit';
$strBrowse = 'Proj�t';
$strBzip = '"zabzipov�no"';

$strCantLoadMySQL = 'nelze nahr�t roz���en� pro MySQL,<br />pros�m zkontrolujte nastaven� PHP.';
$strCantRenameIdxToPrimary = 'Index nem��ete p�ejmenovat na "PRIMARY"!';
$strCardinality = 'Mohutnost';
$strCarriage = 'N�vrat voz�ku (CR): \\r';
$strChange = 'Zm�nit';
$strChangePassword = 'Zm�nit heslo';
$strCheckAll = 'Za�krtnout v�e';
$strCheckDbPriv = 'Zkontrolovat opr�vn�n� pro datab�zi';
$strCheckTable = 'Zkontrolovat tabulku';
$strColumn = 'Sloupec';
$strColumnNames = 'N�zvy sloupc�';
$strCompleteInserts = 'Upln� inserty';
$strConfirm = 'Opravdu chcete toto prov�st?';
$strCookiesRequired = 'B�hem tohoto kroku mus�te m�t povoleny cookies.';
$strCopyTable = 'Kop�rovat tabulku do (datab�ze<b>.</b>tabulka):';
$strCopyTableOK = 'Tabulka %s byla zkop�rov�na do %s.';
$strCreate = 'Vytvo�it';
$strCreateIndex = 'Vytvo�it index na&nbsp;%s&nbsp;sloupc�ch';
$strCreateIndexTopic = 'Vytvo�it nov� index';
$strCreateNewDatabase = 'Vytvo�it novou datab�zi';
$strCreateNewTable = 'Vytvo�it novou tabulku v&nbsp;datab�zi %s';
$strCriteria = 'Podm�nka';

$strData = 'Data';
$strDatabase = 'Datab�ze ';
$strDatabaseHasBeenDropped = 'Datab�ze %s byla zru�ena.';
$strDatabases = 'datab�ze';
$strDatabasesStats = 'Statistiky datab�ze';
$strDatabaseWildcard = 'Datab�ze (�ol�ky povoleny):';
$strDataOnly = ' Jen data';
$strDefault = 'V�choz�';
$strDelete = 'Smazat';
$strDeleted = '��dek byl smaz�n';
$strDeletedRows = 'Smazan� ��dky:';
$strDeleteFailed = 'Smaz�n� selhalo!';
$strDeleteUserMessage = 'Byl smaz�n u�ivatel %s.';
$strDescending = 'Sestupn�';
$strDisplay = 'Zobrazit';
$strDisplayOrder = 'Se�adit podle:';
$strDoAQuery = 'Prov�st "dotaz podle p��kladu" (�ol�k: "%")';
$strDocu = 'Dokumentace';
$strDoYouReally = 'Opravdu si p�ejete vykonat p��kaz';
$strDrop = 'Odstranit';
$strDropDB = 'Odstranit datab�zi %s';
$strDropTable = 'Smazat tabulku';
$strDumpingData = 'Dumpuji data pro tabulku';
$strDynamic = 'dynamick�';

$strEdit = 'Upravit';
$strEditPrivileges = 'Upravit opr�vn�n�';
$strEffective = 'Efektivn�';
$strEmpty = 'Vypr�zdnit';
$strEmptyResultSet = 'MySQL vr�til pr�zdn� v�sledek (tj. nulov� po�et ��dk�).';
$strEnd = 'Konec';
$strEnglishPrivileges = 'Pozn�mka: n�zvy opr�vn�n� v&nbsp;MySQL jsou uv�d�ny anglicky';
$strError = 'Chyba';
$strExtendedInserts = 'Roz���en� inserty';
$strExtra = 'Extra';

$strField = 'Sloupec';
$strFieldHasBeenDropped = 'Sloupec %s byl odstran�n';
$strFields = 'Po�et sloupc�';
$strFieldsEmpty = ' Nebyl zad�n po�et sloupc�! ';
$strFieldsEnclosedBy = 'N�zvy sloupc� uzav�en� do';
$strFieldsEscapedBy = 'N�zvy sloupc� escapov�ny';
$strFieldsTerminatedBy = 'Sloupce odd�len�';
$strFixed = 'pevn�';
$strFlushTable = 'Vypr�zdnit vyrovn�vac� pam� pro tabulku ("FLUSH")';
$strFormat = 'Form�t';
$strFormEmpty = 'Chyb�j�c� hodnota ve formul��i!';
$strFullText = 'Cel� texty';
$strFunction = 'Funkce';

$strGenTime = 'Vygenerov�no';
$strGo = 'Prove�';
$strGrants = 'Opr�vn�n�';
$strGzip = '"zagzipov�no"';

$strHasBeenAltered = 'byla zm�n�na.';
$strHasBeenCreated = 'byla vytvo�ena.';
$strHome = '�vod';
$strHomepageOfficial = 'Ofici�ln� str�nka phpMyAdmina';
$strHomepageSourceforge = 'Nov� str�nka phpMyAdmina';
$strHost = 'Po��ta�';
$strHostEmpty = 'Jm�no po��ta�e je pr�zdn�!';

$strIdxFulltext = 'Fulltext';
$strIfYouWish = 'Pokud si p�eje� nat�hnout jenom ur�it� sloupce z tabulky, specifikuj je jako seznam sloupc� odd�len�ch ��rkou.';
$strIgnore = 'Ignorovat';
$strIndex = 'Index';
$strIndexes = 'Indexy';
$strIndexHasBeenDropped = 'Index %s byl odstran�n';
$strIndexName = 'Jm�no indexu&nbsp;:';
$strIndexType = 'Typ indexu&nbsp;:';
$strInsert = 'Vlo�it';
$strInsertAsNewRow = 'Vlo�it jako nov� ��dek';
$strInsertedRows = 'Vlo�eno ��dk�:';
$strInsertNewRow = 'Vlo�it nov� ��dek';
$strInsertTextfiles = 'Vlo�it textov� soubory do tabulky';
$strInstructions = 'Instrukce';
$strInUse = 'pr�v� se pou��v�';
$strInvalidName = '"%s" je rezervovan� slovo a proto ho nem��ete po��t jako jm�no datab�ze/tabulky/sloupce.';

$strKeepPass = 'Nem�nit heslo';
$strKeyname = 'Kl��ovy n�zev';
$strKill = 'Zab�t';

$strLength = 'D�lka';
$strLengthSet = 'D�lka/Mno�ina*';
$strLimitNumRows = 'z�znamu na str�nku';
$strLineFeed = 'Ukon�en� ��dku (Linefeed): \\n';
$strLines = '��dek';
$strLinesTerminatedBy = '��dky ukon�en�';
$strLocationTextfile = 'Um�st�n� textov�ho souboru';
$strLogin = 'P�ihl�en�';
$strLogout = 'Odhl�sit se';
$strLogPassword = 'Heslo:';
$strLogUsername = 'Jm�no:';

$strModifications = 'Zm�ny byly ulo�eny';
$strModify = '�pravy';
$strModifyIndexTopic = 'Upravit index';
$strMoveTable = 'P�esunout tabulku do (datab�ze<b>.</b>tabulka):';
$strMoveTableOK = 'Tabulka %s byla p�esunuta do %s.';
$strMySQLReloaded = 'MySQL znovu na�teno.';
$strMySQLSaid = 'MySQL hl�s�: ';
$strMySQLServerProcess = 'MySQL %pma_s1% spu�t�n� na %pma_s2%, p�ihl�en %pma_s3%';
$strMySQLShowProcess = 'Zobrazit procesy';
$strMySQLShowStatus = 'Uk�zat MySQL informace o&nbsp;b�hu';
$strMySQLShowVars = 'Uk�zat MySQL syst�mov� prom�nn�';

$strName = 'N�zev';
$strNbRecords = '��dk�';
$strNext = 'Dal��';
$strNo = 'Ne';
$strNoDatabases = '��dn� datab�ze';
$strNoDropDatabases = 'P��kaz "DROP DATABASE" je vypnut�.';
$strNoFrames = 'phpMyAdmin se l�pe pou��v� v&nbsp;prohl��e�i podporuj�c�m r�my ("FRAME").';
$strNoIndex = '��dn� index nebyl definov�n!';
$strNoIndexPartsDefined = '��dn� ��st indexu nebyla definov�na!';
$strNoModification = '��dn� zm�na';
$strNone = '��dn�';
$strNoPassword = '��dn� heslo';
$strNoPrivileges = '��dn� opr�vn�n�';
$strNoQuery = '��dn� SQL dotaz!';
$strNoRights = 'Nem�te dostate�n� pr�va na proveden� t�to akce!';
$strNoTablesFound = 'V&nbsp;datab�zi nebyla nalezena ani jedna tabulka.';
$strNotNumber = 'Toto nen� ��slo!';
$strNotValidNumber = ' nen� platn� ��slo ��dku!';
$strNoUsersFound = '��dn� u�ivatel nenalezen.';
$strNull = 'Nulov�';

$strOftenQuotation = '�asto uvozuj�c� znaky. Voliteln� znamen�, �e pouze polo�ky u kter�ch je to nutn� (obvykle typu CHAR a VARCHAR) jsou uzav�eny do uzav�rac�ch znak�.';
$strOptimizeTable = 'Optimalizovat tabulku';
$strOptionalControls = 'Voliteln�. Ur�uje jak zapisovat nebo ��st speci�ln� znaky.';
$strOptionally = 'Voliteln�';
$strOr = 'nebo';
$strOverhead = 'Nav�c';

$strPartialText = 'Zkr�cen� texty';
$strPassword = 'Heslo';
$strPasswordEmpty = 'Heslo je pr�zdn�!';
$strPasswordNotSame = 'Hesla nejsou stejn�!';
$strPHPVersion = 'Verze PHP';
$strPmaDocumentation = 'Dokumentace phpMyAdmina';
$strPmaUriError = 'Parametr <tt>$cfg[\'PmaAbsoluteUri\']</tt> MUS� b�t nastaveno v&nbsp;konfigura�n�m souboru!';
$strPos1 = 'Za��tek';
$strPrevious = 'P�edchoz�';
$strPrimary = 'Prim�rn�';
$strPrimaryKey = 'Prim�rn� kl��';
$strPrimaryKeyHasBeenDropped = 'Prim�rn� kl�� byl odstran�n';
$strPrimaryKeyName = 'Jm�no prim�rn�ho kl��e mus� b�t "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mus�</b> b�t jm�no <b>pouze</b> prim�rn�ho kl��e!)';
$strPrintView = 'N�hled k vyti�t�n�';
$strPrivileges = 'Opr�vn�n�';
$strProperties = 'Vlastnosti';

$strQBE = 'Dotaz podle p��kladu';
$strQBEDel = 'p�idat';
$strQBEIns = 'smazat';
$strQueryOnDb = 'SQL dotaz na datab�zi <b>%s</b>:';

$strRecords = 'Z�znam�';
$strReferentialIntegrity = 'Zkontrolovat integritu odkaz�:';
$strReloadFailed = 'Znovuna�ten� MySQL selhalo.';
$strReloadMySQL = 'Znovuna�ten� MySQL';
$strRememberReload = 'Nezapome�te znovu na��st server.';
$strRenameTable = 'P�ejmenovat tabulku na';
$strRenameTableOK = 'Tabulka %s byla p�ejmenov�na na %s';
$strRepairTable = 'Opravit tabulku';
$strReplace = 'P�epsat';
$strReplaceTable = 'P�epsat data tabulky souborem';
$strReset = 'P�vodn� (reset)';
$strReType = 'Napsat znovu';
$strRevoke = 'Zru�it';
$strRevokeGrant = 'Zru�it povolen� p�id�lovat pr�va';
$strRevokeGrantMessage = 'Bylo zru�eno opr�vn�n� p�id�lovat pr�va pro %s';
$strRevokeMessage = 'Byla zru�ena pr�va pro %s';
$strRevokePriv = 'Zru�it pr�va';
$strRowLength = 'D�lka ��dku';
$strRows = '��dk�';
$strRowsFrom = '��dk� za��naj�c� od';
$strRowSize = ' Velikost ��dku ';
$strRowsModeVertical = 'svisl�m';
$strRowsModeHorizontal = 'vodorovn�m';
$strRowsModeOptions = 've %s re�imu a opakovat hlavi�ky po %s ��dc�ch.';
$strRowsStatistic = 'Statistika ��dk�';
$strRunning = 'na %s';
$strRunQuery = 'Prov�st dotaz';
$strRunSQLQuery = 'Spustit SQL dotaz(y) na datab�zi %s';

$strSave = 'Ulo�';
$strSelect = 'Vybrat';
$strSelectADb = 'Pros�m vyberte datab�zi';
$strSelectAll = 'Vybrat v�e';
$strSelectFields = 'Zvolte sloupec (alespo� jeden):';
$strSelectNumRows = 'v&nbsp;dotazu';
$strSend = 'Poslat';
$strServerChoice = 'V�b�r serveru';
$strServerVersion = 'Verze MySQL';
$strSetEnumVal = 'Pokud je sloupec typu "enum" nebo "set", zad�vejte hodnoty v&nbsp;n�sleduj�c�m form�tu: \'a\',\'b\',\'c\'...<br />Pokud pot�ebujete zadat zp�tn� lom�tko ("\") nebo jednoduch� uvozovky ("\'") mezi t�mito hodnotami, napi�te p�ed n� zp�tn� lom�tko (p��klad: \'\\\\xyz\' nebo \'a\\\'b\').';
$strShow = 'Zobrazit';
$strShowAll = 'Zobrazit v�e';
$strShowCols = 'Zobrazit sloupce';
$strShowingRecords = 'Zobrazeny z�znamy';
$strShowPHPInfo = 'Zobrazit informace o&nbsp;PHP';
$strShowTables = 'Zobrazit tabulky';
$strShowThisQuery = 'Zobrazit zde tento dotaz znovu';
$strSingly = '(po jednom)';
$strSize = 'Velikost';
$strSort = '�adit';
$strSpaceUsage = 'Vyu�it� m�sta';
$strSQLQuery = 'SQL-dotaz';
$strStartingRecord = 'Po��te�n� z�znam';
$strStatement = '�daj';
$strStrucCSV = 'CSV data';
$strStrucData = 'Strukturu a data';
$strStrucDrop = 'P�idej \'DROP TABLE\'';
$strStrucExcelCSV = 'CSV data pro Ms Excel';
$strStrucOnly = 'Pouze strukturu';
$strSubmit = 'Ode�li';
$strSuccess = 'Tv�j SQL-dotaz byl �sp�n� vykon�n';
$strSum = 'Celkem';

$strTable = 'Tabulka ';
$strTableComments = 'Koment��e k tabulce';
$strTableEmpty = 'Jm�no tabulky je pr�zdn�!';
$strTableHasBeenDropped = 'Tabulka %s byla odstran�na';
$strTableHasBeenEmptied = 'Tabulka %s byla vypr�zdn�na';
$strTableHasBeenFlushed = 'Vyrovn�vac� pam� pro tabulku %s byla vypr�zdn�na';
$strTableMaintenance = ' �dr�ba tabulky ';
$strTables = '%s tabulek';
$strTableStructure = 'Struktura tabulky';
$strTableType = 'Typ tabulky';
$strTextAreaLength = 'Tento sloupec mo�n� nep�jde <br />(kv�li d�lce) upravit ';
$strTheContent = 'Obsah souboru byl vlo�en';
$strTheContents = 'Obsah souboru p�ep��e obsah zvolen� tabulky v t�ch ��dc�ch, kde je stejn� prim�rn� nebo unik�tn� kl��.';
$strTheTerminator = 'Sloupce jsou odd�leny t�mto znakem.';
$strTotal = 'celkem';
$strType = 'Typ';

$strUncheckAll = 'Od�krtnout v�e';
$strUnique = 'Unik�tn�';
$strUnselectAll = 'Odzna�it v�e';
$strUpdatePrivMessage = 'Byla aktualizovana opr�vn�n� pro %s.';
$strUpdateProfile = 'Zm�ny p��stupu:';
$strUpdateProfileMessage = 'P��stup byl zm�n�n.';
$strUpdateQuery = 'Aktualizovat dotaz';
$strUsage = 'Pou��v�';
$strUseBackquotes = 'Pou��t zp�tn� uvozovky u&nbsp;jmen tabulek a sloupc�';
$strUser = 'U�ivatel';
$strUserEmpty = 'Jm�no u�ivatele je pr�zdn�!';
$strUserName = 'Jm�no u�ivatele';
$strUsers = 'U�ivatel�';
$strUseTables = 'Pou��t tabulky';

$strValue = 'Hodnota';
$strViewDump = 'Uka� v�pis (dump) tabulky';
$strViewDumpDB = 'Uka� v�pis (dump) datab�ze';

$strWelcome = 'V�tej v %s';
$strWithChecked = 'Za�krtnut�:';
$strWrongUser = '�patn� u�ivatelsk� jm�no/heslo. P��stup odep�en.';

$strYes = 'Ano';

$strZip = '"zazipov�no"';

// To translate
$strLinksTo = 'Links to';  //to translate
$strExport = 'Export';  //to translate
$strOperations = 'Operations';  //to translate
$strExportToXML = 'Export to XML format'; //to translate
$strOptions = 'Options';  //to translate
?>
