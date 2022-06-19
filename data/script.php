<?php
/**
 *
 * Snapshots taken on 9th July 2022
 * export-tokenholders-for-contract-0xb47e3cd837ddf8e4c57f05d70ab865de6e193bbb.csv - cryptopunks contract
 * export-tokenholders-for-nft-contract-0xb7f7f6c52f2e2fdb1963eab30438024864c313f6.csv wrapped punks
 */
$holders = array();

if (($handle = fopen("export-tokenholders-for-contract-0xb47e3cd837ddf8e4c57f05d70ab865de6e193bbb.csv", "r")) !== false) {
    $cols = fgetcsv($handle, 1000, ',');
    while (($data = fgetcsv($handle, 1000, ',')) !== false) {
        //print_r($data);
        if ($data[0]=="0xb7f7f6c52f2e2fdb1963eab30438024864c313f6") continue; // ignore wrapped, do it separate
        array_push($holders, $data[0]);
    }
    fclose($handle);
}

if (($handle = fopen("export-tokenholders-for-nft-contract-0xb7f7f6c52f2e2fdb1963eab30438024864c313f6.csv", "r")) !== false) {
    $cols = fgetcsv($handle, 1000, ',');
    while (($data = fgetcsv($handle, 1000, ',')) !== false) {
        //print_r($data);
        //if ($data[0]=="0xb7f7f6c52f2e2fdb1963eab30438024864c313f6") continue; // ignore wrapped
        array_push($holders, $data[0]);
    }
    fclose($handle);
}
echo(json_encode($holders, JSON_PRETTY_PRINT));


